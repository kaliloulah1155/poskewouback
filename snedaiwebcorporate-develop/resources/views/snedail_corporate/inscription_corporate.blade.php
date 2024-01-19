
@extends('layouts.master_inscr')

@section('content')

<div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                {{-- <h4 class="mb-sm-0">Profil</h4> --}}

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
                                    <h4 class="card-title mb-0 flex-grow-1"> </h4>
                                    <div class="flex-shrink-0">
                                        {{-- <div class="form-check form-switch form-switch-right form-switch-md">
                                           <a href="#" target="_blank" class="btn btn-danger w-100">Annuler</a>
                                        </div>
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                           <a href="#" target="_blank" class="btn btn-success w-100">Envoyer</a>
                                        </div> --}}
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Nom et prénoms</label>
                                                    <input type="text" class="form-control" id="basiInput" >
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Tel fixe</label>
                                                    <input type="text" class="form-control" id="labelInput" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="basiInput" class="form-label">Tel mobil</label>
                                                    <input type="text" class="form-control" id="basiInput" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class=" col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="labelInput" disabled>
                                                </div>
                                            </div>
                                            <!--end col-->


                                            <div class=" col-md-6">
                                                <div class="form-check form-switch form-switch-right form-switch-md" style="width:200px;float: right;">
                                                   <a href="#" target="_blank" class="btn btn-outline-dark w-100">Retour</a>
                                                </div>
                                            </div>

                                             <div class=" col-md-6">
                                                <div class="form-check form-switch form-switch-right form-switch-md" style="width:200px">
                                                   <a href="#" target="_blank" class="btn btn-danger w-100">Suivant</a>
                                                </div>
                                            </div>
                                            
                                            
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
    
    <style> 

        input[type="text"], textarea {
          background-color :  #FBFBFB !important;
          border: solid 1px #28285E; 
        }

    </style>
    <!-- JAVASCRIPT -->
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>
    <script src="/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/assets/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="/assets/libs/prismjs/prism.js"></script>

    <script src="/assets/js/app.js"></script>

@endsection
