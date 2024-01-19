
@extends('layouts.master')

@section('content')

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Renouvellement de passeport</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                       {{--  <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Basic Elements</li> --}}
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Renouvellement</h4>
                                    <div class="flex-shrink-0">
                                        
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                           <a href="/inscription_corporate" target="_blank" class="btn btn-primary w-100">Renouveller</a>

                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="table-responsive table-card">
                                        <table class="table table-hover table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted bg-soft-light">
                                                <tr>
                                                    <th>Coin Name</th>
                                                    <th>Price</th>
                                                    <th>24h Change</th>
                                                    <th>Total Balance</th>
                                                    <th>Total Coin</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead><!-- end thead -->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="/assets/images/svg/crypto-icons/btc.svg" alt="" class="avatar-xxs">
                                                            </div>
                                                            <div>
                                                                <h6 class="fs-14 mb-0">Bitcoin</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$48,568.025</td>
                                                    <td>
                                                        <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>5.26 </h6>
                                                    </td>
                                                    <td>$53,914.025</td>
                                                    <td>1.25634801</td>
                                                    <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="assets/images/svg/crypto-icons/ltc.svg" alt="" class="avatar-xxs">
                                                            </div>
                                                            <div>
                                                                <h6 class="fs-14 mb-0">Litecoin</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$87,142.027</td>
                                                    <td>
                                                        <h6 class="text-danger fs-13 mb-0"><i class="mdi mdi-trending-down align-middle me-1"></i>3.07 </h6>
                                                    </td>
                                                    <td>$75,854.127</td>
                                                    <td>2.85472161</td>
                           							<td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="assets/images/svg/crypto-icons/eth.svg" alt="" class="avatar-xxs">
                                                            </div>
                                                            <div>
                                                                <h6 class="fs-14 mb-0">Eathereum</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$33,847.961</td>
                                                    <td>
  													<h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>7.13 </h6>
                                                    </td>
                                                    <td>$44,152.185</td>
                                                    <td>1.45612347</td>
  													<td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="assets/images/svg/crypto-icons/bnb.svg" alt="" class="avatar-xxs">
                                                            </div>
                                                            <div>
                                                                <h6 class="fs-14 mb-0">Binance</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$73,654.421</td>
                                                    <td>
                                                        <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>0.97</h6>
                                                    </td>
                                                    <td>$48,367.125</td>
                                                    <td>0.35734601</td>
                                                    <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="assets/images/svg/crypto-icons/usdt.svg" alt="" class="avatar-xxs">
                                                            </div>
                                                            <div>
                                                                <h6 class="fs-14 mb-0">Tether</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$66,742.077</td>
                                                    <td>
                                                        <h6 class="text-danger fs-13 mb-0"><i class="mdi mdi-trending-down align-middle me-1"></i>1.08 </h6>
                                                    </td>
                                                    <td>$53,487.083</td>
                                                    <td>3.62912570</td>
                                                    <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="assets/images/svg/crypto-icons/dash.svg" alt="" class="avatar-xxs">
                                                            </div>
                                                            <div>
                                                                <h6 class="fs-14 mb-0">Dash</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$34,736.209</td>
                                                    <td>
                                                        <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>4.52 </h6>
                                                    </td>
                                                    <td>$15,203.347</td>
                                                    <td>1.85412740</td>
                                                    <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="assets/images/svg/crypto-icons/neo.svg" alt="" class="avatar-xxs">
                                                            </div>
                                                            <div>
                                                                <h6 class="fs-14 mb-0">Neo</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$56,357.313</td>
                                                    <td>
                                                        <h6 class="text-danger fs-13 mb-0"><i class="mdi mdi-trending-down align-middle me-1"></i>2.87 </h6>
                                                    </td>
                                                    <td>$61,843.173</td>
                                                    <td>1.87732061</td>
                                                    <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                                                </tr><!-- end -->
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2">
                                                                <img src="assets/images/svg/crypto-icons/doge.svg" alt="" class="avatar-xxs">
                                                            </div>
                                                            <div>
                                                                <h6 class="fs-14 mb-0">Dogecoin</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$62,357.649</td>
                                                    <td>
                                                        <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>3.45 </h6>
                                                    </td>
                                                    <td>$54,843.173</td>
                                                    <td>0.95632087</td>
                                                    <td><a href="apps-crypto-buy-sell.html" class="btn btn-sm btn-soft-secondary">Trade</a></td>
                                                </tr><!-- end -->
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div><!-- end tbody -->
                                        <!--end row-->
                                    </div>
                                    <div class="d-none code-view">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->



                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->


@endsection



@section('footerjavascript')
    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>

    <script src="assets/js/app.js"></script>

@endsection
