<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Team;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('members')->insert([[
            // Advanced Databases
            'firstname'  => 'وليد خالد',
            'firstname_lt' => 'walid khaled',
            'lastname' => 'حيدوسي',
            'lastname_lt' => 'hidouci',
            'title' => '',
            'grade' => '',
            'dipoma' => '',
            'major' => '',
            'type' => '',
            'mobile' => '',
            'email' => 'wk_hidouci@esi.dz',
            'gender' => '',
            'birthday' => '',
            'address' => '',
            'address_lt' => '',
            'working_at' => '',
            'picture' => '',
            'language' => '',
            'team_id' => Team::where('name_en', 'Advanced Databases')->first()->id,
        ],
        // Applied mathematics
        [
            'firstname'  => 'حميد',
            'firstname_lt' => 'حدادو',
            'lastname' => 'hamid',
            'lastname_lt' => 'haddadou',
            'title' => '',
            'grade' => '',
            'dipoma' => '',
            'major' => '',
            'type' => '',
            'mobile' => '',
            'email' => 'h_haddadou@esi.dz',
            'gender' => '',
            'birthday' => '',
            'address' => '',
            'address_lt' => '',
            'working_at' => '',
            'picture' => '',
            'language' => '',
            'team_id' => Team::where('name_en', 'Applied mathematics')->first()->id,
        ],[
            'firstname'  => 'نصرالدين',
            'firstname_lt' => 'قلفوط',
            'lastname' => 'nasreddine',
            'lastname_lt' => 'guelfout',
            'title' => '',
            'grade' => '',
            'dipoma' => '',
            'major' => '',
            'type' => '',
            'mobile' => '',
            'email' => 'h_haddadou@esi.dz',
            'gender' => '',
            'birthday' => '',
            'address' => '',
            'address_lt' => '',
            'working_at' => '',
            'picture' => '',
            'language' => '',
            'team_id' => Team::where('name_en', 'Applied mathematics')->first()->id,
        ],
        // Dynamic Data Distribution
        [
            'firstname'  => 'جمال الدين',
            'firstname_lt' => 'Djamel Eddine',
            'lastname' => 'زقور',
            'lastname_lt' => 'Zegour',
            'title' => 'State Dcotor',
            'grade' => 'Professor',
            'dipoma' => 'State Dcotor',
            'major' => 'Computer System',
            'type' => 'Team Leader',
            'mobile' => '',
            'email' => 'd_zegour@esi.dz',
            'gender' => 'Male',
            'birthday' => '',
            'address' => '',
            'address_lt' => '',
            'working_at' => 'ESI',
            'picture' => '',
            'language' => '',
            'team_id' => Team::where('name_en', 'Dynamic Data Distribution')->first()->id,
        // ],[
        //     'firstname'  => 'جمال الدين',
        //     'firstname_lt' => '',
        //     'lastname' => '',
        //     'lastname_lt' => '',
        //     'title' => 'State Dcotor',
        //     'grade' => 'Professor',
        //     'dipoma' => 'State Dcotor',
        //     'major' => 'Computer System',
        //     'type' => 'Team Leader',
        //     'mobile' => '',
        //     'email' => '@esi.dz',
        //     'gender' => '',
        //     'birthday' => '',
        //     'address' => '',
        //     'address_lt' => '',
        //     'working_at' => '',
        //     'picture' => '',
        //     'language' => '',
        //     'team_id' => Team::where('name_en', 'Dynamic Data Distribution')->first()->id,
        ],
        // Intelligent Processes
        [
            'firstname'  => 'محمد',
            'firstname_lt' => 'mohamed',
            'lastname' => 'لوديني',
            'lastname_lt' => 'loudini',
            'title' => 'State Dcotor',
            'grade' => 'Professor',
            'dipoma' => 'State Dcotor',
            'major' => 'Computer System',
            'type' => 'Team Leader',
            'mobile' => '',
            'email' => '@esi.dz',
            'gender' => '',
            'birthday' => '',
            'address' => '',
            'address_lt' => '',
            'working_at' => '',
            'picture' => '',
            'language' => '',
            'team_id' => Team::where('name_en', 'Intelligent Processes')->first()->id,
        ]]);
    }
}