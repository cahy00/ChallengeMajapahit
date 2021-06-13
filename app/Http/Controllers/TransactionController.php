<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Merchandise;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				$data = Transaction::first()->paginate(10);
        return view('transaction.index', compact('data'));

				// aktifkan code berikut untuk penggunaan API
				// return response()->json([
				// 	'message' => 'Data Ada',
				// 	'data' => $data
				// ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
				$user = User::get(); 
				$merchandise = Merchandise::get(); 
        return view('transaction.create', compact('user', 'merchandise'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {		
				$a = DB::table('merchandises')->select('stock')->where('stock', '>=', 1)->get();
				// $a = Merchandise::get();
				// $a = $request->merchandise->stock;
        if(!$a){
					return redirect()->route('transaction.index')->with('failed', 'Gagal Transaksi Stock tidak cukup');
				}else{
					$data = new Transaction;
					$data->user_id 				= $request->user_id;
					$data->merchandise_id = $request->merchandise_id;
					if($data){
						$data->status = 'success';
					}else{
						$data->status = 'failed';
					}
					$data->save();

					$condition = true;
					$count = Transaction::where('user_id', $request->user_id)->count();
					$i = 5;
					$user = User::find($request->user_id);
					$user->update([
						'points' => $count * $i
					]);
					

					return redirect()->route('transaction.index')->with('success', 'Data Berhasil Di Input');

					// aktifkan code berikut untuk penggunaan API
					// return response()->json([
					// 	'message' => 'Data Ada',
					// 	'data' => $data
					// ]);
				}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
