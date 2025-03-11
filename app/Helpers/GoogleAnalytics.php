<?php

namespace App\Helpers;

use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;

class GoogleAnalytics
{
    protected $client;

    public function __construct()
    {
        $this->client = new BetaAnalyticsDataClient([
            'credentials' => env('GOOGLE_APPLICATION_CREDENTIALS')
        ]);
    }

    public function getCoreReport(array $options)
    {
        $options['property'] =  'properties/'.env('GOOGLE_ANALYTICS_VIEW_ID');

        return $this->client->runReport($options);
    }

    public function getRealtimeReport(array $options)
    {
        $options['property'] =  'properties/'.env('GOOGLE_ANALYTICS_VIEW_ID');

        return $this->client->runRealtimeReport($options);
    }
}