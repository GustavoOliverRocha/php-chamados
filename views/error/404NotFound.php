<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Estilo global do body para centralizar o conteúdo */
        body {
            background: linear-gradient(135deg, #6c7ae0, #5f6f8e);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .error-container {
            text-align: center;
            padding: 60px 40px;
            background-color: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            max-width: 650px;
            width: 100%;
        }

        .error-title {
            font-size: 150px;
            font-weight: 700;
            color: #FF6347; /* Tom de vermelho suave */
        }

        .error-message {
            font-size: 24px;
            color: #666;
            margin-top: 20px;
        }

        .btn-custom {
            margin-top: 30px;
            padding: 15px 35px;
            font-size: 18px;
            background-color: #FF6347;
            color: white;
            border-radius: 25px;
            text-decoration: none;
            border: none;
        }

        .btn-custom:hover {
            background-color: #e55347;
            color: white;
        }

        .error-image {
            margin-top: 40px;
            max-width: 150px;
        }
    </style>
</head>


<body>
    <div class="error-container">
        <div class="error-title">
            404
        </div>
        <div class="error-message">
            Desculpe, não conseguimos encontrar a página que você está procurando.
        </div>
        <br>
        <a href="/" class="btn btn-primary">Voltar para a Página Inicial</a>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body>

</html>
