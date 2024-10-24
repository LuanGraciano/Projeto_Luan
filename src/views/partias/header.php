<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/PROJETO_LUAN/public/css/style.css">
    <title>Clube de Membros</title>
    <style>
        .header {
            background: linear-gradient(90deg, #007bff 0%, #0056b3 100%); /* Gradiente moderno */
            color: white; /* Cor do texto */
            padding: 20px 30px; /* Padding superior e inferior */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Sombra para profundidade */
            position: sticky; /* Fixa no topo */
            top: 0; /* Fica no topo da página */
            z-index: 1000; /* Sobrepõe outros elementos */
        }
        .header h1 {
            font-size: 1.8rem; /* Tamanho da fonte do título */
            font-weight: bold; /* Negrito */
            margin: 0; /* Remove margens */
        }
        .nav-item {
            margin-left: 20px; /* Espaçamento entre itens do menu */
        }
        .nav-link {
            color: white; /* Cor dos links */
            font-size: 1rem; /* Tamanho da fonte dos links */
            transition: color 0.3s, background-color 0.3s; /* Efeitos de transição */
            padding: 10px 15px; /* Padding interno dos links */
            border-radius: 5px; /* Bordas arredondadas */
        }
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Efeito de fundo ao passar o mouse */
            color: #ffd700; /* Cor dourada ao passar o mouse */
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1 class="h4">Clube de Membros</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/projeto_Luan/panel/clube/">Membros</a>
                    </li>                
                    <li class="nav-item">
                        <a class="nav-link" href="create">Criar Membro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="edit">Edição</a>
                    </li>  
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/projeto_Luan/panel/clube/logout">Sair</a>
                    </li>                  
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2>Bem-vindo <?= $_SESSION["user"]['name']?></h2>
        <!-- O conteúdo da página vai aqui -->
    </div>
    
