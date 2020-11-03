@extends('layouts.app')

@section('content')
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{ asset('assetshome/img/avataaars.svg') }}" alt="" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">DODGE_BOX</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Check Blanace - Pay Bills - Transfer Monney</p>
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('MANAGE ACCOUNT') }}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{ asset('assetshome/img/portfolio/safe.png') }}" alt="" />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{ asset('assetshome/img/portfolio/cake.png') }}" alt="" />
                </div>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{ asset('assetshome/img/portfolio/submarine.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">{{ __('About') }}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Dodge_bax banck provides numoreous services for the customers without charging extra money from the customers. Many citizens in the Sri Lanka use this service since it is very convinient. </p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">We provide very secure online trnsactions accross the all bank accounts in the contry. we are very repuatable online bank service providers in Sri Lanka!</p>
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="">
                <i class="fas fa-download mr-2"></i>
                {{ __('Try Other Services!') }}
            </a>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">{{ __('Location') }}</h4>
                <p class="lead mb-0">
                    {{ __('2215 Marine Drive') }}
                    <br />
                    {{ __('Mount Lavania') }}
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">{{ __('Around the Web') }}</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">{{ __('DODGE_BOX') }}</h4>
                <p class="lead mb-0">
                    DODGE_BOX is free to use, No Bank account need try from mobile
                    <a href="">{{ __('DODGE_BOX') }}</a>
                    .
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright © DODGE_BOX 2020</small></div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">{{ __('Your Balance') }}</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <div class="container d-flex justify-content-center">
                                <div class="card p-3">
                                    <h3 class="d-flex flex-row justify-content-between text-align-center"> {{ __('Name') }} </h3>
                                    <p class="text-dark">{{ __('Elementery Business Account') }}</p>
                                    <div class="card-bottom pt-3 px-3 mb-2">
                                        <div class="d-flex flex-row justify-content-between text-align-center">
                                            <div class="d-flex flex-column"><span>{{ __('Balance amount') }}</span>
                                                <p>&euro; <span class="text-white">{{ __('88,989') }}</span></p>
                                            </div> <button class="btn btn-secondary"><i class="fas fa-arrow-right text-white"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-5">This is the balance in your wallet. </p>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                {{ __('Close Window') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">

                        <!-- Portfolio Modal - Title-->
                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0 text-center" id="portfolioModal2Label">{{ __('Last Payment') }}</h2>
                        <!-- Icon Divider-->
                        <div class="divider-custom text-center">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        <!-- Portfolio Modal - Image-->
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <address>
                                        <strong>{{ __('Elf Cafe') }}</strong>
                                        <br>
                                        {{ __('2135 Sunset Blvd') }}
                                        <br>
                                        {{ __('Los Angeles, CA 90026') }}
                                        <br>
                                        <abbr title="Phone">{{ __('P:') }}</abbr>{{ __('(213) 484-6829') }}
                                    </address>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8 text-right">
                                    <p>
                                        <em>{{ __('Date: 1st November, 2013') }}</em>
                                    </p>
                                    <p>
                                        <em>{{ __('Receipt #: 34522677W') }}</em>
                                    </p>
                                </div>
                            </div>

                            <div class="text-center">
                                <h1>{{ __('Receipt') }}</h1>
                            </div>
                            </span>
                            <div class="row">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Product') }}</th>
                                            <th>{{ __('#') }}</th>
                                            <th class="text-center">{{ __('Price') }}</th>
                                            <th class="text-center">{{ __('Total') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-md-9"><em>{{ __('Baked Rodopa Sheep Feta') }}</em></h4>
                                            </td>
                                            <td class="col-md-1" style="text-align: center"> {{ __('2') }} </td>
                                            <td class="col-md-1 text-center">{{ __('$13') }}</td>
                                            <td class="col-md-1 text-center">{{ __('$26') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-9"><em>{{ __('Lebanese Cabbage Salad') }}</em></h4>
                                            </td>
                                            <td class="col-md-1" style="text-align: center"> {{ __('1') }} </td>
                                            <td class="col-md-1 text-center">{{ __('$8') }}</td>
                                            <td class="col-md-1 text-center">{{ __('$8') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="col-md-9"><em>{{ __('Baked Tart with Thyme and Garlic') }}</em></h4>
                                            </td>
                                            <td class="col-md-1" style="text-align: center">{{ __('3') }}</td>
                                            <td class="col-md-1 text-center">{{ __('$16') }}</td>
                                            <td class="col-md-1 text-center">{{ __('$48') }}</td>
                                        </tr>
                                        <tr>
                                            <td>   </td>
                                            <td>   </td>
                                            <td class="text-right">
                                                <p>
                                                    <strong>{{ __('Subtotal:') }} </strong>
                                                </p>
                                                <p>
                                                    <strong>{{ __('Tax:') }} </strong>
                                                </p>
                                            </td>
                                            <td class="text-center">
                                                <p>
                                                    <strong>{{ __('$6.94') }}</strong>
                                                </p>
                                                <p>
                                                    <strong>{{ __('$6.94') }}</strong>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>   </td>
                                            <td>   </td>
                                            <td class="text-right">
                                                <h4><strong>{{ __('Total:') }} </strong></h4>
                                            </td>
                                            <td class="text-center text-danger">
                                                <h4><strong>{{ __('$31.53') }}</strong></h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Portfolio Modal - Text-->
                        </div>
                        <button class="btn btn-primary text-center" data-dismiss="modal">
                            <i class="fas fa-times fa-fw"></i>
                            {{ __('Close Window') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Accounts and transactions report</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-10">
                                        <div class="panel panel-primary">
                                            <!-- Default panel contents -->
                                            <div class="panel-body">
                                                <h3>
                                                    {{ __('Name') }}
                                                </h3>
                                            </div>
                                            <ul class="list-group">

                                                <li class="list-group-item">
                                                    <h4>{{ __('Account # 1364672 (current debit:: $356.61)') }}</h4>
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>{{ __('Operation date') }}</th>
                                                                <th>{{ __('Remitter') }}</th>
                                                                <th>{{ __('Beneficiary') }}</th>
                                                                <th>{{ __('Amount') }}</th>
                                                                <th>{{ __('Description') }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{ __('Wed Nov 12 17:43:13 MSK 2014') }}</td>
                                                                <td>{{ __('Smith J. (cash in)') }}</td>
                                                                <td>{{ __('Jonex A.') }}</td>
                                                                <td>{{ __('356.61') }}</td>
                                                                <td>{{ __('Iniital deposit') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ __('Wed Nov 13 12:41:13 MSK 2014') }}</td>
                                                                <td>{{ __('Suzarland TJ.') }}</td>
                                                                <td>{{ __('Smith J.') }}</td>
                                                                <td>{{ __('2000.00') }}</td>
                                                                <td>{{ __('Reward') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ __('Wed Nov 15 07:43:13 MSK 2014') }}</td>
                                                                <td>{{ __('Smith J.') }}</td>
                                                                <td>{{ __('Smith M.') }}</td>
                                                                <td>{{ __('100.00') }}</td>
                                                                <td>{{ __('funds transfer') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ __('Wed Nov 12 17:43:13 MSK 2014') }}</td>
                                                                <td>{{ __('Smith J. (cash in)') }}</td>
                                                                <td>{{ __('Jonex A.') }}</td>
                                                                <td>{{ __('356.61') }}</td>
                                                                <td>{{ __('Iniital deposit') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ __('Wed Nov 13 12:41:13 MSK 2014') }}</td>
                                                                <td>{{ __('NaSuzarland TJ.me') }}</td>
                                                                <td>{{ __('Smith J.') }}</td>
                                                                <td>{{ __('2000.00') }}</td>
                                                                <td>{{ __('Reward') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ __('Wed Nov 15 07:43:13 MSK 2014') }}</td>
                                                                <td>{{ __('Smith J.') }}</td>
                                                                <td>{{ __('Smith M.') }}</td>
                                                                <td>{{ __('100.00') }}</td>
                                                                <td>{{ __('funds transfer') }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>{{ __('Wed Nov 12 17:43:13 MSK 2014') }}</td>
                                                                <td>{{ __('Smith J. (cash in)') }}</td>
                                                                <td>{{ __('Jonex A.') }}</td>
                                                                <td>{{ __('356.61') }}</td>
                                                                <td>{{ __('Iniital deposit') }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button style="margin-top:20px;" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    {{ __('Close Window') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection