<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Widget;
use Location;
use Setting;
use MetaTag;
use LaravelLocalization;
use Theme;
use App\Models\Category;
use App\Models\Filter;

class HomeController extends Controller
{

    protected $category_id;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function postIndex(Request $request) {
        $url = http_build_query($request->except('_token'));
        return redirect('/home?'.$url);
    }

    public function redirect(Request $request)
    {
        return redirect('/');
    }

    public function index(Request $request)
    {
        if(!setting('custom_homepage')) {
            return app('App\Http\Controllers\BrowseController')->listings($request);
        }

        $current_locale = LaravelLocalization::getCurrentLocale();
        $data['widgets'] = Widget::all();
        $data['show_search'] = false;

        MetaTag::set('title', Setting::get('home_title'));
        MetaTag::set('description', Setting::get('home_description'));
        MetaTag::set('keywords', Setting::get('site_keywords'));
        
        $filters = Filter::orderBy('position', 'ASC')->where('is_hidden', 0)->where('is_default', 0)->get();
        $categories = Category::nested()->get();
        $listings = Listing::active()->orderBy('created_at', 'DESC')->limit(5)->get();

        $data['categories'] = $categories;
        $data['items'] = $listings;

        return view('home.index', $data);
		
    }

}
