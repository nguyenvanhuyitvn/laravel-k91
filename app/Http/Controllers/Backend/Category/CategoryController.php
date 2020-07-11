<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listcategory()
    {
        return view('backend.category.category');
    }
    public function editcategory(){
        return view('backend.category.editcategory');
    }
}
