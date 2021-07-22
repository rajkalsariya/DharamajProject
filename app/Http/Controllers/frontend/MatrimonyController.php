<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Matrimony;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class MatrimonyController extends Controller
{
    //
    public function matrimony()
    {
        return view('layouts.matrimony.addmatrimony');
    }

    // Add User New Matrimony
    public function addMatrimony(Request $request)
    {
        $validator = $request->validate(
            [
                "name" => 'required',
                "bdt" => 'required',
                "sex" => 'required|in:male,female',
                "district" => 'required',
                "state" => 'required',
                "maritalstatus" => 'required',
                "occupation" => 'required',
                "photourl" => 'required|image',
                "biourl" => 'required|mimes:jpeg,png,jpg,doc,docx,pdf',
            ],
            [
                'name.required' => 'This name field is required.',
                'bdt.required' => 'This birthdate field is required.',
                'sex.required' => 'This gender field is required.',
                'district.required' => 'This district field is required.',
                'state.required' => 'This state field is required.',
                'maritalstatus.required' => 'This maritalstatus field is required.',
                'occupation.required' => 'This occupation field is required.',
                'photourl.required' => 'This photo field is required.',
                'photourl.image' => 'This photo field is required.',
                'biourl.required' => 'This biodata field is required.',
                'biourl.mimes' => 'This biodata must be a file of type: jpeg, png, jpg, doc, docx, pdf.',
            ]
        );

        if ($validator) {
            $photourl = $request->file('photourl');
            $biourl = $request->file('biourl');

            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($photourl->getClientOriginalExtension());
            $photourl->blur(15);
            $img_name = $name_gen . '.' . $image_ext;
            $up_location = 'upload/matrimony/';
            $img1 = $up_location . $img_name;
            $photourl->move($up_location, $img_name);

            $namegen = hexdec(uniqid());
            $imageext = strtolower($biourl->getClientOriginalExtension());
            $imgname = $namegen . '.' . $imageext;
            $uplocation = 'upload/matrimony/';
            $img2 = $uplocation . $imgname;
            $biourl->move($uplocation, $imgname);

            $matrimony = Matrimony::insert([
                'name' => $request->name,
                'uid' => Auth::id(),
                'bdt' => $request->bdt,
                'sex' => $request->sex,
                'district' => $request->district,
                'state' => $request->state,
                'biourl' => $img2,
                'photourl' => $img1,
                'maritalstatus' => $request->maritalstatus,
                'occupation' => $request->occupation,
                'created_at' => Carbon::now()
            ]);

            return response()->json($matrimony);
        }
    }

    // User Matrimony List
    public function matrimonyList()
    {
        return view('layouts.matrimony.matrimonylist');
    }

    // User matrimony Fetch
    public function fetchMatrimony()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $matrimony = Matrimony::where('uid', Auth::id())->orderBy('id', 'DESC')->get();
        return response()->json($matrimony);
    }

    // frontend matrimony Details
    public function matrionyDetails($id)
    {
        $matrimony = Matrimony::where('id', $id)->first();
        return view('layouts.frontend.matrimony.matrimonydetails', compact('matrimony'));
    }

    // Download User Matrimony Bio
    public function downloadBIO($id)
    {
    }
}
