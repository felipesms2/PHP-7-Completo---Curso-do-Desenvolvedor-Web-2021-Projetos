<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos exercíos</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                HTML 
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                CSS 
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários
                            </a>
                        </li>                        
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio
                            </a>
                        </li>                        
                    </ul>
                </div>

                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=int">
                                Tipo Inteiro
                            </a>
                        </li>                      
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                                Tipo Float
                            </a>
                        </li>                      
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritimeticas">
                                Op aritiméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                                Desafio Precedencia
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
				Tipo String        	
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
				Tipo Booleano        	
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">
				Conversões        	
                            </a>
                        </li>
                    </ul>
                </div>
            <div class="modulo azul">
                <h3>Básico</h3>
                <ul>
                <li>
                        <a href="exercicio.php?dir=variaveis&file=basico">
                            Variáveis
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                            Desafio Equação
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                            Atribuições
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=interpolacoes">
                            Interpolações
                        </a>
                    </li>
                </ul>
            </div>                            
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Curso PHP <?php echo date("Y")?>
    </footer>
</body>
</html>

