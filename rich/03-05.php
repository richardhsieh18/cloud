<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
            $x = 10;
            $intSum = 0;

            //sum(1+2+3+4)
            for ($i=1;$i<=$x;$i++){
                print "number is:" . $i . "<br>";
                $intSum +=$i;

            }
            print "Sum is:" . $intSum . "<br><hr>";


            //while
            $intSum = 0;
            $i = 1;
            while($i <= $x){
                print "number is:" . $i . "<br>";
                $intSum += $i;
                $i++;

            }
            print "Sum is:" . $intSum . "<br><hr>";

            //do while
            $intSum = 0;
            $i = 1;
            do {
                print "number is:" . $i . "<br>";
                $intSum += $i;
                $i++;

            }while($i <= $x);
            print "Sum is:" . $intSum . "<br><hr>";
        ?>
    </body>
</html>