<?php

namespace App\Http\Controllers;

use App\Department;
use App\StudentInformation;
use App\Discussion;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $counsel=StudentInformation::all();
        $discussion=Discussion::all();


        $total_counsel=$counsel->count();
        $total_discussion=$discussion->count();

        return view('dashboard.discussion.index',compact('total_counsel','total_discussion'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->only('student_information_id','feedback','discussion_summary');

//        dd($data);

        $discus=Discussion::create($data);

        return redirect(route('counsel.index'))->with('status','Successfully Updated Counseling Information!');

      }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discussion  $discussion
     * @return \Illuminate\Http\Response
     */
    public function show(Discussion $discussion)
    {
        $students=StudentInformation::find($discussion->id);
        return view('dashboard.discussion.show',compact('students','discussion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discussion  $discussion
     * @return \Illuminate\Http\Response
     */
    public function edit(Discussion $discussion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discussion  $discussion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discussion $discussion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discussion  $discussion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discussion $discussion)
    {
        //
    }

//    public function getallStudent(){
//        return \DataTables::of(StudentInformation::query())->addColumn('action', function ($attendance) {
//            return '<a href="#edit-'.$attendance->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
//        })->editColumn('id', 'ID: {{$id}}')->make(true);
//
//
//    }

}
