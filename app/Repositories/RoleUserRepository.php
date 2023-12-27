<?php

namespace App\Repositories;
use App\Interfaces\RoleUserInterface;
use App\Traits\ImageTrait;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RoleUserRepository implements RoleUserInterface 
{
    use ImageTrait;
    public function managers()
    {
        $User = User::where('id', '!=', Auth::user()->id)->get();
        $Role = Role::get();

        $allData = [
            "Role" => $Role,
            "User" => $User,
        ];

        return $allData;
    }
    public function create_manager($request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
        ]);

        if ($validator->fails()) 
        {
            $errormsg = ["message" => "The email has already been taken"];
            return $errormsg;
        }

        $User = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $convertIdToInteger = intval($request->roles);

        $User->assignRole($convertIdToInteger);

        $successmsg = ["message" => "User created successfully"];

        return $successmsg;
    }
    public function update_manager($request)
    {
        $User = User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $UserId = User::find($request->id);

        $convertIdToInteger = intval($request->roles);

        $UserId->syncRoles([$convertIdToInteger]);

        $successmsg = ["message" => "User Updated successfully"];

        return $successmsg;
    }
    public function update_password($request)
    {
        $User = User::where("id", $request->id)->update([
            'password' => Hash::make($request->password),
        ]);

        $successmsg = ["message" => "User Password Updated Successfully"];

        return $successmsg;
    }
    public function delete_managers($id)
    {
        $User = User::where('id', $id)->first();

        $User->removeRole($User->roles[0]->name);

        $User->delete();

        $successmsg = ["message" => "User Deleted Successfully"];

        return $successmsg;
    }
}