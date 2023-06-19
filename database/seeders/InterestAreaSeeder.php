<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Team;

class InterestAreaSeeder extends Seeder
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
            'name' => 'هياكل البيانات والملفات',
            'name_en' => 'Data and file structures',
            'name_fr' => 'Structures de données et de fichiers',
        ],[
            'name' => 'البرمجة بكافة أشكالها',
            'name_en' => 'Programming in all its forms',
            'name_fr' => 'Programmation dans toutes ses formes',
        ],[
            'name' => 'قواعد البيانات',
            'name_en' => 'Databases',
            'name_fr' => 'Bases de données',
        ],[
            'name' => 'التجميع',
            'name_en' => 'Compilation',
            'name_fr' => 'Compilation',
        ],[
            'name' => 'مواصفات البرنامج',
            'name_en' => 'Program specifications',
            'name_fr' => 'Spécifications de programmes',
        ],[
            'name' => 'دراسة المشكلات المتعلقة بالميكانيكا والفيزياء (تدفق السوائل ، الانتشار ، إلخ) في الوسائط المسامية والمركبة',
            'name_en' => 'Study of problems related to mechanics and physics (fluid flow, diffusion, etc.) in porous and composite media',
            'name_fr' => 'Étude de problèmes liés à la mécanique et à la physique (Écoulement de fluides, diffusion.....) dans des milieux poreux et composites',
        ],[
            'name' => 'الإحصائيات المكانية والوظيفية',
            'name_en' => 'Spatial and functional statistics',
            'name_fr' => 'Statistiques spatiales et fonctionnelles',
        ],[
            'name' => 'استخراج البيانات',
            'name_en' => 'Data mining',
            'name_fr' => 'Data mining',
        ],[
            'name' => 'التعلم الآلي',
            'name_en' => 'Machine learning',
            'name_fr' => 'Machine learning',
        ],[
            'name' => 'عمليات عشوائية',
            'name_en' => 'Random processes',
            'name_fr' => 'Processus aléatoires',
        ],[
            'name' => 'معالجة الصورة',
            'name_en' => 'Image processing',
            'name_fr' => "Traitement d'images",
        ],[
            'name' => 'نظرية الأعداد',
            'name_en' => 'Number theory',
            'name_fr' => 'Théorie des nombres',
        ],[
            'name' => 'الروبوتات والإدراك',
            'name_en' => 'Robotics & Perception',
            'name_fr' => 'Robotique & Perception',
        ],[
            'name' => 'الخوارزميات',
            'name_en' => 'Algorithms',
            'name_fr' => 'Algorithmique',
        ],[
            'name' => 'نماذج البرمجة',
            'name_en' => 'Programming Paradigms',
            'name_fr' => 'Paradigmes de programmations',
        ],[
            'name' => 'البنى المتقدمة للجيل القادم من نظم إدارة قواعد البيانات',
            'name_en' => 'Advanced architectures of next-generation DBMSs',
            'name_fr' => 'Architectures avancées des SGBD de la nouvelle génération',
        ],[
            'name' => 'العمليات الذكية',
            'name_en' => 'Intelligent Processes',
            'name_fr' => 'Processus intelligents',
        ],[
            'name' => 'الذكاء الاصطناعي',
            'name_en' => 'Artificial Intelligence',
            'name_fr' => 'Intelligence Artificielle',
        ],[
            'name' => 'الوسائط المسامية والمركبة',
            'name_en' => 'Porous and composite media',
            'name_fr' => 'Milieux poreux et composites',
        ],[
            'name' => 'تحليل البيانات',
            'name_en' => 'Analyse des données',
            'name_fr' => 'Data analysis',
        ],[
            'name' => 'تصميم هياكل البيانات الملائمة للبيئات الموزعة والمتنقلة',
            'name_en' => 'Design of data structures adapted for distributed and mobile environments',
            'name_fr' => 'Conception de structures de données adaptées pour les environnements distribués et mobiles',
        ]]);
    }
}