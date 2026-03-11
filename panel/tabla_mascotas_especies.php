<?php
session_start();
include("../conexion.php");

if (!isset($_SESSION['admin']) || $_SESSION['admin'] != "SÍ"){
  echo "<script>alert('Acceso denegado.'); window.location.href='index.php';</script>";
  exit;
}
$sql = "SELECT * FROM mascota_especie ORDER BY id_pet_species ASC";
$res = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tabla-de-especies</title>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php include("header.php"); ?>
<section class="about">
  <div class="ver-admin-container">
    <h2>tabla de Especies de mascotas</h2> 
    <?php if ($res->num_rows > 0): ?>
      <table border="1" cellpadding="10" cellspacing="0" style="margin:auto; background:white; border-collapse:collapse; width:90%;">
        <tr style="background-color:#ffcc80;">
            <th>ID</th>
            <th>Especie</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $res->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id_pet_species']; ?></td>
                <td><?php echo htmlspecialchars($row['pet_species']); ?></td>
                <td>
                    <a href="editar_mascotas_especie.php?id=<?php echo $row['id_pet_species'] ?>" class="btn-table btn-warning">Editar</a>
                    <a href="eliminar_mascotas_especie.php?id=<?php echo $row['id_pet_species'] ?>" class="btn-table btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
      <p style="text-align:center;">No hay edades registradas.</p>
    <?php endif; ?>
  </div>
</section>

<p style="text-align:center; margin:20px;">
  <a href="index.php" class="btn">⬅ Volver al inicio</a>
</p>

</body>
</html>