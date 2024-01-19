
@extends('layouts.master')

@section('content')

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Demande de passeport</h4>

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
                                    <h4 class="card-title mb-0 flex-grow-1"></h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                           <a href="#" target="_blank" style="background:#32BE62" class="btn btn-danger w-100">Payer frais</a>
                                           
                                        </div>
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                           <a href="/inscription_corporate" target="_blank" class="btn btn-primary w-100">Creér demande</a>

                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="table-responsive table-card">
                                        <table class="table table-hover table-borderless table-centered align-middle table-nowrap mb-0">
                                            <thead class="text-muted bg-soft-light">
                                                <tr>
                                                    <th>Numero de passeport</th>
                                                    <th>N°ID</th>
                                                    <th>Noms</th>
                                                    <th>Prenoms</th>
                                                    <th>Email</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead><!-- end thead -->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <h6 class="fs-14 mb-0">11544569086657</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>SNECORP - 2023 - 000001</td>
                                                    <td>
                                                        <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>John </h6>
                                                    </td>
                                                    <td>John wick</td>
                                                    <td>email@gmail.com</td>
                                                    <td>02/03/2023</td>
                                                    <td><a href="" class="btn btn-sm btn-soft-secondary">Brouillon</a></td>
                                                    <td>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/eye.png"></a>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/download.png"></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <h6 class="fs-14 mb-0">11544569086657</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>SNECORP - 2023 - 000001</td>
                                                    <td>
                                                        <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>John </h6>
                                                    </td>
                                                    <td>John wick</td>
                                                    <td>email@gmail.com</td>
                                                    <td>02/03/2023</td>
                                                    <td><a href="" class="btn btn-sm btn-soft-secondary">Brouillon</a></td>
                                                    <td>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/eye.png"></a>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/download.png"></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <h6 class="fs-14 mb-0">11544569086657</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>SNECORP - 2023 - 000001</td>
                                                    <td>
                                                        <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>John </h6>
                                                    </td>
                                                    <td>John wick</td>
                                                    <td>email@gmail.com</td>
                                                    <td>02/03/2023</td>
                                                    <td><a href="" class="btn btn-sm btn-soft-secondary">Brouillon</a></td>
                                                    <td>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/eye.png"></a>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/download.png"></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <h6 class="fs-14 mb-0">11544569086657</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>SNECORP - 2023 - 000001</td>
                                                    <td>
                                                        <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>John </h6>
                                                    </td>
                                                    <td>John wick</td>
                                                    <td>email@gmail.com</td>
                                                    <td>02/03/2023</td>
                                                    <td><a href="" class="btn btn-sm btn-soft-secondary">Brouillon</a></td>
                                                    <td>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/eye.png"></a>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/download.png"></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <h6 class="fs-14 mb-0">11544569086657</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>SNECORP - 2023 - 000001</td>
                                                    <td>
                                                        <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>John </h6>
                                                    </td>
                                                    <td>John wick</td>
                                                    <td>email@gmail.com</td>
                                                    <td>02/03/2023</td>
                                                    <td><a href="" class="btn btn-sm btn-soft-secondary">Brouillon</a></td>
                                                    <td>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/eye.png"></a>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/download.png"></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <h6 class="fs-14 mb-0">11544569086657</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>SNECORP - 2023 - 000001</td>
                                                    <td>
                                                        <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>John </h6>
                                                    </td>
                                                    <td>John wick</td>
                                                    <td>email@gmail.com</td>
                                                    <td>02/03/2023</td>
                                                    <td><a href="" class="btn btn-sm btn-soft-secondary">Brouillon</a></td>
                                                    <td>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/eye.png"></a>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/download.png"></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <h6 class="fs-14 mb-0">11544569086657</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>SNECORP - 2023 - 000001</td>
                                                    <td>
                                                        <h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>John </h6>
                                                    </td>
                                                    <td>John wick</td>
                                                    <td>email@gmail.com</td>
                                                    <td>02/03/2023</td>
                                                    <td><a href="" class="btn btn-sm btn-soft-secondary">Brouillon</a></td>
                                                    <td>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/eye.png"></a>
                                                        <a  href=""> <img style="width:30px" src="/assets/images/download.png"></a>
                                                    </td>
                                                </tr>
                                                
                                                <!-- end -->
                                                
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
