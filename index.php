<?php
    session_start();
    include 'BD_config.php';     
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorias UPSLP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <form method="POST" id="signup-form" class="signup-form" action="#">
                <div>
                    <h3>Semestre anterior</h3>
                    <fieldset>
                        <h2> Análisis del semestre anterior</h2>
                        <p class="desc"></p>
                        <div class="fieldset-content">
                            <div class="form-row">

                                <div class="form-flex">
                                    <div class="form-group">
                                        <label class="form-label">Nombre del estudiante</label>
                                        <input type="text" name="nombre" id="nombre" />
                                        <span class="text-input"></span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">

                                <div class="form-flex">
                                    <div class="form-group">
                                        <label class="form-label">Matrícula</label>
                                        <input type="text" name="matricula" id="matricula" />
                                        <span class="text-input"></span>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Carrera</label>
                                        <input type="text" name="carrera" id="carrera" />
                                        <span class="text-input"></span>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Semestre</label>
                                        <input type="text" name="semestre" id="semestre" />
                                        <span class="text-input"></span>
                                        
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Ciclo escolar</label>
                                        <input type="text" name="ciclo" id="ciclo" />
                                        <span class="text-input"></span>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <br><p class="desc">Evaluación de la situación académica del semestre anterior</p>
                                <label class="form-label">Materias</label>
                                <div class="form-flex">
                                    <div class="form-group">
                                        
                                        <label class="form-label">Nombre</label>
                                        <input type="text" name="materia1" id="materia1" placeholder="Materia 1" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia2" id="materia2" placeholder="Materia 2"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia3" id="materia3" placeholder="Materia 3"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia4" id="materia4" placeholder="Materia 4"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia5" id="materia5" placeholder="Materia 5"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia6" id="materia6" placeholder="Materia 6"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia7" id="materia7" placeholder="Materia 7"/>
                                        <span class="text-input"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Calificación final obtenida</label>
                                        <input type="text" name="materia1_cal" id="materia1_cal" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia2_cal" id="materia2_cal" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia3_cal" id="materia3_cal" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia4_cal" id="materia4_cal" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia5_cal" id="materia5_cal" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia6_cal" id="materia6_cal" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia7_cal" id="materia7_cal" />
                                        <span class="text-input"></span>
                                        
                                    </div>

                                    <div class="form-group">
                                        
                                        <label class="form-label">Grado de dificultad</label>
                                        <input type="text" name="materia1_dif" id="materia1_dif" placeholder="Difícil / Normal / Fácil" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia2_dif" id="materia2_dif" placeholder="Difícil / Normal / Fácil" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia3_dif" id="materia3_dif" placeholder="Difícil / Normal / Fácil" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia4_dif" id="materia4_dif" placeholder="Difícil / Normal / Fácil" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia5_dif" id="materia5_dif" placeholder="Difícil / Normal / Fácil" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia6_dif" id="materia6_dif" placeholder="Difícil / Normal / Fácil" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia7_dif" id="materia7_dif" placeholder="Difícil / Normal / Fácil"/>
                                        <span class="text-input"></span>
                                        
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-flex">
                                    
                                    <div class="form-group">
                                        <label class="form-label">Preferencia</label>
                                        <input type="text" name="materia1_pref" id="materia1_pref" placeholder="Materia 1"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia2_pref" id="materia2_pref" placeholder="Materia 2"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia3_pref" id="materia3_pref" placeholder="Materia 3"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia4_pref" id="materia4_pref" placeholder="Materia 4"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia5_pref" id="materia5_pref" placeholder="Materia 5"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia6_pref" id="materia6_pref" placeholder="Materia 6"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia7_pref" id="materia7_pref" placeholder="Materia 7"/>
                                        <span class="text-input"></span>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Tiempo dedicado</label>
                                        <input type="text" name="materia1_tiempo" id="materia1_tiempo" placeholder="Suficiente / Poco / Normal / Nada"/>
                                        <span class="text-input"></span>
                                        <input type="text" name="materia2_tiempo" id="materia2_tiempo" placeholder="Suficiente / Poco / Normal / Nada" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia3_tiempo" id="materia3_tiempo" placeholder="Suficiente / Poco / Normal / Nada" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia4_tiempo" id="materia4_tiempo" placeholder="Suficiente / Poco / Normal / Nada" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia5_tiempo" id="materia5_tiempo" placeholder="Suficiente / Poco / Normal / Nada" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia6_tiempo" id="materia6_tiempo" placeholder="Suficiente / Poco / Normal / Nada" />
                                        <span class="text-input"></span>
                                        <input type="text" name="materia7_tiempo" id="materia7_tiempo" placeholder="Suficiente / Poco / Normal / Nada" />
                                        <span class="text-input"></span>
                                        
                                    </div>

                                    
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-flex">
                                    <div class="form-group">
                                        <br><br><br>
                                        <label for="email" class="form-label">Las calificaciones obtenidas al final del semestre anterior ¿Corresponden al esfuerzo realizado?</label>
                                <input type="text" name="esfuerzo" id="esfuerzo" />
                                <span class="text-input"> Si / No </span>
                                        
                                    </div>
                                    <div class="form-group">
                                        <br><br><br><br><br><label class="form-label">¿Por qué?</label>
                                        <input type="text" name="esfuerzo_xq" id="esfuerzo_xq" />
                                        <span class="text-input"></span>
                                        
                                    </div>                              
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="form-label">En algún momento del semestre anterior, sentiste que disminuiste tu rendimiento académico</label>
                                <input type="text" name="rendimiento" id="rendimiento" />
                                <span class="text-input">Si / No </span>
                            </div>
                            <br><p class="desc">Diagnóstico general de la situación académica del estudiante </p>
                            <div class="form-group">
                                <label for="ssn" class="form-label">Describa la situación identificada que afecta al estudiante </label>
                                <input type="text" name="situación_identificada" id="situación_identificada" />
                                <span class="text-input">Disposición y motivacion al trabajo academico / Algunas materias reprobadas / Está recursando materias / Estudiante condicionado / Deficientes hábitos y técnicas de estudio / Problemas familiares / Escasos recursos económicos  / Otras situaciones ¿Cuáles? </span>
                            </div>
                        </div>
                    </fieldset>

                    <h3>Semestre en curso</h3>
                    <fieldset>
                        <br><br><br><h2>Propósitos y líneas de acción para este semestre que inicia</h2>
                        <br><br><p class="desc">Plan de acción tutorial</p>
                        <div class="fieldset-content">
                            <div class="form-group">
                                <br><br><label for="ssn" class="form-label">¿Qué alternativas sugiere el tutelado para entender la problemática académica que enfrenta? (materias atrasadas, reprobadas, bajo aprovechamiento escolar, etc.) </label>
                                <input type="text" name="alternativas" id="alternativas" />
                                <span class="text-input">Administración del tiempo / Repasar materias / Participar en círculos de estudio / Asistir a asesorías / Realizar ejercicios sobre los contenidos / Cursar verano / Otras ¿cuáles? </span>
                            </div>

                            <div class="form-group">
                                <br><br><label for="ssn" class="form-label">¿Qué recomendaciones sugiere el tutor sobre el diseño de ruta de materias pendientes de aprobar?</label>
                                <input type="text" name="recomendaciones" id="recomendaciones" />
                                <span class="text-input">Apoyarse en el mapa curricular de la carrera:</span>
                                <span class="url">https://upslpedu-my.sharepoint.com/:i:/g/personal/180013_upslp_edu_mx/EapR7EaNBIFJjsi0l2EKd8wBatANxS5U8LO2pkLqCZxcyw?e=6POpHU</span>
                            </div><br><br>

                            <div class="form-group">
                                <br><br><label for="ssn" class="form-label">¿Qué talleres o cursos se sugieren para apoyar al estudiante? </label>
                                <input type="text" name="talleres" id="talleres" />
                                <span class="text-input">Ciencias / Matemáticas  / Inglés  / Métodos de estudio  / Asesoría asignaturas específicas ¿cuál? / Otros ¿cuáles?</span>
                                
                            </div>

                             <div class="form-group">
                                <br><br><label for="ssn" class="form-label">Otro tipo de atención requerida por el estudiante tutelado </label>
                                <input type="text" name="atencion" id="atencion" />
                                <span class="text-input">Psicopedagogía   /  Servicios de salud   /  Trabajo social / Becas  / Otros ¿cuáles? </span>
                                
                            </div> 

                            <br><br><br><br><p class="desc">Establecimiento de compromisos</p>
                            <div class="form-group">
                                <br><br><label for="ssn" class="form-label">Compromisos con los estudiantes </label>
                                <input type="text" name="compromisos_estudiante" id="compromisos_estudiante" />
                                <span class="text-input">Dedicación en el estudio / Cumplir con tareas / Asistir a clases / Entregar trabajos a tiempo / Asistir a asesorias / Integrar círculos de estudio / Otros: ¿cuáles? </span>
                                
                            </div>

                             <div class="form-group">
                                <br><br><label for="ssn" class="form-label">Compromisos del profesor al tutor</label>
                                <input type="text" name="compromisos_profesor" id="compromisos_profesor" />
                                <span class="text-input">Seguimiento al estudiante  /  Gestionar apoyos  /  Dar asesorías a los estudiantes  /  Brindar información oportuna  / Otros ¿cuáles? </span>
                                
                            </div> 

                        </div>
                    </fieldset>

                    <h3>Espectativas</h3>
                    <fieldset>
                        <br><br><br><br><h2>Expectativas del estudiante</h2>
                        
                        <br><p class="desc">A continuación, describir las expectativas del estudiante</p>
                            <div class="form-group">
                                <br><br><label for="ssn" class="form-label">Status del estudiante </label>
                                <input type="text" name="expectativas" id="expectativas" />
                                <span class="text-input">Regular  /  Irregular </span>
                                
                            </div>

                             <div class="form-group">
                                <br><br><label for="ssn" class="form-label">Los semestres cursados ¿te permiten confirmar tus expectativas sobre la carrera? </label>
                                <input type="text" name="semestre_expectativas" id="semestre_expectativas" />
                                <span class="text-input">Si / No</span>
                                
                            </div> 
                            <div class="form-group">
                                <br><br><label for="ssn" class="form-label">¿Por qué? </label>
                                <input type="text" name="semestre_expectativas_xq" id="semestre_expectativas_xq" />
                                
                                
                            </div> 
                            <div class="form-group">
                                <br><br><label for="ssn" class="form-label">¿Consideras que existen obstáculos que impidan continuar con tus estudios? </label>
                                <input type="text" name="obstaculos" id="obstaculos" />
                                <span class="text-input">Si / No</span>
                                
                                
                            </div> 

                            <div class="form-group">
                                <br><br><label for="ssn" class="form-label">¿Cuáles? </label>
                                <input type="text" name="obstaculo_1" id="obstaculo_1" />
                                <input type="text" name="obstaculo_2" id="obstaculo_2" />
                                <input type="text" name="obstaculo_3" id="obstaculo_3" />
                            </div> 

                            <div class="form-group">
                                <br><br><label for="ssn" class="form-label">¿Cuáles son las metas que van configurando tu proyecto de vida? </label>
                                <input type="text" name="meta_corto" id="meta_corto" />
                                <span class="text-input">CORTO (durante estos próximos 6 meses)</span>
                                <input type="text" name="meta_mediano" id="meta_mediano" />
                                <span class="text-input">MEDIANO (1 año) </span>
                                <input type="text" name="meta_largo" id="meta_largo" />
                                <span class="text-input">LARGO (3 años) </span>
                            </div> 
                    </fieldset>
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="vendor/minimalist-picker/dobpicker.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="js/main.js"></script>
</body>

</html>