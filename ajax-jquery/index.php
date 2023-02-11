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
    <h1>Ajax- jQuery</h1>
    <div id="successMessage"></div>
    <div id="errorMessage"></div>
    <script>
        $(document).ready(function () {
            $.ajax({
                url: 'demo.php',
                type: 'GET',
                dataType:'text',
                cache: false,
                success: successFun,
                error: errorFun,
                complete: function (xhr, Status) {
                    console.log(xhr); //{readyState: 4, getResponseHeader: ƒ, getAllResponseHeaders: ƒ, setRequestHeader: ƒ, overrideMimeType: ƒ, …}
                    console.log(Status); //error
                },
                beforeSend: function () {
                   console.log("loading........");
                }
            });
            function successFun (res) {
                console.log('success');
                console.log(res); //it retruns demo.php data. 
                //means it will take back response of data.
                $("#successMessage").append(res);
            }
            function errorFun (xhr, status, strErr) {
                console.log('error'); //error
                console.log(xhr); // {readyState: 4, getResponseHeader: ƒ, getAllResponseHeaders: ƒ, setRequestHeader: ƒ, overrideMimeType: ƒ, …}
                console.log(status); //error
                console.log(strErr); // Not Found
                $("#errorMessage").append(strErr);
            }
        });
    </script>
</body>
</html>