<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Roles;
use Illuminate\Http\Request;
use App\Models\Routes;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class PermissionController extends Controller
{
    //

    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('permission');
        # code...
    }
    public function viewRole(Request $request)
    {
        # code...
        $role = Roles::all();
        // echo Route::currentRouteName();
        // echo $request->path();
        return view('permission.role', compact('role'));
    }
    public function savePermission(Request $request)
    {
        
        $status =  $request->status;
        $role_id =  $request->roleId;
        $route_id =  $request->routeId;

        $data = Permission::where('route_id', $route_id)
        ->where('role_id', $role_id)->first();

        if($data != null){
            //update status
            $permission = DB::table('permission')->where('route_id', $route_id)->where('role_id', $role_id)->update([
                'status'=>$status
            ]);
        }else{
            // insert route
            $permission = DB::table('permission')->insert([
                'role_id'=> $role_id,
                'route_id'=> $route_id,
                'status'=> $status,
            ]);
        }
    }

    public function settingRole(Request $request)
    {
        # code...
        $role_id = $request->id;
        $routeList = Routes::all();
        $permissionList = DB::table('permission')
        ->where('role_id', $role_id)->get();

        $list =[];
        foreach($routeList as $route){
            // get status permission
            $status = 0;
            foreach( $permissionList as $permission){
                if($permission->route_id == $route->id){
                    $status =  $permission->status;
                    break;
                }
            }
            $list[] = [
                'route_id' => $route->id,
                'route_title' => $route->route_title,
                'status' => $status,
            ];
        }
        // return $list;
        return view('permission.setting', compact('list', 'role_id'));
    }
}
