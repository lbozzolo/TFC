@extends('tfc.web.layout')

@section('page-heading')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="page-heading__title">Vias de  <span class="highlight">Contacto</span></h1>

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
                    <h4>Contactanos</h4>
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
                                <a class="info-block__link" href="mailto:sergio@thefutbolcompany.com">sergio@thefutbolcompany.com </a>
                            </div>

                            <div class="info-block__item">
                                <svg role="img" class="df-icon df-icon--soccer-ball">
                                    <use xlink:href="{{ asset('assets/images/icons-soccer.svg#soccer-ball') }}"/>
                                </svg>
                                <h6 class="info-block__heading"><font color="#000000">Inscripciones</font></h6>
                                <h6 class="info-block__heading"><font color="#000000">(011)-2105.3478</font></h6>
                                <a class="info-block__link" href="mailto:juga@thefutbolcompany.com">juga@thefutbolcompany.com </a>
                            </div>


                        </div>
                        <div class="col-md-8">

                            <!-- Contact Form -->
                            {!! Form::open(['route'=>'postContact','method' => 'post','id' => 'adminForm_1', 'class' => 'contact-form']) !!}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact-form-name">Nombre <span class="required">*</span></label>
                                            <input type="text" name="name" id="contact-form-name" class="form-control" placeholder="Nombre...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact-form-email">Email <span class="required">*</span></label>
                                            <input type="email" name="email" id="contact-form-email" class="form-control" placeholder="Email...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact-form-subject">Titulo</label>
                                            <input type="text" name="contact-form-subject" id="contact-form-subject" class="form-control" placeholder="Titulo...">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contact-form-message">Mensaje <span class="required">*</span></label>
                                    <textarea name="message" rows="5" class="form-control" placeholder="Ingrese su Mensaje aqui..."></textarea>
                                </div>
                                <div class="form-group form-group--submit">
                                    <button type="submit" class="btn btn-primary-inverse btn-lg btn-block">Envialo</button>
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


@endsection