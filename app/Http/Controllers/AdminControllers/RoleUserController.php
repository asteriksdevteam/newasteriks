<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\RoleUserInterface;


class RoleUserController extends Controller
{
    private RoleUserInterface $RoleUserInterface;

    public function __construct(RoleUserInterface $RoleUserInterface) 
    {
        $this->RoleUserInterface = $RoleUserInterface;
        $this->middleware('role:Roles-Managers', ['only' => [
            'managers', 'create_manager', 'update_manager'
        ]]);
    }

    public function managers()
    {
        $allData = $this->RoleUserInterface->managers();

        $Role = $allData["Role"];
        $User = $allData["User"];

        return view("adminPanel.rolesManages.managers", compact("Role","User"));
    }

    public function create_manager(Request $request)
    {
        $allData = $this->RoleUserInterface->create_manager($request);

        return response()->json(["alldata" => $allData]);

    }
    public function update_manager(Request $request)
    {
        $allData = $this->RoleUserInterface->update_manager($request);

        return response()->json(["alldata" => $allData]);
    }
    public function update_password(Request $request)
    {
        $allData = $this->RoleUserInterface->update_password($request);

        return response()->json(["alldata" => $allData]);
    }
    public function delete_managers($id)
    {
        $allData = $this->RoleUserInterface->delete_managers($id);

        return redirect()->back()->with(["alldata" => $allData]);
    }
}
