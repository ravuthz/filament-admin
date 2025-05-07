<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laravel\Passport\ClientRepository;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $url = config('app.url');

        $service = new ClientRepository();
        $service->createPersonalAccessClient(null, 'Personal Token', $url);
        $service->createPasswordGrantClient(null, 'Password Token', $url);
    }
}
