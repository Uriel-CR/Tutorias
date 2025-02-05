<div>

    <div class="logos">
        <img src="/laravel/resources/multimedia/edomex.png" alt="Logo 1" class="logoedomex">
        <img src="/laravel/resources/multimedia/tesi.png" alt="Logo 2" class="logotesi">
        <img src="/laravel/resources/multimedia/isclogo.jpeg" alt="Logo 3" class="logoisc">
    </div>
    <div class="banner">
        <h1>Bienvenidos</h1>
    </div>
</header>

<main>
    <button class="cerrarSesion" onclick="cerrarSesion()">Cerrar sesión</button>
    <div class="content">
       
        <div class="menu">
            <h2>Seleccione una opción:</h2>
            <ul>
                <li><a href="#">Canalización</a></li>
                <li><a href="#">Ficha de tutorado</a></li>
                <li><a href="#">Tutorías académicas</a></li>
                <li><a href="#">Reporte Mensual</a></li>
                <li><a href="#">Ficha de Identificación</a></li>
            </ul>
        </div>
        <div class="mascot">
            <img src="/laravel/resources/multimedia/roco2.png" alt="Mascota Roko">
        </div>
    </div>
</main>

<footer>
    <p>© 2024 Tecnológico de Estudios Superiores de Ixtapaluca</p>
</footer>

<script>
    function cerrarSesion() {
        window.location.href = "/laravel/login.html";
    }
</script>

</div>
