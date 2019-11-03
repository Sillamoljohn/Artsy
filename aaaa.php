<?php include 'dbcon.php'; //Connecting to database ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        function timer($date, $id){
            date_default_timezone_set("Europe/London"); //changing time to london(uk) time.
            $endtime = strtotime($date); //converting the string from database into time form
            $idtemp = $id; //Returns the current time
            ?>
            <script>
            (function(){
                //convert server time to milliseconds 
                var server_current = <?php echo time(); ?> * 1000,
                    server_end_time = <?php echo $endtime; ?> * 1000,
                    client_current_time = new Date().getTime(),
                    finish_time = server_end_time - server_current + client_current_time, //server end time - server current time + client current time
                    timer,
                    uniqueID = '<?php echo json_encode($idtemp); ?>';

                function countdown(){
                    var now = new Date();
                    var left = finish_time - now;

                    //Following code convert the remaining milliseconds into hours, minutes and days.
                    //milliseconds conversion
                    //1000-second 60,000-minute 
                    //3,600,000-hour  86,400,400-hour
                    var hour = Math.floor( (left % 86000000 ) / 3600000 );
                    var minute = Math.floor( (left % 3600000) / 60000 );
                    var second = Math.floor( (left % 60000) / 1000 );

                    document.getElementById(uniqueID).innerHTML = "Hours:"+hour+" Minutes:"+minute+" Seconds:"+second;
                }
                timer = setInterval(countdown, 1000);
            })();
            </script>
        <?php } ?>
    </head>

    <body>
        <h3>Auction House </h3>
        <?php
        $ids = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine"); //array used to create unique id for our divs
        $i = 0;
        $result = mysqli_query($con,"SELECT * FROM `auctionart`"); //select table from database
        while($row = mysqli_fetch_array($result)){
            $timeleft = $row['sys_date'];
            $temp = $ids[$i++];
            timer($timeleft, $temp);
            echo 'Player Name: '.$row['art_id'].'<div id='.json_encode($temp).'>loading...</div><br />';
        }
        ?>
    </body>
</html>