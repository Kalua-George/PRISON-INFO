<php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="STYLES/applications.css">
    <title>staff portal</title>
</head>
<body>
    <header>
        <img src="" alt="">
        <h1>PIMS</h1>
    </header>

   <div class="user">
    <div>
        <h3> ENTER LOG IN CREDENTIALS TO LOG IN</h3>
    </div>
    <div class="login">
        <form action="logs.php" method ="POST">
           <div class="credentials">
            <label for="username">username</label>
            <input type="text" id="username" name="username" pattern="{A-Z}">
           </div>
           <div class="credentials">
            <label for="pass">Password</label>
            <input type="text" id="pass" name="password">
           </div>
          <input type="submit" value="Log In" class="click" name="login">
        </form>
    </div>

    <a href="https://localhost/PRISON-INFO/PRISON-INFO/admin/admindashboard.php">ADMIN </a>
   </div> 
</body>
</html>
?>