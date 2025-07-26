<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Chamado #[[id]] - [[assunto]]</title>
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

 <style>
    .chat-container {
      max-height: 400px;
      overflow-y: auto;
      padding: 15px;
      background-color: #f8f9fa;
      border: 1px solid #ddd;
      border-radius: 8px;
    }
    .message {
      margin-bottom: 20px;
    }
    .message .content {
      display: inline-block;
      padding: 10px 15px;
      border-radius: 10px;
      max-width: 70%;
      position: relative;
    }
    .message.solicitante .content {
      background-color: #d1e7dd;
      margin-left: auto;
    }
    .message.atendente .content {
      background-color: #e2e3e5;
      margin-right: auto;
    }
    .message .timestamp {
      display: block;
      font-size: 0.8rem;
      color: #6c757d;
      margin-top: 5px;
    }
    .attachments {
      margin-top: 5px;
    }
    .attachments a {
      display: inline-block;
      padding: 3px 8px;
      margin-right: 5px;
      border-radius: 4px;
      background-color: #0d6efd;
      color: #fff;
      font-size: 0.85rem;
      text-decoration: none;
    }
    .attachments a:hover {
      background-color: #0b5ed7;
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
    <div class="wrapper" id="vue-app">
        <!-- Sidebar -->
        @import(sistema.layout.sidebar)
        <!-- End Sidebar -->

        <div class="main-panel">
            @import(sistema.layout.navbar)

            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h3 class="fw-bold mb-3"> <i class="fa fa-user"></i> Atendimento </h3>
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
                                    <div class="card-title">Chamado #[[id]]</div>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-md-2" style="font-size: 15px;">
                                            <strong>Status:</strong><br>
                                            <span v-if="[[status]] == 1" class="badge badge-success" style="font-size: 13px;">[[status_nome]]</span>
                                            <span v-else-if="[[status]] == 2" class="badge badge-warning" style="font-size: 13px;">[[status_nome]]</span>
                                            <span v-else-if="[[status]] == 3" class="badge badge-danger" style="font-size: 13px;">[[status_nome]]</span>
                                        </div>
                                        <div class="col-md-2" style="font-size: 15px;">
                                            <strong>Prioridade:</strong><br>
                                            <span v-if="[[prioridade]] == 1" class="badge badge-primary" style="font-size: 13px;">[[prioridade_nome]]</span>
                                            <span v-else-if="[[prioridade]] == 2" class="badge badge-warning" style="font-size: 13px;">[[prioridade_nome]]</span>
                                            <span v-else-if="[[prioridade]] == 3" class="badge badge-danger" style="font-size: 13px;">[[prioridade_nome]]</span>
                                            <span v-else-if="[[prioridade]] == 4" class="badge badge-danger"style="font-size: 13px;">[[prioridade_nome]]</span>
                                        </div>
                                        <div class="col-md-2" style="font-size: 15px;">
                                            <strong>Setor Solicitante:</strong><br> [[setor_solicitante_nome]]
                                        </div>
                                        <div class="col-md-2" style="font-size: 15px;">
                                            <strong>Solicitante:</strong><br> [[usuario_solicitante_nome]]
                                        </div>
                                        <div class="col-md-2" style="font-size: 15px;">
                                            <strong>Setor Atendente:</strong><br> [[setor_atendente_nome]]
                                        </div>
                                        <div class="col-md-2" style="font-size: 15px;">
                                            <strong>Atendente:</strong><br> [[usuario_atendente_nome]]
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">[[assunto]]</div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <p>[[desc]]</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <strong>Aberto em:</strong> 28/05/1999
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="card-header">
                                    <div class="card-title">Anexos</div>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-info"> <i class="fa fa-file"></i> Anexo 1</button>&nbsp;&nbsp;
                                </div>
                                <div class="card-action text-center">
                                    <div class="row">
                                        <button class="btn btn-primary">
                                            <i class="fa fa-ticket-alt "></i> Abrir chamado
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Conversa</div>
                                </div>
<div class="card-body">
        <!-- Caixa de mensagens -->
        <div class="chat-container mb-3" id="chatContainer">
          <!-- Mensagem do atendente -->
          <div class="message atendente">
            <div class="content">
              Bom dia, João! Qual erro você está enfrentando?
              <span class="timestamp">Maria (Atendente) - 10:00</span>
            </div>
          </div>
          <!-- Mensagem do solicitante -->
          <div class="message solicitante">
            <div class="content">
              Bom dia! Não consigo acessar o sistema, aparece "Usuário não encontrado".
              <span class="timestamp">João (Solicitante) - 10:02</span>
            </div>
          </div>
          <!-- Mensagem do atendente com anexos -->
          <div class="message atendente">
            <div class="content">
              Pode verificar se seu cadastro existe? Estou enviando um manual.
              <div class="attachments">
                <a href="#"><i class="fas fa-paperclip"></i> Manual.pdf</a>
                <a href="#"><i class="fas fa-image"></i> Screenshot.png</a>
              </div>
              <span class="timestamp">Maria (Atendente) - 10:05</span>
            </div>
          </div>
        </div>

        <!-- Formulário de nova mensagem -->
        <form class="d-flex gap-2">
          <input type="text" class="form-control" placeholder="Digite sua mensagem...">
          <button class="btn btn-secondary" type="button"><i class="fas fa-paperclip"></i></button>
          <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
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
    <script src="[[baseUri]]/views/sistema/chamado/cadastro/index-vue.js"></script>
    <script>
        document.querySelector('#menu-chamados').classList.remove('collapsed');
    </script>
</body>

</html>