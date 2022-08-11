<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project MN</title>
</head>
<body>
    <!--Form-->
    <form action="/create-users" method="POST">
        @csrf  

        <!--Name-->
        <label>Name: </label>
        <input type="text" name="name">
        <br><br>
         
        
        <!--Address-->
        <label>Address: </label>
        <input type="text" name="address">
        <br><br>
        
        <!--Address-->
        <label>City: </label>
        <input type="text" name="city">
        <br><br>
        
        <!--Address-->  
        <label>State: </label>
        <input type="text" name="state">
        <br><br>
             
        <button>Save</button>
        
    </form>
</body>
</html>