<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Requests\StoreAdmin;
use App\Model\Admin\AdminRole;
use App\Model\Admin\Admin;
class AdminController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Admin List';
        $data['breadcrumbs'] = 'admins';
        $data['admins'] = Admin::orderBy('id','desc')->get();
        return view('admin_pages.admins.admin_index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Admin Create';
        $data['breadcrumbs'] = 'admins.create';
        $data['admins'] = Admin::orderBy('id', 'desc')->get();
        $data['admin_roles'] = AdminRole::orderBy('id', 'desc')->get();

        return view('admin_pages.admins.admin_create', $data);
    }

    public function store(StoreAdmin $request){
        $validated = $request->validated();
        dd($validated);
    }
}
