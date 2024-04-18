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
        ["Recursos humanos", "Gestión del personal, reclutamiento, selección, capacitación y desarrollo de empleados.", "https://cypes.grupoeurohispana.com/img/profesion/1589/recurso-principal-11919410.jpg"],
        ["Finanzas y contabilidad", "Gestión financiera, contabilidad, análisis de costos, presupuestos y reportes financieros.", "https://contabilidadfinanzas.com/wp-content/uploads/2023/11/contabilidad-y-finanzas.jpg"],
        ["Marketing y publicidad", "Estrategias de mercadeo, promoción de productos o servicios, investigación de mercado y publicidad.", "https://cocktailmarketing.com.mx/wp-content/uploads/2021/07/que-es-y-que-hace-una-agencia-de-marketing-digital-1024x683.jpg"],
        ["Operaciones y logística", "Gestión de la cadena de suministro, logística, distribución de productos y optimización de procesos.", "https://ibertransit.com/wp-content/uploads/logistica-outbound.jpg"],
        ["Ventas y desarrollo de negocios", "Desarrollo de estrategias de ventas, gestión de clientes, negociación y generación de ingresos.", "https://media.licdn.com/dms/image/C4D12AQGQ2Nwn7Kio-Q/article-cover_image-shrink_600_2000/0/1627895254405?e=2147483647&v=beta&t=Yjci3i5shhdBMIoui_G43xKcLh3JCEVBqW8SDq_8bYY"],
        ["Servicio al cliente", "Atención al cliente, soporte técnico, gestión de reclamos y resolución de problemas.", "https://www.questionpro.com/blog/wp-content/uploads/2023/06/2426-Portada-modelo-de-servicio-al-cliente.jpg"],
        ["Gestión de proyectos", "Planificación, ejecución y control de proyectos, asignación de recursos y seguimiento de objetivos.", "https://www.ceupe.com.ve/images/easyblog_articles/230/ges_proyec.png"],
        ["Educación y formación", "Desarrollo y entrega de programas de capacitación, educación continua y desarrollo profesional.", "https://www.ofizios.com/imagenes-noticias/avatares-en-clase_g.jpg"],
        ["Salud y bienestar", "Gestión de programas de bienestar laboral, promoción de la salud y seguridad ocupacional.", "https://fundacionasispa.org/wp-content/uploads/2021/09/salud-y-bienestar.jpg"],
        ["Gobierno y administración pública", "Gestión de políticas públicas, administración de recursos gubernamentales y servicios públicos.", "https://www3.gobiernodecanarias.org/noticias/wp-content/uploads/2024/02/Consejo-de-Administracion-del-ICAP-celebrado-ayer-ern-Santa-Cruz-de-Tenerife.jpeg"]
    ];

    foreach ($categories as $category) {
        DB::table('Category')->insert([
            'CategoryName' => $category[0],
            'description' => $category[1],
            'image' => $category[2],
        ]);
    }
}
}
