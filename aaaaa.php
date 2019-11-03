<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
<h3>Auction House </h3>

<table id="table-auctions" class="table table-bordered table-hover table-striped">
    <tr>
        <th>Name</th>
        <th>Expiring</th>
    </tr>

</table>

</div> <!-- /container -->

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    $(function() {
        var times = [
            {
                'id': '1',
                'name': 'Messi',
                'end': new Date('July 31, 2018 13:00:00'),
            },
            {
                'id': '2',
                'name': 'Ronaldo',
                'end': new Date('August 1, 2018 10:00:00'),
            },
            {
                'id': '3',
                'player': 'JJ',
                'end': new Date('August 7, 2018 13:00:00'),
            },
        ];

        // Initialize the table values
        $.each(times, function( key, value ) {
            $('#table-auctions').append('<tr><td>'+value.name+'</td><td><span id="player-'+value.id+'-expiration" class="label label-primary">Loading...</span></td></tr>');
        });


        function countdown()
        {
            var now = new Date();
            console.log('updating time');

            $.each(times, function( key, value ) {
                var left = value.end - now;
                var days = Math.floor( left / (1000 * 60 * 60 * 24) );
                var hours = Math.floor( (left % (1000 * 60 * 60 * 24) ) / (1000 * 60 * 60) );
                var minutes = Math.floor( (left % (1000 * 60 * 60)) / (1000 * 60) );
                var seconds = Math.floor( (left % (1000 * 60)) / 1000 );

                displayTime = '';
                if (days > 0) {
                    displayTime = "Days: " + days;
                }
                displayTime = displayTime + " Hours: " + hours + " Minutes: " + minutes + " Seconds: " + seconds;

                $('#player-'+value.id+'-expiration').text(displayTime)
            });

        }
        timer = setInterval(countdown, 1000);        

    });
</script>
</body>
</html>