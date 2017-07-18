<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
        print "<table border='1'";
            for($i=1;$i<5;$i++){
                for($j=1;$j<5;$j++){
                    print "<tr><td>";
                    print "i=" . $i . " " . "j=" . $j . " " . "ixj=" . $i*$j ."<br>";
                    print "</td></tr>";
                }

            }
        print "</table>";
        ?>
    </body>
</html>