<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class usersController extends Controller
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
        $users = Users::create($date); 
        return $users; 
    }

    public function item ($id)
    {
        $users = Users::find($id); 
        return $users; 
    }

    public function list ()
    {
        $users = Users::get(); 
        return $users; 
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
        $users = Users::find($id)->update($date);
        return $users;
    }

    public function delete($id)
    {
        $users = Users::find($id);
        if($users)
        {
            $users->delete();

        }
        return $users; 
    }
}
