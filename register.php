<?php include 'src/header.php'; ?>
<main class="text-center row">
  <form method='POST' class="col-3 mx-auto">
    <h1 class="mt-5 mb-5 display-1">Registro</h1>
    <input type="text" class="form-control mt-5 mb-5" placeholder="Rut">
    <input type="text" class="form-control mt-5 mb-5" placeholder="Nombre">
    <input type="text" class="form-control mt-5 mb-5" placeholder="Apellido">
    <input type="Text" class="form-control mt-5 mb-5" placeholder="Especialidad">
    <input type="email" class="form-control mt-5 mb-5" placeholder="Email">
    <input type="password" class="form-control mt-5 mb-5" placeholder="Clave">
    <button type="submit" class="btn btn-primary">Registrarse</button>
  </form>
</main>
<?php include 'src/footer.php'; ?>