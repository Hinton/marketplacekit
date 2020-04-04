<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PaymentProvidersSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('payment_providers')->delete();
        
        \DB::table('payment_providers')->insert([
            'id' => '1',
            'name' => 'Default',
            'key' => 'default',
            'icon' => '',
            'display_name' => 'External payment',
            'description' => 'Payment will be handled using an external service.',
            'payment_instructions' => 'Follow instructions specified in item description.',
            // 'client_id' => '',
            // 'client_secret' => '',
            // 'connection_url' => '',
            // 'position' => '',
            'is_offline' => '1',
            'is_enabled' => '1',
            // 'extra_attributes' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        
    }
}