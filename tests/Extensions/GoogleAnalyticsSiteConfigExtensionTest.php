<?php namespace StudioBonito\SilverStripe\GoogleAnalytics\Tests\Extensions;

use FieldList;
use StudioBonito\SilverStripe\GoogleAnalytics\Extensions\GoogleAnalyticsSiteConfigExtension;
use Tab;
use TabSet;

/**
 * GoogleAnalyticsSiteConfigExtensionTest.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class GoogleAnalyticsSiteConfigExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testUpdateCMSFields()
    {
        $extension = new GoogleAnalyticsSiteConfigExtension();

        $fields = new FieldList();
        $fields->push(new TabSet('Root', new Tab('Main')));

        $extension->updateCMSFields($fields);

        $this->assertNotNull($fields->dataFieldByName('GoogleAnalyticsTrackingID'));
    }
}
