<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data['page_title'] = 'User List';

        $data['breadcrumbs'] = 'users';
        $data['users'] = \App\User::orderBy('id','desc')->get();
        return view('admin_pages.users.user_index',$data);
    }
}
