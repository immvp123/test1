<!DOCTYPE html>
<?php
    function showResult($num){
        if($num==0){
            return 1;
        }else{
            return $num*showResult($num-1);
        }
    }
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "n!的數列".showresult(5);
        ?>
    </body>
</html>
