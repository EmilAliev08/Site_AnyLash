<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sautController extends Controller
{
    public function main()
    {
        // Здесь вы возвращаете нужное представление (view)
        // Например, стандартную страницу 'welcome.blade.php'
        return view('main'); 
    }
    
}
