<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;
use Validator;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Merchandise::first()->paginate(10);
				return view('merchandise.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merchandise.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
				$validator = Validator::make($request->all(), [
					'name'  => 'required',
					'price' => 'required',
					'stock' => 'required',
				]);

				if($validator->fails()){
					return redirect()->back()->withErrors($validator)->withInput();
				}

				$data = Merchandise::create([
					'name'  => $request->name,
					'price' => $request->price,
					'stock' => $request->stock,
				]);
				
				return redirect()->route('merchandise.index')->with('success', 'Data Berhasil Di Input');
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
				$merchandise = Merchandise::findOrFail($id);
        return view('merchandise.edit', compact('merchandise'));
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
				$validator = Validator::make($request->all(), [
					'name'  => 'required',
					'price' => 'required',
					'stock' => 'required',
				]);

				if($validator->fails()){
					return redirect()->back()->withErrors($validator)->withInput();
				}
				
				$merchandise = Merchandise::findOrFail($id);
				$merchandise->update([
					'name'  => $request->name,
					'price' => $request->price,
					'stock' => $request->stock
				]);

				return redirect()->route('merchandise.index')->with('success', 'Data Berhasil Di Edit');

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
