<?php 

namespace App\Http\Composers;

use App\Category;
use Illuminate\Contracts\View\View;
use DB;
use Auth;

class SidebarComposer
{
    public function compose(View $view)
    {
        $view->with('categories', Category::all());
    }
}