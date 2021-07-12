<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Categories;
use App\Models\frontend\Services;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    //
    public function services()
    {
        $categories = Categories::latest()->get();
        return view('layouts.services.addservices', compact('categories'));
    }

    // User Add Services Using Ajax
    public function addServices(Request $request)
    {
        $validator = $request->validate([
            "title" => 'required',
            "established" => 'required',
            "email" => 'required|email:rfc,dns',
            "contact1" => 'required|numeric|min:10',
            "contact2" => 'required|numeric|min:10',
            "adder1" => 'required',
            "adder2" => 'required',
            "city" => 'required',
            "pincode" => 'required',
            "website" => 'required',
            "logo" => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "description" => 'required',
        ]);

        if ($validator) {

            $logo = $request->file('logo');

            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($logo->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $image_ext;
            $up_location = 'upload/services/';
            $img1 = $up_location . $img_name;
            $logo->move($up_location, $img_name);

            $photo = $request->file('photourl');

            $name = hexdec(uniqid());
            $image = strtolower($photo->getClientOriginalExtension());
            $imgname = $name . '.' . $image;
            $location = 'upload/services/';
            $img2 = $location . $imgname;
            $photo->move($location, $imgname);

            $services = Services::insert([
                'title' => $request->title,
                'cid' => $request->cid,
                'established' => $request->established,
                'email' => $request->email,
                'contact1' => $request->contact1,
                'contact2' => $request->contact2,
                'adder1' => $request->adder1,
                'adder2' => $request->adder2,
                'city' => $request->city,
                'pincode' => $request->pincode,
                'website' => $request->website,
                'logo' => $img1,
                'photourl' => $img2,
                'description' => $request->description,
                'created_at' => Carbon::now()
            ]);
            return response()->json($services);
        }
    }

    //
    public function serviceList()
    {
        return view('layouts.services.servicelist');
    }

    // User Fetch Service Data
    public function fetchServices()
    {
        $services = DB::table('services')
            ->join('categories', 'categories.id', '=', 'services.cid')
            ->select('services.*', 'categories.cname')
            ->orderBy('id', 'DESC')->get();

        return response()->json($services);
    }

    // User Fetch Service Data
    public function editServices($id)
    {
        $services = Services::findOrFail($id);
        return response()->json($services);
    }

    // User Update Services
    public function updateServices(Request $request, $id)
    {
        $validator = $request->validate([
            "title" => 'required',
            "established" => 'required',
            "email" => 'required',
            "contact1" => 'required',
            "contact2" => 'required',
            "adder1" => 'required',
            "adder2" => 'required',
            "city" => 'required',
            "pincode" => 'required',
            "website" => 'required',
            "description" => 'required',
        ]);

        if ($validator) {

            $oldlogo = $request->oldLogo;
            $oldphoto = $request->oldPhoto;

            if ($logo = $request->file('logo')) {
                $name_gen = hexdec(uniqid());
                $image_ext = strtolower($logo->getClientOriginalExtension());
                $img_name = $name_gen . '.' . $image_ext;
                $up_location = 'upload/services/';
                $img1 = $up_location . $img_name;
                $logo->move($up_location, $img_name);

                $logoimg = Services::findOrFail($id);
                $oldlogo = $logoimg->logo;
                @unlink($oldlogo);

                $services = Services::findOrFail($id)->update([
                    'logo' => $img1,
                    'updated_at' => Carbon::now()
                ]);
                return response()->json($services);
            }
            if ($photo = $request->file('photourl')) {
                $name = hexdec(uniqid());
                $image = strtolower($photo->getClientOriginalExtension());
                $imgname = $name . '.' . $image;
                $location = 'upload/services/';
                $img2 = $location . $imgname;
                $photo->move($location, $imgname);

                $photoimg = Services::findOrFail($id);
                $oldphoto = $photoimg->photourl;
                @unlink($oldphoto);

                $services = Services::findOrFail($id)->update([
                    'photourl' => $img2,
                    'updated_at' => Carbon::now()
                ]);
                return response()->json($services);
            } else {
                $services = Services::findOrFail($id)->update([
                    'title' => $request->title,
                    'cid' => $request->cid,
                    'established' => $request->established,
                    'email' => $request->email,
                    'contact1' => $request->contact1,
                    'contact2' => $request->contact2,
                    'adder1' => $request->adder1,
                    'adder2' => $request->adder2,
                    'city' => $request->city,
                    'pincode' => $request->pincode,
                    'website' => $request->website,
                    'description' => $request->description,
                    'updated_at' => Carbon::now()
                ]);
                return response()->json($services);
            }
        }
    }

    // Service Details On Frondend 
    public function serviceDetails($id)
    {
        $services = Services::where('id', $id)->first();
        return view('layouts.frontend.servicesdetails.servicedetails', compact('services'));
    }
}
