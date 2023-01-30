<style>
    
        body{
            background-image: url('assets/images/background-user.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            max-width: 100%;
            height: 100vh;
        }
        .title-login{
            font-size: 8vh;
            color: #4E1784;
        }

        .cad-funcionarios{
            margin-top: 10vh;
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

        .title-cadastro{
            font-size: 7vh;
            color: #4E1784;
            margin-bottom: 4vh;
        }

        .btn-login{
            background-color: #4E1784;
            border: solid 1px #4E1784;
            width: 30vh;
            height: 8vh;
            font-size: 4vh;
            align-items: center;
            margin-left: 14vh;
            margin-top: 4vh;
            color: white;
        }
        .btn-login:hover{
            background-color: #4E1784;
            color: white;
        }
</style>


<div class="container cad-funcionarios">
    <h1 class="title-cadastro">Criar uma conta</h1>

    <div class="cadastro">
        <form class="d-flex flex-column" action="./user/add_user" method="post">
            <label class="login-text" for="name-usuer">Nome do funcionário</label>
            <input class="login-input" type="text" name="name-user">
        
            <label class="login-text" for="username">Nome de usuário</label>
            <input class="login-input" type="text" name="username">
        
            <label class="login-text" for="password">Senha</label>
            <input class="login-input" type="password" name="password">

            <div class="content-button">
                <input class="btn btn-login" type="submit" value="Criar conta">
            </div>
        </form>
    </div>

</div>