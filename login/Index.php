<?php include '../src/header.php'; ?>
<?php include 'login.php'; ?>
<main class="text-center row">
  <form method='POST' class="col-3 mx-auto">
    <h1 class="mt-5 mb-5 display-1">Iniciar Sesion</h1>
    <input type="email" name="email" class="form-control mt-5 mb-5" placeholder="Email" required>
    <input type="password" name="pass" class="form-control mt-5 mb-5" placeholder="Clave" required>
    <button type="submit" name="login" class="btn btn-primary">Iniciar Sesion</button>
  </form>
</main>
<?php include '../src/footer.php'; ?>