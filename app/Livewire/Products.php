<?php

namespace App\Livewire;

use App\Models\Efridge_product;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;
use function Psy\debug;

class Products extends Component
{

    public $products; 
    public $amount;
    public $tableall;
    public $namenew;
    public $i = 1;
    
 
    public function add()
    {
            $this->tableall = $this->products + $this->amount;
    }

    public function addproduct(Request $request)
    {

        if(!empty($this->tableall))
        {
            DB::table('efridge_products')->insert([
                'name' => $this->namenew,
                'amount' => 10,
                'user_id' => $request->user()->id
            ]);
        }  
        else
        {
            DB::table('efridge_products')->insert([
                'name' => $this->namenew,
                'amount' => 10,
                'user_id' => $request->user()->id
            ]);
        }
    
    

    }
    public function render(Request $request)
    {
        $efridge_product = Efridge_product::where('user_id', $request->user()->id)->get();

        $this->tableall = $efridge_product;
    
        return view('livewire.products');
    }
}