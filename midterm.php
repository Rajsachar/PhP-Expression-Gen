<?php
randomGen();
function randomGen(){
    $x = rand(-5,5);
    $compare = array("<", ">","<=", ">=", "==", "!=");
    $c = rand(0,5);
    $compareValue = rand(-20, 20);
    $compareValueIF = rand(-20, 20);
    $compareValueELSE = rand(-20, 20);

    echo "X = $x";
    echo nl2br("\n if (x  $compare[$c]  + $compareValue) {");
    echo nl2br("\n x +=  $compareValueIF; + \n }");
    echo nl2br("\n else {");
    echo nl2br("\n x +=  $compareValueELSE ;\n } \n");    
    
    evaluate_if_else($x,$compare,$compareValue,$c,$compareValueIF,$compareValueELSE);
}

function evaluate_if_else($x,$compare,$compareValue,$c,$compareValueIF,$compareValueELSE){
        if ($compare[$c] == '<'){
            if($x < $compareValue){
                $x += $compareValueIF;
                echo " After executing this piece of code, the value of x is $x";
                return $x;
            }       
        }
         if ($compare[$c] == '>'){
            if($x > $compareValue){
                $x += $compareValueIF;
                echo " After executing this piece of code, the value of x is $x";
                return $x;
            }
        }
        if ($compare[$c] == '<='){
            if($x <= $compareValue){
                $x += $compareValueIF;
                echo " After executing this piece of code, the value of x is $x";
                return $x;}}
         if ($compare[$c] == '>='){
            if($x >= $compareValue){
                $x += $compareValueIF;
                echo " After executing this piece of code, the value of x is $x";
                return $x;
            }
        }
       if ($compare[$c] == '=='){
            if($x == $compareValue){
                $x += $compareValueIF;
                echo " After executing this piece of code, the value of x is $x";
                return $x;
            }
        }
        if ($compare[$c] == '!='){
            if($x != $compareValue){
                $x += $compareValueIF;
                echo "After executing this piece of code, the value of x is $x";
                return $x;
        }
    }
        else {
        $x += $compareValueELSE;
        echo " After executing this piece of code, the value of x is $x";
        return $x;}
}

?>