<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/styles/style_login.css">
        <title>Welcome Page - CoffeePaste</title>
        <script>
            function greeting() {
            alert("Welcome to CoffePaste Official Website")
            }
        </script>
    </head>
    <body class="bg">
    <div class="title">
    <h1>Welcome to CoffeePaste!</h1>
    </div>
    <div class="welcome">
    </div>
    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-5">
                <center><h3>Login</h3></center>
                <?php if (session()->get('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?=  
                    session()->get('success');
                        
                    ?>

                </div>
                <?php endif; ?>
                <form action="login" method="post">
                    <div class="mb-2">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" id="email" value="<?= set_value('email')?>">
                    </div>
                    <div class="mb-2">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-2">
                        <p><label for="remember"><input type="checkbox" name="remember" value="true" id="setcookie"> Remember Me</label></p>
                    </div>
                    <?php if (isset($validation)): ?>
                    <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors()?>
                    </div>
                    </div>
                    <?php endif; ?>
                    <button type="submit" onclick="greeting()" class="btn btn-primary" >Login</button> <br><br>
                    <center><a href="register">Don't have an account ? Register Here! </a><center>
                </form>
            </div>
             
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>