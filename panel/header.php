<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
define('BASE_URL', 'http://localhost/mascotar-p'); 
?>
<header>
    <div class="header-container">
        <div class="logo">
            <img src="<?= BASE_URL ?>/imagenesong/logomascotar.png" alt="Logo MascotAR">
        </div>
        <nav>
            <ul>
                <li><a href="<?= BASE_URL ?>/index.php">Inicio</a></li>


                <li>
                    <a href="<?= BASE_URL ?>/index.php#nosotros">Quiénes Somos</a>
                    <ul class="submenu">
                        <li><a href="<?= BASE_URL ?>/prensa.php">Prensa</a></li>
                    </ul>
                </li>

                <li><a href="<?= BASE_URL ?>/donaciones/donacion.php">Donar</a></li>

                <li>
                    <a href="<?= BASE_URL ?>/adopciones/adoptar.php">Adoptar</a>
                    <ul class="submenu">
                        <li><a href="<?= BASE_URL ?>/adopciones/adoptados.php">Adoptados</a></li>
                    </ul>
                </li>

                <!-- Usuario -->
                <li class="user-menu">
                <?php if (isset($_SESSION['nick'])): ?>
                    <a href="#"><i class="fas fa-user"></i> Hola, <?= htmlspecialchars($_SESSION['nick']); ?></a>

                    <ul class="submenu">

                        <?php if (!empty($_SESSION['admin']) && $_SESSION['admin'] == "SÍ"): ?>
                            <!-- Opciones solo admin -->
                            <li><a href="<?= BASE_URL ?>/panel/index.php">Ver Panel administrativo</a></li>
                            <li><a href="<?= BASE_URL ?>/proceso_visualizaciones/ver_donaciones.php">Ver donaciones</a></li>
                            <li><a href="<?= BASE_URL ?>/proceso_visualizaciones/ver_adopciones.php">Ver adopciones</a></li>
                            <li><a href="<?= BASE_URL ?>/proceso_visualizaciones/ver_consultas.php">Ver Consultas</a></li>
                            <li><a href="<?= BASE_URL ?>/adopciones/ingreso_mascotas.php">Ingreso de mascotas</a></li>
                            <hr>
                        <?php endif; ?>

                        <li><a href="<?= BASE_URL ?>/donaciones/historial_donaciones.php">Historial de donaciones</a></li>
                        <li><a href="<?= BASE_URL ?>/adopciones/historial_adopciones.php">Historial de adopciones</a></li>
                        <li><a href="<?= BASE_URL ?>/logout.php">Cerrar sesión</a></li>

                    </ul>

                <?php else: ?>
                    <!-- Usuario NO logueado -->
                    <li class="user-menu">
                        <a href="#"><i class="fas fa-user"></i>Ingresar</a>
                        <ul class="submenu login-submenu">
                            <li>
                                <form class="login-form" action="<?= BASE_URL ?>/login.php" method="post">
                                    <h3>Iniciar sesión</h3>
                                    <input type="email" name="email" placeholder="Ingrese su correo" required>
                                    <input type="password" name="pass" placeholder="Ingrese su contraseña" required>
                                    <button type="submit">Entrar</button>
                                </form>

                                <p class="register-link">
                                    ¿No tenés cuenta? <a href="<?= BASE_URL ?>/registros_cambios/registrarse.php">Registrate</a>
                                </p>
                            </li>
                        </ul>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </div>
</header>