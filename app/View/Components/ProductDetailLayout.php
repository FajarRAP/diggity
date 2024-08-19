<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class ProductDetailLayout extends Component
{
    public function render(): View
    {
        return view('layouts.product-detail');
    }
}
