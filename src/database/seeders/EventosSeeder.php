<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('eventos')->insert([
            'titulo' => 'Conferencia IA 2026',
            'descripcion' => 'Tendencias sobre inteligencia artificial generativa.',
            'fecha_inicio' => '2026-03-15',
            'fecha_fin' => '2026-03-17',
            'ubicacion' => 'Auditorio Nacional',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Taller Laravel Avanzado',
            'descripcion' => 'Optimización de consultas y patrones de diseño.',
            'fecha_inicio' => '2026-04-10',
            'fecha_fin' => '2026-04-10',
            'ubicacion' => 'Aula Virtual Zoom',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Hackathon FastCode',
            'descripcion' => '48 horas creando soluciones para el cambio climático.',
            'fecha_inicio' => '2026-05-20',
            'fecha_fin' => '2026-05-22',
            'ubicacion' => 'Tech Hub CDMX',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Expo Empleo IT',
            'descripcion' => 'Conexión directa con empresas de software.',
            'fecha_inicio' => '2026-06-05',
            'fecha_fin' => '2026-06-06',
            'ubicacion' => 'Centro de Convenciones',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Seminario Ciberseguridad',
            'descripcion' => 'Protección contra ataques de ransomware.',
            'fecha_inicio' => '2026-06-15',
            'fecha_fin' => '2026-06-15',
            'ubicacion' => 'Hotel Hilton',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Festival de Jazz',
            'descripcion' => 'Presentación de bandas internacionales.',
            'fecha_inicio' => '2026-07-01',
            'fecha_fin' => '2026-07-03',
            'ubicacion' => 'Parque Central',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Curso de React Native',
            'descripcion' => 'Desarrollo de apps móviles multiplataforma.',
            'fecha_inicio' => '2026-08-10',
            'fecha_fin' => '2026-08-14',
            'ubicacion' => 'Plataforma EduTech',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Foro Económico Anual',
            'descripcion' => 'Análisis de la economía global post-2025.',
            'fecha_inicio' => '2026-09-05',
            'fecha_fin' => '2026-09-06',
            'ubicacion' => 'Bolsa de Valores',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Maratón 21K',
            'descripcion' => 'Carrera anual de media distancia.',
            'fecha_inicio' => '2026-10-12',
            'fecha_fin' => '2026-10-12',
            'ubicacion' => 'Paseo de la Reforma',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Feria Gastronómica',
            'descripcion' => 'Degustación de platillos típicos regionales.',
            'fecha_inicio' => '2026-10-25',
            'fecha_fin' => '2026-10-27',
            'ubicacion' => 'Plaza Mayor',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Lanzamiento Startup X',
            'descripcion' => 'Presentación oficial de la nueva app de logística.',
            'fecha_inicio' => '2026-11-02',
            'fecha_fin' => '2026-11-02',
            'ubicacion' => 'Coworking Space',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Congreso de Medicina',
            'descripcion' => 'Nuevos avances en telemedicina.',
            'fecha_inicio' => '2026-11-15',
            'fecha_fin' => '2026-11-18',
            'ubicacion' => 'Hospital Ángeles',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Taller de Fotografía',
            'descripcion' => 'Captura de paisajes en entornos urbanos.',
            'fecha_inicio' => '2026-12-05',
            'fecha_fin' => '2026-12-05',
            'ubicacion' => 'Casco Histórico',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Gala de Navidad',
            'descripcion' => 'Cena benéfica para fundaciones locales.',
            'fecha_inicio' => '2026-12-20',
            'fecha_fin' => '2026-12-20',
            'ubicacion' => 'Salón de Eventos Real',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('eventos')->insert([
            'titulo' => 'Webinar SEO 2026',
            'descripcion' => 'Cómo posicionar en los nuevos buscadores con IA.',
            'fecha_inicio' => '2026-05-30',
            'fecha_fin' => '2026-05-30',
            'ubicacion' => 'Online',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
