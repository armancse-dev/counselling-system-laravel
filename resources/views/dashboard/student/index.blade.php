@extends('dashboard.layouts.master')
@section('title','Student Information')





@section('main-content')

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
                <div class="col-md-6 col-md-offset-3">
                    @if($status=Session::get('status'))
                        <div class="alert alert-danger">
                            {{$status}}
                        </div>
                    @endif


                    {{--validation--}}
                    @if (count($errors) > 0)
                        <div class = "alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{--validation--}}
                </div>
            </div>

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Informations</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Course</th>
                            <th>How They Know</th>
                            <th>feedback</th>
                            <th>Discussion</th>
                            <th>Counseling By</th>
                            <th>created_at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $i=1;
                        @endphp

                           @foreach($students as $std)
                            <tr>
                                <td>{{$i}}</td>
                               <td>{{$std->name}}</td>
                               <td>{{$std->phone}}</td>
                              
                               <td>{{$std->course_name}}</td>
                                <td>{{$std->how_they_know}}</td>

                                {{--<td> @php--}}
                                    {{--$discus=App\StudentInformation::find($std->id)->discussions;--}}

                                    {{--dd($discus);--}}



                                    {{--@endphp--}}
                                {{--</td>--}}



                                  @foreach ($std->find($std->id)->discussions as $feedback)

                                       @if($loop->last)

                                           <td>{{$feedback->feedback}}</td>
                                        @else
                                       {{''}}
                                       @endif

                                   @endforeach
                                   
                                   
                                    @foreach ($std->find($std->id)->discussions as $feedback)

                                       @if($loop->last)

                                           <td>{{$feedback->discussion_summary}}</td>
                                        @else
                                       {{''}}
                                       @endif

                                   @endforeach
                                   
                                <td>{{$std->counseling_by}}</td>
                               <td>{{$std->created_at}}</td>
                                <td>
                                  <div class="btn-group">
                                      <a href="{{route('counsel.show',$std->id)}}" class="btn btn-xs btn-primary"><i
                                                  class="glyphicon
                                glyphicon-edit"></i> Edit</a>
                                      <a href="{{route('discussion.show',$std->id)}}" class="btn btn-xs btn-primary"><i
                                                  class="glyphicon glyphicon-edit"></i> Update</a>
                                  </div>


                                </td>

                            </tr>
                            @php $i++;
                                    @endphp

                            @endforeach






                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection

@push('scripts')
    <script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    });


    $(function () {

        $('#example1').DataTable({
            processing: true

        });

        // $('#datepicker').datepicker({
        //     format:"yyyy-mm-dd",
        //     autoclose: true
        // });
        //
        // $('.timepicker').timepicker({
        //     showInputs: false
        // })

    })
    </script>


@endpush
