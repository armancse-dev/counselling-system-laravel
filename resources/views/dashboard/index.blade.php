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



            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$today_registered}}</h3>

                            <p>Today</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('counsel.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{$total_counsel}}</h3>

                            <p>Total Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('counsel.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>{{$total_admission}}</h3>

                            <p>Total Admission</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3 >65% &nbsp;<i class="ion ion-university"></i></h3>
                            
                            <p>Skill Seekers</p>
                            
                            </div>
                        
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <div class="row">

                <div class="col-md-7">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title text-danger">How They Know Us (Facebook,Website,Banner etc. )</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>

                        <div class="box-body text-center">
                            <canvas id="myChart" ></canvas>
                        </div>
                    </div>
                </div>


                <div class="col-md-5">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title text-danger">Counseling By (Phone, Facebook,Website etc. )</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>

                        <div class="box-body text-center">
                            <canvas id="myPieChart" height="215px"  ></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title text-danger">Admission Status</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                            </div>
                        </div>

                        <div class="box-body text-center">
                            <canvas id="myPieChart2" height="215px"  ></canvas>
                        </div>
                    </div>
                </div>



            </div>

                <!-- BAR CHART -->

            <!-- /.row -->


        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

    @push('scripts')


        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["website", "facebook", "newspaper", "banner/poster", "friend/family", "megazine"],
                    datasets: [{
                        label: '# of Participants',
                        data: [ {{$barchart->implode(',')}}],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });

            //counseling by
            var ctx2 = document.getElementById("myPieChart").getContext('2d');;
            var myPieChart = new Chart(ctx2,{
                type: 'pie',
                data: {
                    datasets: [{
                        data: [ {{$piechart->implode(',')}}],
                        backgroundColor:["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"]
                    }],
                    labels: [
                        'phone',
                        'campus_visit',
                        'chat',
                        'facebook',
                        'website',
                        'email'
                    ]
                }
            });

            //admission status
            var ctx3 = document.getElementById("myPieChart2").getContext('2d');;
            var myPieChart2 = new Chart(ctx3,{
                type: 'pie',
                data: {
                    datasets: [{
                        data: [ {{$piechart2->implode(',')}}],
                        backgroundColor:["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#0D698C","#215EDA"]
                    }],
                    labels: [
                        'admitted',
                        'form_sold' ,
                        'visit_again',
                        'will_think' ,
                        'will_get_admission' ,
                        'wont_get_admission',
                        'will_discuss_with_parents'
                    ]
                }
            });





        </script>






    @endpush



@endsection
