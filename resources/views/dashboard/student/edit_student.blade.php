@extends('dashboard.layouts.master')
@section('title','Counsel')



@section('main-content')

    <style>
        .select2-selection__rendered{
            min-height: 100px;
        }
    </style>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               @yield('title')
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">@yield('title')</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">



            <div class="row">

               {!! Form::open(['route' => ['counsel.update',$student->id],'method' => 'PATCH']) !!}
                   {{--{{csrf_token()}}--}}
                <!-- /.col (left) -->
                   <div class="col-md-9 col-md-offset-1">
                       <!-- general form elements -->
                       <div class="box box-primary">
                           <div class="box-header with-border">
                               <h3 class="box-title"><strong>UPDATE INFORMATION </strong></h3>
                           </div>
                           <!-- /.box-header -->
                           <!-- form start -->
                           <form role="form">
                               <div class="box-body">

                                   <div class="form-group col-md-6">
                                       <label for="name">Name</label>
                                       <input type="text" class="form-control" id="name" name="name"
                                              placeholder="Enter Your Name" value="{{$student->name}}">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="phone">Phone</label>
                                       <input type="text" class="form-control" id="phone" name="phone"
                                              placeholder="Enter Phone Number" value="{{$student->phone}}">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <b>Gender:</b><br>
                                       <input type="radio" {{$student->sex == 'm' ? 'checked' : ''}} name="sex" value="m"
                                       >Male
                                       <input type="radio" {{$student->sex == 'f' ? 'checked' : ''}} name="sex"
                                              value="f">Female

                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="email">Email</label>
                                       <input type="email" class="form-control" id="email" name="email"
                                              placeholder="Enter Your Phone Email" value="{{$student->email}}">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="last_education">Last Education Qualification</label>
                                       <input type="text" class="form-control" id="last_education"
                                              name="last_education"
                                              placeholder="Enter Education Qualification"
                                              value="{{$student->last_education}}">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Profession</label>
                                       <select class="form-control select2" name="profession" style="width: 100%;">

                                           <option value="{{$student->profession}}" {{$student->profession ==
                                           'jobseeker' ? 'selected' : ''}}> Jobseekrs </option>

                                           <option value="">Regular Student</option>
                                            <option value="{{$student->profession}}" {{$student->profession ==
                                           'regular' ? 'selected' : ''}}> Regular Student </option>

                                            <option value="{{$student->profession}}" {{$student->profession ==
                                           'irregular' ? 'selected' : ''}}> Irregular Student </option>

                                           <option value="{{$student->profession}}" {{$student->profession ==
                                           'recently_passed' ? 'selected' : ''}}> Recently Passed Student </option>


                                           <option value="{{$student->profession}}" {{$student->profession ==
                                           'employed' ? 'selected' : ''}}> Employed </option>

                                           <option value="{{$student->profession}}" {{$student->profession ==
                                           'entrepreneur' ? 'selected' : ''}}> Entrepreneur </option>
                                       </select>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="age">Age</label>
                                       <input type="number" class="form-control" id="age" name="age"
                                              placeholder="Enter Your Age" value="{{$student->age}}">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Division</label>
                                       <select class="form-control select2" name="division" style="width: 100%;">
                                           <option selected="selected" value="dhaka">Dhaka</option>
                                           <option value="rajshahi" {{$student->division ==
                                           'rajshahi' ? 'selected' : ''}}>Rajshahi</option>
                                           <option value="rangpur" {{$student->division ==
                                           'rangpur' ? 'selected' : ''}}>Rangpur</option>
                                           <option value="barisal" {{$student->division ==
                                           'barisal' ? 'selected' : ''}}>Barisal</option>
                                           <option value="chittagong" {{$student->division ==
                                           'chittagong' ? 'selected' : ''}}>Chittagong</option>
                                           <option value="khulna" {{$student->division ==
                                           'khulna' ? 'selected' : ''}}>Khulna</option>
                                           <option value="mymensingh" {{$student->division ==
                                           'mymensingh' ? 'selected' : ''}}>Mymensingh</option>
                                           <option value="sylhet" {{$student->division ==
                                           'sylhet' ? 'selected' : ''}}>Sylhet</option>
                                       </select>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="area">Area</label>
                                       <input type="text" class="form-control" id="area" name="area"
                                              placeholder="Enter Your Area" value="{{$student->area}}">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Department</label>
                                       <select id="department_id" name="department_id" class="form-control select2"
                                               style="width: 100%;">

                                           @foreach($departments as $department)

                                               <option value="{{$department->id}}" {{$department->id ==
                                               $student->department_id ? 'selected' : ''}}
                                               >{{ ucfirst($department->department_name)}}</option>

                                           @endforeach

                                       </select>
                                   </div>



                                   <div class="form-group col-md-6">
                                       <label for="course_name">Course Name</label>
                                       <input type="text" class="form-control" id="course_name" name="course_name"
                                              placeholder="Enter Course Name" value="{{$student->course_name}}">
                                   </div>

                                   <!-- /.form-group -->
                                   <div class="form-group col-md-6">
                                       <label>How do they know us</label>
                                       <select class="form-control select2" name="how_they_know" style="width: 100%;">
                                           <option selected="selected">Select Your relation</option>
                                           <option value="megazine" {{$student->how_they_know == 'megazine' ?
                                           'selected' : ''}}>Megazine</option>
                                           <option value="billboard" {{$student->how_they_know == 'billboard' ?
                                           'selected' : ''
                                           }}>Bill-Board</option>
                                           <option value="diu" {{$student->how_they_know == 'diu' ?
                                           'selected' : ''}}>Daffodil
                                               International
                                               University
                                               (DIU)
                                           </option>
                                           <option value="our_student" {{$student->how_they_know == 'our_student'}}>Our
                                               Student</option>
                                           <option value="banner_poster"
                                                   {{$student->how_they_know == 'banner_poster' ? 'selected' : ''
                                                   }}>Banner/Poster</option>
                                           <option value="newspaper" {{$student->how_they_know == 'newspaper' ?
                                           'selected' : ''
                                           }}>Newspaper</option>
                                           <option value="facebook" {{$student->how_they_know == 'facebook' ?
                                           'selected' : ''
                                           }}>Facebook</option>
                                           <option value="youtube" {{$student->how_they_know == 'youtube' ?
                                           'selected' : ''
                                           }}>Youtube</option>
                                           <option value="twitter" {{$student->how_they_know == 'twitter' ?
                                           'selected' : ''
                                           }}>Twitter</option>
                                           <option value="friends" {{$student->how_they_know == 'friends' ?
                                           'selected' : ''
                                           }}>Friends</option>
                                           <option value="family" {{$student->how_they_know == 'family' ? 'selected' : ''
                                           }}>Family</option>
                                           <option value="brochure" {{$student->how_they_know == 'brochure' ?
                                           'selected' : ''
                                           }}>Brochure</option>
                                           <option value="fair" {{$student->how_they_know == 'fair' ?
                                           'selected' : ''}}>Fair</option>
                                           <option value="workshop_seminar"
                                                   {{$student->how_they_know == 'workshop_seminar' ? 'selected' : ''
                                                   }}>Workshop/Seminar</option>
                                           <option value="website" {{$student->how_they_know == 'website' ?
                                           'selected' : ''
                                           }}>Website</option>
                                           <option value="message" {{$student->how_they_know == 'message' ?
                                           'selected' : ''
                                           }}>Message</option>
                                           <option value="email" {{$student->how_they_know == 'email' ? 'selected' : ''
                                           }}>Email</option>
                                       </select>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Counseling By</label>
                                       <select class="form-control select2" name="counseling_by" style="width: 100%;">
                                           <option selected="selected">Select Your relation</option>
                                           <option value="phone" {{$student->counseling_by == 'phone' ? 'selected' : ''
                                           }}>Phone</option>
                                           <option value="messenger" {{$student->counseling_by == 'messenger' ?
                                           'selected' : ''
                                           }}>Messenger</option>
                                           <option value="campus_visit" {{$student->counseling_by == 'campus_visit' ?
                                            'selected' : ''
                                           }}>Campus
                                               Visit</option>
                                           <option value="friends" {{$student->counseling_by == 'friends' ?
                                           'selected' : ''
                                           }}>Friends</option>
                                           <option value="family" {{$student->counseling_by == 'family' ? 'selected' : ''
                                           }}>Family</option>
                                           <option value="brochure" {{$student->counseling_by == 'brochure' ?
                                           'selected' : ''
                                           }}>Brochure</option>
                                           <option value="workshop_seminar"
                                                   {{$student->counseling_by == 'workshop_seminar' ? 'selected' : ''
                                                   }}>Workshop/Seminar</option>
                                           <option value="website" {{$student->counseling_by == 'website' ?
                                           'selected' : ''
                                           }}>Website</option>
                                           <option value="email" {{$student->counseling_by == 'email' ? 'selected' : ''
                                           }}>Email</option>
                                       </select>
                                   </div>
                                   <div class="col-md-6">
                                        &nbsp;
                                   </div>

                                   {{--<div class="form-group col-md-6">--}}
                                       {{--<label>Result</label>--}}
                                       {{--<select class="form-control select2" name="feedback"  style="width: 100%;">--}}
                                           {{--<option selected="selected">Select Result</option>--}}
                                           {{--<option value="admitted">Admitted</option>--}}
                                           {{--<option value="form_sold">Form Sold</option>--}}
                                           {{--<option value="visit_again">Visit Again</option>--}}
                                           {{--<option value="will_think">Will Think</option>--}}
                                           {{--<option value="will_get_admission">Will Get Admission</option>--}}
                                           {{--<option value="will_discuss_with_parents">Will Discuss with parents</option>--}}
                                           {{--<option value="will_discuss_with_friends">Will Discuss with Friends</option>--}}

                                       {{--</select>--}}
                                   {{--</div>--}}


                                   {{--<div class="form-group col-md-12">--}}
                                       {{--<label for="exampleInputSummery1">Discussion Summery 1</label>--}}
                                       {{--<textarea  name="discussion_summary" style="width: 100%;" rows="3" cols="50"--}}
                                                  {{--placeholder="Discussion Summery 1 here"></textarea>--}}
                                   {{--</div>--}}



                                   <div class="col-md-12">
                                       <div class="footer">
                                           <button style="margin-top: 32px;margin-left: 14px;" type="submit" class="btn
                                      btn-primary col-md-6">UPDATE</button>
                                       </div>
                                   </div>


                               </div>
                               <!-- /.box-body -->

                           </form>
                       </div>
                       <!-- /.box -->

                   </div>
                <!-- /.col (right) -->
               {!! Form::close() !!}


            </div>
            <!-- /.row -->


        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->





@endsection
