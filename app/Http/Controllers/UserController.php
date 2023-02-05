<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Auth;
use Request;

class UserController extends Controller
{
    public function login(){
        #region SEO
        $seoTitle = "Login";
        $separator = config('seo.separator');
        $appName = config('app.name');
        $seoImage = config('seo.image_site');
        $appUrl = config('app.url');
        seo()->title("$seoTitle $separator $appName");
        seo()->image("$appUrl/storage/$seoImage");
        #endregion
        return view('users.login');
    }

    public function doLogin(UserLoginRequest $request){
        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
 
            return redirect()->intended('products.index');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function changePassword()
    {
        //TODO CAMBIAR CONTRASEÑA
        Auth::logout();
        return redirect('/');
    }
}
