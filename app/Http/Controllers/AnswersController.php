<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answers;

class AnswersController extends Controller
{
    public function create (Request $request)
    {
        $date = $request->validate([
            'name'=>'nullable'
        ]);
        $answers = Answers::create($date); 
        return $answers; 
    }

    public function item ($id)
    {
        $answers = Answers::find($id); 
        return $answers; 
    }

    public function list ()
    {
        $answers = Answers::get(); 
        return $answers; 
    }

    public function update(Request $request, $id)
    {
        $date = $request->validate([
            'name'=>'nullable'
        ]);
        $answers = Answers::find($id)->update($date);
        return $answers;
    }

    public function delete($id)
    {
        $answers = Answers::find($id);
        if($answers)
        {
            $answers->delete();

        }
        return $answers; 
    }
}
