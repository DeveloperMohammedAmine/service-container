<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
            'type' => 'email',
            'value' => 'website@support.com'
            ],
            [
            'type' => 'phone number',
            'value' => '+213658745668'
            ],
            [
            'type' => 'address',
            'value' => '50 logt part mila algeria'
            ],
            [
            'type' => 'facebook',
            'value' => 'facebook/mohammed.com'
            ],
            [
            'type' => 'x',
            'value' => 'x/mohammed.com'
            ],
            [
            'type' => 'instagram',
            'value' => 'instagram/mohammed.com'
            ],
            [
            'type' => 'youtube',
            'value' => 'youtube/mohammed.com'
            ],
        ];

        foreach($settings as $setting) {
            Setting::create($setting);
        }
    }
}
