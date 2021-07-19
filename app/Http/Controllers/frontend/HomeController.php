<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //Front End Login Page
    public function loginUser()
    {
        return view('layouts.login.login');
    }

    //Front End Register Page
    public function registerUser()
    {
        return view('layouts.login.register');
    }

    // Categories Wise Items Show
    public function categoriesWise($id)
    {
        $catwises = DB::table('services')
            ->join('categories', 'categories.id', 'services.cid')
            ->where('categories.pid', '=', $id)
            ->select('services.*')
            ->orderBy('id', 'DESC')->paginate(3);
        $categories = DB::table('categories')->get();
        return view('layouts.frontend.categorywise.categorieswise', compact('catwises', 'categories'));
    }

     // Sub Categories Wise Items Show
     public function subCategoriesWise($id, $pid)
     {
         $subcatwises = DB::table('services')
             ->join('categories', 'categories.id', 'services.cid')
             ->where('categories.pid', '=', $id)
             ->where('categories.id', '=', $pid)
             ->select('services.*')
             ->orderBy('id', 'DESC')->paginate(1);
         $categories = DB::table('categories')->get();
         return view('layouts.frontend.categorywise.subcategorieswise', compact('subcatwises', 'categories'));
     }
}
