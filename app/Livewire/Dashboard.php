<?php

namespace App\Livewire;

use App\Models\Amount;
use App\Models\Answer;
use App\Models\Recipe;
use Livewire\Component;
use App\Models\Question;
use App\Models\Ingredient;

class Dashboard extends Component
{
    public $questionContent;
    public $answerContent;
    public $recipeTitle;
    public $recipeContent;
    public $recipeAmount;
    public $recipeIngredients=[ ];
    public $increment = 1;
    
    public function addAnotherIngredient()
    {
        
        $this->recipeIngredients[$this->increment]['name'] = '';
        $this->recipeIngredients[$this->increment]['amount'] = '';
        $this->recipeIngredients[$this->increment]['id'] = $this->increment;
        $this->increment++;
    
    }
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
        $idRecipe = Recipe::insertGetId([
            'name' => $this->recipeTitle, 
            'description' => $this->recipeContent
        ]);
        
        foreach($this->recipeIngredients as $recipeIngredients){
        $idIngredient = Ingredient::whereNot('name',$recipeIngredients['name'])
        ->insertGetId([
            'name'=>$recipeIngredients['name'],
            'recipe_id' => $idRecipe, 
            'amount' => $recipeIngredients['amount']
        ]);
    
    }
    }

    public function render()
    {
        $query = Ingredient::find(1);
        return view('livewire.dashboard');
    }
}
