@extends('layouts.master')
 @section('content')

  <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Dashbord</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Dashbord</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">

                       

                        <!-- end col -->

                        <div class="col-xxl-12 order-xxl-0 order-first">
                            <div class="d-flex flex-column h-100">
                                <div class="row h-100">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 ms-3">
                                                    	<h4 class=" mb-2"><span class="counter-value" data-target="2390.68">45</span></h4>
                                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Demandes</p>
                                                    </div>

                                                    <div class="avatar-sm flex-shrink-0" style="border-radius: 10%;background: #26285e;width: 5rem;height: 5rem;">
                                                        <span class="avatar-title  text-primary rounded-circle fs-3" style="background:none">
                                                            <img src="/assets/images/passport.svg" style="height:60%" alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 ms-3">
                                                    	<h4 class=" mb-2"><span class="counter-value" data-target="2390.68">45</span></h4>
                                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Renouvellements</p>
                                                    </div>

                                                    <div class="avatar-sm flex-shrink-0" style="border-radius: 10%;background: #26285e;width: 5rem;height: 5rem;">
                                                        <span class="avatar-title  text-primary rounded-circle fs-3" style="background:none">
                                                            <img src="/assets/images/renewpassport.svg" style="height:60%" alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->


                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 ms-3">
                                                    	<h4 class=" mb-2"><span class="counter-value" data-target="2390.68">45</span></h4>
                                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Operations</p>
                                                    </div>

                                                    <div class="avatar-sm flex-shrink-0" style="border-radius: 10%;background: #26285e;width: 5rem;height: 5rem;">
                                                        <span class="avatar-title  text-primary rounded-circle fs-3" style="background:none">
                                                            <img src="/assets/images/listoperation.svg" style="height:60%" alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->


                                    <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 ms-3">
                                                    	<h4 class=" mb-2"><span class="counter-value" data-target="2390.68">5345</span>$</h4>
                                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Dépenses</p>
                                                    </div>

                                                    <div class="avatar-sm flex-shrink-0" style="border-radius: 10%;background: #26285e;width: 5rem;height: 5rem;">
                                                        <span class="avatar-title  text-primary rounded-circle fs-3" style="background:none">
                                                            <img src="/assets/images/income.svg" style="height:60%" alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    
                                </div><!-- end row -->

                               
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                   

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">My Currencies</h4>
                                    <div class="flex-shrink-0">
                                        <button class="btn btn-soft-primary btn-sm">24H</button>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="btn btn-soft-primary btn-sm" role="button" href="dashboard-crypto.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Get Report<i class="mdi mdi-chevron-down align-middle ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="dashboard-crypto.html#">Download Report</a>
                                                <a class="dropdown-item" href="dashboard-crypto.html#">Export</a>
                                                <a class="dropdown-item" href="dashboard-crypto.html#">Import</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                   <img src="/assets/images/graphe.svg" alt="">
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header align-items-center border-0 d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Administrateur</h4>
                                    <div class="flex-shrink-0">
                                        <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                            {{-- <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="dashboard-crypto.html#buy-tab" role="tab" aria-selected="false">Buy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="dashboard-crypto.html#sell-tab" role="tab" aria-selected="true">Sell</a>
                                            </li> --}}
                                        </ul><!-- end ul -->
                                    </div>
                                </div><!-- end cardheader -->
                                <div class="card-body p-0">
                                    <div class="tab-content p-0">
                                       <div class="p-3">
                                       		<div class="row">

                                       			<div class="col-12" style="margin:15px;background: #9D9DC7;border-radius: 4%;min-height: 450px;">

                                       				<div style="margin-top: 100px;"></div>

                                       				<div style="margin:10px auto;height: 140px;width: 140px;background: lightgray;border-radius: 10px;"></div>

                                       				<p style="text-align: center;color: white;">Mme administrateur</p>
			                                        <p style="text-align: center;color: white;">Societe Generale</p>

			                                       <div class="row">

				                                       	 <div class="col-lg-4">
				                                        	<p style="text-align:center;color: white;">Passeport</p>
				                                        	 <a href="#" target="_blank" class="btn btn-light w-100">8 passeports</a>
				                                        </div>

				                                        <div class="col-lg-4">
				                                        	<p style="text-align:center;color: white;">Livré</p>
				                                        	 <a href="#" target="_blank" class="btn btn-light w-100">81 passeports</a>
				                                        </div>

				                                        <div class="col-lg-4">
				                                        	<p style="text-align:center;color: white;">En cours </p>
				                                        	 <a href="#" target="_blank" class="btn btn-light w-100">18 passeports</a>
				                                        </div>
			                                       	
			                                       </div>
			                                       
                                       				
                                       			</div>
                                       			

		                                       	
		                                       </div>
                                       			
                                       		</div>
                                       		
                                        


                                    </div><!-- end tab pane -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->


                     <div class="row">
                        <div class="col-xxl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Passeports rejétés</h4>
                                    
                                </div><!-- end card header -->
                                <div class="card-body">
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
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                       
                    </div><!-- end row -->

                   

                </div>
                <!-- container-fluid -->
            </div>
@endsection