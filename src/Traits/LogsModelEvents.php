<?php

namespace laravelLogger\modelLogger\Traits;

use laravelLogger\modelLogger\Services\Logger;

trait LogsModelEvents
{
    public static function bootLogsModelEvents(): void
    {
        static::created(fn ($model) => Logger::logEvent('created', $model));
        static::updated(fn ($model) => Logger::logEvent('updated', $model));
        static::deleted(fn ($model) => Logger::logEvent('deleted', $model));
    }
}
