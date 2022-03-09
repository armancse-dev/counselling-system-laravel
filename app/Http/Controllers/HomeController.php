<?php

namespace App\Http\Controllers;

use App\Department;
use App\StudentInformation;
use App\Discussion;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counsel=StudentInformation::all();
        $discussion=Discussion::all();

        //how they know
        $website=$counsel->where('how_they_know','website')->count();
        $facebook=$counsel->where('how_they_know','facebook')->count();
        $newspaper=$counsel->where('how_they_know','newspaper')->count();
        $banner_poster=$counsel->where('how_they_know','banner_poster')->count();
        $friend_family=$counsel->where('how_they_know','friend_family')->count();
        $megazine=$counsel->where('how_they_know','megazine')->count();

        //counsel by
        $phone=$counsel->where('counseling_by','phone')->count();
        $campus_visit=$counsel->where('counseling_by','campus_visit')->count();
        $chat=$counsel->where('counseling_by','chat')->count();
        $by_facebook=$counsel->where('counseling_by','facebook')->count();
        $by_website=$counsel->where('counseling_by','website')->count();
        $by_email=$counsel->where('counseling_by','email')->count();

        //admission status

$admitted=$discussion->where('feedback','admitted')->count();
$form_sold=$discussion->where('feedback','form_sold')->count();
$visit_again=$discussion->where('feedback','visit_again')->count();
$will_think=$discussion->where('feedback','will_think')->count();
$will_get_admission=$discussion->where('feedback','will_get_admission')->count();
$wont_get_admission=$discussion->where('feedback','wont_get_admission')->count();
$will_discuss_with_parents=$discussion->where('feedback','will_discuss_with_parents')->count();
$will_discuss_with_friends=$discussion->where('feedback','will_discuss_with_friends')->count();




//        dd($admitted);


       $barchart=collect([
         'website' => $website,
         'facebook' => $facebook,
         'newspaper' => $newspaper,
         'banner_poster' => $banner_poster,
         'friend_family' => $friend_family,
         'megazine' => $megazine
       ]);

        $piechart=collect([
            'phone' => $phone,
            'campus_visit' => $campus_visit,
            'chat' => $chat,
            'by_facebook' => $by_facebook,
            'by_website' => $by_website,
            'by_email' => $by_email
        ]);

        $piechart2=collect([
            'admitted' => $admitted,
            'form_sold' => $form_sold,
            'visit_again' => $visit_again,
            'will_think' => $will_think,
            'will_get_admission' => $will_get_admission,
            'wont_get_admission' => $wont_get_admission,
            'will_discuss_with_parents' => $will_discuss_with_parents,
            'will_discuss_with_friends' => $will_discuss_with_friends
        ]);


//      $barcharts=$barchart->values()->all();
//      $piecharts=$piechart->values()->all();





        $total_counsel=$counsel->count();
        $total_discussion=$discussion->count();
        $today_registered=StudentInformation::whereDate('created_at',Carbon::today())->count();

         $total_admission=$discussion->where('feedback','admitted')->count();


        return view('dashboard.index',compact('total_counsel','total_discussion','today_registered',
            'total_admission','barchart','piechart','piechart2'));
    }
}
