<?php
echo "True " . true;
echo "<br>";
echo "False " . false;
echo "<br>" . is_bool(true);
echo "<br>";
echo " <br> " . var_dump((bool) 0); /*There only that will return false (zero 0)*/ 
echo " <br> " . var_dump((bool) 1);
echo " <br> " . var_dump((bool) -1);
echo " <br> " . var_dump((bool) 0.0);
echo " <br> " . var_dump((bool) "");
echo " <br> " . var_dump((bool) "0");
echo " <br> " . var_dump((bool) "00");
echo " <br> " . var_dump(!!"false");


?>