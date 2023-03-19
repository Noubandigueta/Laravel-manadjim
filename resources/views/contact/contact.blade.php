@extends('base')

@section('title', 'Login')

@section('content')

    <section id="contact" class="contact">
        <div class="container">

            <div class="row mt-5 justify-content-center aos-init aos-animate" data-aos="fade-up">
                <div class="col-lg-10">
                                            <form action="https://promotude.com/nous-contacter" method="POST" role="form" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="aMB7fHk6TwD1Tzbc0DnPa1PJlOEvOmUUUuYNigna">                            <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control " id="name" placeholder="Votre nom" value="" required="">
                                                                </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control " name="email" id="email" value="" placeholder="Votre Email" required="">
                                                                </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 form-group">
                                <input type="text" name="phone" class="form-control " id="phone" value="" placeholder="Votre téléphone" required="">
                                                                </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control " name="subject" id="subject" value="" placeholder="Sujet" required="">
                                                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control " name="text" rows="5" placeholder="Message" required=""></textarea>
                                                        </div>

                        <div class="text-center mt-3">

                            <button type="submit" class="btn btn-success">Envoyer un message</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>

@endsection
