<?php
    include_once("contenidophp/header.php");
?>
<div class="container-fluid text-center largesection py-5" id="welcome">
    <div class="container">
        <div class="row align-items-center py-4">
            <div class="col-sm-12"><h1>Conviértete en un miebro</h1></div>
            <div class="col-sm-12"><h5>Gana ventajas como acceso anticipado a artículos y entrevistas exclusivas, descuentos y ofertas especiales para productos de hardware y software, y descarga música y muestras en la más alta calidad.</h5></div>
        </div>
        
            <div class="container p-1 bg-light text-dark text-start p-3 rounded">
                <form action="procesarform.php" method="post">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" name="memb-nombre" id="nombre">
                            </div>
                            <div class="col">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" placeholder="Apellido" name="memb-apellido" id="apellido">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="ccn" class="form-label">Número de tarjeta</label>
                                <input type="text" class="form-control" placeholder="1234 1234 1234 1234" name="memb-ccn" id="ccn" maxlength="16">
                            </div>
                            <div class="col-md-4">
                                <label for="ccexp" class="form-label">Fecha de expiración</label>
                                <input type="text" class="form-control" placeholder="MM/AA" name="memb-ccexp" id="ccexp" maxlength="5">
                            </div>
                            <div class="col">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" placeholder="123" name="memb-cvv" id="cvv" maxlength="3">
                            </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-5">
                            <label for="ciudad" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" placeholder="Ciudad de origen" name="memb-ciudad" id="ciudad">
                        </div>
                        <div class="col-md-5">
                            <label for="pais" class="form-label">País</label>
                            <input type="text" class="form-control" placeholder="País de origen" name="memb-pais" id="pais">
                        </div>
                        <div class="col">
                            <label for="postal" class="form-label">Código postal</label>
                            <input type="text" class="form-control" placeholder="12345" name="memb-postal" id="postal" maxlength="5">
                        </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="memb-email" placeholder="ejemplo@ejemplo.com">
                            <div class="form-text">Recibirás tus ventajas por tu correo electrónico</div>
                        </div>
                        <input type="hidden" name="memb-chk" value="memb-chk">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
    </div>
</div>
<?php
    include_once("contenidophp/footer.php");
?>
