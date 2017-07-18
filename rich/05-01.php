<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
            $grades = array(78,55,99,30);

            $grades[1] = 100;
            $total = 0;

            for ($i=0;$i<count($grades);$i++){
                print "$i=>$grades[$i] ";
                $total += $grades[$i];

            }
            print "<br>Total is: $total <br>";
            print "<hr>";

            $weekArr[] = "SUN";
            $weekArr[] = "MON";
            $weekArr[] = "TUE";
            $weekArr[] = "WED";
            $weekArr[] = "THU";
            $weekArr[] = "FRI";
            $weekArr[] = "SAT";
            foreach($weekArr as $key=>$value){
                print "$value=>$weekArr[$key] <br>";
                $total += $weekArr[$key];


            }
        ?>
    </body>
</html>