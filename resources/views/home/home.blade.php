@extends('base')

@section('title', 'Home')

@section('content')

    <div class="theTop">
            <div class="container">
                <img src="/images/back9.jpg" alt="manadjimImage" height="210" width="100%" style="border-radius: 20px 20px 20px 20px">
                <div class="text-center">
                    <span style="color: green; text-shadow: 4px 4px 5px rgb(51, 11, 160); "><h1>Bienvenue à Manadjim</h1></span>
                </div>
            </div>
    </div>

    <div class="container">
        <div class="text-center">
            <p style="font-family: 'Times New Roman', Times, serif;
            text-shadow: 4px 4px 5px rgb(8, 24, 243);
            font-size: 1.3em">
                Quel que soit votre projet, MANADJIM  vous accompagne, identifie
                l'ensemble de vos besoins et vous propose une solution
                personnalisée répondant à votre attente.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <a href="#">
                        <img src="/images/p.jpeg" alt="manadjimImage" height="150" width="100%">
                    </a>
                    <div class="card-body">

                    <p class="card-text" style="font-family: 'Times New Roman', Times, serif">
                        <h5 style="text-shadow: 4px 4px 5px rgb(11, 160, 43);">Notre philosophie :</h5>
                        {{ Illuminate\Support\str::limit('"Réaliser des prestations de qualité dans une recherche constante de la satisfaction du client"',100) }}
                        </p>
                    {{--  <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>  --}}
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <a href="#">
                        <img src="/images/bateau1.jpg" alt="manadjimImage" height="150" width="100%">
                    </a>

                    <div class="card-body">

                    <p class="card-text" style="font-family: 'Times New Roman', Times, serif">
                        <h5 style="text-shadow: 4px 4px 5px rgb(11, 160, 61);">Nos valeurs :</h5>
                        {{ Illuminate\Support\str::limit("\"Savoir-faire et Qualité, Responsabilité, Disponibilité, Engagement, Confiance et Proximité\"", 100) }}
                        </p>
                    {{--  <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>  --}}
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <a href="#">
                        <img src="/images/p15.jpeg" alt="manadjimImage" height="150" width="100%">
                    </a>
                    {{--  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>  --}}
                    <div class="card-body">

                    <p class="card-text" style="font-family: 'Times New Roman', Times, serif">
                    <h5 style="text-shadow: 4px 4px 5px rgb(11, 160, 23);">Nos domaines d'activités :</h5>
                        {{ Illuminate\Support\str::limit("Réalisation et conception des plans des bâtiments tout corps, réalisation et conception des travaux hydraulique, réalisation et conception d'installations électriques courant fort et courant faible dans les domaines de l’habitation, du tertiaire et de l'industrie.", 100) }}
                        </p>
                    {{--  <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="container" style="margin-top: 2%">
    <div class="row">
        <div class="col-md-12">

            <section id="features" class="features" style="padding-bottom: 5px !important;">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                    <div class="section-title">
                        <div class="text-center">
                            <h2 style="color: #304493 !important;">Nos Services</h2>
                        </div>
                        <hr >
                    </div>
                </div>
            </section>

            <section id="services" class="services section-bg">
                <div class="container aos-init aos-animate" data-aos="fade-up">

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                            <div class="flip-div">
                                <div class="flip-main">
                                    <div class="front">
                                        <div class="card">
                                            <div class="card-body text-center pb-2">
                                                <div class="icon">
                                                    <img src="/images/chantier2.jpg" alt="manadjimImage" width="100" height="100">
                                                </div>
                                                <h5 class="card-title"><strong>Bâtiment et eaux</strong></h5>
                                                <p class="card-text">Description générale du service de bâtiment et eaux... Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quibusdam sint omnis earum ullam, vitae, dolorem vel </p>
                                                <div class="back rounded">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <a href="#" class="btn btn-success btn-sm">Plus d'infos <i class="bi bi-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                            <div class="flip-div">
                                <div class="flip-main">
                                    <div class="front">
                                        <div class="card">
                                            <div class="card-body text-center pb-2">
                                                <div class="icon">
                                                    <img src="/images/graph2.png" alt="manadjimImage" width="100" height="100">
                                                </div>
                                                <h5 class="card-title"><strong>Graphisme</strong></h5>
                                                <p class="card-text">Description générale du service de graphisme... Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quibusdam sint omnis earum ullam, vitae, dolorem vel</p>
                                                <div class="back rounded">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <a href="#" class="btn btn-success btn-sm">Plus d'infos <i class="bi bi-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                            <div class="flip-div">
                                <div class="flip-main">
                                    <div class="front">
                                        <div class="card">
                                            <div class="card-body text-center pb-2">
                                                <div class="icon">
                                                    <img src="/images/agro3.jpg" alt="manadjimImage" width="100" height="100">
                                                </div>
                                                <h5 class="card-title"><strong>Agro-Business</strong></h5>
                                                <p class="card-text">Description générale du service d'agro-business... Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt quibusdam sint omnis earum ullam, vitae, dolorem vel</p>
                                                <div class="back rounded">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <a href="#" class="btn btn-success btn-sm">Plus d'infos <i class="bi bi-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
  </div>
@endsection
