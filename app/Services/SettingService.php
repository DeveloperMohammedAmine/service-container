<?php

namespace App\Services;

use App\Models\Setting;


class SettingService {

    public function setSetting(array $setting) {

        $setting = Setting::updateOrCreate(
            ['type' => $setting['type']],
            [
            'type' => $setting['type'],
            'value' => $setting['value']
            ]
        );

        return $setting;
    }
    
    public function getSetting($type) {
        $setting = Setting::where('type', $type)->get()->first();

        return $setting->value;
    }
    
}

?>