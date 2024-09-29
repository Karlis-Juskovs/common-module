<?php

namespace CommonModule;

use Carbon\Carbon;

class Helper
{
    public static function formatDate(string|Carbon $date): string
    {
        if (!($date instanceof Carbon)) {
            $date = Carbon::parse($date);
        }

        if ($date->isToday()) {
            return 'today ' . $date->format('H:i');
        }

        if ($date->isYesterday()) {
            return 'yesterday ' . $date->format('H:i');
        }

        if ($date->isCurrentYear()) {
            return $date->format('d. F H:i');
        }

        return $date->format('Y d. F H:i');
    }
}
