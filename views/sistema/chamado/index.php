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
              <h3 class="fw-bold mb-3"> <i class="fa fa-user"></i> Cadastrar novo aluno</h3>
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
                    <div class="card-title">Dados Pessoais</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                        @import(sistema.aluno.cadastro.layout.dados)
                    </div>
                  </div>

                  <div class="card-header">
                    <div class="card-title">Endereço</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                        @import(sistema.aluno.cadastro.layout.dados-endereco)
                    </div>
                  </div>

                  <div class="card-header">
                    <div class="card-title">Contato</div>
                  </div>
                  <div class="card-body">
                    <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email2">Telefone</label>
                            <input type="text" class="form-control" id="nome" placeholder="Entre com o telefone">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email2">Celular</label>
                            <input type="text" class="form-control" id="nome" placeholder="Entre com o celular">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email2">Email</label>
                            <input type="text" class="form-control" id="nome" placeholder="Entre com o email">
                        </div>
                    </div>
                    </div>
                  </div>

                  <div class="card-header">
                    <div class="card-title">Foto</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                                                <div class="input-file input-file-image">
                                                    <img class="img-upload-preview img-circle" width="150" height="150" src="" alt="Foto">
                                                    <input type="file" class="form-control form-control-file" id="uploadImg1" name="uploadImg1" accept="image/*" required="">
                                                    <label for="uploadImg1" class="  label-input-file btn btn-black btn-round">
                                                        <span class="btn-label">
                                                            <i class="fa fa-file-image"></i>
                                                        </span>
                                                        Insira uma foto
                                                    </label>
                                                </div>
                                            </div>
                    </div>
                  </div>

                  <div class="card-action text-center">
                    <button class="btn btn-success btn-block"> 
                       <i class="fa fa-save"></i> Cadastrar Aluno
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

       <!-- <footer class="footer">
          <div class="container-fluid d-flex justify-content-between">
            <nav class="pull-left">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="http://www.themekita.com">
                    ThemeKita
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Help </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Licenses </a>
                </li>
              </ul>
            </nav>
            <div class="copyright">
              2024, made with <i class="fa fa-heart heart text-danger"></i> by
              <a href="http://www.themekita.com">ThemeKita</a>
            </div>
            <div>
              Distributed by
              <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
            </div>
          </div>
        </footer>-->
        @import(sistema.layout.footer)
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/core/popper.min.js"></script>
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Sweet Alert -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="[[baseUri]]/resources/kaiadmin-lite/assets/js/setting-demo2.js"></script>
  </body>
</html>
