<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gift;
class GiftController extends Controller
{
    public function index()
		{
				$gift = Gift::get();
				return view('gift.index', ['gift' => $gift]);
		}
}
