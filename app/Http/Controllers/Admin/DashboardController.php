<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['page_title'] = 'Dashboard';

        $data['breadcrumbs'] = 'dashboard';

        return view('admin_pages.dashboard',$data);
    }
}
