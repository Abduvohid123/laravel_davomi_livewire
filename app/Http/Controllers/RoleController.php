<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function addRole()
    {
        $roles = [
            ['name' => 'Adminstrator'],
            ['name' => 'Editor'],
            ['name' => 'Author'],
            ['name' => 'Contributor'],
            ['name' => 'Subscribers'],

        ];
        Role::insert($roles);
        return "role lar muvaffaqiyatli joylandi";
    }

    public function addUser()
    {
        $user=new User();
        $user->name="Ism1";
        $user->email="kasevsfdjwked@asjdfnskaaaj.dfs";
        $user->password=bcrypt('parol');
        $user->save();

        $user->roles()->attach([2,3]);
        return "muvaffaqiyatli";
    }
    public function getAllRolesByUser($id){

        $user=User::find($id);
        return  $user->roles;
    }

    public function getAllUsersByRole($id)
    {


        $role=Role::find($id);
        return $role->users;
    }
}
