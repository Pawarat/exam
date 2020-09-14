<?php
function fact($num)
{
    $n = 1;
    for ($i = $num; $i >= 1; $i--) {
        $n *= $i;
    }
    return "$n";
}
echo fact(5);

function number($num2)
{
    if ($num2 % 2 == 0) {
        return "not number\n";
    } else {
        for ($i = 3; $i <= $num2 - 1; $i + 2) {
            if ($num2 % $i == 0) {
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

function numMax($num3 = array(-3, -5, -2, -9, -1))
{
    $nMax = $num3[0];
    $tailArray = array_slice($num3, 1);
    foreach ($tailArray as $value) {
        if ($value > $nMax) {
            $nMax = $value;
        }
        # code...
    }
    return $nMax;
}

function numMax2($num3)
{
    $nMax = $num3[0];
    for ($i = 1; $i < count($num3); $i++) {
        if ($num3[$i] > $nMax) {
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
    <?php echo numMax2(array(-3, -5, -2, -9, -1, 2)); ?>
</p>

<?php
function numMin($numM1, $numM2){
    $n = $numM1;
    $ans = 1;
    if($numM2 < $numM1){
        $numM2 = $n;
    }
    for ($i=1; $i <= $n; $i++) { 
        // if($numM1%$i==0 && $numM2%$i==0){ 
        //     if($i > $ans){
        //         $ans = $i;
        //     }
        //     return $ans;
        // }
        if($numM1%$i==0){
            if($numM2%$i==0){
                if($i > $ans){
                    $ans = $i;
                    return $ans;
                }
            }
        }
    }
}
echo numMin(6,8);
echo numMin(9,15);
?>

<?php
    function LeastCommonMultiple($num1){
        $i=0;
        $new=1;
        while($i>=0){
            if(){
            
            }
            $i++;
        }
        
    }
    echo LeastCommonMultiple(6,4,9);
    // echo LeastCommonMultiple(5,8,4);
?>