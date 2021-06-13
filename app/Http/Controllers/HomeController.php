<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Merchandise;
use App\Models\Transaction;

class HomeController extends Controller
{
    public function index()
		{
			$user = User::get();
			$merchandise = Merchandise::get();
			$transaction = Transaction::get();
			return view('home.index', compact('user', 'merchandise', 'transaction'));
		}
}
