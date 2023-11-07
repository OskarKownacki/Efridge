<?php

namespace App\Livewire;

use App\Models\Amount;
use App\Models\Recipe;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Efridge_product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;


class RecipesMain extends Component
{

    public $recipeName;
    public function render(Request $request)
    {
        $this->recipeName=collect([]);
        $queryUser = Efridge_product::where('user_id', '=', $request->user()->id);
        $query = Recipe::with('ingredients');
        foreach($query->get() as $query){
        $diff = $query->ingredients();
        
        foreach($diff->get() as $ingredient)
        {
            
            if($ingredient->amount > $queryUser->get()->pluck('amount', 'name')->get($ingredient->name))
            {
                continue(2);
            }
        }
        
        if($diff->pluck('name')->diff($queryUser->pluck('name'))->isEmpty()){
            $this->recipeName->push(['name'=>$query->name,
        'description'=>$query->description,
        'ingredients'=>$query->ingredients()->get()]);
        }
        
    }
         
       
        return view('livewire.recipes-main');
    }
}
