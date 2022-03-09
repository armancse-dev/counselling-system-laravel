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
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Last Education</th>
                            <th>Profession</th>
                            <th>Age</th>
                            <th>created_at</th>

                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>


                        </tr>

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
            processing: true,
            serverSide: true,
            ajax: '{{ route('counsel/getallStudent') }}',
            columns: [
                {data: 'name', name: 'name'},
                {data: 'sex', name: 'sex'},
                {data: 'phone', name: 'phone'},
                {data: 'email', name: 'email'},
                {data: 'last_education', name: 'last_education'},
                {data: 'profession', name: 'profession'},
                {data: 'age', name: 'age'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
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
