<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class SeederCategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $categories = [
        ["Recursos humanos", "Gestión del personal, reclutamiento, selección, capacitación y desarrollo de empleados."],
        ["Finanzas y contabilidad", "Gestión financiera, contabilidad, análisis de costos, presupuestos y reportes financieros."],
        ["Marketing y publicidad", "Estrategias de mercadeo, promoción de productos o servicios, investigación de mercado y publicidad."],
        ["Operaciones y logística", "Gestión de la cadena de suministro, logística, distribución de productos y optimización de procesos."],
        ["Ventas y desarrollo de negocios", "Desarrollo de estrategias de ventas, gestión de clientes, negociación y generación de ingresos."],
        ["Servicio al cliente", "Atención al cliente, soporte técnico, gestión de reclamos y resolución de problemas."],
        ["Gestión de proyectos", "Planificación, ejecución y control de proyectos, asignación de recursos y seguimiento de objetivos."],
        ["Educación y formación", "Desarrollo y entrega de programas de capacitación, educación continua y desarrollo profesional."],
        ["Salud y bienestar", "Gestión de programas de bienestar laboral, promoción de la salud y seguridad ocupacional."],
        ["Gobierno y administración pública", "Gestión de políticas públicas, administración de recursos gubernamentales y servicios públicos."]
    ];

    foreach ($categories as $category) {
        DB::table('Category')->insert([
            'CategoryName' => $category[0],
            'description' => $category[1],
        ]);
    }
}
}
