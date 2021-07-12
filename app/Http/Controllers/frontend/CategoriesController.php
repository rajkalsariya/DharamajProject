<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Categories;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use League\CommonMark\Inline\Element\Code;

class CategoriesController extends Controller
{
    // Admin Categories Page
    public function categories()
    {
        $categories = Categories::latest()->get();
        return view('admins.category.categories', compact('categories'));
    }

    // Admin Add New Categories
    public function addCategories(Request $request)
    {
        $validator = $request->validate([
            "cname" => 'required|unique:categories',
        ]);

        if ($validator) {
            if ($image = $request->file('icons')) {
                $name_gen = hexdec(uniqid());
                $image_ext = strtolower($image->getClientOriginalExtension());
                $img_name = $name_gen . '.' . $image_ext;
                $up_location = 'upload/categories/';
                $img = $up_location . $img_name;
                $image->move($up_location, $img_name);

                $categories = Categories::insert([
                    'cname' => $request->cname,
                    'pid' => $request->pid,
                    'icons' => $img,
                    'ads' => 0,
                    'created_at' => Carbon::now()
                ]);

                return response()->json($categories);
            } else {
                $categories = Categories::insert([
                    'cname' => $request->cname,
                    'pid' => $request->pid,
                    'ads' => 0,
                    'created_at' => Carbon::now()
                ]);
                return response()->json($categories);
            }
        }
    }

    // Fetch Categories Using Ajax
    public function fetchCategories()
    {
        // $categories = Categories::orderBy('id', 'DESC')->get();
        $categories = DB::table('categories as scat')
            ->leftjoin('categories as pcat', 'pcat.id', '=', 'scat.pid')
            ->select('scat.*', 'pcat.cname as pname')
            ->orderBy('id', 'DESC')->get();
        return response()->json($categories);
    }

    // Edit Categories Name Using Ajax
    public function editCategories($id)
    {
        $categories = Categories::findOrFail($id);

        return response()->json($categories);
    }

    // Update Categories Name Using Ajax
    public function updateCategories(Request $request, $id)
    {
        $validator = $request->validate([
            "cname" => [
                'required',
                Rule::unique('categories')->where('id', '=', $id)->where('cname', '=', $request->cname),
            ]
        ]);

        if ($validator) {
            $oldimg = $request->olgImg;

            if ($image = $request->file('icons')) {
                $name_gen = hexdec(uniqid());
                $image_ext = strtolower($image->getClientOriginalExtension());
                $img_name = $name_gen . '.' . $image_ext;
                $up_location = 'upload/categories/';
                $img = $up_location . $img_name;
                $image->move($up_location, $img_name);

                $caticon = Categories::findOrFail($id);
                $oldimg = $caticon->icons;
                @unlink($oldimg);

                $categories = Categories::findOrFail($id)->update([
                    'cname' => $request->cname,
                    'pid' => $request->pid,
                    'icons' => $img,
                    'ads' => 0,
                    'updated_at' => Carbon::now()
                ]);
                return response()->json($categories);
            } else {
                $categories = Categories::findOrFail($id)->update([
                    'cname' => $request->cname,
                    'pid' => $request->pid,
                    'ads' => 0,
                    'updated_at' => Carbon::now()
                ]);
                return response()->json($categories);
            }
        }
    }

    // Check Categories name existed or not
    public function checkCname($cname)
    {
        $count = Categories::where('cname', '=', "$cname")->count();
        return response()->json($count);
    }

    // Delete Categories Using Ajax
    public function deleteCategories($id)
    {
        $categories = Categories::findOrFail($id)->delete();

        return response()->json($categories);
    }
}
