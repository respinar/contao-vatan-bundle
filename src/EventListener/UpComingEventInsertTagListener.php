<?php

declare(strict_types=1);

/*
 * This file is part of Contao Vatan Bundle.
 *
 * (c) Hamid Peywasti
 *
 * @license MIT
 */

namespace Respinar\ContaoVatanBundle\EventListener;

use Contao\CalendarEventsModel;
use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\Events;

/**
 * @Hook("replaceInsertTags")
 */
class UpComingEventInsertTagListener
{
    private const SUPPORTED_TAGS = [
        'upcomingevent_url',
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
        if ('upcomingevent_url' !== $insertTag) {
            return false;
        }

        if (null === ($model = CalendarEventsModel::findUpcomingByPids([$pidOrAlias]))) {
            return '';
        }

        return Events::generateEventUrl($model);
    }
}
