<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project MN</title>
</head>
<body>
     <!--Name-->
     <label>Name: </label>
     <input type="text" name="name" value="{{ $users->name }}">
     <br><br>

     <!--Address-->
     <label>Address: </label>
     <input type="text" name="address" value="{{ $users->address }}">
     <br><br>

     <!--City-->
     <label>City: </label>
     <input type="text" name="city" value="{{ $users->city }}">
     <br><br>

    <!--State-->
     <label>State: </label>
     <input type="text" name="state" value="{{ $users->state }}">
     <br><br>
</body>
</html>