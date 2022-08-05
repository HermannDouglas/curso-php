<div class="titulo">Conversões PHP</div>

<?php
    echo is_int(PHP_INT_MAX);

    // int para float
    echo "<p>int para float</p>";
    var_dump(PHP_INT_MAX+1);
    echo "<br>";
    var_dump(1 + 1.0);
    echo "<br>";
    var_dump((float) 3);
    echo "<br>";
    
    // float para int
    echo "<p>float para int</p>";
    var_dump((int) 6.8);
    echo "<br>";
    var_dump(intval(2.8, 10));
    echo "<br>";
    var_dump(intval("1001101010", 2));
    echo "<br>";
    var_dump((int) round(2.8));
    echo "<br>";
    // Operações com string
    echo "<p>String</p>";
    var_dump(3 + "2");
    echo "<br>";
    var_dump("3" + 2);    
    echo "<br>";
    var_dump("3" . 2);
    echo "<br>";
    is_string("3" . 2);
    echo "<br>";
    is_string("3" + 2); // Em branco por ser falso
    echo "<br>";
    // var_dump(1 + "cinco");
    // echo "<br>";
    // var_dump(1 + "5 cinco");
    // var_dump(1 + "cinco 5");
    // var_dump(1 + "2+5");
    var_dump(1 +"3.2");
    echo "<br>";
    var_dump(1 + "-3.2e2");
    echo "<br>";
    var_dump((int) "10.5");
    echo "<br>";
    var_dump((float) "10.5");

?>