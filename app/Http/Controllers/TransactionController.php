<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Merchandise;
use App\Models\Transaction;

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
				$user = User::where('stock', 0);
        if($user){
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
					$i = 5;
					do {
						if($data){
						$user = User::find($request->user_id);
						$user->update([
								'points' => $i++
							]);

							$condition = false;
						}
					} while ($condition);

					return redirect()->route('transaction.index')->with('success', 'Data Berhasil Di Input');
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
