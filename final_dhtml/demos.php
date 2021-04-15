<?php
    include_once("contenidophp/header.php");
?>
<div class="container-fluid text-center largesection py-5" id="welcome">
    <div class="container">
        <div class="row align-items-center py-4">
            <div class="col-sm-12"><h1>Envíanos un demo</h1></div>
            <div class="col-sm-12"><h5>Consigue una oportunidad para destacarte a nuestra comunidad y la industria</h5></div>
        </div>
        
            <div class="container p-1 bg-light text-dark text-start p-3 rounded">
                <form action="procesarform.php" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" name="demo-nombre" id="nombre">
                        </div>
                        <div class="col">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" placeholder="Apellido" name="demo-apellido" id="apellido">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="ciudad" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" placeholder="Ciudad de origen" name="demo-ciudad" id="ciudad">
                        </div>
                        <div class="col">
                            <label for="pais" class="form-label">País</label>
                            <input type="text" class="form-control" placeholder="País de origen" name="demo-pais" id="pais">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="tipo" class="form-label">Mi demo es...</label>
                            <select class="form-select" id="tipo" name="demo-tipo">
                                <option selected>Elige el tipo de demo</option>
                                <option value="hardware">Hardware</option>
                                <option value="software">Software</option>
                                <option value="musica">Música</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="enlace" class="form-label">Enlace de demo</label>
                            <input type="text" class="form-control" placeholder="Coloca tu enlace aquí" name="demo-enlace" id="enlace">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="demo-email" placeholder="ejemplo@ejemplo.com">
                        <div class="form-text">Nos pondremos en contacto por tu correo electrónico</div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="edad" required>
                        <label class="form-check-label" for="edad">Confirmo que tengo al menos 18 años de edad</label>
                    </div>
                    <input type="hidden" name="demo-chk" value="demo-chk">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
    </div>
</div>
<?php
    include_once("contenidophp/footer.php");
?>
