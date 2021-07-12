<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Jobpost;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jobpostController extends Controller
{
    //
    public function jobPost()
    {
        return view('layouts.job.jobpost');
    }

    // User Fetch Job Post List
    public function fetchJobPost()
    {
        $jobpostlist = Jobpost::latest()->get();
        return response()->json($jobpostlist);
    }

    //
    public function jobPostList()
    {
        return view('layouts.job.jobpostlist');
    }

    // User Add Job Post Using Ajax
    public function addJobPost(Request $request)
    {
        $validator = $request->validate([
            "title" => 'required',
            "description" => 'required',
            "contactno" => 'required',
            "emailid" => 'required',
            "city" => 'required',
            "country" => 'required',
            "jobtype" => 'required',
            "jobdetails" => 'required',
            "jpdt" => 'required',
            "photo" => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator) {
            $photo = $request->file('photo');

            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($photo->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $image_ext;
            $up_location = 'upload/jobpost/';
            $img = $up_location . $img_name;
            $photo->move($up_location, $img_name);

            $jobfind = Jobpost::insert([
                'uid' => Auth::id(),
                'title' => $request->title,
                'description' => $request->description,
                'contactno' => $request->contactno,
                'emailid' => $request->emailid,
                'city' => $request->city,
                'country' => $request->country,
                'jobtype' => $request->jobtype,
                'jobdetails' => $request->jobdetails,
                'jpdt' => $request->jpdt,
                'photo' => $img,
                'created_at' => Carbon::now()
            ]);
            return response()->json($jobfind);
        }
    }

    // User Edit Job Post Using Ajax
    public function editJobPost($id)
    {
        $jobpostedit = Jobpost::findOrFail($id);
        return response()->json($jobpostedit);
    }

    // User Add Job Post Update Using Ajax
    public function updateJobPost(Request $request, $id)
    {
        $validator = $request->validate([
            "title" => 'required',
            "description" => 'required',
            "contactno" => 'required',
            "emailid" => 'required',
            "city" => 'required',
            "country" => 'required',
            "jobtype" => 'required',
            "jobdetails" => 'required',
            "jpdt" => 'required',
        ]);

        if ($validator) {
            $oldimg = $request->oldImg;

            if ($photo = $request->file('photo')) {

                $name_gen = hexdec(uniqid());
                $image_ext = strtolower($photo->getClientOriginalExtension());
                $img_name = $name_gen . '.' . $image_ext;
                $up_location = 'upload/jobpost/';
                $img = $up_location . $img_name;
                $photo->move($up_location, $img_name);

                $photo = Jobpost::findOrFail($id);
                $oldimg = $photo->photo;
                unlink($oldimg);

                $jobfind = Jobpost::findOrFail($id)->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'contactno' => $request->contactno,
                    'emailid' => $request->emailid,
                    'city' => $request->city,
                    'country' => $request->country,
                    'jobtype' => $request->jobtype,
                    'jobdetails' => $request->jobdetails,
                    'jpdt' => $request->jpdt,
                    'photo' => $img,
                    'updated_at' => Carbon::now()
                ]);

                return response()->json($jobfind);
            }

            $jobfind = Jobpost::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'contactno' => $request->contactno,
                'emailid' => $request->emailid,
                'city' => $request->city,
                'country' => $request->country,
                'jobtype' => $request->jobtype,
                'jobdetails' => $request->jobdetails,
                'jpdt' => $request->jpdt,
                'created_at' => Carbon::now()
            ]);
            return response()->json($jobfind);
        }
    }

    // Delete Job Post Using Ajax
    public function deleteJobPost($id)
    {
        $jobpost = Jobpost::where('id', $id)->first();
        $image = $jobpost->photo;
        @unlink($image);
        $deletejobpost = Jobpost::where('id', $id)->delete();
        return response()->json($deletejobpost);
    }

    // Front End Jobpost Details
    public function jobpostDetails($id){
        $jobpost = Jobpost::where('id', $id)->first();
        return view('layouts.frontend.jobpostsdetails.jobpostdetails', compact('jobpost'));
    }
}
