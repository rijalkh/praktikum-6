<html>
    <head>
        <title>Form Login</title>
        <style>
            form{
                height:400px;
                width:400px;
                display:flex;
                flex-direction:column;
            }

            #btn{
                padding:5px;
                margin-top:5px;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="afterLogin.php" >
            <label>Nama</label>
            <input type="text" name="nama"id="btn">

            <label>Email</label>
            <input type="email" name="email"id="btn">

            <input type="submit" name="submit" value="Login" id="btn">
            <input type="reset" name="reset" value="Reset" id="btn">
        </form>
    </body>
</html>
