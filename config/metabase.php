<?php

return [

    /*
     * The url of the metabase installation
     **/
    'url' => env('METABASE_URL'),
    

    /* 
     * The secret embed key from the admin settings screen
     **/
    'key' => env('METABASE_KEY'),

    /*
     * Any parameters to pass to the dashboard
     **/
    'params' => [
        'date' => env('METABASE_PARAM_DATE', 'past26weeks')
    ],

    /*
     * The id of the dashboard (from the url)
     **/
    'dashboard_id' => (int) env('METABASE_DASHBOARD_ID')
];
