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
                <li><a href="#">@yield('title')</a> </li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">



            <div class="row">

               {!! Form::open(['route' => 'counsel.store']) !!}
                <!-- /.col (left) -->
                   <div class="col-md-9 col-md-offset-1">
                       <!-- general form elements -->
                       <div class="box box-primary">
                           <div class="box-header with-border">
                               <h3 class="box-title"><strong>ADD COUNSELING INFORMATION</strong></h3>
                           </div>
                           <!-- /.box-header -->
                           <!-- form start -->
                           <form role="form">
                               <div class="box-body">

                                   <div class="form-group col-md-6">
                                       <label for="name">Name</label>
                                       <input type="text" class="form-control" id="name" name="name"
                                              placeholder="Enter Your Name">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="phone">Phone</label>
                                       <input type="text" class="form-control" id="phone" name="phone"
                                              placeholder="Enter Phone Number">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <b>Gender:</b><br>
                                       <input type="radio" name="sex" value="m" checked>Male
                                       <input type="radio" name="sex" value="f">Female

                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="email">Email</label>
                                       <input type="email" class="form-control" id="email" name="email"
                                              placeholder="Enter Your Phone Email">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="last_education">Last Education Qualification</label>
                                       <input type="text" class="form-control" id="last_education"
                                              name="last_education"
                                              placeholder="Enter Education Qualification">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Profession</label>
                                       <select class="form-control select2" name="profession" style="width: 100%;">
                                           <option value="none" selected="selected">Select Your Profession</option>
                                           <option value="regular">Regular Student</option>
                                           <option value="irregular">Irregular Student</option>
                                           <option value="recently_passed">Recently Passed Student</option>
                                           <option value="jobseeker">Job Seeker</option>
                                           <option value="employed">Employed</option>
                                           <option value="entrepreneur">Entrepreneur</option>
                                       </select>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="age">Age</label>
                                       <input type="number" class="form-control" id="age" name="age"
                                              placeholder="Enter Your Age">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Division</label>
                                       <select class="form-control select2" name="division" style="width: 100%;">
                                           <option selected="selected" value="dhaka">Dhaka</option>
                                           <option value="rajshahi">Rajshahi</option>
                                           <option value="rangpur">Rangpur</option>
                                           <option value="barisal">Barisal</option>
                                           <option value="chittagong">Chittagong</option>
                                           <option value="khulna">Khulna</option>
                                           <option value="mymensingh">Mymensingh</option>
                                           <option value="sylhet">Sylhet</option>
                                       </select>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="area">Area</label>
                                       <input type="text" class="form-control" id="area" name="area"
                                              placeholder="Enter Your Area">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Department</label>
                                       <select id="department_id" name="department_id" class="form-control select2"
                                               style="width: 100%;">

                                           @foreach($departments as $department)

                                               <option value="{{$department->id}}">{{ ucfirst($department->department_name)}}</option>

                                           @endforeach

                                       </select>
                                   </div>



                                   <div class="form-group col-md-6">
                                       <label for="course_name">Course Name</label>
                                       <input type="text" class="form-control" id="course_name" name="course_name"
                                              placeholder="Enter Course Name">
                                   </div>

                                   <!-- /.form-group -->
                                   <div class="form-group col-md-6">
                                       <label>How do they know us</label>
                                       <select class="form-control select2" name="how_they_know" style="width: 100%;">
                                           <option selected="selected">Select any one</option>
                                           <option value="sms">SMS</option>
                                           <option value="megazine">Megazine</option>
                                           <option value="billboard">Bill-Board</option>
                                           <option value="diu">Daffodil International University (DIU)</option>
                                           <option value="our_student">Our Student</option>
                                           <option value="banner_poster">Banner/Poster</option>
                                           <option value="newspaper">Newspaper</option>
                                           <option value="facebook">Facebook</option>
                                           <option value="youtube">Youtube</option>
                                           <option value="twitter">Twitter</option>
                                           <option value="friends_family">Friends/Family</option>
                                           <option value="brochure">Brochure</option>
                                           <option value="workshop_seminar_fair">Workshop/Seminar/Fair</option>
                                           <option value="website">Website</option>
                                           <option value="email">Email</option>
                                       </select>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Counseling By</label>
                                       <select class="form-control select2" name="counseling_by" style="width: 100%;">
                                           <option selected="selected">Select Any One</option>
                                           <option value="phone">Phone</option>
                                           <option value="chat">Chat</option>
                                           <option value="campus_visit">Campus Visit</option>
                                           <option value="website">Website</option>
                                           <option value="facebook">Facebook</option>
                                           <option value="email">Email</option>
                                       </select>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Result</label>
                                       <select class="form-control select2" name="feedback"  style="width: 100%;">
                                           <option selected="selected">Select Result</option>
                                           <option value="admitted">Admitted</option>
                                           <option value="form_sold">Form Sold</option>
                                           <option value="visit_again">Visit Again</option>
                                           <option value="will_think">Will Think</option>
                                           <option value="will_get_admission">Will Get Admission</option>
                                           <option value="won't_get_admission">Won't Get Admission</option>
                                           <option value="will_discuss_with_parents">Will Discuss with parents</option>
                                           <option value="will_discuss_with_friends">Will Discuss with Friends</option>

                                       </select>
                                   </div>


                                   <div class="form-group col-md-12">
                                       <label for="exampleInputSummery1">Discussion Summery 1</label>
                                       <textarea  name="discussion_summary" style="width: 100%;" rows="3" cols="50"
                                                  placeholder="Discussion Summery 1 here"></textarea>
                                   </div>




                                   <div class="footer">
                                       <button style="margin-top: 32px;margin-left: 14px;" type="submit" class="btn btn-primary">Submit</button>
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
