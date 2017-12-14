<!DOCTYPE html>
<html>
<head>
    <title>numbrid</title>
</head>
<body>
<?php
for ($arv = 1; $arv <= 10; $arv++){
    if ($arv % 2 == 0){
        $varv = 'blue';
    }
    else {
        $varv = 'red';
    }
echo '<font color="'.$varv.'">'.$arv.'</font><br />';
}


?>
</body>
</html>