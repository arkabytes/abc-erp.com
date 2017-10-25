<p>Si quieres ponerte en contacto con nosotros, rellena este formulario o envíanos un e-mail a <a href="mailto:contacto@arkabytes.com">contacto@arkabytes.com</a></p>
<div class="panel panel-default">
    <div class="panel-body">
        <form id="formulario" method="post" role="form" action="_enviar_email.php">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"
                       placeholder="Introduce tu nombre">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="Introduce tu e-mail">
            </div>
            <div class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto"
                       placeholder="Introduce el asunto">
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" cols="20" placeholder="Escribe tu mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
        </form>

    </div>
</div>
<div id="mensaje"></div>
<div id="resultado"></div>