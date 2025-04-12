<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use DerekCodes\TurnstileLaravel\TurnstileLaravel;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->roles == 'superadmin') {
                Session::flash('success', 'Selamat Datang');
                return redirect('/superadmin/beranda');
            } elseif (Auth::user()->roles == 'anggota') {
                Session::flash('success', 'Selamat Datang');
                return redirect('/user/beranda');
            } else {
                Session::flash('success', 'Selamat Datang');
                return 'role lain';
            }
        }
        return view('login');
    }
    public function masuk()
    {
        return view('masuk');
    }
    public function login(Request $req)
    {
        if ($req->get('cf-turnstile-response') == null) {
            Session::flash('warning', 'Checklist Captcha');
            return back();
        } else {
            $turnstile = new TurnstileLaravel;
            $response = $turnstile->validate($req->get('cf-turnstile-response'));

            if ($response['status'] == true) {

                $remember = $req->remember ? true : false;
                $credential = $req->only('username', 'password');

                if (Auth::attempt($credential, $remember)) {

                    if (Auth::user()->roles == 'superadmin') {
                        Session::flash('success', 'Selamat Datang');
                        return redirect('/superadmin/beranda');
                    } elseif (Auth::user()->roles == 'anggota') {
                        Session::flash('success', 'Selamat Datang');
                        return redirect('/user/beranda');
                    } else {
                        Session::flash('success', 'Selamat Datang');
                        return 'role lain';
                    }
                } else {
                    Session::flash('error', 'username/password salah');
                    $req->flash();
                    return back();
                }
            }
        }
    }
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback()
    {
        try {

            $user = Socialite::driver('google')->stateless()->user();
            $finduser = User::where('gauth_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);
                session()->regenerate();
                return redirect('/visitor/home');
            } else {

                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'roles' => 'visitor',
                    'gauth_id' => $user->id,
                    'gauth_type' => 'google',
                    'password' => encrypt('user@123'),
                ]);
                $newUser->markEmailAsVerified();
                Auth::login($newUser);

                return redirect('/user/home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
