<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> Chamado - Lista </title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="[[baseUri]]/resources/kaiadmin-lite/assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />
    <style>

.selectgroup-input:checked + .selectgroup-button {
    border-color: #e74c3c !important;
    z-index: 1 !important;
    color: #e74c3c !important;
    background: rgba(231, 76, 60, 0.15) !important;
}

.selectgroup-input:checked + .selectgroup-button {
    border-color: #c0392b !important;
    z-index: 1 !important;
    color: #c0392b !important;
    background: rgba(192, 57, 43, 0.2) !important;
}
selectgroup-input-warning:checked + .selectgroup-button {
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
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["[[baseUri]]/resources/kaiadmin-lite/assets/css/fonts.min.css"],
        },
        active: function () {
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
                    <div class="row">
                        @import(sistema.chamado.lista.layout.filter)
                        <div class="col-12">
                          @import(sistema.chamado.lista.layout.grid)
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
    <script> const BASE_URL = '[[baseUri]]'; </script>
    <script>
    const { createApp, ref, onMounted } = Vue

      createApp({
        setup() {
          const setores = ref([]);
          const get_chamados = async () => {
            try {
              let situacao = document.querySelector('input[name="status"]:checked');
              let prioridade = document.querySelector('input[name="prioridade"]:checked');
              const params = new URLSearchParams({
                situacao: situacao,
                prioridade: prioridade
              }).toString();

              console.log(situacao);
              const URL = BASE_URL + '/chamado/get/';
              let response = await fetch(URL);
              let json = await response.json();
              console.log(json);
              setores.value = json.data;
              console.log(setores.value);
            } catch (error) {
              //data.value = [];
              console.log(response);
              console.log(error.message);
            }
          };

          onMounted(() => {
            get_chamados();
          });

          return { setores };
        }
      }).mount('#vue-app');

      function sds(){

      }

    </script>
  </body>
</html>
