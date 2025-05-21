<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Erro no banco de dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e7f1ff;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .error-card {
            max-width: 650px;
        }
    </style>
</head>
<body>
    <div class="card border-primary error-card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-2 mt-2"><i class="fa fa-database" aria-hidden="true"></i> Erro ao Executar Consulta ao Banco de Dados</h4>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Mensagem do erro:</strong></p>
            <pre class="bg-light p-3 rounded">[[err_msg]]</pre>
            <p class="card-text"><strong>Query:</strong></p>
            <pre class="bg-light p-3 rounded">[[query]]</pre>
            <a href="/" class="btn btn-outline-primary mt-3">Voltar</a>
        </div>
    </div>
</body>
</html>
