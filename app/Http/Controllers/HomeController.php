<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name'=>'writer']);
        // Permission::create(['name'=>'edit post']);
        // $role = Role::findById(1);
        // $permission = Permission::findById(1);
        // $role->givePermissionTo($permission);
        // $permission->removeRole($role);
        // $role->revokePermissionTo($permission);
        // auth()->user()->givePermissionTo('write_post');
        // auth()->user()->assignRole('writer');
        // return auth()->user()->getAllPermissions();
        // return User::role('writer')->get();
        // return User::permission('edit post')->get();
        return view('home');
    }
}
