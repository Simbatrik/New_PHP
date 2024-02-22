<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fields;

class FieldsController extends Controller
{
    public function create (Request $request)
    {
        $date = $request->validate([
            'title_forms'=>'nullable'
        ]);
        $fields = Fields::create($date); 
        return $fields; 
    }

    public function item ($id)
    {
        $fields = Fields::find($id); 
        return $fields; 
    }

    public function list ()
    {
        $fields = Fields::get(); 
        return $fields; 
    }

    public function update(Request $request, $id)
    {
        $date = $request->validate([
            'title_forms'=>'nullable'
        ]);
        $fields = Fields::find($id)->update($date);
        return $fields;
    }

    public function delete($id)
    {
        $fields = Fields::find($id);
        if($fields)
        {
            $fields->delete();

        }
        return $fields; 
    }
}
