<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;


class SubjectListController extends Controller
{
    public function saveSubject(Request $request)
    {
        echo json_encode($request->all());
        $newSubjectItem = new Subject();
        $newSubjectItem->subject_title = $request->subjecttitle;
        $newSubjectItem->subject_description = $request->subjectdescription;
        $newSubjectItem->subject_price = $request->subjectprice;
        $newSubjectItem->subject_totallearninghours = $request->subjecttotallearninghours;
        $newSubjectItem->save();
        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
    }

    public function mainpage()
    {
        if (Auth::check()) {
            return view('mainpage', ['listSubjects' => Subject::all()]);
        }
        return redirect("login")->withSuccess('You do not have access');
    }

    public function markDelete($id)
    {
        $listItem = Subject::find($id);
        $listItem->delete();
        return redirect('mainpage');
    }

    public function markUpdate($id, Request $request)
    {
        $listItem = Subject::find($id);
        $listItem->subject_title = $request->subjecttitle;
        $listItem->subject_description = $request->subjectdescription;
        $listItem->subject_price = $request->subjectprice;
        $listItem->subject_totallearninghours = $request->subjecttotallearninghours;
        $listItem->update();
        return redirect('mainpage');
    }
}
