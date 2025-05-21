<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro Interno do Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9f1fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .error-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
        }
        .error-code {
            font-size: 6rem;
            font-weight: bold;
            color: #0d6efd;
        }
        .error-message {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="error-container">
        <div class="error-code">500</div>
        <div class="error-message">Ops! Algo deu errado no sistema.</div>
        <p class="text-muted">Estamos trabalhando para resolver o mais rápido possível.</p>
        <a href="/" class="btn btn-primary mt-4">Voltar para a Página Inicial</a>
    </div>

</body>
</html>
