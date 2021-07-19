<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\frontend\Gallery;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    //
    public function gallery()
    {
        return view('admins.gallery.addgallery');
    }

    public function addGallery(Request $request)
    {
        $validator = $request->validate([
            "name" => 'required',
            "gtype" => 'required',
            "fileurl" => 'required',
            "timage" => 'required',
        ], [
            'name.required' => 'This gallery name field is required.',
            'gtype.required' => 'This gallery type field is required.',
            'fileurl.required' => 'This field is required.',
            'timage.required' => 'This Gallery images field is required.',
        ]);

        if ($validator) {
            $id = Auth::guard('admin')->id();
            $admin = Admin::find($id);

            if ($request->timage > 0) {
                for ($x = 0; $x < $request->timage; $x++) {

                    if ($request->hasFile('timage' . $x)) {
                        $file = $request->file('timage' . $x);

                        $name_gen = hexdec(uniqid());
                        $image_ext = strtolower($file->getClientOriginalExtension());
                        $img_name = $name_gen . '.' . $image_ext;
                        $up_location = 'upload/gallery/';
                        $img = $up_location . $img_name;
                        $file->move($up_location, $img_name);


                        $gallery = Gallery::insert([
                            'uid' => $admin->id,
                            'name' => $request->name,
                            'details' => $request->details,
                            'gtype' => $request->gtype,
                            'timage' => $img,
                            'fileurl' => $request->fileurl,
                            'created_at' => Carbon::now()
                        ]);
                        return response()->json($gallery);
                    }
                }
            } else {
                $gallery = Gallery::insert([
                    'uid' => $admin->id,
                    'name' => $request->name,
                    'details' => $request->details,
                    'gtype' => $request->gtype,
                    'fileurl' => $request->fileurl,
                    'created_at' => Carbon::now()
                ]);
                return response()->json($gallery);
            }
        }
    }
}
