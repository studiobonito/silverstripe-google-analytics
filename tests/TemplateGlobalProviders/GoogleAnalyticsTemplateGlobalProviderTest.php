<?php namespace StudioBonito\SilverStripe\GoogleAnalytics\Tests\TemplateGlobalProviders;

use Injector;
use Mockery as m;
use StudioBonito\SilverStripe\GoogleAnalytics\TemplateGlobalProviders\GoogleAnalyticsTemplateGlobalProvider;

/**
 * GoogleAnalyticsTemplateGlobalProviderTest.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class GoogleAnalyticsTemplateGlobalProviderTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testGetTemplateGlobalVariables()
    {
        $templateProvider = new GoogleAnalyticsTemplateGlobalProvider();

        $variables = $templateProvider->get_template_global_variables();

        $this->assertArrayHasKey('GoogleAnalytics', $variables);
    }

    public function testGetGoogleAnalyticsScript()
    {
        $mockConfig = m::mock('StdClass');
        $mockConfig->GoogleAnalyticsTrackingID = 'UA-12345678-1';

        $mockSiteConfig = m::mock('SiteConfig')
            ->shouldReceive('current_site_config')
            ->once()
            ->andReturn($mockConfig)
            ->getMock();

        Injector::inst()->registerService($mockSiteConfig, 'SiteConfig');

        $templateProvider = new GoogleAnalyticsTemplateGlobalProvider();

        $script = $templateProvider->getGoogleAnalyticsScript();

        $this->assertRegExp('/UA-12345678-1/', $script);
    }
}