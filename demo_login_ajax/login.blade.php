<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" id="login">

        username: <input type="text" name="username" id="username">
        password: <input type="password" name="password" id="password">
        <input type="submit" value="login">
    </form>
    <div id="response" style="color:red;"></div>

    <script>
    $(document).ready(function(){

        $("#login").submit(function(){
            console.log("submit") ;
            var username = $('#username').val(); 
            var password = $('#password').val();
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url:"{{route('login')}}",
                method:"POST", 
                data:{username:username, password: password, _token:_token},
                success:function(data){ 
                    result = JSON.parse(data).result;
                    console.log(result);
                    if (result == 'correct') {
                        console.log("why?")    ;
                        window.location="./welcome"; //dieu phoi toi homepage nhung chua co dung tam welcome:v
                    }
                    else $('#response').html(result);
                }
            });
            return false;
        });
    });

    </script>


</body>
</html>