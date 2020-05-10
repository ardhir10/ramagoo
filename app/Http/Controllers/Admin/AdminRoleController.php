<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Permission;
use App\Model\Admin\AdminRole;
use App\Model\Admin\AdminRolePermission;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class AdminRoleController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Admin Role List';
        $data['breadcrumbs'] = 'admin_roles';
        $data['admin_roles'] = AdminRole::orderBy('id', 'desc')->get();
     
        return view('admin_pages.admin_roles.admin_role_index', $data);
    }

    public function create()
    {
        $data['page_title'] = 'Admin Role Create';
        $data['breadcrumbs'] = 'admin_roles.create';
        $data['permissions'] = Permission::orderBy('name', 'asc')->get();

        return view('admin_pages.admin_roles.admin_role_create', $data);
    }

    public function store(Request $request)
    {
        // ------ Validasi Input
        $messages = [
            'required' => 'The :attribute field is required.',
        ];
        $rules = array(
            'name' => 'required|unique:admin_roles',
            'permissions' => 'required',
        );
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // ------ Transaksi Insert
        DB::beginTransaction();
        try {
            // ------ Insert Admin Role
            $admin_role = new AdminRole;
            $admin_role->name = $request->name;
            $admin_role->save();

            // ------ Insert Mass Admin Role Permission
            $admin_role_permissions = [];
            foreach ($request->permissions as $permission) {
                array_push($admin_role_permissions,['permission_id'=> $permission ,'admin_role_id'=>$admin_role->id, 'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')]);
            }
            AdminRolePermission::insert($admin_role_permissions);
            DB::commit();
            
            // ------ Redirect Back With Success
            return redirect()->route('admin.admin_role')->with('create', 'Data successfully created !');
        } catch (\Exception $e) {
            DB::rollBack();

            // ------ Redirect Back With Error
            return redirect()->route('admin.admin_role')->with('error', $e->getMessage());
        }
    }


    public function delete($id)
    {
        // ----- Delete Data
        try {
            AdminRole::where('id',$id)->delete();
            // ------ Redirect Back With Success
            return redirect()->route('admin.admin_role')->with('info', 'Data successfully deleted !');
        } catch (\Exception $e) {
            // ------ Redirect Back With Error
            return redirect()->route('admin.admin_role')->with('error', $e->getMessage());
        }
    }
}
