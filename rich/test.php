<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            //第一題 
            $season = 5;
            if ($season >= 10) {
                print "現在是" . $season . "月，是冬季。<br>";
            }elseif ($season >= 7){
                print "現在是" . $season . "月，是秋季。<br>";
            }elseif ($season >= 4){
                print "現在是" . $season . "月，是夏季。<br>";
            }else{
                print "現在是" . $season . "月，是春季。<br>";
            }
            
            //第二題
            for ($i=2;$i<=9;$i++){
               for ($j=1;$j<=9;$j++){
                   print $i . "*" . $j . "=" . $i*$j . "<br>"; 
               }
               print "<hr>";
            
            }

            //第三題
            $k = 2;
            while ($k <= 9){
               $l = 1;
               while($l <= 9){
                   print $k . "*" . $l . "=" . $k*$l . "<br>";
                   $l += 1;
               }
               print "<hr>";
               $k += 1;
            }

            //第四題
            $k = 2;
            do{
              $l = 1;
              do{
                  print $k . "*" . $l . "=" . $k*$l . "<br>";
                  $l += 1;
              }while($l <= 9);
              print "<hr>";
              $k += 1;
            }while ($k <= 9);

            //第五題
            print "<table border=1>";
            for ($i=1;$i<=9;$i++){
               print "<tr>";
               for ($j=1;$j<=9;$j++){
                   print "<td>" . $i . "x" . $j . "=" . $i*$j . "</td>"; 
               }
               
            }
            print "</tr></table>";

            //第六題，改寫成if else
            $grade = 'B';
            if ($grade == 'A'){
                print "學生成績超過 80";
            }elseif ($grade == 'B'){
                print "學生成績超過 70,低於 80";
            }elseif ($grade == 'C'){
                print "學生成績超過 60,低於 70";
            }else{
                print "學生成績不及格";
            }

            //第七題，改寫成if else
            print "<hr/>";
            $hour = 22;
            
            if ($hour >= 12) {
              print "目前時間為: PM" . ($hour-12); 
            }else{
              print "目前時間為: AM" . $hour;
            }
            // 條件敘述運算子
            /*
            $str = ($hour >= 12) ? " PM" : " AM"; 
            $hour = ($hour >= 12) ? $hour-12 : $hour; 
            print "<br>目前時間為: " . $hour . $str;
            */
        ?>
    </body>
</html>