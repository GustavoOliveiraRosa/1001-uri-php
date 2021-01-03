<?php

$A = 0;
$B = 0;
$X = 0;

if (isset($_POST['A']) && isset($_POST['B'])){
    $X = $_POST['A'] + $_POST['B'];
}

?>

<html>

<head>
    <title>1001 - URI </title>
</head>


<body>

    <form method="POST">
        <h1>Calculadores de 2 variáveis</h1>
        <h4>A = <input type="number" value=<?php echo $A;?> name="A" /> </h4>
        <h4>B = <input type="number" value =<?php echo $B;?> name="B" /> </h4>
        <h4>Resultado = <?php echo $X;?> </h4>
        <input type="submit"/>
    </form>


</body>



</html>