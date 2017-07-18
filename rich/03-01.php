<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
            $num1 = 5;
            if ($num1 > 0)
                print "$num1 is positive number <br>";

            $num2 = -5;
            if ($num2 >= 0){
                print "$num2 is positive number <br>";
            }else{
                print "$num2 is negative number <br>";
            }

            $score = 85;
            if ($score >= 80 && $score < 90){
                print "Level B <br>";
            }else if ($score >= 90 && $score <= 100 ){
                print "Level A <br>";
            }else{
                print "Level C <br>";
            }


        ?>
    </body>
</html>