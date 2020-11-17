<?php 

namespace App\Http\Controllers;
use App\Models\kategori;
use App\Models\Produk;
 


 class IndexController extends Controller{

 	function showIndex(){
 		$data['list_produk'] = produk::all();
 		$data['list_kategori'] = kategori::all();
 		return view('index', $data);
 	}
 	function showDetail(Produk $detail){
 		$data['detail'] = $detail;
 		return view('detail', $data);
 	}

}