<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null;}
    </script>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url('./images/login.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .form-signin {
            width: 100%;
            max-width: 620px;
            padding: 15px;
            margin: 0 auto;
        }

        .center {
            text-align: center;
            color: white;
        }

        .transbox {

          background-color: aqua;
          background-color: rgba(0, 0, 0, .25);
          color: white;
        }
        body {
            overflow: hidden;
        }

    </style>
</head>
  <body>
  <div class="row col-lg-3 shadow-lg transbox">
    <form class="form-signin" action="cek_login.php" method="POST">
        <h4 class="center">Login</h4>
        <hr>
        <div class="mb-4">
        <div class="alert alert-dark" role="alert"> Silahkan masukan username dan password untuk login</div></div>
        <div class="mb-4">
        <input type="text" name="username" placeholder="username" class="form-control">
    </div>
    <div class="mb-3">
    <input type="password" name="password" placeholder="password" class="form-control">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input"
        id="exampleCheck1"><label class="form-check-label center"
        for="exampleCheck1">Ingat Saya</label>
    </div>
        <button type="submit" name="login" class="btn btn-secondary">Masuk Sistem</button>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
