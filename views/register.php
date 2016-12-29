<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de Registro</title>
  </head>
  <body>
    <div class="container">
      <form class="" action="<?php echo getenv('MAIN_URL'); ?>/register" method="post">
        <label for="name">Username</label>
        <input type="text" name="name" value="">
        <label for="username">LastName</label>
        <input type="text" name="lastname" value="">
        <label for="username">Password</label>
        <input type="password" name="password" value="">
        <input type="submit" name="registrar" value="Fazer Registro">
      </form>
    </div>
  </body>
</html>
