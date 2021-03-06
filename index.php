<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <?php
        include("./commonJS.php");
        include("./customClass.php");
        include("./customClassGit.php");
    ?>

</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos exercíos</h2>
    </header>
    <main class="principal">
    <div class="conteudo">
            <nav class="modulos">
                <div class="modulos">
                    <div class="modulo azul">
                        <h3>Projetos</h3>
                            <ul>
                                <li>
                                    <a href="projects/" target="_blank">
                                        Login, BD, InOut
                                    </a>
                                </li>
                            </ul>
                    </div>
                    <div class="modulo vermelho">
                        <h3>
                            Session & Cookies
                        </h3>
                        <ul>
                            <li>
                                <a 
                                    href="exercicio.php?dir=session-cookies&file=session-basic">
                                    Sessão
                                </a>
                            </li>
                            <li>
                                <a 
                                    href="exercicio.php?dir=session-cookies&file=managing-session">
                                    Gerenciando Sessões
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo laranja">
                        <h3>Error Handler</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=errorHandler&file=try-catch">
                                    Try Catch
                                </a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=errorHandler&file=custom_errors">
                                    Erros Personalizados
                                </a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=errorHandler&file=error-handler">
                                    Error Handler
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo azul-escuro">
                        <h3>Namespace</h3>
                        <ul>
                            <li>
                                <a href="exercicio.php?dir=namespace&file=namespace-basic">
                                    Básico
                                </a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=namespace&file=sub-namespace">
                                    Sub Namespace
                                </a>
                            </li>
                            <li>
                                <a href="exercicio.php?dir=namespace&file=use-alias">
                                    Use / AS
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="modulo roxo-escuro">
                        <h3>Includes</h3>
                        <ul>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include">
                                Include
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include-function">
                                Include com função
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=require-return">
                                Require & Return
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=includes&file=include-once">
                                Include Once
                            </a>
                        </li>
                        </ul>
                    </div>
                    <div class="modulo verde">
                        <h3>Objetos</h3>
                        <ul>
                        <li>
                            <a href="exercicio.php?dir=objects&file=fisrt-class">
                                Primeira Classe
                            </a>
                        </li>
                        </ul>
                        <ul>
                        <li>
                            <a href="exercicio.php?dir=objects&file=challenge-date">
                                Desafio Data
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=objects&file=construct-destruct">
                                Construtor e Destrutor
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=objects&file=inheritance">
                                Herança
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=objects&file=access-modifiers">
                                Modificadores de Acesso
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=objects&file=static-members">
                                Membros Estáticos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=objects&file=interface">
                                Interface
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=objects&file=final-modifiers">
                                Modificador Final
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=objects&file=abstract">
                                Classe Abstrata
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=objects&file=traits-01">
                                Traits 01
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=objects&file=traits-02">
                                Traits 02
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=objects&file=magic-methods">
                                Métodos Mágicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=objects&file=polymorphism">
                                Polimorfismo
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
                <div class="modulo vermelho">
                    <h3>Funções</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=functions&file=getting-start">
                                Escopo
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=arg-return">
                                Argumento e Retorno
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=arg-variable">
                                Argumentos Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=default-arguments">
                                Argumento Padrão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=data-type">
                                Declarando Tipos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=anon-functions">
                                Funções Anonimas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=closure-callable">
                                Closures e Callables
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=recursive">
                                Recursive Functions
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=returning">
                                Retornando Functions
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=functions&file=map-filter">
                                Map e Filter
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>Repetição</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=loops&file=for">
                                Laço For
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=loops&file=challenge_for">
                                Desafio For
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=loops&file=break-continue">
                                Break Continue
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=loops&file=print-challenge">
                                Desafio Impressão
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=loops&file=while">
                                While e do While
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=loops&file=challenge-table">
                                Desafio Tabela
                            </a>
                        </li>
                </div>
                <div class="modulo laranja">
                    <h3>5. Arrays</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=basico">
                                Basico
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=mapa">
                                Mapa
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafio_index">
                                Desafio Index
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafio_meses">
                                Desafio Meses
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=operacoes">
                                Operações com array
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=desafio_sorteio">
                                Desafio Sorteio
                            </a>
                        </li>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=multidimensionais">
                                Multidimensionais
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=array_constant">
                                Array Constante
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=metodo_get">
                                Metodo Get
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=metodo_post">
                                Metodo Post
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=comparacao_arrays">
                                Comparacao entre arrays
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="modulo roxo">
                    <h3>4. Controle</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=controle&file=if_else">
                                If Else
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_relacionais">
                                Op. Relacionais
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_pi">
                                Desafio PI
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operadores_logicos">
                                Operadores Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">
                                Desafio op. Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=operador_ternario">
                                Op. Ternário
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=switch">
                                Switch Case
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle&file=desafio_switch">
                                Desafio Switch
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>3. Variáveis</h3>
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
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                                Variáveis Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">
                                Desafio Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                                Valor vs Referência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">
                                Constantes
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>2. Tipos</h3>
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
                            <a href="exercicio.php?dir=tipos&file=aritmeticas">
                                Op. Aritméticas
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_precedendia">
                                Desafio Precedência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio_string">
                                Desafio String
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
                <div class="modulo verde">
                    <h3>1. Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            
        </div>

    </main>
    <footer class="rodape">
        Curso PHP <?php echo date("Y"); ?>
        <br>
        <?php
            $gitRules = new gitRules();
            $gitRules->commitMain = true;
            $filename = $gitRules->setFileName();
            include("./viewCustom/gitForm.php");
        ?>
    </footer>
    
</body>

</html>

