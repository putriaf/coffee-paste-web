<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/style_register.css">
    <title>Register</title>

  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <center><h1>Sign Up</h1></center>
                <form action="register" method="post">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Nama</label>
                        <input type="text" id="name" name="name" class="form-control" id="name" style="background-color: #fce2b1;" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" id="email" style="background-color: #fce2b1;" placeholder="Masukkan Email">
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" id="password" style="background-color: #fce2b1;" placeholder="Masukkan Password">
                    </div>
                    <div class="mb-3">
                        <label for="ConfPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirm" id ="password_confirm" class="form-control" id="ConfPassword" style="background-color: #fce2b1;" placeholder="Masukkan Password">
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: center;">Sign Up</button> <br><br>
                    <center><a href="login">Already have account! <br> Back to Login </a><center>
                </form>
            </div>
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>