<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use PDF;

class Products extends Component
{
    public $perPage = 4;
    
    public function loadMore()
    {
        $this->perPage += 20;
    }
    
    public function render()
    {
        $products = Http::get('https://dummyjson.com/products?limit=' . $this->perPage)->json()['products'];
        return view('livewire.products', [
            'products' => $products,
            ]);
    }
}
