<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teams')->insert([[
            'name' => 'العمليات الذكية',
            'name_en' => 'Intelligent Processes',
            'name_fr' => 'Processus Intelligents',
        ],[
            'name' => 'التوزيع الديناميكي للبيانات',
            'name_en' => 'Dynamic Data Distribution',
            'name_fr' => 'Distribution Dynamique de Données',
        ],[
            'name' => 'قواعد البيانات المتقدمة',
            'name_en' => 'Advanced Databases',
            'name_fr' => 'Bases de Données Avancées',
        ],[
            'name' => 'الرياضيات التطبيقية',
            'name_en' => 'Applied mathematics',
            'name_fr' => 'Mathématiques Appliquées',
        ]]);
    }
}