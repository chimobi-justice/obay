<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Food;

class FoodsTable extends Component
{
    public $foods;

    public $quantity = [];

    public function mount()
    {
        $this->foods = Food::all();
        foreach ($this->foods as $food) {
            $this->quantity[$food->id] = 1;
        }
    }

    public function render()
    {
        return view('livewire.foods-table');
    }
}
