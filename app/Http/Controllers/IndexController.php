<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
 
    public function index()
    {
        $users = User::all();

        foreach ($users as $user) {
            $designation = Designation::find($user->designation_id);
            $user->designation_name = $designation->name;

            $department = Department::find($user->department_id);
            $user->department_name = $department->name;
        }

        return view('index', compact('users'));
    }


}
