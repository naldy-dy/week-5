<?php 

namespace App\Http\Controllers;
use App\Models\Produk;
 


 class ProdukController extends Controller{

 	function index(){
 		$data['list_produk'] = Produk::all();
 		return view('admin.produk.index', $data);
 	}
 	function create(){
 		return view('admin.produk.create');
 	}
 	function store(){
 		$produk = new Produk;
 		$produk->nama = request('nama');
 		$produk->harga = request('harga');
 		$produk->stok = request('stok');
 		$produk->diskripsi = request('diskripsi');
 		$produk->lokasi = request('lokasi');
 		$produk->gambar = request('gambar');
 		$produk->save();
 		
 		return redirect('produk')->with('success', 'Data Berhasil ditambah');
 	}

 	function show(Produk $produk){
 		$data['produk'] = $produk;
 		return view('admin.produk.show', $data);
 	}
 	function edit(Produk $produk){
 		$data['produk'] = $produk;
 		return view('admin.produk.edit', $data);

 	}
 	function update(Produk $produk){
 		$produk->nama = request('nama');
 		$produk->harga = request('harga');
 		$produk->stok = request('stok');
 		$produk->diskripsi = request('diskripsi');
 		$produk->lokasi = request('lokasi');
 		$produk->gambar = request('gambar');
 		$produk->save();

 		return redirect('produk')->with('success', 'Data Berhasil diedit');
 	}
 	function destroy(Produk $produk){
 		$produk->delete();
 		return redirect('produk')->with('danger', 'Data Berhasil dihapus');
 	}




 }