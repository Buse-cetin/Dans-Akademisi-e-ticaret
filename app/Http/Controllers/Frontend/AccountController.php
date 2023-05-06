<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AccountController extends Controller
{

    public function account():View
    {
        $users = User::all() ;
        $auths=Auth::id();
        return view("frontend.account.index", ["users" => $users]);

       return view("frontend.account.index", ["auths" => $auths]);
    }


}
