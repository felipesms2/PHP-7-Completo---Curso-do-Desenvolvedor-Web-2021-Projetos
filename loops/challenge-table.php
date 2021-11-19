<div class="titulo">
        Desafio Tabela
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

            $vector = [
                ['01', '02', '03', '04', '05'],
                ['06', '07', '08', '09', '10'],
                ['11', '12', '13', '14', '15'],
                ['16', '17', '18', '19', '20'],
            ];
            
            foreach($vector as $row) {
                foreach($row as $value) {
                    echo "$value ";
                }
                echo "<br>";
            }
            ?>
            
            <table>
                <?php 
                    foreach($vector as $row) {
                        echo '<tr>';
                        foreach($row as $value) {
                            echo "<td>$value</td>";
                        }
                        echo '</tr>';
                    }
                ?>
            </table>
            
            <table>
                <?php 
                    foreach($vector as $index => $row) {
                        $style = $index % 2 === 0 ? 
                            'background-color: lightblue;' : '';
                        echo "<tr style='{$style}'>";
                        foreach($row as $value) {
                            echo "<td>$value</td>";
                        }
                        echo '</tr>';
                    }
                ?>
            </table>
            
            <style>
                table {
                    border: 1px solid #444;
                    border-collapse: collapse;
                    margin: 20px 0px;
                }
            
                table tr {
                    border: 1px solid #444;
                }
            
                table td {
                    padding: 10px 20px;
                }
            </style>


        