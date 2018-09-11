@extends('tfc.web.layout')

@section('page-heading')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="page-heading__title">Inscripciones  <span class="highlight">Futbol Amateur</span></h1>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="site-content">
        <div class="container">

            <!-- Contact Area -->
            <div class="card">
                <header class="card__header">
                    <h4>Inscripcion a Torneos</h4>
                </header>
                <div class="card__content">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="info-block__item">
                                <svg role="img" class="df-icon df-icon--soccer-ball">
                                    <use xlink:href="{{ asset('assets/images/icons-soccer.svg#soccer-ball') }}"/>
                                </svg>
                                <h6 class="info-block__heading"><font color="#000000">The Futbol Company</font></h6>
                                <h6 class="info-block__heading"><font color="#000000">(011)-2105.3478</font></h6>
                                <a class="info-block__link" href="mailto:info@thefutbolcompany.com">info@thefutbolcompany.com</a>
                            </div>

                            <div class="info-block__item">
                                <svg role="img" class="df-icon df-icon--soccer-ball">
                                    <use xlink:href="{{ asset('assets/images/icons-soccer.svg#soccer-ball') }}"/>
                                </svg>
                                <h6 class="info-block__heading"><font color="#000000">Torneos</font></h6>
                                <h6 class="info-block__heading"><font color="#000000">(011)-2105.3478</font></h6>
                                <a class="info-block__link" href="mailto:info@thefutbolcompany.com">sergio@thefutbolcompany.com </a>
                            </div>

                            <div class="info-block__item">
                                <svg role="img" class="df-icon df-icon--soccer-ball">
                                    <use xlink:href="{{ asset('assets/images/icons-soccer.svg#soccer-ball') }}"/>
                                </svg>
                                <h6 class="info-block__heading"><font color="#000000">Inscripciones</font></h6>
                                <h6 class="info-block__heading"><font color="#000000">(011)-2105.3478</font></h6>
                                <a class="info-block__link" href="mailto:info@thefutbolcompany.com">juga@thefutbolcompany.com </a>
                            </div>


                        </div>
                        <div class="col-md-8">

                            <!-- Contact Form --> 

                                {!! Form::open(['route'=>'postRegistration','class' => 'contact-form','files' => true]) !!}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact-form-apellido">Apellido <span class="required">*</span></label>
                                            {!! Form::text('last_name',null ,['class'=>'large','placeholder','form-control','form-control'=>'APELLIDO','required' => 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact-form-name">Nombre <span class="required">*</span></label>
                                            {!! Form::text('name',null ,['class'=>'large','placeholder','form-control'=>'NOMBRE','required' => 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact-form-email">Email <span class="required">*</span></label>
                                            {!! Form::text('mail',null ,['class'=>'large','placeholder','form-control'=>'E-MAIL','required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact-form-dni">DNI <span class="required">*</span></label>
                                            {!! Form::text('dni',null ,['class'=>'medium','placeholder','form-control'=>'DNI','required' => 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact-form-nacimiento">Fecha de Nacimiento</label>
                                            {!! Form::text('phone',null ,['class'=>'large','placeholder','form-control'=>'FECHA DE NACIMIENTO','id' => 'dob']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact-form-tel">Teléfono <span class="required">*</span></label>
                                            {!! Form::text('cel',null ,['class'=>'large','placeholder','form-control'=>'CELULAR']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-group--upload">
                                    <div class="form-group__avatar">
                                        <img src="{{ asset('assets/images/samples/avatar-empty.png') }}" alt="">
                                        <div class="form-group__label">
                                            <h6>Fotografia</h6>
                                            <span>Minimo 60x60px</span>
                                        </div>
                                    </div>
                                    <div class="form-group__upload">
                                        <label class="btn btn-default btn-xs btn-file">
                                            Subir Imagen... {!! Form::file('image',['class'=>'large pull-left','form-control']) !!}
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact-form-tel">Equipo <span class="required">*</span></label>
                                            {!! Form::select('teams_id',['0'=>'Seleccionar Equipo'] + $teams ,['class'=>'large','required','form-control'=>'required']) !!}
                                        </div>
                                    </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="account-password">Password de Registro</label>
                                        <input type="password" name="password" id="password" class="large" placeholder="Password"  required>
                                    </div>
                                </div>
                                <br><br><br><br>

                                <div class="spacer"></div>


                                <p>SOLICITUD DE INSCRIPCIÓN INDIVIDUAL
                                    DECLARACIÓN A TITULO PERSONAL Y EXIMICIÓN DE RESPONSABILIDAD CIVIL<br>

                                    Por medio de la presente, solicito la inscripción como jugador de los torneos de futbol, partidos amistosos y/u otras actividades deportivas y sociales que organiza y desarrolla The Futbol Company (TFC) en los predios destinados y contratados por la Organización para tal fin como ser: el Club del Sindicato de Empleados de Comercio (SEC), Club de la Federacion Obreros y Empleados Telefonicos de Republica Argentina (FOETRA), Club de Asociación de Empleados Fiscales e Ingresos Publicos (AEFIP), Club del Sindicato de Empleados Textiles de la Industria y Afines (SETIA).

                                    Así mismo deja constancia por la presente que la Organización (The Futbol Company) le ha exigido un certificado de aptitud física extendido por profesional médico de conformidad con los términos del Art. 6º del Anexo 1 del decreto 1821/2004 reglamentario de la ley numero 139 de la CABA.

                                    Declara que el mismo le ha sido extendido encontrándose en su poder, por lo que exime a la organización de toda responsabilidad por la falta de entrega del certificado requerido. Adicionalmente al certificado requerido declara saber que está en condiciones físicas y de de salud suficientes para la práctica de deportes y de las actividades organizadas por TFC asumiendo la responsabilidad que se desprende Expresado todo lo cual le solicita a TFC la inscripción de manera voluntaria en las actividades allí organizadas, liberando en virtud del presente documento tanto a los organizadores como a el o los propietarios del predio de cualquier responsabilidad que les cupiere por las contingencias de la práctica del deporte o las actividades desarrolladas dentro del predio o frente a cualquier lesión y/o agravamiento de lesión que pudiera recibir con o sin la intervención de terceros durante el desarrollo de las actividades, frente a cualquier reclamo que el organizador o el o los propietarios del predio reciba/n de terceros y que tenga origen en su actuación o comportamiento, asume el compromiso de mantenerlos a ambos: organizador y propietario, indemnes frente a los mismos.

                                    Asímismo se compromete a mantener indemnes tanto a la organización como a el o los propietarios del predio, frente a cualquier daño que sufra en las instalaciones antes durante y/o después de la práctica deportiva, frente a cualquier daño que puedan sufrir, los bienes que ingresase al predio, frente a cualquier daño que reciban las personas que ingresen con el como acompañantes no inscriptos.

                                    Derechos de Imagen: En el torneo que usted está participando se realizarán tomas de imágenes y videos para cuestiones de promoción y publicidad. A través de esta nota le informamos que su imagen puede ser utilizada para estos fines y por defecto nos autoriza para la utilización de las mismas. Ley N 11.723

                                    Esta declaración se mantendrá vigente mientras el solicitante intervenga en este o cualquier otro torneo y/o actividad deportiva o social en el predio de TFC y/o organizada por la organización. A los efectos expresados se guarda una copia en formato digital en poder de la organización. </p><br>
                                <label class="text-center" style="display:block;font-size:1.2em;">Acepto términos y condiciones <input type="checkbox" name="terms" value="terms" class="input-md" required></label>
                                <div class="form-group form-group--submit">
                                    <button type="submit" class="btn btn-primary-inverse btn-lg btn-block">Registrar Jugador en Equipo</button>
                                </div>
                            {!! Form::close() !!}
                            <!-- Contact Form / End -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- Contact Area / End -->

        </div>
    </div>

    <!-- Content / End -->

@endsection