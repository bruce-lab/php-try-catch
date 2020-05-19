<?php
    if(!empty($_POST)){
        $username = $_POST['username'];// sterilize in production mode
        $password = $_POST['password'];// sterilize in production mode

        /*
        // throw an exception
        if(empty($username) || empty($password)){
            throw new \Exception('Invalid Username or Password.');
        }
        */

        
    }
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    type="text/css" />
    
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/gh/jquery/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    

</head>
<body>
    <div class="container">
        <form method="post" action="index.php">
            <h1>
                PHP try catch example
            </h1>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" />
            </div>
            <div class="form-group">
                <label for="username">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
            </div>
            <div class="form-group">
                <div class="alert alert-danger">
                    <?php
                        try{
                            if(empty($username) || empty($password)){
                                throw new \Exception('Invalid Username or Password.');
                            }
                        }catch(\Exception $e){
                            echo $e->getMessage();
                        }
                    ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>