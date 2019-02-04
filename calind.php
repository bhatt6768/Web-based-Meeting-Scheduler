<?php
//Include the event calendar functions file
include('funcal.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP Event Calendar by CodexWorld</title>
    <!-- Include the stylesheet -->
    <link type="text/css" rel="stylesheet" href="stylec.css"/>
    <!-- Include the jQuery library -->
    <script src="jquery.min.js"></script>
</head>
<body>
    <!-- Display event calendar -->
    <div id="calendar_div">
        <?php echo getCalender(); ?>
    </div>
</body>
</html>