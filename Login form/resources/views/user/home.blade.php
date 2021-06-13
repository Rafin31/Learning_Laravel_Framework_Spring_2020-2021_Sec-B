<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div class="header_tag">
        <h1>Welcome {{ session()->get( 'user_name' ) }} {{ session()->get( 'id' ) }}</h1>
    </div>
    <div class="links">
        <a href="login/logout">Logout</a>
        <a href="login/userlist">Show User list</a>
        <a href="login/create_user">Add user</a>
    </div>
</body>
</html>