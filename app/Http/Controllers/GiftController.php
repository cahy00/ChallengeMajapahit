<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gift;
class GiftController extends Controller
{
    public function index(Request $request)
		{
				$gift = Gift::first()->paginate();
				$keyword = $request->get('keyword');
				if($keyword){
					$gift = Gift::where('name', 'LIKE', '%' . $keyword . '%')->paginate(10);
				}
				return view('gift.index', ['gift' => $gift]);
		}
}
