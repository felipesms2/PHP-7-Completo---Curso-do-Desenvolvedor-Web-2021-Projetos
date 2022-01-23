<div class="titulo">
        Try Catch
    </div>
        <?php
            include("customClass.php");
            $display = new excercise();
            //$display->displayAndBroke($status);
            //$display->dumpAndBroke($status);

        try
            {
                echo intdiv(7,0);
            }
        catch(Error $e)
            {
                $display->displayAndBroke("An error has been ocurred");
            }
        try
            {
                throw new Exception("Another stranger error");
                echo intdiv(7,0);
            }
        catch(DivisionByZeroError $e)
            {
                $display->displayAndBroke("Division by zero");
            }
        catch(Throwable $e)
            {
                $display->displayAndBroke("Error has been found " . $e->getMessage());
            }
        finally{
            $display->displayAndBroke("Finally executing a statment");
        }
        