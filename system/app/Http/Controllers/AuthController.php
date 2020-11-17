<?php 

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

class AuthController extends Controller{


	function ShowLogin(){
		return view('login');
	}

	function prosesLogin(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('beranda')->with('success', 'Login Berhasil');
		}else{                                      
			return back()->with('warning', 'Gagal Masuk, Silahan Email dan Password anda');
		}
		
	}
	
	function Logout(){
		Auth::logout();
		return redirect('login');
	}

	function Registration(){
 		$user = new User;
 		$user->nama = request('nama');
 		$user->username = request('username');
 		$user->email = request('email');
 		$user->tmptlahir = request('tmptlahir');
 		$user->tgllahir = request('tgllahir');
 		$user->password = bcrypt(request('password'));
 		$user->profil = request('gambar');
 		$user->save();
 		
 		return redirect('login')->with('success', 'Data Berhasil ditambah');
 	}

	function Forgot(){
		
	}
}