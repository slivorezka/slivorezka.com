<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <script async src="//www.googletagmanager.com/gtag/js?id=UA-164232230-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-164232230-1');
  </script>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="./ms-icon-144x144.png">
  <meta name="keywords" content="Andriy Malyeyev" />
  <meta name="description" content="Andriy Malyeyev" />
  <title>Andriy Malyeyev</title>
  <link rel="manifest" href="./manifest.json" />
  <link rel="apple-touch-icon" sizes="57x57" href="./apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-icon-180x180.png">
  <link rel="icon" href="./favicon.ico" />
  <link rel="icon" type="image/png" sizes="192x192" href="./android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" type="text/css"
        href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" type="text/css"
        href="//cdnjs.cloudflare.com/ajax/libs/material-kit/2.0.6/css/material-kit.min.css" />
  <style>
    .main {
      margin: -60px auto auto;
    }

    @media (max-width: 576px) {
      .main {
        margin-left: 30px;
        margin-right: 30px;
        width: auto;
      }
    }

    .navbar .navbar-nav .nav-item .nav-link {
      font-size: 24px;
      margin: 0;
    }

    .d-lg-none {
      font-size: 13px;
      font-weight: 500;
      text-transform: initial;
      margin-left: 5px;
      vertical-align: bottom;
    }

    .come-back-alive {
      margin-left: 0;
    }
    @media (max-width: 991px) {
      .shyk-systems-white {
        display: none;
      }
      .shyk-systems-blue {
        display: inline-block;
      }
    }

    @media (min-width: 991px) {
      .shyk-systems-white {
        display: inline-block;
      }
      .shyk-systems-blue {
        display: none;
      }
    }
    /* NY */
    .lightrope {
      text-align: center;
      white-space: nowrap;
      overflow: hidden;
      position: absolute;
      z-index: 1;
      margin: -15px 0 0 0;
      padding: 0;
      pointer-events: none;
      width: 100%;
    }
    .lightrope li {
      position: relative;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      list-style: none;
      padding: 0;
      width: 12px;
      height: 28px;
      border-radius: 50%;
      margin: 20px;
      display: inline-block;
      background: #00f7a5;
      box-shadow: 0 5px 24px 3px #00f7a5;
      -webkit-animation-name: flash-1;
      animation-name: flash-1;
      -webkit-animation-duration: 2s;
      animation-duration: 2s;
    }
    .lightrope li:nth-child(2n+1) {
      background: aqua;
      box-shadow: 0 5px 24px 3px rgba(0, 255, 255, 0.5);
      -webkit-animation-name: flash-2;
      animation-name: flash-2;
      -webkit-animation-duration: 0.4s;
      animation-duration: 0.4s;
    }
    .lightrope li:nth-child(4n+2) {
      background: #f70094;
      box-shadow: 0 5px 24px 3px #f70094;
      -webkit-animation-name: flash-3;
      animation-name: flash-3;
      -webkit-animation-duration: 1.1s;
      animation-duration: 1.1s;
    }
    .lightrope li:nth-child(odd) {
      -webkit-animation-duration: 1.8s;
      animation-duration: 1.8s;
    }
    .lightrope li:nth-child(3n+1) {
      -webkit-animation-duration: 1.4s;
      animation-duration: 1.4s;
    }
    .lightrope li:before {
      content: "";
      position: absolute;
      background: #222;
      width: 10px;
      height: 9px;
      border-radius: 3px;
      top: -4.6666666667px;
      left: 1px;
    }
    .lightrope li:after {
      content: "";
      top: -14px;
      left: 9px;
      position: absolute;
      width: 52px;
      height: 19px;
      border-bottom: solid #222 2px;
      border-radius: 50%;
    }
    .lightrope li:last-child:after {
      content: none;
    }
    .lightrope li:first-child {
      margin-left: -40px;
    }

    @-webkit-keyframes flash-1 {
      0%, 100% {
        background: #00f7a5;
        box-shadow: 0 5px 24px 3px #00f7a5;
      }
      50% {
        background: rgba(0, 247, 165, 0.4);
        box-shadow: 0 5px 24px 3px rgba(0, 247, 165, 0.2);
      }
    }

    @keyframes flash-1 {
      0%, 100% {
        background: #00f7a5;
        box-shadow: 0 5px 24px 3px #00f7a5;
      }
      50% {
        background: rgba(0, 247, 165, 0.4);
        box-shadow: 0 5px 24px 3px rgba(0, 247, 165, 0.2);
      }
    }
    @-webkit-keyframes flash-2 {
      0%, 100% {
        background: aqua;
        box-shadow: 0 5px 24px 3px aqua;
      }
      50% {
        background: rgba(0, 255, 255, 0.4);
        box-shadow: 0 5px 24px 3px rgba(0, 255, 255, 0.2);
      }
    }
    @keyframes flash-2 {
      0%, 100% {
        background: aqua;
        box-shadow: 0 5px 24px 3px aqua;
      }
      50% {
        background: rgba(0, 255, 255, 0.4);
        box-shadow: 0 5px 24px 3px rgba(0, 255, 255, 0.2);
      }
    }
    @-webkit-keyframes flash-3 {
      0%, 100% {
        background: #f70094;
        box-shadow: 0 5px 24px 3px #f70094;
      }
      50% {
        background: rgba(247, 0, 148, 0.4);
        box-shadow: 0 5px 24px 3px rgba(247, 0, 148, 0.2);
      }
    }
    @keyframes flash-3 {
      0%, 100% {
        background: #f70094;
        box-shadow: 0 5px 24px 3px #f70094;
      }
      50% {
        background: rgba(247, 0, 148, 0.4);
        box-shadow: 0 5px 24px 3px rgba(247, 0, 148, 0.2);
      }
    }
    /* END NY */
  </style>
</head>
<body class="profile-page sidebar-collapse">
<noscript>
  <iframe src="//www.googletagmanager.com/ns.html?id=GTM-TSN52K3" height="0" width="0"
          style="display: none; visibility: hidden"></iframe>
  You need to enable JavaScript to run this app.
</noscript>
<ul class="lightrope">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<nav class="navbar navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="/" rel="tooltip" data-original-title="Andriy Malyeyev" title="Andriy Malyeyev">
        Andriy Malyeyev
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="ShykSystems" data-placement="bottom"
            href="https://shyk.systems" target="_blank" data-original-title="ShykSystems">
            <img src="./shyk-systems-white.png" class="shyk-systems-white" width="24" height="24"  alt="ShykSystems" title="ShykSystems"/>
            <img src="./shyk-systems-blue.png" class="shyk-systems-blue" width="24" height="24"  alt="ShykSystems" title="ShykSystems"/>
            <span class="come-back-alive d-lg-none">ShykSystems</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="ComeBackAlive" data-placement="bottom"
             href="https://savelife.in.ua/en/donate-en" target="_blank" data-original-title="ComeBackAlive">
             <img src="./9153350_flag_country_nation_ukraine_design_icon.png" width="24" height="24"  alt="ComeBackAlive" title="ComeBackAlive"/>
             <span class="come-back-alive d-lg-none">ComeBackAlive</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Facebook" data-placement="bottom"
             href="https://www.facebook.com/slivorezka" target="_blank" data-original-title="Facebook">
              <i class="fa-brands fa-facebook-square"></i><span class="d-lg-none">Facebook</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Linkedin" data-placement="bottom"
             href="https://www.linkedin.com/in/andriy-malyeyev" target="_blank" data-original-title="Linkedin">
             <i class="fa-brands fa-linkedin"></i><span class="d-lg-none">Linkedin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Instagram" data-placement="bottom"
             href="https://www.instagram.com/slivorezka" target="_blank" data-original-title="Instagram">
             <i class="fa-brands fa-instagram-square"></i><span class="d-lg-none">Instagram</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="page-header header-filter" data-parallax="true" style="background-image: url('./background-image.jpg');">
</div>
<div class="main main-raised container">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="profile">
          <div class="avatar">
            <a class="navbar-brand" href="/" title="Andriy Malyeyev">
              <img src="./andriy_malyeyev.jpg" alt="Andriy Malyeyev" title="Andriy Malyeyev"
                   class="img-raised rounded-circle img-fluid">
            </a>
          </div>
          <div class="name">
            <h3 class="title">Andriy Malyeyev</h3>
            <h5>CEO & Founder at <a href="https://shyk.systems">ShykSystems</a></h5>
          </div>
        </div>
      </div>
    </div>
    <div class="description text-center">
      <p style="font-size: 16px;">
        Hi! My name is Andriy Malyeyev.<br>
        I am CEO & Founder at <a href="https://shyk.systems">ShykSystems</a><br>
        Also, I live in Kyiv, Ukraine 🇺🇦<br>
        Feel free ping me in these resources below.
      </p>
    </div>
    <div class="text-center">
        <a href="mailto:slivorezka@gmail.com" title="E-mail" rel="tooltip"
           data-original-title="E-mail" target="_blank"
           class="btn btn-just-icon btn-link btn-at"><i
                    class="fa-solid fa-at"></i></a>
        <a href="https://www.instagram.com/slivorezka" target="_blank"
           title="Instagram" rel="tooltip"
           data-original-title="Instagram"
           class="btn btn-just-icon btn-link btn-instagram"><i
                    class="fa-brands fa-instagram"></i></a>
        <a href="https://wa.me/380959169240" target="_blank" title="WhatsApp"
           rel="tooltip"
           data-original-title="WhatsApp"
           class="btn btn-just-icon btn-link btn-whatsapp"><i
                    class="fa-brands fa-whatsapp"></i></a>
        <a href="https://www.linkedin.com/in/andriy-malyeyev" title="Linkedin"
           rel="tooltip" data-original-title="Linkedin"
           target="_blank" class="btn btn-just-icon btn-link btn-linkedin"><i
                    class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://github.com/slivorezka" target="_blank" title="GitHub"
           rel="tooltip"
           data-original-title="GitHub"
           class="btn btn-just-icon btn-link btn-github"><i
                    class="fa-brands fa-github"></i></a>
        <a href="https://www.facebook.com/slivorezka" target="_blank"
           title="Facebook" rel="tooltip"
           data-original-title="Facebook"
           class="btn btn-just-icon btn-link btn-facebook"><i
                    class="fa-brands fa-facebook"></i></a>
        <a href="https://twitter.com/slivorezka" target="_blank" title="Twitter"
           rel="tooltip"
           data-original-title="Twitter"
           class="btn btn-just-icon btn-link btn-twitter"><i
                    class="fa-brands fa-twitter"></i></a>
        <a href="https://t.me/slivorezka" target="_blank" title="Telegram"
           rel="tooltip" data-original-title="Telegram"
           class="btn btn-just-icon btn-link btn-telegram"><i
                    class="fa-brands fa-telegram"></i></a>
    </div>
  </div>
</div>
<footer class="footer footer-default">
  <div class="container">
    <div class="copyright text-center">
      &copy; <?php echo date('Y'); ?> <a href="/" rel="tooltip" data-original-title="Andriy Malyeyev" title="Andriy Malyeyev">Andriy
      Malyeyev</a>
    </div>
  </div>
</footer>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="./popper.min.js"></script>
<script src="./bootstrap-material-design.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/material-kit/2.0.6/js/material-kit.min.js"></script>
</body>
</html>
