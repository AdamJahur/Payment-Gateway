<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class loginControllerCompany extends BaseController
{
    public function login(Request $req) {
    	$username = $req->input('usernameTwo');
    	$password = $req->input('passwordTwo');
    	return redirect('home');
    }


 }


?>





