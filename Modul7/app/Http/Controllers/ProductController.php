<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller 
{
    public function index()
    {
        $prods = Product::get();
        return view('product.index', ['list' => $prods]);
    }

    public function create()
    {
        //return view('product.', [
            //'title' => 'Tambah',
            //'method' => 'POST',
            //'action' => 'product'
            
        //]);
        return view('form', [
            'title' => 'Tambah',
            'action' => 'product/store'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|integer|min:1000000'
        ]);

        $prod = new Product;
        $prod->name = $validatedData['name'];
        $prod->price = $validatedData['price'];
        $prod->save();

        return redirect('/product')->with('msg', 'Tambah berhasil');
    }

    public function show($id)
    {
        $prod = Product::find($id);
        return view('product.show', ['data' => $prod]);
    }

    public function edit($id)
    {
        $prod = Product::find($id);
        return view('product.form', [
            'title' => 'Edit',
            'method' => 'GET',
            'action' => "product/$id",
            'data' => $prod
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|integer|min:1000000'
        ]);

        $prod = Product::find($id);
        $prod->name = $validatedData['name'];
        $prod->price = $validatedData['price'];
        $prod->save();

        return redirect('/product')->with('msg', 'Edit berhasil');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/product')->with('msg', 'Hapus berhasil');
    }
    public function auth(Request $req) {
        $u = User::where([
            ['email', $req->em],
            ['password', $req->pwd],
        ])->first();
        if (isset($u)) {
        session()->put('email', $u->email);
       
        
        session()->put('name', $u->name);
        return "<script>
        alert('Welcome, " . session('name') . "');
        location.href='/product';
        </script>";
        }
        return redirect('/login')->with('msg', 'Email / password salah');
        }
    

}
