<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
		$keyword = DB::table('keywords')->first();
		dd($keyword);
		return view('welcome');
	}
}
