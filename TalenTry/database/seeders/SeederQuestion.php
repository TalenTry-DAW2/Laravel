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
