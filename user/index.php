<?php include '../src/header.php'; ?>
<?php session_start(); ?>
<main class="text-center row">
    <h1 class="mt-5 mb-5 display-1">Bienvenido de nuevo <?php echo $_SESSION['nombre'], " ", $_SESSION['apellido']; ?></h1>
    <div class="col-8 mx-auto">
        <section class="col-2 float-start">
            <img class="col" src="https://img.icons8.com/?size=512&id=65342&format=png" width="150px">
        </section>
        <section class="col float-start text-start">
            <p>Rut: <?php echo $_SESSION['rut']; ?></p>
            <p>Email: <?php echo $_SESSION['email']; ?></p>
            <p>Especialidad: <?php echo $_SESSION['especialidad']; ?></p>
        </section>
        <a class="btn btn-primary" href="/prescripcion">Crear Prescripcion</a>
    </div>
</main>
<?php include '../src/footer.php'; ?>