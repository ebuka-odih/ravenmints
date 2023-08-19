<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'admin@ravenmints.online')->first();
        if($admin === null){
            DB::table('users')->insert([
                'name' => 'Admin Admin',
                'status' => 1,
                'username' =>'super_admin',
                'admin' => 1,
                'balance' => 500000,
                'email' => 'admin@ravenmints.online',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('355667At223'),
            ]);
        }
    }

}
