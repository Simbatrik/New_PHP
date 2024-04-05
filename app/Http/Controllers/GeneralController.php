<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;

class GeneralController extends Controller
{
    public function create (Request $request)
    {
        $date = $request->validate([
            'user_id'=>'nullable',
            'company_id'=>'nullable'
        ]);
        $general = General::create($date); 
        return $general; 
    }

    public function item ($id)
    {
        $general = General::find($id); 
        return $general; 
    }

    public function list ()
    {
        $general = General::get(); 
        return $general; 
    }

    public function update(Request $request, $id)
    {
        $date = $request->validate([
            'user_id'=>'nullable',
            'form_id'=>'nullable'
        ]);
        $general = General::find($id)->update($date);
        return $general;
    }

    public function delete($id)
    {
        $general = General::find($id);
        if($general)
        {
            $general->delete();

        }
        return $general; 
    }
}
