<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class CategoryDropdown extends Component
{

 

    /**
     * Get the view / contents that represent the component.
     *
     */
    public function render()
    {
        // Episode 40
        return view('components.category-dropdown',[
            'categories' => Category::all(),
              // Episode 39
              'currentCategory' => Category::firstWhere('slug',request('category'))
        ]);
    }
}
