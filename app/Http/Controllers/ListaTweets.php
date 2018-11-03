<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ListaTweets extends Controller
{
    function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $usuario = Auth::user();
      $tweets = $usuario->tweets()->with('autor')->paginate(5);
      //->orderBy('id', 'desc')->take(10)->get();
      return view('index', compact('tweets'));
    }
}




/*
use App\Tweet;

class Front extends Controller
{

	public function home()
	{
		$tweets = Tweet::with('autor')->paginate(6);
    //->orderBy('id', 'desc')->take(10)->get();
		return view('principal', compact('tweets'));
	}

}*/
