<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
        include("./customClassGit.php");
        include("./commonJS.php");
        $dir =$_GET['dir'];
        $filename = $_GET['file'];
        $gitRules = new gitRules();
        $gitRules->documentRoot = $_SERVER['DOCUMENT_ROOT'];
        $gitRules->folder = $dir;
        $gitRules->file = $filename;
        
        
    ?>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>

    </header>

    <nav class="navegacao">
        <a href="#" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
         </nav>

    <main class="principal">
        <div class="conteudo">
            <?php
            $fullpath = $dir . "/" . $filename . ".php";
            include ($fullpath);
            ?>
        </div>
    </main>
    <footer class="rodape">
        Curso PHP <?php echo date("Y")?>
        <?php
            include("./viewCustom/gitForm.php");
        ?>   
    </footer>
</body>
</html>

