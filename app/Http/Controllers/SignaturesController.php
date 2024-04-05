<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signatures;

class SignaturesController extends Controller
{
    public function create (Request $request)
    {
        $date = $request->validate([
            'user_id'=>'nullable',
            'form_id'=>'nullable'
        ]);
        $signatures = Signatures::create($date); 
        return $signatures; 
    }

    public function item ($id)
    {
        $signatures = Signatures::find($id); 
        return $signatures; 
    }

    public function list ()
    {
        $signatures = Signatures::get(); 
        return $signatures; 
    }

    public function update(Request $request, $id)
    {
        $date = $request->validate([
            'user_id'=>'nullable',
            'form_id'=>'nullable'
        ]);
        $signatures = Signatures::find($id)->update($date);
        return $signatures;
    }

    public function delete($id)
    {
        $signatures = Signatures::find($id);
        if($signatures)
        {
            $signatures->delete();

        }
        return $signatures; 
    }
}
