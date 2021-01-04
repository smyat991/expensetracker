<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Expense_Category;

class ExpenseCategoryComponent extends Component
{
     public $expense_categories;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->expense_categories=Expense_Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.expense-category-component');
    }
}
