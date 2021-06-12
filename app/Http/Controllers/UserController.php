<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
				$keyword = $request->get('keyword');
				$user    = User::first()->paginate(10);
				if($request->get('keyword')){
					$user = User::where('name', 'LIKE', '%' . $keyword . '%')->paginate(10);
				}
        return view('user.index', \compact('user'));

				//aktifkan code berikut untuk penggunaan API
				// return response()->json([
				// 	'message' => 'Data Ada',
				// 	'data' => $user
				// ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
					'name'     => 'required|string|max:30',
					'email'    => 'required|email|unique:users',
					'password' => 'required|min:6|max:30',
					'points'   => 'sometimes',
				]);

				if($validator->fails())
				{
						return redirect()->back()->withErrors($validator)->withInput();
				}
				
				$user = new User;
				$user->name = $request->name;
				$user->email = $request->email;
				$user->password = \Hash::make($request->password);
				$user->points = 0;
				$user->save();

				return redirect()->route('user.index')->with('success', 'Data Berhasil Di Input');

				//aktifkan code berikut untuk penggunaan API
				// return response()->json([
				// 	'message' => 'Data Ada',
				// 	'data' => $user
				// ]);
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
				$user = User::findOrFail($id);
        return view('user.edit', ['user' => $user]);
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
				'name'     => 'required|string|max:30',
				'email'    => 'sometimes|email',
			]);

			if($validator->fails())
			{
					return redirect()->back()->withErrors($validator)->withInput();
			}

        $user = User::findOrFail($id);
				$user->update([
					'email' => $request->email,
					'name'  => $request->name
				]);

				return redirect()->route('user.index')->with('success', 'Data Berhasil di Update');

				//aktifkan code berikut untuk penggunaan API
				// return response()->json([
				// 	'message' => 'Data Ada',
				// 	'data' => $user
				// ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
				$user->delete();

				return redirect()->route('user.index')->with('success', 'Data Berhasil di Hapus');

    }

}
