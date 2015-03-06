<?php namespace StudioBonito\SilverStripe\GoogleAnalytics\TemplateGlobalProviders;

use Injector;

/**
 * GoogleAnalyticsTemplateGlobalProvider.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class GoogleAnalyticsTemplateGlobalProvider implements \TemplateGlobalProvider
{
    public static function get_template_global_variables()
    {
        return array(
            'GoogleAnalytics' => array(
                'method'  => 'getGoogleAnalyticsScript',
                'casting' => 'HTMLText'
            )
        );
    }

    public static function getGoogleAnalyticsScript()
    {
        $siteConfigService = Injector::inst()->get('SiteConfig');

        $siteConfig = $siteConfigService->current_site_config();

        return "<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[ r ]=i[ r ]||function(){(i[ r ].q=i[ r ].q||[]).push(arguments)},i[ r ].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', '{$siteConfig->GoogleAnalyticsTrackingID}', 'auto');ga('send', 'pageview');</script>";
    }
}