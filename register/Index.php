<?php include '../src/header.php'; ?>
<?php include 'register.php'; ?>
<script src="../src/js/rut.js"></script>
<script src="../src/js/nombre.js"></script>
<main class="text-center row">
  <form action="../index.php" method='POST' class="col-3 mx-auto">
    <h1 class="mt-5 mb-5 display-1">Registro</h1>
    <input type="text" name="rut" class="form-control mt-5 mb-5" placeholder="Rut" oninput="checkRut(this)" required>
    <input type="text" name="nombre" class="form-control mt-5 mb-5 text-capitalize" placeholder="Nombre" maxlength="30" oninput="validarLetras(this)" required>
    <input type="text" name="apellido" class="form-control mt-5 mb-5 text-capitalize" placeholder="Apellido" maxlength="30" oninput="validarLetras(this)" required>
    <input type="Text" name="especialidad" class="form-control mt-5 mb-5 text-capitalize" placeholder="Especialidad" maxlength="30" oninput="validarLetras(this)" required>
    <input type="email" name="email" class="form-control mt-5 mb-5" placeholder="Email" required>
    <input type="password" name="pass" class="form-control mt-5 mb-5" placeholder="Clave" minlength="8" required>
    <button type="submit" name="registrarse" class="btn btn-primary">Registrarse</button>
  </form>
</main>
<?php include '../src/footer.php'; ?>