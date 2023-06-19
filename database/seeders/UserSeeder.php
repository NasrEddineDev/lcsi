<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\Member;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([[
            'name'  => 'جمال الدين',
            'email' => 'd_zegour@esi.dz',
            'password' => Hash::make('password'),
            'email_verified_at'  => date('Y-m-d H:i:s'),
            'role_id' => Role::where('name', 'admin')->first()->id,
            'member_id' => Member::where('lastname_lt', 'zegour')->first()->id,
        ],[
            'name'  => 'وليد خالد',
            'email' => 'wk_hidouci@esi.dz',
            'password' => Hash::make('password'),
            'email_verified_at'  => date('Y-m-d H:i:s'),
            'role_id' => Role::where('name', 'team_leader')->first()->id,
            'member_id' => Member::where('lastname_lt', 'hidouci')->first()->id,
        ],[
            'name'  => 'محمد',
            'email' => 'm_loudini@esi.dz',
            'password' => Hash::make('password'),
            'email_verified_at'  => date('Y-m-d H:i:s'),
            'role_id' => Role::where('name', 'team_leader')->first()->id,
            'member_id' => Member::where('lastname_lt', 'loudini')->first()->id,
        ],[
            'name'  => 'حميد',
            'email' => 'h_haddadou@esi.dz',
            'password' => Hash::make('password'),
            'email_verified_at'  => date('Y-m-d H:i:s'),
            'role_id' => Role::where('name', 'team_leader')->first()->id,
            'member_id' => Member::where('lastname_lt', 'haddadou')->first()->id,
        ],[
            'name'  => 'نصرالدين',
            'email' => 'n_guelfout@esi.dz',
            'password' => Hash::make('password'),
            'email_verified_at'  => date('Y-m-d H:i:s'),
            'role_id' => Role::where('name', 'admin')->first()->id,
            'member_id' => Member::where('lastname_lt', 'guelfout')->first()->id,
        ]]);
    }
}