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
   <div id="box"></div>
   <script>
     let data = {id:1 , name:"Dravainanshu Mishra", course:"MCA"}
     $(document).ready(function() {
        $.post("request.php", data, function(res){
          $("#box").text(res);
         console.log(res);
       }).fail(function(res){
          console.log("failed");
       }).done(function(res){
          console.log("success");
       });
     });
   </script> 
</body>
</html>