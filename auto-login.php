<?php
namespace BookStack\Http\Controllers;

use BookStack\Exceptions\AuthException;
use BookStack\Http\Controllers\Controller;
use BookStack\Repos\UserRepo;
use BookStack\Services\LdapService;
use BookStack\Services\SocialAuthService;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CustomAuthController extends Controller
{
    public function test(Request $req){
        //dd($req);
        $email = "admin@admin.com";
        $password = "password";
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            // The user is being remembered...
            //echo "Yes Logged in now";
            return redirect('public/');
        }else{
            echo "Not Logged in now";
        }
    }
}
