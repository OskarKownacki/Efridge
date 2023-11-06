<?php

namespace App\Livewire;

use App\Models\Amount;
use App\Models\Answer;
use App\Models\Recipe;
use Livewire\Component;
use App\Models\Question;
use App\Models\Ingredient;
use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Component
{
    public $questionContent;
    public $answerContent;
    public $recipeTitle;
    public $recipeContent;
    public $recipeAmount;
    public $recipeIngredients=[ ];
    public $increment = 1;
    public $queryQuestions;
    public $queryRecipes;

    public function deleteUser(Request $request)
    {
        User::where('id',$request->user()->id)->delete();
        return redirect('main');
    }

    public function deleteQuestion($id)
    {
        $query = Question::with('answer')->where('id', $id)->get();
        $query->first()->answer()->delete();
        $query->first()->delete();    
    }
    public function deleteRecipe($id)
    {
        $query = Recipe::with('ingredients')->where('id', $id)->get();
        foreach($query->first()->ingredients() as $ingredient){
        $ingredient->delete();
        }
        $query->first()->delete();
    }

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
        $this->queryQuestions = Question::with('answer')->get();
        $this->queryRecipes = Recipe::with('ingredients')->get();
        
        
        return view('livewire.dashboard');
    }
}
