<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Forms - Kaiadmin Bootstrap 5 Admin Dashboard</title>
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

        <div class="container">
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
                  <a href="#">Alunos</a>
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
                        <div class="col-12">
                        <table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
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

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/setting-demo2.js"></script>
  </body>
</html>
