

<!DOCTYPE html>

<html lang="pt-br">

  <head>

  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <link rel="icon" href="imagens/icone.png">



    <title>IFReserva - Login</title>



    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

    <link href="/css/estilo.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <script src="js/ie-emulation-modes-warning.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  	

	<style>

      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */

      @import url(https://fonts.googleapis.com/css?family=Wire+One|Play);



* {margin: 0 auto; padding: 0;outline:0;}



body {

  font-family: 'Wire One', Helvetica, Arial, sans-serif;

  background: url(BG.jpg) repeat;  

}



.box {

  background: #f0f0f0;

  width: 360px;

  height: 400px;

  margin: 110px auto 0;

  padding: 0;

  border-radius: 15px;

  border: 2px dashed #9BCC21;

  box-shadow: 0 0 0px 10px #f0f0f0;

}



.title {

  letter-spacing: 0px;  

  font-size: 72px;

  font-weight: 400;

  text-align: center;

  margin: 20px 0;  

}



.username, .senha {

  font-family: 'Play', Helvetica, Arial, sans-serif;

  font-weight: 400;

  font-size: 24px;

  color: #222;

  margin: 0;

  padding: 0;

  display: block;

  border: none;

  border-bottom: 1px solid #ccc;

  -webkit-border-radius: 5px;

  -moz-border-radius: 5px;

  border-radius: 5px;

  width: 250px;

  height: 40px;

  margin: 0 auto;

  outline: 0;

  padding: 4px 9px;

  transition: all .2s ease;

}



.username:focus, .senha:focus {

  box-shadow: inset 0 0 9px rgba(155, 204, 33,0.7);

}





.username {

  margin-bottom: 10px;

}



.senha {

  margin-bottom: 20px;

}



.button {

  font-family: 'Play', Helvetica, Arial, sans-serif;

  color: #aaa;

  border: 1px solid #aaa;

  display: block;

  margin: 0 auto;

  width: 150px;

  height: 45px;

  font-size: 24px;

  transition: all .2s ease;

  border-radius: 5px;

}



.button:hover {

  color: #222;

  background: #9BCC21;

}



.button:active {

  border-color: #222;  

}





    </style>



  </head>



  <body>



    <div class="box">


      <form class="form-signin" method="POST" action="valida.php">
        <h1 class='title'>Login</h1>
            <label for="inputLogin" class="sr-only"></label>
            <input type="text" name="username" id="username" class="username" placeholder="Nome de usuário" required autofocus>
            <label for="inputPassword" class="sr-only"></label>
            <input class='senha' id='senha' name='senha' placeholder='Senha' type='password'>
    
    

<p></p>
		  <input class='button' id='submit' name='login' type='submit' value='Entrar'>
              <p class="text-center text-danger">

              

      <?php if(isset($_SESSION['loginErro'])){

        echo $_SESSION['loginErro'];

        unset($_SESSION['loginErro']);

      }?>

      <p class="text-center text-success">

      <?php 

      if(isset($_SESSION['logindeslogado'])){

        echo $_SESSION['logindeslogado'];

        unset($_SESSION['logindeslogado']);

      }

      ?>

    </p>

    </p>



      </form>





	  <!--js-->

    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>



     </div> 

    <script src="js/ie10-viewport-bug-workaround.js"></script>



  </body>

</html>



