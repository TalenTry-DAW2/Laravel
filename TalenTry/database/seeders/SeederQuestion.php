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
        $i = 1;
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
            $p = 10;
            foreach ($pregunta['respuestas'] as $respuesta) {

                DB::table('Answer')->insert([
                    'answer' => $respuesta,
                    'QuestionID' => $i,
                    'QuestionPoints' => $p,
                ]);
                $p -= 3;
            }
            $i++;
        }
        //Finanzas y contabilidad
        $respuestas = [
            [
                "pregunta" => "¿Cuál es tu experiencia previa en contabilidad financiera?",
                "respuestas" => [
                    "He trabajado como contador financiero durante más de cinco años, gestionando la contabilidad de varias empresas medianas.",
                    "Mi experiencia en contabilidad financiera se extiende a través de diversos sectores como manufactura, servicios y tecnología, sumando un total de ocho años de práctica profesional.",
                    "Soy recién graduado en contabilidad y he realizado prácticas en dos firmas de contabilidad, adquiriendo experiencia fundamental en procesos financieros."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas el análisis de estados financieros?",
                "respuestas" => [
                    "Utilizo herramientas analíticas avanzadas y técnicas de análisis de ratios para evaluar el desempeño financiero y detectar áreas de mejora.",
                    "Me concentro en un enfoque detallado y sistemático para revisar cada componente de los estados financieros, asegurando la precisión y relevancia de la información.",
                    "Implemento software de análisis financiero y colaboro estrechamente con el departamento de auditoría para garantizar análisis consistentes y precisos."
                ]
            ],
            [
                "pregunta" => "¿Qué métodos utilizas para gestionar el presupuesto de una empresa?",
                "respuestas" => [
                    "Desarrollo presupuestos basados en un análisis detallado de los datos históricos y proyecciones futuras, ajustando por factores de mercado y objetivos empresariales.",
                    "Aplico un enfoque colaborativo, trabajando con diferentes departamentos para entender sus necesidades y expectativas, y asegurando que el presupuesto refleje los objetivos estratégicos de la empresa.",
                    "Uso software de gestión presupuestaria para monitorear los gastos en tiempo real y ajustar las asignaciones según sea necesario para evitar desviaciones."
                ]
            ],
            [
                "pregunta" => "¿Cómo interpretas los indicadores financieros clave?",
                "respuestas" => [
                    "Analizo indicadores como el ROI, ROE, y margen de beneficio para evaluar la eficacia operativa y la rentabilidad de la empresa.",
                    "Me enfoco en la interpretación contextual de los indicadores, considerando tanto el rendimiento interno como comparaciones con estándares del sector.",
                    "Realizo análisis de tendencias y uso benchmarks de la industria para dar contexto a los indicadores financieros, ayudando a la dirección a tomar decisiones informadas."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la preparación de informes financieros?",
                "respuestas" => [
                    "Tengo amplia experiencia en la preparación de informes financieros cumpliendo con los estándares GAAP y IFRS, adaptándome a las regulaciones locales e internacionales.",
                    "He preparado informes financieros trimestrales y anuales para empresas cotizadas en bolsa, asegurando transparencia y cumplimiento normativo.",
                    "Durante mi carrera he desarrollado habilidades en la consolidación de informes financieros para grupos empresariales, mejorando la claridad y utilidad de la información presentada a stakeholders."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas el análisis de costos?",
                "respuestas" => [
                    "Utilizo técnicas de contabilidad de costos para desglosar y analizar los gastos, mejorando la estrategia de precios y la eficiencia operativa.",
                    "Aplico métodos de costeo basado en actividades para obtener un entendimiento más preciso de cómo los recursos son utilizados y cómo pueden optimizarse.",
                    "Realizo revisiones regulares de los costos, comparándolos con presupuestos y pronósticos para identificar y rectificar desviaciones inesperadas."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la planificación financiera?",
                "respuestas" => [
                    "Utilizo software de planificación financiera como Oracle Financials y SAP para un análisis detallado y proyecciones precisas.",
                    "Empleo hojas de cálculo avanzadas y herramientas de modelado financiero para desarrollar planes financieros robustos y adaptativos.",
                    "Incorporo herramientas de análisis de datos y simulación para prever escenarios futuros y ajustar estrategias financieras acorde a las condiciones del mercado."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una situación en la que resolviste un problema financiero complejo?",
                "respuestas" => [
                    "En mi último empleo, resolví una discrepancia significativa en el reconocimiento de ingresos que afectaba los resultados financieros reportados. Mediante un análisis detallado y colaboración con el equipo de auditoría, corregí el error y restablecí la integridad de nuestros estados financieros.",
                    "Enfrenté un problema de flujo de caja negativo sostenido; implementé medidas de reducción de costos y renegociación de términos con proveedores, lo que recuperó la estabilidad financiera de la empresa.",
                    "Resolví un problema de sobrecoste en un proyecto clave mediante la implementación de un sistema de seguimiento de costos más riguroso y la negociación de contratos más favorables con subcontratistas."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la rentabilidad de un proyecto o inversión?",
                "respuestas" => [
                    "Utilizo técnicas de evaluación financiera como el Valor Presente Neto (VPN) y la Tasa Interna de Retorno (TIR) para determinar la viabilidad y rentabilidad de proyectos e inversiones.",
                    "Realizo análisis de sensibilidad para entender cómo diferentes escenarios afectarían la rentabilidad del proyecto, asegurando una decisión bien fundamentada.",
                    "Combino análisis cuantitativos con consideraciones cualitativas, como el alineamiento estratégico y el riesgo de mercado, para evaluar inversiones."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de cuentas por cobrar y cuentas por pagar?",
                "respuestas" => [
                    "He gestionado con éxito las cuentas por cobrar y por pagar de empresas grandes, optimizando los tiempos de cobro y pago para mejorar el flujo de caja.",
                    "Mi experiencia incluye la implementación de sistemas automatizados para la gestión eficiente de estas cuentas, reduciendo errores y mejorando la transparencia.",
                    "He desarrollado políticas que minimizan los periodos de crédito para las cuentas por cobrar mientras maximizan los términos de pago favorables en las cuentas por pagar."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la conciliación bancaria?",
                "respuestas" => [
                    "Realizo conciliaciones bancarias mensualmente utilizando software de contabilidad para asegurar que todos los registros coincidan con los estados bancarios, identificando y corrigiendo discrepancias rápidamente.",
                    "Me aseguro de que cada transacción sea registrada correctamente y verificada contra los extractos bancarios, utilizando procesos automatizados para mejorar la eficiencia y reducir errores.",
                    "Mantengo comunicación regular con el banco para resolver cualquier discrepancia en el menor tiempo posible, garantizando la precisión en nuestros registros financieros."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomas para garantizar la conformidad con las regulaciones financieras?",
                "respuestas" => [
                    "Me mantengo actualizado con los cambios en las regulaciones financieras mediante cursos de formación continua y suscripciones a publicaciones especializadas.",
                    "Implemento revisiones regulares y auditorías internas para asegurar que todas las prácticas contables cumplen con las normas vigentes.",
                    "Colaboro estrechamente con asesores legales para interpretar y aplicar correctamente las regulaciones financieras en todas nuestras operaciones."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión del flujo de efectivo?",
                "respuestas" => [
                    "Priorizo la creación de un colchón de efectivo para manejar imprevistos, mientras optimizo el pago a proveedores y la colección de cuentas por cobrar.",
                    "Utilizo modelos de pronóstico de flujo de efectivo para planificar y asegurar la disponibilidad de fondos necesaria para las operaciones continuas.",
                    "Implemento herramientas tecnológicas para un seguimiento en tiempo real del flujo de efectivo, permitiendo ajustes operativos rápidos según sea necesario."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordas el análisis de riesgos financieros?",
                "respuestas" => [
                    "Desarrollo e implemento políticas de gestión de riesgos que incluyen la identificación, evaluación y mitigación de riesgos financieros.",
                    "Utilizo software de análisis de riesgos para simular diferentes escenarios y sus impactos potenciales en la salud financiera de la empresa.",
                    "Colaboro con el equipo de gestión para establecer tolerancias al riesgo y estrategias de mitigación apropiadas a nuestro contexto empresarial."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das al control interno en la contabilidad?",
                "respuestas" => [
                    "Considero el control interno como fundamental para asegurar la integridad de la información financiera y prevenir fraudes.",
                    "Integro controles internos robustos en todos los procesos contables y realizo evaluaciones periódicas para su mejora continua.",
                    "Capacito al personal sobre la importancia y la ejecución de controles internos, asegurando que sean parte integral de nuestra cultura organizacional."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la auditoría interna y externa?",
                "respuestas" => [
                    "Facilito el proceso de auditoría interna y externa proporcionando toda la documentación necesaria y asegurando la total transparencia de nuestras operaciones financieras.",
                    "Trabajo en colaboración con los auditores para identificar y rectificar cualquier irregularidad o área de mejora en los sistemas financieros de la empresa.",
                    "Organizo y preparo los calendarios de auditoría, asegurando que todas las áreas de la empresa estén listas y cumpliendo con los estándares requeridos antes de las visitas de auditores."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir un proyecto de optimización de costos que hayas liderado?",
                "respuestas" => [
                    "Dirigí un proyecto de revisión de procesos operativos que resultó en una reducción del 15% en los costos operativos generales mediante la automatización y la reestructuración de procesos.",
                    "Implementé un sistema de gestión de inventarios just-in-time que redujo significativamente los costos de almacenamiento y desperdicio de materiales.",
                    "Lideré una iniciativa de renegociación de contratos con proveedores clave, logrando ahorros sustanciales y mejoras en los términos de entrega y calidad de producto."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para reducir los gastos operativos de una empresa?",
                "respuestas" => [
                    "Analizaría detalladamente los gastos actuales para identificar áreas de ineficiencia y propondría medidas de reducción de costos sin comprometer la calidad del servicio o producto.",
                    "Implementaría tecnologías automatizadas para optimizar los procesos y reducir la necesidad de intervención manual, lo que disminuye los costos laborales y mejora la eficiencia.",
                    "Negociaría con proveedores para obtener mejores precios o condiciones de compra, y revisaría los contratos de servicios para ajustarlos a nuestras necesidades reales y evitar gastos superfluos."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de impuestos?",
                "respuestas" => [
                    "He manejado la planificación y cumplimiento fiscal para empresas multinacionales, asegurando la optimización de las cargas tributarias bajo diferentes regímenes fiscales.",
                    "Mi experiencia incluye la gestión de auditorías fiscales y la implementación de estrategias de mitigación de riesgos fiscales.",
                    "He colaborado con asesores fiscales para desarrollar estructuras eficientes desde el punto de vista fiscal y asegurar el cumplimiento en todas las jurisdicciones en las que operamos."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la planificación fiscal?",
                "respuestas" => [
                    "Desarrollo estrategias de planificación fiscal que se anticipan a cambios en la legislación, minimizando obligaciones fiscales y maximizando la rentabilidad.",
                    "Colaboro con expertos legales y fiscales para asegurar que todas las estrategias de planificación fiscal cumplan con la ley y sean eficaces.",
                    "Utilizo software de gestión fiscal para modelar y prever las consecuencias fiscales de diversas estrategias de negocio, eligiendo la más óptima."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para el análisis financiero?",
                "respuestas" => [
                    "Utilizo plataformas como Microsoft Excel para análisis financiero detallado, SAP para la integración de datos empresariales, y herramientas específicas de la industria como QuickBooks para operaciones más pequeñas.",
                    "Empleo software de Business Intelligence como Tableau y Power BI para visualizar y analizar datos financieros, facilitando la toma de decisiones estratégicas.",
                    "Aplico herramientas de análisis predictivo para modelar escenarios financieros y anticipar cambios en las condiciones del mercado."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de activos y pasivos?",
                "respuestas" => [
                    "Mi enfoque se centra en mantener un balance óptimo entre activos y pasivos para sostener la liquidez y la solvencia a largo plazo.",
                    "Utilizo análisis de ratio y modelado financiero para evaluar y ajustar la estructura de capital de la empresa, optimizando nuestro perfil de riesgo y retorno.",
                    "Gestiono activos y pasivos con un enfoque proactivo, asegurando que se alineen con los objetivos estratégicos de la empresa y las condiciones del mercado."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías una discrepancia en los registros contables?",
                "respuestas" => [
                    "Iniciaría una auditoría interna para identificar la fuente de la discrepancia, utilizando herramientas de reconciliación de cuentas para corregir los errores.",
                    "Colaboraría con el equipo contable para revisar todas las entradas relacionadas y asegurar que todas las transacciones estén debidamente documentadas y justificadas.",
                    "Implementaría controles adicionales para prevenir futuras discrepancias y mejorar la precisión de los registros contables."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para mejorar la eficiencia financiera de una empresa?",
                "respuestas" => [
                    "Implementaría sistemas de contabilidad y reporte automatizados para reducir errores y tiempo de procesamiento.",
                    "Revisaría los procesos financieros actuales para identificar cuellos de botella y áreas de mejora, aplicando soluciones tecnológicas modernas.",
                    "Capacitaría al equipo en prácticas de trabajo lean y agiles para maximizar la productividad y reducir costos innecesarios."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la solvencia financiera de una empresa?",
                "respuestas" => [
                    "Analizo ratios financieros claves como el ratio de liquidez, solvencia y endeudamiento, junto con proyecciones de flujo de caja.",
                    "Evalúo la estructura de capital de la empresa y su capacidad para generar ingresos suficientes para cubrir sus obligaciones a corto y largo plazo.",
                    "Realizo un análisis detallado del estado de resultados, balance general y flujos de efectivo para obtener una visión completa de la salud financiera de la empresa."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de inversiones?",
                "respuestas" => [
                    "He manejado portafolios de inversiones para clientes corporativos, con enfoques tanto en ingresos fijos como en equidad, maximizando retornos ajustados al riesgo.",
                    "Poseo experiencia en la evaluación y selección de oportunidades de inversión, utilizando análisis cuantitativo y cualitativo.",
                    "Tengo experiencia en supervisar y ajustar estrategias de inversión basadas en cambios del mercado y objetivos de los clientes."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de riesgos financieros en un entorno volátil?",
                "respuestas" => [
                    "Utilizo herramientas de análisis de riesgo y software de simulación para prever y mitigar efectos de fluctuaciones de mercado.",
                    "Mantengo una diversificación adecuada del portafolio y una revisión constante de las estrategias de cobertura para proteger los activos financieros.",
                    "Implemento un riguroso proceso de due diligence para todos los activos y transacciones, asegurando que los riesgos sean comprendidos y gestionados adecuadamente."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das al cumplimiento de los plazos en la contabilidad?",
                "respuestas" => [
                    "Considero crítico el cumplimiento de plazos para mantener la credibilidad y la transparencia financiera, así como para cumplir con regulaciones externas.",
                    "Priorizo la organización y planificación adecuada para asegurar que todos los informes financieros y declaraciones fiscales se presenten a tiempo.",
                    "Utilizo herramientas de gestión de proyectos para monitorizar los plazos de todas las tareas contables, asegurando que no haya retrasos."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la relación con instituciones financieras externas?",
                "respuestas" => [
                    "Mantengo una comunicación abierta y regular con nuestras instituciones financieras para asegurar que entendemos y podemos cumplir con sus requisitos y condiciones.",
                    "Negocio los mejores términos posibles para financiamiento y otros servicios bancarios, basándome en un entendimiento profundo de nuestras necesidades y capacidades financieras.",
                    "Establezco y mantengo relaciones sólidas con contactos clave en las instituciones financieras para facilitar negociaciones y obtener acceso a información y recursos valiosos."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una situación en la que identificaste y corregiste un error contable?",
                "respuestas" => [
                    "Descubrí un error significativo en la depreciación de activos durante una revisión de fin de año; ajusté los cálculos y corregí el error, lo que mejoró nuestra posición de resultados.",
                    "Identifiqué y resolví discrepancias en el reconocimiento de ingresos entre reportes interdepartamentales, lo que resultó en una representación más precisa de nuestra situación financiera.",
                    "Encontré un error en la aplicación de los principios de contabilidad para transacciones en moneda extranjera, corrigiendo el problema y mejorando la precisión de nuestros estados financieros."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para maximizar los beneficios de una empresa?",
                "respuestas" => [
                    "Implementaría mejoras en eficiencia operativa a través de tecnología y optimización de procesos, reduciendo costos y mejorando el margen de beneficio.",
                    "Exploraría nuevas oportunidades de mercado para expandir ingresos, mientras mantengo un control riguroso sobre los costos operativos.",
                    "Fortalecería las relaciones con los clientes y mejorarías las estrategias de precios y ventas para aumentar los ingresos y los márgenes de beneficio."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para el análisis de rentabilidad por producto o servicio?",
                "respuestas" => [
                    "Utilizo análisis de costos y precios para determinar la rentabilidad de cada producto o servicio, ajustando la estrategia según los resultados para maximizar los beneficios.",
                    "Realizo un seguimiento de los márgenes de contribución por producto y servicio, y reevalúo la oferta basándome en la demanda del mercado y la eficiencia de producción.",
                    "Empleo herramientas de análisis financiero para desglosar los costos y ingresos asociados con cada línea de productos, optimizando así nuestra estructura de precios y oferta de servicios."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la preparación para una auditoría financiera?",
                "respuestas" => [
                    "Organizo revisiones periódicas y preparo la documentación necesaria con antelación para asegurar un proceso de auditoría fluido y sin contratiempos.",
                    "Capacito al equipo contable sobre las mejores prácticas y estándares de auditoría para minimizar errores y discrepancias.",
                    "Colaboro estrechamente con los auditores externos desde el inicio para entender sus requisitos y facilitar el acceso a la información requerida."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la precisión de los informes financieros?",
                "respuestas" => [
                    "Implementaría controles internos rigurosos y realizaría auditorías internas regulares para validar la precisión de los informes financieros.",
                    "Capacitaría continuamente al personal en normas de contabilidad y aseguraría el uso de software actualizado para evitar errores en los informes.",
                    "Establecería un comité de revisión financiera para supervisar la preparación de los informes y asegurar su cumplimiento con las normas contables aceptadas."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la eficacia de los controles financieros internos?",
                "respuestas" => [
                    "Realizo auditorías periódicas y pruebas de controles para evaluar su efectividad y realizar ajustes según sea necesario.",
                    "Utilizo indicadores de desempeño y feedback de los equipos para mejorar continuamente los procesos y controles internos.",
                    "Incorporo evaluaciones de riesgos en el proceso de revisión para asegurar que los controles sean adecuados y efectivos frente a los riesgos financieros actuales."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de flujos de efectivo en múltiples divisas?",
                "respuestas" => [
                    "He gestionado flujos de efectivo en múltiples divisas para corporaciones internacionales, optimizando las posiciones de efectivo y minimizando los riesgos de cambio.",
                    "Poseo experiencia en la utilización de instrumentos financieros para cobertura de riesgos de cambio y en la implementación de estrategias para la eficiencia en la gestión de tesorería.",
                    "Tengo un historial probado en la mejora de procesos de reconciliación y en la optimización de la liquidez en diferentes monedas para maximizar la rentabilidad."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías una situación de fraude financiero?",
                "respuestas" => [
                    "Iniciaría una investigación inmediata para identificar la extensión del fraude, colaborando con expertos en forenses financieros y legales para resolver la situación.",
                    "Implementaría medidas correctivas y preventivas para fortalecer los controles internos y evitar futuros incidentes de fraude.",
                    "Capacitaría al personal en detección de fraudes y fomentaría una cultura de transparencia y ética en la empresa."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la educación financiera del personal en una empresa?",
                "respuestas" => [
                    "Promuevo activamente la educación financiera entre el personal para mejorar la toma de decisiones y fomentar una cultura de responsabilidad y transparencia financiera.",
                    "Considero esencial la capacitación continua del equipo en aspectos financieros, lo cual ayuda a mejorar los procesos internos y la comprensión de los objetivos financieros de la empresa.",
                    "Organizo talleres y seminarios regulares sobre finanzas para asegurar que el personal esté bien informado y capacitado en las mejores prácticas y regulaciones financieras."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una estrategia que implementaste para mejorar la gestión financiera de una empresa?",
                "respuestas" => [
                    "Desarrollé e implementé una estrategia de centralización de las funciones financieras, lo que resultó en una reducción de costos y una mejora en la eficiencia y el control.",
                    "Introduje un nuevo sistema de planificación de recursos empresariales (ERP) que integró diferentes áreas financieras, mejorando la precisión y la disponibilidad de la información financiera.",
                    "Reestructuré la estrategia de inversión de la empresa, diversificando activos y reduciendo la exposición a riesgos, lo cual mejoró significativamente nuestra posición financiera a largo plazo."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la preparación de presupuestos en un entorno económico cambiante?",
                "respuestas" => [
                    "Utilizo un enfoque flexible en la preparación de presupuestos, con revisiones periódicas para adaptarlos a cambios en el entorno económico.",
                    "Incorporo análisis de escenarios en la planificación presupuestaria para anticipar posibles impactos económicos y ajustar las estrategias financieras adecuadamente.",
                    "Mantengo una comunicación constante con los líderes de la empresa para entender mejor las necesidades y expectativas, ajustando el presupuesto en función de la evolución del mercado y la empresa."
                ]
            ]
        ];


        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 2,
            ]);
            $p = 10;
            foreach ($pregunta['respuestas'] as $respuesta) {

                DB::table('Answer')->insert([
                    'answer' => $respuesta,
                    'QuestionID' => $i,
                    'QuestionPoints' => $p,
                ]);
                $p -= 3;
            }
            $i++;
        }

        //Marketing y publicidad
        $respuestas = [
            [
                "pregunta" => "¿Cuál es tu experiencia previa en la planificación de estrategias de marketing?",
                "respuestas" => [
                    "He desarrollado y ejecutado múltiples estrategias de marketing en diferentes sectores, ajustándolas según las necesidades del mercado y los objetivos empresariales.",
                    "Mi experiencia incluye la creación de planes de marketing integrados que abarcan tanto medios digitales como tradicionales.",
                    "Aunque soy relativamente nuevo en la planificación estratégica de marketing, tengo un fuerte background en la implementación y el seguimiento de campañas publicitarias."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la investigación de mercado para un nuevo producto?",
                "respuestas" => [
                    "Comenzaría definiendo el público objetivo y luego emplearía métodos cuantitativos y cualitativos para recopilar y analizar datos.",
                    "Usaría herramientas de análisis de mercado online, encuestas a clientes y grupos focales para obtener una comprensión profunda del mercado objetivo.",
                    "Integraría datos secundarios disponibles con investigación primaria personalizada para desarrollar una perspectiva completa del entorno de mercado."
                ]
            ],
            [
                "pregunta" => "¿Qué métodos utilizas para segmentar el mercado?",
                "respuestas" => [
                    "Utilizo una combinación de segmentación demográfica, psicográfica y de comportamiento para identificar y priorizar los segmentos de mercado más relevantes.",
                    "Aplico análisis estadísticos y herramientas de big data para segmentar el mercado de manera precisa y eficiente.",
                    "Me enfoco en la segmentación basada en el valor del cliente y la probabilidad de conversión para maximizar la efectividad de las campañas de marketing."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para el desarrollo de un plan de marketing?",
                "respuestas" => [
                    "Mi enfoque incluye un análisis exhaustivo del mercado, definición de objetivos claros, estrategia de posicionamiento, y la creación de un mix de marketing equilibrado.",
                    "Trabajo colaborativamente con equipos de ventas, producto y servicio al cliente para desarrollar un plan que sea integral y alineado con las metas empresariales.",
                    "Priorizo la flexibilidad en el plan de marketing para adaptarme rápidamente a cambios en el mercado o en las respuestas del consumidor."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de una campaña publicitaria?",
                "respuestas" => [
                    "Evalúo la efectividad mediante indicadores clave de rendimiento como el retorno de la inversión (ROI), la tasa de conversión y el alcance de la campaña.",
                    "Uso herramientas de análisis web y seguimiento de conversiones para medir el impacto directo de las campañas en las ventas y el compromiso del cliente.",
                    "Realizo pruebas A/B y utilizo grupos de control para comparar el rendimiento de diferentes elementos de la campaña y optimizarla basándome en datos reales."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para el análisis competitivo?",
                "respuestas" => [
                    "Utilizo herramientas como SEMrush, Ahrefs y BuzzSumo para realizar análisis competitivos detallados, monitoreando las estrategias de SEO, contenido y redes sociales de competidores.",
                    "Aplico análisis SWOT para entender fortalezas, debilidades, oportunidades y amenazas en relación con competidores directos.",
                    "Me apoyo en herramientas de inteligencia de mercado como Market Explorer y Insights para obtener una visión global del comportamiento de los competidores y tendencias de la industria."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una campaña de marketing exitosa en la que hayas participado?",
                "respuestas" => [
                    "Participé en una campaña de lanzamiento de producto que generó un aumento del 150% en leads cualificados a través de una combinación de marketing de influencers, publicidad PPC y eventos en línea.",
                    "Colaboré en una campaña de concienciación de marca que utilizó estrategias de contenido viral y asociaciones con marcas líderes, resultando en un crecimiento del reconocimiento de marca en un 40% en tres meses.",
                    "Dirigí una campaña de retención de clientes que integró email marketing personalizado y ofertas exclusivas, logrando reducir la tasa de churn en un 25%."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas el análisis de tendencias del mercado?",
                "respuestas" => [
                    "Utilizo herramientas de análisis de datos como Google Trends y análisis de redes sociales para identificar y actuar según las tendencias emergentes.",
                    "Colaboro con equipos de insights del consumidor para realizar análisis predictivo y asegurar que nuestras estrategias de marketing se anticipen a cambios del mercado.",
                    "Mantengo una actualización constante a través de informes de la industria y publicaciones de investigación para incorporar rápidamente tendencias relevantes en nuestras estrategias de marketing."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la creación de contenido para medios digitales?",
                "respuestas" => [
                    "He creado y gestionado contenido para múltiples plataformas digitales incluyendo blogs, redes sociales y sitios web, optimizando cada pieza para SEO y engagement del usuario.",
                    "Poseo experiencia en el desarrollo de contenido multimedia, incluyendo videos, podcasts y gráficos interactivos, para mejorar la experiencia del usuario y aumentar la retención de contenido.",
                    "Tengo un historial comprobado en la creación de campañas de contenido que incrementan la visibilidad de la marca y fomentan la interacción con el cliente."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para aumentar la visibilidad de una marca en línea?",
                "respuestas" => [
                    "Implementaría una combinación de SEO avanzado, marketing de contenido estratégico y publicidad pagada para mejorar la presencia en línea de la marca.",
                    "Utilizaría estrategias de marketing en redes sociales, incluyendo campañas de influencers y publicidad dirigida para llegar a audiencias más amplias y relevantes.",
                    "Optaría por tácticas de marketing de guerrilla y campañas virales para generar buzz y aumentar rápidamente la visibilidad de la marca entre el público objetivo."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de las estrategias de SEO y SEM?",
                "respuestas" => [
                    "Mido la efectividad de SEO y SEM a través de KPIs como la clasificación de palabras clave, el tráfico orgánico, y la tasa de conversión, utilizando herramientas como Google Analytics.",
                    "Analizo el retorno sobre la inversión (ROI) de las campañas SEM y ajusto las estrategias en tiempo real para optimizar el presupuesto y los resultados.",
                    "Realizo auditorías regulares de SEO para asegurar que el sitio web cumple con las mejores prácticas y adapto las tácticas basándome en los cambios en los algoritmos de los motores de búsqueda."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a las redes sociales en una estrategia de marketing?",
                "respuestas" => [
                    "Considero las redes sociales fundamentales para la interacción directa con los clientes y para influir en la percepción de la marca, adecuando el contenido a cada plataforma específica.",
                    "Las redes sociales son vitales para alcanzar a la audiencia más joven y para campañas de respuesta rápida, aprovechando tendencias y feedback en tiempo real.",
                    "Las veo como un complemento esencial de otras estrategias de marketing, ideales para el lanzamiento rápido de promociones y para la amplificación de contenido."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la relación con influencers en una estrategia de marketing?",
                "respuestas" => [
                    "Establezco colaboraciones basadas en la autenticidad y el alineamiento de valores entre los influencers y la marca, priorizando relaciones a largo plazo.",
                    "Utilizo plataformas y herramientas específicas para gestionar y monitorear las campañas con influencers, asegurando que los KPIs se cumplan eficientemente.",
                    "Negocio acuerdos claros y medibles, estableciendo expectativas precisas y seguimiento continuo para asegurar que las campañas alcanzan los objetivos deseados."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la generación de leads?",
                "respuestas" => [
                    "Mi enfoque se centra en la creación de contenido de valor y campañas dirigidas que atraigan a potenciales clientes, utilizando técnicas de inbound marketing.",
                    "Desarrollo estrategias de lead nurturing para avanzar a los leads a través del embudo de ventas, mejorando la conversión con personalización y seguimiento automatizado.",
                    "Implemento una combinación de marketing digital y tácticas de outbound, como email marketing y publicidad en redes, para maximizar la generación de leads cualificados."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la reputación en línea de una empresa?",
                "respuestas" => [
                    "Monitorearía activamente las menciones de la marca en línea, respondiendo rápidamente a comentarios negativos y destacando positivos para mejorar la percepción pública.",
                    "Implementaría programas de gestión de crisis para actuar rápidamente en caso de incidentes que puedan afectar la reputación de la empresa.",
                    "Utilizaría herramientas de escucha social para seguir la conversación en torno a la marca y ajustar las estrategias de comunicación según sea necesario."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomas para asegurar la coherencia de la marca en todos los canales?",
                "respuestas" => [
                    "Desarrollo y aplico una guía de estilo de marca que detalle la voz, tono, y elementos visuales a utilizar en todos los canales de comunicación.",
                    "Realizo auditorías regulares de marca para asegurar que todas las comunicaciones reflejen consistentemente los valores y el mensaje de la empresa.",
                    "Coordino estrechamente con todos los departamentos para garantizar que las campañas en diferentes canales estén sincronizadas y coherentes."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la colaboración con agencias de publicidad o marketing externas?",
                "respuestas" => [
                    "Establezco relaciones basadas en la comunicación clara y objetivos compartidos para asegurar que todas las partes están alineadas y enfocadas en resultados medibles.",
                    "Realizo reuniones regulares y revisiones de desempeño para mantener a las agencias externas responsables y asegurar la máxima eficiencia y retorno sobre la inversión.",
                    "Utilizo contratos detallados que especifican expectativas, plazos y criterios de éxito para garantizar que los servicios proporcionados cumplen con nuestros estándares de calidad."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una estrategia de marketing de contenidos que hayas implementado?",
                "respuestas" => [
                    "Desarrollé una estrategia de contenidos enfocada en educar al cliente sobre nuestros productos mediante artículos de blog, videos tutoriales y estudios de caso, lo que incrementó nuestro tráfico web en un 30%.",
                    "Implementé una serie de campañas de contenido interactivas que incluyeron infografías y quizzes personalizados, aumentando significativamente la participación del usuario y la captura de datos.",
                    "Lancé un podcast semanal que abordaba temas relevantes para nuestra industria, lo que nos ayudó a construir autoridad en el sector y mejoró nuestro engagement con la comunidad."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de una estrategia de email marketing?",
                "respuestas" => [
                    "Utilizo métricas clave como tasa de apertura, tasa de clics, conversiones y retorno de inversión para medir la efectividad de las campañas de email marketing.",
                    "Segmento las listas de correo para personalizar los mensajes y realizar pruebas A/B para optimizar las tasas de respuesta y engagement.",
                    "Analizo el comportamiento del usuario post-clic para entender mejor cómo los emails influyen en las decisiones de compra y ajustar las tácticas según sea necesario."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para medir el retorno de la inversión en marketing?",
                "respuestas" => [
                    "Uso plataformas de análisis avanzado como Google Analytics, CRM y herramientas de automatización de marketing para rastrear y reportar el ROI de cada campaña.",
                    "Implemento sistemas de atribución de múltiples canales para entender cómo cada elemento de la estrategia de marketing contribuye al resultado final.",
                    "Me apoyo en herramientas de BI (Business Intelligence) para integrar datos de diversas fuentes y obtener una vista holística del impacto del marketing en las ventas y la retención de clientes."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la organización de eventos promocionales?",
                "respuestas" => [
                    "He organizado numerosos eventos promocionales, desde ferias comerciales hasta lanzamientos de productos, gestionando todos los aspectos desde la logística hasta la promoción y la medición del éxito del evento.",
                    "Mi experiencia incluye tanto eventos en persona como virtuales, utilizando las últimas tecnologías para maximizar el alcance y el impacto de cada evento.",
                    "Soy experto en la coordinación de equipos multifuncionales y proveedores externos para asegurar que los eventos se ejecuten sin problemas y cumplan con los objetivos estratégicos de la marca."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de la comunicación en crisis?",
                "respuestas" => [
                    "Actúo rápidamente para evaluar la situación y comunicar con transparencia a las partes interesadas, utilizando un plan preestablecido de gestión de crisis.",
                    "Me enfoco en mantener la calma, recopilar todos los hechos disponibles y responder de manera coherente y considerada para proteger la reputación de la organización.",
                    "Colaboro estrechamente con los equipos de relaciones públicas y legal para asegurar que todas las comunicaciones sean precisas y mitiguen posibles daños."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para mejorar la participación del cliente?",
                "respuestas" => [
                    "Implementaría estrategias de gamificación para aumentar la interacción del cliente, ofreciendo recompensas por acciones específicas dentro de nuestra plataforma.",
                    "Desarrollaría contenido interactivo y personalizado, como webinars y tutoriales en vivo, para fomentar una participación más activa y directa de los clientes.",
                    "Utilizaría herramientas de CRM para segmentar y personalizar las comunicaciones, asegurando que cada cliente reciba mensajes relevantes y oportunos que incentiven la participación."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la personalización en una estrategia de marketing?",
                "respuestas" => [
                    "Usaría datos de comportamiento del cliente para crear perfiles detallados y ofrecer experiencias de compra personalizadas a través de todos los canales.",
                    "Implementaría tecnología de IA para analizar datos en tiempo real y adaptar automáticamente las ofertas y mensajes según las preferencias y el historial de cada cliente.",
                    "Aprovecharía las tecnologías de segmentación avanzada para entregar contenido y promociones específicas que resonen con los intereses individuales de los clientes."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das al análisis del comportamiento del consumidor?",
                "respuestas" => [
                    "Lo considero fundamental para entender las necesidades y motivaciones de los consumidores, lo que me permite ajustar las estrategias de marketing para mejor atender y anticipar sus comportamientos.",
                    "Utilizo análisis de comportamiento para guiar todas las decisiones de marketing, desde el desarrollo de productos hasta las campañas de comunicación, asegurando que se alineen con las expectativas del consumidor.",
                    "El análisis del comportamiento del consumidor es crucial para optimizar el journey del cliente y mejorar la conversión y la retención a través de una mejor comprensión de sus patrones de compra."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la identificación de oportunidades de mercado?",
                "respuestas" => [
                    "Realizo análisis de mercado continuos para identificar tendencias emergentes y brechas en el mercado que representen oportunidades para la innovación o expansión.",
                    "Utilizo herramientas de inteligencia de mercado y datos de ventas internos para evaluar el potencial de nuevas áreas de negocio y mercados geográficos.",
                    "Colaboro con equipos de insights y desarrollo de productos para validar oportunidades a través de investigación de mercado y pruebas de concepto."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la coordinación de lanzamientos de productos?",
                "respuestas" => [
                    "Dirijo un enfoque integrado, asegurando que todos los equipos, desde desarrollo de producto hasta marketing y ventas, estén alineados con el cronograma y los objetivos del lanzamiento.",
                    "Utilizo herramientas de gestión de proyectos para mantener a todos los equipos informados y en pista, y aseguro que cada fase del lanzamiento sea ejecutada correctamente.",
                    "Coordinando las actividades promocionales cruzadas y asegurando una comunicación fluida entre departamentos para garantizar un lanzamiento de producto cohesivo y efectivo."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para mejorar la experiencia del cliente en línea y fuera de línea?",
                "respuestas" => [
                    "Implementaría un enfoque omnicanal para asegurar una experiencia de cliente consistente y fluida tanto en línea como en tiendas físicas.",
                    "Usaría feedback del cliente para identificar áreas de mejora y aplicaría cambios basados en datos para optimizar tanto el journey digital como el físico.",
                    "Capacitaría al personal de servicio al cliente y utilizaría tecnología avanzada para mejorar la interacción y satisfacción del cliente en todos los puntos de contacto."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de una estrategia de branding?",
                "respuestas" => [
                    "Mido el reconocimiento de marca y la percepción a través de encuestas y análisis de sentimientos en redes sociales, evaluando cómo estos indicadores impactan en la lealtad y retención del cliente.",
                    "Utilizo indicadores de desempeño como el aumento en la cuota de mercado y la salud de la marca a través de métricas de compromiso y conversión.",
                    "Realizo estudios comparativos con competidores para entender la posición de nuestra marca en el mercado y ajustar la estrategia según sea necesario para mejorar la fortaleza de la marca."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la automatización del marketing?",
                "respuestas" => [
                    "Utilizo plataformas como HubSpot y Marketo para automatizar campañas de marketing, personalizar comunicaciones y medir eficazmente las interacciones y conversiones.",
                    "Implemento herramientas de CRM para automatizar el seguimiento de clientes y asegurar una gestión eficiente del funnel de ventas.",
                    "Aplico soluciones de AI y machine learning para optimizar la segmentación de audiencias y la personalización de campañas en tiempo real."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una situación en la que resolviste un desafío de marketing?",
                "respuestas" => [
                    "Enfrenté el desafío de mejorar la tasa de conversión en una campaña de bajo rendimiento. Analicé los datos, realicé ajustes en la segmentación y el mensaje, resultando en un aumento del 25% en conversiones.",
                    "Dirigí la respuesta a una crisis de reputación online, coordinando un plan de acción rápido que involucraba comunicados de prensa, actualizaciones en redes sociales y entrevistas con medios, logrando restaurar la confianza del público en la marca.",
                    "Desarrollé una estrategia de entrada a un mercado altamente competitivo, identificando un nicho único mediante investigación de mercado, lo que permitió a la empresa obtener una cuota de mercado significativa rápidamente."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de campañas de publicidad en medios tradicionales?",
                "respuestas" => [
                    "Integro campañas en medios tradicionales con esfuerzos digitales para ampliar el alcance y mejorar la eficacia, supervisando estrechamente el ROI y ajustando en tiempo real.",
                    "Desarrollo colaboraciones con agencias de medios para asegurar que las ubicaciones y el tiempo de las campañas maximicen la visibilidad y el impacto.",
                    "Uso análisis de mercado y segmentación para orientar las campañas en los canales tradicionales más efectivos para nuestro público objetivo, asegurando una cobertura óptima y eficiencia en costos."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das al análisis del ciclo de vida del producto?",
                "respuestas" => [
                    "Lo considero crucial para planificar estrategias de marketing efectivas que acompañen el desarrollo del producto desde su lanzamiento hasta su retirada, maximizando así su rentabilidad.",
                    "Utilizo el análisis del ciclo de vida para adaptar las tácticas de marketing a las diferentes etapas del producto, asegurando que se satisfagan las necesidades cambiantes de los clientes y se mantenga la relevancia del mercado.",
                    "El análisis del ciclo de vida del producto me permite anticipar cambios en la demanda, ajustar la producción y la estrategia de precios, y planificar innovaciones o mejoras."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la creación de una estrategia de marketing para un mercado internacional?",
                "respuestas" => [
                    "Investigaría profundamente cada mercado local para entender las diferencias culturales y adaptaría el mensaje y los medios de comunicación para resonar específicamente en cada región.",
                    "Colaboraría con equipos locales y expertos en el mercado para desarrollar estrategias que sean culturalmente pertinentes y efectivas en términos de costos.",
                    "Utilizaría una combinación de marketing global y localizado, manteniendo un mensaje de marca coherente mientras personalizo aspectos clave según las necesidades y preferencias del mercado local."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la optimización de conversiones?",
                "respuestas" => [
                    "Tengo amplia experiencia en la implementación de pruebas A/B, análisis de datos de usuario y ajuste de interfaces para mejorar las tasas de conversión en sitios web y aplicaciones.",
                    "He liderado varios proyectos de optimización que han resultado en mejoras significativas en las métricas de conversión, utilizando enfoques basados en datos para refinar la experiencia del usuario y la jornada del cliente.",
                    "Regularmente utilizo herramientas de análisis web para identificar cuellos de botella en los funnels de conversión y desarrollar soluciones específicas que mejoren el rendimiento."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para mejorar el reconocimiento de marca?",
                "respuestas" => [
                    "Desarrollaría campañas de contenido que destaquen la unicidad de la marca y sus valores, utilizando plataformas de alto alcance como redes sociales y eventos en vivo para captar la atención del público.",
                    "Implementaría programas de embajadores de marca y colaboraciones con influencers para ampliar el alcance y la autenticidad de nuestras comunicaciones de marca.",
                    "Utilizaría publicidad dirigida y patrocinios estratégicos para colocar nuestra marca en frente de audiencias relevantes y construir asociaciones positivas en la mente de los consumidores."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de presupuestos en una estrategia de marketing?",
                "respuestas" => [
                    "Priorizo la asignación de recursos basándome en el retorno esperado de inversión, asegurando que los presupuestos se distribuyan de manera eficiente entre las diversas tácticas y plataformas.",
                    "Realizo un seguimiento riguroso de todos los gastos y resultados para ajustar rápidamente las asignaciones y optimizar el impacto de cada dólar gastado.",
                    "Colaboro con equipos de finanzas y analítica para desarrollar pronósticos y escenarios que guíen la planificación presupuestaria y la toma de decisiones estratégicas."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para mantener actualizada una estrategia de marketing en un mercado cambiante?",
                "respuestas" => [
                    "Implementaría un sistema de monitoreo continuo de tendencias de mercado y comportamiento del consumidor para adaptar rápidamente nuestra estrategia a cambios y oportunidades emergentes.",
                    "Fomentaría una cultura de innovación dentro del equipo de marketing para experimentar con nuevas tácticas y tecnologías que puedan mejorar nuestra efectividad.",
                    "Realizaría revisiones estratégicas regulares para evaluar la relevancia de nuestras tácticas y realizar ajustes proactivos en respuesta a la evolución del mercado."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de una estrategia de marketing omnicanal?",
                "respuestas" => [
                    "Utilizo indicadores clave de rendimiento específicos para cada canal, junto con métricas de desempeño general, para evaluar cómo cada componente contribuye a los objetivos globales.",
                    "Analizo la experiencia del cliente a través de diferentes puntos de contacto para asegurar una transición fluida y una comunicación coherente, lo que mejora la percepción general y la eficacia de la campaña.",
                    "Me apoyo en herramientas de análisis de datos y feedback del cliente para medir la consistencia y el impacto de la estrategia omnicanal en la satisfacción y fidelización del cliente."
                ]
            ]
        ];



        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 3,
            ]);
            $p = 10;
            foreach ($pregunta['respuestas'] as $respuesta) {

                DB::table('Answer')->insert([
                    'answer' => $respuesta,
                    'QuestionID' => $i,
                    'QuestionPoints' => $p,
                ]);
                $p -= 3;
            }
            $i++;
        }
        //Operaciones y logística
        $respuestas = [
            [
                "pregunta" => "¿Cuál es tu experiencia previa en la gestión de la cadena de suministro?",
                "respuestas" => [
                    "He dirigido varios proyectos de optimización de la cadena de suministro en una compañía multinacional durante los últimos cinco años.",
                    "Poseo experiencia en la implementación de tecnologías avanzadas para la gestión de la cadena de suministro en diversas industrias.",
                    "Soy nuevo en la gestión de la cadena de suministro, pero tengo conocimientos sólidos en logística y distribución adquiridos académicamente."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la planificación de la demanda y el inventario?",
                "respuestas" => [
                    "Utilizo software de planificación de recursos empresariales (ERP) para pronosticar la demanda y ajustar los niveles de inventario de manera eficiente.",
                    "Aplico métodos estadísticos y análisis predictivo para optimizar el inventario basado en tendencias históricas y demanda futura.",
                    "Colaboro estrechamente con el departamento de ventas para asegurar una planificación precisa de la demanda y evitar el exceso de inventario."
                ]
            ],
            [
                "pregunta" => "¿Qué métodos utilizas para optimizar los procesos de producción?",
                "respuestas" => [
                    "Implemento metodologías Lean y Six Sigma para mejorar la eficiencia y reducir el desperdicio en los procesos de producción.",
                    "Utilizo la automatización y la robótica para optimizar las operaciones de producción y aumentar la capacidad de producción.",
                    "Realizo auditorías regulares de los procesos para identificar áreas de mejora y aplicar correcciones estratégicas."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de la logística de entrada y salida?",
                "respuestas" => [
                    "Optimizo las rutas de transporte y negocío contratos con proveedores para mejorar la eficiencia logística tanto de entrada como de salida.",
                    "Implemento sistemas de gestión de transporte (TMS) para mejorar la visibilidad y el control de los flujos logísticos.",
                    "Fomento una colaboración estrecha con proveedores y clientes para asegurar una cadena de suministro sincronizada y eficiente."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la eficiencia de los procesos de distribución?",
                "respuestas" => [
                    "Utilizo indicadores de rendimiento clave (KPIs) para monitorear y evaluar la eficiencia y la puntualidad de los procesos de distribución.",
                    "Realizo auditorías regulares y utilizo feedback de los clientes para mejorar continuamente la distribución.",
                    "Aplico tecnologías de seguimiento en tiempo real para optimizar las rutas y asegurar entregas eficientes."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para el seguimiento de envíos y la gestión de inventario?",
                "respuestas" => [
                    "Utilizo sistemas avanzados de gestión de almacenes (WMS) y herramientas de seguimiento por GPS para mantener el control sobre los envíos.",
                    "Empleo plataformas basadas en la nube para integrar la información de envíos y gestión de inventarios en tiempo real.",
                    "Implemento soluciones de código de barras y RFID para el seguimiento preciso del inventario y los envíos."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una estrategia de gestión de almacenes que hayas implementado?",
                "respuestas" => [
                    "Desarrollé una estrategia basada en el sistema de gestión de almacenes Just-In-Time para reducir el exceso de inventario y mejorar la rotación de productos.",
                    "Implementé una configuración de almacén vertical para maximizar el uso del espacio y mejorar la eficiencia de las operaciones de picking.",
                    "Introduje el uso de tecnología automatizada para la gestión de almacenes, lo que aumentó la precisión del inventario y la rapidez de las operaciones."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la coordinación de transporte y envíos?",
                "respuestas" => [
                    "Optimizo las rutas de envío y coordino los horarios de transporte para garantizar entregas puntuales y eficientes.",
                    "Utilizo software de gestión de transporte para centralizar la información y mejorar la toma de decisiones en tiempo real.",
                    "Colaboro con equipos internos y externos para asegurar una sincronización efectiva y reducir tiempos muertos en el transporte."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de proveedores y contratistas?",
                "respuestas" => [
                    "Tengo amplia experiencia en la negociación y gestión de contratos con proveedores para asegurar el cumplimiento de los estándares de calidad y entrega.",
                    "He trabajado en la gestión de relaciones con múltiples proveedores internacionales, mejorando la eficiencia y reduciendo costos.",
                    "Mi enfoque se centra en el desarrollo de relaciones a largo plazo y en la mejora continua de los procesos de proveedores."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para mejorar la eficiencia operativa de una empresa?",
                "respuestas" => [
                    "Implementaría tecnologías de automatización para optimizar los procesos y reducir los tiempos de ciclo.",
                    "Aplicaría metodologías de mejora continua como Lean y Six Sigma para identificar y eliminar desperdicios en las operaciones.",
                    "Fomentaría la capacitación del personal para mejorar la competencia y la eficiencia en todas las áreas operativas."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los sistemas de gestión de calidad?",
                "respuestas" => [
                    "Realizo auditorías regulares y reviso los indicadores de calidad para asegurar el cumplimiento de los estándares internacionales.",
                    "Utilizo retroalimentación de clientes y análisis de defectos para medir y mejorar la calidad de los productos.",
                    "Implemento revisiones periódicas de procesos para garantizar que los sistemas de calidad estén actualizados y sean efectivos."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la optimización de procesos en la cadena de suministro?",
                "respuestas" => [
                    "Considero la optimización de procesos como fundamental para reducir costos y mejorar la eficiencia general de la cadena de suministro.",
                    "Priorizo la optimización de procesos para asegurar tiempos de respuesta rápidos y mejorar la satisfacción del cliente.",
                    "La optimización es clave para mantener la competitividad en el mercado, gestionando recursos de manera efectiva y reduciendo desperdicios."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de riesgos en la cadena de suministro?",
                "respuestas" => [
                    "Implemento estrategias de diversificación de proveedores y análisis de riesgo para mitigar interrupciones en la cadena de suministro.",
                    "Uso software especializado para prever y gestionar riesgos potenciales, asegurando la continuidad operativa.",
                    "Realizo evaluaciones de riesgo constantes y desarrollo planes de contingencia para responder rápidamente a incidentes inesperados."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de la capacidad de producción?",
                "respuestas" => [
                    "Analizo la demanda futura y ajusto la capacidad de producción utilizando técnicas de planificación avanzada.",
                    "Mantengo flexibilidad en la capacidad de producción para adaptarme a cambios en la demanda sin incurrir en costos excesivos.",
                    "Optimizo el uso de recursos y maquinaria para maximizar la producción sin comprometer la calidad."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la cadena de frío en la logística de alimentos?",
                "respuestas" => [
                    "Implementaría tecnología de monitoreo en tiempo real para mantener y registrar constantemente las temperaturas adecuadas durante el transporte y almacenamiento.",
                    "Capacitaría al personal en las mejores prácticas para la manipulación de productos sensibles al clima y establecería procedimientos de control estrictos.",
                    "Colaboraría con proveedores confiables que cumplan con las normativas de cadena de frío para garantizar la calidad y seguridad de los alimentos."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomas para garantizar la seguridad y el cumplimiento normativo en las operaciones?",
                "respuestas" => [
                    "Realizo auditorías de seguridad regulares y aseguro la formación continua del personal en materia de normativas y seguridad operacional.",
                    "Implemento sistemas de gestión de calidad que cumplen con las regulaciones locales e internacionales para cada industria específica.",
                    "Mantengo una comunicación activa con entidades reguladoras para estar siempre actualizado con las leyes y evitar infracciones."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la eficacia de los proveedores y contratistas?",
                "respuestas" => [
                    "Utilizo métricas de desempeño basadas en calidad, entrega a tiempo y capacidad de respuesta para evaluar y seleccionar proveedores.",
                    "Realizo revisiones periódicas y establezco KPIs para monitorear y evaluar el rendimiento de proveedores y contratistas.",
                    "Desarrollo programas de colaboración para trabajar conjuntamente en la mejora continua y asegurar alineación con los estándares de la empresa."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de proyectos de mejora continua?",
                "respuestas" => [
                    "He liderado múltiples proyectos de mejora continua, aplicando principios Lean y Six Sigma para aumentar la eficiencia operativa.",
                    "Mi experiencia incluye la implementación de sistemas de retroalimentación y procesos iterativos de revisión que han mejorado significativamente la productividad.",
                    "He colaborado en equipos interdisciplinarios para diseñar e implementar mejoras en procesos, reduciendo costos y tiempos de procesamiento."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la planificación de rutas y la optimización de la distribución?",
                "respuestas" => [
                    "Utilizo software avanzado de gestión de rutas para diseñar rutas eficientes que minimicen los tiempos de entrega y los costos de combustible.",
                    "Analizo datos históricos y condiciones actuales del tráfico para ajustar las rutas y mejorar la eficiencia de la distribución.",
                    "Promuevo la flexibilidad en la planificación de rutas para adaptarse rápidamente a cambios inesperados y garantizar la satisfacción del cliente."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para el análisis de costos en la cadena de suministro?",
                "respuestas" => [
                    "Aplico software de ERP para integrar y analizar datos financieros y operacionales, lo que me permite optimizar los costos de la cadena de suministro.",
                    "Utilizo herramientas de business intelligence para realizar análisis de costos detallados y tomar decisiones basadas en datos.",
                    "Empleo metodologías de costeo basado en actividades para obtener una visión precisa del impacto financiero de cada etapa de la cadena."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una situación en la que implementaste cambios en los procesos operativos?",
                "respuestas" => [
                    "En un proyecto reciente, implementé una solución de automatización que redujo los tiempos de procesamiento en un 30% y aumentó la calidad del producto.",
                    "Dirigí una iniciativa para reorganizar el flujo de trabajo en el almacén, lo que resultó en una mejora del 25% en la eficiencia del picking y packing.",
                    "Coordiné la transición de software ERP en mi departamento, logrando una mejora significativa en la recopilación de datos y en la toma de decisiones basada en datos."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de personal en entornos operativos?",
                "respuestas" => [
                    "Promuevo un ambiente de trabajo colaborativo y ofrezco formación continua para asegurar un alto rendimiento del equipo.",
                    "Implemento evaluaciones de desempeño regulares y proporciono retroalimentación constructiva para fomentar el desarrollo profesional.",
                    "Uso sistemas de gestión de recursos humanos para optimizar la asignación de personal y mejorar la eficiencia operativa."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para reducir los tiempos de espera y los cuellos de botella en la producción?",
                "respuestas" => [
                    "Analizaría los procesos actuales para identificar cuellos de botella y aplicaría soluciones de mejora continua para eliminarlos.",
                    "Implementaría sistemas de planificación y programación avanzada para optimizar los flujos de trabajo y reducir los tiempos de espera.",
                    "Fomentaría la implementación de técnicas Lean para mejorar la eficiencia y acelerar la producción."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de inventario justo a tiempo (JIT)?",
                "respuestas" => [
                    "Mi enfoque se centra en la colaboración estrecha con proveedores para asegurar entregas puntuales y minimizar los inventarios.",
                    "Implemento sistemas de información que permiten una visibilidad en tiempo real del inventario para facilitar un manejo eficiente.",
                    "Utilizo pronósticos precisos de la demanda para ajustar la producción y el inventario, evitando el exceso y la falta de stock."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la cadena de suministro en un entorno globalizado?",
                "respuestas" => [
                    "Establecería alianzas estratégicas con proveedores internacionales y optimizaría la logística para manejar la complejidad de los mercados globales.",
                    "Implementaría tecnología de punta para mejorar la comunicación y la visibilidad en toda la cadena de suministro internacional.",
                    "Desarrollaría un enfoque flexible y adaptable para manejar las variaciones en la regulación y las condiciones del mercado en diferentes países."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para mejorar la colaboración entre departamentos en una empresa?",
                "respuestas" => [
                    "Promovería la implementación de herramientas de gestión de proyectos y plataformas de comunicación para facilitar el trabajo interdepartamental.",
                    "Organizaría sesiones regulares de brainstorming y reuniones de seguimiento para fomentar la cooperación y alinear objetivos.",
                    "Desarrollaría indicadores compartidos de rendimiento para que todos los departamentos se orienten hacia metas comunes y comprensión mutua."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los sistemas de información en las operaciones?",
                "respuestas" => [
                    "Realizo evaluaciones basadas en la precisión de los datos proporcionados y la capacidad de estos sistemas para mejorar la toma de decisiones operativas.",
                    "Mido la efectividad observando la reducción de costos operativos y el aumento de la eficiencia después de la implementación de estos sistemas.",
                    "Utilizo encuestas de satisfacción del usuario y métricas de rendimiento para evaluar la usabilidad y el impacto de los sistemas de información en las operaciones diarias."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la implementación de sistemas de gestión de almacenes (WMS)?",
                "respuestas" => [
                    "He liderado múltiples implementaciones de WMS, optimizando los procesos de inventario y mejorando significativamente la precisión del stock.",
                    "Mi experiencia abarca desde la selección hasta la personalización y el despliegue de WMS en varias empresas industriales.",
                    "He capacitado equipos y configurado WMS para integrarse con otros sistemas operativos, mejorando la eficiencia operativa y la recopilación de datos."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de devoluciones y reclamaciones de clientes?",
                "respuestas" => [
                    "Establezco políticas claras de devolución y uso sistemas de CRM para manejar reclamaciones eficientemente, mejorando la satisfacción del cliente.",
                    "Implemento procesos estandarizados para la rápida resolución de devoluciones y reclamaciones, asegurando consistencia y justicia en el trato a los clientes.",
                    "Analizo las causas de las devoluciones y reclamaciones para identificar áreas de mejora en productos o procesos."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la sostenibilidad en las operaciones y la logística?",
                "respuestas" => [
                    "Priorizo la sostenibilidad adoptando prácticas que reduzcan el impacto ambiental y promuevan la eficiencia energética en todas las operaciones.",
                    "Integro consideraciones de sostenibilidad en la planificación estratégica para asegurar operaciones responsables y de bajo impacto.",
                    "Evalúo regularmente el desempeño ambiental de las operaciones para asegurar que cumplan con las metas de sostenibilidad y los estándares regulatorios."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la cadena de suministro en situaciones de crisis?",
                "respuestas" => [
                    "Desarrollaría planes de contingencia robustos, realizaría simulacros frecuentes y mantendría comunicación fluida con todos los eslabones de la cadena.",
                    "Optaría por una gestión flexible y reactiva, capaz de adaptarse rápidamente a las condiciones cambiantes para minimizar interrupciones.",
                    "Incrementaría la colaboración con proveedores y clientes para crear una red de apoyo mutuo que permita superar juntos las situaciones críticas."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de proyectos de mejora de la calidad?",
                "respuestas" => [
                    "He dirigido proyectos de mejora de la calidad enfocados en optimizar procesos y reducir errores, resultando en un aumento sustancial de la satisfacción del cliente.",
                    "Mi experiencia incluye el uso de técnicas estadísticas para analizar y mejorar la calidad del producto en diferentes etapas de producción.",
                    "He colaborado con equipos interdisciplinarios para implementar cambios sistemáticos que mejoran la calidad y eficiencia de los procesos."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la coordinación de equipos en entornos operativos?",
                "respuestas" => [
                    "Utilizo herramientas de gestión de proyectos y comunicación efectiva para mantener a todos los miembros del equipo alineados y centrados en objetivos comunes.",
                    "Fomento un ambiente de trabajo colaborativo donde cada miembro del equipo puede aportar ideas y soluciones para mejorar la operación.",
                    "Implemento sistemas de rotación y capacitación para asegurar que todos los miembros del equipo estén bien informados y capacitados en múltiples roles."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para mejorar la eficiencia energética en las operaciones?",
                "respuestas" => [
                    "Implementaría tecnologías de bajo consumo y revisaría los procesos para optimizar el uso de energía en toda la organización.",
                    "Realizaría auditorías energéticas regulares para identificar áreas de mejora y aplicaría soluciones basadas en las mejores prácticas de la industria.",
                    "Promovería la adopción de fuentes de energía renovable y sistemas de recuperación de energía para reducir la huella de carbono de la empresa."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los sistemas de seguimiento de activos en la logística?",
                "respuestas" => [
                    "Mediante la recopilación y análisis de datos de rendimiento, asegurando que los sistemas de seguimiento proporcionen información precisa y oportuna.",
                    "Comparo los resultados de los sistemas de seguimiento con los objetivos logísticos establecidos y hago ajustes según sea necesario.",
                    "Utilizo feedback de los usuarios finales para evaluar la usabilidad de los sistemas y su integración con otros procesos operativos."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la continuidad del negocio en caso de interrupciones en la cadena de suministro?",
                "respuestas" => [
                    "Desarrollaría y mantendría un plan de continuidad del negocio sólido que incluya alternativas de proveedores y rutas de distribución.",
                    "Establecería acuerdos de nivel de servicio (SLAs) con proveedores clave para asegurar la disponibilidad de recursos críticos.",
                    "Implementaría sistemas de gestión de riesgos para monitorear y responder a posibles interrupciones de manera proactiva."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de la documentación y los registros en las operaciones?",
                "respuestas" => [
                    "Utilizo sistemas de gestión documental para asegurar que todos los registros estén seguros, sean accesibles y se mantengan actualizados.",
                    "Promuevo el cumplimiento de las normativas de documentación a través de auditorías regulares y formación continua del personal.",
                    "Implemento políticas de retención de documentos para gestionar eficazmente la información y garantizar la conformidad con las leyes aplicables."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de proyectos de expansión de instalaciones?",
                "respuestas" => [
                    "Mi enfoque incluye una planificación detallada, la evaluación de impacto ambiental y la colaboración con todas las partes interesadas para asegurar una expansión eficaz y sostenible.",
                    "Coordino con equipos multidisciplinarios para garantizar que la expansión cumpla con los objetivos estratégicos y operativos de la empresa.",
                    "Utilizo herramientas de simulación y modelado para prever posibles problemas y planificar de manera eficiente la utilización del espacio y los recursos."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la optimización de la carga en el transporte?",
                "respuestas" => [
                    "Utilizo software de gestión de transporte para optimizar la carga y maximizar la eficiencia de los vehículos de transporte.",
                    "Empleo técnicas de modelado y algoritmos para planificar y ejecutar la carga de manera que se minimice el costo y se maximice la seguridad.",
                    "Implemento soluciones de IoT para monitorear en tiempo real la carga y ajustar la planificación según las condiciones cambiantes."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la logística inversa y el reciclaje de productos?",
                "respuestas" => [
                    "Desarrollaría procesos eficientes para la recolección y procesamiento de productos devueltos, integrando prácticas sostenibles de reciclaje.",
                    "Implementaría sistemas de información para rastrear y gestionar los retornos de manera que se minimicen los costos y el impacto ambiental.",
                    "Trabajaría en estrecha colaboración con socios de reciclaje para asegurar que los materiales recuperados se reutilicen o reciclen adecuadamente."
                ]
            ]
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 4,
            ]);
            $p = 10;
            foreach ($pregunta['respuestas'] as $respuesta) {

                DB::table('Answer')->insert([
                    'answer' => $respuesta,
                    'QuestionID' => $i,
                    'QuestionPoints' => $p,
                ]);
                $p -= 3;
            }
            $i++;
        }
        //Ventas y desarrollo de negocios
        $respuestas = [
            [
                "pregunta" => "¿Cuál es tu experiencia previa en ventas y desarrollo de negocios?",
                "respuestas" => [
                    "Tengo experiencia significativa en ventas y desarrollo de negocios, habiendo trabajado en estos campos durante más de cinco años en diversas industrias.",
                    "Mi experiencia en ventas se centra principalmente en el sector tecnológico, donde he ayudado a las empresas a alcanzar y superar sus objetivos comerciales.",
                    "Aunque soy relativamente nuevo en ventas y desarrollo de negocios, poseo un fuerte entendimiento teórico y estoy ansioso por aplicar mis conocimientos en la práctica."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la identificación de oportunidades de mercado?",
                "respuestas" => [
                    "Abordaría la identificación de oportunidades de mercado mediante un análisis exhaustivo del mercado, incluyendo investigación de la competencia y tendencias de la industria.",
                    "Utilizaría herramientas de análisis de datos y feedback de clientes para identificar brechas en el mercado y nuevas áreas de crecimiento.",
                    "Implementaría un enfoque colaborativo, trabajando estrechamente con los equipos de marketing y productos para identificar y validar oportunidades potenciales."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias utilizas para generar leads y prospectos?",
                "respuestas" => [
                    "Utilizo una combinación de marketing entrante y saliente, incluyendo contenido optimizado para SEO, campañas de email marketing y eventos de networking.",
                    "Me enfoco en el marketing digital y las redes sociales para generar leads, aprovechando plataformas como LinkedIn para conectarme con prospectos relevantes.",
                    "Desarrollo relaciones a largo plazo con influencers y socios de la industria que puedan proporcionar referencias de calidad."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de relaciones con clientes?",
                "respuestas" => [
                    "Mi enfoque se basa en la comunicación constante y la personalización del servicio para cada cliente, asegurando que sus necesidades sean atendidas de manera efectiva.",
                    "Implemento CRM y otras herramientas tecnológicas para mantener un seguimiento detallado de las interacciones con los clientes y garantizar una gestión de relaciones eficiente.",
                    "Priorizo la escucha activa y la adaptabilidad para responder a las necesidades cambiantes de los clientes y mejorar continuamente la experiencia del cliente."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas las necesidades y los deseos del cliente?",
                "respuestas" => [
                    "Realizo encuestas y entrevistas con clientes para obtener un entendimiento profundo de sus necesidades y expectativas.",
                    "Utilizo análisis de datos y herramientas de feedback para monitorear el comportamiento del cliente y ajustar nuestra oferta de productos y servicios en consecuencia.",
                    "Trabajo de cerca con el equipo de soporte al cliente para identificar patrones comunes en las solicitudes y quejas de los clientes, lo que ayuda a mejorar nuestro enfoque."
                ]
            ],
            [
                "pregunta" => "¿Qué métodos utilizas para cerrar acuerdos y negociar contratos?",
                "respuestas" => [
                    "Me enfoco en entender las necesidades del cliente y presentar soluciones claras que se alineen directamente con esos requerimientos, facilitando el cierre de acuerdos.",
                    "Utilizo técnicas de negociación basadas en la creación de valor mutuo y la confianza, asegurando que ambas partes se sientan satisfechas con el acuerdo.",
                    "Preparo meticulosamente cada negociación, investigando a fondo al cliente y el mercado para tener una base sólida durante las discusiones contractuales."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de pipelines de ventas?",
                "respuestas" => [
                    "Implemento un sistema CRM para monitorear y analizar el pipeline de ventas, asegurando que cada etapa del proceso sea gestionada efectivamente.",
                    "Realizo revisiones periódicas del pipeline con el equipo de ventas para identificar cuellos de botella y optimizar los flujos de trabajo.",
                    "Utilizo datos y análisis predictivos para anticipar cambios en el pipeline y ajustar las estrategias de ventas en consecuencia."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una estrategia de ventas exitosa que hayas implementado?",
                "respuestas" => [
                    "Desarrollé una estrategia de ventas basada en un enfoque consultivo que incrementó las ventas en un 25% en seis meses, alineando las soluciones con las necesidades específicas de los clientes.",
                    "Implementé una campaña de ventas cruzadas que aprovechó las relaciones con clientes existentes para introducir nuevos productos, lo cual resultó en un aumento significativo de la retención de clientes y nuevas ventas.",
                    "Lideré un cambio hacia el marketing digital y las ventas remotas que permitió a la empresa alcanzar nuevos mercados y mejorar la eficiencia de costos durante un período de restricciones de viaje."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la elaboración de propuestas comerciales?",
                "respuestas" => [
                    "He elaborado y presentado propuestas comerciales para una variedad de clientes en diferentes sectores, personalizando cada propuesta para cumplir con los requisitos específicos del cliente.",
                    "Poseo una sólida experiencia en la creación de propuestas detalladas que destacan el valor y los beneficios de nuestros servicios, asegurando una alta tasa de aceptación.",
                    "Mi experiencia en propuestas comerciales se extiende a proyectos internacionales, donde he tenido que adaptar las propuestas para cumplir con normativas y expectativas culturales específicas."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para el seguimiento de ventas y actividades comerciales?",
                "respuestas" => [
                    "Utilizo plataformas CRM avanzadas como Salesforce y HubSpot para el seguimiento de ventas y la gestión de la relación con los clientes.",
                    "Implemento herramientas de automatización de marketing y análisis de datos para monitorizar las actividades comerciales y medir el rendimiento de las ventas.",
                    "Me apoyo en software de gestión de proyectos como Asana o Trello para organizar y seguir las actividades de ventas en el equipo."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de cuentas clave y clientes corporativos?",
                "respuestas" => [
                    "Desarrollo planes de cuenta personalizados que se centren en la entrega de valor continuo y en el fortalecimiento de la relación a largo plazo con cada cliente corporativo.",
                    "Implemento reuniones regulares de revisión y estrategias proactivas de engagement para mantener a los clientes clave informados y comprometidos con nuestros servicios.",
                    "Utilizo un enfoque de equipo integrado, asegurando que cada cuenta clave tenga acceso a soporte y recursos especializados para maximizar su satisfacción y retención."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomas para mantener relaciones comerciales a largo plazo?",
                "respuestas" => [
                    "Priorizo la comunicación constante y la transparencia con los clientes, asegurando que siempre estén al tanto de cómo pueden beneficiarse de nuestros servicios continuamente.",
                    "Ofrezco programas de fidelización y beneficios exclusivos que incentiven la renovación de contratos y el compromiso a largo plazo de los clientes.",
                    "Realizo seguimientos regulares y ofrezco soluciones antes de que surjan problemas, lo que ayuda a mantener altos niveles de satisfacción del cliente."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de las estrategias de upselling y cross-selling?",
                "respuestas" => [
                    "Mido el éxito de estas estrategias a través del aumento de la facturación media por cliente y la expansión de la base de productos o servicios consumidos por cada cliente.",
                    "Utilizo indicadores clave de rendimiento como la tasa de adopción de nuevos productos y la satisfacción del cliente para evaluar la efectividad de nuestras técnicas de upselling y cross-selling.",
                    "Realizo análisis de cohortes y seguimiento de la satisfacción del cliente post-venta para asegurar que las estrategias de upselling y cross-selling estén alineadas con las necesidades reales del cliente."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de objeciones y resistencias de los clientes?",
                "respuestas" => [
                    "Abordo las objeciones de los clientes de manera proactiva, preparándome para responder con información detallada y adaptando mi enfoque según el contexto y las necesidades del cliente.",
                    "Utilizo técnicas de escucha activa para entender completamente las preocupaciones del cliente y trabajar en soluciones que aborden sus resistencias de manera efectiva.",
                    "Capacito a mi equipo para que maneje las objeciones de manera constructiva y transforme las resistencias en oportunidades para demostrar el valor de nuestros productos o servicios."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de quejas y reclamaciones de clientes?",
                "respuestas" => [
                    "Tomo un enfoque centrado en el cliente para resolver quejas, asegurándome de que cada problema se maneje de manera rápida y efectiva para minimizar el impacto negativo y restaurar la confianza del cliente.",
                    "Implemento un protocolo de respuesta rápida para quejas y reclamaciones, utilizando estas situaciones como oportunidades para mejorar nuestros procesos y la calidad del servicio.",
                    "Capacito regularmente a mi equipo en técnicas de servicio al cliente y resolución de conflictos para asegurar que las quejas se gestionen de manera profesional y satisfactoria."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para establecer y alcanzar objetivos de ventas?",
                "respuestas" => [
                    "Establezco objetivos claros y medibles basados en un análisis detallado del mercado y las capacidades internas, y desarrollo planes de acción específicos para cada miembro del equipo.",
                    "Utilizo incentivos y metas competitivas para motivar al equipo de ventas, junto con un seguimiento regular del progreso para asegurar que todos los objetivos se cumplan de manera oportuna.",
                    "Fomento una cultura de rendición de cuentas y mejora continua, estableciendo revisiones periódicas de los objetivos y ajustando las estrategias según sea necesario para optimizar los resultados."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la rentabilidad de una oportunidad de venta?",
                "respuestas" => [
                    "Analizo factores como el tamaño potencial del mercado, el coste de adquisición del cliente, y la rentabilidad a largo plazo del cliente para evaluar la rentabilidad de las oportunidades de venta.",
                    "Utilizo herramientas de análisis financiero y modelado de escenarios para predecir el retorno de la inversión y asegurar que las oportunidades de venta sean económicamente viables.",
                    "Incorporo feedback del equipo de operaciones y finanzas para obtener una perspectiva holística sobre los costos y beneficios potenciales de las oportunidades de venta."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de equipos de ventas?",
                "respuestas" => [
                    "He liderado equipos de ventas en múltiples contextos, incluyendo startups y grandes corporaciones, donde he desarrollado y ejecutado estrategias de ventas exitosas.",
                    "Mi experiencia abarca la construcción y mentoría de equipos de ventas, enfocándome en la mejora de habilidades y la maximización de la eficiencia del equipo.",
                    "He gestionado equipos de ventas diversificados geográficamente, coordinando esfuerzos y estrategias a través de diferentes regiones y culturas."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la formación y el desarrollo de habilidades del equipo de ventas?",
                "respuestas" => [
                    "Implementaría programas de capacitación regulares centrados en técnicas de venta, negociación y gestión de clientes, adaptados a las necesidades específicas del equipo y las demandas del mercado.",
                    "Fomentaría el desarrollo continuo a través de mentorías y coaching, proporcionando retroalimentación regular y oportunidades de aprendizaje basadas en el desempeño real.",
                    "Integraría tecnologías de aprendizaje y plataformas en línea para ofrecer formación flexible y accesible que permita a los miembros del equipo mejorar sus habilidades constantemente."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para mejorar la productividad del equipo de ventas?",
                "respuestas" => [
                    "Implementaría formaciones regulares y establecería objetivos claros y alcanzables para motivar y dirigir al equipo.",
                    "Utilizaría herramientas tecnológicas para automatizar tareas repetitivas y permitir que el equipo se concentre en actividades de mayor valor.",
                    "Fomentaría un ambiente de trabajo colaborativo y abierto a la comunicación para identificar obstáculos y soluciones rápidamente."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la coordinación de esfuerzos de ventas en equipos multidisciplinarios?",
                "respuestas" => [
                    "Promuevo la comunicación constante a través de reuniones regulares y plataformas colaborativas para asegurar la alineación de objetivos.",
                    "Integro sistemas de gestión de proyectos para visualizar el progreso de cada área y facilitar la colaboración efectiva entre los equipos.",
                    "Establezco roles claros y responsabilidades compartidas para garantizar que todos los miembros del equipo contribuyan de manera eficaz hacia los objetivos comunes."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la colaboración entre ventas y marketing?",
                "respuestas" => [
                    "Considero esencial la colaboración estrecha entre ventas y marketing para alinear mensajes y estrategias que maximicen el impacto en el mercado.",
                    "Fomento la integración de estos equipos a través de sesiones de trabajo conjunto y objetivos compartidos para mejorar la generación de leads y conversiones.",
                    "Priorizo la comunicación bidireccional entre estos equipos para asegurar que las campañas de marketing se basen en insights reales de los clientes y las ventas."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los canales de distribución y venta?",
                "respuestas" => [
                    "Realizo análisis de rendimiento basados en datos de ventas y feedback de clientes para evaluar y optimizar los canales de distribución.",
                    "Uso métricas como el volumen de ventas, la satisfacción del cliente y el costo de adquisición para determinar la eficacia de cada canal.",
                    "Implemento pruebas A/B en diferentes canales para comparar su rendimiento y ajustar las estrategias según los resultados obtenidos."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de territorios de ventas?",
                "respuestas" => [
                    "Divido los territorios basándome en criterios como el volumen potencial de ventas, la competencia y la accesibilidad geográfica para maximizar la cobertura y la eficiencia.",
                    "Implemento herramientas de geolocalización y análisis de datos para optimizar las rutas y las visitas, asegurando una gestión eficaz del territorio.",
                    "Realizo evaluaciones periódicas del desempeño por territorio y ajusto las estrategias según sea necesario para mejorar los resultados."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la competencia en el mercado?",
                "respuestas" => [
                    "Realizo análisis competitivos regulares para entender las fortalezas y debilidades de los competidores y ajustar nuestras estrategias en consecuencia.",
                    "Fomento la diferenciación de nuestros productos y servicios a través de la innovación y la calidad superior para ganar ventaja competitiva.",
                    "Mantengo un enfoque proactivo en el aprendizaje de las tácticas de la competencia y en la anticipación de sus movimientos para ajustar rápidamente nuestras tácticas."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la planificación y seguimiento de actividades de ventas?",
                "respuestas" => [
                    "Utilizo CRM para planificar y monitorear todas las actividades de ventas, asegurando un seguimiento detallado de cada oportunidad y cliente.",
                    "Implemento herramientas de gestión de proyectos como Asana o Trello para mantener a todos en el equipo actualizados y en sincronía con las tareas y plazos.",
                    "Empleo software de análisis de datos para realizar seguimientos en tiempo real y ajustar las estrategias de ventas basándome en tendencias emergentes."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una situación en la que superaste tus objetivos de ventas?",
                "respuestas" => [
                    "En mi posición anterior, superé los objetivos de ventas trimestrales en un 20% a través de la implementación de una estrategia de venta cruzada dirigida a nuestros clientes actuales.",
                    "Logré un incremento del 30% en ventas anuales al identificar y penetrar un nuevo segmento de mercado, lo cual no solo aumentó las ventas sino también nuestra cuota de mercado.",
                    "Superé mis objetivos anuales en un 25% gracias a la optimización de la estrategia de precios y paquetización de servicios, lo que incrementó tanto el volumen como el tamaño promedio de las ventas."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de precios y tarifas en ventas?",
                "respuestas" => [
                    "Analizo el mercado y la competencia para establecer una estructura de precios competitiva y rentable, ajustando según las condiciones del mercado y las respuestas de los clientes.",
                    "Trabajo en colaboración con el departamento financiero para asegurar que nuestros precios reflejen tanto el valor del producto como los objetivos de rentabilidad de la empresa.",
                    "Utilizo estrategias de precios dinámicos para maximizar los ingresos, ofreciendo descuentos y promociones basadas en el comportamiento del cliente y la demanda del mercado."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para identificar nuevas oportunidades de negocio?",
                "respuestas" => [
                    "Implementaría un enfoque proactivo mediante la investigación de mercado, análisis de tendencias y la participación activa en eventos de la industria.",
                    "Utilizaría análisis de datos avanzados para identificar patrones y oportunidades de crecimiento no explotadas en sectores existentes y nuevos mercados.",
                    "Fomentaría la innovación interna mediante brainstormings y workshops para explorar nuevas ideas y aplicaciones para nuestros productos o servicios."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de las estrategias de penetración de mercado?",
                "respuestas" => [
                    "Mediría la efectividad mediante KPIs específicos como el aumento en el volumen de ventas, la cuota de mercado y la captación de nuevos clientes.",
                    "Realizaría encuestas de satisfacción y grupos focales con los clientes para entender su percepción y la aceptación del mercado hacia nuestros productos.",
                    "Analizaría el retorno de inversión (ROI) de las campañas de penetración de mercado para asegurarme de que los recursos estén siendo utilizados eficazmente."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la participación en ferias comerciales y eventos de networking?",
                "respuestas" => [
                    "He participado activamente en numerosas ferias comerciales y eventos de networking, lo cual me ha permitido expandir significativamente mi red de contactos profesionales y generar leads valiosos.",
                    "Mi experiencia incluye la planificación y ejecución de exposiciones en ferias, así como el seguimiento post-evento para maximizar el retorno de la inversión.",
                    "Aunque tengo experiencia limitada en ferias comerciales, poseo fuertes habilidades de comunicación y relaciones públicas que me permiten representar eficazmente a la empresa en estos eventos."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la relación con distribuidores y socios comerciales?",
                "respuestas" => [
                    "Establecería relaciones basadas en la confianza y la transparencia, asegurando acuerdos mutuamente beneficiosos y manteniendo comunicación regular para abordar cualquier desafío o oportunidad.",
                    "Implementaría programas de incentivos y formación para distribuidores y socios, para asegurar que estén bien informados y motivados para vender nuestros productos.",
                    "Utilizaría un enfoque sistemático para evaluar y seleccionar distribuidores y socios que alineen con nuestra visión y valores corporativos."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la calidad y satisfacción del cliente en ventas?",
                "respuestas" => [
                    "Implementaría rigurosos controles de calidad en cada etapa del proceso de ventas, desde la producción hasta la entrega final al cliente.",
                    "Realizaría encuestas regulares de satisfacción del cliente y estudios de mercado para recibir feedback directo y hacer mejoras continuas.",
                    "Capacitaría continuamente al equipo de ventas sobre la importancia de la atención al cliente y las técnicas para asegurar una experiencia positiva para el cliente."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de tiempo y prioridades en ventas?",
                "respuestas" => [
                    "Utilizo herramientas de gestión de tiempo como calendarios y aplicaciones de planificación para asegurar que se respeten los plazos y prioridades.",
                    "Priorizo tareas basándome en su impacto en los objetivos de ventas y la satisfacción del cliente, asegurando una distribución eficiente del tiempo y recursos.",
                    "Fomento una cultura de eficiencia y responsabilidad dentro del equipo, estableciendo expectativas claras y seguimiento regular del progreso."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la innovación y la creatividad en el desarrollo de estrategias de ventas?",
                "respuestas" => [
                    "Considero la innovación y la creatividad como elementos clave para diferenciarnos de la competencia y para adaptarnos a los cambios del mercado.",
                    "Fomento un ambiente donde las ideas creativas son bienvenidas y experimentadas, lo cual permite descubrir nuevas formas de capturar y satisfacer a los clientes.",
                    "Incorporo regularmente nuevas tecnologías y enfoques creativos en las campañas de ventas para mantener nuestra oferta fresca y atractiva."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de las campañas de marketing en apoyo a las ventas?",
                "respuestas" => [
                    "Analizo meticulosamente las métricas de desempeño como el tráfico web, la conversión de leads y el ROI para medir la efectividad de las campañas de marketing.",
                    "Colaboro estrechamente con el departamento de marketing para asegurar que las campañas estén alineadas con los objetivos de ventas y ajustar las tácticas según sea necesario.",
                    "Utilizo herramientas analíticas avanzadas para rastrear y evaluar el impacto de las campañas en las ventas y en la percepción de la marca."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de datos y análisis en ventas?",
                "respuestas" => [
                    "Adopto un enfoque basado en datos para todas las decisiones de ventas, utilizando sistemas de CRM y herramientas analíticas para recopilar y analizar información relevante.",
                    "Capacito al equipo de ventas en el uso eficaz de herramientas de análisis de datos para mejorar su comprensión del mercado y de los comportamientos de los clientes.",
                    "Me enfoco en la integración y automatización de la recopilación de datos para garantizar que la información sea precisa y esté disponible en tiempo real."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la comunicación interna y externa en el equipo de ventas?",
                "respuestas" => [
                    "Establecería canales claros y efectivos de comunicación interna utilizando herramientas digitales para mantener al equipo informado y cohesionado.",
                    "Promovería la transparencia y el intercambio abierto de información entre los miembros del equipo y otros departamentos para optimizar la cooperación.",
                    "Desarrollaría protocolos de comunicación con los clientes que reflejen profesionalismo y coherencia, asegurando que todas las interacciones mejoren nuestra relación con ellos."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para adaptarte a cambios en el mercado y la industria?",
                "respuestas" => [
                    "Mantendría una vigilancia constante sobre las tendencias de la industria y el mercado, adaptando rápidamente nuestras estrategias y tácticas para mantener la competitividad.",
                    "Invertiría en formación continua para el equipo de ventas, asegurando que estén bien equipados para enfrentar los cambios y desafíos del mercado.",
                    "Fomentaría una cultura de agilidad y flexibilidad dentro del equipo, permitiendo una rápida adaptación a nuevas oportunidades y desafíos a medida que surgen."
                ]
            ]
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 5,
            ]);
            $p = 10;
            foreach ($pregunta['respuestas'] as $respuesta) {

                DB::table('Answer')->insert([
                    'answer' => $respuesta,
                    'QuestionID' => $i,
                    'QuestionPoints' => $p,
                ]);
                $p -= 3;
            }
            $i++;
        }
        //Servicio al cliente
        $respuestas = [
            [
                "pregunta" => "¿Cuál es tu experiencia previa en atención al cliente?",
                "respuestas" => [
                    "He trabajado directamente con clientes en varios roles de servicio al cliente, proporcionando asistencia y resolviendo consultas.",
                    "Mi experiencia en atención al cliente se extiende por varios años en diferentes industrias, enfocándome en la satisfacción del cliente.",
                    "Aunque mi experiencia previa no se centra exclusivamente en atención al cliente, tengo habilidades interpersonales fuertes y un rápido aprendizaje en entornos orientados al servicio."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la resolución de problemas de los clientes?",
                "respuestas" => [
                    "Primero escucho activamente para entender completamente el problema, luego exploro soluciones viables y comunico claramente los pasos a seguir.",
                    "Utilizo un enfoque sistemático para identificar la raíz del problema, garantizando una resolución efectiva y eficiente que mejore la satisfacción del cliente.",
                    "Me enfoco en ser proactivo y preventivo, no solo en resolver el problema actual, sino en identificar y mitigar posibles inconvenientes futuros."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomas para garantizar la satisfacción del cliente?",
                "respuestas" => [
                    "Regularmente solicito feedback para mejorar los servicios, garantizo una comunicación clara y establezco expectativas realistas desde el inicio.",
                    "Implemento un seguimiento post-servicio para asegurarme de que los clientes estén satisfechos con la solución proporcionada y mejorar continuamente la experiencia del cliente.",
                    "Entreno a mi equipo para que maneje cada interacción con cortesía y eficiencia, asegurando que cada cliente se sienta valorado y comprendido."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de quejas y reclamaciones de los clientes?",
                "respuestas" => [
                    "Abordo las quejas con una actitud de resolución, asegurándome de entender el problema y ofrecer soluciones justas y rápidas.",
                    "Trato cada queja como una oportunidad de mejorar nuestros servicios y fortalecer la relación con el cliente, garantizando una respuesta empática y efectiva.",
                    "Establezco procesos claros para manejar reclamaciones, lo que incluye escalaciones apropiadas y revisión de políticas si es necesario."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas situaciones de clientes difíciles o molestos?",
                "respuestas" => [
                    "Mantengo la calma y uso habilidades de comunicación efectivas para desescalar situaciones, mostrando empatía y ofreciendo soluciones prácticas.",
                    "Analizo qué está causando el malestar del cliente y trato de abordarlo de manera que reconozca sus preocupaciones mientras protejo la integridad del equipo.",
                    "Utilizo técnicas de negociación y resolución de conflictos para manejar situaciones difíciles, siempre buscando un resultado positivo para ambas partes."
                ]
            ],
            [
                "pregunta" => "¿Qué métodos utilizas para comunicarte de manera efectiva con los clientes?",
                "respuestas" => [
                    "Utilizo una combinación de comunicación verbal y escrita, adaptándome al estilo preferido del cliente, ya sea directo, por teléfono o a través de medios digitales.",
                    "Me aseguro de que mi comunicación sea clara y concisa, evitando jerga técnica y asegurando que el cliente entienda completamente la información proporcionada.",
                    "Fomento una comunicación bidireccional, abriendo canales para que los clientes expresen sus necesidades y opiniones."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la calidad del servicio al cliente?",
                "respuestas" => [
                    "Implemento encuestas de satisfacción y monitoreo de indicadores clave de rendimiento (KPIs) para medir la eficacia de las interacciones con los clientes.",
                    "Realizo auditorías regulares de las interacciones del servicio al cliente y sesiones de retroalimentación con el equipo para identificar áreas de mejora.",
                    "Utilizo herramientas de análisis de datos para evaluar patrones en las consultas y quejas de los clientes, lo que me permite ajustar estrategias y mejorar la calidad del servicio."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para el seguimiento de solicitudes y consultas de los clientes?",
                "respuestas" => [
                    "Utilizo sistemas de tickets CRM para el seguimiento eficaz de las consultas, asegurando que ninguna solicitud quede sin respuesta.",
                    "Implemento plataformas de gestión de relaciones con clientes que permiten registrar y monitorear todas las interacciones con los clientes en un solo lugar.",
                    "Me apoyo en herramientas de gestión de proyectos para organizar y priorizar las solicitudes de los clientes, asegurando una respuesta oportuna y organizada."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una situación en la que proporcionaste un servicio excepcional al cliente?",
                "respuestas" => [
                    "En una ocasión, un cliente estaba extremadamente insatisfecho con un error en su pedido. Resolví el problema rápidamente, ofrecí una compensación adecuada y seguimiento personal para garantizar su satisfacción.",
                    "Recibí una llamada de un cliente que necesitaba asistencia urgente después de horas; me quedé más allá de mi turno para asegurar que su problema se resolviera satisfactoriamente.",
                    "Un cliente no estaba seguro de cómo utilizar nuestro producto de manera efectiva, así que personalicé una sesión de formación para él, lo que resultó en una revisión positiva y un cliente sumamente agradecido."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de equipos de atención al cliente?",
                "respuestas" => [
                    "He liderado equipos de atención al cliente en varias empresas, enfocándome en la capacitación, la motivación y el logro de altos estándares de servicio.",
                    "Mi experiencia abarca la supervisión de equipos pequeños a medianos, implementando estrategias para mejorar la eficiencia y la satisfacción del cliente.",
                    "Como gerente de atención al cliente, he desarrollado programas de entrenamiento que han mejorado significativamente las habilidades de servicio al cliente de los equipos que he dirigido."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la formación y el desarrollo de habilidades del equipo de atención al cliente?",
                "respuestas" => [
                    "Implementaría programas de formación continua que aborden tanto las habilidades técnicas como las interpersonales, con un enfoque en el servicio excepcional.",
                    "Organizaría sesiones regulares de capacitación con simulaciones y role-playing para mejorar la resolución de problemas y las habilidades de comunicación del equipo.",
                    "Me enfocaría en el desarrollo profesional personalizado, identificando las necesidades individuales de los miembros del equipo y proporcionando recursos para su crecimiento."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para mejorar la eficiencia y productividad del equipo de atención al cliente?",
                "respuestas" => [
                    "Analizaría los procesos actuales para identificar cuellos de botella y implementaría soluciones automatizadas para mejorar el flujo de trabajo.",
                    "Promovería una cultura de rendimiento basada en métricas claras y objetivos alcanzables, incentivando la productividad con reconocimientos y recompensas.",
                    "Implementaría herramientas tecnológicas que faciliten la gestión de tareas y la comunicación interna, mejorando así la eficiencia del equipo."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los canales de comunicación con los clientes (teléfono, correo electrónico, chat, etc.)?",
                "respuestas" => [
                    "Utilizo métricas específicas como tiempo de respuesta, satisfacción del cliente y resolución en el primer contacto para evaluar cada canal.",
                    "Realizo encuestas regulares de satisfacción del cliente para obtener feedback directo sobre la eficacia de los diferentes canales de comunicación.",
                    "Monitoreo y analizo datos de uso y preferencias de los clientes para adaptar y mejorar continuamente los canales de comunicación según las necesidades del cliente."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de tiempos de espera y tiempos de respuesta?",
                "respuestas" => [
                    "Establezco objetivos claros de tiempos de respuesta basados en las expectativas del cliente y la industria, asegurando recursos adecuados para cumplirlos.",
                    "Implemento sistemas automatizados y formo a los empleados para optimizar la gestión del tiempo, reduciendo así los tiempos de espera.",
                    "Uso software de gestión de colas y proporciono feedback constante al equipo para mejorar los tiempos de respuesta y la eficiencia operativa."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de crisis y situaciones de emergencia en el servicio al cliente?",
                "respuestas" => [
                    "Desarrollo y sigo un plan de gestión de crisis que incluye procedimientos claros, comunicación rápida y decisiones basadas en la seguridad y satisfacción del cliente.",
                    "Capacito al equipo para manejar situaciones de alta presión y aseguro que sepan escalar incidentes adecuadamente a la administración cuando sea necesario.",
                    "Mantengo una comunicación abierta y transparente con los clientes durante la crisis, ofreciendo soluciones proactivas y compensaciones cuando corresponde."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la confidencialidad y seguridad de la información del cliente?",
                "respuestas" => [
                    "Implementaría políticas estrictas de protección de datos, formación regular sobre seguridad para el equipo y sistemas tecnológicos avanzados para proteger la información del cliente.",
                    "Realizaría auditorías de seguridad regularmente y me aseguraría de que todos los procesos cumplan con las leyes de protección de datos aplicables.",
                    "Fomentaría una cultura de seguridad entre el equipo, asegurando que la confidencialidad del cliente sea una prioridad en todas las operaciones del servicio al cliente."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de clientes insatisfechos y la retención de clientes?",
                "respuestas" => [
                    "Me centraría en entender las causas de la insatisfacción para poder ofrecer soluciones personalizadas y efectivas, buscando siempre la manera de retener al cliente.",
                    "Establecería un protocolo para el manejo de clientes insatisfechos que incluya seguimiento directo y ofertas especiales para recuperar su confianza.",
                    "Utilizaría el feedback de clientes insatisfechos para mejorar productos y servicios, asegurando que el equipo entienda la importancia de cada cliente."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la empatía en la atención al cliente?",
                "respuestas" => [
                    "Considero la empatía fundamental para crear una experiencia de cliente positiva y duradera, ayudando a construir relaciones fuertes y de confianza.",
                    "Capacito a mi equipo para que utilicen técnicas empáticas en sus interacciones, asegurando que los clientes se sientan escuchados y valorados.",
                    "La empatía es el núcleo de mi enfoque de servicio al cliente, ya que permite entender y responder adecuadamente a las emociones y necesidades de los clientes."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de expectativas de los clientes?",
                "respuestas" => [
                    "Establezco comunicación clara desde el principio, definiendo lo que los clientes pueden esperar y asegurándome de cumplir o superar esas expectativas.",
                    "Utilizo herramientas como acuerdos de nivel de servicio (SLAs) para documentar y gestionar expectativas, manteniendo siempre un enfoque orientado al cliente.",
                    "Regularmente reviso y ajusto las expectativas a través del feedback del cliente para asegurar que seguimos siendo relevantes y competitivos en nuestro servicio."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para anticipar las necesidades de los clientes?",
                "respuestas" => [
                    "Analizo tendencias y patrones de comportamiento del cliente para ofrecer soluciones proactivas antes de que se presenten los problemas.",
                    "Mantengo comunicación constante con los clientes para obtener insights que me permitan mejorar y adaptar nuestros servicios a sus necesidades futuras.",
                    "Implemento herramientas de inteligencia artificial y análisis de datos para prever necesidades y tendencias del cliente, ajustando nuestros servicios de manera anticipada."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la satisfacción del cliente y recopilación de feedback?",
                "respuestas" => [
                    "Realizo encuestas de satisfacción regularmente y analizo el feedback para medir la percepción del cliente sobre la calidad de nuestro servicio.",
                    "Uso métricas como el Net Promoter Score (NPS) para evaluar la lealtad del cliente y su disposición a recomendar nuestros servicios.",
                    "Implemento sistemas de feedback en tiempo real para obtener comentarios inmediatos y poder actuar rápidamente en áreas de mejora."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de solicitudes de reembolso y devoluciones?",
                "respuestas" => [
                    "He gestionado procesos de reembolso y devoluciones en múltiples entornos de venta al por menor, asegurando que se manejen de manera eficiente y conforme a la política de la empresa.",
                    "Mi experiencia incluye la simplificación de los procedimientos de devoluciones para mejorar la satisfacción del cliente y minimizar el impacto financiero.",
                    "He desarrollado y aplicado políticas que equilibran la flexibilidad hacia el cliente con la sostenibilidad del negocio en situaciones de reembolso y devoluciones."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de cambios en políticas o procedimientos que afectan al servicio al cliente?",
                "respuestas" => [
                    "Comunico los cambios de manera clara y oportuna a los clientes, asegurando que comprendan cómo estos cambios impactarán los servicios que reciben.",
                    "Involucro al equipo de atención al cliente en el proceso de cambio para asegurar una transición suave y que todos estén bien informados.",
                    "Realizo sesiones de entrenamiento y actualización para el equipo, asegurando que todos los miembros estén al día con las nuevas políticas y puedan comunicarlas efectivamente a los clientes."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la gestión de la base de conocimientos y recursos de atención al cliente?",
                "respuestas" => [
                    "Implemento plataformas de gestión de conocimientos que permiten al equipo acceder y compartir información actualizada y relevante de manera eficiente.",
                    "Utilizo sistemas de gestión de contenido que facilitan la actualización regular de la base de conocimientos, asegurando que la información sea accesible y precisa.",
                    "Me apoyo en herramientas colaborativas para que el equipo de servicio al cliente contribuya y refine continuamente nuestra base de conocimientos."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de expectativas de los clientes?",
                "respuestas" => [
                    "Establezco comunicación clara desde el principio, definiendo lo que los clientes pueden esperar y asegurándome de cumplir o superar esas expectativas.",
                    "Utilizo herramientas como acuerdos de nivel de servicio (SLAs) para documentar y gestionar expectativas, manteniendo siempre un enfoque orientado al cliente.",
                    "Regularmente reviso y ajusto las expectativas a través del feedback del cliente para asegurar que seguimos siendo relevantes y competitivos en nuestro servicio."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para anticipar las necesidades de los clientes?",
                "respuestas" => [
                    "Analizo tendencias y patrones de comportamiento del cliente para ofrecer soluciones proactivas antes de que se presenten los problemas.",
                    "Mantengo comunicación constante con los clientes para obtener insights que me permitan mejorar y adaptar nuestros servicios a sus necesidades futuras.",
                    "Implemento herramientas de inteligencia artificial y análisis de datos para prever necesidades y tendencias del cliente, ajustando nuestros servicios de manera anticipada."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la satisfacción del cliente y recopilación de feedback?",
                "respuestas" => [
                    "Realizo encuestas de satisfacción regularmente y analizo el feedback para medir la percepción del cliente sobre la calidad de nuestro servicio.",
                    "Uso métricas como el Net Promoter Score (NPS) para evaluar la lealtad del cliente y su disposición a recomendar nuestros servicios.",
                    "Implemento sistemas de feedback en tiempo real para obtener comentarios inmediatos y poder actuar rápidamente en áreas de mejora."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de solicitudes de reembolso y devoluciones?",
                "respuestas" => [
                    "He gestionado procesos de reembolso y devoluciones en múltiples entornos de venta al por menor, asegurando que se manejen de manera eficiente y conforme a la política de la empresa.",
                    "Mi experiencia incluye la simplificación de los procedimientos de devoluciones para mejorar la satisfacción del cliente y minimizar el impacto financiero.",
                    "He desarrollado y aplicado políticas que equilibran la flexibilidad hacia el cliente con la sostenibilidad del negocio en situaciones de reembolso y devoluciones."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de cambios en políticas o procedimientos que afectan al servicio al cliente?",
                "respuestas" => [
                    "Comunico los cambios de manera clara y oportuna a los clientes, asegurando que comprendan cómo estos cambios impactarán los servicios que reciben.",
                    "Involucro al equipo de atención al cliente en el proceso de cambio para asegurar una transición suave y que todos estén bien informados.",
                    "Realizo sesiones de entrenamiento y actualización para el equipo, asegurando que todos los miembros estén al día con las nuevas políticas y puedan comunicarlas efectivamente a los clientes."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la gestión de la base de conocimientos y recursos de atención al cliente?",
                "respuestas" => [
                    "Implemento plataformas de gestión de conocimientos que permiten al equipo acceder y compartir información actualizada y relevante de manera eficiente.",
                    "Utilizo sistemas de gestión de contenido que facilitan la actualización regular de la base de conocimientos, asegurando que la información sea accesible y precisa.",
                    "Me apoyo en herramientas colaborativas para que el equipo de servicio al cliente contribuya y refine continuamente nuestra base de conocimientos."
                ]
            ],
            // Continuar con el resto de las preguntas y respuestas...
        ];

        $respuestas = [
            // Continuación y finalización de las preguntas y respuestas...
            [
                "pregunta" => "¿Puedes describir una situación en la que implementaste una mejora en el servicio al cliente?",
                "respuestas" => [
                    "Identifiqué un cuello de botella en el proceso de atención al cliente que retrasaba las respuestas. Implementé un nuevo sistema de gestión de tickets que redujo los tiempos de respuesta a la mitad.",
                    "Observé que muchos clientes preguntaban lo mismo sobre un procedimiento confuso, así que rediseñé la información en nuestra web para hacerla más clara y accesible, lo que resultó en menos consultas y mayor satisfacción del cliente.",
                    "Implementé un programa de capacitación para el equipo de atención al cliente centrado en técnicas de comunicación y resolución de conflictos, lo cual mejoró significativamente las interacciones con los clientes y redujo las quejas."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de clientes en diferentes canales (en persona, teléfono, correo electrónico, redes sociales, etc.)?",
                "respuestas" => [
                    "Desarrollaría un enfoque omnicanal que asegure una experiencia consistente y eficiente para el cliente, sin importar el canal de comunicación.",
                    "Capacitaría a mi equipo para manejar interacciones en todos los canales de manera eficaz, utilizando herramientas que permitan una visión unificada del cliente.",
                    "Evaluando constantemente la efectividad de cada canal y haciendo ajustes según sea necesario para mejorar la accesibilidad y la respuesta al cliente."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la accesibilidad y disponibilidad del servicio al cliente?",
                "respuestas" => [
                    "Implementaría un horario extendido de atención al cliente y exploraría opciones para soporte 24/7 a través de chatbots y personal en diferentes zonas horarias.",
                    "Aseguraría que nuestra infraestructura tecnológica sea robusta, permitiendo acceso continuo a nuestros servicios en línea y soporte sin interrupciones.",
                    "Desarrollaría políticas claras para la gestión de picos de demanda, asegurando que los recursos sean suficientes para mantener un servicio accesible y eficiente en todo momento."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los programas de fidelización y recompensas para clientes?",
                "respuestas" => [
                    "Mediría la tasa de retención de clientes y el incremento en la frecuencia de compra o uso del servicio para evaluar el impacto de nuestros programas de fidelización.",
                    "Realizaría encuestas y grupos focales para obtener feedback directo de los clientes sobre la percepción y valoración de las recompensas ofrecidas.",
                    "Analizaría los datos de participación en el programa y los compararía con los objetivos de negocio para asegurar que los programas son rentables y efectivos."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de la calidad del servicio al cliente?",
                "respuestas" => [
                    "Implemento estándares de calidad rigurosos y realizo auditorías regulares para asegurar que el servicio al cliente cumpla con estos estándares.",
                    "Fomento una cultura de mejora continua, donde cada interacción con el cliente es una oportunidad para aprender y mejorar.",
                    "Utilizo herramientas de feedback del cliente y análisis de desempeño para identificar áreas de mejora y aplicar correcciones de forma proactiva."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la coordinación de esfuerzos entre diferentes departamentos para resolver problemas de los clientes?",
                "respuestas" => [
                    "Establezco canales de comunicación claros y efectivos entre departamentos para facilitar la colaboración y la resolución rápida de problemas.",
                    "Organizo reuniones regulares de coordinación y actualización de casos para asegurar que todos los departamentos estén alineados y comprometidos con la satisfacción del cliente.",
                    "Implemento un sistema de gestión de casos que permite seguir el progreso de las consultas de clientes a través de diferentes departamentos, asegurando responsabilidad y transparencia en el proceso."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una situación en la que implementaste una mejora en el servicio al cliente?",
                "respuestas" => [
                    "Identifiqué un cuello de botella en el proceso de atención al cliente que retrasaba las respuestas. Implementé un nuevo sistema de gestión de tickets que redujo los tiempos de respuesta a la mitad.",
                    "Observé que muchos clientes preguntaban lo mismo sobre un procedimiento confuso, así que rediseñé la información en nuestra web para hacerla más clara y accesible, lo que resultó en menos consultas y mayor satisfacción del cliente.",
                    "Implementé un programa de capacitación para el equipo de atención al cliente centrado en técnicas de comunicación y resolución de conflictos, lo cual mejoró significativamente las interacciones con los clientes y redujo las quejas."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de clientes en diferentes canales (en persona, teléfono, correo electrónico, redes sociales, etc.)?",
                "respuestas" => [
                    "Desarrollaría un enfoque omnicanal que asegure una experiencia consistente y eficiente para el cliente, sin importar el canal de comunicación.",
                    "Capacitaría a mi equipo para manejar interacciones en todos los canales de manera eficaz, utilizando herramientas que permitan una visión unificada del cliente.",
                    "Evaluando constantemente la efectividad de cada canal y haciendo ajustes según sea necesario para mejorar la accesibilidad y la respuesta al cliente."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la accesibilidad y disponibilidad del servicio al cliente?",
                "respuestas" => [
                    "Implementaría un horario extendido de atención al cliente y exploraría opciones para soporte 24/7 a través de chatbots y personal en diferentes zonas horarias.",
                    "Aseguraría que nuestra infraestructura tecnológica sea robusta, permitiendo acceso continuo a nuestros servicios en línea y soporte sin interrupciones.",
                    "Desarrollaría políticas claras para la gestión de picos de demanda, asegurando que los recursos sean suficientes para mantener un servicio accesible y eficiente en todo momento."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los programas de fidelización y recompensas para clientes?",
                "respuestas" => [
                    "Mediría la tasa de retención de clientes y el incremento en la frecuencia de compra o uso del servicio para evaluar el impacto de nuestros programas de fidelización.",
                    "Realizaría encuestas y grupos focales para obtener feedback directo de los clientes sobre la percepción y valoración de las recompensas ofrecidas.",
                    "Analizaría los datos de participación en el programa y los compararía con los objetivos de negocio para asegurar que los programas son rentables y efectivos."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de la calidad del servicio al cliente?",
                "respuestas" => [
                    "Implemento estándares de calidad rigurosos y realizo auditorías regulares para asegurar que el servicio al cliente cumpla con estos estándares.",
                    "Fomento una cultura de mejora continua, donde cada interacción con el cliente es una oportunidad para aprender y mejorar.",
                    "Utilizo herramientas de feedback del cliente y análisis de desempeño para identificar áreas de mejora y aplicar correcciones de forma proactiva."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la coordinación de esfuerzos entre diferentes departamentos para resolver problemas de los clientes?",
                "respuestas" => [
                    "Establezco canales de comunicación claros y efectivos entre departamentos para facilitar la colaboración y la resolución rápida de problemas.",
                    "Organizo reuniones regulares de coordinación y actualización de casos para asegurar que todos los departamentos estén alineados y comprometidos con la satisfacción del cliente.",
                    "Implemento un sistema de gestión de casos que permite seguir el progreso de las consultas de clientes a través de diferentes departamentos, asegurando responsabilidad y transparencia en el proceso."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la resolución de problemas en el primer contacto con el cliente?",
                "respuestas" => [
                    "Priorizo la resolución al primer contacto para aumentar la satisfacción del cliente y reducir la carga de trabajo repetitivo en el equipo de soporte.",
                    "Considero crítico resolver problemas en el primer contacto como una medida de eficiencia y efectividad, mejorando la experiencia general del cliente.",
                    "La resolución en el primer contacto es un indicador clave de la calidad del servicio al cliente, y fomento prácticas que maximicen estas oportunidades."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de quejas y reclamaciones en redes sociales y plataformas de revisión en línea?",
                "respuestas" => [
                    "Respondería rápidamente a las quejas en redes sociales y plataformas en línea, ofreciendo soluciones transparentes y públicas para demostrar nuestro compromiso con la satisfacción del cliente.",
                    "Implementaría un enfoque proactivo para monitorear y gestionar la reputación online, asegurando que las respuestas a las quejas sean adecuadas y reflejen los valores de nuestra empresa.",
                    "Capacitaría a un equipo especializado para manejar interacciones en redes sociales, enfocándose en la resolución eficiente y la minimización del impacto negativo en la percepción pública."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para mejorar la eficiencia del servicio al cliente sin comprometer la calidad?",
                "respuestas" => [
                    "Optimizaría procesos y utilizaría tecnología avanzada para automatizar tareas repetitivas, permitiendo que el equipo se enfoque en casos más complejos y en la interacción humana.",
                    "Implementaría métodos de trabajo Lean y Six Sigma para mejorar la eficiencia operativa y mantener altos estándares de calidad.",
                    "Realizaría revisiones periódicas de los procesos de servicio al cliente para eliminar ineficiencias y asegurar que los recursos se utilizan de la manera más efectiva posible."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los sistemas de gestión de relaciones con los clientes (CRM)?",
                "respuestas" => [
                    "Analizo métricas clave proporcionadas por el sistema CRM, como la satisfacción del cliente, tiempo de respuesta y tasas de conversión, para medir su efectividad.",
                    "Realizo auditorías regulares de los procesos del CRM para asegurar que estén alineados con los objetivos del negocio y las necesidades del cliente.",
                    "Utilizo feedback tanto de usuarios internos (equipo de ventas y servicio al cliente) como de clientes para evaluar y mejorar la funcionalidad del CRM."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de clientes en entornos multiculturales o internacionales?",
                "respuestas" => [
                    "He gestionado equipos de servicio al cliente en varios países, adaptando estrategias para respetar y abrazar diferencias culturales mientras se mantiene una calidad de servicio consistente.",
                    "Mi experiencia incluye la adaptación de comunicaciones y servicios para satisfacer las necesidades de una base de clientes diversa, asegurando respeto y efectividad en múltiples culturas.",
                    "Trabajo eficientemente en entornos multiculturales, utilizando mi fluidez en varios idiomas y mi comprensión de diferentes normas culturales para mejorar la interacción con el cliente."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de solicitudes urgentes y situaciones de alta presión?",
                "respuestas" => [
                    "Priorizo las solicitudes según su urgencia y potencial impacto, asegurando que los casos críticos se manejen rápidamente y con la atención adecuada.",
                    "Entreno a mi equipo para mantener la calma y eficiencia bajo presión, utilizando protocolos de escalación claros para situaciones urgentes.",
                    "Implemento herramientas de soporte en tiempo real y aseguro recursos adicionales durante picos de demanda para manejar eficazmente situaciones de alta presión."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la consistencia del servicio al cliente en diferentes puntos de contacto?",
                "respuestas" => [
                    "Establecería estándares uniformes de servicio al cliente a lo largo de todos los puntos de contacto, y realizaría capacitaciones regulares para asegurar su cumplimiento.",
                    "Implementaría un sistema de gestión de calidad que monitoree y evalúe la consistencia del servicio en todos los canales de interacción con el cliente.",
                    "Desarrollaría guías y scripts detallados para el equipo de atención al cliente, asegurando una experiencia homogénea y profesional en todos los puntos de contacto."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de expectativas de los clientes en situaciones de productos o servicios agotados?",
                "respuestas" => [
                    "Comunicaría proactivamente cualquier problema de disponibilidad, ofreciendo alternativas viables y tiempos estimados para la reposición de productos o servicios.",
                    "Gestionaría las expectativas a través de una comunicación transparente y honesta, asegurando que los clientes estén informados y puedan tomar decisiones basadas en la información más reciente.",
                    "Implementaría estrategias de servicio al cliente que incluyan opciones de compensación o beneficios para mitigar cualquier inconveniente causado por la falta de disponibilidad."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la proactividad en la atención al cliente?",
                "respuestas" => [
                    "La proactividad es esencial para anticipar y resolver problemas antes de que afecten al cliente, mejorando la satisfacción y la lealtad del cliente a largo plazo.",
                    "Fomento un enfoque proactivo entre mi equipo, incentivándolos a buscar constantemente maneras de mejorar la experiencia del cliente antes de que surjan problemas.",
                    "Considero la proactividad como una piedra angular en la gestión de relaciones con clientes, ya que permite crear experiencias memorables y positivas de manera consistente."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los procesos de retroalimentación y mejora continua en el servicio al cliente?",
                "respuestas" => [
                    "Utilizo indicadores de desempeño clave (KPIs) para medir los resultados de los procesos de mejora y ajustar estrategias según sea necesario.",
                    "Realizo evaluaciones periódicas para revisar la eficacia de los procesos de retroalimentación, asegurándome de que conduzcan a mejoras tangibles en el servicio.",
                    "Incorporo regularmente el feedback de clientes y empleados en los procesos de revisión, utilizando este input para guiar las decisiones de mejora continua."
                ]
            ]
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 6,
            ]);
            $p = 10;
            foreach ($pregunta['respuestas'] as $respuesta) {

                DB::table('Answer')->insert([
                    'answer' => $respuesta,
                    'QuestionID' => $i,
                    'QuestionPoints' => $p,
                ]);
                $p -= 3;
            }
            $i++;
        }
        //Gestión de proyectos
        $respuestas = [
            [
                "pregunta" => "¿Cuál es tu experiencia previa en la gestión de proyectos?",
                "respuestas" => [
                    "He gestionado proyectos de diferentes escalas en mi carrera anterior, supervisando todas las fases desde la concepción hasta la ejecución.",
                    "Mi experiencia en gestión de proyectos se extiende por varios años en múltiples industrias, manejando tanto equipos pequeños como grandes.",
                    "Aunque mi experiencia en gestión de proyectos no es extensa, he asistido a cursos y talleres que me preparan para esta función."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la planificación inicial de un proyecto?",
                "respuestas" => [
                    "Iniciaría con una reunión de kickoff para establecer expectativas claras y objetivos, seguido de la creación de un plan de proyecto detallado.",
                    "Utilizaría herramientas como diagramas de Gantt y matrices de responsabilidad para asegurar que todos los pasos estén claramente definidos.",
                    "Abordaría la planificación inicial centrando en la definición de alcances y la identificación de riesgos potenciales."
                ]
            ],
            [
                "pregunta" => "¿Qué métodos utilizas para establecer objetivos y hitos de proyecto claros?",
                "respuestas" => [
                    "Utilizo el método SMART para definir objetivos que sean específicos, medibles, alcanzables, relevantes y temporales.",
                    "Me aseguro de involucrar a todas las partes interesadas en la definición de estos objetivos para garantizar su alineación con las metas del negocio.",
                    "Establezco hitos claros mediante reuniones de planificación y utilizo software de gestión de proyectos para hacer seguimiento."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la asignación de recursos en un proyecto?",
                "respuestas" => [
                    "Realizo un análisis detallado de las necesidades del proyecto y luego asigno recursos basándome en la prioridad y la disponibilidad.",
                    "Utilizo herramientas de gestión de proyectos para visualizar la carga de trabajo y garantizar una distribución equitativa de los recursos.",
                    "Me enfoco en una asignación de recursos flexible que pueda adaptarse a cambios inesperados en el proyecto."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la identificación y gestión de riesgos en un proyecto?",
                "respuestas" => [
                    "Implemento un proceso de análisis de riesgos al inicio del proyecto y realizo seguimientos regulares para mitigarlos de manera proactiva.",
                    "Utilizo técnicas como el análisis FODA y la evaluación de riesgos para identificar posibles problemas antes de que afecten al proyecto.",
                    "Incorporo revisiones de riesgos en las reuniones de estado del proyecto para asegurar que cualquier riesgo sea abordado rápidamente."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para el seguimiento del progreso y el cumplimiento de plazos?",
                "respuestas" => [
                    "Utilizo software de gestión de proyectos como MS Project o Asana para el seguimiento de tareas y plazos.",
                    "Implemento dashboards personalizados con herramientas como Tableau para visualizar el progreso en tiempo real.",
                    "Me apoyo en métodos ágiles de gestión utilizando tableros Kanban para mantener la visibilidad del avance del proyecto."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una situación en la que tuviste que adaptarte a cambios en un proyecto?",
                "respuestas" => [
                    "En un proyecto anterior, un cambio significativo en los requisitos del cliente nos obligó a reevaluar nuestra estrategia, lo cual manejé replanificando eficazmente y manteniendo al equipo informado.",
                    "Durante un proyecto, enfrentamos una escasez de recursos críticos, lo que me llevó a reasignar tareas y optimizar los recursos disponibles para cumplir con los plazos.",
                    "En una ocasión, cambios regulatorios inesperados requirieron que ajustáramos nuestras entregas, lo que manejé a través de la comunicación efectiva con todas las partes interesadas y una rápida reorientación del equipo."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas y gestionas los cambios en el alcance del proyecto?",
                "respuestas" => [
                    "Evalúo los cambios en el alcance mediante una revisión detallada de su impacto en el cronograma y los costos, y gestiono la aprobación de todos los stakeholders antes de proceder.",
                    "Utilizo un proceso de control de cambios riguroso para asegurar que todos los cambios en el alcance sean documentados, evaluados y aprobados adecuadamente.",
                    "Mantengo una comunicación fluida con el cliente y el equipo para asegurar que los cambios en el alcance se gestionen de manera que apoyen los objetivos generales del proyecto."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomas para garantizar la comunicación efectiva entre los miembros del equipo del proyecto?",
                "respuestas" => [
                    "Organizo reuniones regulares y utilizo herramientas de comunicación en línea para asegurar que todos los miembros del equipo estén al tanto de las actualizaciones.",
                    "Promuevo un ambiente de trabajo abierto donde los miembros del equipo se sientan cómodos compartiendo sus ideas y preocupaciones.",
                    "Implemento un sistema de gestión del conocimiento para facilitar el acceso a la información necesaria para todos los miembros del equipo."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de presupuestos y costos de proyecto?",
                "respuestas" => [
                    "He gestionado presupuestos para proyectos de hasta varios millones de dólares, asegurando que se mantengan dentro de los límites aprobados.",
                    "Mi experiencia incluye la supervisión detallada de costos y la implementación de medidas de control para prevenir desviaciones.",
                    "Aunque tengo experiencia limitada en la gestión de presupuestos grandes, he supervisado proyectos pequeños con enfoque en la optimización de recursos."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de conflictos entre miembros del equipo en un proyecto?",
                "respuestas" => [
                    "Adopto un enfoque mediador, asegurándome de escuchar todas las partes involucradas y encontrar una solución que sea aceptable para todos.",
                    "Implemento sesiones de resolución de conflictos y promuevo un ambiente de respeto mutuo dentro del equipo.",
                    "Utilizo técnicas de comunicación asertiva para abordar y resolver conflictos de manera efectiva, manteniendo la moral del equipo."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para motivar y mantener comprometido al equipo del proyecto?",
                "respuestas" => [
                    "Establezco metas claras y reconozco los logros del equipo para mantener la motivación alta.",
                    "Promuevo la participación del equipo en la toma de decisiones y les doy autonomía en sus tareas para incrementar su compromiso.",
                    "Organizo actividades de team building y proporciono oportunidades de desarrollo profesional para mantener al equipo motivado y comprometido."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la eficacia de las reuniones de seguimiento de proyectos?",
                "respuestas" => [
                    "Utilizo feedback directo de los participantes y reviso si las metas de la reunión fueron alcanzadas para evaluar su eficacia.",
                    "Mido la eficacia de las reuniones basándome en los resultados tangibles y el progreso del proyecto después de cada reunión.",
                    "Implemento encuestas de satisfacción post-reunión para obtener insights sobre la percepción del equipo respecto a la utilidad de las reuniones."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de la calidad en un proyecto?",
                "respuestas" => [
                    "Implemento estándares de calidad desde el inicio del proyecto y realizo auditorías regulares para asegurar el cumplimiento.",
                    "Utilizo metodologías Lean y Six Sigma para mejorar continuamente la calidad del proyecto.",
                    "Incorporo revisiones de calidad en cada etapa del proyecto para garantizar que los entregables cumplan con las expectativas del cliente."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de expectativas de los stakeholders del proyecto?",
                "respuestas" => [
                    "Mantengo comunicación regular y transparente con todos los stakeholders para asegurar que sus expectativas se gestionen adecuadamente.",
                    "Realizo reuniones de alineación al inicio del proyecto y actualizaciones periódicas para mantener informados a los stakeholders.",
                    "Establezco claramente los roles, responsabilidades y expectativas mediante documentación detallada y la reviso con los stakeholders."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la gestión de la documentación y los entregables del proyecto?",
                "respuestas" => [
                    "Utilizo plataformas de gestión de proyectos como Confluence para centralizar la documentación y facilitar el acceso a los entregables.",
                    "Empleo herramientas de almacenamiento en la nube como Google Drive o Dropbox para asegurar que la documentación esté segura y accesible para todos los involucrados.",
                    "Implemento sistemas de control de versiones para mantener un registro preciso de las modificaciones en documentos importantes."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de dependencias entre tareas y equipos en un proyecto?",
                "respuestas" => [
                    "Utilizo herramientas de software como Microsoft Project para mapear y visualizar dependencias entre tareas y garantizar la sincronización de equipos.",
                    "Organizo reuniones de coordinación periódicas para discutir y ajustar las interdependencias entre equipos y asegurar el flujo continuo del proyecto.",
                    "Desarrollo un plan de proyecto detallado que incluye la gestión de dependencias para prevenir cuellos de botella y retrasos."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la conformidad con los requisitos regulatorios en un proyecto?",
                "respuestas" => [
                    "Colaboro con expertos en regulación para entender los requisitos específicos y asegurarme de que el proyecto los cumpla en todas las etapas.",
                    "Implemento revisiones de cumplimiento y auditorías regulares para verificar que el proyecto siga alineado con las normativas aplicables.",
                    "Capacito al equipo en las regulaciones relevantes y mantengo una documentación rigurosa para facilitar cualquier inspección regulatoria."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de proyectos en entornos ágiles o Scrum?",
                "respuestas" => [
                    "Tengo experiencia amplia en metodologías ágiles, habiendo liderado múltiples equipos Scrum en la entrega de proyectos de software.",
                    "He sido Scrum Master en varios proyectos, facilitando el proceso ágil y asegurando que las prácticas ágiles se implementen eficazmente.",
                    "Mi experiencia en entornos ágiles está en desarrollo, con capacitación formal en Scrum y participación activa en proyectos ágiles recientes."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de la gestión del tiempo en un proyecto?",
                "respuestas" => [
                    "Utilizo métricas de rendimiento clave para monitorear la eficiencia del uso del tiempo y ajustar los procesos para mejorar la productividad.",
                    "Realizo revisiones periódicas del cronograma del proyecto para asegurar que los plazos se cumplan y tomar medidas correctivas si es necesario.",
                    "Evalúo la efectividad del tiempo a través de feedback de los stakeholders y el equipo, asegurando que los objetivos del proyecto se cumplan dentro de los tiempos estipulados."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para garantizar la alineación del proyecto con los objetivos estratégicos de la organización?",
                "respuestas" => [
                    "Me aseguraría de entender profundamente los objetivos estratégicos de la organización y vincularlos claramente con los objetivos del proyecto.",
                    "Involucraría a los líderes de la organización en la planificación y seguimiento del proyecto para mantener la alineación estratégica.",
                    "Utilizaría indicadores clave de rendimiento (KPIs) específicos para asegurar que el progreso del proyecto contribuya a los objetivos estratégicos."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de la carga de trabajo y la asignación de tareas en un proyecto?",
                "respuestas" => [
                    "Utilizo herramientas de gestión de proyectos para equilibrar la carga de trabajo y asegurarme de que las asignaciones de tareas sean justas y eficientes.",
                    "Realizo revisiones periódicas del trabajo en curso para ajustar las cargas de trabajo según sea necesario y evitar el agotamiento del equipo.",
                    "Fomento una comunicación abierta sobre la carga de trabajo, permitiendo que el equipo exprese preocupaciones y sugerencias de redistribución de tareas."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la gestión del cambio en un proyecto?",
                "respuestas" => [
                    "Considero la gestión del cambio crítica para el éxito del proyecto, especialmente en entornos que cambian rápidamente.",
                    "Integro estrategias de gestión del cambio desde la planificación del proyecto para asegurar una adaptación suave y continua.",
                    "Priorizo la comunicación y la formación como herramientas clave para gestionar el cambio eficazmente dentro del equipo de proyecto."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la comunicación con stakeholders externos al proyecto?",
                "respuestas" => [
                    "Establecería canales de comunicación claros y regulares para mantener informados a los stakeholders externos sobre el progreso y los cambios del proyecto.",
                    "Desarrollaría un plan de comunicación que identifique las necesidades de información de cada stakeholder externo y la mejor manera de satisfacerlas.",
                    "Me aseguraría de que toda comunicación con los stakeholders externos sea precisa, oportuna y profesional para mantener relaciones sólidas y de confianza."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la evaluación y seguimiento del rendimiento del equipo del proyecto?",
                "respuestas" => [
                    "Utilizo herramientas de software como JIRA para monitorear el rendimiento del equipo, medir la productividad y gestionar las tareas efectivamente.",
                    "Implemento sistemas de revisión de desempeño regulares y proporciono feedback constructivo para mejorar continuamente la eficiencia del equipo.",
                    "Empleo técnicas de evaluación basadas en objetivos alcanzados y feedback de 360 grados para una visión completa del rendimiento del equipo."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de expectativas de los clientes en un proyecto?",
                "respuestas" => [
                    "Establezco una comunicación abierta y transparente con el cliente desde el inicio del proyecto para alinear expectativas y objetivos.",
                    "Gestiono activamente las expectativas del cliente mediante la entrega regular de avances y la demostración de progreso concretos.",
                    "Priorizo la satisfacción del cliente y estoy abierto a adaptaciones en el proyecto para asegurar que sus expectativas sean cumplidas."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de la innovación en un proyecto?",
                "respuestas" => [
                    "Fomento un ambiente que promueva la creatividad y la experimentación dentro del equipo, animando a proponer ideas innovadoras.",
                    "Implemento procesos de gestión de la innovación que incluyan la generación, evaluación y ejecución de ideas para mejorar el proyecto.",
                    "Colaboro con equipos interdisciplinarios y busco inspiración en mejores prácticas de la industria para impulsar la innovación en el proyecto."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de la gestión de riesgos en un proyecto?",
                "respuestas" => [
                    "Reviso regularmente el registro de riesgos para asegurarme de que se estén abordando adecuadamente y de que se estén tomando medidas de mitigación.",
                    "Comparo el número y la gravedad de los riesgos identificados con los que se han materializado para evaluar la eficacia de las estrategias de gestión de riesgos.",
                    "Utilizo métricas de rendimiento como la reducción en la frecuencia de eventos de riesgo para medir el éxito de la gestión de riesgos."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la resiliencia del proyecto ante imprevistos?",
                "respuestas" => [
                    "Desarrollaría un plan de contingencia que identifique posibles amenazas y establezca acciones específicas para abordarlas en caso de que ocurran.",
                    "Fomentaría la flexibilidad en la planificación del proyecto y en la asignación de recursos para poder adaptarse rápidamente a cambios inesperados.",
                    "Promovería la mentalidad de aprendizaje dentro del equipo para que puedan enfrentar los desafíos con resiliencia y buscar soluciones creativas."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de entregables y revisiones en un proyecto?",
                "respuestas" => [
                    "Establezco un proceso claro para la entrega de entregables y reviso periódicamente su calidad y progreso para asegurar que cumplan con los estándares requeridos.",
                    "Solicito feedback regular de los stakeholders sobre los entregables para identificar áreas de mejora y realizar ajustes según sea necesario.",
                    "Utilizo herramientas de colaboración en línea para facilitar la revisión y aprobación de entregables, asegurando una comunicación efectiva entre todos los involucrados."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para mejorar la colaboración entre equipos y departamentos en un proyecto?",
                "respuestas" => [
                    "Fomentaría la comunicación abierta y la transparencia entre los equipos, facilitando el intercambio de información y recursos.",
                    "Organizaría reuniones regulares de coordinación entre equipos y departamentos para alinear objetivos y resolver posibles conflictos.",
                    "Implementaría herramientas de colaboración en línea para compartir documentos, programar reuniones y colaborar de manera eficiente en tiempo real."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de proyectos en entornos virtuales o distribuidos?",
                "respuestas" => [
                    "Utilizaría tecnologías de comunicación y colaboración en línea para mantener una conexión constante entre los miembros del equipo distribuido.",
                    "Establecería horarios de trabajo flexibles para acomodar diferentes zonas horarias y facilitar la colaboración sin problemas.",
                    "Organizaría reuniones periódicas por videoconferencia para mantener una comunicación cara a cara y fortalecer la cohesión del equipo."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de proyectos de desarrollo de software?",
                "respuestas" => [
                    "Tengo una amplia experiencia en la gestión de proyectos de desarrollo de software, desde la concepción hasta la entrega y el mantenimiento.",
                    "He liderado equipos de desarrollo en proyectos de software complejos, utilizando metodologías ágiles para asegurar entregas exitosas.",
                    "Aunque mi experiencia en gestión de proyectos de desarrollo de software es limitada, tengo conocimientos sólidos en las mejores prácticas de desarrollo y gestión de proyectos."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de la gestión de la comunicación en un proyecto?",
                "respuestas" => [
                    "Realizo encuestas de satisfacción del cliente y del equipo para evaluar la calidad y la eficacia de la comunicación en el proyecto.",
                    "Monitoreo el flujo de comunicación utilizando herramientas de seguimiento de proyectos y analizo la frecuencia y la relevancia de las interacciones.",
                    "Solicito feedback regular del equipo y de los stakeholders sobre la comunicación, y ajusto las estrategias según sea necesario para mejorar la efectividad."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la retroalimentación y la mejora continua en la gestión de proyectos?",
                "respuestas" => [
                    "Considero que la retroalimentación y la mejora continua son fundamentales para el éxito a largo plazo de cualquier proyecto.",
                    "Fomento una cultura de retroalimentación abierta y constructiva dentro del equipo, donde todos puedan compartir ideas y sugerencias para mejorar.",
                    "Utilizo datos y métricas para identificar áreas de mejora y establecer planes de acción para implementar cambios y optimizar el rendimiento del proyecto."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de stakeholders con expectativas divergentes en un proyecto?",
                "respuestas" => [
                    "Identifico las expectativas de cada stakeholder y busco puntos en común para llegar a un consenso sobre los objetivos del proyecto.",
                    "Organizo reuniones de alineación con stakeholders clave para discutir y abordar las diferencias de manera constructiva.",
                    "Establezco canales de comunicación abiertos para que los stakeholders puedan expresar sus preocupaciones y trabajar juntos en soluciones."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la evaluación y selección de proveedores en un proyecto?",
                "respuestas" => [
                    "Realizo análisis de mercado para identificar proveedores potenciales y evaluar su idoneidad para el proyecto.",
                    "Utilizo matrices de evaluación para comparar y contrastar diferentes proveedores en función de criterios como costo, calidad y experiencia.",
                    "Solicito referencias y testimonios de clientes anteriores para validar la reputación y la confiabilidad de los proveedores."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de la integración de equipos multidisciplinarios en un proyecto?",
                "respuestas" => [
                    "Promuevo la diversidad y la inclusión dentro del equipo, reconociendo y valorando las habilidades y perspectivas únicas de cada miembro.",
                    "Organizo actividades de team building y talleres colaborativos para fomentar la cohesión y la colaboración entre los equipos multidisciplinarios.",
                    "Establezco un liderazgo claro y empoderador que facilite la integración y el trabajo conjunto de los equipos multidisciplinarios hacia un objetivo común."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de la gestión de la calidad en un proyecto?",
                "respuestas" => [
                    "Realizo auditorías de calidad periódicas para verificar el cumplimiento de los estándares y requisitos de calidad establecidos.",
                    "Implemento métricas de calidad y KPIs para monitorear la satisfacción del cliente, la frecuencia de defectos y otros indicadores clave de rendimiento.",
                    "Solicito feedback del cliente y del equipo sobre la calidad del producto entregado y realizo ajustes según sea necesario para mejorarla."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la adherencia a los estándares de seguridad en un proyecto?",
                "respuestas" => [
                    "Establezco políticas y procedimientos claros en materia de seguridad y proporciono capacitación regular al equipo sobre las mejores prácticas de seguridad.",
                    "Realizo evaluaciones de riesgos y análisis de vulnerabilidades para identificar posibles amenazas a la seguridad y tomar medidas preventivas.",
                    "Colaboro con expertos en seguridad para asegurar que el proyecto cumpla con los estándares y regulaciones de seguridad relevantes."
                ]
            ],
        ];


        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 7,
            ]);
            $p = 10;
            foreach ($pregunta['respuestas'] as $respuesta) {

                DB::table('Answer')->insert([
                    'answer' => $respuesta,
                    'QuestionID' => $i,
                    'QuestionPoints' => $p,
                ]);
                $p -= 3;
            }
            $i++;
        }
        //Educación y formación
        $respuestas = [
            [
                "pregunta" => "¿Cuál es tu experiencia previa en educación y formación?",
                "respuestas" => [
                    "Tengo experiencia previa en educación y formación trabajando como profesor en diferentes instituciones educativas.",
                    "He trabajado como instructor en programas de formación profesional y capacitación laboral.",
                    "No tengo experiencia directa en educación y formación, pero tengo un profundo interés en aprender y desarrollarme en este campo."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque pedagógico o metodológico preferido?",
                "respuestas" => [
                    "Mi enfoque pedagógico preferido se centra en el aprendizaje activo y participativo, donde los estudiantes son protagonistas de su propio proceso de aprendizaje.",
                    "Prefiero un enfoque constructivista donde los estudiantes construyen su propio conocimiento a través de la exploración y la experimentación.",
                    "Me inclino hacia un enfoque humanista que prioriza el desarrollo integral de los estudiantes y fomenta un ambiente de apoyo y respeto mutuo."
                ]
            ],
            [
                "pregunta" => "¿Cómo adaptas tu enseñanza a diferentes estilos de aprendizaje?",
                "respuestas" => [
                    "Utilizo una variedad de métodos de enseñanza, como conferencias, debates, actividades prácticas y recursos multimedia, para atender a diferentes estilos de aprendizaje.",
                    "Observo y evalúo los estilos de aprendizaje de mis estudiantes y adapto mis estrategias de enseñanza en consecuencia.",
                    "Fomento la diversidad de enfoques de aprendizaje en el aula y ofrezco opciones para que los estudiantes elijan el método que mejor se adapte a sus preferencias."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomas para garantizar la participación y el compromiso de los estudiantes?",
                "respuestas" => [
                    "Fomento un ambiente de confianza y respeto donde los estudiantes se sientan seguros para participar y expresar sus ideas.",
                    "Implemento actividades interactivas y colaborativas que estimulan la participación activa de todos los estudiantes.",
                    "Establezco expectativas claras y objetivos alcanzables, involucrando a los estudiantes en la planificación y evaluación de su propio aprendizaje."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas el progreso y el rendimiento de los estudiantes?",
                "respuestas" => [
                    "Utilizo una variedad de métodos de evaluación, como exámenes, proyectos, presentaciones y debates, para evaluar el progreso y el rendimiento de los estudiantes.",
                    "Realizo evaluaciones formativas regulares para monitorear el progreso de los estudiantes y proporcionar retroalimentación oportuna.",
                    "Promuevo la autoevaluación y la evaluación entre pares como herramientas para que los estudiantes reflexionen sobre su propio aprendizaje y mejoren continuamente."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias utilizas para fomentar un ambiente de aprendizaje inclusivo?",
                "respuestas" => [
                    "Promuevo el respeto y la valoración de la diversidad en el aula, fomentando un ambiente inclusivo donde cada estudiante se sienta bienvenido y respetado.",
                    "Adapto los materiales y actividades de enseñanza para que sean accesibles para todos los estudiantes, teniendo en cuenta sus necesidades individuales.",
                    "Fomento la participación equitativa de todos los estudiantes y abordo cualquier forma de discriminación o exclusión de manera proactiva."
                ]
            ],
            [
                "pregunta" => "¿Puedes describir una situación en la que resolviste un desafío en el aula?",
                "respuestas" => [
                    "Enfrenté un desafío en el aula cuando tuve que lidiar con un conflicto entre estudiantes. Lo abordé facilitando una discusión abierta y guiando a los estudiantes hacia una solución colaborativa.",
                    "Me encontré con un desafío al adaptar una lección para satisfacer las necesidades de un estudiante con discapacidad. Trabajé junto con el departamento de recursos para desarrollar modificaciones apropiadas y garantizar la inclusión.",
                    "Tuve que enfrentar un desafío cuando algunos estudiantes mostraban poco interés en el tema. Implementé actividades más interactivas y relacionadas con sus intereses para aumentar su participación y compromiso."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión del tiempo y la planificación de lecciones?",
                "respuestas" => [
                    "Planifico mis lecciones con anticipación, estableciendo objetivos claros y secuencias de actividades que optimizan el tiempo de clase.",
                    "Utilizo herramientas de gestión del tiempo, como agendas y calendarios, para organizar mis tareas y asegurarme de cumplir con los plazos establecidos.",
                    "Soy flexible en mi enfoque de planificación, adaptándome a las necesidades emergentes de los estudiantes y haciendo ajustes según sea necesario."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en el uso de tecnología en el aula?",
                "respuestas" => [
                    "Tengo experiencia en la integración de tecnología en el aula, utilizando herramientas como pizarras digitales, software educativo y plataformas en línea para mejorar el proceso de aprendizaje.",
                    "He participado en proyectos piloto de tecnología educativa y he desarrollado recursos digitales para enriquecer el contenido curricular.",
                    "Aunque tengo conocimientos básicos de tecnología, estoy dispuesto a aprender y desarrollar mis habilidades en este aspecto para mejorar la experiencia educativa de mis estudiantes."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das al aprendizaje experiencial o práctico?",
                "respuestas" => [
                    "Considero que el aprendizaje experiencial y práctico es fundamental para el desarrollo integral de los estudiantes, ya que les brinda la oportunidad de aplicar conceptos teóricos en situaciones reales.",
                    "Promuevo activamente el aprendizaje experiencial a través de actividades prácticas, proyectos de investigación y salidas de campo que enriquecen la experiencia educativa de los estudiantes.",
                    "Reconozco la importancia del equilibrio entre teoría y práctica en el proceso de aprendizaje, y busco integrar ambos enfoques de manera efectiva en mis lecciones."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la adaptación de programas de estudio para diferentes niveles de habilidad?",
                "respuestas" => [
                    "Personalizaría los programas de estudio utilizando enfoques diferenciados que atiendan a las diversas necesidades y niveles de habilidad de los estudiantes.",
                    "Ofrecería opciones flexibles de aprendizaje, como actividades adicionales para estudiantes avanzados y apoyo adicional para aquellos que necesitan refuerzo.",
                    "Trabajaría en colaboración con colegas y especialistas para desarrollar estrategias efectivas de enseñanza y evaluación que aborden la diversidad de habilidades en el aula."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la evaluación y retroalimentación de los estudiantes?",
                "respuestas" => [
                    "Utilizo una variedad de herramientas de evaluación, como rúbricas, listas de control, y pruebas escritas, para medir el progreso de los estudiantes y proporcionar retroalimentación significativa.",
                    "Promuevo la autoevaluación y la coevaluación entre los estudiantes, fomentando la reflexión sobre su propio aprendizaje y el de sus compañeros.",
                    "Utilizo tecnología educativa, como plataformas en línea y aplicaciones móviles, para facilitar la evaluación y la retroalimentación de manera eficiente y efectiva."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión del comportamiento en el aula?",
                "respuestas" => [
                    "Establezco expectativas claras de comportamiento desde el principio del año escolar, y refuerzo consistentemente las normas de conducta.",
                    "Implemento estrategias de manejo de la clase, como el establecimiento de rutinas, el refuerzo positivo y el modelado de comportamientos apropiados.",
                    "Abordo los problemas de comportamiento de manera proactiva, identificando las causas subyacentes y trabajando en colaboración con los estudiantes para encontrar soluciones."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la diversidad cultural y lingüística en el aula?",
                "respuestas" => [
                    "Celebro la diversidad cultural y lingüística en el aula, promoviendo el respeto y la valoración de todas las identidades culturales y lingüísticas.",
                    "Utilizo recursos educativos que reflejen la diversidad de la comunidad estudiantil, y fomento la participación activa de todos los estudiantes en el intercambio cultural.",
                    "Trabajo en colaboración con familias y colegas para apoyar a los estudiantes que enfrentan barreras culturales o lingüísticas, proporcionando recursos y adaptaciones apropiadas."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar un ambiente seguro y respetuoso en el aula?",
                "respuestas" => [
                    "Establecería normas claras de conducta que promuevan el respeto mutuo y la seguridad emocional de todos los estudiantes.",
                    "Fomentaría un ambiente de confianza y apoyo donde los estudiantes se sientan cómodos para expresar sus ideas y opiniones sin temor a juicio o discriminación.",
                    "Implementaría políticas y procedimientos para abordar el acoso, el bullying y otras formas de comportamiento inapropiado, garantizando la seguridad física y emocional de los estudiantes."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de tus métodos de enseñanza?",
                "respuestas" => [
                    "Realizo evaluaciones formativas y sumativas para medir el progreso de los estudiantes y la eficacia de mis métodos de enseñanza.",
                    "Solicito retroalimentación de los estudiantes mediante encuestas y entrevistas para identificar áreas de mejora en mi enfoque pedagógico.",
                    "Colaboro con colegas y participo en actividades de desarrollo profesional para mantenerme actualizado sobre las mejores prácticas en enseñanza y aprendizaje."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en el diseño y desarrollo de materiales didácticos?",
                "respuestas" => [
                    "Tengo experiencia en el diseño y desarrollo de materiales didácticos para diversos contextos educativos, incluyendo manuales, presentaciones y recursos multimedia.",
                    "He colaborado con equipos multidisciplinarios para crear materiales didácticos innovadores que se adapten a las necesidades específicas de los estudiantes.",
                    "Estoy familiarizado con herramientas y software de diseño gráfico que me permiten crear materiales didácticos atractivos y efectivos."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la colaboración con otros educadores o profesionales en la enseñanza?",
                "respuestas" => [
                    "Promovería la colaboración entre colegas a través de reuniones regulares, intercambio de ideas y trabajo en equipo para desarrollar enfoques pedagógicos integrados.",
                    "Participaría en comunidades de práctica y redes profesionales para compartir recursos, experiencias y mejores prácticas en la enseñanza.",
                    "Fomentaría la colaboración interdisciplinaria con otros educadores y profesionales para enriquecer el contenido curricular y ofrecer una experiencia educativa integral."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para promover el pensamiento crítico y la resolución de problemas en los estudiantes?",
                "respuestas" => [
                    "Diseñaría actividades y tareas que desafíen a los estudiantes a analizar, sintetizar y evaluar información de manera crítica.",
                    "Fomentaría la exploración de múltiples perspectivas y soluciones alternativas a través de debates, estudios de casos y proyectos de investigación.",
                    "Proporcionaría retroalimentación constructiva que fomente el pensamiento crítico y la reflexión sobre el proceso de resolución de problemas de los estudiantes."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la adaptación de la enseñanza a las necesidades individuales de los estudiantes?",
                "respuestas" => [
                    "Realizaría evaluaciones formativas para identificar las necesidades individuales de los estudiantes y ajustar mi enseñanza en consecuencia.",
                    "Ofrecería apoyo adicional a los estudiantes que lo necesiten, ya sea a través de tutorías individuales, materiales de refuerzo o adaptaciones curriculares.",
                    "Colaboraría con el equipo de educación especial y otros profesionales para desarrollar planes de intervención individualizados que aborden las necesidades únicas de cada estudiante."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das al desarrollo de habilidades socioemocionales en la educación?",
                "respuestas" => [
                    "Considero que el desarrollo de habilidades socioemocionales es fundamental para el éxito académico y personal de los estudiantes.",
                    "Integro actividades y estrategias que promueven la inteligencia emocional, la empatía y la resolución de conflictos en el currículo escolar.",
                    "Trabajo en colaboración con orientadores y psicólogos escolares para implementar programas de desarrollo socioemocional y apoyar el bienestar integral de los estudiantes."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la evaluación formativa y sumativa en el aula?",
                "respuestas" => [
                    "Utilizaría la evaluación formativa para monitorear el progreso de los estudiantes y proporcionar retroalimentación continua que guíe su aprendizaje.",
                    "La evaluación sumativa se utilizaría para medir el nivel de logro de los estudiantes al final de un período de instrucción y tomar decisiones educativas basadas en esos resultados.",
                    "Adaptaría mis métodos de evaluación según las necesidades y características de los estudiantes, asegurándome de que sean justos, válidos y confiables."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de programas de educación a distancia o en línea?",
                "respuestas" => [
                    "Tengo experiencia en la gestión de programas de educación a distancia, tanto como estudiante como facilitador.",
                    "He trabajado en el diseño y desarrollo de cursos en línea, así como en la implementación de plataformas de aprendizaje virtual.",
                    "Estoy familiarizado con las mejores prácticas en educación a distancia y estoy comprometido a ofrecer experiencias de aprendizaje de alta calidad en entornos virtuales."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de la retroalimentación en el proceso de aprendizaje?",
                "respuestas" => [
                    "Evalúo la efectividad de la retroalimentación solicitando retroalimentación de los propios estudiantes sobre su utilidad y relevancia para su aprendizaje.",
                    "Analizo los resultados de las evaluaciones y el progreso de los estudiantes para determinar si la retroalimentación ha contribuido a mejorar su rendimiento.",
                    "Reviso continuamente mis prácticas de retroalimentación y busco oportunidades para mejorar y hacer ajustes según sea necesario."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la colaboración y comunicación con padres y tutores?",
                "respuestas" => [
                    "Utilizo una variedad de herramientas de comunicación, como correos electrónicos, aplicaciones móviles y plataformas en línea, para mantener a los padres informados sobre el progreso y el rendimiento de sus hijos.",
                    "Organizo reuniones periódicas con padres y tutores para discutir el desarrollo académico y socioemocional de los estudiantes y establecer metas colaborativas.",
                    "Fomento una comunicación abierta y transparente con los padres, brindando retroalimentación regular sobre el desempeño de los estudiantes y solicitando su participación en el proceso educativo."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la adaptación de la enseñanza a estudiantes con necesidades especiales?",
                "respuestas" => [
                    "Colaboro con el equipo de educación especial y otros profesionales para desarrollar planes de educación individualizados que aborden las necesidades únicas de los estudiantes con discapacidades.",
                    "Adapto el currículo y las estrategias de enseñanza para proporcionar apoyo adicional y garantizar el acceso equitativo a la educación para todos los estudiantes.",
                    "Fomento un ambiente inclusivo en el aula donde se valoren las diferencias y se promueva el respeto y la aceptación de todos los estudiantes."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para fomentar la motivación y la autoestima de los estudiantes?",
                "respuestas" => [
                    "Reconozco y celebro los logros y esfuerzos de los estudiantes, fomentando un sentido de logro y satisfacción personal.",
                    "Establezco metas alcanzables y proporciono retroalimentación positiva que fomente la confianza y la autoeficacia de los estudiantes.",
                    "Fomento un ambiente de apoyo y respeto mutuo donde los estudiantes se sientan valorados y motivados para alcanzar su máximo potencial."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la integración de habilidades prácticas y teóricas en la enseñanza?",
                "respuestas" => [
                    "Integro actividades prácticas y experiencias de aprendizaje auténticas que permiten a los estudiantes aplicar conceptos teóricos en contextos reales.",
                    "Promuevo la reflexión y la conexión entre la teoría y la práctica, destacando la importancia de ambas en el proceso de aprendizaje.",
                    "Colaboro con empleadores y profesionales de la industria para diseñar experiencias de aprendizaje que preparen a los estudiantes para el éxito en el mundo laboral."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la enseñanza de habilidades del siglo XXI, como el pensamiento crítico, la creatividad y la colaboración?",
                "respuestas" => [
                    "Diseñaría actividades y proyectos que fomenten el pensamiento crítico, la resolución de problemas, la creatividad y la colaboración.",
                    "Utilizaría herramientas y tecnologías innovadoras que faciliten la colaboración y el trabajo en equipo en entornos virtuales y presenciales.",
                    "Fomentaría la autodirección y la iniciativa en el aprendizaje, animando a los estudiantes a asumir roles de liderazgo y responsabilidad en sus proyectos y actividades."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la educación en valores y ciudadanía?",
                "respuestas" => [
                    "Considero que la educación en valores y ciudadanía es fundamental para formar ciudadanos responsables y éticos que contribuyan positivamente a la sociedad.",
                    "Integro la enseñanza de valores como el respeto, la responsabilidad y la empatía en todas las áreas del currículo y en la vida cotidiana del aula.",
                    "Promuevo la participación cívica y el compromiso social, fomentando la conciencia de los derechos y responsabilidades de los estudiantes como miembros de la comunidad."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión del estrés y la presión en el ámbito educativo?",
                "respuestas" => [
                    "Practico técnicas de autocuidado, como el mindfulness y el ejercicio regular, para mantener un equilibrio saludable entre el trabajo y la vida personal.",
                    "Establezco límites claros en mi carga de trabajo y priorizo tareas para evitar sentirme abrumado por el estrés y la presión.",
                    "Busco apoyo en colegas, amigos y recursos de bienestar para gestionar el estrés de manera efectiva y mantenerme resiliente en situaciones difíciles."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la implementación de programas de educación continua y desarrollo profesional para educadores?",
                "respuestas" => [
                    "He participado en programas de educación continua y desarrollo profesional para mejorar mis habilidades pedagógicas y mantenerme actualizado sobre las últimas tendencias en educación.",
                    "He facilitado talleres y sesiones de entrenamiento para otros educadores en temas como el uso de tecnología en el aula y estrategias de enseñanza inclusiva.",
                    "Estoy comprometido con mi desarrollo profesional continuo y busco activamente oportunidades para crecer y mejorar como educador."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de la retroalimentación entre pares en el desarrollo profesional?",
                "respuestas" => [
                    "Considero que la retroalimentación entre pares es una herramienta valiosa para el desarrollo profesional, ya que ofrece diferentes perspectivas y enfoques para mejorar la práctica educativa.",
                    "Participo en comunidades de aprendizaje profesional donde comparto mis experiencias y recibo retroalimentación constructiva de otros educadores.",
                    "Utilizo la retroalimentación entre pares como una oportunidad para reflexionar sobre mi propio desempeño y hacer ajustes en mi práctica pedagógica."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para promover la inclusión y diversidad en el entorno educativo?",
                "respuestas" => [
                    "Fomentaría la celebración de la diversidad en el aula, reconociendo y valorando las diferentes identidades culturales, lingüísticas y de género de los estudiantes.",
                    "Integraría materiales y recursos que reflejen la diversidad en el currículo escolar, promoviendo la equidad y la inclusión en todas las áreas del aprendizaje.",
                    "Colaboraría con la comunidad escolar y organizaciones locales para ofrecer programas y eventos que celebren la diversidad y fomenten un ambiente inclusivo en la escuela."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la enseñanza de habilidades de pensamiento computacional y tecnológico?",
                "respuestas" => [
                    "Integraría actividades y proyectos que desarrollen habilidades de pensamiento computacional, como la resolución de problemas algorítmicos y la programación de computadoras, en el currículo escolar.",
                    "Utilizaría herramientas y recursos tecnológicos, como aplicaciones de codificación y robots educativos, para enseñar conceptos de ciencias de la computación de manera práctica y accesible.",
                    "Fomentaría una cultura de curiosidad y experimentación en el aula, donde los estudiantes se sientan seguros para explorar y aprender sobre tecnología y computación."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para fomentar la creatividad y la innovación en el aula?",
                "respuestas" => [
                    "Diseñaría actividades y proyectos que fomenten la expresión creativa y la resolución de problemas innovadores en el aula.",
                    "Promovería un ambiente de apertura y experimentación donde los estudiantes se sientan libres para explorar nuevas ideas y enfoques.",
                    "Reconocería y valoraría la creatividad y la innovación de los estudiantes, animándolos a asumir riesgos y perseguir sus pasiones."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de la colaboración entre estudiantes en el aprendizaje?",
                "respuestas" => [
                    "Observaría la calidad de la interacción entre los estudiantes durante las actividades colaborativas, evaluando su capacidad para trabajar juntos, comunicarse y resolver problemas en equipo.",
                    "Revisaría los productos y resultados de las actividades colaborativas para determinar si los estudiantes han alcanzado los objetivos de aprendizaje y han integrado eficazmente los conocimientos y habilidades.",
                    "Solicitaría retroalimentación a los propios estudiantes sobre su experiencia de colaboración, identificando fortalezas y áreas de mejora en su trabajo en equipo."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la evaluación y seguimiento del progreso del programa de estudios?",
                "respuestas" => [
                    "Utilizaría datos de evaluación y retroalimentación de los estudiantes para evaluar la efectividad del programa de estudios en términos de logro de objetivos y estándares de aprendizaje.",
                    "Realizaría revisiones periódicas del programa de estudios en colaboración con colegas y expertos en el tema para identificar áreas de mejora y actualizar el contenido según sea necesario.",
                    "Solicitaría retroalimentación de los estudiantes y otros interesados ​​sobre su experiencia con el programa de estudios, identificando puntos fuertes y áreas de oportunidad para la mejora continua."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la educación ambiental y sostenibilidad en el currículo?",
                "respuestas" => [
                    "Considero que la educación ambiental y la sostenibilidad son fundamentales para formar ciudadanos responsables y conscientes del medio ambiente.",
                    "Integraría temas de educación ambiental y sostenibilidad en el currículo escolar, promoviendo la conciencia sobre los problemas ambientales y fomentando acciones individuales y colectivas para proteger el medio ambiente.",
                    "Colaboraría con organizaciones ambientales y comunitarias para ofrecer oportunidades de aprendizaje práctico y actividades de servicio que promuevan la conservación y el cuidado del medio ambiente."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de la diversidad cultural y lingüística en el entorno educativo?",
                "respuestas" => [
                    "Celebro la diversidad cultural y lingüística en el entorno educativo, reconociendo y valorando las diferentes identidades y experiencias de los estudiantes.",
                    "Utilizo estrategias pedagógicas que reflejen y respeten la diversidad cultural y lingüística de los estudiantes, como la integración de literatura multicultural y la promoción del multilingüismo en el aula.",
                    "Colaboro con familias y miembros de la comunidad para comprender y abordar las necesidades únicas de los estudiantes de diferentes orígenes culturales y lingüísticos, garantizando un ambiente inclusivo y respetuoso para todos."
                ]
            ]
        ];



        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 8,
            ]);
            $p = 10;
            foreach ($pregunta['respuestas'] as $respuesta) {

                DB::table('Answer')->insert([
                    'answer' => $respuesta,
                    'QuestionID' => $i,
                    'QuestionPoints' => $p,
                ]);
                $p -= 3;
            }
            $i++;
        }
        //Salud y bienestar
        $respuestas = [
            [
                "pregunta" => "¿Cuál es tu experiencia previa en el campo de la salud y el bienestar?",
                "respuestas" => [
                    "Tengo experiencia previa trabajando en el campo de la salud y el bienestar tanto en entornos clínicos como comunitarios.",
                    "He dedicado varios años a trabajar en diferentes roles dentro del sector de la salud y el bienestar, lo que me ha proporcionado una amplia experiencia en el campo.",
                    "Mi experiencia en salud y bienestar se centra en [especifica tu experiencia relevante]."
                ]
            ],
            [
                "pregunta" => "¿Qué te motivó a trabajar en el campo de la salud y el bienestar?",
                "respuestas" => [
                    "Siempre he sentido una profunda pasión por ayudar a los demás a mejorar su calidad de vida y bienestar general.",
                    "El deseo de contribuir a crear comunidades más saludables y felices me impulsó a buscar oportunidades en el campo de la salud y el bienestar.",
                    "La experiencia personal de superar desafíos de salud me motivó a trabajar en el campo para ayudar a otros a hacer lo mismo."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la promoción de estilos de vida saludables entre los clientes?",
                "respuestas" => [
                    "Utilizaría un enfoque personalizado, brindando información educativa y apoyo emocional para motivar cambios positivos en el estilo de vida.",
                    "Implementaría programas de educación y sensibilización que destaquen los beneficios de hábitos saludables y proporcionen herramientas prácticas para su adopción.",
                    "Trabajaría en colaboración con expertos en nutrición, actividad física y salud mental para ofrecer programas integrales que aborden todos los aspectos del bienestar."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia previa en el campo de la salud y el bienestar?",
                "respuestas" => [
                    "Tengo experiencia previa trabajando en el campo de la salud y el bienestar tanto en entornos clínicos como comunitarios.",
                    "He dedicado varios años a trabajar en diferentes roles dentro del sector de la salud y el bienestar, lo que me ha proporcionado una amplia experiencia en el campo.",
                    "Mi experiencia en salud y bienestar se centra en [especifica tu experiencia relevante]."
                ]
            ],
            [
                "pregunta" => "¿Qué te motivó a trabajar en el campo de la salud y el bienestar?",
                "respuestas" => [
                    "Siempre he sentido una profunda pasión por ayudar a los demás a mejorar su calidad de vida y bienestar general.",
                    "El deseo de contribuir a crear comunidades más saludables y felices me impulsó a buscar oportunidades en el campo de la salud y el bienestar.",
                    "La experiencia personal de superar desafíos de salud me motivó a trabajar en el campo para ayudar a otros a hacer lo mismo."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la promoción de estilos de vida saludables entre los clientes?",
                "respuestas" => [
                    "Utilizaría un enfoque personalizado, brindando información educativa y apoyo emocional para motivar cambios positivos en el estilo de vida.",
                    "Implementaría programas de educación y sensibilización que destaquen los beneficios de hábitos saludables y proporcionen herramientas prácticas para su adopción.",
                    "Trabajaría en colaboración con expertos en nutrición, actividad física y salud mental para ofrecer programas integrales que aborden todos los aspectos del bienestar."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para evaluar las necesidades individuales de salud y bienestar de los clientes?",
                "respuestas" => [
                    "Realizaría evaluaciones exhaustivas que incluyan análisis de salud física, mental y emocional, así como entrevistas para comprender sus objetivos y desafíos personales.",
                    "Utilizaría cuestionarios estandarizados y entrevistas estructuradas para recopilar información detallada sobre la historia clínica, el estilo de vida y las preferencias del cliente.",
                    "Adoptaría un enfoque centrado en el cliente, permitiéndoles expresar sus necesidades y preocupaciones para personalizar el plan de bienestar de acuerdo a ellas."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para el diseño de programas de bienestar personalizados?",
                "respuestas" => [
                    "Diseñaría programas adaptados a las necesidades y metas específicas de cada cliente, integrando componentes de nutrición, ejercicio, manejo del estrés y autocuidado.",
                    "Utilizaría enfoques basados en evidencia y mejores prácticas, adaptando los programas según la edad, el estado de salud y las preferencias individuales de cada cliente.",
                    "Incorporaría elementos de seguimiento y evaluación para ajustar los programas según la evolución y las necesidades cambiantes del cliente a lo largo del tiempo."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los programas de salud y bienestar que implementas?",
                "respuestas" => [
                    "Realizaría un seguimiento regular del progreso del cliente mediante mediciones objetivas, como cambios en el peso, la presión arterial y los niveles de actividad física.",
                    "Utilizaría encuestas de satisfacción y retroalimentación del cliente para evaluar la percepción de los beneficios y la calidad del programa de bienestar.",
                    "Compararía los resultados obtenidos con los objetivos establecidos inicialmente, ajustando el programa según sea necesario para optimizar los resultados."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias utilizarías para fomentar el cambio de comportamiento hacia hábitos más saludables?",
                "respuestas" => [
                    "Implementaría técnicas de motivación y refuerzo positivo para alentar el cambio de comportamiento y promover la adherencia a los nuevos hábitos saludables.",
                    "Fomentaría la autoeficacia del cliente mediante la definición de metas realistas y el reconocimiento de los logros alcanzados durante el proceso de cambio.",
                    "Utilizaría el modelo de cambio de etapas de Prochaska y DiClemente para adaptar las estrategias de intervención según la disposición del cliente para cambiar."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de objetivos de salud y bienestar a corto y largo plazo?",
                "respuestas" => [
                    "Establecería objetivos SMART (específicos, medibles, alcanzables, relevantes y con plazos definidos) en colaboración con el cliente para garantizar su viabilidad y seguimiento.",
                    "Priorizaría objetivos a corto plazo que proporcionen logros rápidos y motivadores, mientras trabajamos simultáneamente en objetivos a largo plazo más ambiciosos.",
                    "Revisaría periódicamente los objetivos establecidos con el cliente para ajustarlos según su progreso y cambios en sus circunstancias."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para el seguimiento de progreso y resultados en el bienestar de los clientes?",
                "respuestas" => [
                    "Emplearía aplicaciones y dispositivos de seguimiento de la salud, como podómetros, aplicaciones de seguimiento de la dieta y monitores de frecuencia cardíaca, para recopilar datos objetivos sobre el progreso del cliente.",
                    "Utilizaría registros de actividad física, diarios de alimentación y seguimiento del estado de ánimo para evaluar el progreso y ajustar el plan de bienestar según sea necesario.",
                    "Mantendría registros detallados de las sesiones de coaching y el progreso del cliente para documentar los cambios observados y facilitar la revisión periódica del plan de bienestar."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de programas de ejercicios y actividad física?",
                "respuestas" => [
                    "Tengo experiencia en la planificación y supervisión de programas de ejercicios adaptados a diferentes niveles de condición física y objetivos de salud.",
                    "He trabajado con una variedad de poblaciones, incluyendo adultos mayores, personas con enfermedades crónicas y atletas de alto rendimiento, diseñando programas de ejercicio seguros y efectivos para cada grupo.",
                    "Mi enfoque se basa en principios de entrenamiento como la progresión gradual, la variedad y la individualización para garantizar resultados óptimos y minimizar el riesgo de lesiones."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión del estrés y la salud mental de los clientes?",
                "respuestas" => [
                    "Utilizaría técnicas de manejo del estrés, como la respiración profunda, la meditación y la visualización, para ayudar al cliente a reducir la respuesta al estrés y promover la relajación.",
                    "Fomentaría la construcción de habilidades de afrontamiento saludables y la promoción de un estilo de vida equilibrado que incluya actividad física regular, socialización y tiempo para actividades recreativas.",
                    "Trabajaría en colaboración con profesionales de la salud mental, como psicólogos y psiquiatras, para ofrecer un enfoque integrado en el manejo del estrés y la salud mental del cliente."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la nutrición y la dieta en el bienestar general?",
                "respuestas" => [
                    "Considero que la nutrición y la dieta juegan un papel fundamental en el bienestar general, ya que influyen en la salud física, mental y emocional del individuo.",
                    "Promuevo una alimentación equilibrada y variada, rica en frutas, verduras, proteínas magras y grasas saludables, para optimizar la salud y prevenir enfermedades crónicas.",
                    "Educación sobre nutrición y hábitos alimenticios saludables es una parte integral de mis programas de bienestar, ya que empodera a los clientes para tomar decisiones informadas sobre su dieta."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de problemas de salud crónicos en los clientes?",
                "respuestas" => [
                    "Trabajaría en estrecha colaboración con el cliente y su equipo médico para comprender la naturaleza de la enfermedad crónica y desarrollar un plan de bienestar adaptado a sus necesidades específicas.",
                    "Implementaría estrategias de autocuidado y manejo de síntomas para mejorar la calidad de vida del cliente y reducir el impacto de la enfermedad en su bienestar general.",
                    "Fomentaría la educación y la autogestión, capacitando al cliente para tomar un papel activo en el manejo de su enfermedad crónica y promoviendo la adherencia al tratamiento médico recomendado."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión del tiempo y la planificación de programas de bienestar?",
                "respuestas" => [
                    "Utilizaría técnicas de gestión del tiempo y establecería prioridades claras para garantizar la eficiencia en la planificación y ejecución de programas de bienestar.",
                    "Desarrollaría horarios flexibles y adaptativos que se ajusten a las necesidades y disponibilidad del cliente, maximizando así su participación y compromiso.",
                    "Incorporaría herramientas tecnológicas, como calendarios compartidos y recordatorios automatizados, para facilitar la organización y seguimiento de sesiones de bienestar."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar un enfoque holístico en la salud y el bienestar?",
                "respuestas" => [
                    "Abordaría la salud y el bienestar de manera integral, considerando no solo la salud física, sino también la mental, emocional, social y espiritual del individuo.",
                    "Integraría diferentes disciplinas y enfoques, como la nutrición, el ejercicio, la gestión del estrés y las relaciones interpersonales, en el diseño de programas de bienestar.",
                    "Fomentaría la conexión mente-cuerpo y promovería prácticas de autocuidado que apoyen el equilibrio y la armonía en todas las áreas de la vida del cliente."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de las intervenciones de salud y bienestar a largo plazo?",
                "respuestas" => [
                    "Realizaría seguimientos periódicos a largo plazo para evaluar el mantenimiento de los hábitos saludables y el impacto continuo de las intervenciones en la vida del cliente.",
                    "Utilizaría indicadores de resultado a largo plazo, como la reducción del riesgo de enfermedades crónicas, el aumento de la calidad de vida y la mejora en la satisfacción general del cliente.",
                    "Analizaría la sostenibilidad de los cambios realizados y ajustaría el plan de bienestar según sea necesario para mantener el progreso a lo largo del tiempo."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la implementación de programas de bienestar en entornos laborales?",
                "respuestas" => [
                    "He participado en la planificación y ejecución de programas de bienestar en entornos laborales, colaborando estrechamente con empleadores y empleados para promover un estilo de vida saludable en el lugar de trabajo.",
                    "Mis programas han incluido actividades como sesiones de ejercicio en grupo, talleres de manejo del estrés, opciones de alimentación saludable en el lugar de trabajo y campañas de sensibilización sobre temas de salud.",
                    "He evaluado el impacto de estos programas mediante encuestas de satisfacción, mediciones de salud y análisis de la cultura organizacional."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la promoción de la salud en la comunidad local?",
                "respuestas" => [
                    "Trabajaría en estrecha colaboración con organizaciones comunitarias, centros de salud y líderes locales para identificar las necesidades de salud de la comunidad y desarrollar programas de promoción de la salud adecuados.",
                    "Organizaría eventos de concientización, campañas de salud y actividades de participación comunitaria para educar a los residentes sobre la importancia de hábitos saludables y acceso a recursos de bienestar.",
                    "Facilitaría la formación de grupos de apoyo y redes de colaboración entre miembros de la comunidad para promover la salud y el bienestar en un entorno socialmente solidario."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para fomentar la participación y la adherencia a los programas de bienestar?",
                "respuestas" => [
                    "Ofrecería incentivos y recompensas para motivar la participación, como descuentos en servicios de bienestar, membresías gratuitas en gimnasios o premios por logros alcanzados.",
                    "Personalizaría los programas según las preferencias individuales y necesidades de cada cliente, aumentando así su sentido de pertenencia y compromiso con el programa.",
                    "Fomentaría una cultura de apoyo mutuo y responsabilidad compartida entre los participantes, promoviendo la colaboración y el intercambio de experiencias entre ellos."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de expectativas y objetivos realistas en la salud y el bienestar?",
                "respuestas" => [
                    "Establecería expectativas claras desde el principio, discutiendo los objetivos realistas y el tiempo necesario para alcanzarlos en función de las circunstancias individuales del cliente.",
                    "Educación sobre el proceso de cambio y la naturaleza gradual del progreso en el bienestar para establecer expectativas realistas y evitar frustraciones.",
                    "Fomentaría la celebración de pequeños logros en el camino hacia los objetivos finales, reconociendo cada paso hacia adelante como un éxito significativo."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das al sueño y el descanso en el bienestar general?",
                "respuestas" => [
                    "Considero que el sueño y el descanso adecuados son fundamentales para el bienestar general, ya que influyen en el estado físico, mental y emocional del individuo.",
                    "Promovería la educación sobre higiene del sueño y la importancia de establecer rutinas de sueño regulares para mejorar la calidad y la duración del sueño.",
                    "Ofrecería estrategias de manejo del estrés y técnicas de relajación para facilitar el descanso y la recuperación, promoviendo así un sueño reparador y rejuvenecedor."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de las estrategias de gestión del peso y la composición corporal?",
                "respuestas" => [
                    "Utilizaría mediciones objetivas, como el índice de masa corporal (IMC), la circunferencia de la cintura y el porcentaje de grasa corporal, para evaluar los cambios en la composición corporal.",
                    "Realizaría un seguimiento regular del peso y las medidas corporales del cliente para evaluar la progresión a lo largo del tiempo y ajustar el plan de bienestar según sea necesario.",
                    "También consideraría indicadores de salud adicionales, como los niveles de colesterol y glucosa en sangre, para evaluar el impacto de las estrategias de gestión del peso en la salud metabólica del cliente."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión del equilibrio entre trabajo, vida personal y bienestar?",
                "respuestas" => [
                    "Promovería la importancia de establecer límites claros entre el trabajo y la vida personal para prevenir el agotamiento y el estrés relacionado con el trabajo.",
                    "Fomentaría prácticas de autocuidado y gestión del tiempo para ayudar al cliente a priorizar sus responsabilidades y compromisos de manera equilibrada.",
                    "Incorporaría actividades de bienestar en la rutina diaria del cliente, como el ejercicio regular, el tiempo de calidad con la familia y las actividades recreativas, para mantener un equilibrio saludable."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la educación y capacitación en salud y bienestar?",
                "respuestas" => [
                    "Utilizaría materiales educativos visuales, como infografías y videos explicativos, para transmitir información de manera clara y accesible.",
                    "Ofrecería recursos escritos, como folletos y guías de estilo de vida saludable, para que los clientes puedan revisar la información en su propio tiempo y ritmo.",
                    "Impartiría talleres y seminarios interactivos para proporcionar oportunidades de aprendizaje práctico y fomentar la participación activa de los clientes en su proceso de bienestar."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la adaptación de programas de bienestar para diferentes grupos demográficos?",
                "respuestas" => [
                    "Personalizaría los programas de bienestar según las necesidades y características específicas de cada grupo demográfico, teniendo en cuenta factores como la edad, el género, el estado de salud y los antecedentes culturales.",
                    "Adaptaría el lenguaje y los enfoques de comunicación para que sean culturalmente sensibles y accesibles para cada grupo demográfico.",
                    "Incorporaría actividades y recursos que reflejen las preferencias y valores culturales de cada grupo, fomentando así la participación y la aceptación del programa."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para garantizar la accesibilidad y la inclusión en los programas de bienestar?",
                "respuestas" => [
                    "Ofrecería opciones de accesibilidad física, como instalaciones accesibles y transporte adaptado, para garantizar que todos los participantes puedan acceder al programa sin barreras.",
                    "Adaptaría los materiales educativos y las actividades para que sean accesibles para personas con discapacidades visuales, auditivas o cognitivas.",
                    "Fomentaría un ambiente inclusivo y respetuoso donde se valoren y celebren las diferencias individuales de cada participante en el programa de bienestar."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de programas de bienestar en entornos virtuales o a distancia?",
                "respuestas" => [
                    "He desarrollado y facilitado programas de bienestar en entornos virtuales utilizando plataformas en línea y herramientas de comunicación digital.",
                    "Mis programas han incluido sesiones de coaching en línea, clases de ejercicio en vivo, grupos de apoyo virtual y recursos educativos disponibles en línea.",
                    "He adaptado estrategias de participación y motivación específicas para entornos virtuales para maximizar la interacción y el compromiso de los participantes a distancia."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la motivación y el compromiso de los clientes en el bienestar?",
                "respuestas" => [
                    "Identificaría las motivaciones intrínsecas y extrínsecas de cada cliente para entender qué los impulsa a buscar un cambio en su bienestar.",
                    "Establecería metas realistas y alcanzables en colaboración con el cliente, asegurándome de que estén alineadas con sus valores y aspiraciones personales.",
                    "Utilizaría técnicas de coaching y apoyo continuo para mantener alta la motivación y el compromiso del cliente a lo largo del proceso de bienestar."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la actividad física y el ejercicio en la salud y el bienestar?",
                "respuestas" => [
                    "Considero que la actividad física y el ejercicio regular son fundamentales para mantener la salud y el bienestar general.",
                    "Promovería la actividad física como una parte integral de un estilo de vida saludable, destacando sus numerosos beneficios para la salud física, mental y emocional.",
                    "Fomentaría la incorporación de actividad física en la rutina diaria del cliente, adaptando el tipo y la intensidad de ejercicio según sus preferencias y necesidades individuales."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de las estrategias de prevención de lesiones y enfermedades?",
                "respuestas" => [
                    "Realizaría un seguimiento de la incidencia de lesiones y enfermedades entre los participantes del programa de bienestar, comparando los datos con poblaciones de referencia para evaluar la efectividad de las estrategias preventivas.",
                    "Implementaría medidas de seguridad y técnicas de entrenamiento adecuadas para minimizar el riesgo de lesiones durante las actividades físicas y el ejercicio.",
                    "Fomentaría la educación sobre la prevención de lesiones y enfermedades, capacitando a los participantes para reconocer signos de advertencia y tomar medidas preventivas apropiadas."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión del autocuidado y la autogestión en el bienestar?",
                "respuestas" => [
                    "Promovería la toma de conciencia y la responsabilidad personal en el cuidado de la salud, capacitando a los clientes para que tomen decisiones informadas y adopten hábitos de autocuidado saludables.",
                    "Fomentaría la práctica de técnicas de autocontrol y manejo del estrés para mejorar la capacidad del cliente para afrontar los desafíos de la vida cotidiana de manera saludable.",
                    "Enseñaría habilidades de autogestión, como la planificación de comidas, la gestión del tiempo y la resolución de problemas, para capacitar a los clientes para que tomen el control de su bienestar."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para fomentar la autonomía y la responsabilidad en la salud y el bienestar?",
                "respuestas" => [
                    "Facilitaría la toma de decisiones informadas, proporcionando información y recursos que permitan al cliente elegir las opciones que mejor se adapten a sus necesidades y preferencias individuales.",
                    "Promovería la autoevaluación y la reflexión sobre el progreso del cliente, ayudándoles a identificar áreas de fortaleza y oportunidades de mejora en su camino hacia el bienestar.",
                    "Fomentaría la celebración de logros personales y el reconocimiento de los esfuerzos del cliente para fortalecer su sentido de autonomía y responsabilidad en la gestión de su salud."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de información confidencial y privacidad en el contexto de salud y bienestar?",
                "respuestas" => [
                    "Cumpliría con las regulaciones y estándares de privacidad establecidos por las leyes de protección de datos, asegurando la confidencialidad y seguridad de la información del cliente en todo momento.",
                    "Solicitaría el consentimiento explícito del cliente antes de recopilar, almacenar o compartir cualquier información personal o médica confidencial.",
                    "Implementaría medidas de seguridad, como el cifrado de datos y el acceso restringido, para proteger la privacidad del cliente y prevenir el acceso no autorizado a su información."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para adaptar programas de bienestar a diferentes culturas y contextos socioeconómicos?",
                "respuestas" => [
                    "Investigaría y comprendería las necesidades y valores culturales de la población objetivo para adaptar los programas de bienestar de manera culturalmente sensible y relevante.",
                    "Colaboraría con líderes comunitarios y organizaciones locales para identificar barreras culturales y socioeconómicas que puedan afectar la participación y el acceso a los programas de bienestar.",
                    "Ofrecería opciones de programación flexibles y asequibles, así como materiales educativos en diferentes idiomas, para garantizar la accesibilidad y la inclusión de todos los miembros de la comunidad."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de programas de bienestar enfocados en la prevención de enfermedades crónicas?",
                "respuestas" => [
                    "He liderado programas de bienestar centrados en la prevención de enfermedades crónicas, trabajando con individuos y grupos para identificar factores de riesgo y promover cambios de estilo de vida saludables.",
                    "Mis programas han incluido educación sobre hábitos alimenticios, actividad física, manejo del estrés y prevención de hábitos nocivos como el tabaquismo y el consumo excesivo de alcohol.",
                    "He evaluado el impacto de estas intervenciones en la reducción del riesgo de enfermedades crónicas y la mejora de la salud general de los participantes."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la satisfacción de los clientes con los programas de bienestar?",
                "respuestas" => [
                    "Realizaría encuestas de satisfacción periódicas para recopilar retroalimentación sobre la experiencia del cliente y su percepción de los beneficios del programa de bienestar.",
                    "Facilitaría grupos de discusión y sesiones de retroalimentación para brindar a los participantes la oportunidad de expresar sus opiniones, preocupaciones y sugerencias de mejora.",
                    "Utilizaría métricas de retención y participación para evaluar indirectamente la satisfacción del cliente, observando la tasa de participación continua en el programa y la renovación de membresías."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la colaboración interdisciplinaria en el campo de la salud y el bienestar?",
                "respuestas" => [
                    "Considero que la colaboración interdisciplinaria es esencial para abordar las complejas necesidades de salud y bienestar de los individuos, ya que cada disciplina aporta una perspectiva única y complementaria.",
                    "Trabajaría en estrecha colaboración con profesionales de la salud, como médicos, nutricionistas, terapeutas físicos y psicólogos, para ofrecer un enfoque integral en la atención al cliente.",
                    "Valoraría la retroalimentación y la experiencia de otros profesionales para enriquecer mi propio enfoque y asegurar la calidad y efectividad de los programas de bienestar."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de la calidad y la mejora continua en los programas de bienestar?",
                "respuestas" => [
                    "Establecería estándares de calidad claros y medibles para evaluar la efectividad y el impacto de los programas de bienestar en la salud y el bienestar de los participantes.",
                    "Realizaría evaluaciones periódicas de los programas, recopilando datos sobre la satisfacción del cliente, los resultados de salud y el cumplimiento de los objetivos establecidos.",
                    "Utilizaría la retroalimentación del cliente y los resultados de las evaluaciones para identificar áreas de mejora y realizar ajustes en los programas de bienestar según sea necesario."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la investigación y evaluación de tendencias en salud y bienestar?",
                "respuestas" => [
                    "Me mantendría actualizado sobre las últimas investigaciones y tendencias en salud y bienestar a través de la revisión de literatura científica, la participación en conferencias y el seguimiento de publicaciones especializadas.",
                    "Utilizaría herramientas de análisis de datos para examinar patrones y tendencias en la salud y el bienestar de la población objetivo, identificando áreas de necesidad y oportunidades de intervención.",
                    "Fomentaría la colaboración con otros profesionales y expertos en el campo para intercambiar ideas, compartir conocimientos y contribuir al avance del campo de la salud y el bienestar."
                ]
            ]
        ];

        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 9,
            ]);
            $p = 10;
            foreach ($pregunta['respuestas'] as $respuesta) {

                DB::table('Answer')->insert([
                    'answer' => $respuesta,
                    'QuestionID' => $i,
                    'QuestionPoints' => $p,
                ]);
                $p -= 3;
            }
            $i++;
        }
        //Gobierno y administración pública
        $respuestas = [
            [
                "pregunta" => "¿Cuál es tu experiencia previa en el campo de gobierno y administración pública?",
                "respuestas" => [
                    "Tengo experiencia previa en el campo de gobierno y administración pública a través de pasantías y trabajos anteriores en instituciones gubernamentales.",
                    "He trabajado en diferentes proyectos relacionados con gobierno y administración pública durante mi carrera profesional.",
                    "No tengo experiencia directa en gobierno y administración pública, pero estoy interesado en aprender y contribuir en este campo."
                ]
            ],
            [
                "pregunta" => "¿Qué te motiva a trabajar en el sector público?",
                "respuestas" => [
                    "Me motiva la oportunidad de servir a la comunidad y contribuir al bienestar general de la sociedad.",
                    "Considero que el sector público ofrece la posibilidad de generar un impacto positivo a gran escala en la vida de las personas.",
                    "Valoro la estabilidad laboral y la oportunidad de trabajar en proyectos que tienen un propósito social significativo."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de políticas públicas en un entorno cambiante?",
                "respuestas" => [
                    "Adoptaría un enfoque flexible y adaptable, enfocándome en la recopilación de datos actualizados y la consulta con expertos en el campo.",
                    "Implementaría sistemas de monitoreo continuo para identificar cambios en el entorno y ajustar las políticas en consecuencia.",
                    "Promovería la colaboración interdisciplinaria y la participación de partes interesadas para abordar los desafíos emergentes de manera efectiva."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para promover la transparencia y la rendición de cuentas en la administración pública?",
                "respuestas" => [
                    "Establecería mecanismos de divulgación de información accesibles al público sobre las decisiones y acciones del gobierno.",
                    "Implementaría políticas de transparencia proactiva, incluyendo la publicación regular de informes financieros y de desempeño.",
                    "Fomentaría la participación ciudadana en la supervisión y evaluación de las actividades gubernamentales para garantizar la rendición de cuentas."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la participación ciudadana en la toma de decisiones gubernamentales?",
                "respuestas" => [
                    "Promovería la participación temprana de la comunidad en el proceso de toma de decisiones, brindando oportunidades para la retroalimentación y el diálogo.",
                    "Utilizaría herramientas de participación en línea y reuniones comunitarias para involucrar a una amplia gama de ciudadanos en el proceso de toma de decisiones.",
                    "Establecería mecanismos para garantizar que las voces de grupos marginados y minoritarios sean escuchadas y consideradas en las decisiones gubernamentales."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los programas y servicios gubernamentales?",
                "respuestas" => [
                    "Utilizaría indicadores de desempeño específicos y objetivos para evaluar el impacto de los programas y servicios en la comunidad.",
                    "Realizaría evaluaciones periódicas utilizando métodos cuantitativos y cualitativos, incluyendo encuestas de satisfacción y análisis de datos.",
                    "Solicitaría retroalimentación directa de los beneficiarios y partes interesadas para comprender mejor las necesidades y mejorar la efectividad de los programas."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para mejorar la eficiencia y la eficacia de la administración pública?",
                "respuestas" => [
                    "Implementaría procesos de revisión y simplificación de procedimientos administrativos para eliminar la burocracia innecesaria.",
                    "Promovería la capacitación y el desarrollo profesional del personal para mejorar sus habilidades y competencias.",
                    "Exploraría la adopción de tecnologías innovadoras para automatizar tareas repetitivas y mejorar la eficiencia operativa."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de presupuestos y recursos en el sector público?",
                "respuestas" => [
                    "Desarrollaría un plan de presupuesto basado en objetivos y prioridades estratégicas, asegurando una asignación eficiente de recursos.",
                    "Realizaría un seguimiento regular del gasto y los ingresos, ajustando el presupuesto según sea necesario para garantizar el cumplimiento de los objetivos.",
                    "Buscaría oportunidades de colaboración y financiamiento externo para maximizar los recursos disponibles y ampliar el impacto de los programas."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la gestión de proyectos y programas gubernamentales?",
                "respuestas" => [
                    "Utilizaría software de gestión de proyectos para planificar, organizar y monitorear el progreso de los proyectos gubernamentales.",
                    "Implementaría metodologías de gestión de proyectos como Agile o Scrum para adaptarse a los cambios y mejorar la entrega de resultados.",
                    "Establecería sistemas de seguimiento de indicadores clave de rendimiento (KPIs) para evaluar el éxito y la efectividad de los programas."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de relaciones con otras entidades gubernamentales y organizaciones internacionales?",
                "respuestas" => [
                    "He desarrollado relaciones sólidas con otras entidades gubernamentales y organizaciones internacionales a través de colaboraciones y proyectos conjuntos.",
                    "Participé en negociaciones y acuerdos interinstitucionales para coordinar acciones y compartir recursos en áreas de interés común.",
                    "Colaboré con representantes de organismos internacionales en la implementación de proyectos de desarrollo y asistencia técnica."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de crisis y situaciones de emergencia en el gobierno?",
                "respuestas" => [
                    "Desarrollaría un plan de gestión de crisis integral que incluya protocolos de respuesta, asignación de roles y comunicación efectiva.",
                    "Realizaría simulacros y ejercicios de preparación para crisis para garantizar una respuesta coordinada y eficiente en situaciones de emergencia.",
                    "Establecería equipos multidisciplinarios de respuesta rápida y coordinaría con agencias gubernamentales y organizaciones de ayuda externas."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la innovación y la tecnología en la administración pública?",
                "respuestas" => [
                    "Considero que la innovación y la tecnología son fundamentales para mejorar la eficiencia y la calidad de los servicios públicos.",
                    "Buscaría constantemente nuevas soluciones tecnológicas para optimizar procesos y proporcionar mejores servicios a los ciudadanos.",
                    "Promovería la colaboración con el sector privado y la academia para aprovechar las últimas tendencias tecnológicas en la administración pública."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de conflictos entre diferentes partes interesadas en el gobierno?",
                "respuestas" => [
                    "Fomentaría el diálogo abierto y la negociación entre las partes interesadas para encontrar soluciones mutuamente beneficiosas.",
                    "Facilitaría la mediación y el arbitraje para resolver disputas de manera pacífica y constructiva.",
                    "Buscaría compromisos y puntos en común entre las partes para llegar a acuerdos que satisfagan sus intereses."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión del talento y el desarrollo de capacidades en el sector público?",
                "respuestas" => [
                    "Implementaría programas de desarrollo profesional y capacitación para mejorar las habilidades y competencias del personal.",
                    "Fomentaría una cultura de aprendizaje continuo y reconocimiento del mérito para promover el crecimiento y la motivación del equipo.",
                    "Promovería la diversidad y la inclusión en la fuerza laboral, valorando las diferentes perspectivas y habilidades de los empleados."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para promover la igualdad de género y la inclusión en el gobierno?",
                "respuestas" => [
                    "Implementaría políticas de igualdad de género y medidas afirmativas para garantizar la representación equitativa de mujeres en puestos de liderazgo y toma de decisiones.",
                    "Crearía un entorno de trabajo inclusivo que celebre la diversidad y promueva la igualdad de oportunidades para todos los empleados.",
                    "Desarrollaría programas de sensibilización y capacitación sobre género y diversidad para promover la comprensión y el respeto mutuo en el lugar de trabajo."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de las políticas de desarrollo económico y social?",
                "respuestas" => [
                    "Analizaría indicadores económicos y sociales clave para evaluar el impacto de las políticas en la reducción de la pobreza, la desigualdad y el desarrollo sostenible.",
                    "Realizaría evaluaciones de impacto y análisis costo-beneficio para medir el éxito de las políticas en la mejora del bienestar de la población.",
                    "Consultaría a expertos y partes interesadas para obtener retroalimentación sobre la implementación y efectividad de las políticas."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la implementación de programas de desarrollo comunitario?",
                "respuestas" => [
                    "He liderado la implementación de varios programas de desarrollo comunitario en colaboración con organizaciones locales y líderes comunitarios.",
                    "Participé en proyectos de desarrollo que involucraron la capacitación de líderes locales y el empoderamiento de la comunidad para abordar sus propias necesidades.",
                    "Contribuí a la creación de redes de apoyo y recursos para fortalecer la capacidad de las comunidades para enfrentar desafíos sociales y económicos."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la planificación urbana y el desarrollo sostenible?",
                "respuestas" => [
                    "Desarrollaría planes de desarrollo urbano integral que promuevan la sostenibilidad ambiental, social y económica.",
                    "Involucraría a la comunidad en el proceso de planificación urbana para asegurar que sus necesidades y preocupaciones sean consideradas.",
                    "Implementaría políticas de uso del suelo y transporte público que fomenten un crecimiento urbano ordenado y sostenible."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para mejorar la participación electoral y la representación política?",
                "respuestas" => [
                    "Promovería la educación cívica y la conciencia pública sobre la importancia del voto y la participación política.",
                    "Implementaría medidas para eliminar barreras al voto y garantizar la representación equitativa de todos los sectores de la sociedad.",
                    "Fomentaría la participación de jóvenes, mujeres y grupos minoritarios en el proceso político mediante programas de capacitación y empoderamiento."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de riesgos y la seguridad en el sector público?",
                "respuestas" => [
                    "Realizaría evaluaciones de riesgos periódicas para identificar amenazas potenciales y desarrollar planes de mitigación.",
                    "Implementaría medidas de seguridad física y cibernética para proteger los activos y datos del gobierno contra posibles ataques.",
                    "Establecería protocolos de respuesta rápida y coordinación interinstitucional para hacer frente a emergencias y situaciones de crisis."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la educación cívica y la conciencia pública?",
                "respuestas" => [
                    "Considero que la educación cívica y la conciencia pública son fundamentales para el funcionamiento de una sociedad democrática.",
                    "Promovería la educación cívica desde una edad temprana en las escuelas para cultivar ciudadanos informados y comprometidos.",
                    "Facilitaría actividades de participación cívica y debates públicos para fomentar la conciencia sobre los derechos y responsabilidades ciudadanas."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los programas de seguridad social y protección social?",
                "respuestas" => [
                    "Analizaría indicadores de bienestar social y económico para evaluar el impacto de los programas en la reducción de la pobreza y la desigualdad.",
                    "Realizaría estudios de seguimiento y encuestas de satisfacción para obtener retroalimentación de los beneficiarios sobre la calidad y eficacia de los programas.",
                    "Consultaría a expertos en políticas sociales y grupos comunitarios para evaluar el alcance y la relevancia de los programas de seguridad social."
                ]
            ],

        ];


        //GOBIERNO Y ADMINISTRACION PUBLICA
        $respuestas = [
            [
                "pregunta" => "¿Cuál es tu experiencia previa en el campo de gobierno y administración pública?",
                "respuestas" => [
                    "Tengo experiencia previa en el campo de gobierno y administración pública trabajando en diferentes proyectos y programas gubernamentales.",
                    "He trabajado en varios niveles de gobierno, incluyendo local, estatal/provincial y nacional, desarrollando políticas y gestionando programas.",
                    "Aunque no tengo experiencia directa en gobierno y administración pública, he participado en proyectos comunitarios y estoy interesado en contribuir al sector público."
                ]
            ],
            [
                "pregunta" => "¿Qué te motiva a trabajar en el sector público?",
                "respuestas" => [
                    "Me motiva la oportunidad de servir a la comunidad y contribuir al bienestar social a través de políticas y programas públicos.",
                    "Creo en la importancia del servicio público para el desarrollo y la equidad de la sociedad.",
                    "Quiero trabajar en el sector público porque creo que puedo hacer una diferencia positiva en la vida de las personas y en el desarrollo de políticas que beneficien a todos."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de políticas públicas en un entorno cambiante?",
                "respuestas" => [
                    "Abordaría la gestión de políticas públicas en un entorno cambiante manteniéndome informado sobre las tendencias y necesidades actuales.",
                    "Fomentaría la flexibilidad y la adaptabilidad en el proceso de toma de decisiones para responder de manera efectiva a los cambios.",
                    "Promovería la participación de diferentes partes interesadas y la colaboración intersectorial para abordar los desafíos de manera integral."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para promover la transparencia y la rendición de cuentas en la administración pública?",
                "respuestas" => [
                    "Implementaría políticas de transparencia activa, como la publicación de información relevante en línea y la facilitación del acceso a los registros públicos.",
                    "Promovería la rendición de cuentas a través de auditorías regulares y la divulgación transparente de los resultados.",
                    "Fomentaría una cultura de apertura y honestidad dentro de la administración pública, donde los funcionarios sean responsables de sus acciones."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la participación ciudadana en la toma de decisiones gubernamentales?",
                "respuestas" => [
                    "Fomentaría la participación ciudadana a través de consultas públicas, audiencias y foros comunitarios para recopilar opiniones y retroalimentación.",
                    "Utilizaría herramientas digitales y plataformas en línea para facilitar la participación y el acceso a la información gubernamental.",
                    "Promovería la inclusión de grupos minoritarios y marginados en el proceso de toma de decisiones para garantizar una representación equitativa."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los programas y servicios gubernamentales?",
                "respuestas" => [
                    "Utilizaría indicadores de desempeño y evaluaciones periódicas para medir el impacto y la eficacia de los programas gubernamentales.",
                    "Recopilaría datos cualitativos y cuantitativos para evaluar la satisfacción del usuario y los resultados alcanzados.",
                    "Realizaría análisis comparativos con programas similares a nivel nacional e internacional para identificar mejores prácticas y áreas de mejora."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para mejorar la eficiencia y la eficacia de la administración pública?",
                "respuestas" => [
                    "Implementaría tecnologías de la información y comunicación (TIC) para automatizar procesos y mejorar la gestión de datos.",
                    "Promovería la capacitación y el desarrollo profesional del personal para mejorar sus habilidades y competencias.",
                    "Optimizaría la estructura organizativa y los flujos de trabajo para eliminar duplicaciones y burocracia innecesaria."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de presupuestos y recursos en el sector público?",
                "respuestas" => [
                    "Desarrollaría presupuestos basados en resultados y prioridades estratégicas para asignar recursos de manera eficiente.",
                    "Realizaría un seguimiento constante del gasto y los recursos para garantizar la transparencia y la rendición de cuentas.",
                    "Buscaría oportunidades de financiamiento externo y colaboraciones público-privadas para maximizar los recursos disponibles."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la gestión de proyectos y programas gubernamentales?",
                "respuestas" => [
                    "Utilizaría herramientas de gestión de proyectos como diagramas de Gantt, matrices de riesgos y software de seguimiento de tareas.",
                    "Implementaría metodologías de gestión ágil para proyectos complejos que requieran flexibilidad y adaptabilidad.",
                    "Fomentaría la colaboración interdepartamental y la comunicación transparente para garantizar el éxito de los proyectos."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de relaciones con otras entidades gubernamentales y organizaciones internacionales?",
                "respuestas" => [
                    "Tengo experiencia en la coordinación y colaboración con otras entidades gubernamentales en proyectos y programas conjuntos.",
                    "He representado a mi organización en reuniones y negociaciones con organizaciones internacionales para asegurar el cumplimiento de acuerdos y compromisos.",
                    "Aunque no tengo experiencia directa, estoy familiarizado con los protocolos y procedimientos para establecer relaciones efectivas en el ámbito gubernamental."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de crisis y situaciones de emergencia en el gobierno?",
                "respuestas" => [
                    "Desarrollaría planes de contingencia y protocolos de respuesta para diferentes escenarios de crisis.",
                    "Coordinaría con agencias de respuesta a emergencias y otras partes interesadas para garantizar una respuesta eficaz y coordinada.",
                    "Comunicaría de manera clara y oportuna con el público y los medios de comunicación para mantener la calma y proporcionar información precisa."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la innovación y la tecnología en la administración pública?",
                "respuestas" => [
                    "Considero que la innovación y la tecnología son fundamentales para mejorar la eficiencia y la calidad de los servicios gubernamentales.",
                    "Promovería la adopción de tecnologías emergentes como inteligencia artificial y análisis de datos para optimizar procesos y tomar decisiones informadas.",
                    "Invertiría en capacitación y desarrollo tecnológico del personal para asegurar una implementación efectiva y sostenible de soluciones innovadoras."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de conflictos entre diferentes partes interesadas en el gobierno?",
                "respuestas" => [
                    "Facilitaría el diálogo y la negociación entre las partes interesadas para encontrar soluciones mutuamente beneficiosas.",
                    "Utilizaría técnicas de mediación y resolución de conflictos para abordar las diferencias de manera constructiva.",
                    "Promovería la inclusión y la representación equitativa en el proceso de toma de decisiones para evitar conflictos futuros."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión del talento y el desarrollo de capacidades en el sector público?",
                "respuestas" => [
                    "Priorizaría el desarrollo profesional y el crecimiento personal del personal a través de programas de formación y capacitación.",
                    "Implementaría sistemas de evaluación del desempeño y planes de carrera para retener y motivar al talento.",
                    "Fomentaría una cultura de aprendizaje continuo y mentoría dentro de la organización para promover el desarrollo de capacidades."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para promover la igualdad de género y la inclusión en el gobierno?",
                "respuestas" => [
                    "Implementaría políticas de igualdad de género y programas de empoderamiento de la mujer para eliminar las disparidades y promover la equidad.",
                    "Fomentaría la diversidad y la inclusión en todos los niveles de la organización a través de acciones afirmativas y políticas de reclutamiento.",
                    "Crearía un entorno de trabajo seguro y respetuoso que promueva la igualdad de oportunidades para todos."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de las políticas de desarrollo económico y social?",
                "respuestas" => [
                    "Analizaría indicadores económicos y sociales clave para medir el progreso y el impacto de las políticas de desarrollo.",
                    "Realizaría evaluaciones de impacto para comprender cómo las políticas afectan a diferentes grupos demográficos y áreas geográficas.",
                    "Recopilaría retroalimentación de partes interesadas y expertos para identificar áreas de mejora y ajustar las políticas según sea necesario."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la implementación de programas de desarrollo comunitario?",
                "respuestas" => [
                    "He liderado la implementación de programas de desarrollo comunitario en áreas urbanas y rurales, trabajando en colaboración con residentes y organizaciones locales.",
                    "He participado como voluntario en proyectos de desarrollo comunitario, ayudando a identificar necesidades y diseñar soluciones sostenibles.",
                    "Aunque no tengo experiencia directa, estoy interesado en aprender y contribuir al desarrollo comunitario en el ámbito gubernamental."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de la planificación urbana y el desarrollo sostenible?",
                "respuestas" => [
                    "Promovería un enfoque integral de la planificación urbana que tenga en cuenta consideraciones sociales, económicas y ambientales.",
                    "Involucraría a la comunidad en el proceso de planificación para asegurar que las decisiones reflejen las necesidades y aspiraciones locales.",
                    "Implementaría políticas de desarrollo sostenible que fomenten el crecimiento económico equitativo y la conservación de recursos naturales."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para mejorar la participación electoral y la representación política?",
                "respuestas" => [
                    "Implementaría campañas de concienciación y educación cívica para promover la participación electoral y el voto informado.",
                    "Adoptaría medidas para eliminar barreras al acceso al voto y asegurar una representación equitativa de diferentes grupos en el proceso político.",
                    "Fomentaría la participación ciudadana en la toma de decisiones y la elaboración de políticas para fortalecer la democracia participativa."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de riesgos y la seguridad en el sector público?",
                "respuestas" => [
                    "Realizaría evaluaciones de riesgos periódicas y desarrollaría planes de mitigación para abordar posibles amenazas y vulnerabilidades.",
                    "Colaboraría con agencias de seguridad y expertos en gestión de riesgos para implementar mejores prácticas y salvaguardar los activos públicos.",
                    "Promovería una cultura de seguridad y sensibilización entre el personal para prevenir incidentes y responder eficazmente en caso de emergencia."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la educación cívica y la conciencia pública?",
                "respuestas" => [
                    "Considero que la educación cívica es fundamental para fortalecer la democracia y empoderar a los ciudadanos para participar activamente en la vida política.",
                    "Promovería programas de educación cívica en escuelas y comunidades para fomentar el entendimiento de los derechos y responsabilidades ciudadanas.",
                    "Invertiría en campañas de conciencia pública para aumentar la participación en procesos democráticos y fortalecer la confianza en las instituciones gubernamentales."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los programas de seguridad social y protección social?",
                "respuestas" => [
                    "Analizaría indicadores de bienestar y calidad de vida para evaluar el impacto de los programas de seguridad social.",
                    "Realizaría estudios de seguimiento y evaluación para comprender cómo los programas afectan a la pobreza, la desigualdad y otros indicadores sociales clave.",
                    "Recopilaría retroalimentación de beneficiarios y partes interesadas para identificar áreas de mejora y garantizar la relevancia y eficacia de los programas."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de políticas de salud pública y bienestar?",
                "respuestas" => [
                    "Priorizaría la prevención y promoción de la salud a través de programas de educación, vacunación y acceso equitativo a servicios de atención médica.",
                    "Colaboraría con profesionales de la salud y organizaciones comunitarias para abordar los determinantes sociales de la salud y reducir las disparidades.",
                    "Promovería políticas de bienestar integral que aborden no solo la salud física, sino también la salud mental y el bienestar emocional de la población."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la gestión de datos y análisis en el gobierno?",
                "respuestas" => [
                    "Utilizaría software de análisis de datos y visualización para identificar tendencias, patrones y áreas de oportunidad.",
                    "Implementaría sistemas de gestión de bases de datos seguros y eficientes para almacenar y acceder a información gubernamental.",
                    "Fomentaría la capacitación del personal en habilidades de análisis de datos para aprovechar al máximo la información disponible."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de la infraestructura y los servicios públicos?",
                "respuestas" => [
                    "Desarrollaría planes de infraestructura a largo plazo que aborden las necesidades actuales y futuras de la comunidad.",
                    "Implementaría tecnologías de mantenimiento predictivo para garantizar la fiabilidad y disponibilidad de los servicios públicos.",
                    "Involucraría a la comunidad en la planificación y gestión de la infraestructura para asegurar que los proyectos satisfagan las necesidades locales."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para promover la justicia y el estado de derecho en el gobierno?",
                "respuestas" => [
                    "Fortalecería las instituciones judiciales y promovería el acceso igualitario a la justicia para todos los ciudadanos.",
                    "Implementaría políticas de prevención del delito y rehabilitación para abordar las causas subyacentes de la delincuencia.",
                    "Fomentaría una cultura de legalidad y respeto por el estado de derecho a través de programas educativos y campañas de sensibilización."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de crisis políticas y sociales?",
                "respuestas" => [
                    "He gestionado crisis políticas y sociales en mi trabajo anterior, colaborando con diferentes partes interesadas para encontrar soluciones pacíficas y duraderas.",
                    "He participado en la gestión de crisis como voluntario en organizaciones de ayuda humanitaria, coordinando respuestas de emergencia y distribución de ayuda.",
                    "Aunque no tengo experiencia directa, estoy familiarizado con los protocolos y procedimientos para abordar crisis políticas y sociales de manera efectiva."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de políticas de medio ambiente y sostenibilidad?",
                "respuestas" => [
                    "Priorizaría la protección y conservación del medio ambiente a través de políticas de conservación de recursos naturales y reducción de la contaminación.",
                    "Promovería la adopción de prácticas sostenibles en todos los niveles de la administración pública, desde la gestión de residuos hasta el transporte público.",
                    "Involucraría a la comunidad en la toma de decisiones sobre cuestiones ambientales y promovería la educación ambiental para fomentar la conciencia y la acción."
                ]
            ],
            [
                "pregunta" => "¿Qué estrategias usarías para promover la innovación y la competitividad en el gobierno?",
                "respuestas" => [
                    "Fomentaría la colaboración con el sector privado, la academia y la sociedad civil para impulsar la investigación y el desarrollo de tecnologías innovadoras.",
                    "Implementaría incentivos y premios para estimular la creatividad y la innovación entre el personal gubernamental.",
                    "Facilitaría el acceso a fondos y recursos para proyectos innovadores que mejoren la eficiencia y la calidad de los servicios públicos."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de las políticas de seguridad nacional y defensa?",
                "respuestas" => [
                    "Utilizaría indicadores de seguridad nacional y análisis de inteligencia para evaluar el nivel de amenazas y riesgos para el país.",
                    "Realizaría evaluaciones de capacidades militares y de defensa para garantizar la preparación y respuesta adecuadas ante posibles escenarios.",
                    "Recopilaría retroalimentación de expertos en seguridad y ciudadanos para evaluar la percepción pública y la eficacia de las políticas de seguridad."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu enfoque para la gestión de políticas de igualdad racial y étnica?",
                "respuestas" => [
                    "Implementaría políticas de acción afirmativa y programas de inclusión para abordar las disparidades raciales y étnicas en el acceso a oportunidades y servicios.",
                    "Fomentaría la diversidad y la representación equitativa en todos los niveles de la administración pública para reflejar la pluralidad de la sociedad.",
                    "Trabajaría en colaboración con comunidades minoritarias y organizaciones de derechos civiles para desarrollar estrategias específicas de inclusión y empoderamiento."
                ]
            ],
            [
                "pregunta" => "¿Qué herramientas utilizas para la gestión de la comunicación y la participación ciudadana?",
                "respuestas" => [
                    "Utilizaría medios de comunicación tradicionales y digitales para difundir información gubernamental y promover la participación ciudadana.",
                    "Implementaría plataformas en línea y redes sociales para facilitar el diálogo y la interacción entre el gobierno y los ciudadanos.",
                    "Organizaría eventos y actividades de participación pública para involucrar a la comunidad en la toma de decisiones y la elaboración de políticas."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de la diversidad cultural y lingüística en el gobierno?",
                "respuestas" => [
                    "Promovería la inclusión y la sensibilidad cultural en todos los aspectos de la administración pública, desde el reclutamiento hasta la prestación de servicios.",
                    "Proporcionaría servicios y materiales en varios idiomas para garantizar el acceso equitativo a la información y los servicios gubernamentales.",
                    "Facilitaría la formación y el desarrollo de competencias interculturales entre el personal para promover un ambiente de trabajo inclusivo y respetuoso."
                ]
            ],
            [
                "pregunta" => "¿Qué importancia le das a la colaboración intersectorial y la asociación público-privada en el gobierno?",
                "respuestas" => [
                    "Considero que la colaboración intersectorial y las asociaciones público-privadas son fundamentales para abordar desafíos complejos y promover el desarrollo sostenible.",
                    "Trabajaría en colaboración con empresas, organizaciones sin fines de lucro y otros actores para aprovechar recursos y conocimientos complementarios.",
                    "Fomentaría un marco normativo claro y transparente para regular las asociaciones público-privadas y garantizar resultados equitativos y beneficiosos para todos."
                ]
            ],
            [
                "pregunta" => "¿Cómo evalúas la efectividad de los programas de combate a la corrupción y el mal uso de fondos públicos?",
                "respuestas" => [
                    "Realizaría auditorías y revisiones periódicas para detectar posibles irregularidades y malversación de fondos públicos.",
                    "Promovería la transparencia y el acceso a la información sobre el uso de fondos públicos para aumentar la rendición de cuentas.",
                    "Fomentaría la participación ciudadana y la denuncia de actos de corrupción para fortalecer los mecanismos de control y prevención."
                ]
            ],
            [
                "pregunta" => "¿Cuál es tu experiencia en la gestión de políticas de migración y refugiados?",
                "respuestas" => [
                    "He trabajado en la gestión de políticas de migración y refugiados en contextos nacionales e internacionales, colaborando con agencias gubernamentales y organizaciones humanitarias.",
                    "He participado como voluntario en proyectos de asistencia a refugiados, proporcionando apoyo y recursos para su integración.",
                    "Aunque no tengo experiencia directa, estoy familiarizado con los desafíos y las mejores prácticas en la gestión de políticas de migración y refugiados."
                ]
            ],
            [
                "pregunta" => "¿Cómo abordarías la gestión de políticas de igualdad de género y empoderamiento de la mujer?",
                "respuestas" => [
                    "Implementaría políticas y programas específicos para promover la igualdad de género y eliminar la discriminación en todas las áreas de la sociedad.",
                    "Promovería la participación activa de las mujeres en la toma de decisiones y el liderazgo político, económico y social.",
                    "Trabajaría en colaboración con organizaciones de la sociedad civil y el sector privado para abordar las causas subyacentes de la desigualdad de género y promover el empoderamiento de las mujeres."
                ]
            ],
            [
                "pregunta" => "¿Qué medidas tomarías para promover la participación juvenil y el desarrollo de liderazgo en el gobierno?",
                "respuestas" => [
                    "Crearía programas de mentoría y pasantías para involucrar a los jóvenes en la vida política y la administración pública.",
                    "Fomentaría la participación de jóvenes en procesos de toma de decisiones y la elaboración de políticas a través de consejos juveniles y plataformas de participación.",
                    "Promovería la educación cívica y el desarrollo de habilidades de liderazgo entre los jóvenes para prepararlos para roles de liderazgo en el futuro."
                ]
            ],
            [
                "pregunta" => "¿Cómo manejas la gestión de crisis sanitarias y pandemias en el gobierno?",
                "respuestas" => [
                    "Desarrollaría planes de preparación y respuesta para crisis sanitarias y pandemias, basados en las mejores prácticas y las recomendaciones de expertos en salud pública.",
                    "Coordinaría con autoridades de salud locales, nacionales e internacionales para garantizar una respuesta integral y coordinada.",
                    "Comunicaría de manera clara y transparente con el público sobre medidas preventivas, recursos disponibles y actualizaciones sobre la situación epidemiológica."
                ]
            ],
        ];


        foreach ($preguntas as $pregunta) {
            DB::table('Question')->insert([
                'question' => $pregunta,
                'CategoryId' => 10,
            ]);
            $p = 10;
            foreach ($pregunta['respuestas'] as $respuesta) {

                DB::table('Answer')->insert([
                    'answer' => $respuesta,
                    'QuestionID' => $i,
                    'QuestionPoints' => $p,
                ]);
                $p -= 3;
            }
            $i++;
        }
    }
}
