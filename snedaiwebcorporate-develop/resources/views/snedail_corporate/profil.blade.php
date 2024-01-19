
@extends('layouts.master')

@section('content')

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Profil</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Basic Elements</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">PROFIL</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                           <a href="#" target="_blank" class="btn btn-danger w-100">Retour page</a>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Nom de l'entreprise</label>
                                                    <input type="password" class="form-control" id="basiInput" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Forme juridique</label>
                                                    <input type="password" class="form-control" id="labelInput" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            {{-- <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="placeholderInput" class="form-label">Input with Placeholder</label>
                                                    <input type="password" class="form-control" id="placeholderInput" placeholder="Placeholder">
                                                </div>
                                            </div> --}}
                                            <!--end col-->
                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="valueInput" class="form-label">Pays</label>
                                                    <input type="text" class="form-control" id="valueInput" value="" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="readonlyPlaintext" class="form-label">Ville</label>
                                                    <input type="text" class="form-control" id="readonlyPlaintext" value="" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="readonlyInput" class="form-label">Situation geographique</label>
                                                    <input type="text" class="form-control" id="readonlyInput" value=" " disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="disabledInput" class="form-label">Adresse postale</label>
                                                    <input type="text" class="form-control" id="disabledInput" value="" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="iconInput" class="form-label">Contacts </label>
                                                    <div class="form-icon">
                                                        <input type="email" class="form-control form-control-icon" id="iconInput" placeholder="example@gmail.com" disabled>
                                                      
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="iconInput" class="form-label">Email Professionnel </label>
                                                    <div class="form-icon">
                                                        <input type="email" class="form-control form-control-icon" id="iconInput" placeholder="example@gmail.com" disabled>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Domaine d'activité</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control" id="disabledInput" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Nombre total Employés</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control" id="disabledInput" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">IDU</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control" id="disabledInput" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Rccm</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control" id="disabledInput" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Nom et prénoms</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control" id="disabledInput" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Telephone fixe</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control" id="disabledInput" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Tel Mobile</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control" id="disabledInput" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Email</label>
                                                    <div class="form-icon right">
                                                        <input type="text" class="form-control" id="disabledInput" value="" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                        </div>
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
