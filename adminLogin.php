<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="AdminLogin.css">
    <title>Admin Login</title>
</head>
<body>
    <div class="login-form">
        <h1> Admin Login </h1>
        <div class="txt">
            <form action="adminPage.html" method="POST">
               
                <input type="Id" placeholder="admin_id" required="" name="Admin_id">
        </div>
       
        <div class="txt">
               
                <input type="password" placeholder="admin_password" required="" name="Password">
        </div>
            
            <button class="btn" name="btn"> Login </button>
         
        </form>
    </div>
    <input type="button" value="Go back!" onclick="history.back()">
</body>
</html>