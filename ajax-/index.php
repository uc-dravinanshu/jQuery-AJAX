<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="box"></div>
     <script>
     $(document).ready(function(){
        function getDate() {
        $.ajax({
            url: "request.php",
            type: "POST",
            data: "action=getDate",
            success: function(response) {
                console.log(response);
             $(".box").text(response);
            }, 
            error: function () {
                console.log("error");
            }
        });
    }
    setInterval(getDate,1000);
     });
     </script>
</body>
</html>