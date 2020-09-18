<!DOCTYPE html>
<html>
<head>
    <title>Brother's Style</title>
    <link rel="stylesheet" href="<?= BASE_URL;?>assets/bootstrap/bootstrap-4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL;?>assets/css/style.css">
    <script type="text/javascript" src="<?= BASE_URL;?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?= BASE_URL;?>assets/js/script.js"></script>
</head>
<body>

<section class="log">
  
  <form class="form-signin" method="post" action="<?= BASE_URL;?>/login/checkLog">
      <div class="text-center mb-4">
        <h1 class="letter-font  mb-3 font-weight-normal"><fieldset>Sexta Feira</fieldset></h1>
        <p>Entre com seu usuário e senha</p>
      </div>

      <div class="form-label-group">
        <input type="text" id="inputUser" class="form-control" placeholder="Usuario" name="user" required >
        <label for="inputUser">Usuario</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="pass" required>
        <label for="inputPassword">Senha</label>
      </div>

      <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="lembrar de mim"> Lembrar de mim
        </label>
      </div> -->
      <div class=""></div>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <!-- <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p> -->
  </form>

</section>

<footer class="footer">
  Godoy Inc - Sexta Feira &copy - <?= date('Y', time());?>
</footer>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= BASE_URL;?>assests/js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL;?>assets/popper/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL;?>/bootstrap/bootstrap-4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>