<?php include 'prescripcion.php'; ?>
<?php include 'validarCantidad.php'; ?>
<?php session_start(); ?>
<script src="../src/js/rut.js"></script>
<script src="../src/js/nombre.js"></script>
<script src="../src/js/telefono.js"></script>
<script src="../src/js/agregarFila.js"></script>
<head>
  <title>PHP Test</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</head>
<main class="d-flex flex-column align-items-center justify-content-center">
  <div class="text-center col-4">
    <h2 class="mt-5 mb-5 display-1">Prescripcion</h2>
    <h5 class="mb-2" style="line-height: 1.5;">El Médico <strong>
        <?php echo $_SESSION['nombre'], " ", $_SESSION['apellido']; ?>
      </strong> con el RUT <strong>
        <?php echo $_SESSION['rut']; ?>
      </strong>,
      con correo electrónico <strong>
        <?php echo $_SESSION['email']; ?>
      </strong> receta los siguientes medicamentos al siguiente paciente:</h5>
  </div>
  <form action="../user/index.php" method="POST" class="row col-8 mx-auto">
    <div class="col-6">
      <h2 class="text-center col-12 mt-5">Datos del Cliente</h2>
      <div class="row">
        <div class="col-6">
          <input type="text" name="nombre_paciente" class="form-control mt-5 mb-5" placeholder="Nombre" maxlength="30" oninput="validarLetras(this)" required>
          <input type="text" name="rut" class="form-control mt-5 mb-5" placeholder="Rut" oninput="checkRut(this)" required>
          <input type="text" name="sexo_paciente" class="form-control mt-5" placeholder="Sexo" required>
        </div>
        <div class="col-6">
          <input type="text" name="apellido_paciente" class="form-control mt-5 mb-5" placeholder="Apellido" maxlength="30" oninput="validarLetras(this)" required>
          <input type="email" name="email_paciente" class="form-control mt-5 mb-5" placeholder="Email" required>
          <input type="number" name="edad_paciente" class="form-control mt-5" onkeydown="return false" onwheel="event.preventDefault()" placeholder="Edad" min="0" max="130" required>
        </div>
      </div>
      <div class="text-center row">
        <div class="col-12">
          <input type="text" name="telefono_paciente" class="form-control mt-5 mb-5" placeholder="Número de celular" maxlength="9" oninput="validarNumeros(this)" required>
        </div>
      </div>
    </div>
    <div class="col-6">
      <h2 class="text-center col-12 mt-5">Receta Médica</h2>
      <div id="campos-dinamicos">
        <div class="row">
          <div class="col-6">
            <select name="medicamento" class="form-control mt-5 mb-5" placeholder="Medicamento" required>
              <?php
              foreach ($medicamentos as $medicamento) {
                echo "<option value=\"$medicamento\">$medicamento</option>";
              }
              ?>
            </select>
          </div>
          <div class="col-3">
            <input type="number" name="cantidad" class="form-control mt-5 mb-5" placeholder="Cantidad"  required>
          </div>
          <div class="col-3">
          <button id="agregarBtn" type="button" onclick="agregarFila()" class="btn btn-primary mt-5">Agregar</button>
        </div>
      </div>
    </div> 
  </div>
  <button type="submit" name="registrarse" class="btn btn-primary">Registrarse</button>
  </form>

</main>