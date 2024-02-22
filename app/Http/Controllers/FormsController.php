<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\forms;

class FormsController extends Controller
{
    public function create (Request $request)
    {
        $date = $request->validate([
            'name'=>'nullable', 
            'url'=>'nullable'
        ]);
        $forms = Forms::create($date); 
        return $forms; 
    }

    public function item ($id)
    {
        $forms = Forms::find($id); 
        return $forms; 
    }

    public function list ()
    {
        $forms = Forms::get(); 
        return $forms; 
    }

    public function update(Request $request, $id)
    {
        $date = $request->validate([
            'name'=>'nullable', 
            'url'=>'nullable'
            ]);
        $forms = Forms::find($id)->update($date);
        return $forms;
    }

    public function delete($id)
    {
        $forms = Forms::find($id);
        if($forms)
        {
            $forms->delete();

        }
        return $forms; 
    }
}
