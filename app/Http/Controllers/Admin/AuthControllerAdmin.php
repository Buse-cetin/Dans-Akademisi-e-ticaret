<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthControllerAdmin extends Controller
{
    public function showSignInForm(): View
    {
        return view("backend.authAdmin.signin_form");
    }
    public function signUp(SignUpRequest $request): RedirectResponse
    {
        $user = new User();
        $data = $this->prepare($request, $user->getFillable());
        $data["is_admin"] = true;
        $user->fill($data);
        $user->save();

        return Redirect::to("/girisAdmin");
    }
    public function signIn(SignInRequest $request): RedirectResponse
    {
        $credentials = $request->only(["email", "password"]);
        $rememberMe = $request->get("remember-me", false);

        if (Auth::attempt($credentials, $rememberMe)) {
            $user = Auth::user();
            if ($user->is_admin) {
                $data["is_admin"] = true;
                return redirect("/users");
            } else {
                Auth::logout();
                return redirect()->back()->withErrors(
                    [
                        "email" => "Giriş yapmak için yetkiniz yok.",
                    ]);
            }
        } else {
            return redirect()->back()->withErrors(
                [
                    "email" => "Lütfen epostanızı kontrol ediniz.",
                    "password" => "Lütfen şifrenizi kontrol ediniz.",
                ]);
        }

    }

    public function showSignUpForm(): View
    {
        return view("backend.authAdmin.signup_form");
    }



    public function logout()
    {
        Auth::logout();
        return redirect("/users");
    }


}
