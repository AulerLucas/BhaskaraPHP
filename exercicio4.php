
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> exercicio1 </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
   
    </head>
    <body>
    <?php
        $a =$_POST['a'];
        $b =$_POST['b'];
        $c = $_POST['c'];

        $delta = pow($b,2)-4*$a*$c;

        if($delta >=0 && $a !=0 ){
            $x1 = (-$b+sqrt($delta))/(2*$a);
            $x2 = (-$b-sqrt($delta))/(2*$b);
            echo '<div class="result">Resultado XI: '.$x1.'<br> Resultado XII: '.$x2.'</div>';
            }else{
                echo '<div class="result">Resultado: Impossivel resolver </div>';
            }               
?>
    </body>
</html>
