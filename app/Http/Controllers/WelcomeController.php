<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class WelcomeController extends Controller
{
	public function index(){
		if (Session::get('client_code')){
			Session::put('client_code', '');
		}
        return view('welcome');
    }

	public function getClientCode($client_code){
		$client = User::where('user_code', '=', $client_code)->where('is_coreadmin', '=', '1')->get();
		if (count($client)==1){
			$cid = User::where('user_code', '=', $client_code)->first()->id;
			$education_id = User::where('user_code', '=', $client_code)->first()->education_id;
			Session::put('client_code', $client_code);
			Session::put('cid', $cid);
			Session::put('education_id', $education_id);
			return view('auth.login');
		}else{
			return '<h1>School does not exist</h1>';
		}
	}
}
