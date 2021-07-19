<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Advertisement;
use App\Models\frontend\Categories;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdvertisementController extends Controller
{
    //
    public function addAdvertisement()
    {
        $categories = Categories::latest()->get();
        return view('layouts.advertisement.addadvertisement', compact('categories'));
    }

    //  User Advertisementlist List
    public function listAdvertisement()
    {
        return view('layouts.advertisement.listadvertisement');
    }

    //  User Fetch Advertisementlist List Using ajax
    public function fetchAdvertisement()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $advertisement = DB::table('advertisements')
            ->join('categories', 'categories.id', '=', 'advertisements.cid')
            ->select('advertisements.*', 'categories.cname')
            ->where('uid', Auth::id())->orderBy('id', 'DESC')->get();
        return response()->json($advertisement);
    }

    // Add New Advertisement Using ajax
    public function addNewAdvertisement(Request $request)
    {

        $validator = $request->validate([
            "title" => 'required',
            "description" => 'required',
            "startdate" => 'required',
            "enddate" => 'required',
            "redirecturl" => 'required',
        ], [
            'title.required' => 'This advertisement title field is required.',
            'description.required' => 'This description field is required.',
            'startdate.required' => 'This select start date field is required.',
            'enddate.required' => 'This select end date field is required.',
            'redirecturl.required' => 'This field is required.',
        ]);

        if ($validator) {
            if ($image = $request->file('imageurl')) {
                $name_gen = hexdec(uniqid());
                $image_ext = strtolower($image->getClientOriginalExtension());
                $img_name = $name_gen . '.' . $image_ext;
                $up_location = 'upload/advertisement/';
                $img = $up_location . $img_name;
                $image->move($up_location, $img_name);

                $advertisement = Advertisement::insert([
                    'title' => $request->title,
                    'cid' => $request->cid,
                    'uid' => Auth::id(),
                    'description' => $request->description,
                    'redirecturl' => $request->redirecturl,
                    'startdate' => $request->startdate,
                    'enddate' => $request->enddate,
                    'imageurl' => $img,
                    'price' => $request->price,
                    'paidmode' => $request->paidmode,
                    'created_at' => Carbon::now()
                ]);

                return response()->json($advertisement);
            } else {
                $advertisement = Advertisement::insert([
                    'title' => $request->title,
                    'cid' => $request->cid,
                    'uid' => Auth::id(),
                    'description' => $request->description,
                    'redirecturl' => $request->redirecturl,
                    'startdate' => $request->startdate,
                    'enddate' => $request->enddate,
                    'price' => $request->price,
                    'paidmode' => $request->paidmode,
                    'created_at' => Carbon::now()
                ]);
                return response()->json($advertisement);
            }
        }
    }

    // Edit Advertisement Name Using Ajax
    public function editAdvertisement($id)
    {
        $advertisement = Advertisement::findOrFail($id);

        return response()->json($advertisement);
    }


    // Add Update Advertisement Using ajax
    public function updateAdvertisement(Request $request, $id)
    {

        $validator = $request->validate([
            "title" => 'required',
            "description" => 'required',
            "startdate" => 'required',
            "enddate" => 'required',
            "redirecturl" => 'required',
        ], [
            'title.required' => 'This advertisement title field is required.',
            'description.required' => 'This description field is required.',
            'startdate.required' => 'This select date field is required.',
            'enddate.required' => 'This select date field is required.',
            'redirecturl.required' => 'This field is required.',
        ]);

        if ($validator) {
            $oldimg = $request->olgImg;

            if ($image = $request->file('imageurl')) {
                $name_gen = hexdec(uniqid());
                $image_ext = strtolower($image->getClientOriginalExtension());
                $img_name = $name_gen . '.' . $image_ext;
                $up_location = 'upload/advertisement/';
                $img = $up_location . $img_name;
                $image->move($up_location, $img_name);

                $adimg = Advertisement::findOrFail($id);
                $oldimg = $adimg->imageurl;
                unlink($oldimg);

                $advertisement = Advertisement::findOrFail($id)->update([
                    'title' => $request->title,
                    'cid' => $request->cid,
                    'description' => $request->description,
                    'redirecturl' => $request->redirecturl,
                    'startdate' => $request->startdate,
                    'enddate' => $request->enddate,
                    'imageurl' => $img,
                    'price' => $request->price,
                    'paidmode' => $request->paidmode,
                    'updated_at' => Carbon::now()
                ]);

                return response()->json($advertisement);
            } else {
                $advertisement = Advertisement::findOrFail($id)->update([
                    'title' => $request->title,
                    'cid' => $request->cid,
                    'description' => $request->description,
                    'redirecturl' => $request->redirecturl,
                    'startdate' => $request->startdate,
                    'enddate' => $request->enddate,
                    'price' => $request->price,
                    'paidmode' => $request->paidmode,
                    'updated_at' => Carbon::now()
                ]);
                return response()->json($advertisement);
            }
        }
    }

    // Delete Advertisement Using Ajax
    public function deleteAdvertisement($id)
    {
        $advertisement = Advertisement::where('id', $id)->first();
        $image = $advertisement->imageurl;
        @unlink($image);
        $deleteadvertisement = Advertisement::where('id', $id)->delete();
        return response()->json($deleteadvertisement);
    }

    // User Frontend advertisement Details
    public function advertisementDetails($id)
    {
        $advertisement = Advertisement::where('id', $id)->first();
        return view('layouts.frontend.advertisements.advertisementsdetails', compact('advertisement'));
    }
}
