<?php
/**
* Created by: Benazir Shoro
* Date: 3/14/2015
* Time: 17:01 PM
*/
?>
<html>
<head>
    <title>Upload a file using ajax and jquery</title>

    <!-- include Recent Jquery-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>
<div id="msg"></div>
<form id="upload" method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>

<script type="text/javascript">
    $("#upload").submit(function(event){
       event.preventDefault();
        $.ajax({
            url: "upload.php",
            data: new formDATA()
        }).done(function(msg){
            $("#msg").innerHTML(msg);
        });

    });
</script>

</body>
</html>
