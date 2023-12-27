<?php

namespace App\Interfaces;

interface RoleUserInterface 
{
    public function managers();
    public function create_manager($request);
    public function update_manager($request);
    public function update_password($request);
    public function delete_managers($id);
}