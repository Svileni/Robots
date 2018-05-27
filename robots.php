<html>
    
<?php

$start1 = 5;
$start2 = 10;
$robot1 = $start1;
$robot2 = $start2;

echo "Pocetna pozicija prvog robota " . $robot1 . '<br/>';
echo "Pocetna pozicija drugog robota " . $robot2 . '<br/><br/>';   
    
function position() {
    echo "Robot jedan je na poziciji " . $GLOBALS['robot1'] . "<br/>";
    echo "Robot dva je na poziciji " . $GLOBALS['robot2'] . "<br/><br/>";
}


while ($GLOBALS['robot1'] != $GLOBALS['start2'] and $GLOBALS['robot2'] != $GLOBALS['start1']) {
    $GLOBALS['robot1'] = $GLOBALS['robot1'] - 1;
    $GLOBALS['robot2'] = $GLOBALS['robot2'] - 1;
    
    position();
    
}

if ($GLOBALS['robot1'] == $GLOBALS['start2']) {
    while ($GLOBALS['robot1'] != $GLOBALS['robot2']){
        $GLOBALS['robot1'] = $GLOBALS['robot1'] - 2;
        $GLOBALS['robot2'] = $GLOBALS['robot2'] - 1; 
        
        position();
    }
}
else {
    while ($GLOBALS['robot1'] != $GLOBALS['robot2']){
        $GLOBALS['robot2'] = $GLOBALS['robot2'] - 2;
        $GLOBALS['robot1'] = $GLOBALS['robot1'] - 1;
        
        position();
    }
}

echo "Susret";
?>
    
</html>