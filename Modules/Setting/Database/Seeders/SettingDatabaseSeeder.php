<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'Tekno POS',
            'company_email' => 'customerservice@tekno.com',
            'company_phone' => '012345678901',
            'notification_email' => 'notification@tekno.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'Tekno Pos © 2023 || Developed by <strong><a target="_blank" href="https://github.com/Jxhn-Canxii">Braindead</a></strong>',
            'company_address' => 'Cebu, Philippines'
        ]);
    }
}
