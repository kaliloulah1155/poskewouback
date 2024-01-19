 @extends('layouts.master')
  @section('content')
	<section id="hero" class="d-flex flex-column justify-content-center inscription">


	    <div class="container" data-aos="zoom-in" data-aos-delay="100" >

	      <div id="pt-main" class="pt-perspective">

	    	<div class="pt-page pt-page-1">
			      <h1 style="color: white">Inscrivez vous  </h1>
			      <p  style="color: white"><span style="color: white" class="typed" data-typed-items="Pour une prise en main facile et intuitive, Et bénéficiez de la réactivité de nos services"></span></p>
			      <div class="row mt-5">
			          <div class="col-lg-8 mt-5 mt-lg-0" style="background: rgb(255 255 255 / 90%);border-radius: 5px;padding-top: 30px">

			            <form id="form_inscription" action="" method="post" role="form" class="php-email-form" style="padding: 10px">


			            	<div class="form-row">
		                                 <div class="col-md-4 form-group" style="width:50%">
		                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">M</label>
		                                    <input type="radio" class="form-control requiredField" name="civility" value="m" style="width: 50%;display: inline;height: 25px;"> 
		                                 </div>
		                                 <div class="col-md-4 form-group" style="width:50%">
		                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">MME</label>
		                                    <input type="radio" class="form-control requiredField" name="civility" value="mme" style="width: 50%;display: inline;height: 25px;"> 
		                                 </div>

		                                   <div class="col-md-4 form-group" style="width:50%">
		                                    <label style="display: inline-block;top: -7px;position: relative;font-size:12px">MLLE</label>
		                                    <input type="radio" class="form-control requiredField" name="civility" value="mme" style="width: 50%;display: inline;height: 25px;"> 
		                                 </div>
		                              </div>
			             
			              <div class="form-row">
			                  <div class="col-md-6 form-group input_wrap">
			                    <input type="text" name="lastname" class="form-control requiredField" id="lastname" data-rule="minlen:4" data-msg="Entrer au moins 4 caractères" required />
			                     <label style="display: block;text-align: left;">Nom <span style="color: red">*</span></label>
			                     <div class="validate"></div>
			                  </div>
			                  <div class="col-md-6 form-group input_wrap">
			                    <input type="text" class="form-control requiredField" name="firstname" id="firstname"  data-rule="email" data-msg="Entrer votre prénom" required />
			                     <label style="display: block;text-align: left;" >Prénoms <span style="color: red">*</span></label>
			                     <div class="validate"></div>
			                  </div>
			                </div>

			              <div class="form-row">

			                  <div class="col-md-6 form-group input_wrap">
			                   
			                    <input type="text" class="form-control requiredField" name="usertel" id="userTel" data-rule="tel" data-msg="Entrer votre numéro de téléphone" required />
			                      <label style="display: block;text-align: left;" >Numéro de téléphone <span style="color: red">*</span></label>
			                    <div class="validate"></div>
			                  </div>

			                  <div class="col-md-6 form-group input_wrap">
			                    <input type="text" class="form-control requiredField email" name="userEmail" id="userEmail"  data-rule="email" data-msg="Entrer un email valide" required />
			                    <label style="display: block;text-align: left;" >Email <span style="color: red">*</span></label>
			                    <div class="validate"></div>
			                  </div>

			              </div>

			               <div class="form-row">

			                  <div class="col-md-6 form-group input_wrap">
			                   
			                    <input type="password" class="form-control requiredField" name="password" id="password" data-rule="email" data-msg="Entrer le mot de passe" required/>
			                      <label style="display: block;text-align: left;" >Mot de passe <span style="color: red">*</span></label>
			                     <div class="validate"></div>
			                  </div>

			                  <div class="col-md-6 form-group input_wrap">
			                    
			                    <input type="password" class="form-control requiredField" name="password" id="password"  data-rule="email" data-msg="Confirmer le mot de passe" required />
			                     <label style="display: block;text-align: left;" >Confirmation Mot de passe <span style="color: red">*</span></label>
			                  <div class="validate"></div>
			                  </div>


			                  <div class="col-md-12 form-group">

		                        <input type="checkbox" class="form-control requiredField" name="demande" value="" style="display: inline-block;height: 16px;width: 17px;">

		                       <span>Accepter les termes et conditions</span> 
		                         

		                       </div>

		                        


			                  
			              </div>
			             
			              
			              <div class="mb-3">
			                <div class="error-message"></div>
			                <div class="sent-message"></div>
			              </div>
			              <div class="text-center"><button class="btn" id="createUserbtn" style="background: #f36e23;border: 0;padding: 10px 35px;color: #fff;transition: 0.4s;border-radius: 5px;" type="submit">Valider</button></div>

			              <button id="openBtn" class="btn">valider</button>

			              <p style="font-size: 12px;font-weight: 600;"> Vous avez déjà un compte ? <a href="/connexion" style="color: #f36e23">Connectez vous !</a> </p>
			            </form>

			          </div>
			      </div>
	     	</div>

	     	<div class="pt-page pt-page-2">
			  <h1><span>A Collection</span><strong>Page</strong> Transitions</h1>
			</div>


			<div id="dl-menu" class="dl-menuwrapper">
				<button class="dl-trigger">Choose a transition</button>
				<ul class="dl-menu">
					<li>						<a href="#">Move</a>
						<ul class="dl-submenu">
							<li data-animation="1"><a href="#">Move to left/ from right</a></li>
							<li data-animation="2"><a href="#">Move to right/ from left</a></li>
							<li data-animation="3"><a href="#">Move to top/ from bottom</a></li>
							<li data-animation="4"><a href="#">Move to bottom/ from top</a></li>
						</ul>
					</li>
					<li>						<a href="#">Fade</a>
						<ul class="dl-submenu">
							<li data-animation="5"><a href="#">Fade / from right</a></li>
							<li data-animation="6"><a href="#">Fade / from left</a></li>
							<li data-animation="7"><a href="#">Fade / from bottom</a></li>
							<li data-animation="8"><a href="#">Fade / from top</a></li>
							<li data-animation="9"><a href="#">Fade left / Fade right</a></li>
							<li data-animation="10"><a href="#">Fade right / Fade left</a></li>
							<li data-animation="11"><a href="#">Fade top / Fade bottom</a></li>
							<li data-animation="12"><a href="#">Fade bottom / Fade top</a></li>
						</ul>
					</li>
					<li>						<a href="#">Different easing</a>
						<ul class="dl-submenu">
							<li data-animation="13"><a href="#">Different easing / from right</a></li>
							<li data-animation="14"><a href="#">Different easing / from left</a></li>
							<li data-animation="15"><a href="#">Different easing / from bottom</a></li>
							<li data-animation="16"><a href="#">Different easing / from top</a></li>
						</ul>
					</li>
					<li>						<a href="#">Scale</a>
						<ul class="dl-submenu">
							<li data-animation="17"><a href="#">Scale down / from right</a></li>
							<li data-animation="18"><a href="#">Scale down / from left</a></li>
							<li data-animation="19"><a href="#">Scale down / from bottom</a></li>
							<li data-animation="20"><a href="#">Scale down / from top</a></li>
							<li data-animation="21"><a href="#">Scale down / scale down</a></li>
							<li data-animation="22"><a href="#">Scale up / scale up</a></li>
							<li data-animation="23"><a href="#">Move to left / scale up</a></li>
							<li data-animation="24"><a href="#">Move to right / scale up</a></li>
							<li data-animation="25"><a href="#">Move to top / scale up</a></li>
							<li data-animation="26"><a href="#">Move to bottom / scale up</a></li>
							<li data-animation="27"><a href="#">Scale down / scale up</a></li>
						</ul>
					</li>
					<li>						<a href="#">Rotate</a>
						<ul class="dl-submenu">
							<li>								<a href="#">Glue</a>
								<ul class="dl-submenu">
									<li data-animation="28"><a href="#">Glue left / from right</a></li>
									<li data-animation="29"><a href="#">Glue right / from left</a></li>
									<li data-animation="30"><a href="#">Glue bottom / from top</a></li>
									<li data-animation="31"><a href="#">Glue top / from bottom</a></li>
								</ul>
							</li>
							<li>								<a href="#">Flip</a>
								<ul class="dl-submenu">
									<li data-animation="32"><a href="#">Flip right</a></li>
									<li data-animation="33"><a href="#">Flip left</a></li>
									<li data-animation="34"><a href="#">Flip top</a></li>
									<li data-animation="35"><a href="#">Flip bottom</a></li>
								</ul>
							</li>
							<li data-animation="36"><a href="#">Fall</a></li>
							<li data-animation="37"><a href="#">Newspaper</a></li>
							<li>								<a href="#">Push / Pull</a>
								<ul class="dl-submenu">
									<li data-animation="38"><a href="#">Push left / from right</a></li>
									<li data-animation="39"><a href="#">Push right / from left</a></li>
									<li data-animation="40"><a href="#">Push top / from bottom</a></li>
									<li data-animation="41"><a href="#">Push bottom / from top</a></li>

									<li data-animation="42"><a href="#">Push left / pull right</a></li>
									<li data-animation="43"><a href="#">Push right / pull left</a></li>
									<li data-animation="44"><a href="#">Push top / pull bottom</a></li>
									<li data-animation="45"><a href="#">Push bottom / pull top</a></li>
								</ul>
							</li>
							<li>								<a href="#">Fold / Unfold</a>
								<ul class="dl-submenu">
									<li data-animation="46"><a href="#">Fold left / from right</a></li>
									<li data-animation="47"><a href="#">Fold right / from left</a></li>
									<li data-animation="48"><a href="#">Fold top / from bottom</a></li>
									<li data-animation="49"><a href="#">Fold bottom / from top</a></li>
									<li data-animation="50"><a href="#">Move to right / unfold left</a></li>
									<li data-animation="51"><a href="#">Move to left / unfold right</a></li>
									<li data-animation="52"><a href="#">Move to bottom / unfold top</a></li>
									<li data-animation="53"><a href="#">Move to top / unfold bottom</a></li>
								</ul>
							</li>
							<li>								<a href="#">Room</a>
								<ul class="dl-submenu">
									<li data-animation="54"><a href="#">Room to left</a></li>
									<li data-animation="55"><a href="#">Room to right</a></li>
									<li data-animation="56"><a href="#">Room to top</a></li>
									<li data-animation="57"><a href="#">Room to bottom</a></li>
								</ul>
							</li>
							<li>								<a href="#">Cube</a>
								<ul class="dl-submenu">
									<li data-animation="58"><a href="#">Cube to left</a></li>
									<li data-animation="59"><a href="#">Cube to right</a></li>
									<li data-animation="60"><a href="#">Cube to top</a></li>
									<li data-animation="61"><a href="#">Cube to bottom</a></li>
								</ul>
							</li>
							<li>								<a href="#">Carousel</a>
								<ul class="dl-submenu">
									<li data-animation="62"><a href="#">Carousel to left</a></li>
									<li data-animation="63"><a href="#">Carousel to right</a></li>
									<li data-animation="64"><a href="#">Carousel to top</a></li>
									<li data-animation="65"><a href="#">Carousel to bottom</a></li>
								</ul>
							</li>
							<li data-animation="66"><a href="#">Sides</a></li>
						</ul>
					</li>
					<li data-animation="67"><a href="#">Slide</a></li>
				</ul>
			</div>



	      </div>
	    </div>


	</section>



	{{-- <div id="pt-main" class="pt-perspective">
			<div class="pt-page pt-page-1">
			  <h1><span>A Collection</span><strong>Page</strong> Transitions</h1>
			</div>
			<div class="pt-page pt-page-2">
			  <h1><span>A Collection</span><strong>Page</strong> Transitions</h1>
			</div>
			<div class="pt-page pt-page-3">
			  <h1><span>A Collection</span><strong>Page</strong> Transitions</h1>
			</div>
			<div class="pt-page pt-page-4">
			  <h1><span>A Collection</span><strong>Page</strong> Transitions</h1>
			</div>
			<div class="pt-page pt-page-5">
			  <h1><span>A Collection</span><strong>Page</strong> Transitions</h1>
			</div>
			<div class="pt-page pt-page-6">
			  <h1><span>A Collection</span><strong>Page</strong> Transitions</h1>
			</div>
		</div> --}}



  @endsection
    @section('footer') 
	<script src="/assets/js/inscription.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

	<script type="text/javascript">

		;( function( $, window, undefined ) {

	'use strict';

	// global
	var Modernizr = window.Modernizr, $body = $( 'body' );
	$.DLMenu = function( options, element ) {
		this.$el = $( element );
		this._init( options );
	};

	// the options
	$.DLMenu.defaults = {
		// classes for the animation effects
		animationClasses : { classin : 'dl-animate-in-1', classout : 'dl-animate-out-1' },
		// callback: click a link that has a sub menu
		// el is the link element (li); name is the level name
		onLevelClick : function( el, name ) { return false; },
		// callback: click a link that does not have a sub menu
		// el is the link element (li); ev is the event obj
		onLinkClick : function( el, ev ) { return false; }
	};

	$.DLMenu.prototype = {
		_init : function( options ) {

			// options
			this.options = $.extend( true, {}, $.DLMenu.defaults, options );
			// cache some elements and initialize some variables
			this._config();			
			var animEndEventNames = {
					'WebkitAnimation' : 'webkitAnimationEnd',
					'OAnimation' : 'oAnimationEnd',
					'msAnimation' : 'MSAnimationEnd',
					'animation' : 'animationend'
				},
				transEndEventNames = {
					'WebkitTransition' : 'webkitTransitionEnd',
					'MozTransition' : 'transitionend',
					'OTransition' : 'oTransitionEnd',
					'msTransition' : 'MSTransitionEnd',
					'transition' : 'transitionend'
				};
			// animation end event name
			this.animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ] + '.dlmenu';
			// transition end event name
			this.transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ] + '.dlmenu',
			// support for css animations and css transitions
			this.supportAnimations = Modernizr.cssanimations,
			this.supportTransitions = Modernizr.csstransitions;
			this._initEvents();
		},
		_config : function() {
			this.open = false;
			this.$trigger = this.$el.children( '.dl-trigger' );
			this.$menu = this.$el.children( 'ul.dl-menu' );
			this.$menuitems = this.$menu.find( 'li:not(.dl-back)' );
			this.$el.find( 'ul.dl-submenu' ).prepend( '<li class="dl-back"><a href="#">back</a></li>' );
			this.$back = this.$menu.find( 'li.dl-back' );
		},
		_initEvents : function() {

			var self = this;
			this.$trigger.on( 'click.dlmenu', function() {				
				if( self.open ) {	self._closeMenu();} 
				else {	self._openMenu();	}
				return false;
			} );

			this.$menuitems.on( 'click.dlmenu', function( event ) {				
				event.stopPropagation();
				var $item = $(this),
					$submenu = $item.children( 'ul.dl-submenu' );
				if( $submenu.length > 0 ) {
					var $flyin = $submenu.clone().css( 'opacity', 0 ).insertAfter( self.$menu ),
						onAnimationEndFn = function() {
							self.$menu.off( self.animEndEventName ).removeClass( self.options.animationClasses.classout ).addClass( 'dl-subview' );
							$item.addClass( 'dl-subviewopen' ).parents( '.dl-subviewopen:first' ).removeClass( 'dl-subviewopen' ).addClass( 'dl-subview' );
							$flyin.remove();
						};
					setTimeout( function() {
						$flyin.addClass( self.options.animationClasses.classin );
						self.$menu.addClass( self.options.animationClasses.classout );
						if( self.supportAnimations ) {
							self.$menu.on( self.animEndEventName, onAnimationEndFn );
						}
						else {onAnimationEndFn.call();}
						self.options.onLevelClick( $item, $item.children( 'a:first' ).text() );
					} );
					return false;
				}
				else {self.options.onLinkClick( $item, event );}
			} );
			this.$back.on( 'click.dlmenu', function( event ) {				
				var $this = $( this ),
					$submenu = $this.parents( 'ul.dl-submenu:first' ),
					$item = $submenu.parent(),
					$flyin = $submenu.clone().insertAfter( self.$menu );
				var onAnimationEndFn = function() {
					self.$menu.off( self.animEndEventName ).removeClass( self.options.animationClasses.classin );
					$flyin.remove();
				};
				setTimeout( function() {
					$flyin.addClass( self.options.animationClasses.classout );
					self.$menu.addClass( self.options.animationClasses.classin );
					if( self.supportAnimations ) {
						self.$menu.on( self.animEndEventName, onAnimationEndFn );
					}
					else {onAnimationEndFn.call();}
					$item.removeClass( 'dl-subviewopen' );					
					var $subview = $this.parents( '.dl-subview:first' );
					if( $subview.is( 'li' ) ) {$subview.addClass( 'dl-subviewopen' );}
					$subview.removeClass( 'dl-subview' );
				} );
				return false;
			} );			
		},
		closeMenu : function() {if( this.open ) {this._closeMenu();}},
		_closeMenu : function() {
			var self = this,
				onTransitionEndFn = function() {
					self.$menu.off( self.transEndEventName );
					self._resetMenu();
				};			
			this.$menu.removeClass( 'dl-menuopen' );
			this.$menu.addClass( 'dl-menu-toggle' );
			this.$trigger.removeClass( 'dl-active' );
			
			if( this.supportTransitions ) {
				this.$menu.on( this.transEndEventName, onTransitionEndFn );
			}
			else {onTransitionEndFn.call();}
			this.open = false;
		},
		openMenu : function() {
			if( !this.open ) {this._openMenu();}
		},
		_openMenu : function() {
			var self = this;
			// clicking somewhere else makes the menu close
			$body.off( 'click' ).on( 'click.dlmenu', function() {
				self._closeMenu() ;
			} );
			this.$menu.addClass( 'dl-menuopen dl-menu-toggle' ).on( this.transEndEventName, function() {
				$( this ).removeClass( 'dl-menu-toggle' );
			} );
			this.$trigger.addClass( 'dl-active' );
			this.open = true;
		},
		// resets the menu to its original state (first level of options)
		_resetMenu : function() {
			this.$menu.removeClass( 'dl-subview' );
			this.$menuitems.removeClass( 'dl-subview dl-subviewopen' );
		}
	};
	var logError = function( message ) {
		if ( window.console ) {window.console.error( message );}
	};
	$.fn.dlmenu = function( options ) {
		if ( typeof options === 'string' ) {
			var args = Array.prototype.slice.call( arguments, 1 );
			this.each(function() {
				var instance = $.data( this, 'dlmenu' );
				if ( !instance ) {
					logError( "cannot call methods on dlmenu prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;
				}
				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {
					logError( "no such method '" + options + "' for dlmenu instance" );
					return;
				}
				instance[ options ].apply( instance, args );
			});
		} 
		else {
			this.each(function() {	
				var instance = $.data( this, 'dlmenu' );
				if ( instance ) {instance._init();}
				else {instance = $.data( this, 'dlmenu', new $.DLMenu(options,this));}
			});
		}
		return this;
	};
} )(jQuery,window);

// PageTransition
var PageTransitions = (function() {

	var $main = $( '#pt-main' ),
		$pages = $main.children( 'div.pt-page' ),
		$iterate = $( '#iterateEffects' ),
		animcursor = 1,
		pagesCount = $pages.length,
		current = 0,
		isAnimating = false,
		endCurrPage = false,
		endNextPage = false,
		animEndEventNames = {
			'WebkitAnimation' : 'webkitAnimationEnd',
			'OAnimation' : 'oAnimationEnd',
			'msAnimation' : 'MSAnimationEnd',
			'animation' : 'animationend'
		},
		// animation end event name
		animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
		// support css animations
		support = Modernizr.cssanimations;
	
	function init() {
    
		$pages.each( function() {
			var $page = $( this );
			$page.data( 'originalClassList', $page.attr( 'class' ) );
		} );

		$pages.eq( current ).addClass( 'pt-page-current' );

		$( '#dl-menu' ).dlmenu( {
			animationClasses : { in : 'dl-animate-in-2', out : 'dl-animate-out-2' },
			onLinkClick : function( el, ev ) {
				ev.preventDefault();
				nextPage( el.data( 'animation' ) );
			}
		});

		$iterate.on( 'click', function() {
			if( isAnimating ) {return false;}
			if( animcursor > 67 ) {animcursor = 1;}
			nextPage( animcursor );
			++animcursor;
		} );

	}

	function nextPage( animation ) {

		if( isAnimating ) {return false;}
		isAnimating = true;
		
		var $currPage = $pages.eq( current );
		if( current < pagesCount - 1 ) {++current;}
		else {current = 0;}

		var $nextPage = $pages.eq( current ).addClass( 'pt-page-current' ),
			outClass = '', inClass = '';

		switch( animation ) {

			case 1:
				outClass = 'pt-page-moveToLeft';
				inClass = 'pt-page-moveFromRight';
				break;
			case 2:
				outClass = 'pt-page-moveToRight';
				inClass = 'pt-page-moveFromLeft';
				break;
			case 3:
				outClass = 'pt-page-moveToTop';
				inClass = 'pt-page-moveFromBottom';
				break;
			case 4:
				outClass = 'pt-page-moveToBottom';
				inClass = 'pt-page-moveFromTop';
				break;
			case 5:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromRight pt-page-ontop';
				break;
			case 6:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromLeft pt-page-ontop';
				break;
			case 7:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromBottom pt-page-ontop';
				break;
			case 8:
				outClass = 'pt-page-fade';
				inClass = 'pt-page-moveFromTop pt-page-ontop';
				break;
			case 9:
				outClass = 'pt-page-moveToLeftFade';
				inClass = 'pt-page-moveFromRightFade';
				break;
			case 10:
				outClass = 'pt-page-moveToRightFade';
				inClass = 'pt-page-moveFromLeftFade';
				break;
			case 11:
				outClass = 'pt-page-moveToTopFade';
				inClass = 'pt-page-moveFromBottomFade';
				break;
			case 12:
				outClass = 'pt-page-moveToBottomFade';
				inClass = 'pt-page-moveFromTopFade';
				break;
			case 13:
				outClass = 'pt-page-moveToLeftEasing pt-page-ontop';
				inClass = 'pt-page-moveFromRight';
				break;
			case 14:
				outClass = 'pt-page-moveToRightEasing pt-page-ontop';
				inClass = 'pt-page-moveFromLeft';
				break;
			case 15:
				outClass = 'pt-page-moveToTopEasing pt-page-ontop';
				inClass = 'pt-page-moveFromBottom';
				break;
			case 16:
				outClass = 'pt-page-moveToBottomEasing pt-page-ontop';
				inClass = 'pt-page-moveFromTop';
				break;
			case 17:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromRight pt-page-ontop';
				break;
			case 18:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromLeft pt-page-ontop';
				break;
			case 19:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromBottom pt-page-ontop';
				break;
			case 20:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-moveFromTop pt-page-ontop';
				break;
			case 21:
				outClass = 'pt-page-scaleDown';
				inClass = 'pt-page-scaleUpDown pt-page-delay300';
				break;
			case 22:
				outClass = 'pt-page-scaleDownUp';
				inClass = 'pt-page-scaleUp pt-page-delay300';
				break;
			case 23:
				outClass = 'pt-page-moveToLeft pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 24:
				outClass = 'pt-page-moveToRight pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 25:
				outClass = 'pt-page-moveToTop pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 26:
				outClass = 'pt-page-moveToBottom pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 27:
				outClass = 'pt-page-scaleDownCenter';
				inClass = 'pt-page-scaleUpCenter pt-page-delay400';
				break;
			case 28:
				outClass = 'pt-page-rotateRightSideFirst';
				inClass = 'pt-page-moveFromRight pt-page-delay200 pt-page-ontop';
				break;
			case 29:
				outClass = 'pt-page-rotateLeftSideFirst';
				inClass = 'pt-page-moveFromLeft pt-page-delay200 pt-page-ontop';
				break;
			case 30:
				outClass = 'pt-page-rotateTopSideFirst';
				inClass = 'pt-page-moveFromTop pt-page-delay200 pt-page-ontop';
				break;
			case 31:
				outClass = 'pt-page-rotateBottomSideFirst';
				inClass = 'pt-page-moveFromBottom pt-page-delay200 pt-page-ontop';
				break;
			case 32:
				outClass = 'pt-page-flipOutRight';
				inClass = 'pt-page-flipInLeft pt-page-delay500';
				break;
			case 33:
				outClass = 'pt-page-flipOutLeft';
				inClass = 'pt-page-flipInRight pt-page-delay500';
				break;
			case 34:
				outClass = 'pt-page-flipOutTop';
				inClass = 'pt-page-flipInBottom pt-page-delay500';
				break;
			case 35:
				outClass = 'pt-page-flipOutBottom';
				inClass = 'pt-page-flipInTop pt-page-delay500';
				break;
			case 36:
				outClass = 'pt-page-rotateFall pt-page-ontop';
				inClass = 'pt-page-scaleUp';
				break;
			case 37:
				outClass = 'pt-page-rotateOutNewspaper';
				inClass = 'pt-page-rotateInNewspaper pt-page-delay500';
				break;
			case 38:
				outClass = 'pt-page-rotatePushLeft';
				inClass = 'pt-page-moveFromRight';
				break;
			case 39:
				outClass = 'pt-page-rotatePushRight';
				inClass = 'pt-page-moveFromLeft';
				break;
			case 40:
				outClass = 'pt-page-rotatePushTop';
				inClass = 'pt-page-moveFromBottom';
				break;
			case 41:
				outClass = 'pt-page-rotatePushBottom';
				inClass = 'pt-page-moveFromTop';
				break;
			case 42:
				outClass = 'pt-page-rotatePushLeft';
				inClass = 'pt-page-rotatePullRight pt-page-delay180';
				break;
			case 43:
				outClass = 'pt-page-rotatePushRight';
				inClass = 'pt-page-rotatePullLeft pt-page-delay180';
				break;
			case 44:
				outClass = 'pt-page-rotatePushTop';
				inClass = 'pt-page-rotatePullBottom pt-page-delay180';
				break;
			case 45:
				outClass = 'pt-page-rotatePushBottom';
				inClass = 'pt-page-rotatePullTop pt-page-delay180';
				break;
			case 46:
				outClass = 'pt-page-rotateFoldLeft';
				inClass = 'pt-page-moveFromRightFade';
				break;
			case 47:
				outClass = 'pt-page-rotateFoldRight';
				inClass = 'pt-page-moveFromLeftFade';
				break;
			case 48:
				outClass = 'pt-page-rotateFoldTop';
				inClass = 'pt-page-moveFromBottomFade';
				break;
			case 49:
				outClass = 'pt-page-rotateFoldBottom';
				inClass = 'pt-page-moveFromTopFade';
				break;
			case 50:
				outClass = 'pt-page-moveToRightFade';
				inClass = 'pt-page-rotateUnfoldLeft';
				break;
			case 51:
				outClass = 'pt-page-moveToLeftFade';
				inClass = 'pt-page-rotateUnfoldRight';
				break;
			case 52:
				outClass = 'pt-page-moveToBottomFade';
				inClass = 'pt-page-rotateUnfoldTop';
				break;
			case 53:
				outClass = 'pt-page-moveToTopFade';
				inClass = 'pt-page-rotateUnfoldBottom';
				break;
			case 54:
				outClass = 'pt-page-rotateRoomLeftOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomLeftIn';
				break;
			case 55:
				outClass = 'pt-page-rotateRoomRightOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomRightIn';
				break;
			case 56:
				outClass = 'pt-page-rotateRoomTopOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomTopIn';
				break;
			case 57:
				outClass = 'pt-page-rotateRoomBottomOut pt-page-ontop';
				inClass = 'pt-page-rotateRoomBottomIn';
				break;
			case 58:
				outClass = 'pt-page-rotateCubeLeftOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeLeftIn';
				break;
			case 59:
				outClass = 'pt-page-rotateCubeRightOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeRightIn';
				break;
			case 60:
				outClass = 'pt-page-rotateCubeTopOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeTopIn';
				break;
			case 61:
				outClass = 'pt-page-rotateCubeBottomOut pt-page-ontop';
				inClass = 'pt-page-rotateCubeBottomIn';
				break;
			case 62:
				outClass = 'pt-page-rotateCarouselLeftOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselLeftIn';
				break;
			case 63:
				outClass = 'pt-page-rotateCarouselRightOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselRightIn';
				break;
			case 64:
				outClass = 'pt-page-rotateCarouselTopOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselTopIn';
				break;
			case 65:
				outClass = 'pt-page-rotateCarouselBottomOut pt-page-ontop';
				inClass = 'pt-page-rotateCarouselBottomIn';
				break;
			case 66:
				outClass = 'pt-page-rotateSidesOut';
				inClass = 'pt-page-rotateSidesIn pt-page-delay200';
				break;
			case 67:
				outClass = 'pt-page-rotateSlideOut';
				inClass = 'pt-page-rotateSlideIn';
				break;

		}
    
		$currPage.addClass( outClass ).on( animEndEventName, function() {
			$currPage.off( animEndEventName );
			endCurrPage = true;
			if( endNextPage ) {onEndAnimation( $currPage, $nextPage );}
		});
		$nextPage.addClass( inClass ).on( animEndEventName, function() {
			$nextPage.off( animEndEventName );
			endNextPage = true;
			if( endCurrPage ) {onEndAnimation( $currPage, $nextPage );}
		});
		if( !support ) {onEndAnimation( $currPage, $nextPage );}

	}

	function onEndAnimation( $outpage, $inpage ) {
		endCurrPage = false;
		endNextPage = false;
		resetPage( $outpage, $inpage );
		isAnimating = false;
	}

	function resetPage( $outpage, $inpage ) {
		$outpage.attr( 'class', $outpage.data( 'originalClassList' ) );
		$inpage.attr( 'class', $inpage.data( 'originalClassList' ) + ' pt-page-current' );
	}
	init();
	return { init : init };
})();


	</script>
	<style type="text/css">


.clearfix:before, .clearfix:after { 
  content: " "; 
  display: table;
}
.clearfix:after { clear: both; }
body {
	font-family: 'Lato', Calibri, Arial, sans-serif;
	color: #fff;
	background: #08F;
	overflow: hidden;
}

.pt-perspective {
	position: relative;
	width: 100%;
	height: 100%;
	-webkit-perspective: 1200px;
	-moz-perspective: 1200px;
	perspective: 1200px;
}
.pt-page {
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	visibility: hidden;
	overflow: hidden;
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	backface-visibility: hidden;
	-webkit-transform: translate3d(0, 0, 0);
	-moz-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	transform-style: preserve-3d;
}
.pt-page-current,.no-js .pt-page {
	visibility: visible;
	z-index: 1;
}
.no-js body {	overflow: auto;}
.pt-page-ontop {	z-index: 999;}

/* Text Styles, Colors, Backgrounds */
.pt-page h1 {
	position: absolute;
	font-weight: 300;
	font-size: 4.4em;
	line-height: 1;
	letter-spacing: 6px;
	margin: 0;
	top: 12%;
	width: 100%;
	text-align: center;
	text-transform: uppercase;
	word-spacing: -0.3em;
}
.pt-page h1 span {
	font-family: 'Satisfy', serif;
	font-weight: 400;
	font-size: 40%;
	text-transform: none;
	word-spacing: 0;
	letter-spacing: 0;
	display: block;
	opacity: 0.4;
}
.pt-page h1 strong {	color: rgba(0,0,0,0.1);}
.pt-page-1 {	background: #0ac2d2;}
.pt-page-2 {	background: #7bb7fa;}
.pt-page-3 {	background: #60d7a9;}
.pt-page-4 {	background: #fdc162;}
.pt-page-5 {	background: #fd6a62;}
.pt-page-6 {	background: #f68dbb;}

/* Triggers (menu and button) */
.pt-triggers {
	position: absolute;
	width: 300px;
	z-index: 999999;
	top: 12%;
	left: 50%;
	margin-top: 130px;
	-webkit-transform: translateX(-50%);
	-moz-transform: translateX(-50%);
	-ms-transform: translateX(-50%); 
	transform: translateX(-50%);
}
.no-js .pt-triggers {	display: none;}
.pt-triggers .dl-menuwrapper button,.pt-touch-button {
	border: none;
	font-size: 13px;
	font-weight: 700;
	text-transform: uppercase;
	margin: 10px 0 20px;
	padding: 0px 20px;
	line-height: 50px;
	height: 50px;
	letter-spacing: 1px;
	width: 100%;
	cursor: pointer;
	display: block;
	font-family: 'Lato', Calibri, Arial, sans-serif;
	box-shadow: 0 3px 0 rgba(0,0,0,0.1);
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.pt-touch-button {
	background: #fff;
	color: #aaa;
}
.pt-triggers .dl-menuwrapper button {margin-bottom: 0;}
.pt-touch-button:active {box-shadow: 0 1px 0 rgba(0,0,0,0.1);}
.touch .pt-triggers .dl-menuwrapper {display: none;}
.pt-message {
	display: none;
	position: absolute;
	z-index: 99999;
	bottom: 0;
	left: 0;
	width: 100%;
	background: #da475c;
	color: #fff;
	text-align: center;
}
.pt-message p {
	margin: 0;
	line-height: 60px;
	font-size: 26px;
}
.no-cssanimations .pt-message {display: block;}
@media screen and (max-width: 47.4375em) {
	.pt-page h1 {font-size: 3em;}
	.pt-triggers .dl-menuwrapper {display: none;}
}
@media screen and (max-height: 45.9em) {
	.pt-triggers .dl-menuwrapper li a {
		padding-top: 2px;
		padding-bottom: 2px;
	}
	.pt-triggers .dl-menuwrapper li.dl-back:after, 
  .dl-menuwrapper li > a:not(:only-child):after {line-height: 24px;}
}
@media screen and (max-height: 38em) { 
	.pt-triggers .dl-menuwrapper {display: none;}
}
.dl-menuwrapper {
	width: 300px;
	position: relative;
	-webkit-perspective: 1000px;
	-moz-perspective: 1000px;
	perspective: 1000px;
	-webkit-perspective-origin: 50% 200%;
	-moz-perspective-origin: 50% 200%;
	perspective-origin: 50% 200%;
}
.dl-menuwrapper:first-child {	margin-right: 100px;}
.dl-menuwrapper button {
	display: block;
	width: 100%;
	margin: 0;
	border: none;
	overflow: hidden;
	position: relative;
	cursor: pointer;
	outline: none;
}
.dl-menuwrapper ul {
	padding: 0;
	list-style: none;
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	transform-style: preserve-3d;
}
.dl-menuwrapper li {	position: relative;}
.dl-menuwrapper li a {
	display: block;
	position: relative;
	padding: 7px 10px;
	font-size: 13px;
	line-height: 20px;
	font-weight: 700;
	outline: none;
	text-transform: uppercase;
	letter-spacing: 1px;
}
.dl-menuwrapper button,.dl-menuwrapper li a {
	background: #fff;
	color: #aaa;
}
.no-touch .dl-menuwrapper li a:hover {background: #f8f8f8;}
.dl-menuwrapper li.dl-back > a {
	padding-left: 30px;
	background: #f2f2f2;
}
.dl-menuwrapper li.dl-back:after,
.dl-menuwrapper li > a:not(:only-child):after,
.dl-menuwrapper button:after {
	position: absolute;
	top: 0;
	line-height: 33px;
	color: #ddd;
	font-family: 'FontAwesome';
	speak: none;
	-webkit-font-smoothing: antialiased;
	content: "\f054";
}
.dl-menuwrapper button:after {
	line-height: 50px;
	right: 15px;
	-webkit-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
	-ms-transform: rotate(90deg);
	transform: rotate(90deg);
}
.dl-menuwrapper li.dl-back:after {
	left: 10px;
	-webkit-transform: rotate(180deg);
	-moz-transform: rotate(180deg);
	-ms-transform: rotate(180deg);
	transform: rotate(180deg);
}
.dl-menuwrapper li > a:after {
	right: 10px;
	color: rgba(0,0,0,0.15);
}
.dl-menuwrapper .dl-menu {
	margin: 5px 0 0 0;
	position: absolute;
	width: 100%;
	opacity: 0;
	pointer-events: none;
	box-shadow: 0 3px 0 rgba(0,0,0,0.1);
	-webkit-transform: translateY(10px);
	-moz-transform: translateY(10px);
	transform: translateY(10px);
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	backface-visibility: hidden;
}
.dl-menuwrapper .dl-menu.dl-menu-toggle {
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.dl-menuwrapper .dl-menu.dl-menuopen {
	opacity: 1;
	pointer-events: auto;
	-webkit-transform: translateY(0px);
	-moz-transform: translateY(0px);
	transform: translateY(0px);
}

/* Hide the inner submenus */
.dl-menuwrapper li .dl-submenu, .dl-menu.dl-subview li,
.dl-menu.dl-subview li.dl-subviewopen > a,
.dl-menu.dl-subview li.dl-subview > a {	display: none;}
.dl-menu.dl-subview li.dl-subview,
.dl-menu.dl-subview li.dl-subview .dl-submenu,
.dl-menu.dl-subview li.dl-subviewopen,
.dl-menu.dl-subview li.dl-subviewopen > .dl-submenu,
.dl-menu.dl-subview li.dl-subviewopen > .dl-submenu > li {display: block;}
.dl-menuwrapper > .dl-submenu {
	position: absolute;
	width: 100%;
	top: 55px; /* This needs to be adjusted to the button */
	left: 0;
	margin: 0;
}
.dl-menu.dl-animate-out-1 {
	-webkit-animation: MenuAnimOut1 0.4s linear forwards;
	-moz-animation: MenuAnimOut1 0.4s linear forwards;
	animation: MenuAnimOut1 0.4s linear forwards;
}
.dl-menu.dl-animate-out-2 {
	-webkit-animation: MenuAnimOut2 0.3s ease-in-out forwards;
	-moz-animation: MenuAnimOut2 0.3s ease-in-out forwards;
	animation: MenuAnimOut2 0.3s ease-in-out forwards;
}
.dl-menu.dl-animate-out-3 {
	-webkit-animation: MenuAnimOut3 0.4s ease forwards;
	-moz-animation: MenuAnimOut3 0.4s ease forwards;
	animation: MenuAnimOut3 0.4s ease forwards;
}
.dl-menu.dl-animate-out-4 {
	-webkit-animation: MenuAnimOut4 0.4s ease forwards;
	-moz-animation: MenuAnimOut4 0.4s ease forwards;
	animation: MenuAnimOut4 0.4s ease forwards;
}
.dl-menu.dl-animate-out-5 {
	-webkit-animation: MenuAnimOut5 0.4s ease forwards;
	-moz-animation: MenuAnimOut5 0.4s ease forwards;
	animation: MenuAnimOut5 0.4s ease forwards;
}
@-webkit-keyframes MenuAnimOut1 {
	50% {
		-webkit-transform: translateZ(-250px) rotateY(30deg);
	}
	75% {
		-webkit-transform: translateZ(-372.5px) rotateY(15deg);
		opacity: .5;
	}
	100% {
		-webkit-transform: translateZ(-500px) rotateY(0deg);
		opacity: 0;
	}
}
@-webkit-keyframes MenuAnimOut2 {
	100% {
		-webkit-transform: translateX(-100%);
		opacity: 0;
	}
}
@-webkit-keyframes MenuAnimOut3 {
	100% {
		-webkit-transform: translateZ(300px);
		opacity: 0;
	}
}
@-webkit-keyframes MenuAnimOut4 {
	100% {
		-webkit-transform: translateZ(-300px);
		opacity: 0;
	}
}
@-webkit-keyframes MenuAnimOut5 {
	100% {
		-webkit-transform: translateY(40%);
		opacity: 0;
	}
}
@-moz-keyframes MenuAnimOut1 {
	50% {
		-moz-transform: translateZ(-250px) rotateY(30deg);
	}
	75% {
		-moz-transform: translateZ(-372.5px) rotateY(15deg);
		opacity: .5;
	}
	100% {
		-moz-transform: translateZ(-500px) rotateY(0deg);
		opacity: 0;
	}
}
@-moz-keyframes MenuAnimOut2 {
	100% {
		-moz-transform: translateX(-100%);
		opacity: 0;
	}
}
@-moz-keyframes MenuAnimOut3 {
	100% {
		-moz-transform: translateZ(300px);
		opacity: 0;
	}
}
@-moz-keyframes MenuAnimOut4 {
	100% {
		-moz-transform: translateZ(-300px);
		opacity: 0;
	}
}

@-moz-keyframes MenuAnimOut5 {
	100% {
		-moz-transform: translateY(40%);
		opacity: 0;
	}
}
@keyframes MenuAnimOut1 {
	50% {
		transform: translateZ(-250px) rotateY(30deg);
	}
	75% {
		transform: translateZ(-372.5px) rotateY(15deg);
		opacity: .5;
	}
	100% {
		transform: translateZ(-500px) rotateY(0deg);
		opacity: 0;
	}
}
@keyframes MenuAnimOut2 {
	100% {
		transform: translateX(-100%);
		opacity: 0;
	}
}
@keyframes MenuAnimOut3 {
	100% {
		transform: translateZ(300px);
		opacity: 0;
	}
}
@keyframes MenuAnimOut4 {
	100% {
		transform: translateZ(-300px);
		opacity: 0;
	}
}
@keyframes MenuAnimOut5 {
	100% {
		transform: translateY(40%);
		opacity: 0;
	}
}
.dl-menu.dl-animate-in-1 {
	-webkit-animation: MenuAnimIn1 0.3s linear forwards;
	-moz-animation: MenuAnimIn1 0.3s linear forwards;
	animation: MenuAnimIn1 0.3s linear forwards;
}
.dl-menu.dl-animate-in-2 {
	-webkit-animation: MenuAnimIn2 0.3s ease-in-out forwards;
	-moz-animation: MenuAnimIn2 0.3s ease-in-out forwards;
	animation: MenuAnimIn2 0.3s ease-in-out forwards;
}
.dl-menu.dl-animate-in-3 {
	-webkit-animation: MenuAnimIn3 0.4s ease forwards;
	-moz-animation: MenuAnimIn3 0.4s ease forwards;
	animation: MenuAnimIn3 0.4s ease forwards;
}
.dl-menu.dl-animate-in-4 {
	-webkit-animation: MenuAnimIn4 0.4s ease forwards;
	-moz-animation: MenuAnimIn4 0.4s ease forwards;
	animation: MenuAnimIn4 0.4s ease forwards;
}
.dl-menu.dl-animate-in-5 {
	-webkit-animation: MenuAnimIn5 0.4s ease forwards;
	-moz-animation: MenuAnimIn5 0.4s ease forwards;
	animation: MenuAnimIn5 0.4s ease forwards;
}
@-webkit-keyframes MenuAnimIn1 {
	0% {
		-webkit-transform: translateZ(-500px) rotateY(0deg);
		opacity: 0;
	}
	20% {
		-webkit-transform: translateZ(-250px) rotateY(30deg);
		opacity: 0.5;
	}
	100% {
		-webkit-transform: translateZ(0px) rotateY(0deg);
		opacity: 1;
	}
}
@-webkit-keyframes MenuAnimIn2 {
	0% {
		-webkit-transform: translateX(-100%);
		opacity: 0;
	}
	100% {
		-webkit-transform: translateX(0px);
		opacity: 1;
	}
}
@-webkit-keyframes MenuAnimIn3 {
	0% {
		-webkit-transform: translateZ(300px);
		opacity: 0;
	}
	100% {
		-webkit-transform: translateZ(0px);
		opacity: 1;
	}
}
@-webkit-keyframes MenuAnimIn4 {
	0% {
		-webkit-transform: translateZ(-300px);
		opacity: 0;
	}
	100% {
		-webkit-transform: translateZ(0px);
		opacity: 1;
	}
}
@-webkit-keyframes MenuAnimIn5 {
	0% {
		-webkit-transform: translateY(40%);
		opacity: 0;
	}
	100% {
		-webkit-transform: translateY(0);
		opacity: 1;
	}
}
@-moz-keyframes MenuAnimIn1 {
	0% {
		-moz-transform: translateZ(-500px) rotateY(0deg);
		opacity: 0;
	}
	20% {
		-moz-transform: translateZ(-250px) rotateY(30deg);
		opacity: 0.5;
	}
	100% {
		-moz-transform: translateZ(0px) rotateY(0deg);
		opacity: 1;
	}
}

@-moz-keyframes MenuAnimIn2 {
	0% {
		-moz-transform: translateX(-100%);
		opacity: 0;
	}
	100% {
		-moz-transform: translateX(0px);
		opacity: 1;
	}
}
@-moz-keyframes MenuAnimIn3 {
	0% {
		-moz-transform: translateZ(300px);
		opacity: 0;
	}
	100% {
		-moz-transform: translateZ(0px);
		opacity: 1;
	}
}
@-moz-keyframes MenuAnimIn4 {
	0% {
		-moz-transform: translateZ(-300px);
		opacity: 0;
	}
	100% {
		-moz-transform: translateZ(0px);
		opacity: 1;
	}
}
@-moz-keyframes MenuAnimIn5 {
	0% {
		-moz-transform: translateY(40%);
		opacity: 0;
	}
	100% {
		-moz-transform: translateY(0);
		opacity: 1;
	}
}
@keyframes MenuAnimIn1 {
	0% {
		transform: translateZ(-500px) rotateY(0deg);
		opacity: 0;
	}
	20% {
		transform: translateZ(-250px) rotateY(30deg);
		opacity: 0.5;
	}
	100% {
		transform: translateZ(0px) rotateY(0deg);
		opacity: 1;
	}
}
@keyframes MenuAnimIn2 {
	0% {
		transform: translateX(-100%);
		opacity: 0;
	}
	100% {
		transform: translateX(0px);
		opacity: 1;
	}
}
@keyframes MenuAnimIn3 {
	0% {
		transform: translateZ(300px);
		opacity: 0;
	}
	100% {
		transform: translateZ(0px);
		opacity: 1;
	}
}
@keyframes MenuAnimIn4 {
	0% {
		transform: translateZ(-300px);
		opacity: 0;
	}
	100% {
		transform: translateZ(0px);
		opacity: 1;
	}
}
@keyframes MenuAnimIn5 {
	0% {
		transform: translateY(40%);
		opacity: 0;
	}
	100% {
		transform: translateY(0);
		opacity: 1;
	}
}
.dl-menuwrapper > .dl-submenu.dl-animate-in-1 {
	-webkit-animation: SubMenuAnimIn1 0.4s ease forwards;
	-moz-animation: SubMenuAnimIn1 0.4s ease forwards;
	animation: SubMenuAnimIn1 0.4s ease forwards;
}
.dl-menuwrapper > .dl-submenu.dl-animate-in-2 {
	-webkit-animation: SubMenuAnimIn2 0.3s ease-in-out forwards;
	-moz-animation: SubMenuAnimIn2 0.3s ease-in-out forwards;
	animation: SubMenuAnimIn2 0.3s ease-in-out forwards;
}

.dl-menuwrapper > .dl-submenu.dl-animate-in-3 {
	-webkit-animation: SubMenuAnimIn3 0.4s ease forwards;
	-moz-animation: SubMenuAnimIn3 0.4s ease forwards;
	animation: SubMenuAnimIn3 0.4s ease forwards;
}
.dl-menuwrapper > .dl-submenu.dl-animate-in-4 {
	-webkit-animation: SubMenuAnimIn4 0.4s ease forwards;
	-moz-animation: SubMenuAnimIn4 0.4s ease forwards;
	animation: SubMenuAnimIn4 0.4s ease forwards;
}
.dl-menuwrapper > .dl-submenu.dl-animate-in-5 {
	-webkit-animation: SubMenuAnimIn5 0.4s ease forwards;
	-moz-animation: SubMenuAnimIn5 0.4s ease forwards;
	animation: SubMenuAnimIn5 0.4s ease forwards;
}
@-webkit-keyframes SubMenuAnimIn1 {
	0% {
		-webkit-transform: translateX(50%);
		opacity: 0;
	}
	100% {
		-webkit-transform: translateX(0px);
		opacity: 1;
	}
}
@-webkit-keyframes SubMenuAnimIn2 {
	0% {
		-webkit-transform: translateX(100%);
		opacity: 0;
	}
	100% {
		-webkit-transform: translateX(0px);
		opacity: 1;
	}
}
@-webkit-keyframes SubMenuAnimIn3 {
	0% {
		-webkit-transform: translateZ(-300px);
		opacity: 0;
	}
	100% {
		-webkit-transform: translateZ(0px);
		opacity: 1;
	}
}
@-webkit-keyframes SubMenuAnimIn4 {
	0% {
		-webkit-transform: translateZ(300px);
		opacity: 0;
	}
	100% {
		-webkit-transform: translateZ(0px);
		opacity: 1;
	}
}
@-webkit-keyframes SubMenuAnimIn5 {
	0% {
		-webkit-transform: translateZ(-200px);
		opacity: 0;
	}
	100% {
		-webkit-transform: translateZ(0);
		opacity: 1;
	}
}
@-moz-keyframes SubMenuAnimIn1 {
	0% {
		-moz-transform: translateX(50%);
		opacity: 0;
	}
	100% {
		-moz-transform: translateX(0px);
		opacity: 1;
	}
}
@-moz-keyframes SubMenuAnimIn2 {
	0% {
		-moz-transform: translateX(100%);
		opacity: 0;
	}
	100% {
		-moz-transform: translateX(0px);
		opacity: 1;
  }
}
@-moz-keyframes SubMenuAnimIn3 {
	0% {
		-moz-transform: translateZ(-300px);
		opacity: 0;
	}
	100% {
		-moz-transform: translateZ(0px);
		opacity: 1;
	}
}
@-moz-keyframes SubMenuAnimIn4 {
	0% {
		-moz-transform: translateZ(300px);
		opacity: 0;
	}
	100% {
		-moz-transform: translateZ(0px);
		opacity: 1;
	}
}
@-moz-keyframes SubMenuAnimIn5 {
	0% {
		-moz-transform: translateZ(-200px);
		opacity: 0;
	}
	100% {
		-moz-transform: translateZ(0);
		opacity: 1;
	}
}
@keyframes SubMenuAnimIn1 {
	0% {
		transform: translateX(50%);
		opacity: 0;
	}
	100% {
		transform: translateX(0px);
		opacity: 1;
	}
}
@keyframes SubMenuAnimIn2 {
	0% {
		transform: translateX(100%);
		opacity: 0;
	}
	100% {
		transform: translateX(0px);
		opacity: 1;
	}
}
@keyframes SubMenuAnimIn3 {
	0% {
		transform: translateZ(-300px);
		opacity: 0;
	}
	100% {
		transform: translateZ(0px);
		opacity: 1;
	}
}
@keyframes SubMenuAnimIn4 {
	0% {
		transform: translateZ(300px);
		opacity: 0;
	}
	100% {
		transform: translateZ(0px);
		opacity: 1;
	}
}
@keyframes SubMenuAnimIn5 {
	0% {
		transform: translateZ(-200px);
		opacity: 0;
	}
	100% {
		transform: translateZ(0);
		opacity: 1;
	}
}
.dl-menuwrapper > .dl-submenu.dl-animate-out-1 {
	-webkit-animation: SubMenuAnimOut1 0.4s ease forwards;
	-moz-animation: SubMenuAnimOut1 0.4s ease forwards;
	animation: SubMenuAnimOut1 0.4s ease forwards;
}
.dl-menuwrapper > .dl-submenu.dl-animate-out-2 {
	-webkit-animation: SubMenuAnimOut2 0.3s ease-in-out forwards;
	-moz-animation: SubMenuAnimOut2 0.3s ease-in-out forwards;
	animation: SubMenuAnimOut2 0.3s ease-in-out forwards;
}
.dl-menuwrapper > .dl-submenu.dl-animate-out-3 {
	-webkit-animation: SubMenuAnimOut3 0.4s ease forwards;
	-moz-animation: SubMenuAnimOut3 0.4s ease forwards;
	animation: SubMenuAnimOut3 0.4s ease forwards;
}
.dl-menuwrapper > .dl-submenu.dl-animate-out-4 {
	-webkit-animation: SubMenuAnimOut4 0.4s ease forwards;
	-moz-animation: SubMenuAnimOut4 0.4s ease forwards;
	animation: SubMenuAnimOut4 0.4s ease forwards;
}
.dl-menuwrapper > .dl-submenu.dl-animate-out-5 {
	-webkit-animation: SubMenuAnimOut5 0.4s ease forwards;
	-moz-animation: SubMenuAnimOut5 0.4s ease forwards;
	animation: SubMenuAnimOut5 0.4s ease forwards;
}
@-webkit-keyframes SubMenuAnimOut1 {
	0% {
		-webkit-transform: translateX(0%);
		opacity: 1;
	}
	100% {
		-webkit-transform: translateX(50%);
		opacity: 0;
	}
}
@-webkit-keyframes SubMenuAnimOut2 {
	0% {
		-webkit-transform: translateX(0%);
		opacity: 1;
	}
	100% {
		-webkit-transform: translateX(100%);
		opacity: 0;
	}
}
@-webkit-keyframes SubMenuAnimOut3 {
	0% {
		-webkit-transform: translateZ(0px);
		opacity: 1;
	}
	100% {
		-webkit-transform: translateZ(-300px);
		opacity: 0;
	}
}
@-webkit-keyframes SubMenuAnimOut4 {
	0% {
		-webkit-transform: translateZ(0px);
		opacity: 1;
	}
	100% {
		-webkit-transform: translateZ(300px);
		opacity: 0;
	}
}
@-webkit-keyframes SubMenuAnimOut5 {
	0% {
		-webkit-transform: translateZ(0);
		opacity: 1;
	}
	100% {
		-webkit-transform: translateZ(-200px);
		opacity: 0;
	}
}
@-moz-keyframes SubMenuAnimOut1 {
	0% {
		-moz-transform: translateX(0%);
		opacity: 1;
	}
	100% {
		-moz-transform: translateX(50%);
		opacity: 0;
	}
}
@-moz-keyframes SubMenuAnimOut2 {
	0% {
		-moz-transform: translateX(0%);
		opacity: 1;
	}
	100% {
		-moz-transform: translateX(100%);
		opacity: 0;
	}
}
@-moz-keyframes SubMenuAnimOut3 {
	0% {
		-moz-transform: translateZ(0px);
		opacity: 1;
	}
	100% {
		-moz-transform: translateZ(-300px);
		opacity: 0;
	}
}
@-moz-keyframes SubMenuAnimOut4 {
	0% {
		-moz-transform: translateZ(0px);
		opacity: 1;
	}
	100% {
		-moz-transform: translateZ(300px);
		opacity: 0;
	}
}
@-moz-keyframes SubMenuAnimOut5 {
	0% {
		-moz-transform: translateZ(0);
		opacity: 1;
	}
	100% {
		-moz-transform: translateZ(-200px);
		opacity: 0;
	}
}
@keyframes SubMenuAnimOut1 {
	0% {
		transform: translateX(0%);
		opacity: 1;
	}
	100% {
		transform: translateX(50%);
		opacity: 0;
	}
}
@keyframes SubMenuAnimOut2 {
	0% {
		transform: translateX(0%);
		opacity: 1;
	}
	100% {
		transform: translateX(100%);
		opacity: 0;
	}
}
@keyframes SubMenuAnimOut3 {
	0% {
		transform: translateZ(0px);
		opacity: 1;
	}
	100% {
		transform: translateZ(-300px);
		opacity: 0;
	}
}
@keyframes SubMenuAnimOut4 {
	0% {
		transform: translateZ(0px);
		opacity: 1;
	}
	100% {
		transform: translateZ(300px);
		opacity: 0;
	}
}
@keyframes SubMenuAnimOut5 {
	0% {
		transform: translateZ(0);
		opacity: 1;
	}
	100% {
		transform: translateZ(-200px);
		opacity: 0;
	}
}

/* No JS Fallback */
.no-js .dl-menuwrapper .dl-menu {
	position: relative;
	opacity: 1;
	-webkit-transform: none;
	-moz-transform: none;
	transform: none;
}
.no-js .dl-menuwrapper li .dl-submenu {	display: block;}
.no-js .dl-menuwrapper li.dl-back {	display: none;}
.no-js .dl-menuwrapper li > a:not(:only-child) {background: rgba(0,0,0,0.1);}
.no-js .dl-menuwrapper li > a:not(:only-child):after {content: '';}

/* animation sets */
/* move from / to  */
.pt-page-moveToLeft {
	-webkit-animation: moveToLeft .6s ease both;
	animation: moveToLeft .6s ease both;
}
.pt-page-moveFromLeft {
	-webkit-animation: moveFromLeft .6s ease both;
	animation: moveFromLeft .6s ease both;
}
.pt-page-moveToRight {
	-webkit-animation: moveToRight .6s ease both;
	animation: moveToRight .6s ease both;
}
.pt-page-moveFromRight {
	-webkit-animation: moveFromRight .6s ease both;
	animation: moveFromRight .6s ease both;
}
.pt-page-moveToTop {
	-webkit-animation: moveToTop .6s ease both;
	animation: moveToTop .6s ease both;
}
.pt-page-moveFromTop {
	-webkit-animation: moveFromTop .6s ease both;
	animation: moveFromTop .6s ease both;
}
.pt-page-moveToBottom {
	-webkit-animation: moveToBottom .6s ease both;
	animation: moveToBottom .6s ease both;
}
.pt-page-moveFromBottom {
	-webkit-animation: moveFromBottom .6s ease both;
	animation: moveFromBottom .6s ease both;
}

/* fade */
.pt-page-fade {
	-webkit-animation: fade .7s ease both;
	animation: fade .7s ease both;
}

/* move from / to and fade */
.pt-page-moveToLeftFade {
	-webkit-animation: moveToLeftFade .7s ease both;
	animation: moveToLeftFade .7s ease both;
}
.pt-page-moveFromLeftFade {
	-webkit-animation: moveFromLeftFade .7s ease both;
	animation: moveFromLeftFade .7s ease both;
}
.pt-page-moveToRightFade {
	-webkit-animation: moveToRightFade .7s ease both;
	animation: moveToRightFade .7s ease both;
}
.pt-page-moveFromRightFade {
	-webkit-animation: moveFromRightFade .7s ease both;
	animation: moveFromRightFade .7s ease both;
}
.pt-page-moveToTopFade {
	-webkit-animation: moveToTopFade .7s ease both;
	animation: moveToTopFade .7s ease both;
}
.pt-page-moveFromTopFade {
	-webkit-animation: moveFromTopFade .7s ease both;
	animation: moveFromTopFade .7s ease both;
}
.pt-page-moveToBottomFade {
	-webkit-animation: moveToBottomFade .7s ease both;
	animation: moveToBottomFade .7s ease both;
}
.pt-page-moveFromBottomFade {
	-webkit-animation: moveFromBottomFade .7s ease both;
	animation: moveFromBottomFade .7s ease both;
}

/* move to with different easing */
.pt-page-moveToLeftEasing {
	-webkit-animation: moveToLeft .7s ease-in-out both;
	animation: moveToLeft .7s ease-in-out both;
}
.pt-page-moveToRightEasing {
	-webkit-animation: moveToRight .7s ease-in-out both;
	animation: moveToRight .7s ease-in-out both;
}
.pt-page-moveToTopEasing {
	-webkit-animation: moveToTop .7s ease-in-out both;
	animation: moveToTop .7s ease-in-out both;
}
.pt-page-moveToBottomEasing {
	-webkit-animation: moveToBottom .7s ease-in-out both;
	animation: moveToBottom .7s ease-in-out both;
}

/********************************* keyframes **************************************/
/* move from / to  */
@-webkit-keyframes moveToLeft {
	from { }
	to { -webkit-transform: translateX(-100%); }
}
@keyframes moveToLeft {
	from { }
	to { -webkit-transform: translateX(-100%); transform: translateX(-100%); }
}
@-webkit-keyframes moveFromLeft {
	from { -webkit-transform: translateX(-100%); }
}
@keyframes moveFromLeft {
	from { -webkit-transform: translateX(-100%); transform: translateX(-100%); }
}
@-webkit-keyframes moveToRight { 
	from { }
	to { -webkit-transform: translateX(100%); }
}
@keyframes moveToRight { 
	from { }
	to { -webkit-transform: translateX(100%); transform: translateX(100%); }
}
@-webkit-keyframes moveFromRight {
	from { -webkit-transform: translateX(100%); }
}
@keyframes moveFromRight {
	from { -webkit-transform: translateX(100%); transform: translateX(100%); }
}
@-webkit-keyframes moveToTop {
	from { }
	to { -webkit-transform: translateY(-100%); }
}
@keyframes moveToTop {
	from { }
	to { -webkit-transform: translateY(-100%); transform: translateY(-100%); }
}
@-webkit-keyframes moveFromTop {
	from { -webkit-transform: translateY(-100%); }
}
@keyframes moveFromTop {
	from { -webkit-transform: translateY(-100%); transform: translateY(-100%); }
}
@-webkit-keyframes moveToBottom {
	from { }
	to { -webkit-transform: translateY(100%); }
}
@keyframes moveToBottom {
	from { }
	to { -webkit-transform: translateY(100%); transform: translateY(100%); }
}
@-webkit-keyframes moveFromBottom {
	from { -webkit-transform: translateY(100%); }
}
@keyframes moveFromBottom {
	from { -webkit-transform: translateY(100%); transform: translateY(100%); }
}

/* fade */
@-webkit-keyframes fade {
	from { }
	to { opacity: 0.3; }
}
@keyframes fade {
	from { }
	to { opacity: 0.3; }
}

/* move from / to and fade */
@-webkit-keyframes moveToLeftFade {
	from { }
	to { opacity: 0.3; -webkit-transform: translateX(-100%); }
}
@keyframes moveToLeftFade {
	from { }
	to { opacity: 0.3; -webkit-transform: translateX(-100%); transform: translateX(-100%); }
}
@-webkit-keyframes moveFromLeftFade {
	from { opacity: 0.3; -webkit-transform: translateX(-100%); }
}
@keyframes moveFromLeftFade {
	from { opacity: 0.3; -webkit-transform: translateX(-100%); transform: translateX(-100%); }
}
@-webkit-keyframes moveToRightFade {
	from { }
	to { opacity: 0.3; -webkit-transform: translateX(100%); }
}
@keyframes moveToRightFade {
	from { }
	to { opacity: 0.3; -webkit-transform: translateX(100%); transform: translateX(100%); }
}
@-webkit-keyframes moveFromRightFade {
	from { opacity: 0.3; -webkit-transform: translateX(100%); }
}
@keyframes moveFromRightFade {
	from { opacity: 0.3; -webkit-transform: translateX(100%); transform: translateX(100%); }
}
@-webkit-keyframes moveToTopFade {
	from { }
	to { opacity: 0.3; -webkit-transform: translateY(-100%); }
}
@keyframes moveToTopFade {
	from { }
	to { opacity: 0.3; -webkit-transform: translateY(-100%); transform: translateY(-100%); }
}
@-webkit-keyframes moveFromTopFade {
	from { opacity: 0.3; -webkit-transform: translateY(-100%); }
}
@keyframes moveFromTopFade {
	from { opacity: 0.3; -webkit-transform: translateY(-100%); transform: translateY(-100%); }
}
@-webkit-keyframes moveToBottomFade {
	from { }
	to { opacity: 0.3; -webkit-transform: translateY(100%); }
}
@keyframes moveToBottomFade {
	from { }
	to { opacity: 0.3; -webkit-transform: translateY(100%); transform: translateY(100%); }
}
@-webkit-keyframes moveFromBottomFade {
	from { opacity: 0.3; -webkit-transform: translateY(100%); }
}
@keyframes moveFromBottomFade {
	from { opacity: 0.3; -webkit-transform: translateY(100%); transform: translateY(100%); }
}

/* scale and fade */
.pt-page-scaleDown {
	-webkit-animation: scaleDown .7s ease both;
	animation: scaleDown .7s ease both;
}
.pt-page-scaleUp {
	-webkit-animation: scaleUp .7s ease both;
	animation: scaleUp .7s ease both;
}
.pt-page-scaleUpDown {
	-webkit-animation: scaleUpDown .5s ease both;
	animation: scaleUpDown .5s ease both;
}
.pt-page-scaleDownUp {
	-webkit-animation: scaleDownUp .5s ease both;
	animation: scaleDownUp .5s ease both;
}
.pt-page-scaleDownCenter {
	-webkit-animation: scaleDownCenter .4s ease-in both;
	animation: scaleDownCenter .4s ease-in both;
}
.pt-page-scaleUpCenter {
	-webkit-animation: scaleUpCenter .4s ease-out both;
	animation: scaleUpCenter .4s ease-out both;
}

/********************************* keyframes **************************************/
/* scale and fade */
@-webkit-keyframes scaleDown {
	from { }
	to { opacity: 0; -webkit-transform: scale(.8); }
}
@keyframes scaleDown {
	from { }
	to { opacity: 0; -webkit-transform: scale(.8); transform: scale(.8); }
}
@-webkit-keyframes scaleUp {
	from { opacity: 0; -webkit-transform: scale(.8); }
}
@keyframes scaleUp {
	from { opacity: 0; -webkit-transform: scale(.8); transform: scale(.8); }
}
@-webkit-keyframes scaleUpDown {
	from { opacity: 0; -webkit-transform: scale(1.2); }
}
@keyframes scaleUpDown {
	from { opacity: 0; -webkit-transform: scale(1.2); transform: scale(1.2); }
}
@-webkit-keyframes scaleDownUp {
	from { }
	to { opacity: 0; -webkit-transform: scale(1.2); }
}
@keyframes scaleDownUp {
	from { }
	to { opacity: 0; -webkit-transform: scale(1.2); transform: scale(1.2); }
}
@-webkit-keyframes scaleDownCenter {
	from { }
	to { opacity: 0; -webkit-transform: scale(.7); }
}
@keyframes scaleDownCenter {
	from { }
	to { opacity: 0; -webkit-transform: scale(.7); transform: scale(.7); }
}
@-webkit-keyframes scaleUpCenter {
	from { opacity: 0; -webkit-transform: scale(.7); }
}
@keyframes scaleUpCenter {
	from { opacity: 0; -webkit-transform: scale(.7); transform: scale(.7); }
}

/* rotate sides first and scale */
.pt-page-rotateRightSideFirst {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-animation: rotateRightSideFirst .8s both ease-in;
	animation: rotateRightSideFirst .8s both ease-in;
}
.pt-page-rotateLeftSideFirst {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-animation: rotateLeftSideFirst .8s both ease-in;
	animation: rotateLeftSideFirst .8s both ease-in;
}
.pt-page-rotateTopSideFirst {
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-animation: rotateTopSideFirst .8s both ease-in;
	animation: rotateTopSideFirst .8s both ease-in;
}
.pt-page-rotateBottomSideFirst {
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-animation: rotateBottomSideFirst .8s both ease-in;
	animation: rotateBottomSideFirst .8s both ease-in;
}

/* flip */
.pt-page-flipOutRight {
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	-webkit-animation: flipOutRight .5s both ease-in;
	animation: flipOutRight .5s both ease-in;
}
.pt-page-flipInLeft {
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	-webkit-animation: flipInLeft .5s both ease-out;
	animation: flipInLeft .5s both ease-out;
}
.pt-page-flipOutLeft {
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	-webkit-animation: flipOutLeft .5s both ease-in;
	animation: flipOutLeft .5s both ease-in;
}
.pt-page-flipInRight {
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	-webkit-animation: flipInRight .5s both ease-out;
	animation: flipInRight .5s both ease-out;
}
.pt-page-flipOutTop {
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	-webkit-animation: flipOutTop .5s both ease-in;
	animation: flipOutTop .5s both ease-in;
}
.pt-page-flipInBottom {
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	-webkit-animation: flipInBottom .5s both ease-out;
	animation: flipInBottom .5s both ease-out;
}
.pt-page-flipOutBottom {
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	-webkit-animation: flipOutBottom .5s both ease-in;
	animation: flipOutBottom .5s both ease-in;
}
.pt-page-flipInTop {
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	-webkit-animation: flipInTop .5s both ease-out;
	animation: flipInTop .5s both ease-out;
}

/* rotate fall */
.pt-page-rotateFall {
	-webkit-transform-origin: 0% 0%;
	transform-origin: 0% 0%;
	-webkit-animation: rotateFall 1s both ease-in;
	animation: rotateFall 1s both ease-in;
}

/* rotate newspaper */
.pt-page-rotateOutNewspaper {
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	-webkit-animation: rotateOutNewspaper .5s both ease-in;
	animation: rotateOutNewspaper .5s both ease-in;
}
.pt-page-rotateInNewspaper {
	-webkit-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
	-webkit-animation: rotateInNewspaper .5s both ease-out;
	animation: rotateInNewspaper .5s both ease-out;
}

/* push */
.pt-page-rotatePushLeft {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-animation: rotatePushLeft .8s both ease;
	animation: rotatePushLeft .8s both ease;
}
.pt-page-rotatePushRight {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-animation: rotatePushRight .8s both ease;
	animation: rotatePushRight .8s both ease;
}
.pt-page-rotatePushTop {
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-animation: rotatePushTop .8s both ease;
	animation: rotatePushTop .8s both ease;
}
.pt-page-rotatePushBottom {
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-animation: rotatePushBottom .8s both ease;
	animation: rotatePushBottom .8s both ease;
}

/* pull */
.pt-page-rotatePullRight {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-animation: rotatePullRight .5s both ease;
	animation: rotatePullRight .5s both ease;
}
.pt-page-rotatePullLeft {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-animation: rotatePullLeft .5s both ease;
	animation: rotatePullLeft .5s both ease;
}
.pt-page-rotatePullTop {
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-animation: rotatePullTop .5s both ease;
	animation: rotatePullTop .5s both ease;
}
.pt-page-rotatePullBottom {
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-animation: rotatePullBottom .5s both ease;
	animation: rotatePullBottom .5s both ease;
}

/* fold */
.pt-page-rotateFoldRight {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-animation: rotateFoldRight .7s both ease;
	animation: rotateFoldRight .7s both ease;
}
.pt-page-rotateFoldLeft {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-animation: rotateFoldLeft .7s both ease;
	animation: rotateFoldLeft .7s both ease;
}
.pt-page-rotateFoldTop {
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-animation: rotateFoldTop .7s both ease;
	animation: rotateFoldTop .7s both ease;
}
.pt-page-rotateFoldBottom {
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-animation: rotateFoldBottom .7s both ease;
	animation: rotateFoldBottom .7s both ease;
}

/* unfold */
.pt-page-rotateUnfoldLeft {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-animation: rotateUnfoldLeft .7s both ease;
	animation: rotateUnfoldLeft .7s both ease;
}
.pt-page-rotateUnfoldRight {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-animation: rotateUnfoldRight .7s both ease;
	animation: rotateUnfoldRight .7s both ease;
}
.pt-page-rotateUnfoldTop {
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-animation: rotateUnfoldTop .7s both ease;
	animation: rotateUnfoldTop .7s both ease;
}
.pt-page-rotateUnfoldBottom {
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-animation: rotateUnfoldBottom .7s both ease;
	animation: rotateUnfoldBottom .7s both ease;
}

/* room walls */
.pt-page-rotateRoomLeftOut {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-animation: rotateRoomLeftOut .8s both ease;
	animation: rotateRoomLeftOut .8s both ease;
}
.pt-page-rotateRoomLeftIn {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-animation: rotateRoomLeftIn .8s both ease;
	animation: rotateRoomLeftIn .8s both ease;
}
.pt-page-rotateRoomRightOut {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-animation: rotateRoomRightOut .8s both ease;
	animation: rotateRoomRightOut .8s both ease;
}
.pt-page-rotateRoomRightIn {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-animation: rotateRoomRightIn .8s both ease;
	animation: rotateRoomRightIn .8s both ease;
}
.pt-page-rotateRoomTopOut {
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-animation: rotateRoomTopOut .8s both ease;
	animation: rotateRoomTopOut .8s both ease;
}
.pt-page-rotateRoomTopIn {
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-animation: rotateRoomTopIn .8s both ease;
	animation: rotateRoomTopIn .8s both ease;
}
.pt-page-rotateRoomBottomOut {
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-animation: rotateRoomBottomOut .8s both ease;
	animation: rotateRoomBottomOut .8s both ease;
}
.pt-page-rotateRoomBottomIn {
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-animation: rotateRoomBottomIn .8s both ease;
	animation: rotateRoomBottomIn .8s both ease;
}

/* cube */
.pt-page-rotateCubeLeftOut {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-animation: rotateCubeLeftOut .6s both ease-in;
	animation: rotateCubeLeftOut .6s both ease-in;
}
.pt-page-rotateCubeLeftIn {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-animation: rotateCubeLeftIn .6s both ease-in;
	animation: rotateCubeLeftIn .6s both ease-in;
}
.pt-page-rotateCubeRightOut {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-animation: rotateCubeRightOut .6s both ease-in;
	animation: rotateCubeRightOut .6s both ease-in;
}
.pt-page-rotateCubeRightIn {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-animation: rotateCubeRightIn .6s both ease-in;
	animation: rotateCubeRightIn .6s both ease-in;
}
.pt-page-rotateCubeTopOut {
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-animation: rotateCubeTopOut .6s both ease-in;
	animation: rotateCubeTopOut .6s both ease-in;
}
.pt-page-rotateCubeTopIn {
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-animation: rotateCubeTopIn .6s both ease-in;
	animation: rotateCubeTopIn .6s both ease-in;
}
.pt-page-rotateCubeBottomOut {
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-animation: rotateCubeBottomOut .6s both ease-in;
	animation: rotateCubeBottomOut .6s both ease-in;
}
.pt-page-rotateCubeBottomIn {
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-animation: rotateCubeBottomIn .6s both ease-in;
	animation: rotateCubeBottomIn .6s both ease-in;
}

/* carousel */
.pt-page-rotateCarouselLeftOut {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-animation: rotateCarouselLeftOut .8s both ease;
	animation: rotateCarouselLeftOut .8s both ease;
}
.pt-page-rotateCarouselLeftIn {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-animation: rotateCarouselLeftIn .8s both ease;
	animation: rotateCarouselLeftIn .8s both ease;
}
.pt-page-rotateCarouselRightOut {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
	-webkit-animation: rotateCarouselRightOut .8s both ease;
	animation: rotateCarouselRightOut .8s both ease;
}
.pt-page-rotateCarouselRightIn {
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-animation: rotateCarouselRightIn .8s both ease;
	animation: rotateCarouselRightIn .8s both ease;
}
.pt-page-rotateCarouselTopOut {
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-animation: rotateCarouselTopOut .8s both ease;
	animation: rotateCarouselTopOut .8s both ease;
}
.pt-page-rotateCarouselTopIn {
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-animation: rotateCarouselTopIn .8s both ease;
	animation: rotateCarouselTopIn .8s both ease;
}
.pt-page-rotateCarouselBottomOut {
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-animation: rotateCarouselBottomOut .8s both ease;
	animation: rotateCarouselBottomOut .8s both ease;
}
.pt-page-rotateCarouselBottomIn {
	-webkit-transform-origin: 50% 100%;
	transform-origin: 50% 100%;
	-webkit-animation: rotateCarouselBottomIn .8s both ease;
	animation: rotateCarouselBottomIn .8s both ease;
}

/* sides */
.pt-page-rotateSidesOut {
	-webkit-transform-origin: -50% 50%;
	transform-origin: -50% 50%;
	-webkit-animation: rotateSidesOut .5s both ease-in;
	animation: rotateSidesOut .5s both ease-in;
}
.pt-page-rotateSidesIn {
	-webkit-transform-origin: 150% 50%;
	transform-origin: 150% 50%;
	-webkit-animation: rotateSidesIn .5s both ease-out;
	animation: rotateSidesIn .5s both ease-out;
}

/* slide */
.pt-page-rotateSlideOut {
	-webkit-animation: rotateSlideOut 1s both ease;
	animation: rotateSlideOut 1s both ease;
}
.pt-page-rotateSlideIn {
	-webkit-animation: rotateSlideIn 1s both ease;
	animation: rotateSlideIn 1s both ease;
}

/********************************* keyframes **************************************/
/* rotate sides first and scale */
@-webkit-keyframes rotateRightSideFirst {
	0% { }
	40% { -webkit-transform: rotateY(15deg); opacity: .8; -webkit-animation-timing-function: ease-out; }
	100% { -webkit-transform: scale(0.8) translateZ(-200px); opacity:0; }
}
@keyframes rotateRightSideFirst {
	0% { }
	40% { -webkit-transform: rotateY(15deg); transform: rotateY(15deg); opacity: .8; -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; }
	100% { -webkit-transform: scale(0.8) translateZ(-200px); transform: scale(0.8) translateZ(-200px); opacity:0; }
}
@-webkit-keyframes rotateLeftSideFirst {
	0% { }
	40% { -webkit-transform: rotateY(-15deg); opacity: .8; -webkit-animation-timing-function: ease-out; }
	100% { -webkit-transform: scale(0.8) translateZ(-200px); opacity:0; }
}
@keyframes rotateLeftSideFirst {
	0% { }
	40% { -webkit-transform: rotateY(-15deg); transform: rotateY(-15deg); opacity: .8; -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; }
	100% { -webkit-transform: scale(0.8) translateZ(-200px); transform: scale(0.8) translateZ(-200px); opacity:0; }
}
@-webkit-keyframes rotateTopSideFirst {
	0% { }
	40% { -webkit-transform: rotateX(15deg); opacity: .8; -webkit-animation-timing-function: ease-out; }
	100% { -webkit-transform: scale(0.8) translateZ(-200px); opacity:0; }
}
@keyframes rotateTopSideFirst {
	0% { }
	40% { -webkit-transform: rotateX(15deg); transform: rotateX(15deg); opacity: .8; -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; }
	100% { -webkit-transform: scale(0.8) translateZ(-200px); transform: scale(0.8) translateZ(-200px); opacity:0; }
}
@-webkit-keyframes rotateBottomSideFirst {
	0% { }
	40% { -webkit-transform: rotateX(-15deg); opacity: .8; -webkit-animation-timing-function: ease-out; }
	100% { -webkit-transform: scale(0.8) translateZ(-200px); opacity:0; }
}
@keyframes rotateBottomSideFirst {
	0% { }
	40% { -webkit-transform: rotateX(-15deg); transform: rotateX(-15deg); opacity: .8; -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; }
	100% { -webkit-transform: scale(0.8) translateZ(-200px); transform: scale(0.8) translateZ(-200px); opacity:0; }
}

/* flip */

@-webkit-keyframes flipOutRight {
	from { }
	to { -webkit-transform: translateZ(-1000px) rotateY(90deg); opacity: 0.2; }
}
@keyframes flipOutRight {
	from { }
	to { -webkit-transform: translateZ(-1000px) rotateY(90deg); transform: translateZ(-1000px) rotateY(90deg); opacity: 0.2; }
}
@-webkit-keyframes flipInLeft {
	from { -webkit-transform: translateZ(-1000px) rotateY(-90deg); opacity: 0.2; }
}
@keyframes flipInLeft {
	from { -webkit-transform: translateZ(-1000px) rotateY(-90deg); transform: translateZ(-1000px) rotateY(-90deg); opacity: 0.2; }
}
@-webkit-keyframes flipOutLeft {
	from { }
	to { -webkit-transform: translateZ(-1000px) rotateY(-90deg); opacity: 0.2; }
}
@keyframes flipOutLeft {
	from { }
	to { -webkit-transform: translateZ(-1000px) rotateY(-90deg); transform: translateZ(-1000px) rotateY(-90deg); opacity: 0.2; }
}
@-webkit-keyframes flipInRight {
	from { -webkit-transform: translateZ(-1000px) rotateY(90deg); opacity: 0.2; }
}
@keyframes flipInRight {
	from { -webkit-transform: translateZ(-1000px) rotateY(90deg); transform: translateZ(-1000px) rotateY(90deg); opacity: 0.2; }
}
@-webkit-keyframes flipOutTop {
	from { }
	to { -webkit-transform: translateZ(-1000px) rotateX(90deg); opacity: 0.2; }
}
@keyframes flipOutTop {
	from { }
	to { -webkit-transform: translateZ(-1000px) rotateX(90deg); transform: translateZ(-1000px) rotateX(90deg); opacity: 0.2; }
}
@-webkit-keyframes flipInBottom {
	from { -webkit-transform: translateZ(-1000px) rotateX(-90deg); opacity: 0.2; }
}
@keyframes flipInBottom {
	from { -webkit-transform: translateZ(-1000px) rotateX(-90deg); transform: translateZ(-1000px) rotateX(-90deg); opacity: 0.2; }
}
@-webkit-keyframes flipOutBottom {
	from { }
	to { -webkit-transform: translateZ(-1000px) rotateX(-90deg); opacity: 0.2; }
}
@keyframes flipOutBottom {
	from { }
	to { -webkit-transform: translateZ(-1000px) rotateX(-90deg); transform: translateZ(-1000px) rotateX(-90deg); opacity: 0.2; }
}
@-webkit-keyframes flipInTop {
	from { -webkit-transform: translateZ(-1000px) rotateX(90deg); opacity: 0.2; }
}
@keyframes flipInTop {
	from { -webkit-transform: translateZ(-1000px) rotateX(90deg); transform: translateZ(-1000px) rotateX(90deg); opacity: 0.2; }
}

/* fall */

@-webkit-keyframes rotateFall {
	0% { -webkit-transform: rotateZ(0deg); }
	20% { -webkit-transform: rotateZ(10deg); -webkit-animation-timing-function: ease-out; }
	40% { -webkit-transform: rotateZ(17deg); }
	60% { -webkit-transform: rotateZ(16deg); }
	100% { -webkit-transform: translateY(100%) rotateZ(17deg); }
}
@keyframes rotateFall {
	0% { -webkit-transform: rotateZ(0deg); transform: rotateZ(0deg); }
	20% { -webkit-transform: rotateZ(10deg); transform: rotateZ(10deg); -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; }
	40% { -webkit-transform: rotateZ(17deg); transform: rotateZ(17deg); }
	60% { -webkit-transform: rotateZ(16deg); transform: rotateZ(16deg); }
	100% { -webkit-transform: translateY(100%) rotateZ(17deg); transform: translateY(100%) rotateZ(17deg); }
}

/* newspaper */

@-webkit-keyframes rotateOutNewspaper {
	from { }
	to { -webkit-transform: translateZ(-3000px) rotateZ(360deg); opacity: 0; }
}
@keyframes rotateOutNewspaper {
	from { }
	to { -webkit-transform: translateZ(-3000px) rotateZ(360deg); transform: translateZ(-3000px) rotateZ(360deg); opacity: 0; }
}
@-webkit-keyframes rotateInNewspaper {
	from { -webkit-transform: translateZ(-3000px) rotateZ(-360deg); opacity: 0; }
}
@keyframes rotateInNewspaper {
	from { -webkit-transform: translateZ(-3000px) rotateZ(-360deg); transform: translateZ(-3000px) rotateZ(-360deg); opacity: 0; }
}

/* push */

@-webkit-keyframes rotatePushLeft {
	from { }
	to { opacity: 0; -webkit-transform: rotateY(90deg); }
}
@keyframes rotatePushLeft {
	from { }
	to { opacity: 0; -webkit-transform: rotateY(90deg); transform: rotateY(90deg); }
}
@-webkit-keyframes rotatePushRight {
	from { }
	to { opacity: 0; -webkit-transform: rotateY(-90deg); }
}
@keyframes rotatePushRight {
	from { }
	to { opacity: 0; -webkit-transform: rotateY(-90deg); transform: rotateY(-90deg); }
}
@-webkit-keyframes rotatePushTop {
	from { }
	to { opacity: 0; -webkit-transform: rotateX(-90deg); }
}
@keyframes rotatePushTop {
	from { }
	to { opacity: 0; -webkit-transform: rotateX(-90deg); transform: rotateX(-90deg); }
}
@-webkit-keyframes rotatePushBottom {
	from { }
	to { opacity: 0; -webkit-transform: rotateX(90deg); }
}
@keyframes rotatePushBottom {
	from { }
	to { opacity: 0; -webkit-transform: rotateX(90deg); transform: rotateX(90deg); }
}

/* pull */

@-webkit-keyframes rotatePullRight {
	from { opacity: 0; -webkit-transform: rotateY(-90deg); }
}
@keyframes rotatePullRight {
	from { opacity: 0; -webkit-transform: rotateY(-90deg); transform: rotateY(-90deg); }
}
@-webkit-keyframes rotatePullLeft {
	from { opacity: 0; -webkit-transform: rotateY(90deg); }
}
@keyframes rotatePullLeft {
	from { opacity: 0; -webkit-transform: rotateY(90deg); transform: rotateY(90deg); }
}
@-webkit-keyframes rotatePullTop {
	from { opacity: 0; -webkit-transform: rotateX(-90deg); }
}
@keyframes rotatePullTop {
	from { opacity: 0; -webkit-transform: rotateX(-90deg); transform: rotateX(-90deg); }
}

@-webkit-keyframes rotatePullBottom {
	from { opacity: 0; -webkit-transform: rotateX(90deg); }
}
@keyframes rotatePullBottom {
	from { opacity: 0; -webkit-transform: rotateX(90deg); transform: rotateX(90deg); }
}

/* fold */

@-webkit-keyframes rotateFoldRight {
	from { }
	to { opacity: 0; -webkit-transform: translateX(100%) rotateY(90deg); }
}
@keyframes rotateFoldRight {
	from { }
	to { opacity: 0; -webkit-transform: translateX(100%) rotateY(90deg); transform: translateX(100%) rotateY(90deg); }
}
@-webkit-keyframes rotateFoldLeft {
	from { }
	to { opacity: 0; -webkit-transform: translateX(-100%) rotateY(-90deg); }
}
@keyframes rotateFoldLeft {
	from { }
	to { opacity: 0; -webkit-transform: translateX(-100%) rotateY(-90deg); transform: translateX(-100%) rotateY(-90deg); }
}
@-webkit-keyframes rotateFoldTop {
	from { }
	to { opacity: 0; -webkit-transform: translateY(-100%) rotateX(90deg); }
}
@keyframes rotateFoldTop {
	from { }
	to { opacity: 0; -webkit-transform: translateY(-100%) rotateX(90deg); transform: translateY(-100%) rotateX(90deg); }
}
@-webkit-keyframes rotateFoldBottom {
	from { }
	to { opacity: 0; -webkit-transform: translateY(100%) rotateX(-90deg); }
}
@keyframes rotateFoldBottom {
	from { }
	to { opacity: 0; -webkit-transform: translateY(100%) rotateX(-90deg); transform: translateY(100%) rotateX(-90deg); }
}

/* unfold */

@-webkit-keyframes rotateUnfoldLeft {
	from { opacity: 0; -webkit-transform: translateX(-100%) rotateY(-90deg); }
}
@keyframes rotateUnfoldLeft {
	from { opacity: 0; -webkit-transform: translateX(-100%) rotateY(-90deg); transform: translateX(-100%) rotateY(-90deg); }
}
@-webkit-keyframes rotateUnfoldRight {
	from { opacity: 0; -webkit-transform: translateX(100%) rotateY(90deg); }
}
@keyframes rotateUnfoldRight {
	from { opacity: 0; -webkit-transform: translateX(100%) rotateY(90deg); transform: translateX(100%) rotateY(90deg); }
}
@-webkit-keyframes rotateUnfoldTop {
	from { opacity: 0; -webkit-transform: translateY(-100%) rotateX(90deg); }
}
@keyframes rotateUnfoldTop {
	from { opacity: 0; -webkit-transform: translateY(-100%) rotateX(90deg); transform: translateY(-100%) rotateX(90deg); }
}
@-webkit-keyframes rotateUnfoldBottom {
	from { opacity: 0; -webkit-transform: translateY(100%) rotateX(-90deg); }
}
@keyframes rotateUnfoldBottom {
	from { opacity: 0; -webkit-transform: translateY(100%) rotateX(-90deg); transform: translateY(100%) rotateX(-90deg); }
}

/* room walls */

@-webkit-keyframes rotateRoomLeftOut {
	from { }
	to { opacity: .3; -webkit-transform: translateX(-100%) rotateY(90deg); }
}
@keyframes rotateRoomLeftOut {
	from { }
	to { opacity: .3; -webkit-transform: translateX(-100%) rotateY(90deg); transform: translateX(-100%) rotateY(90deg); }
}
@-webkit-keyframes rotateRoomLeftIn {
	from { opacity: .3; -webkit-transform: translateX(100%) rotateY(-90deg); }
}
@keyframes rotateRoomLeftIn {
	from { opacity: .3; -webkit-transform: translateX(100%) rotateY(-90deg); transform: translateX(100%) rotateY(-90deg); }
}
@-webkit-keyframes rotateRoomRightOut {
	from { }
	to { opacity: .3; -webkit-transform: translateX(100%) rotateY(-90deg); }
}
@keyframes rotateRoomRightOut {
	from { }
	to { opacity: .3; -webkit-transform: translateX(100%) rotateY(-90deg); transform: translateX(100%) rotateY(-90deg); }
}
@-webkit-keyframes rotateRoomRightIn {
	from { opacity: .3; -webkit-transform: translateX(-100%) rotateY(90deg); }
}
@keyframes rotateRoomRightIn {
	from { opacity: .3; -webkit-transform: translateX(-100%) rotateY(90deg); transform: translateX(-100%) rotateY(90deg); }
}
@-webkit-keyframes rotateRoomTopOut {
	from { }
	to { opacity: .3; -webkit-transform: translateY(-100%) rotateX(-90deg); }
}
@keyframes rotateRoomTopOut {
	from { }
	to { opacity: .3; -webkit-transform: translateY(-100%) rotateX(-90deg); transform: translateY(-100%) rotateX(-90deg); }
}
@-webkit-keyframes rotateRoomTopIn {
	from { opacity: .3; -webkit-transform: translateY(100%) rotateX(90deg); }
}
@keyframes rotateRoomTopIn {
	from { opacity: .3; -webkit-transform: translateY(100%) rotateX(90deg); transform: translateY(100%) rotateX(90deg); }
}
@-webkit-keyframes rotateRoomBottomOut {
	from { }
	to { opacity: .3; -webkit-transform: translateY(100%) rotateX(90deg); }
}
@keyframes rotateRoomBottomOut {
	from { }
	to { opacity: .3; -webkit-transform: translateY(100%) rotateX(90deg); transform: translateY(100%) rotateX(90deg); }
}
@-webkit-keyframes rotateRoomBottomIn {
	from { opacity: .3; -webkit-transform: translateY(-100%) rotateX(-90deg); }
}
@keyframes rotateRoomBottomIn {
	from { opacity: .3; -webkit-transform: translateY(-100%) rotateX(-90deg); transform: translateY(-100%) rotateX(-90deg); }
}

/* cube */

@-webkit-keyframes rotateCubeLeftOut {
	0% { }
	50% { -webkit-animation-timing-function: ease-out;  -webkit-transform: translateX(-50%) translateZ(-200px) rotateY(-45deg); }
	100% { opacity: .3; -webkit-transform: translateX(-100%) rotateY(-90deg); }
}
@keyframes rotateCubeLeftOut {
	0% { }
	50% { -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out;  -webkit-transform: translateX(-50%) translateZ(-200px) rotateY(-45deg);  transform: translateX(-50%) translateZ(-200px) rotateY(-45deg); }
	100% { opacity: .3; -webkit-transform: translateX(-100%) rotateY(-90deg); transform: translateX(-100%) rotateY(-90deg); }
}
@-webkit-keyframes rotateCubeLeftIn {
	0% { opacity: .3; -webkit-transform: translateX(100%) rotateY(90deg); }
	50% { -webkit-animation-timing-function: ease-out;  -webkit-transform: translateX(50%) translateZ(-200px) rotateY(45deg); }
}
@keyframes rotateCubeLeftIn {
	0% { opacity: .3; -webkit-transform: translateX(100%) rotateY(90deg); transform: translateX(100%) rotateY(90deg); }
	50% { -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out;  -webkit-transform: translateX(50%) translateZ(-200px) rotateY(45deg);  transform: translateX(50%) translateZ(-200px) rotateY(45deg); }
}
@-webkit-keyframes rotateCubeRightOut {
	0% { }
	50% { -webkit-animation-timing-function: ease-out; -webkit-transform: translateX(50%) translateZ(-200px) rotateY(45deg); }
	100% { opacity: .3; -webkit-transform: translateX(100%) rotateY(90deg); }
}
@keyframes rotateCubeRightOut {
	0% { }
	50% { -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; -webkit-transform: translateX(50%) translateZ(-200px) rotateY(45deg); transform: translateX(50%) translateZ(-200px) rotateY(45deg); }
	100% { opacity: .3; -webkit-transform: translateX(100%) rotateY(90deg); transform: translateX(100%) rotateY(90deg); }
}
@-webkit-keyframes rotateCubeRightIn {
	0% { opacity: .3; -webkit-transform: translateX(-100%) rotateY(-90deg); }
	50% { -webkit-animation-timing-function: ease-out; -webkit-transform: translateX(-50%) translateZ(-200px) rotateY(-45deg); }
}
@keyframes rotateCubeRightIn {
	0% { opacity: .3; -webkit-transform: translateX(-100%) rotateY(-90deg); transform: translateX(-100%) rotateY(-90deg); }
	50% { -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; -webkit-transform: translateX(-50%) translateZ(-200px) rotateY(-45deg); transform: translateX(-50%) translateZ(-200px) rotateY(-45deg); }
}
@-webkit-keyframes rotateCubeTopOut {
	0% { }
	50% { -webkit-animation-timing-function: ease-out; -webkit-transform: translateY(-50%) translateZ(-200px) rotateX(45deg); }
	100% { opacity: .3; -webkit-transform: translateY(-100%) rotateX(90deg); }
}
@keyframes rotateCubeTopOut {
	0% {}
	50% { -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; -webkit-transform: translateY(-50%) translateZ(-200px) rotateX(45deg); transform: translateY(-50%) translateZ(-200px) rotateX(45deg); }
	100% { opacity: .3; -webkit-transform: translateY(-100%) rotateX(90deg); transform: translateY(-100%) rotateX(90deg); }
}
@-webkit-keyframes rotateCubeTopIn {
	0% { opacity: .3; -webkit-transform: translateY(100%) rotateX(-90deg); }
	50% { -webkit-animation-timing-function: ease-out; -webkit-transform: translateY(50%) translateZ(-200px) rotateX(-45deg); }
}
@keyframes rotateCubeTopIn {
	0% { opacity: .3; -webkit-transform: translateY(100%) rotateX(-90deg); transform: translateY(100%) rotateX(-90deg); }
	50% { -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; -webkit-transform: translateY(50%) translateZ(-200px) rotateX(-45deg); transform: translateY(50%) translateZ(-200px) rotateX(-45deg); }
}
@-webkit-keyframes rotateCubeBottomOut {
	0% { }
	50% { -webkit-animation-timing-function: ease-out; -webkit-transform: translateY(50%) translateZ(-200px) rotateX(-45deg); }
	100% { opacity: .3; -webkit-transform: translateY(100%) rotateX(-90deg); }
}
@keyframes rotateCubeBottomOut {
	0% { }
	50% { -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; -webkit-transform: translateY(50%) translateZ(-200px) rotateX(-45deg); transform: translateY(50%) translateZ(-200px) rotateX(-45deg); }
	100% { opacity: .3; -webkit-transform: translateY(100%) rotateX(-90deg); transform: translateY(100%) rotateX(-90deg); }
}
@-webkit-keyframes rotateCubeBottomIn {
	0% { opacity: .3; -webkit-transform: translateY(-100%) rotateX(90deg); }
	50% { -webkit-animation-timing-function: ease-out; -webkit-transform: translateY(-50%) translateZ(-200px) rotateX(45deg); }
}
@keyframes rotateCubeBottomIn {
	0% { opacity: .3; -webkit-transform: translateY(-100%) rotateX(90deg); transform: translateY(-100%) rotateX(90deg); }
	50% { -webkit-animation-timing-function: ease-out; animation-timing-function: ease-out; -webkit-transform: translateY(-50%) translateZ(-200px) rotateX(45deg); transform: translateY(-50%) translateZ(-200px) rotateX(45deg); }
}

/* carousel */

@-webkit-keyframes rotateCarouselLeftOut {
	from { }
	to { opacity: .3; -webkit-transform: translateX(-150%) scale(.4) rotateY(-65deg); }
}
@keyframes rotateCarouselLeftOut {
	from { }
	to { opacity: .3; -webkit-transform: translateX(-150%) scale(.4) rotateY(-65deg); transform: translateX(-150%) scale(.4) rotateY(-65deg); }
}
@-webkit-keyframes rotateCarouselLeftIn {
	from { opacity: .3; -webkit-transform: translateX(200%) scale(.4) rotateY(65deg); }
}
@keyframes rotateCarouselLeftIn {
	from { opacity: .3; -webkit-transform: translateX(200%) scale(.4) rotateY(65deg); transform: translateX(200%) scale(.4) rotateY(65deg); }
}
@-webkit-keyframes rotateCarouselRightOut {
	from { }
	to { opacity: .3; -webkit-transform: translateX(200%) scale(.4) rotateY(65deg); }
}
@keyframes rotateCarouselRightOut {
	from { }
	to { opacity: .3; -webkit-transform: translateX(200%) scale(.4) rotateY(65deg); transform: translateX(200%) scale(.4) rotateY(65deg); }
}
@-webkit-keyframes rotateCarouselRightIn {
	from { opacity: .3; -webkit-transform: translateX(-200%) scale(.4) rotateY(-65deg); }
}
@keyframes rotateCarouselRightIn {
	from { opacity: .3; -webkit-transform: translateX(-200%) scale(.4) rotateY(-65deg); transform: translateX(-200%) scale(.4) rotateY(-65deg); }
}
@-webkit-keyframes rotateCarouselTopOut {
	from { }
	to { opacity: .3; -webkit-transform: translateY(-200%) scale(.4) rotateX(65deg); }
}
@keyframes rotateCarouselTopOut {
	from { }
	to { opacity: .3; -webkit-transform: translateY(-200%) scale(.4) rotateX(65deg); transform: translateY(-200%) scale(.4) rotateX(65deg); }
}
@-webkit-keyframes rotateCarouselTopIn {
	from { opacity: .3; -webkit-transform: translateY(200%) scale(.4) rotateX(-65deg); }
}
@keyframes rotateCarouselTopIn {
	from { opacity: .3; -webkit-transform: translateY(200%) scale(.4) rotateX(-65deg); transform: translateY(200%) scale(.4) rotateX(-65deg); }
}
@-webkit-keyframes rotateCarouselBottomOut {
	from { }
	to { opacity: .3; -webkit-transform: translateY(200%) scale(.4) rotateX(-65deg); }
}
@keyframes rotateCarouselBottomOut {
	from { }
	to { opacity: .3; -webkit-transform: translateY(200%) scale(.4) rotateX(-65deg); transform: translateY(200%) scale(.4) rotateX(-65deg); }
}
@-webkit-keyframes rotateCarouselBottomIn {
	from { opacity: .3; -webkit-transform: translateY(-200%) scale(.4) rotateX(65deg); }
}
@keyframes rotateCarouselBottomIn {
	from { opacity: .3; -webkit-transform: translateY(-200%) scale(.4) rotateX(65deg); transform: translateY(-200%) scale(.4) rotateX(65deg); }
}

/* sides */

@-webkit-keyframes rotateSidesOut {
	from { }
	to { opacity: 0; -webkit-transform: translateZ(-500px) rotateY(90deg); }
}
@keyframes rotateSidesOut {
	from { }
	to { opacity: 0; -webkit-transform: translateZ(-500px) rotateY(90deg); transform: translateZ(-500px) rotateY(90deg); }
}

@-webkit-keyframes rotateSidesIn {
	from { opacity: 0; -webkit-transform: translateZ(-500px) rotateY(-90deg); }
}
@keyframes rotateSidesIn {
	from { opacity: 0; -webkit-transform: translateZ(-500px) rotateY(-90deg); transform: translateZ(-500px) rotateY(-90deg); }
}

/* slide */

@-webkit-keyframes rotateSlideOut {
	0% { }
	25% { opacity: .5; -webkit-transform: translateZ(-500px); }
	75% { opacity: .5; -webkit-transform: translateZ(-500px) translateX(-200%); }
	100% { opacity: .5; -webkit-transform: translateZ(-500px) translateX(-200%); }
}
@keyframes rotateSlideOut {
	0% { }
	25% { opacity: .5; -webkit-transform: translateZ(-500px); transform: translateZ(-500px); }
	75% { opacity: .5; -webkit-transform: translateZ(-500px) translateX(-200%); transform: translateZ(-500px) translateX(-200%); }
	100% { opacity: .5; -webkit-transform: translateZ(-500px) translateX(-200%); transform: translateZ(-500px) translateX(-200%); }
}
@-webkit-keyframes rotateSlideIn {
	0%, 25% { opacity: .5; -webkit-transform: translateZ(-500px) translateX(200%); }
	75% { opacity: .5; -webkit-transform: translateZ(-500px); }
	100% { opacity: 1; -webkit-transform: translateZ(0) translateX(0); }
}
@keyframes rotateSlideIn {
	0%, 25% { opacity: .5; -webkit-transform: translateZ(-500px) translateX(200%); transform: translateZ(-500px) translateX(200%); }
	75% { opacity: .5; -webkit-transform: translateZ(-500px); transform: translateZ(-500px); }
	100% { opacity: 1; -webkit-transform: translateZ(0) translateX(0); transform: translateZ(0) translateX(0); }
}

/* animation delay classes */

.pt-page-delay100 {
	-webkit-animation-delay: .1s;
	animation-delay: .1s;
}
.pt-page-delay180 {
	-webkit-animation-delay: .180s;
	animation-delay: .180s;
}
.pt-page-delay200 {
	-webkit-animation-delay: .2s;
	animation-delay: .2s;
}
.pt-page-delay300 {
	-webkit-animation-delay: .3s;
	animation-delay: .3s;
}
.pt-page-delay400 {
	-webkit-animation-delay: .4s;
	animation-delay: .4s;
}
.pt-page-delay500 {
	-webkit-animation-delay: .5s;
	animation-delay: .5s;
}
.pt-page-delay700 {
	-webkit-animation-delay: .7s;
	animation-delay: .7s;
}
.pt-page-delay1000 {
	-webkit-animation-delay: 1s;
	animation-delay: 1s;
}

	



		

	</style>
  	@endsection	