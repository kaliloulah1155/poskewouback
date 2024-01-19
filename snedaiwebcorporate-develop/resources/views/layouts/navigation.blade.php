   <?php $currentPage = Route::getFacadeRoot()->current()->uri() ?>

<!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none" style="padding: unset;"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

     <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav" style="display: block;height: 105px">
    <div class="container" style="margin: 0 auto">
      
      
      <a href="/">
        <img id="logo" src="/assets/img/logo_snedai_blanc.svg" @if (!Session::has('firstname'))style="height: 55px;margin-top: -15px;" @else style="height: 55px;" @endif>
      </a>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault" style="justify-content:center !important;margin-top: 10px;">

        <ul class="navbar-nav" style="font-size: 0.7rem;">
           <li class="nav-item">
            <a  style="margin-top: 10px;font-size: 14px;text-transform: initial;font-family: 'Poppins', 'sans-serif;'" @if ($currentPage =='accueil'|| $currentPage =='/') class="nav-link js-scroll active" @else class="nav-link js-scroll" @endif href="/accueil">Accueil</a>
          </li>
          <li class="nav-item">
            <a id="piecefournir"  style="width: 130px;;margin-top: 10px;font-size: 14px;color:#f36e23;text-transform: initial;font-family: 'Poppins', 'sans-serif';" class="nav-link js-scroll blinktext" href="#">Pièces à fournir </a>
          </li>

          <div class="table_center">
                <div class="drop-down ddpf" style="z-index: 1000">
                <div class="drop-down__menu-box">
                   <ul class="drop-down__menu">
                    <a href="/piece_a_fournir">
                     <li data-name="profile" class="drop-down__item"> En Côte d'Ivoire<img src="/assets/img/document.png" alt="" style="height: 25px;display: inline-block;position: absolute;right: 0px;"></li>
                     </a>
                     <a href="/piece_a_fournir_diaspora">
                     <li data-name="dashboard" class="drop-down__item">Dans une ambassade<img src="/assets/img/document.png" alt="" style="height: 25px;display: inline-block;position: absolute;right: 0px;"></li></a>
                   </ul>
                </div>
               </div>
             </div>

          <li class="nav-item">
            <a style="font-size: 14px;text-transform: initial;font-family: 'Poppins', 'sans-serif';margin-top: 10px;" @if($currentPage =='resident_diaspora') class="nav-link js-scroll active" @else class="nav-link js-scroll" @endif href="/reclamation"> Reclamations</a>
          </li>

          @if (!Session::has('firstname'))
    
          <li class="nav-item">
            <a style="text-align: center;padding-top: 18px;vertical-align:middle ;min-height: 58px;background: #ffffff;border-radius: 5px;color: black;width: 212px;font-size: 14px;text-transform: initial;font-family: 'Poppins', 'sans-serif';" class="nav-link js-scroll" href="/connexion">Demande de Passeport </a>
          </li>
          <li class="nav-item">
            <a style="background: #f36e23;border-radius: 5px;color: white;width: 212px;font-size: 14px;text-transform: initial;font-family: 'Poppins', 'sans-serif';" class="nav-link js-scroll" href="/inscription">Vous n'avez pas de compte ? Créez un compte </a>;
          </li>
            @else
             <li class="nav-item">
              <a href="/demande_passeport"  style="background: #ffffff;border-radius: 5px;font-size: 14px;text-transform: initial;font-family: 'Poppins', 'sans-serif';margin-top: 10px;color:black"  class="nav-link js-scroll" >Demande de Passeport</a>
            </li>
            <li class="nav-item">
              <a href="#" id="userprofile" style="background: #f36e23;border-radius: 5px;font-size: 14px;text-transform: initial;font-family: 'Poppins', 'sans-serif';margin-top: 10px;"  class="nav-link js-scroll" >{{Session::get('firstname').' '.Session::get('lastname')}}</a>
            </li>
              <div class="table_center">
                <div class="drop-down profile" style="z-index: 1000;">
                <div class="drop-down__menu-box">
                   <ul class="drop-down__menu">
                     <li data-name="profile" class="drop-down__item"><a href="/espace_personnel">Mon Profil</a> <svg version="1.1" class="drop-down__item-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 350 350" style="enable-background:new 0 0 350 350;" xml:space="preserve">
                        <g>
                          <path d="M175,171.173c38.914,0,70.463-38.318,70.463-85.586C245.463,38.318,235.105,0,175,0s-70.465,38.318-70.465,85.587   C104.535,132.855,136.084,171.173,175,171.173z"></path>
                          <path d="M41.909,301.853C41.897,298.971,41.885,301.041,41.909,301.853L41.909,301.853z"></path>
                          <path d="M308.085,304.104C308.123,303.315,308.098,298.63,308.085,304.104L308.085,304.104z"></path>
                          <path d="M307.935,298.397c-1.305-82.342-12.059-105.805-94.352-120.657c0,0-11.584,14.761-38.584,14.761   s-38.586-14.761-38.586-14.761c-81.395,14.69-92.803,37.805-94.303,117.982c-0.123,6.547-0.18,6.891-0.202,6.131   c0.005,1.424,0.011,4.058,0.011,8.651c0,0,19.592,39.496,133.08,39.496c113.486,0,133.08-39.496,133.08-39.496   c0-2.951,0.002-5.003,0.005-6.399C308.062,304.575,308.018,303.664,307.935,298.397z"></path>
                        </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                        <g></g><g></g><g></g><g></g>
                        </svg></li>
                                     <li data-name="dashboard" class="drop-down__item"><a href="/logout_user">Se deconnecter</a> 

                         {{--             <svg version="1.1" class="drop-down__item-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="511.626px" height="511.627px" viewBox="0 0 511.626 511.627" style="enable-background:new 0 0 511.626 511.627;" xml:space="preserve">
                         <g>
                          <path d="M491.361,211.274c-13.511-31.599-31.689-58.813-54.529-81.658c-22.839-22.841-50.059-41.017-81.659-54.53   c-31.601-13.513-64.713-20.271-99.359-20.271c-34.644,0-67.762,6.759-99.357,20.271c-31.595,13.518-58.813,31.689-81.653,54.53   c-22.845,22.845-41.018,50.059-54.534,81.658C6.757,242.873,0,275.988,0,310.631c0,49.865,13.418,95.838,40.256,137.903   c3.614,5.52,8.754,8.278,15.417,8.278h400.281c6.66,0,11.8-2.759,15.414-8.278c26.84-42.254,40.258-88.224,40.258-137.903   C511.626,275.988,504.872,242.873,491.361,211.274z M229.973,102.069c7.142-7.139,15.752-10.709,25.84-10.709   c10.089,0,18.699,3.571,25.838,10.709c7.139,7.135,10.711,15.749,10.711,25.837s-3.572,18.699-10.711,25.837   s-15.749,10.709-25.838,10.709c-10.088,0-18.702-3.571-25.84-10.709c-7.135-7.139-10.707-15.749-10.707-25.837   S222.834,109.205,229.973,102.069z M98.929,336.469c-7.138,7.135-15.752,10.715-25.84,10.715c-10.085,0-18.699-3.58-25.837-10.715   c-7.139-7.132-10.705-15.749-10.705-25.838c0-10.088,3.566-18.698,10.705-25.837s15.752-10.708,25.837-10.708   c10.088,0,18.706,3.569,25.84,10.708c7.135,7.139,10.707,15.749,10.707,25.837C109.636,320.72,106.064,329.33,98.929,336.469z    M153.748,208.562c-7.142,7.137-15.752,10.709-25.841,10.709c-10.089,0-18.702-3.576-25.841-10.709   c-7.135-7.135-10.706-15.749-10.706-25.837s3.567-18.699,10.706-25.837c7.142-7.139,15.752-10.709,25.841-10.709   c10.088,0,18.702,3.571,25.841,10.709c7.135,7.139,10.706,15.749,10.706,25.837C164.454,192.81,160.882,201.423,153.748,208.562z    M315.482,210.99l-28.839,109.062c9.524,6.468,16.376,15.126,20.564,25.98c4.182,10.849,4.757,21.984,1.711,33.404   c-3.806,14.657-12.278,25.793-25.413,33.403c-13.135,7.614-27.026,9.521-41.686,5.712c-14.653-3.806-25.791-12.275-33.402-25.41   c-7.611-13.138-9.514-27.027-5.708-41.688c3.044-11.416,9.04-20.79,17.987-28.113c8.944-7.333,19.126-11.468,30.546-12.422   l28.837-109.064c1.331-4.948,4.186-8.711,8.562-11.281c4.381-2.565,8.945-3.184,13.706-1.853c4.764,1.334,8.425,4.139,10.991,8.42   C315.914,201.427,316.625,206.042,315.482,210.99z M357.882,208.562c-7.139-7.135-10.711-15.749-10.711-25.837   s3.572-18.699,10.711-25.837s15.749-10.709,25.838-10.709c10.088,0,18.698,3.571,25.837,10.709s10.712,15.749,10.712,25.837   c0,10.085-3.573,18.699-10.712,25.837c-7.139,7.137-15.749,10.709-25.837,10.709C373.631,219.271,365.021,215.699,357.882,208.562z    M464.374,336.469c-7.139,7.135-15.749,10.715-25.837,10.715c-10.089,0-18.699-3.58-25.838-10.715   c-7.139-7.132-10.708-15.749-10.708-25.838c0-10.088,3.569-18.698,10.708-25.837s15.749-10.708,25.838-10.708   c10.088,0,18.698,3.569,25.837,10.708s10.704,15.749,10.704,25.837C475.078,320.72,471.512,329.33,464.374,336.469z"></path>
                        </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g>
                        </g><g></g><g></g><g></g><g></g>
                        </svg> --}}
                      {{--  <i class="fa fa-sign-out" style="font-size:24px"></i>
                       <i class="fa fa-sign-out" style="font-size:36px"></i> --}}
                       {{-- <i class="fa fa-sign-out" style="font-size:48px;color:red"></i> --}}
                       {{-- <i class="bx bx-home"></i> --}}
                       <i style="font-size: 27px;position: absolute;right: -5px;" class="bx bx-log-out-circle" data-width="20" data-height="20" data-icon="bx:log-out-circle" data-rotate="180deg"></i>

                      </li>
                   </ul>
                </div>
               </div>
             </div>
           @endif
           <li class="nav-item">
             {{-- <span style="color: white;display: block;font-size: 14px;text-transform: initial;font-family: 'Poppins', 'sans-serif;">01.03.62.62.19</span> --}}             <span style="margin-top:5px;color: white;display: block;font-size: 14px;text-transform: initial;font-family: 'Poppins','sans-serif';">00225.27.22.51.08.08</span> 
             {{-- <span style="color: white;display: block;font-size: 14px;text-transform: initial;font-family: 'Poppins', 'sans-serif;'" >support@monpasseport.ci</span> --}}
           </li>
        </ul>
      </div>
    </div>
        {{--189ch court message |pour long message 290ch  --}}
       <div class="marquee marquee--long" style="--tw: 189ch; --ad: 20s;background: #f26e23;position: absolute;left: 0;">
        <span style="font-size:17px;color:white;position: relative;top: -3px;">1ère demande ou renouvellement de passeport ? Obtenez un rendez-vous personnalisé dans nos agences de Marcory et Angré Djibi via www.monpasseport.ci. Pour plus d'informations, contactez le 27 22 51 08 08
         </span>
      </div>
  </nav>





    <nav class="nav-menu" style="margin-top: 80px">


      <ul>

        <li id="contactinfomobile" class="nav-item" style="display:none;margin-bottom: 20px;">
             <span style="color: #28285e;display: block;font-weight:bold;margin-top: 10px;font-size: 14px;text-transform: initial;font-family: 'Poppins', 'sans-serif';">00225.27.22.51.08.08</span> 
             <span style="color: #28285e;display: block;font-weight:bold;font-size: 14px;text-transform: initial;font-family: 'Poppins', 'sans-serif';">support@monpasseport.ci</span>
           </li>

        <li @if($currentPage =='accueil') class="active"  @endif><a href="/accueil"><i class="bx bx-home"></i> <span>Accueil</span></a></li>

        @if (!Session::has('msisdn')) 
          {{-- expr --}}
        <li @if($currentPage =='connexion') class="active"  @endif><a href="/connexion"><i class="bx bx-user"></i> <span>Avez-vous un compte ? <br>  Connectez-vous  </span></a></li>
        <li @if($currentPage =='inscription') class="active"  @endif><a href="/inscription"><i class="bx bx-file-blank"></i> <span>Vous n'avez pas de compte? <br> Créer un compte </span></a></li>

        @endif

        <li @if($currentPage =='demande_passeport_resident' ||$currentPage =='demande_passeport_diaspora' || $currentPage =='demande_passeport' || $currentPage =='demande_passeport' ||  $currentPage =='type_demande_diaspora') class="active"  @endif><a href="/demande_passeport"><i class="bx bx-book-content"></i> <span>Demande de passeport</span></a></li>
        <li @if($currentPage =='modifier_rdv' || $currentPage =='modifier_rdv_diaspora'|| $currentPage =='modification_rdv' ) class="active"  @endif><a href="/modification_rdv"><i class="bx bx-book-content"></i> <span>Modification rendez-vous </span></a></li>

         <li id="reclamationmobile" style="display:none" @if($currentPage =='reclamation') class="active"  @endif><a href="/reclamation"><i class="bx bx-book-content"></i> <span>Reclamation </span></a></li>

         <li id="piecefounirmobile" style="display:none" @if($currentPage =='piece_a_fournir') class="active"  @endif><a href="/piece_a_fournir"><i class="bx bx-book-content"></i> <span>Pièces à fournir  </span></a></li>


        <li @if($currentPage =='faq') class="active"  @endif><a href="/faq"><i class="bx bx-server"></i> <span>FAQ</span></a></li>

         @if (Session::has('firstname'))

           <li @if($currentPage =='espace_personnel' || $currentPage =='historique_transaction' ) class="active"  @endif><a href="/espace_personnel"><i class="bx bx-server"></i> <span>Espace personnel</span></a></li>

         @endif
         <li><a href="/accueil#contact"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>

          @if (Session::has('firstname'))
            <li id="logoutmobile" style="display:none"><a style="background:red;color: white !important;" href="/logout_user"><i class="bx bx-user"></i> <span style="color: white !important;">Se deconnecter</span></a></li>
           @endif
      </ul>
    </nav><!-- .nav-menu -->


  </header><!-- End Header -->

  <style type="text/css">
  .table_center{
  display:table-cell;
  vertical-align: middle;
}
.drop-down{
    display: inline-block;
    position: relative;
}

.drop-down__button{
  background: linear-gradient(to right,#3d6def, #8FADFE);
  display: inline-block;
  line-height: 40px;
  padding: 0 18px;
  text-align: left;
  border-radius: 4px;
  box-shadow: 0px 4px 6px 0px rgba(0,0,0,0.2);
  cursor: pointer;
}

.drop-down__name {
    font-size: 9px;
    text-transform: uppercase;
    color: #fff;
    font-weight: 800;
    letter-spacing: 2px;
}

.drop-down__icon {
    width: 18px;
    vertical-align: middle;
    margin-left: 14px;
    height: 18px;
    border-radius: 50%;
    transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -ms-transition: all 0.4s;
  -o-transition: all 0.4s;
  
}



.drop-down__menu-box {
    position: absolute;
    width: 200px;
    left: -203px;
    top: 13px;
    background-color: #fff;
    border-radius: 4px;
  box-shadow: 0px 3px 6px 0px rgba(0,0,0,0.2);
     transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
 visibility: hidden;
opacity: 0;
  margin-top: 5px;
}

.drop-down__menu {
    margin: 0;
    padding: 0 13px;
    list-style: none;
  
}
.drop-down__menu-box:before{
  content:'';
  background-color: transparent;
  border-right: 8px solid transparent;
  position: absolute;
  border-left: 8px solid transparent;
  border-bottom: 8px solid #fff;
  border-top: 8px solid transparent;
  top: -15px;
  right: 18px;

}

.drop-down__menu-box:after{
  content:'';
  background-color: transparent;
}

.drop-down__item {
    font-size: 13px;
    padding: 13px 0;
    text-align: left;
    font-weight: 500;
    color: #909dc2;
    cursor: pointer;
    position: relative;
    border-bottom: 1px solid #e0e2e9;
}

.drop-down__item-icon {
    width: 15px;
    height: 15px;
    position: absolute;
    right: 0px;
    fill: #8995b6;
  
}

.drop-down__item:hover .drop-down__item-icon{
  fill: #28285e;
}

.drop-down__item:hover{
  color: #28285e;
}



.drop-down__item:last-of-type{
  border-bottom: 0;
}

.drop-down--active .drop-down__menu-box{
visibility: visible;
opacity: 1;
  margin-top: 15px;
}
.drop-down__item:before{
  content:'';
  position: absolute;
  width: 3px;
  height: 28px;
  background-color: #28285e;
  left: -13px;
  top: 50%;
  transform: translateY(-50%);
  display:none;
}

.drop-down__item:hover:before{
  display:block;
}

.submenuFaq:before{
  right: 170px !important;
}

/*marquee */
.marquee {
   /*margin: 2rem 0;*/
   font-size: 8vw;
   overflow: hidden;
}

.marquee--long { 
   font-size: 1.25vw; 
}

.marquee span {   
    display: inline-block;
    white-space: nowrap;
    color: #00112C;
    width: var(--tw);
    text-shadow: var(--tw) 0 currentColor, 
                 calc(var(--tw) * 2) 0 currentColor, 
                 calc(var(--tw) * 3) 0 currentColor,
                 calc(var(--tw) * 4) 0 currentColor;
   
    will-change: transform;
    animation: marquee var(--ad) linear infinite;
    animation-play-state: running;
}

.marquee:hover span {
    animation-play-state: running;
}

@keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-100%); }
}

/*  
 * on MacOs: System Preferences > 
 *           Accessibility > 
 *           Display > Reduce motion
 */

@media (prefers-reduced-motion: reduce) {
  .marquee span {
    animation: none;
    text-shadow: none;
    width: auto;
    display: block;
    line-height: 1.5;
    text-align: center;
    white-space: normal;
  }
}



</style>
{{-- <script type="text/javascript" src="/assets/js/plugins/cloudflare_jquery3.3.1.js"></script> --}}
<script type="text/javascript" src="/assets/js/plugins/cloudflare_jquery3.6.1.js"></script>

<script type="text/javascript">
  $(document).ready(function(){

  $('#userprofile').click(function(){
    $('.profile').toggleClass('drop-down--active');
  });

  $('#piecefournir').click(function(){
    $('.ddfaq').removeClass('drop-down--active');
    $('.ddpf').toggleClass('drop-down--active');
  });

   $('#faq').click(function(){
    
    $('.ddpf').removeClass('drop-down--active');
    $('.ddfaq').toggleClass('drop-down--active');
  });

});
</script>