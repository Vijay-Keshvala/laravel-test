<?php

namespace App\Helpers;

use App\Helpers\GoogleAnalytics;
use Google\Analytics\Data\V1beta\DateRange;
use Google\Analytics\Data\V1beta\Dimension;
use Google\Analytics\Data\V1beta\Metric;

class AnalyticsData
{
    protected $analyticsService;

    public function __construct(GoogleAnalytics $analyticsService)
    {
        $this->analyticsService = $analyticsService;
    }

    public function activeUsers()
    {
        try{
            $options = [
                'metrics' => [
                    new Metric([
                        'name' => 'activeUsers',
                    ])
                ],
            ];
    
            return $this->analyticsService->getRealtimeReport($options)->getRows();
        }catch(\Exception $error){
            throw new \Exception($error->getMessage());
        }
    }

    public function usersLast30Days()
    {
        try{
            $options = [
                'metrics' => [
                    new Metric([
                        'name' => 'totalUsers'
                    ]),
                    new Metric([
                        'name' => 'newUsers',
                    ]),
                    new Metric([
                        'name' => 'averageSessionDuration',
                    ]),
                ],
                "dateRanges" => [
                    new DateRange([
                        "start_date"=> '30daysAgo',
                        "end_date"=> 'today',
                    ])
                ],
            ];
    
            return $this->analyticsService->getCoreReport($options)->getRows();
        }catch(\Exception $error){
            throw new \Exception($error->getMessage());
        }
    }

    public function visitorsByCountry30Days()
    {
        try{
            $options = [
                'dimensions' => [
                    new Dimension([
                        'name' => 'country'
                    ])
                ],
                'metrics' => [
                    new Metric([
                        'name' => 'totalUsers'
                    ]),
                ],
                "dateRanges" => [
                    new DateRange([
                        "start_date"=> '30daysAgo',
                        "end_date"=> 'today',
                    ])
                ],
            ];
    
            return $this->analyticsService->getCoreReport($options)->getRows();
        }catch(\Exception $error){
            throw new \Exception($error->getMessage());
        }
    }

    public function visitsByPage30Days()
    {
        try{
            $options = [
                'dimensions' => [
                    new Dimension([
                        'name' => 'pageTitle'
                    ])
                ],
                'metrics' => [
                    new Metric([
                        'name' => 'sessions'
                    ]),
                ],
                "dateRanges" => [
                    new DateRange([
                        "start_date"=> '30daysAgo',
                        "end_date"=> 'today',
                    ])
                ],
            ];
    
            return $this->analyticsService->getCoreReport($options)->getRows();
        }catch(\Exception $error){
            throw new \Exception($error->getMessage());
        }
    }
}