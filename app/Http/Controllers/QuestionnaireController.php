<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $questionnaires = Questionnaire::get();
        return view('questionnaires.completed', compact('questionnaires'));
    }

    public function store(Request $request) {
        $data = request()->validate([
            'answer1'=>'required',
            'answer2'=>'required',
            'answer3'=>'required',
            'answer4'=>'required',
            'answer5'=>'required',
            'answer6'=>'required',
            'answer7'=>'required',
            'answer8'=>'required',
            'answer9'=>'required',
            'answer10'=>'required',
        ]);
        $user_id = contact_details()->user()->id;
        Questionnaire::create([
            'user_id'=>$user_id,
            'answer1'=>$data['answer1'],
            'answer2'=>$data['answer2'],
            'answer3'=>$data['answer3'],
            'answer4'=>$data['answer4'],
            'answer5'=>$data['answer5'],
            'answer6'=>$data['answer6'],
            'answer7'=>$data['answer7'],
            'answer8'=>$data['answer8'],
            'answer9'=>$data['answer9'],
            'answer10'=>$data['answer10'],
        ]);
        return redirect()->back()->with('message','Thank you for taking the time to complete our questionnaire');
    }
}
