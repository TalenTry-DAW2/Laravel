<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//libreria nos permite hacer insert
//liberaria para funciones str

class SeederQuestion extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i=1;
        //Recursos humanos
        $preguntas = [
            [
                "pregunta" => "¿Cuál es tu experiencia previa en reclutamiento y selección de personal?",
                "respuestas" => [
                    "Tengo experiencia previa en reclutamiento y selección de personal en mi trabajo anterior.",
                    "He trabajado en reclutamiento y selección durante algunos años en diferentes empresas.",
                    "No tengo experiencia directa en reclutamiento y selección de personal, pero estoy dispuesto a aprender."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la integración de nuevos empleados en la empresa?",
                "respuestas" => [
                    "Yo abordaría la integración de nuevos empleados mediante un proceso estructurado de inducción y capacitación.",
                    "Para abordar la integración de nuevos empleados, implementaría un programa de mentoría para facilitar su adaptación al equipo.",
                    "No tengo un plan específico para abordar la integración de nuevos empleados."
                ]
            ],
            [
                "pregunta" => "¿Cuáles son tus estrategias para retener a los empleados talentosos?",
                "respuestas" => [
                    "Mis estrategias para retener a los empleados talentosos incluyen ofrecer oportunidades de desarrollo profesional y un ambiente laboral positivo.",
                    "Implementaría un sistema de reconocimiento y recompensas para valorar el trabajo de los empleados talentosos y fomentar su lealtad a la empresa.",
                    "No tengo estrategias específicas para retener a los empleados talentosos."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejarías conflictos entre miembros del equipo?",
                "respuestas" => [
                    "Manejaría conflictos entre miembros del equipo fomentando la comunicación abierta y la resolución colaborativa de problemas.",
                    "Implementaría un proceso de mediación y facilitación para abordar los conflictos de manera constructiva y promover la reconciliación.",
                    "Ignoraría los conflictos entre miembros del equipo y esperaría a que se resolvieran por sí mismos."
                ]
            ],
            [
                "pregunta" => "¿Cómo evaluarías las necesidades de capacitación y desarrollo de los empleados?",
                "respuestas" => [
                    "Evaluaría las necesidades de capacitación y desarrollo de los empleados mediante encuestas de retroalimentación, evaluaciones de desempeño y análisis de brechas de habilidades.",
                    "Realizaría reuniones individuales con los empleados para discutir sus metas profesionales y áreas de mejora, y luego diseñaría programas de capacitación personalizados.",
                    "No tengo un método específico para evaluar las necesidades de capacitación y desarrollo de los empleados."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para evaluar el desempeño de los empleados?",
                "respuestas" => [
                    "Mi enfoque para evaluar el desempeño de los empleados incluye establecer objetivos claros, proporcionar retroalimentación regular y realizar revisiones formales de desempeño.",
                    "Utilizaría un sistema de evaluación 360 grados que involucre a colegas, supervisores y subordinados para obtener una visión completa del desempeño de los empleados.",
                    "No tengo un enfoque específico para evaluar el desempeño de los empleados."
                ]
            ],
            [
                "pregunta" => "¿Cómo garantizarías un entorno de trabajo inclusivo y diverso?",
                "respuestas" => [
                    "Garantizaría un entorno de trabajo inclusivo y diverso mediante la implementación de políticas de contratación equitativas, programas de capacitación en diversidad e inclusión, y fomentando la sensibilización cultural.",
                    "Promovería la diversidad en la contratación y crearía grupos de afinidad para proporcionar un espacio seguro para discutir temas relacionados con la diversidad y la inclusión.",
                    "No tengo un plan específico para garantizar un entorno de trabajo inclusivo y diverso."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para promover el bienestar de los empleados en el lugar de trabajo?",
                "respuestas" => [
                    "Tomaría medidas para promover el bienestar de los empleados en el lugar de trabajo, como ofrecer programas de bienestar físico y mental, promover un equilibrio entre vida laboral y personal, y proporcionar recursos para manejar el estrés.",
                    "Implementaría políticas de flexibilidad laboral, como horarios de trabajo flexibles y días de trabajo desde casa, para ayudar a los empleados a equilibrar sus responsabilidades laborales y personales.",
                    "No tomaría medidas específicas para promover el bienestar de los empleados en el lugar de trabajo."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la elaboración de políticas de recursos humanos?",
                "respuestas" => [
                    "Tengo experiencia en la elaboración de políticas de recursos humanos en mi trabajo anterior, donde participé en la creación y revisión de políticas relacionadas con la contratación, la compensación, el desarrollo y la terminación de empleo.",
                    "He liderado equipos en la revisión y actualización de políticas de recursos humanos para garantizar su alineación con las mejores prácticas de la industria y las regulaciones laborales.",
                    "No tengo experiencia en la elaboración de políticas de recursos humanos."
                ]
            ],
            [
                "pregunta" => "¿Cómo te mantienes actualizado sobre las tendencias y regulaciones laborales?",
                "respuestas" => [
                    "Me mantengo actualizado sobre las tendencias y regulaciones laborales mediante la participación en conferencias y seminarios, la lectura de publicaciones especializadas y el seguimiento de cambios en la legislación laboral.",
                    "Formo parte de asociaciones profesionales y redes de recursos humanos que proporcionan acceso a recursos y eventos relacionados con las tendencias y regulaciones laborales.",
                    "No tengo un método específico para mantenerme actualizado sobre las tendencias y regulaciones laborales."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una situación en la que resolviste eficazmente un conflicto laboral?",
                "respuestas" => [
                    "En una situación anterior, medie entre dos miembros del equipo que estaban en desacuerdo sobre la asignación de tareas y logré encontrar un compromiso que satisfizo a ambas partes y restableció la armonía en el equipo.",
                    "Lideré la resolución de un conflicto entre un empleado y su supervisor mediante la facilitación de conversaciones abiertas y la identificación de soluciones mutuamente aceptables.",
                    "No tengo experiencia en la resolución efectiva de conflictos laborales."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejarías una situación en la que un empleado muestra bajo rendimiento?",
                "respuestas" => [
                    "Manejaría una situación de bajo rendimiento mediante la identificación de las causas subyacentes, el desarrollo de un plan de mejora del desempeño y la provisión de apoyo y recursos necesarios para ayudar al empleado a alcanzar su máximo potencial.",
                    "Realizaría reuniones regulares con el empleado para discutir su desempeño, establecer metas claras y brindar retroalimentación constructiva para facilitar su mejora.",
                    "Ignoraría el bajo rendimiento del empleado y esperaría a que la situación se resolviera por sí misma."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la comunicación interna dentro de una organización?",
                "respuestas" => [
                    "Considero que la comunicación interna es esencial para el éxito de cualquier organización, ya que promueve la transparencia, la colaboración y la cohesión del equipo.",
                    "Doy una gran importancia a la comunicación interna y establecería canales de comunicación abiertos y efectivos para garantizar que la información fluya libremente dentro de la organización.",
                    "No considero que la comunicación interna sea importante y no tomaría medidas para fomentarla en la organización."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para fomentar un ambiente laboral positivo?",
                "respuestas" => [
                    "Mi enfoque para fomentar un ambiente laboral positivo incluye reconocer y recompensar el buen desempeño, promover la colaboración y el trabajo en equipo, y cultivar una cultura de respeto y apoyo mutuo.",
                    "Implementaría actividades de team building y eventos sociales para fortalecer las relaciones entre los miembros del equipo y mejorar el clima laboral.",
                    "No tengo un enfoque específico para fomentar un ambiente laboral positivo."
                ]
            ],
            [
                "pregunta" => "¿Cómo te asegurarías de que los procesos de reclutamiento sean justos y equitativos?",
                "respuestas" => [
                    "Me aseguraría de que los procesos de reclutamiento sean justos y equitativos mediante la eliminación de sesgos y prejuicios, la estandarización de criterios de selección y la diversificación de los paneles de entrevistas.",
                    "Implementaría políticas de reclutamiento inclusivas que promuevan la diversidad y la igualdad de oportunidades para todos los candidatos.",
                    "No tomaría medidas específicas para garantizar la equidad en los procesos de reclutamiento."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir un proyecto de capacitación que hayas liderado?",
                "respuestas" => [
                    "Lideré un proyecto de capacitación centrado en el desarrollo de habilidades de liderazgo para los gerentes de nivel medio, que incluyó talleres, sesiones de coaching y evaluaciones de desempeño.",
                    "Organicé un programa de capacitación en habilidades técnicas para empleados de diferentes departamentos, que resultó en un aumento significativo en la productividad y la satisfacción laboral.",
                    "No he liderado ningún proyecto de capacitación."
                ]
            ],
            [
                "pregunta" => "¿Cómo gestionarías el proceso de despido de un empleado?",
                "respuestas" => [
                    "Gestionaría el proceso de despido de un empleado con empatía y profesionalismo, siguiendo todos los procedimientos legales y brindando apoyo emocional y recursos para facilitar la transición.",
                    "Realizaría una revisión exhaustiva del desempeño del empleado y proporcionaría retroalimentación clara y específica sobre las razones del despido, asegurándome de respetar su dignidad y privacidad.",
                    "Despediría al empleado sin ofrecer explicaciones ni apoyo, lo que podría generar resentimiento y desconfianza dentro del equipo."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para atraer candidatos talentosos?",
                "respuestas" => [
                    "Para atraer candidatos talentosos, utilizaría una combinación de marketing de empleador sólido, una sólida presencia en línea, y la participación en eventos de reclutamiento y ferias de empleo.",
                    "Implementaría un programa de referidos de empleados y establecería relaciones con universidades y programas de formación profesional para identificar y reclutar talento emergente.",
                    "No tengo estrategias específicas para atraer candidatos talentosos."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías las preocupaciones de un empleado insatisfecho?",
                "respuestas" => [
                    "Abordaría las preocupaciones de un empleado insatisfecho escuchando activamente sus inquietudes, identificando las causas subyacentes y colaborando con él para encontrar soluciones que satisfagan sus necesidades.",
                    "Programaría reuniones periódicas con el empleado para revisar su progreso y proporcionarle un espacio seguro para expresar sus preocupaciones y sugerir mejoras.",
                    "Ignoraría las preocupaciones del empleado y esperaría a que se resolvieran por sí mismas."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la conformidad con las leyes laborales?",
                "respuestas" => [
                    "Para garantizar la conformidad con las leyes laborales, me mantendría actualizado sobre las regulaciones laborales relevantes, establecería políticas y procedimientos claros, y proporcionaría capacitación regular a los empleados y supervisores.",
                    "Realizaría auditorías internas periódicas para identificar y corregir cualquier posible violación de las leyes laborales antes de que se conviertan en problemas legales.",
                    "No tomaría medidas específicas para garantizar la conformidad con las leyes laborales."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejarías una situación en la que un empleado se queja de discriminación?",
                "respuestas" => [
                    "Manejaría una queja de discriminación investigando de manera imparcial y confidencial, tomando medidas correctivas apropiadas si se encuentra evidencia de discriminación, y brindando apoyo al empleado afectado.",
                    "Establecería canales de denuncia seguros y confidenciales para que los empleados puedan reportar incidentes de discriminación sin temor a represalias.",
                    "Ignoraría la queja de discriminación y esperaría a que el problema se resolviera por sí mismo."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para resolver problemas de comunicación entre empleados?",
                "respuestas" => [
                    "Mi enfoque para resolver problemas de comunicación entre empleados incluye facilitar el diálogo abierto, promover la escucha activa y proporcionar herramientas y técnicas para mejorar la comunicación interpersonal.",
                    "Organizaría talleres y sesiones de capacitación sobre comunicación efectiva y resolución de conflictos para ayudar a los empleados a mejorar sus habilidades de comunicación y resolver malentendidos.",
                    "No tengo un enfoque específico para resolver problemas de comunicación entre empleados."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la formación continua de los empleados?",
                "respuestas" => [
                    "Considero que la formación continua de los empleados es crucial para mantener su relevancia y competitividad en el mercado laboral en constante cambio, así como para fomentar su desarrollo profesional y personal.",
                    "Invertiría en programas de formación continua para mejorar las habilidades y conocimientos de los empleados, lo que a su vez beneficiaría a la organización en términos de innovación y crecimiento.",
                    "No le doy importancia a la formación continua de los empleados y no invertiría en programas de desarrollo profesional."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir un momento en el que implementaste con éxito una política de recursos humanos?",
                "respuestas" => [
                    "Implementé con éxito una política de flexibilidad laboral que permitía a los empleados trabajar desde casa en determinadas circunstancias, lo que resultó en una mejora significativa en la satisfacción y la retención de empleados.",
                    "Introduje una política de reconocimiento y recompensas que premiaba el desempeño excepcional de los empleados, lo que motivó a todo el equipo a alcanzar metas más ambiciosas.",
                    "No tengo experiencia en la implementación exitosa de políticas de recursos humanos."
                ]
            ],
            [
                "pregunta" => "¿Cómo garantizarías la confidencialidad de la información del empleado?",
                "respuestas" => [
                    "Garantizaría la confidencialidad de la información del empleado mediante el establecimiento de políticas claras de privacidad de datos, la capacitación del personal sobre la importancia de la confidencialidad y el uso de medidas de seguridad físicas y electrónicas para proteger la información.",
                    "Limitaría el acceso a la información confidencial solo a aquellos empleados que necesiten saber, y establecería procedimientos de manejo de datos seguros para prevenir filtraciones o pérdidas de información.",
                    "No tomaría medidas específicas para garantizar la confidencialidad de la información del empleado."
                ]
            ],
            [
                "pregunta" => "¿Cómo medirías el éxito de tus iniciativas de recursos humanos?",
                "respuestas" => [
                    "Mediría el éxito de mis iniciativas de recursos humanos mediante la recopilación y análisis de datos clave, como la retención de empleados, la satisfacción del cliente interno, la productividad y el rendimiento del equipo.",
                    "Realizaría encuestas periódicas de compromiso de empleados y evaluaciones de clima laboral para evaluar el impacto de mis iniciativas en la moral y el bienestar de los empleados.",
                    "No tendría forma de medir el éxito de mis iniciativas de recursos humanos."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión del rendimiento de los empleados?",
                "respuestas" => [
                    "Tengo experiencia en la gestión del rendimiento de los empleados, que incluye establecer objetivos claros, proporcionar retroalimentación regular y realizar revisiones formales de desempeño para promover el desarrollo profesional y el crecimiento personal.",
                    "He implementado sistemas de gestión del desempeño basados en el modelo de objetivos y resultados clave (OKR) que han mejorado la alineación de objetivos y el rendimiento individual con los objetivos organizacionales.",
                    "No tengo experiencia en la gestión del rendimiento de los empleados."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejarías una queja de acoso laboral?",
                "respuestas" => [
                    "Manejaría una queja de acoso laboral con seriedad y sensibilidad, investigando de manera imparcial y confidencial, tomando medidas correctivas apropiadas y proporcionando apoyo y recursos para el empleado afectado.",
                    "Establecería un proceso claro y confidencial para que los empleados presenten quejas de acoso laboral y garantizaría que todas las denuncias se investiguen de manera exhaustiva y justa.",
                    "Ignoraría la queja de acoso laboral y esperaría a que el problema se resolviera por sí mismo."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para fomentar la colaboración entre equipos?",
                "respuestas" => [
                    "Fomentaría la colaboración entre equipos mediante la organización de actividades de team building, la creación de grupos de trabajo interdepartamentales y el establecimiento de canales de comunicación abiertos y transparentes.",
                    "Incentivaría la colaboración entre equipos mediante la implementación de sistemas de recompensas y reconocimiento que valoren el trabajo en equipo y la contribución colectiva al éxito organizacional.",
                    "No tomaría medidas específicas para fomentar la colaboración entre equipos."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para crear un plan de sucesión dentro de la organización?",
                "respuestas" => [
                    "Mi enfoque para crear un plan de sucesión incluye identificar y desarrollar talento interno, establecer criterios claros de sucesión, y proporcionar oportunidades de desarrollo y capacitación para preparar a los empleados para roles de liderazgo futuros.",
                    "Implementaría un proceso estructurado de planificación de la sucesión que involucre a la alta dirección y a los líderes de equipo en la identificación y desarrollo de posibles sucesores.",
                    "No tengo un enfoque específico para crear un plan de sucesión dentro de la organización."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías las preocupaciones sobre la carga de trabajo y el equilibrio entre vida laboral y personal?",
                "respuestas" => [
                    "Abordaría las preocupaciones sobre la carga de trabajo y el equilibrio entre vida laboral y personal mediante la implementación de políticas de flexibilidad laboral, programas de bienestar y apoyo para ayudar a los empleados a gestionar el estrés y encontrar un equilibrio saludable entre el trabajo y la vida personal.",
                    "Realizaría revisiones regulares de la carga de trabajo de los empleados y proporcionaría recursos adicionales o redistribuiría las tareas según sea necesario para evitar el agotamiento y el desgaste.",
                    "Ignoraría las preocupaciones sobre la carga de trabajo y el equilibrio entre vida laboral y personal, lo que podría provocar una disminución en la moral y la productividad de los empleados."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una situación en la que implementaste cambios en la cultura organizacional?",
                "respuestas" => [
                    "Implementé cambios en la cultura organizacional mediante la introducción de programas de mentoría y coaching para fomentar el desarrollo profesional y personal de los empleados, lo que resultó en un aumento en la colaboración y la innovación dentro de la empresa.",
                    "Lideré la transición hacia una cultura más orientada al equipo, fomentando la participación y la contribución de todos los empleados en la toma de decisiones y la resolución de problemas.",
                    "No he tenido la oportunidad de implementar cambios en la cultura organizacional."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para promover la igualdad de oportunidades en el lugar de trabajo?",
                "respuestas" => [
                    "Para promover la igualdad de oportunidades en el lugar de trabajo, implementaría políticas de contratación y promoción basadas en el mérito y la diversidad, y proporcionaría capacitación sobre sesgo inconsciente y diversidad e inclusión para todos los empleados.",
                    "Establecería metas de diversidad y equidad en la contratación y promoción, y tomaría medidas afirmativas para garantizar que se brinden oportunidades iguales a todos los empleados, independientemente de su origen o características personales.",
                    "No tomaría medidas específicas para promover la igualdad de oportunidades en el lugar de trabajo."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejarías una situación en la que un empleado presenta una queja sobre su supervisor?",
                "respuestas" => [
                    "Manejaría una queja sobre un supervisor investigando de manera imparcial, brindando apoyo al empleado afectado y tomando medidas correctivas apropiadas según sea necesario para resolver el problema.",
                    "Facilitaría una conversación mediada entre el empleado y su supervisor para abordar las preocupaciones y trabajar hacia una solución mutuamente aceptable.",
                    "Ignoraría la queja del empleado y esperaría a que el problema se resolviera por sí mismo."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de la diversidad en el lugar de trabajo?",
                "respuestas" => [
                    "Tengo experiencia en la gestión de la diversidad en el lugar de trabajo, que incluye la promoción de la inclusión, la sensibilización cultural y la creación de un ambiente que valore y celebre las diferencias individuales.",
                    "He liderado iniciativas para aumentar la diversidad en la contratación y promoción, así como para crear programas de desarrollo profesional que apoyen a empleados de diversos orígenes y perspectivas.",
                    "No tengo experiencia en la gestión de la diversidad en el lugar de trabajo."
                ]
            ],
            [
                "pregunta" => "¿Cómo fomentarías el compromiso de los empleados con la empresa?",
                "respuestas" => [
                    "Fomentaría el compromiso de los empleados con la empresa mediante el reconocimiento y la valoración de su contribución, la promoción de oportunidades de desarrollo y crecimiento, y la creación de un ambiente de trabajo inclusivo y colaborativo.",
                    "Implementaría programas de participación de empleados que involucren a los empleados en la toma de decisiones, fomenten la transparencia y proporcionen oportunidades para compartir ideas y retroalimentación.",
                    "No tomaría medidas específicas para fomentar el compromiso de los empleados con la empresa."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la retroalimentación en el desarrollo profesional de los empleados?",
                "respuestas" => [
                    "Considero que la retroalimentación es fundamental para el desarrollo profesional de los empleados, ya que les proporciona información valiosa sobre su desempeño y áreas de mejora, y les ayuda a crecer y alcanzar su máximo potencial.",
                    "Implementaría un sistema de retroalimentación continua que incluya evaluaciones regulares, revisiones de desempeño y sesiones de coaching individualizado para apoyar el desarrollo profesional de los empleados.",
                    "No le doy importancia a la retroalimentación en el desarrollo profesional de los empleados y no proporcionaría oportunidades para recibir retroalimentación."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejarías una situación en la que un empleado se siente infravalorado?",
                "respuestas" => [
                    "Manejaría una situación en la que un empleado se siente infravalorado mediante el reconocimiento y la validación de sus contribuciones, la escucha activa de sus preocupaciones y la colaboración con él para encontrar soluciones que restauren su confianza y motivación.",
                    "Programaría una reunión individual con el empleado para discutir sus preocupaciones, proporcionar retroalimentación positiva sobre su desempeño y trabajar juntos en un plan para abordar sus inquietudes y necesidades.",
                    "Ignoraría los sentimientos de infravaloración del empleado y esperaría a que la situación se resolviera por sí sola."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para promover un ambiente de trabajo saludable y seguro?",
                "respuestas" => [
                    "Mi enfoque para promover un ambiente de trabajo saludable y seguro incluye la identificación y mitigación de riesgos laborales, la promoción de hábitos de trabajo saludables y el fomento de una cultura de seguridad y bienestar.",
                    "Implementaría políticas y procedimientos de salud y seguridad en el trabajo, proporcionaría capacitación regular sobre prácticas seguras y garantizaría el cumplimiento de todas las regulaciones y estándares relevantes.",
                    "No tengo un enfoque específico para promover un ambiente de trabajo saludable y seguro."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una estrategia que hayas implementado para mejorar la moral de los empleados?",
                "respuestas" => [
                    "Implementé un programa de reconocimiento de empleados que incluía premios y celebraciones para reconocer y recompensar el buen desempeño, lo que resultó en un aumento en la moral y la motivación del equipo.",
                    "Organicé actividades de team building y eventos sociales para fortalecer las relaciones entre los miembros del equipo y mejorar el sentido de pertenencia y camaradería.",
                    "No he tenido la oportunidad de implementar estrategias para mejorar la moral de los empleados."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para fomentar el liderazgo dentro de los equipos de trabajo?",
                "respuestas" => [
                    "Para fomentar el liderazgo dentro de los equipos de trabajo, proporcionaría oportunidades de desarrollo y capacitación en liderazgo, asignaría responsabilidades de liderazgo a empleados con potencial y fomentaría una cultura de mentoría y colaboración.",
                    "Implementaría programas de liderazgo que identifiquen y desarrollen talento interno, promuevan el empoderamiento y la autonomía, y fomenten la asunción de responsabilidades de liderazgo en todos los niveles de la organización.",
                    "No tomaría medidas específicas para fomentar el liderazgo dentro de los equipos de trabajo."
                ]
            ]
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta['pregunta'],
                'CategoryId' => 1,
            ]);
            foreach ($pregunta['respuestas'] as $respuesta) {
                DB::table('Answer')->insert([
                    'answer' => $respuesta,
                    'QuestionID'=> $i,
                    'QuestionPoints' => 1,
                ]);
                
            }
            $i++;
        }
        //Finanzas y contabilidad
        $preguntas = [
            "¿Cuál es tu experiencia previa en contabilidad financiera?",
            "¿Cómo manejas el análisis de estados financieros?",
            "¿Qué métodos utilizas para gestionar el presupuesto de una empresa?",
            "¿Cómo interpretas los indicadores financieros clave?",
            "¿Cuál es tu experiencia en la preparación de informes financieros?",
            "¿Cómo manejas el análisis de costos?",
            "¿Qué herramientas utilizas para la planificación financiera?",
            "¿Puedes describir una situación en la que resolviste un problema financiero complejo?",
            "¿Cómo evalúas la rentabilidad de un proyecto o inversión?",
            "¿Cuál es tu experiencia en la gestión de cuentas por cobrar y cuentas por pagar?",
            "¿Cómo manejas la conciliación bancaria?",
            "¿Qué medidas tomas para garantizar la conformidad con las regulaciones financieras?",
            "¿Cuál es tu enfoque para la gestión del flujo de efectivo?",
            "¿Cómo abordas el análisis de riesgos financieros?",
            "¿Qué importancia le das al control interno en la contabilidad?",
            "¿Cómo manejas la auditoría interna y externa?",
            "¿Puedes describir un proyecto de optimización de costos que hayas liderado?",
            "¿Qué estrategias usarías para reducir los gastos operativos de una empresa?",
            "¿Cuál es tu experiencia en la gestión de impuestos?",
            "¿Cómo manejas la planificación fiscal?",
            "¿Qué herramientas utilizas para el análisis financiero?",
            "¿Cuál es tu enfoque para la gestión de activos y pasivos?",
            "¿Cómo abordarías una discrepancia en los registros contables?",
            "¿Qué medidas tomarías para mejorar la eficiencia financiera de una empresa?",
            "¿Cómo evalúas la solvencia financiera de una empresa?",
            "¿Cuál es tu experiencia en la gestión de inversiones?",
            "¿Cómo manejas la gestión de riesgos financieros en un entorno volátil?",
            "¿Qué importancia le das al cumplimiento de los plazos en la contabilidad?",
            "¿Cómo manejas la relación con instituciones financieras externas?",
            "¿Puedes describir una situación en la que identificaste y corregiste un error contable?",
            "¿Qué estrategias usarías para maximizar los beneficios de una empresa?",
            "¿Cuál es tu enfoque para el análisis de rentabilidad por producto o servicio?",
            "¿Cómo manejas la preparación para una auditoría financiera?",
            "¿Qué medidas tomarías para garantizar la precisión de los informes financieros?",
            "¿Cómo evalúas la eficacia de los controles financieros internos?",
            "¿Cuál es tu experiencia en la gestión de flujos de efectivo en múltiples divisas?",
            "¿Cómo abordarías una situación de fraude financiero?",
            "¿Qué importancia le das a la educación financiera del personal en una empresa?",
            "¿Puedes describir una estrategia que implementaste para mejorar la gestión financiera de una empresa?",
            "¿Cómo manejas la preparación de presupuestos en un entorno económico cambiante?",
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 2,
            ]);
        }
        //Marketing y publicidad
        $preguntas = [
            "¿Cuál es tu experiencia previa en la planificación de estrategias de marketing?",
            "¿Cómo abordarías la investigación de mercado para un nuevo producto?",
            "¿Qué métodos utilizas para segmentar el mercado?",
            "¿Cuál es tu enfoque para el desarrollo de un plan de marketing?",
            "¿Cómo evalúas la efectividad de una campaña publicitaria?",
            "¿Qué herramientas utilizas para el análisis competitivo?",
            "¿Puedes describir una campaña de marketing exitosa en la que hayas participado?",
            "¿Cómo manejas el análisis de tendencias del mercado?",
            "¿Cuál es tu experiencia en la creación de contenido para medios digitales?",
            "¿Qué estrategias usarías para aumentar la visibilidad de una marca en línea?",
            "¿Cómo evalúas la efectividad de las estrategias de SEO y SEM?",
            "¿Qué importancia le das a las redes sociales en una estrategia de marketing?",
            "¿Cómo manejas la relación con influencers en una estrategia de marketing?",
            "¿Cuál es tu enfoque para la generación de leads?",
            "¿Cómo abordarías la gestión de la reputación en línea de una empresa?",
            "¿Qué medidas tomas para asegurar la coherencia de la marca en todos los canales?",
            "¿Cómo manejas la colaboración con agencias de publicidad o marketing externas?",
            "¿Puedes describir una estrategia de marketing de contenidos que hayas implementado?",
            "¿Cómo evalúas la efectividad de una estrategia de email marketing?",
            "¿Qué herramientas utilizas para medir el retorno de la inversión en marketing?",
            "¿Cuál es tu experiencia en la organización de eventos promocionales?",
            "¿Cómo manejas la gestión de la comunicación en crisis?",
            "¿Qué estrategias usarías para mejorar la participación del cliente?",
            "¿Cómo abordarías la personalización en una estrategia de marketing?",
            "¿Qué importancia le das al análisis del comportamiento del consumidor?",
            "¿Cuál es tu enfoque para la identificación de oportunidades de mercado?",
            "¿Cómo manejas la coordinación de lanzamientos de productos?",
            "¿Qué medidas tomarías para mejorar la experiencia del cliente en línea y fuera de línea?",
            "¿Cómo evalúas la efectividad de una estrategia de branding?",
            "¿Qué herramientas utilizas para la automatización del marketing?",
            "¿Puedes describir una situación en la que resolviste un desafío de marketing?",
            "¿Cómo manejas la gestión de campañas de publicidad en medios tradicionales?",
            "¿Qué importancia le das al análisis del ciclo de vida del producto?",
            "¿Cómo abordarías la creación de una estrategia de marketing para un mercado internacional?",
            "¿Cuál es tu experiencia en la optimización de conversiones?",
            "¿Qué estrategias usarías para mejorar el reconocimiento de marca?",
            "¿Cómo manejas la gestión de presupuestos en una estrategia de marketing?",
            "¿Qué medidas tomarías para mantener actualizada una estrategia de marketing en un mercado cambiante?",
            "¿Cómo evalúas la efectividad de una estrategia de marketing omnicanal?",
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 3,
            ]);
        }
        //Operaciones y logística
        $preguntas = [
            "¿Cuál es tu experiencia previa en la gestión de la cadena de suministro?",
            "¿Cómo manejas la planificación de la demanda y el inventario?",
            "¿Qué métodos utilizas para optimizar los procesos de producción?",
            "¿Cuál es tu enfoque para la gestión de la logística de entrada y salida?",
            "¿Cómo evalúas la eficiencia de los procesos de distribución?",
            "¿Qué herramientas utilizas para el seguimiento de envíos y la gestión de inventario?",
            "¿Puedes describir una estrategia de gestión de almacenes que hayas implementado?",
            "¿Cómo manejas la coordinación de transporte y envíos?",
            "¿Cuál es tu experiencia en la gestión de proveedores y contratistas?",
            "¿Qué estrategias usarías para mejorar la eficiencia operativa de una empresa?",
            "¿Cómo evalúas la efectividad de los sistemas de gestión de calidad?",
            "¿Qué importancia le das a la optimización de procesos en la cadena de suministro?",
            "¿Cómo manejas la gestión de riesgos en la cadena de suministro?",
            "¿Cuál es tu enfoque para la gestión de la capacidad de producción?",
            "¿Cómo abordarías la gestión de la cadena de frío en la logística de alimentos?",
            "¿Qué medidas tomas para garantizar la seguridad y el cumplimiento normativo en las operaciones?",
            "¿Cómo evalúas la eficacia de los proveedores y contratistas?",
            "¿Cuál es tu experiencia en la gestión de proyectos de mejora continua?",
            "¿Cómo manejas la planificación de rutas y la optimización de la distribución?",
            "¿Qué herramientas utilizas para el análisis de costos en la cadena de suministro?",
            "¿Puedes describir una situación en la que implementaste cambios en los procesos operativos?",
            "¿Cómo manejas la gestión de personal en entornos operativos?",
            "¿Qué estrategias usarías para reducir los tiempos de espera y los cuellos de botella en la producción?",
            "¿Cuál es tu enfoque para la gestión de inventario justo a tiempo (JIT)?",
            "¿Cómo abordarías la gestión de la cadena de suministro en un entorno globalizado?",
            "¿Qué medidas tomarías para mejorar la colaboración entre departamentos en una empresa?",
            "¿Cómo evalúas la efectividad de los sistemas de información en las operaciones?",
            "¿Cuál es tu experiencia en la implementación de sistemas de gestión de almacenes (WMS)?",
            "¿Cómo manejas la gestión de devoluciones y reclamaciones de clientes?",
            "¿Qué importancia le das a la sostenibilidad en las operaciones y la logística?",
            "¿Cómo abordarías la gestión de la cadena de suministro en situaciones de crisis?",
            "¿Cuál es tu experiencia en la gestión de proyectos de mejora de la calidad?",
            "¿Cómo manejas la coordinación de equipos en entornos operativos?",
            "¿Qué estrategias usarías para mejorar la eficiencia energética en las operaciones?",
            "¿Cómo evalúas la efectividad de los sistemas de seguimiento de activos en la logística?",
            "¿Qué medidas tomarías para garantizar la continuidad del negocio en caso de interrupciones en la cadena de suministro?",
            "¿Cómo manejas la gestión de la documentación y los registros en las operaciones?",
            "¿Cuál es tu enfoque para la gestión de proyectos de expansión de instalaciones?",
            "¿Qué herramientas utilizas para la optimización de la carga en el transporte?",
            "¿Cómo abordarías la gestión de la logística inversa y el reciclaje de productos?",
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 4,
            ]);
        }
        //Ventas y desarrollo de negocios
        $preguntas = [
            "¿Cuál es tu experiencia previa en ventas y desarrollo de negocios?",
            "¿Cómo abordarías la identificación de oportunidades de mercado?",
            "¿Qué estrategias utilizas para generar leads y prospectos?",
            "¿Cuál es tu enfoque para la gestión de relaciones con clientes?",
            "¿Cómo evalúas las necesidades y los deseos del cliente?",
            "¿Qué métodos utilizas para cerrar acuerdos y negociar contratos?",
            "¿Cómo manejas la gestión de pipelines de ventas?",
            "¿Puedes describir una estrategia de ventas exitosa que hayas implementado?",
            "¿Cuál es tu experiencia en la elaboración de propuestas comerciales?",
            "¿Qué herramientas utilizas para el seguimiento de ventas y actividades comerciales?",
            "¿Cómo abordarías la gestión de cuentas clave y clientes corporativos?",
            "¿Qué medidas tomas para mantener relaciones comerciales a largo plazo?",
            "¿Cómo evalúas la efectividad de las estrategias de upselling y cross-selling?",
            "¿Cuál es tu enfoque para la gestión de objeciones y resistencias de los clientes?",
            "¿Cómo manejas la gestión de quejas y reclamaciones de clientes?",
            "¿Qué estrategias usarías para establecer y alcanzar objetivos de ventas?",
            "¿Cómo evalúas la rentabilidad de una oportunidad de venta?",
            "¿Cuál es tu experiencia en la gestión de equipos de ventas?",
            "¿Cómo abordarías la formación y el desarrollo de habilidades del equipo de ventas?",
            "¿Qué medidas tomarías para mejorar la productividad del equipo de ventas?",
            "¿Cómo manejas la coordinación de esfuerzos de ventas en equipos multidisciplinarios?",
            "¿Qué importancia le das a la colaboración entre ventas y marketing?",
            "¿Cómo evalúas la efectividad de los canales de distribución y venta?",
            "¿Cuál es tu enfoque para la gestión de territorios de ventas?",
            "¿Cómo abordarías la gestión de la competencia en el mercado?",
            "¿Qué herramientas utilizas para la planificación y seguimiento de actividades de ventas?",
            "¿Puedes describir una situación en la que superaste tus objetivos de ventas?",
            "¿Cómo manejas la gestión de precios y tarifas en ventas?",
            "¿Qué estrategias usarías para identificar nuevas oportunidades de negocio?",
            "¿Cómo evalúas la efectividad de las estrategias de penetración de mercado?",
            "¿Cuál es tu experiencia en la participación en ferias comerciales y eventos de networking?",
            "¿Cómo abordarías la gestión de la relación con distribuidores y socios comerciales?",
            "¿Qué medidas tomarías para garantizar la calidad y satisfacción del cliente en ventas?",
            "¿Cómo manejas la gestión de tiempo y prioridades en ventas?",
            "¿Qué importancia le das a la innovación y la creatividad en el desarrollo de estrategias de ventas?",
            "¿Cómo evalúas la efectividad de las campañas de marketing en apoyo a las ventas?",
            "¿Cuál es tu enfoque para la gestión de datos y análisis en ventas?",
            "¿Cómo abordarías la gestión de la comunicación interna y externa en el equipo de ventas?",
            "¿Qué estrategias usarías para adaptarte a cambios en el mercado y la industria?",
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 5,
            ]);
        }
        //Servicio al cliente
        $preguntas = [
            "¿Cuál es tu experiencia previa en atención al cliente?",
            "¿Cómo abordarías la resolución de problemas de los clientes?",
            "¿Qué medidas tomas para garantizar la satisfacción del cliente?",
            "¿Cuál es tu enfoque para la gestión de quejas y reclamaciones de los clientes?",
            "¿Cómo manejas situaciones de clientes difíciles o molestos?",
            "¿Qué métodos utilizas para comunicarte de manera efectiva con los clientes?",
            "¿Cómo evalúas la calidad del servicio al cliente?",
            "¿Qué herramientas utilizas para el seguimiento de solicitudes y consultas de los clientes?",
            "¿Puedes describir una situación en la que proporcionaste un servicio excepcional al cliente?",
            "¿Cuál es tu experiencia en la gestión de equipos de atención al cliente?",
            "¿Cómo abordarías la formación y el desarrollo de habilidades del equipo de atención al cliente?",
            "¿Qué estrategias usarías para mejorar la eficiencia y productividad del equipo de atención al cliente?",
            "¿Cómo evalúas la efectividad de los canales de comunicación con los clientes (teléfono, correo electrónico, chat, etc.)?",
            "¿Cuál es tu enfoque para la gestión de tiempos de espera y tiempos de respuesta?",
            "¿Cómo manejas la gestión de crisis y situaciones de emergencia en el servicio al cliente?",
            "¿Qué medidas tomarías para garantizar la confidencialidad y seguridad de la información del cliente?",
            "¿Cómo abordarías la gestión de clientes insatisfechos y la retención de clientes?",
            "¿Qué importancia le das a la empatía en la atención al cliente?",
            "¿Cómo manejas la gestión de expectativas de los clientes?",
            "¿Qué estrategias usarías para anticipar las necesidades de los clientes?",
            "¿Cómo evalúas la satisfacción del cliente y recopilación de feedback?",
            "¿Cuál es tu experiencia en la gestión de solicitudes de reembolso y devoluciones?",
            "¿Cómo manejas la gestión de cambios en políticas o procedimientos que afectan al servicio al cliente?",
            "¿Qué herramientas utilizas para la gestión de la base de conocimientos y recursos de atención al cliente?",
            "¿Puedes describir una situación en la que implementaste una mejora en el servicio al cliente?",
            "¿Cómo abordarías la gestión de clientes en diferentes canales (en persona, teléfono, correo electrónico, redes sociales, etc.)?",
            "¿Qué medidas tomarías para garantizar la accesibilidad y disponibilidad del servicio al cliente?",
            "¿Cómo evalúas la efectividad de los programas de fidelización y recompensas para clientes?",
            "¿Cuál es tu enfoque para la gestión de la calidad del servicio al cliente?",
            "¿Cómo manejas la coordinación de esfuerzos entre diferentes departamentos para resolver problemas de los clientes?",
            "¿Qué importancia le das a la resolución de problemas en el primer contacto con el cliente?",
            "¿Cómo abordarías la gestión de quejas y reclamaciones en redes sociales y plataformas de revisión en línea?",
            "¿Qué estrategias usarías para mejorar la eficiencia del servicio al cliente sin comprometer la calidad?",
            "¿Cómo evalúas la efectividad de los sistemas de gestión de relaciones con los clientes (CRM)?",
            "¿Cuál es tu experiencia en la gestión de clientes en entornos multiculturales o internacionales?",
            "¿Cómo manejas la gestión de solicitudes urgentes y situaciones de alta presión?",
            "¿Qué medidas tomarías para garantizar la consistencia del servicio al cliente en diferentes puntos de contacto?",
            "¿Cómo abordarías la gestión de expectativas de los clientes en situaciones de productos o servicios agotados?",
            "¿Qué importancia le das a la proactividad en la atención al cliente?",
            "¿Cómo evalúas la efectividad de los procesos de retroalimentación y mejora continua en el servicio al cliente?",
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 6,
            ]);
        }
        //Gestión de proyectos
        $preguntas = [
            "¿Cuál es tu experiencia previa en la gestión de proyectos?",
            "¿Cómo abordarías la planificación inicial de un proyecto?",
            "¿Qué métodos utilizas para establecer objetivos y hitos de proyecto claros?",
            "¿Cuál es tu enfoque para la asignación de recursos en un proyecto?",
            "¿Cómo manejas la identificación y gestión de riesgos en un proyecto?",
            "¿Qué herramientas utilizas para el seguimiento del progreso y el cumplimiento de plazos?",
            "¿Puedes describir una situación en la que tuviste que adaptarte a cambios en un proyecto?",
            "¿Cómo evalúas y gestionas los cambios en el alcance del proyecto?",
            "¿Qué medidas tomas para garantizar la comunicación efectiva entre los miembros del equipo del proyecto?",
            "¿Cuál es tu experiencia en la gestión de presupuestos y costos de proyecto?",
            "¿Cómo manejas la gestión de conflictos entre miembros del equipo en un proyecto?",
            "¿Qué estrategias usarías para motivar y mantener comprometido al equipo del proyecto?",
            "¿Cómo evalúas la eficacia de las reuniones de seguimiento de proyectos?",
            "¿Cuál es tu enfoque para la gestión de la calidad en un proyecto?",
            "¿Cómo abordarías la gestión de expectativas de los stakeholders del proyecto?",
            "¿Qué herramientas utilizas para la gestión de la documentación y los entregables del proyecto?",
            "¿Cómo manejas la gestión de dependencias entre tareas y equipos en un proyecto?",
            "¿Qué medidas tomarías para garantizar la conformidad con los requisitos regulatorios en un proyecto?",
            "¿Cuál es tu experiencia en la gestión de proyectos en entornos ágiles o Scrum?",
            "¿Cómo evalúas la efectividad de la gestión del tiempo en un proyecto?",
            "¿Qué estrategias usarías para garantizar la alineación del proyecto con los objetivos estratégicos de la organización?",
            "¿Cómo manejas la gestión de la carga de trabajo y la asignación de tareas en un proyecto?",
            "¿Qué importancia le das a la gestión del cambio en un proyecto?",
            "¿Cómo abordarías la gestión de la comunicación con stakeholders externos al proyecto?",
            "¿Qué herramientas utilizas para la evaluación y seguimiento del rendimiento del equipo del proyecto?",
            "¿Cómo manejas la gestión de expectativas de los clientes en un proyecto?",
            "¿Cuál es tu enfoque para la gestión de la innovación en un proyecto?",
            "¿Cómo evalúas la efectividad de la gestión de riesgos en un proyecto?",
            "¿Qué medidas tomarías para garantizar la resiliencia del proyecto ante imprevistos?",
            "¿Cómo manejas la gestión de entregables y revisiones en un proyecto?",
            "¿Qué estrategias usarías para mejorar la colaboración entre equipos y departamentos en un proyecto?",
            "¿Cómo abordarías la gestión de proyectos en entornos virtuales o distribuidos?",
            "¿Cuál es tu experiencia en la gestión de proyectos de desarrollo de software?",
            "¿Cómo evalúas la efectividad de la gestión de la comunicación en un proyecto?",
            "¿Qué importancia le das a la retroalimentación y la mejora continua en la gestión de proyectos?",
            "¿Cómo manejas la gestión de stakeholders con expectativas divergentes en un proyecto?",
            "¿Qué herramientas utilizas para la evaluación y selección de proveedores en un proyecto?",
            "¿Cuál es tu enfoque para la gestión de la integración de equipos multidisciplinarios en un proyecto?",
            "¿Cómo evalúas la efectividad de la gestión de la calidad en un proyecto?",
            "¿Qué medidas tomarías para garantizar la adherencia a los estándares de seguridad en un proyecto?",
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 7,
            ]);
        }
        //Educación y formación
        $preguntas = [
            "¿Cuál es tu experiencia previa en educación y formación?",
            "¿Cuál es tu enfoque pedagógico o metodológico preferido?",
            "¿Cómo adaptas tu enseñanza a diferentes estilos de aprendizaje?",
            "¿Qué medidas tomas para garantizar la participación y el compromiso de los estudiantes?",
            "¿Cómo evalúas el progreso y el rendimiento de los estudiantes?",
            "¿Qué estrategias utilizas para fomentar un ambiente de aprendizaje inclusivo?",
            "¿Puedes describir una situación en la que resolviste un desafío en el aula?",
            "¿Cómo manejas la gestión del tiempo y la planificación de lecciones?",
            "¿Cuál es tu experiencia en el uso de tecnología en el aula?",
            "¿Qué importancia le das al aprendizaje experiencial o práctico?",
            "¿Cómo abordarías la adaptación de programas de estudio para diferentes niveles de habilidad?",
            "¿Qué herramientas utilizas para la evaluación y retroalimentación de los estudiantes?",
            "¿Cuál es tu enfoque para la gestión del comportamiento en el aula?",
            "¿Cómo manejas la diversidad cultural y lingüística en el aula?",
            "¿Qué medidas tomarías para garantizar un ambiente seguro y respetuoso en el aula?",
            "¿Cómo evalúas la efectividad de tus métodos de enseñanza?",
            "¿Cuál es tu experiencia en el diseño y desarrollo de materiales didácticos?",
            "¿Cómo abordarías la colaboración con otros educadores o profesionales en la enseñanza?",
            "¿Qué estrategias usarías para promover el pensamiento crítico y la resolución de problemas en los estudiantes?",
            "¿Cómo manejas la adaptación de la enseñanza a las necesidades individuales de los estudiantes?",
            "¿Qué importancia le das al desarrollo de habilidades socioemocionales en la educación?",
            "¿Cómo abordarías la evaluación formativa y sumativa en el aula?",
            "¿Cuál es tu experiencia en la gestión de programas de educación a distancia o en línea?",
            "¿Cómo evalúas la efectividad de la retroalimentación en el proceso de aprendizaje?",
            "¿Qué herramientas utilizas para la colaboración y comunicación con padres y tutores?",
            "¿Cómo manejas la adaptación de la enseñanza a estudiantes con necesidades especiales?",
            "¿Qué medidas tomarías para fomentar la motivación y la autoestima de los estudiantes?",
            "¿Cuál es tu enfoque para la integración de habilidades prácticas y teóricas en la enseñanza?",
            "¿Cómo abordarías la enseñanza de habilidades del siglo XXI, como el pensamiento crítico, la creatividad y la colaboración?",
            "¿Qué importancia le das a la educación en valores y ciudadanía?",
            "¿Cómo manejas la gestión del estrés y la presión en el ámbito educativo?",
            "¿Cuál es tu experiencia en la implementación de programas de educación continua y desarrollo profesional para educadores?",
            "¿Cómo evalúas la efectividad de la retroalimentación entre pares en el desarrollo profesional?",
            "¿Qué estrategias usarías para promover la inclusión y diversidad en el entorno educativo?",
            "¿Cómo abordarías la enseñanza de habilidades de pensamiento computacional y tecnológico?",
            "¿Qué medidas tomarías para fomentar la creatividad y la innovación en el aula?",
            "¿Cómo evalúas la efectividad de la colaboración entre estudiantes en el aprendizaje?",
            "¿Cuál es tu enfoque para la evaluación y seguimiento del progreso del programa de estudios?",
            "¿Qué importancia le das a la educación ambiental y sostenibilidad en el currículo?",
            "¿Cómo manejas la gestión de la diversidad cultural y lingüística en el entorno educativo?",
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 8,
            ]);
        }
        //Salud y bienestar
        $preguntas = [
            "¿Cuál es tu experiencia previa en el campo de la salud y el bienestar?",
            "¿Qué te motivó a trabajar en el campo de la salud y el bienestar?",
            "¿Cómo abordarías la promoción de estilos de vida saludables entre los clientes?",
            "¿Qué medidas tomarías para evaluar las necesidades individuales de salud y bienestar de los clientes?",
            "¿Cuál es tu enfoque para el diseño de programas de bienestar personalizados?",
            "¿Cómo evalúas la efectividad de los programas de salud y bienestar que implementas?",
            "¿Qué estrategias utilizarías para fomentar el cambio de comportamiento hacia hábitos más saludables?",
            "¿Cómo manejas la gestión de objetivos de salud y bienestar a corto y largo plazo?",
            "¿Qué herramientas utilizas para el seguimiento de progreso y resultados en el bienestar de los clientes?",
            "¿Cuál es tu experiencia en la gestión de programas de ejercicios y actividad física?",
            "¿Cómo abordarías la gestión del estrés y la salud mental de los clientes?",
            "¿Qué importancia le das a la nutrición y la dieta en el bienestar general?",
            "¿Cómo manejas la gestión de problemas de salud crónicos en los clientes?",
            "¿Cuál es tu enfoque para la gestión del tiempo y la planificación de programas de bienestar?",
            "¿Qué medidas tomarías para garantizar un enfoque holístico en la salud y el bienestar?",
            "¿Cómo evalúas la efectividad de las intervenciones de salud y bienestar a largo plazo?",
            "¿Cuál es tu experiencia en la implementación de programas de bienestar en entornos laborales?",
            "¿Cómo abordarías la promoción de la salud en la comunidad local?",
            "¿Qué estrategias usarías para fomentar la participación y la adherencia a los programas de bienestar?",
            "¿Cómo manejas la gestión de expectativas y objetivos realistas en la salud y el bienestar?",
            "¿Qué importancia le das al sueño y el descanso en el bienestar general?",
            "¿Cómo evalúas la efectividad de las estrategias de gestión del peso y la composición corporal?",
            "¿Cuál es tu enfoque para la gestión del equilibrio entre trabajo, vida personal y bienestar?",
            "¿Qué herramientas utilizas para la educación y capacitación en salud y bienestar?",
            "¿Cómo manejas la adaptación de programas de bienestar para diferentes grupos demográficos?",
            "¿Qué medidas tomarías para garantizar la accesibilidad y la inclusión en los programas de bienestar?",
            "¿Cuál es tu experiencia en la gestión de programas de bienestar en entornos virtuales o a distancia?",
            "¿Cómo abordarías la gestión de la motivación y el compromiso de los clientes en el bienestar?",
            "¿Qué importancia le das a la actividad física y el ejercicio en la salud y el bienestar?",
            "¿Cómo evalúas la efectividad de las estrategias de prevención de lesiones y enfermedades?",
            "¿Cuál es tu enfoque para la gestión del autocuidado y la autogestión en el bienestar?",
            "¿Qué estrategias usarías para fomentar la autonomía y la responsabilidad en la salud y el bienestar?",
            "¿Cómo manejas la gestión de información confidencial y privacidad en el contexto de salud y bienestar?",
            "¿Qué medidas tomarías para adaptar programas de bienestar a diferentes culturas y contextos socioeconómicos?",
            "¿Cuál es tu experiencia en la gestión de programas de bienestar enfocados en la prevención de enfermedades crónicas?",
            "¿Cómo evalúas la satisfacción de los clientes con los programas de bienestar?",
            "¿Qué importancia le das a la colaboración interdisciplinaria en el campo de la salud y el bienestar?",
            "¿Cómo manejas la gestión de la calidad y la mejora continua en los programas de bienestar?",
            "¿Qué herramientas utilizas para la investigación y evaluación de tendencias en salud y bienestar?",
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 9,
            ]);
        }
        //Gobierno y administración pública
        $preguntas = [
            "¿Cuál es tu experiencia previa en el campo de gobierno y administración pública?",
            "¿Qué te motiva a trabajar en el sector público?",
            "¿Cómo abordarías la gestión de políticas públicas en un entorno cambiante?",
            "¿Qué medidas tomarías para promover la transparencia y la rendición de cuentas en la administración pública?",
            "¿Cuál es tu enfoque para la participación ciudadana en la toma de decisiones gubernamentales?",
            "¿Cómo evalúas la efectividad de los programas y servicios gubernamentales?",
            "¿Qué estrategias usarías para mejorar la eficiencia y la eficacia de la administración pública?",
            "¿Cómo manejas la gestión de presupuestos y recursos en el sector público?",
            "¿Qué herramientas utilizas para la gestión de proyectos y programas gubernamentales?",
            "¿Cuál es tu experiencia en la gestión de relaciones con otras entidades gubernamentales y organizaciones internacionales?",
            "¿Cómo abordarías la gestión de crisis y situaciones de emergencia en el gobierno?",
            "¿Qué importancia le das a la innovación y la tecnología en la administración pública?",
            "¿Cómo manejas la gestión de conflictos entre diferentes partes interesadas en el gobierno?",
            "¿Cuál es tu enfoque para la gestión del talento y el desarrollo de capacidades en el sector público?",
            "¿Qué medidas tomarías para promover la igualdad de género y la inclusión en el gobierno?",
            "¿Cómo evalúas la efectividad de las políticas de desarrollo económico y social?",
            "¿Cuál es tu experiencia en la implementación de programas de desarrollo comunitario?",
            "¿Cómo abordarías la gestión de la planificación urbana y el desarrollo sostenible?",
            "¿Qué estrategias usarías para mejorar la participación electoral y la representación política?",
            "¿Cómo manejas la gestión de riesgos y la seguridad en el sector público?",
            "¿Qué importancia le das a la educación cívica y la conciencia pública?",
            "¿Cómo evalúas la efectividad de los programas de seguridad social y protección social?",
            "¿Cuál es tu enfoque para la gestión de políticas de salud pública y bienestar?",
            "¿Qué herramientas utilizas para la gestión de datos y análisis en el gobierno?",
            "¿Cómo manejas la gestión de la infraestructura y los servicios públicos?",
            "¿Qué medidas tomarías para promover la justicia y el estado de derecho en el gobierno?",
            "¿Cuál es tu experiencia en la gestión de crisis políticas y sociales?",
            "¿Cómo abordarías la gestión de políticas de medio ambiente y sostenibilidad?",
            "¿Qué estrategias usarías para promover la innovación y la competitividad en el gobierno?",
            "¿Cómo evalúas la efectividad de las políticas de seguridad nacional y defensa?",
            "¿Cuál es tu enfoque para la gestión de políticas de igualdad racial y étnica?",
            "¿Qué herramientas utilizas para la gestión de la comunicación y la participación ciudadana?",
            "¿Cómo manejas la gestión de la diversidad cultural y lingüística en el gobierno?",
            "¿Qué importancia le das a la colaboración intersectorial y la asociación público-privada en el gobierno?",
            "¿Cómo evalúas la efectividad de los programas de combate a la corrupción y el mal uso de fondos públicos?",
            "¿Cuál es tu experiencia en la gestión de políticas de migración y refugiados?",
            "¿Cómo abordarías la gestión de políticas de igualdad de género y empoderamiento de la mujer?",
            "¿Qué medidas tomarías para promover la participación juvenil y el desarrollo de liderazgo en el gobierno?",
            "¿Cómo manejas la gestión de crisis sanitarias y pandemias en el gobierno?",
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 10,
            ]);
        }
    }
}
