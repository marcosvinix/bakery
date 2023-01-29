<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;800&display=swap');

        *{
            margin: 0;
            padding: 0;
            font-family: 'Sora', sans-serif;
            user-select: none;

        }

        body{
            background-image: url('assets/images/cin.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            max-width: 100%;
            height: 100vh;
        }

        .title{
            color: white;
            margin-top: 8vh;
            font-size: 7vh;
            margin-left: 25vh;
        }

        .container-main{
            background-color:blue;
            display: flex;
        }

        .title-login{
            font-size: 8vh;
            color: #4E1784;
        }
        .content{
            margin-top: 7vh;
            margin-left: 5vh;
        }

        .login-input{
            border-radius: 4vh;
            border: solid 4px #F5ECFF;
            max-width: 90vh;
            width: 60vh;
            height: 6vh;
            margin-bottom: 3vh;
            padding: 2vh;
            font-size: 2vh;
        }

        .login-text{
            font-size: 3vh;
            color: #4E1784;
        }

        .content-input{
            margin-top: 5vh;
        }

        .btn-login{
            background-color: #4E1784;
            border: solid 1px #4E1784;
            width: 20vh;
            height: 8vh;
            font-size: 4vh;
            align-items: center;
            margin-left: 21vh;
            margin-top: 10vh;
            color: white;
        }
        .btn-login:hover{
            background-color: #4E1784;
            color: white;
        }

        .none{
            visibility: hidden;
        }
    </style>


        <div class="container-fluid">
            <div class="row-12 d-flex">
                <div class="col-xl-6  col-lg-6">
                    <h1 class="title"><span><</span>c/in<span>></span></h1>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="content">
                        <div class="title-login">
                            <h1 class="title-login">Login</h1>
                        </div>
                        <div class="content-input ">
                            <form class="d-flex flex-column"  action="/p/login/process" method="post">
                                <label class="login-text" for="username">Nome de usuário</label>
                                <input class="login-input" type="text" name="username"  autocomplete="off">
                                <label class="login-text" for="password">Senha</label>
                                <input class="login-input" type="password" name="password" autocomplete="off">
                                <div class="pass-inc none">
                                    <p style="color: #ff4e4e;">Usuário e/ou senha incorreto</p>
                                </div>
                                <div class="content-button">
                                    <input class="btn btn-login" type="submit" value="Entrar">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>   
        </div>


    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>