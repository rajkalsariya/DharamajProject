<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Jobfind;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class jobController extends Controller
{
    //
    public function jobFind()
    {
        return view('layouts.job.jobfind');
    }

    //
    public function jobFindList()
    {
        return view('layouts.job.jobfindlist');
    }

    // Add job find using ajax
    public function addJobFind(Request $request)
    {
        $validator = $request->validate([
            "name" => 'required',
            "contactno" => 'required',
            "emailid" => 'required',
            "description" => 'required',
            "resume" => 'required|mimes:pdf|max:10000',
        ]);

        if ($validator) {
            $resume = $request->file('resume');

            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($resume->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $image_ext;
            $up_location = 'upload/jobfind/';
            $img = $up_location . $img_name;
            $resume->move($up_location, $img_name);

            $jobfind = Jobfind::insert([
                'uid' => Auth::id(),
                'name' => $request->name,
                'contactno' => $request->contactno,
                'emailid' => $request->emailid,
                'description' => $request->description,
                'resume' => $img,
                'created_at' => Carbon::now()
            ]);
            return response()->json($jobfind);
        }
    }

    // User Fetch Job Find List
    public function fetchJobFind()
    {
        $jobfindlist = Jobfind::latest()->get();
        return response()->json($jobfindlist);
    }

    // User PDF view
    public function pdfView($id)
    {
        $pdfview = Jobfind::findOrFail($id);
        return view('layouts.job.pdfview', compact('pdfview'));
    }

    // User Edit view
    public function editJobFind($id)
    {
        $jobfindedit = Jobfind::findOrFail($id);
        return response()->json($jobfindedit);
    }

    // User Update Job Find 
    public function updateJobFind(Request $request, $id)
    {

        $validator = $request->validate([
            "name" => 'required',
            "contactno" => 'required',
            "emailid" => 'required',
            "description" => 'required',
        ]);

        if ($validator) {
            $oldimg = $request->olgImg;

            if ($resume = $request->file('resume')) {
                $name_gen = hexdec(uniqid());
                $image_ext = strtolower($resume->getClientOriginalExtension());
                $img_name = $name_gen . '.' . $image_ext;
                $up_location = 'upload/jobfind/';
                $img = $up_location . $img_name;
                $resume->move($up_location, $img_name);

                $pdf = Jobfind::findOrFail($id);
                $oldimg = $pdf->resume;
                unlink($oldimg);

                $jobfind = Jobfind::findOrFail($id)->update([
                    'name' => $request->name,
                    'contactno' => $request->contactno,
                    'emailid' => $request->emailid,
                    'description' => $request->description,
                    'resume' => $img,
                    'updated_at' => Carbon::now()
                ]);

            }

            $jobfind = Jobfind::findOrFail($id)->update([
                'name' => $request->name,
                'contactno' => $request->contactno,
                'emailid' => $request->emailid,
                'description' => $request->description,
                'updated_at' => Carbon::now()
            ]);
            return response()->json($jobfind);
        }
    }

    // Delete JOb Find Using Ajax
    public function deleteJobFind($id)
    {
        $jobfind = Jobfind::where('id', $id)->first();
        $image = $jobfind->resume;
        @unlink($image);
        $deletejobfind = Jobfind::where('id', $id)->delete();
        return response()->json($deletejobfind);
    }
}
