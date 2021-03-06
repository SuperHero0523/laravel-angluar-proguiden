@extends('layouts.public') @section('title', 'Hjem') @section('content')

<main class="proguiden-comparison-company-electricity">
    <section class="header-company-electricity">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumb">
                        <a href="" class="back">1. Start</a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <a href="" class="back">2. Krav</a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <a href="" class="back">3. Resultater</a>
                        <i class="fa fa-caret-right" aria-hidden="true"></i>
                        <a href="" class="current">4. Bestill</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-8">
                    <h1>Bestill</h1>
                    <p>Vi deler ikke din informasjon eller personalia  <br>
                    til andre enn Gudbrandsdal Energi.</p>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-lg-offset-2">
                    <div class="icon">
                        <span class="icon-proguiden-electricity"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="wrapper-step step-4">
        <div class="container">

            <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wrapper-form">
                            <form action="">
                                <h2>1. Personalia </h2>
                                <p>Fyll inn ditt fornavn, etternavn og fødselsdato</p>
                                <div class="form-block">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="fornavn" name="fornavn">
                                                <label for="fornavn" class="">Fornavn *</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="etternavn" name="etternavn">
                                                <label for="etternavn" class="">Etternavn *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <p class="label-form">Fødseldato *</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group select">
                                                <label for="" class="labelfocus">Velg dag</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group select">
                                                <label for="" class="labelfocus">Velg måned</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="form-group select">
                                                <label for="" class="labelfocus">Velg år</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2>2. Kontaktinformasjon</h2>
                                <p>Vi trenger din kontaktinformasjon så vi kan nå deg ved behov</p>
                                <div class="form-block">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="e-postadresse" name="e-postadresse">
                                                <label for="e-postadresse" class="">E-postadresse *</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="telefonnummer" name="telefonnummer">
                                                <label for="telefonnummer" class="">Telefonnummer *</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2>3. Adresseinformasjon</h2>
                                <p>Skriv inn adressen din</p>
                                <div class="form-block">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="adresse" name="adresse">
                                                <label for="adresse" class="">Adresse *</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="postnummer" name="postnummer">
                                                <label for="postnummer" class="">Postnummer *</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="adresse" name="adresse">
                                                <label for="adresse" class="">Adresse *</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="postnummer" name="postnummer">
                                                <label for="postnummer" class="">Postnummer *</label>
                                            </div>
                                            <span class="delete"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="clearfix"></div>
                                        <div class="col-xs-12 col-sm-6">
                                            <p class="special-text">Har du flere målere? <a href="">Legg til adresse</a></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 text-right">
                                            <div class="switch-control">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                                Annen faktureringsadresse?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-block">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h2>Faktureringsadresse</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="adresse" name="adresse">
                                                <label for="adresse" class="">Adresse *</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="postnummer" name="postnummer">
                                                <label for="postnummer" class="">Postnummer *</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="wrapper-btns">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-5">
                                    <a href="{{route('compare.power.step3_page')}}" class="btn btn-block btn-lg prev">Gå tilbake</a>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-5 col-md-offset-2">
                                    <a href="{{route('compare.power.step5_page')}}" class="btn btn-block btn-lg next">Bestill</a>
                                    <small>Ved bestilling aksepterer du våre <a href="">Vilkår & Personvern.</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <aside>
                    <h2>Valgt strømleverandør</h2>
                    <p>Endre strømavtale? <a href="">Gå tilbake</a></p>
                    <div class="sidebar">
                        <img src="{{ asset('assets/images/logo-energy.jpg', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt="">
                        <div class="info-company text-center">
                            <span>Gudbrandsdal Energi As</span>
                            <h3>Sommerspot 2018</h3>
                            <span>Spotpris</span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="options text-center">
                            <span><img src="{{ asset('assets/images/lock.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt=""></span>
                            <span><img src="{{ asset('assets/images/star.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt=""></span>
                            <span><img src="{{ asset('assets/images/coin.png', env('REDIRECT_HTTPS')) }}" class="img-responsive center-block" alt=""></span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="more-information text-center">
                            <a href="">Mer informasjon</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="price text-center">
                            <small>Pris per dags dato</small>
                            <p>60,36 øre/kWt</p>
                            <small>Estimert årspris: 604 kr</small>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

@endsection

@section('scripts')
<script src="{{ asset('/js/main.js', env('REDIRECT_HTTPS')) }}"></script>
<script>
    jQuery(function () {
        new Proguiden.Controllers.CompanyBroadband();
    });
</script> 
@endsection