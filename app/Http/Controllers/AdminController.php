<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Analytics;
use Spatie\Analytics\Period;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $visitors_and_page_views = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $total_visitors_and_page_views = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
        $visitors_today = Analytics::fetchTotalVisitorsAndPageViews(Period::days(0));
        $most_visited_pages = Analytics::fetchMostVisitedPages(Period::days(7));
        $top_referers = Analytics::fetchTopReferrers(Period::months(1));
        $user_types = Analytics::fetchUserTypes(Period::months(1));
        $top_browsers = Analytics::fetchTopBrowsers(Period::months(1));


//        var_dump($total_visitors_and_page_views);
//        die();

        foreach($visitors_today as $view){
            $total_visitors[] = $view['visitors'];
            $total_pageViews[] = $view['pageViews'];
        }
        $data = array(
            "visitors_and_page_views" => $visitors_and_page_views,
            "total_visitors_and_page_views" => $total_visitors_and_page_views,
            "most_visited_pages" => $most_visited_pages,
            "top_referers" => $top_referers,
            "user_types" => $user_types,
            "top_browsers" => $top_browsers,
            "total_visitors_today" => array_sum($total_visitors),
            "total_pageViews_today" => array_sum($total_pageViews),
            "most_visited_page" => $most_visited_pages[0]['pageTitle'],
            "new_visitors_this_month" => $user_types[0]['sessions']
        );
        return view('admin.admin')->with("data",$data);
    }

    public function admin()
    {

        return view('admin');
    }

    public function update_user()
    {

//        var_dump(Auth::user()->password);
        return view('admin.edit_profile');
    }

    public function test_analytics()
    {

        $visitors_and_page_views = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $total_visitors_and_page_views = Analytics::fetchTotalVisitorsAndPageViews(Period::months(1));
        $most_visited_pages = Analytics::fetchMostVisitedPages(Period::days(7));
        $top_referers = Analytics::fetchTopReferrers(Period::months(1));
        $user_types = Analytics::fetchUserTypes(Period::years(5));
        $top_browsers = Analytics::fetchTopBrowsers(Period::months(1));

        $data = array(
            "visitors_and_page_views" => $visitors_and_page_views,
            "total_visitors_and_page_views" => $total_visitors_and_page_views,
            "most_visited_pages" => $most_visited_pages,
            "top_referers" => $top_referers,
            "user_types" => $user_types,
            "top_browsers" => $top_browsers
        );
        var_dump($visitors_and_page_views);
        die();
    }


    public function visitors_and_page_views(){

        $visitors_and_page_views = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));


        foreach($visitors_and_page_views as $views){
            $days_res[] =  $views['date']->toDateString();
            $visitors[] = $views['visitors'];
            $pageViews[] = $views['pageViews'];
        }

        $data_set = array($visitors,$pageViews);
        $days = $days_res;

        echo json_encode(array($days,$data_set));
    }
}
