<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>
    <?=env('APP_NAME')?>
  </title>
  <meta name="description" content="Latest updates and statistic charts">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--begin::Web font -->
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
  <script>
        WebFont.load({
          google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
          active: function() {
              sessionStorage.fonts = true;
          }
        });
  </script>
  <!--end::Web font -->
      <!--begin::Base Styles -->
  <link href="css/style.css"/>
  <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
  <link href="css/app.css" rel="stylesheet" type="text/css" />
  <!--end::Base Styles -->
  <link rel="shortcut icon" href="assets/demo/default/media/img/logo/ISSSTE_logo.png" />
  <style>
    .item-documento{
        display: block;
        margin: 0 auto;
        margin-top: 30px;
    }
        .item-documento .image{
            display: inline-block;
            width: 60px;
            vertical-align: top;
            
        }
        .item-documento .nombre{
            display: inline-block;
            width: 70%;
            vertical-align: top;
        }
        .bannerHome{
          display:block;
          width: 100%;          
        }
        .bannerHome img{    
          width: 55%;
          margin: 0 auto;
          display: block;
        }
  </style>
</head>

  <body>
    <div class="bannerHome">          
      <img alt="convocatoria" src="./img/convocatoria.jpg">
    </div>      
    <div class="m-grid m-grid--hor m-grid--root m-page">
  			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--singin" id="m_login">

        <div  class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside" style="margin: 0 auto;">
  					<div class="m-stack m-stack--hor m-stack--desktop">
  						<div class="m-stack__item m-stack__item--fluid">
  							<div class="m-login__wrapper" style="padding: 0px 2rem 2rem 2rem !important;">
  								<div class="m-login__logo"><?=env('APP_NAME')?></div>
                  <!-- FORMULARIO DE INICIO DE SESSION -->
  								<div class="m-login__signin">
                    <div class="m-login__form-action" style="margin-bottom: 50px;">
                      <a href="/registro" class="btn btn-lg btn-block btn-focus m-btn m-btn--pill m-btn--custom m-btn--air loginfnxx">Postúlate Aquí</a>
                    </div>
                    <a href="./docs/Desplegado-SALUD.pdf" class="item-documento" target="_blank">      
                      <figure class="image">
                          <img alt="Logo" src="./img/documentopdf.png">
                      </figure>
                      <div class="nombre">
                        Covocatoria
                      </div>
                    </a>                  
  								</div>
  							</div>
  						</div>
                  <!-- SPAN DERECHOS DE AUTOS -->
  						<div class="m-stack__item m-stack__item--center">
  							<div class="m-login__account">
  								<span class="m-login__account-msg">
  									2020 &copy; <?=env('APP_NAME')?>
  								</span>
  								&nbsp;&nbsp;
  								<span href="javascript:;"
                    id="[dis]m_login_signup"
                    class="m-link m-link--focus m-login__account-link">
  									<?=env('SLOGAN_NAME')?>
  								</span>
  							</div>
  						</div>

  					</div>
  				</div>
  				<!-- <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center
          m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content"
          style="background-image: url(assets/app/media/img//bg/bg-4.jpg)">
          </div> -->
  			</div>
  		</div>
  		<!-- end:: Page -->
      	<!--begin::Base Scripts -->
  		<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
  		<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
  		<!--end::Base Scripts -->
          <!--begin::Page Snippets -->
  		<script src="assets/snippets/pages/user/login.js" type="text/javascript"></script>
  		<!--end::Page Snippets -->
      <script>var app_url = '<?=env('APP_URL')?>';</script>
      <script src="assets/js/generales.js"></script>
      <script src="assets/js/common.js"></script>

  </body>
</html>