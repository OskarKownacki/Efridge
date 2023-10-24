<?php

namespace App\Livewire;

use Livewire\Component;

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

    public function addproduct()
    {

        if(!empty($this->tableall))
        {
        array_push($this->tableall,  
        
            
            ['product_id' => $this->i, 
            'name' => $this->namenew, 
            'amount' => 0]
            );
            // dd($this->tableall);
            $this->i++;
        }  
        else
        {
            $this->tableall = 
            [
                ['product_id' => $this->i, 
                'name' => $this->namenew, 
                'amount' => 0]
                ]
                ;
            $this->i++;
        }
        // dd($this->tableall);
    
    

    }
    public function render()
    {
    
        return view('livewire.products');
    }
}