<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SiteController extends Controller
{
public function auth(Request $req) {
if (Auth::attempt(['email'=>$req->em, 'password'=>$req->pwd])) {
//jika ada nilai lain selain data user yang ingin disimpan di session, barugunakan session disini
return redirect('/product');
}
return redirect('/login')->with('msg', 'Email / password salah');
}
}
