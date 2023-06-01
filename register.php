<?php include 'src/header.php'; ?>
<main class="text-center row">
  <form method='POST' class="col-3 mx-auto" required>
    <h1 class="mt-5 mb-5 display-1">Registro</h1>
    <input type="text" name="rut" class="form-control mt-5 mb-5" placeholder="Rut">
    <input type="text" name="nombre" class="form-control mt-5 mb-5" placeholder="Nombre" maxlength="30">
    <input type="text" name="apellido" class="form-control mt-5 mb-5" placeholder="Apellido" maxlength="30">
    <input type="Text" name="especialidad" class="form-control mt-5 mb-5" placeholder="Especialidad" maxlength="30">
    <input type="email" name="email" class="form-control mt-5 mb-5" placeholder="Email">
    <input type="password" name="pass" class="form-control mt-5 mb-5" placeholder="Clave" minlength="8">
    <button type="submit" class="btn btn-primary">Registrarse</button>
  </form>
</main>
<?php include 'src/footer.php'; ?>