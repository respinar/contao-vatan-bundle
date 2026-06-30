<?php

declare(strict_types=1);

namespace Respinar\ContaoVatanBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\CalendarEventsModel;
use Contao\Events;

/**
 * @Hook("replaceInsertTags")
 */
class UpComingEventInsertTagListener
{

    private const SUPPORTED_TAGS = [
        'upcomingevent_url'
    ];

    /**
     * @return string|false
     */
    public function __invoke(string $tag)
    {

        $elements = explode('::', $tag);
        $key = strtolower($elements[0]);
        

        if (\in_array($key, self::SUPPORTED_TAGS, true)) {
            return $this->replaceEventInsertTag($key, $elements[1]);
        }
        
        return false;
    }

    private function replaceEventInsertTag(string $insertTag, string $pidOrAlias)
    {

        if ( $insertTag != "upcomingevent_url") {
            return false;
        }

        if (null === ($model = CalendarEventsModel::findUpcomingByPids(array($pidOrAlias)))) {
            return '';
        }

        return Events::generateEventUrl($model);

    }
}
