<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function create (Request $request)
    {
        $date = $request->validate([
            'log_in'=>'nullable', 
            'password'=>'nullable', 
            'name'=>'nullable', 
            'surname'=>'nullable', 
            'city'=>'nullable',
            'department'=>'nullable', 
            'job_title'=>'nullable', 
            'email'=>'nullable', 
            'mobile'=>'nullable'
        ]);
        $Users = Users::create($date); 
        return $Users; 
    }

    public function item ($id)
    {
        $Users = Users::find($id); 
        return $Users; 
    }

    public function list ()
    {
        $Users = Users::get(); 
        return $Users; 
    }

    public function update(Request $request, $id)
    {
        $date = $request->validate([
            'log_in'=>'nullable', 
            'password'=>'nullable', 
            'name'=>'nullable', 
            'surname'=>'nullable', 
            'city'=>'nullable',
            'department'=>'nullable', 
            'job_title'=>'nullable', 
            'email'=>'nullable', 
            'mobile'=>'nullable'
        ]);
        $Users = Users::find($id)->update($date);
        return $Users;
    }

    public function delete($id)
    {
        $Users = Users::find($id);
        if($Users)
        {
            $Users->delete();

        }
        return $Users; 
    }
}
