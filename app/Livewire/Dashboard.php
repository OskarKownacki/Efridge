<?php

namespace App\Livewire;

use App\Models\Answer;
use App\Models\Question;
use Livewire\Component;

class Dashboard extends Component
{
    public $questionContent;
    public $answerContent;


    public function addQuestion()
    {
       $id = Question::insertGetId([
            'question' => $this->questionContent
        ]);
        Answer::insert([
            'answer' => $this->answerContent,
            'question_id' => $id
        ]);

    }


    public function render()
    {
        return view('livewire.dashboard');
    }
}
