<?php namespace Octobro\Metabase\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use Metabase\Embed as MetabaseEmbed;

/**
 * Metabase Report Widget
 */
class Metabase extends ReportWidgetBase
{
    /**
     * @var string The default alias to use for this widget
     */
    protected $defaultAlias = 'MetabaseReportWidget';

    /**
     * Defines the widget's properties
     * @return array
     */
    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => 'Metabase Report Widget',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error',
            ],
        ];
    }
    
    /**
     * Adds widget specific asset files. Use $this->addJs() and $this->addCss()
     * to register new assets to include on the page.
     * @return void
     */
    protected function loadAssets()
    {
    }
    
    /**
     * Renders the widget's primary contents.
     * @return string HTML markup supplied by this widget.
     */
    public function render()
    {
        try {
            $this->prepareVars();
        } catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('metabase');
    }

    /**
     * Prepares the report widget view data
     */
    public function prepareVars()
    {
        $this->vars['metabaseUrl']         = $metabaseUrl         = config('metabase.url');
        $this->vars['metabaseKey']         = $metabaseKey         = config('metabase.key');
        $this->vars['metabaseDashboardId'] = $metabaseDashboardId = config('metabase.dashboard_id');
        $this->vars['metabaseParams']      = $metabaseParams      = config('metabase.params');
    }

    public function renderMetabaseDashboard()
    {
        extract($this->vars);
        
        $metabase = new MetabaseEmbed($metabaseUrl, $metabaseKey);
        echo $metabase->dashboardIframe($metabaseDashboardId, $metabaseParams);
    }
}
