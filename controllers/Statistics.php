<?php namespace Octobro\Metabase\Controllers;

use Backend\Classes\{Controller, NavigationManager};
use Metabase\Embed as MetabaseEmbed;

/**
 * Statistics Backend Controller
 */
class Statistics extends Controller
{
    public function __construct()
    {
        parent::__construct();

        NavigationManager::instance()->setContext('Octobro.Metabase', 'statistics', 'statistics');
    }

    public function index()
    {
        $this->pageTitle = 'Octobro Metabase Dashboard';
    }

    public function renderMetabaseDashboard()
    {
        
        $metabaseUrl         = config('metabase.url');
        $metabaseKey         = config('metabase.key');
        $metabaseDashboardId = config('metabase.dashboard_id', 1);
        $metabaseParams      = config('metabase.params', ['date' => 'past26weeks']);

        $metabase = new MetabaseEmbed($metabaseUrl, $metabaseKey);
        echo $metabase->dashboardIframe($metabaseDashboardId, $metabaseParams);
    }
}
