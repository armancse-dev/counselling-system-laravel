@extends('dashboard.layouts.master')
@section('title','Discussion')



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
               {!! Form::open(['route' => 'discussion.store']) !!}
                <!-- /.col (left) -->
                   <div class="col-md-9">
                       <!-- general form elements -->
                       <div class="box box-primary">
                           <div class="box-header with-border">
                               <h3 class="box-title">Update Information</h3>
                           </div>
                           <!-- /.box-header -->
                           <!-- form start -->
                           <form role="form">
                               <div class="box-body">

                                   <input type="hidden" name="student_information_id"
                                          value="{{$discussion->id}}">

                                   <div class="form-group col-md-6">
                                       <label for="exampleInputName">Name</label>
                                       <input type="text" class="form-control" disabled name="name" id="name"
                                              value="{{$students->name}}"
                                              placeholder="Enter
                                       Your Name">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="exampleInputPhone">Phone</label>
                                       <input type="text" class="form-control" disabled name="phone" id="phone"
                                              value="{{$students->phone}}"
                                              placeholder="Enter Your Phone Number">
                                   </div>


                                   <div class="form-group col-md-6">
                                       <label for="exampleInputEmail1">Email</label>
                                       <input type="email" class="form-control" disabled id="email" name="email"
                                              value="{{$students->email}}"
                                              placeholder="Ent   Your Phone Email">
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label>Result</label>
                                       <select class="form-control select2" name="feedback"  style="width: 100%;">
                                           <option selected="selected">Select Result</option>
                                           <option value="admitted" {{ $discussion->feedback == 'admitted' ?
                                           'selected' : ''}}>Admitted</option>
                                           <option value="form_sold" {{ $discussion->feedback == 'form_sold' ?
                                           'selected' : ''}}>Form Sold</option>
                                           <option value="visit_again" {{ $discussion->feedback == 'visit_again' ?
                                           'selected' : ''}}>Visit Again</option>
                                           <option value="will_think" {{ $discussion->feedback == 'will_think' ?
                                           'selected' : ''}}>Will Think</option>
                                           
                                           <option value="will_get_admission" {{ $discussion->feedback ==
                                           'will_get_admission' ? 'selected' : ''}}>Will Get Admission</option>
                                           
                                           <option value="wont_get_admission" {{ $discussion->feedback ==
                                           'wont_get_admission' ? 'selected' : ''}}>Won't Get Admission</option>
                                           
                                           <option value="will_discuss_with_parents" {{ $discussion->feedback ==
                                           'will_discuss_with_parents' ? 'selected' : '' }}>Will Discuss with
                                               parents</option>
                                               
                                           <option value="will_discuss_with_friends" {{ $discussion->feedback ==
                                           'will_discuss_with_friends' ? 'selected' : ''}}>Will Discuss with
                                               Friends</option>
                                               
                                       </select>
                                   </div>


                                   <div class="form-group col-md-6">
                                       <label for="exampleInputSummery1">Previous Discussion</label>
                                       <textarea style="width: 100%;" rows="5" cols="50" name="discussion_summary1"
                                                 placeholder="Discussion Summery 1
                                                 here" disabled>{{$discussion->discussion_summary}}</textarea>
                                   </div>

                                   <div class="form-group col-md-6">
                                       <label for="discussion_summary2">Discussion Summery 2</label>
                                       <textarea style="width: 100%;" rows="5" cols="50" id="discussion_summary" name="discussion_summary"
                                                 placeholder="Discussion Summery 2 here"></textarea>
                                   </div>

                                   <div class="footer">
                                       <button style="margin-top: 32px;margin-left: 14px;" type="submit" class="btn
                                       btn-primary col-md-4">UPDATE</button>
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
