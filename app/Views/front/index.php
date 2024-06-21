

<body>

<div class="container mt-3">
    <section class="h-80 mt-3">
        <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?= base_url('/assets/img/carrusel1.jpg')?>"class="d-block img-fluid w-100 h-80 carrusel-img" alt="...">
            </div>
            <div class="carousel-item ">
            <img src="<?= base_url('/assets/img/carrusel2.jpg')?>" class="d-block img-fluid w-100 h-80 carrusel-img" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?= base_url('/assets/img/carrusel3.jpg')?>" class="d-block img-fluid w-100 h-80 carrusel-img" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>
    <section>
        <h1 class="text-center m-3 p-3">Razones para promover la colaboración en tu empresa</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Motivo 1: Fomentar la colaboración</h5>
                            <p class="card-text">Trabajar en equipo permite aprovechar las habilidades y conocimientos de cada miembro para lograr objetivos comunes.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Motivo 2: Mejorar la comunicación</h5>
                            <p class="card-text">El trabajo en equipo promueve la comunicación efectiva, lo que reduce malentendidos y conflictos.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Motivo 3: Incrementar la productividad</h5>
                            <p class="card-text">La colaboración y la distribución de tareas eficiente pueden aumentar la productividad del equipo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-5">
        <h3 class="text-center mt-4">Nuestros clientes nos avalan </h3>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-5 mb-4">
                    <div class="card testimonial-card bg-light">
                      <div class="card-body">
                        <h3 class="text-primary">Juan Pérez</h3>
                        <p class="text-dark">"La asesoría sobre trabajo en equipo fue transformadora para nuestra empresa. La comunicación y la colaboración entre los departamentos ha mejorado notablemente."</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 mb-4">
                    <div class="card testimonial-card bg-light">
                      <div class="card-body">
                        <h3 class="text-primary">María López</h3>
                        <p class="text-dark">"Gracias a su asesoría, hemos desarrollado habilidades clave para trabajar mejor juntos. Los resultados se ven reflejados en la eficiencia y el ambiente laboral."</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-5 mb-4">
                    <div class="card testimonial-card bg-light">
                      <div class="card-body">
                        <h3 class="text-primary">Carlos Martínez</h3>
                        <p class="text-dark">"La dinámica de equipo ha cambiado por completo. Ahora todos estamos alineados y motivados hacia los mismos objetivos. Su asesoría ha sido invaluable."</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 mb-4">
                    <div class="card testimonial-card bg-light">
                      <div class="card-body">
                        <h3 class="text-primary">Ana Gómez</h3>
                        <p class="text-dark">"La formación en trabajo en equipo ha sido excelente. Hemos aprendido técnicas y estrategias que aplicamos diariamente para mejorar nuestra colaboración."</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-5 mb-4">
                    <div class="card testimonial-card bg-light">
                      <div class="card-body">
                        <h3 class="text-primary">Luis Ramírez</h3>
                        <p class="text-dark">"La asesoría ha tenido un impacto positivo en nuestra empresa. Ahora trabajamos mejor juntos y hemos visto un incremento en nuestra productividad."</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 mb-4">
                    <div class="card testimonial-card bg-light">
                      <div class="card-body">
                        <h3 class="text-primary">Sofía Fernández</h3>
                        <p class="text-dark">"La asesoría nos ha ayudado a identificar y superar nuestras debilidades como equipo. Ahora somos más unidos y efectivos."</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </section>
</div>

</body>
</html>