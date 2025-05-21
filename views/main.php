<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Chamados</title>
    <!-- Link para o CSS do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <!-- Título da Página -->
    <h1 class="text-center mb-4">Gestão de Chamados</h1>

    <!-- Grid de Tickets -->
    <div class="row">
        <!-- Card de um Chamado -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Chamado #001</h5>
                    <p class="card-text">Descrição do problema: Falha no sistema de login.</p>
                    <p class="card-text"><strong>Status:</strong> Aberto</p>
                    <p class="card-text"><strong>Prioridade:</strong> Alta</p>
                </div>
            </div>
        </div>

        <!-- Card de outro Chamado -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Chamado #002</h5>
                    <p class="card-text">Descrição do problema: Erro ao enviar e-mails.</p>
                    <p class="card-text"><strong>Status:</strong> Em andamento</p>
                    <p class="card-text"><strong>Prioridade:</strong> Média</p>
                </div>
            </div>
        </div>

        <!-- Card de outro Chamado -->
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Chamado #003</h5>
                    <p class="card-text">Descrição do problema: Conflito de versão do sistema.</p>
                    <p class="card-text"><strong>Status:</strong> Fechado</p>
                    <p class="card-text"><strong>Prioridade:</strong> Baixa</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Botão para abrir o modal -->
    <div class="d-flex justify-content-center mt-4">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCadastrarChamado">
            Novo Chamado
        </button>
    </div>

</div>

<!-- Modal para cadastro de Chamado -->
<div class="modal fade" id="modalCadastrarChamado" tabindex="-1" aria-labelledby="modalCadastrarChamadoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCadastrarChamadoLabel">Cadastrar Novo Chamado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" placeholder="Ex: Erro ao carregar página">
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao" rows="3" placeholder="Descreva o problema..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="prioridade" class="form-label">Prioridade</label>
                        <select class="form-select" id="prioridade">
                            <option value="alta">Alta</option>
                            <option value="media">Média</option>
                            <option value="baixa">Baixa</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar Chamado</button>
            </div>
        </div>
    </div>
</div>

<!-- Scripts do Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
