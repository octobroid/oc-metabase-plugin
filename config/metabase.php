<?php

/*
 * Function to translate ENV METABASE_PARAMS from string to array
 **/

/* Uncomment this function below if already copied on your own config folder **/

/*
function translate_key_value_metabase_param($value) {
    $value = explode('=', $value);
    return [$value[0] => $value[1]];
}
**/

/*
 * You can set param on ENV within format METABASE_PARAMS="date=past26weeks,greater_than_or_equal_to=10"
 **/

/* Uncomment this variable if already copied on your own config folder **/
// $metabase_params = array_map('translate_key_value_metabase_param', array_filter(explode(',', env('METABASE_PARAMS'))));

/* Uncomment this return if already copied on your own config folder **/
/*
return [

     // The url of the metabase installation
    'url' => env('METABASE_URL'),
    
     // The secret embed key from the admin settings screen
    'key' => env('METABASE_KEY'),

     // Any parameters to pass to the dashboard
    'params' => array_collapse($metabase_params),

     // The id of the dashboard (from the url)
    'dashboard_id' => (int) env('METABASE_DASHBOARD_ID')
];
**/
