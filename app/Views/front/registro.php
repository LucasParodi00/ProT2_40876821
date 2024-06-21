<div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4">SynergyPath</h1>
            <p class="lead">Potenciando el éxito a través del trabajo en equipo</p>
        </div>

        <div class="card card-formulario-registro">
            <div class="card-body">
                <h2 class="card-title">Registro</h2>
                <form>
                    <div class="mb-3">
                        <label for="registroNombre" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="registroNombre" placeholder="Tu nombre completo" required>
                    </div>
                    <div class="mb-3">
                        <label for="registroUsuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="registroUsuario" placeholder="Nombre de usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="registroEmail" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="registroEmail" placeholder="nombre@ejemplo.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="registroTelefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="registroTelefono" placeholder="Tu teléfono" required>
                    </div>
                    <div class="mb-3">
                        <label for="registroDireccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="registroDireccion" placeholder="Tu dirección" required>
                    </div>
                    <div class="mb-3">
                        <label for="registroPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="registroPassword" placeholder="Contraseña" required>
                    </div>
                    <div class="d-flex align-items-center">
                        <button type="submit" class="btn btn-primary me-3">Registrarse</button>
                        <p>Ya tienes una cuenta ? <a href=" <?= base_url('/login') ?> ">Inicia Sesion</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>