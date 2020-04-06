<!DOCTYPE html>
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
            if(isset($_POST["prefer"])) {
                $prefer = $_POST["prefer"];
                $menu = array('Tuna Casserole', 'Tuna Sandwich', 'Tuna Pie', 'Grilled Tuna', 'Tuna Surprise');
                if (count($prefer) == 0 ) {
                    print 'Oh no! Please pick something as your favorite! ';
                } else {
                    print '<br>Your selections were <ul>';
                    foreach ($prefer as $item) {
                        print "<li>$menu[$item]</li>";
                    }
                    print '</ul>';
                }
            } else {
                print 'Oh no! Please pick something as your favorite! ';
            }
        ?>
    </body>
</html>
