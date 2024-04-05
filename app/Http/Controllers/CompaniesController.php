<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class CompaniesController extends Controller
{
    public function create (Request $request)
    {
        $date = $request->validate([
            'name'=>'nullable', 
            'password'=>'nullable'
        ]);
        $companies = Companies::create($date); 
        return $companies; 
    }

    public function item ($id)
    {
        $companies = Companies::find($id); 
        return $companies; 
    }

    public function log_in_name ($id)
    {
        $companies = Companies::find($id); 
        return $companies; 
         
    }

    public function list ()
    {
        $companies = Companies::get(); 
        return $companies; 
    }

    public function update(Request $request, $id)
    {
        $date = $request->validate([
            'name'=>'nullable',
            'password'=>'nullable'
        ]);
        $companies = Companies::find($id)->update($date);
        return $companies;
    }

    public function delete($id)
    {
        $companies = Companies::find($id);
        if($companies)
        {
            $companies->delete();

        }
        return $companies; 
    }
}
