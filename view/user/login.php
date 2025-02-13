<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user form</title>
    <style>
        form{
            width: 500px; 
            margin: auto; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center;
        }
        form > input{
            width: 100%;
            padding: 20px 25px;
            outline-style: none;
            border-radius: 999999px;
            border: 1px solid #bbb;
        }
        form > button{
            padding: 8px 20px;
            border: 1px solid #bbb;
            background-color: #bbb;
            color: snow;
            border-radius: 6px;
            cursor: pointer;
            transition: all 300ms;
        }
        form > button:hover{
            background-color: red;
            padding: 16px 40px;
            transform: translateY(-7px);
        }
    </style>
</head>
<body>
    <form action="http://localhost/router_MVC/view/user/loginUser" method="post">
        <input type="text" name="userName" placeholder="user name ...">
        <br>
        <input type="password" name="password" placeholder="password ...">
        <br> 
        <button type="submit">submit</button>
    </form>
</body>
</html>