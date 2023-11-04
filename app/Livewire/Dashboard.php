<?php

namespace App\Livewire;

use App\Models\Answer;
use App\Models\Ingredient;
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
    
    public function addRecipe()
    {
    }

    public function render()
    {
        $query = Ingredient::find(1);

        dd($query->recipes);
        return view('livewire.dashboard');
    }
}
