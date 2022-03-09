<?php

namespace App\Http\Controllers;

use App\Department;
use App\StudentInformation;
use App\Discussion;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Validator;

class StudentInformationController extends Controller
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
        $carbon=new Carbon();
        $counsel=new StudentInformation();
        $discussion=Discussion::all();

        $total_counsel=$counsel->all()->count();

//        $discus=StudentInformation::find(1)->discussions;
//        dd($discus);

//        $students=StudentInformation::all();

         $students=StudentInformation::orderBy('id','DESC')->get();

        $total_discussion=$discussion->count();
        $today_registered=StudentInformation::whereDate('created_at',$carbon->today())->count();

        return view('dashboard.student.index',compact('students','total_counsel','total_discussion','today_registered'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counsel=StudentInformation::all();
        $discussion=Discussion::all();

        $total_counsel=$counsel->count();
        $total_discussion=$discussion->count();

        $departments=Department::all();
        return view('dashboard.student.form',compact('departments','total_counsel','total_discussion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $discussion=new Discussion;

       $data=$request->only('name','sex','phone','email','last_education','profession','age','division','area',
'department_id','course_name','how_they_know','feedback','counseling_by');


        $student=StudentInformation::create($data);


        $discussion->student_information_id=$student->id;
        $discussion->feedback=$request->feedback;
        $discussion->discussion_summary=$request->discussion_summary;

        $discussion->save();

        return redirect(route('counsel.index'))->with('status','Successfully Added New Counseling Information!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentInformation  $studentInformation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departments=Department::all();
        $student=StudentInformation::find($id);
        return view('dashboard.student.edit_student',compact('student','departments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentInformation  $studentInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentInformation $studentInformation)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentInformation  $studentInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

//        $student=StudentInformation::find();
        $data=$request->only('id','name','sex','phone','email','last_education','profession','age','division','area','department_id','course_name','how_they_know');
        $student=StudentInformation::find($id);


       $student->update($data);

        return redirect(route('counsel.index'))->with('status','Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentInformation  $studentInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentInformation $studentInformation)
    {
        //
    }

    public function getallStudent(){

//        $students=StudentInformation::all();;


        // dd($students);

        //$discus=StudentInformation::find(1)->discussions->last();

//        dd(StudentInformation::query());

//        return \DataTables::of($students)->addColumn('action', function ($students) {
//            return '<a href="#edit-'.$students->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
//        })->editColumn('id', 'ID: {{$id}}')->make(true);


    }


}
