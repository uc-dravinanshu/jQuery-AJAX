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
    <div class="container">
        <button type="button" onclick="sendData()">LoadData</button>
        <div id="LoadData"></div>
    </div>
    <script>
         function sendData () {
            let request =new XMLHttpRequest();
         request.open("GET", "demo.txt", true);

           request.onreadystatechange = function() {
             if (this.readyState == 4)
                if(this.status==200) {
                    console.log(this.responseText);
                    document.getElementById("LoadData").innerHTML = this.responseText;
                } else if(this.status == 404) {
                    console.log("file not found");
                   //document.getElementById("LoadData").innerHTML = this.responseText;
                   document.getElementById("LoadData").innerHTML = "File not Found";
                } 
             }
         request.send();    
         } 
    </script>
</body>
</html>