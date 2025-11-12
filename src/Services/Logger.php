<?php

namespace laravelLogger\modelLogger\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Logger
{
    public static function logEvent(string $event, $model): void
    {
        $data = [
            'model' => get_class($model),
            'event' => $event,
            'attributes' => json_encode($model->toArray()),
            'created_at' => now(),
        ];

        if (config('model-logger.log_to') === 'database') {
            DB::table('model_logs')->insert($data);
        } else {
            $message = '[' . now() . "] {$data['model']} {$event}: " . json_encode($model->toArray()) . PHP_EOL;
            File::append(config('model-logger.log_file'), $message);
        }
    }
}
