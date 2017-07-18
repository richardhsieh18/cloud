<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 

            date_default_timezone_set('Asia/Taipei');
            $hour = date("H");
            //print $hour;

            //$hour = 9;
            $str = ($hour >= 12) ? "PM":"AM";
            $hour = ($hour >= 12) ? $hour-12 : $hour;
            print "<br> Now time is:" . $hour . $str;


        ?>
    </body>
</html>