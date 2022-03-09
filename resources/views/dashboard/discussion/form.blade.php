@extends('dashboard.layouts.master')
@section('title','Attendance')



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

               {!! Form::open(['route' => 'student.store']) !!}
                <!-- /.col (left) -->
                   <div class="col-md-9">
                       <!-- general form elements -->
                       <div class="box box-primary">
                           <div class="box-header with-border">
                               <h3 class="box-title">Quick Example</h3>
                           </div>
                           <!-- /.box-header -->
                           <!-- form start -->
                           <form role="form">
                               <div class="box-body">

                                   <div class="form-group col-md-6">
                                       <label for="exampleInputName">Name</label>
                                       <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Your Name">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="exampleInputPhone">Phone</label>
                                       <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Your Phone Number">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <b>Gender:</b><br>
                                       <input type="radio" name="gender" value="female">Female
                                       <input type="radio" name="gender" value="male">Male
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="exampleInputEmail1">Email</label>
                                       <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Phone Email">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="exampleInputEducation">Last Education Qualification</label>
                                       <input type="email" class="form-control" id="exampleInputEducation" placeholder="Enter Your Education Qualification">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Profession</label>
                                       <select class="form-control select2" style="width: 100%;">
                                           <option selected="selected">Select Your Profession</option>
                                           <option>Regular Student</option>
                                           <option>Recently Passed Student</option>
                                           <option>Jobseekrs</option>
                                           <option>Employed</option>
                                           <option>Entrepreneur</option>
                                       </select>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="exampleInputAge">Age</label>
                                       <input type="number" class="form-control" id="exampleInputAge" placeholder="Enter Your Age">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Division</label>
                                       <select class="form-control select2" style="width: 100%;">
                                           <option selected="selected">Select Your Division</option>
                                           <option>Dhaka</option>
                                           <option>Rajshahi</option>
                                           <option>Rangpur</option>
                                           <option>Barisal</option>
                                           <option>Chittagong</option>
                                           <option>Khulna</option>
                                           <option>Mymensingh</option>
                                           <option>Sylhet </option>
                                       </select>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="exampleInputArea">Area</label>
                                       <input type="text" class="form-control" id="exampleInputArea" placeholder="Enter Your Area">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Department</label>
                                       <select class="form-control select2" style="width: 100%;">
                                           <option selected="selected">Select Department</option>
                                           <option>Diploma in Engineering</option>
                                           <option>Textile Engineering</option>
                                           <option>Hospitality Management</option>
                                           <option>Short Courses</option>

                                       </select>
                                   </div>



                                   <div class="form-group col-md-6">
                                       <label for="exampleInputCourse">Course Name</label>
                                       <input type="text" class="form-control" id="exampleInputCourse" placeholder="Enter Course Name">
                                   </div>

                                   <!-- /.form-group -->
                                   <div class="form-group col-md-6">
                                       <label>How do they know us</label>
                                       <select class="form-control select2" style="width: 100%;">
                                           <option selected="selected">Select Your relation</option>
                                           <option>Magazine</option>
                                           <option>Newspaper</option>
                                           <option>Facebook</option>
                                           <option>Youtube</option>
                                           <option>Twitter</option>
                                           <option>Friends</option>
                                           <option>Family</option>
                                           <option>Brochure</option>
                                           <option>Fair</option>
                                           <option>Workshop</option>
                                           <option>Seminar</option>
                                           <option>Website</option>
                                           <option>Massage</option>
                                           <option>Email</option>
                                       </select>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Counseling By</label>
                                       <select class="form-control select2" style="width: 100%;">
                                           <option selected="selected">Select Your relation</option>
                                           <option>Phone</option>
                                           <option>Messenger</option>
                                           <option>Chat</option>
                                           <option>Campur Visit</option>
                                           <option>Twitter</option>
                                           <option>Friends</option>
                                           <option>Family</option>
                                           <option>Brochure</option>
                                           <option>Fair</option>
                                           <option>Workshop</option>
                                           <option>Seminar</option>
                                           <option>Website</option>
                                           <option>Massage</option>
                                           <option>Email</option>
                                       </select>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Result</label>
                                       <select class="form-control select2" style="width: 100%;">
                                           <option selected="selected">Select Result</option>
                                           <option>Admitted</option>
                                           <option>Will Think</option>
                                           <option>Will Discuss with parents</option>
                                           <option>Will Discuss with Friends</option>
                                           <option>Twitter</option>
                                           <option>Friends</option>
                                           <option>Family</option>
                                           <option>Brochure</option>
                                           <option>Fair</option>
                                           <option>Workshop</option>
                                           <option>Seminar</option>
                                           <option>Website</option>
                                           <option>Massage</option>
                                           <option>Email</option>
                                       </select>
                                   </div>


                                   <div class="form-group col-md-6">
                                       <label for="exampleInputSummery1">Discussion Summery 1</label>
                                       <textarea style="width: 100%;" rows="3" cols="50" name="exampleInputSummery1" placeholder="Discussion Summery 1 here"></textarea>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="exampleInputSummery2">Discussion Summery 2</label>
                                       <textarea style="width: 100%;" rows="3" cols="50" name="exampleInputSummery2" placeholder="Discussion Summery 2 here"></textarea>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="exampleInputSummery3">Discussion Summery 3</label>
                                       <textarea style="width: 100%;" rows="3" cols="50" name="exampleInputSummery3" placeholder="Discussion Summery 3 here"></textarea>
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
