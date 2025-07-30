<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title> Chamado - Lista </title>
  <meta
    content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    name="viewport" />
  <link
    rel="icon"
    href="[[baseUri]]/resources/kaiadmin-lite/assets/img/kaiadmin/favicon.ico"
    type="image/x-icon" />
  <style>
    .selectgroup-input:checked+.selectgroup-button {
      border-color: #e74c3c !important;
      z-index: 1 !important;
      color: #e74c3c !important;
      background: rgba(231, 76, 60, 0.15) !important;
    }

    .selectgroup-input:checked+.selectgroup-button {
      border-color: #c0392b !important;
      z-index: 1 !important;
      color: #c0392b !important;
      background: rgba(192, 57, 43, 0.2) !important;
    }

    selectgroup-input-warning:checked+.selectgroup-button {
      border-color: #fbbc05 !important;
      z-index: 1 !important;
      color: #fbbc05 !important;
      background: rgba(251, 188, 5, 0.15) !important;
    }
  </style>
  <!-- Fonts and icons -->
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Public Sans:300,400,500,600,700"]
      },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["[[baseUri]]/resources/kaiadmin-lite/assets/css/fonts.min.css"],
      },
      active: function() {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="[[baseUri]]/resources/kaiadmin-lite/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="[[baseUri]]/resources/kaiadmin-lite/assets/css/plugins.min.css" />
  <link rel="stylesheet" href="[[baseUri]]/resources/kaiadmin-lite/assets/css/kaiadmin.min.css" />
  <style>

  </style>
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    @import(sistema.layout.sidebar)
    <!-- End Sidebar -->

    <div class="main-panel">
      @import(sistema.layout.navbar)

      <div id="vue-app" class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3"> Chamados </h3>
            <ul class="breadcrumbs mb-3">
              <li class="nav-home">
                <a href="#">
                  <i class="icon-home"></i>
                </a>
              </li>
              <li class="separator">
                <i class="icon-arrow-right"></i>
              </li>
              <li class="nav-item">
                <a href="#">Home</a>
              </li>
              <li class="separator">
                <i class="icon-arrow-right"></i>
              </li>
              <li class="nav-item">
                <a href="#">Cadastro</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Informações</div>
                </div>
                <div class="card-body">
                  <div id="chamados-div" class="row">
                    @import(sistema.chamado.lista.layout.filter)
                    <div class="col-12">
                      @import(sistema.chamado.lista.layout.grid)
                    </div>
                  </div>
                  <div id="loading-spinner-div" class="row d-none">
                    <div class="col-12 text-center">
                      <div id="loading-spinner" class="align-items-center">
                        <div class="spinner-border text-primary me-3" role="status" aria-hidden="true" style="font-size: 15px;"></div><br>
                        <strong>Carregando registros, aguarde...</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @import(sistema.layout.footer)
    </div>
  </div>
  <script>
    const BASE_URL = '[[baseUri]]';
    const FILTER = {
      status: null,
      prioridade: null,
    };
  </script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/core/popper.min.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/core/bootstrap.min.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/chart.js/chart.min.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/chart-circle/circles.min.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/datatables/datatables.min.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/jsvectormap/world.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/gmaps/gmaps.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
  <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/kaiadmin.min.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="[[baseUri]]/views/sistema/chamado/lista/index-vue.js"></script>
  <script src="[[baseUri]]/views/sistema/chamado/lista/index.js"></script>


</body>

</html>