<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class loginController extends BaseController
{
    public function login(Request $req) {
    	$username = $req->input('username');
    	$password = $req->input('password');
    	return redirect('homeCustomer');
    }
    public function loginCompany(Request $req) {
    	$username = $req->input('username');
    	$password = $req->input('password');
    	return redirect('home');
}
 }





?>