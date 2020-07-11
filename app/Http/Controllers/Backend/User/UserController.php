<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listuser(){
        echo "Đây là trang danh sách user";
    }
    public function adduser(){
        echo "Đây là trang thêm mới user";
    }
    public function edituser(){
        echo "Đây là trang sửa user";
    }
}
