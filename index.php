<?php
    function fact($num){
        $n = 1;
        for($i = $num; $i >= 1; $i--){
            $n *= $i;
        }
        return "$n";
    }
    echo fact(5);

    function number($num2){
        if($num2 % 2 == 0){
            return "not number\n";
        } else {
            for($i = 3; $i <= $num2-1; $i+2){
                if($num2 % $i == 0){
                    return "not number\n";
                break;
                } else {
                    return "is number\n";
                break;
                }
            }
        }
    }
    echo number(44);
    echo number(47);

    function numMax($num3 = array(-3,-5,-2,-9,-1)){
        $nMax = $num3[0];
        $tailArray = array_slice($num3,1);
        foreach ($tailArray as $value) {
            if($value > $nMax){
                $nMax = $value;
            }
            # code...
        }
        return $nMax;
    }

    function numMax2($num3){
        $nMax = $num3[0];
        for ($i=1; $i < count($num3) ; $i++) { 
            if($num3[$i] > $nMax){
                $nMax = $num3[$i];
            }
            # code...
        }
        return $nMax;
    }
?>

<p>
<?php echo numMax(); ?>
</p>
<p>
<?php echo numMax2(array(-3,-5,-2,-9,-1,2)); ?>
</p>

<?php

?>

