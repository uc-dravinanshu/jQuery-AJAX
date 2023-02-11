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
    <button id="loadButton" type="button">LoadData</button>
    <div id="box"></div>
   <script>
       $(document).ready(function(){
            $("#loadButton").click(function(){
                $("#box").load("demos.html", "data", function(res, status, xhr){
                // console.log(res); //Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea delectus magnam consequuntur?
                // console.log(status); //success
                // console.log(xhr);  //{readyState: 4, getResponseHeader: ƒ, getAllResponseHeaders: ƒ, setRequestHeader: ƒ, overrideMimeType: ƒ, …}
                    if(status=="success") {
                        console.log("fie loaded");
                    }  
                    if(status=="error"){
                        console.log("Error", xhr.status, xhr.statusText);
                    }   
               });
            });
        });
   </script>
</body>
</html>