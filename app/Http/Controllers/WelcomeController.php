<?php

namespace App\Http\Controllers;

use App\Models\Layout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Helpers\AnalyticsData;

class WelcomeController extends Controller
{
    protected $analyticsData;

    public function __construct(AnalyticsData $analyticsData)
    {
        $this->analyticsData = $analyticsData;
    }
    
    public function index()
    {
        $layouts = Cache::rememberForever('home-layouts', function () {
            return Layout::with('media')->get();
        });

        return view('/welcome', ['layouts' => $layouts]);
    }
    
    public function dashboard()
    {
        try{
            $activeUsers = $this->analyticsData->activeUsers();
            $users = Cache::remember('dashboard-users', 86400, fn()=>$this->analyticsData->usersLast30Days());
            $visitorByCountry = Cache::remember('dashboard-visitors-by-country', 86400, fn()=>$this->analyticsData->visitorsByCountry30Days());
            $visitByPage = Cache::remember('dashboard-visitors-by-page', 86400, fn()=>$this->analyticsData->visitsByPage30Days());
            
            return view('dashboard', [  
                'active_users' => count($activeUsers) ? $activeUsers[0]?->getMetricValues()[0]?->getValue() ?? 0 : 0,
                'users' => count($users) ? $users[0]?->getMetricValues() ?? 0 : false,
                'visitors_by_country' => $visitorByCountry ?? false,
                'visits_by_page' => $visitByPage ?? false,
            ]);
        }catch(\Exception $error){
            return abort(500, $error->getMessage());
        }
    }
}
