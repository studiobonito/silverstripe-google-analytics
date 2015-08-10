<?php namespace StudioBonito\SilverStripe\GoogleAnalytics\Extensions;

use FieldList;
use TextField;

/**
 * GoogleAnalyticsSiteConfigExtension.
 *
 * @author       Tom Densham <tom.densham@studiobonito.co.uk>
 * @copyright    Studio Bonito Ltd.
 */
class GoogleAnalyticsSiteConfigExtension extends \DataExtension
{
    /**
     * List of database fields. {@link DataObject::$db}
     *
     * @var array
     */
    private static $db = array(
        'GoogleAnalyticsTrackingID' => 'Varchar(16)',
    );

    /**
     * Update list of fields in SiteConfig. Adds all fields inside `Services` parent tab.
     *
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab(
            'Root.Services.GoogleAnalytics',
            array(
                $trackingIdTextField = new TextField(
                    'GoogleAnalyticsTrackingID',
                    _t('GoogleAnalytics.TRACKINGID', 'Tracking ID')
                )
            )
        );

        $trackingIdTextField->setDescription(_t('GoogleAnalytics.TRACKINGID_DESC', 'e.g. \'UA-12345678-1\''));
    }
}