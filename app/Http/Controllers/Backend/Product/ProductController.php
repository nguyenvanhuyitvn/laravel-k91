<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\AddProductRequest;

class ProductController extends Controller
{
    public function index(){
        return view('backend.product.listproduct');
    }
    public function create(){
        return view('backend.product.addproduct');
    }
    public function store(AddProductRequest $request){
        dd('Thêm thành công');
    }
    public function edit(){
        return view('backend.product.editproduct');
    }
}
