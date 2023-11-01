<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_providers')->insert([
            [
                'provider_type' => 'BANK',
                'provider_name' => 'BNI',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'BANK',
                'provider_name' => 'BRI',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'BANK',
                'provider_name' => 'Mandiri',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'BANK',
                'provider_name' => 'BCA',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'BANK',
                'provider_name' => 'CIMB Niaga',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'BANK',
                'provider_name' => 'Permata',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'BANK',
                'provider_name' => 'Danamon',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'BANK',
                'provider_name' => 'Mega',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'BANK',
                'provider_name' => 'Commonwealth',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'BANK',
                'provider_name' => 'OCBC NISP',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'BANK',
                'provider_name' => 'Bukopin',
                'created_by' => 'admin',
            ],

            [
                'provider_type' => 'BANK',
                'provider_name' => 'BTPN',
                'created_by' => 'admin',
            ],

            [
                'provider_type' => 'BANK',
                'provider_name' => 'Other',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'E WAL',
                'provider_name' => 'OVO',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'E WAL',
                'provider_name' => 'GOPAY',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'E WAL',
                'provider_name' => 'Dana',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'E WAL',
                'provider_name' => 'Other',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'Wise',
                'provider_name' => 'Wise',
                'created_by' => 'admin',
            ],
            [
                'provider_type' => 'Western Union',
                'provider_name' => 'WesternUnion',
                'created_by' => 'admin',
            ],
        ]);
    }
}
