<?php

namespace App\Livewire;

use App\Models\Efridge_product;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;
use function Psy\debug;

class Products extends Component
{

    public $amounts = [];
    public $tableall;
    public $namenew;


    public function add($id)
    {
        if (!empty($this->amounts['id'])) {
            Efridge_product::where('id', $id)
                ->increment('amount', $this->amounts[$id]);
        }
    }

    public function addproduct(Request $request)
    {

        if (Auth::check()) {
            DB::table('efridge_products')->insert([
                'name' => $this->namenew,
                'amount' => 0,
                'user_id' => $request->user()->id
            ]);
        }
    }
    public function render(Request $request)
    {
        if (Auth::check()) {
            $efridge_product = Efridge_product::where('user_id', $request->user()->id)->get();

            $this->tableall = $efridge_product;
        }
        return view('livewire.products');
    }
}
