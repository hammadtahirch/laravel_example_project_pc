<?php

use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Eloquent\User::updateOrCreate(
            [
                "name" => "Administrator",
                "email" => "hammad.tahir.ch@gmail.com",
                "email_verified_at" => date("Y-m-d H:i:s"),
                "password" => \Illuminate\Support\Facades\Hash::make("admin_12345")
            ],
            [
                "email" => "hammad.tahir.ch@gmail.com"
            ]
        );
    }
}
