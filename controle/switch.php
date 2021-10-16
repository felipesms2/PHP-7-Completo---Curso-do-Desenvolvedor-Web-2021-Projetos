    <div class="titulo">
        Switch Case
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->dumpAndBroke($status);
            $categoria;
            //var_dump($categoria);
            //die();
            $categoria =  "popular";

            switch ($categoria) 
            {
                case 'Luxo':
                    $preco = "100k+";
                    break;
                case "SUV":
                    $preco = "50k+";
                    break;
                case 'popular':
                    $preco = "30k+";
                    break;
                
                default:
                    $preco;    
                break;
            }
            $display->displayAndBroke("Categoria $categoria");
            $display->displayAndBroke("Preço $preco");
           
            
        ?> 