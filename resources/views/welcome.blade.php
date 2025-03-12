<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Real Dreams</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap Bundle con Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{!! asset('css/base.css') !!}">
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

        <div class="contenedor">
            <img class="g-img logo" src="{!! asset('imagenes/logo.png') !!}" width="20%">
        </div>

        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            <div class="row inicio">
                <div class="col-md-6 col-xs-6">
                    <h2><b> Aventuras y Sueños Comienzan Aquí</b></h2>
                    <p>Descubre destinos de ensueño mientras ahorras con nuestras exclusivas ofertas en Real Dreams. Tu aventura comienza ahora.</p>
                    
                    <button class=""><a class="nav-link" href="https://api.whatsapp.com/send?phone=5545152321&text=*%C2%A1Hola%2C%20me%20encuentro%20en%20la%20p%C3%A1gina%20web%20de%20Real%20Dreams%20y%20me%20interesa%20conocer%20m%C3%A1s%20detalles"><b>Reserva y Ahorra</b></a></button>
                </div>
            </div>
           
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                        <img class="g-img" src="{!! asset('imagenes/familia.jpg') !!}" width="100%">
                    </div>
                    <div class="col-md-5 col-xs-6 destino">
                        <br><br>
                       <p>En Real Dreams, transformamos cada destino en una experiencia única. Con acceso a tarifas exclusivas, hoteles premium y opciones de financiamiento, nuestro compromiso es brindarte la mejor manera de explorar el mundo.</p>
                       <p>Ofrecemos paquetes personalizados, reservas sin intermediarios y acceso a experiencias inolvidables, garantizando que cada viaje sea accesible, cómodo y sin complicaciones.</p>
                       <p>Diferenciales:</p>
                       <ul>
                            <li>✔ Los mejores descuentos en hoteles y vuelos</li>
                            <li>✔ Reserva con un anticipo y paga en cómodos plazos</li>
                            <li>✔ Paquetes exclusivos en destinos nacionales e internacionales</li>
                            <li>✔ Soporte y asesoría personalizada para tu viaje ideal</li>
                       </ul>
                    </div>
                </div>

                <div class="general">
                    <br><br>
                    <h5><b>Ahorros Increíbles</b></h5>
                    <h3>🌎 Los mejores destinos esperan por ti</h3>
                    <p>Desde playas paradisíacas hasta ciudades llenas de historia, Real Dreams te lleva a los destinos más espectaculares con los mejores precios.</p>
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/huatulco.jpg') !!}" width="90%">
                            <h4>🌊 Huatulco</h4>
                            <p>Uno de los secretos mejor guardados de México, Huatulco cuenta con nueve bahías impresionantes, playas doradas y montañas cubiertas de selva. Ideal para el ecoturismo, recorridos en lancha y descanso en un paraíso lejos del bullicio</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/carmen.jpg') !!}" width="90%">
                            <h4>🏝️ Playa del Carmen</h4>
                            <p>Un destino vibrante con playas paradisíacas, la famosa Quinta Avenida y acceso a cenotes y parques ecológicos. Playa del Carmen combina relajación, aventura y una vida nocturna única en el Caribe Mexicano.</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/cancun.jpg') !!}" width="90%">
                            <h4>🌴 Cancún</h4>
                            <p>El corazón del Caribe Mexicano, Cancún es un paraíso de aguas turquesa, arenas blancas y resorts de primer nivel. Ya sea que busques relajación, aventura o una vida nocturna vibrante, este destino te ofrece una experiencia inigualable.</p>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/holbox.jpg') !!}" width="90%">
                            <h4>🛶 Holbox</h4>
                            <p>Un paraíso tropical con aguas cristalinas, arena blanca y un ambiente bohemio inigualable. Holbox es el destino perfecto para relajarse, admirar atardeceres espectaculares y vivir experiencias únicas como nadar con tiburones ballena o recorrer sus lagunas bioluminiscentes.</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/mujeres.jpg') !!}" width="90%">
                            <h4>🏖️ Isla Mujeres</h4>
                            <p>Una pequeña isla frente a Cancún, Isla Mujeres es un tesoro escondido con aguas cristalinas, playas espectaculares y un ambiente relajado. Explora arrecifes de coral, nada en la famosa Playa Norte o simplemente disfruta de su encanto caribeño.</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/cabos.jpg') !!}" width="90%">
                            <h4>🏜️ Los Cabos </h4>
                            <p>Donde el desierto se encuentra con el mar. Los Cabos es famoso por sus lujosos resorts, paisajes espectaculares y el icónico Arco de Cabo San Lucas. Disfruta de pesca deportiva, avistamiento de ballenas, campos de golf de clase mundial y atardeceres impresionantes.</p>
                        </div>
                    </div>
                </div>

                <div class="general">
                    <h3>✈️ Descubre el mundo con Real Dreams</h3>
                    <p>Desde las luces de Las Vegas hasta la historia de Roma, viaja a los destinos más fascinantes del mundo con tarifas exclusivas y la mejor experiencia.</p>
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/italia.jpg') !!}" width="90%">
                            <h4>🍝 Italia</h4>
                            <p>Recorre Roma y su Coliseo, navega por los canales de Venecia, explora la Toscana o disfruta de la elegancia de Milán. Italia es un país que combina arte, historia y una de las mejores gastronomías del mundo.</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/paris.jpg') !!}" width="90%">
                            <h4>🗼 París</h4>
                            <p>La ciudad del amor y la luz te cautivará con su elegancia y encanto. Desde la icónica Torre Eiffel hasta el Louvre y los cafés de Montmartre, París es el destino ideal para los amantes del arte, la moda y la gastronomía.</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/vegas.jpg') !!}" width="90%">
                            <h4>🎰 Las Vegas</h4>
                            <p>La ciudad que nunca duerme te espera con sus espectaculares casinos, impresionantes espectáculos y una vibrante vida nocturna. Desde los hoteles temáticos de The Strip hasta el Gran Cañón, Las Vegas es un destino lleno de entretenimiento y lujo.</p>
                        </div>


                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/japon.png') !!}" width="90%">
                            <h4>⛩️ Japón</h4>
                            <p>Una fusión entre modernidad y tradición. Desde los rascacielos de Tokio hasta los templos de Kioto, Japón ofrece una experiencia única con su cultura milenaria, gastronomía exquisita y paisajes inolvidables.</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/grecia.jpg') !!}" width="90%">
                            <h4>🏛️ Grecia</h4>
                            <p>Déjate sorprender por los impresionantes templos de Atenas, las casas blancas de Santorini y las playas de Mykonos. Grecia es un destino lleno de historia, cultura y paisajes que parecen sacados de una postal.</p>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <img class="g-img" src="{!! asset('imagenes/newYork.jpg') !!}" width="90%">
                            <h4>🗽 Nueva York</h4>
                            <p>La Gran Manzana es un destino que lo tiene todo: rascacielos imponentes, Broadway, Central Park y la Estatua de la Libertad. Vive el ritmo inigualable de Nueva York mientras disfrutas de su cultura, gastronomía y experiencias icónicas.</p>
                        </div>
                    </div>
                </div>
                <div class="general">
                    <h2>💡 Tu viaje perfecto en 4 simples pasos</h2>
                    <br>
                    <ul>
                        <li>1️⃣ Cotiza tu viaje con tarifa preferencial</li>
                        <li>2️⃣ Asegura tu reserva con un anticipo desde el 30% </li>
                        <li>3️⃣ Paga a tu ritmo con opciones de financiamiento.</li>
                        <li>4️⃣ Disfruta de tu viaje con la tranquilidad de los mejores beneficios.</li>
                    </ul>
                </div>

                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner general">
                        <div class="carousel-item active">
                            <img src="{!! asset('imagenes/paso1.jpg') !!}" class="d-block c-img" alt="Imagen 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{!! asset('imagenes/paso2.jpg') !!}" class="d-block c-img" alt="Imagen 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{!! asset('imagenes/paso3.jpg') !!}" class="d-block c-img" alt="Imagen 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{!! asset('imagenes/paso4.jpg') !!}" class="d-block c-img" alt="Imagen 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{!! asset('imagenes/paso5.jpg') !!}" class="d-block c-img" alt="Imagen 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{!! asset('imagenes/paso6.jpg') !!}" class="d-block c-img" alt="Imagen 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>






                <div class="general">
                    
                    <h2>💬Opiniones Reales de Nuestros Clientes</h2>
                    <p>Miles de personas han vivido experiencias inolvidables con Real Dreams. Esto es lo que cuentan sobre sus viajes:</p>

                    <div class="row g-3">
                        <div class="col-md-4 col-xs-12 testimonio">
                            <img class="img-testimonio" src="{!! asset('imagenes/Monterrey.png') !!}" width="90%">
                            <p>🗣️ "El mejor servicio, todo tal como lo prometieron." <br> "Cotizamos un viaje a Japón y además de darnos un mejor precio que otras agencias, el servicio fue impecable. Todo estuvo organizado a la perfección. ¡Con Real Dreams incluso tuvimos la oportunidad de conocer lugares únicos!"</p>
                            <p><span>— Carlos y Mariana G. | Monterrey</span></p>
                        </div>
                        <div class="col-md-4 col-xs-12 testimonio">
                            <img class="img-testimonio" src="{!! asset('imagenes/Puebla.jpg') !!}" width="90%">
                            <p>🗣️ "Viajar más pagando menos es posible." <br> "Estoy contenta porque pude permitirme unas vacaciones, con los planes de pago y descuentos de Real Dreams, pude hacer un viaje increíble a Playa del Carmen con una cotización que se acomodó a mis finanzas. ¡Totalmente recomendado!"</p>
                            <p><span>— Sofía L. | Puebla</span></p>
                        </div>
                        <div class="col-md-4 col-xs-12 testimonio">
                            <img class="img-testimonio" src="{!! asset('imagenes/CDMX.jpg') !!}" width="90%">
                            <p>🗣️ "Increíble experiencia, todo fue fácil y sin complicaciones." <br> "Reservar con Real Dreams fue la mejor decisión. Conseguí un hotel en Cancún con una tarifa increíble, mejoraron mi precio de Expedia y esto me permitió disfrutar sin preocupaciones. ¡Definitivamente volveré a viajar con ellos!"</p>
                            <p><span>— Andrea R. | CDMX</span></p> 
                        </div>
                    </div>
                </div>

                <div class="general">
                    <h2>¡Vive y Disfruta desde Ahora tu Próximo Viaje!</h2>
                    <p>En Real Dreams, nos dedicamos a hacer realidad tus sueños de viaje, garantizando calidad y las mejores ofertas. </p>
                </div>

                <div class="row garantia">
                    <div class="col-md-6 col-xs-12 garantia">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 48C141.1 48 48 141.1 48 256l0 40c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-40C0 114.6 114.6 0 256 0S512 114.6 512 256l0 144.1c0 48.6-39.4 88-88.1 88L313.6 488c-8.3 14.3-23.8 24-41.6 24l-32 0c-26.5 0-48-21.5-48-48s21.5-48 48-48l32 0c17.8 0 33.3 9.7 41.6 24l110.4 .1c22.1 0 40-17.9 40-40L464 256c0-114.9-93.1-208-208-208zM144 208l16 0c17.7 0 32 14.3 32 32l0 112c0 17.7-14.3 32-32 32l-16 0c-35.3 0-64-28.7-64-64l0-48c0-35.3 28.7-64 64-64zm224 0c35.3 0 64 28.7 64 64l0 48c0 35.3-28.7 64-64 64l-16 0c-17.7 0-32-14.3-32-32l0-112c0-17.7 14.3-32 32-32l16 0z"/></svg>
                        <h3>Compromiso con el Cliente</h3>
                        <p>En Real Dreams, nuestro principal objetivo es garantizar la satisfacción de nuestros clientes. Nos esforzamos por ofrecer un servicio de atención personalizado que se adapte a las necesidades y expectativas de cada viajero.</p>
                    </div>
                    <div class="col-md-6 col-xs-12 garantia">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
                        <h3>Innovación Continua</h3>
                        <p>Creemos en la mejora constante de nuestros servicios. Nos mantenemos a la vanguardia de las tendencias en la industria de viajes para ofrecer las mejores experiencias y descuentos a nuestros clientes.</p>
                    </div>
                    <div class="col-md-6 col-xs-12 garantia">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M16 64C16 28.7 44.7 0 80 0L304 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L80 512c-35.3 0-64-28.7-64-64L16 64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64L80 64l0 320 224 0 0-320z"/></svg>
                        <h3>Transparencia y Confianza</h3>
                        <p>La honestidad es la base de nuestras relaciones. En Real Dreams, nos comprometemos a ofrecer información clara y precisa sobre nuestros servicios y precios, asegurando que nuestros clientes tomen decisiones informadas.</p>
                    </div>
                    <div class="col-md-6 col-xs-12 garantia">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>
                        <h3>Responsabilidad Social</h3>
                        <p>Estamos comprometidos con el turismo sostenible y responsable. Trabajamos para minimizar nuestro impacto ambiental y promovemos prácticas que beneficien a las comunidades locales en los destinos que ofrecemos.</p>
                    </div>
                    <div class="col-md-3 col-xs-12">
                    </div>
                    <div class="col-md-6 col-xs-12 garantia">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M381 114.9L186.1 41.8c-16.7-6.2-35.2-5.3-51.1 2.7L89.1 67.4C78 73 77.2 88.5 87.6 95.2l146.9 94.5L136 240 77.8 214.1c-8.7-3.9-18.8-3.7-27.3 .6L18.3 230.8c-9.3 4.7-11.8 16.8-5 24.7l73.1 85.3c6.1 7.1 15 11.2 24.3 11.2l137.7 0c5 0 9.9-1.2 14.3-3.4L535.6 212.2c46.5-23.3 82.5-63.3 100.8-112C645.9 75 627.2 48 600.2 48l-57.4 0c-20.2 0-40.2 4.8-58.2 14L381 114.9zM0 480c0 17.7 14.3 32 32 32l576 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L32 448c-17.7 0-32 14.3-32 32z"/></svg>
                        <h3>Pasión por los Viajes</h3>
                        <p>Nos apasiona explorar el mundo y compartir esa pasión con nuestros clientes. Nuestro equipo está formado por viajeros experimentados que entienden la magia de descubrir nuevos lugares y culturas.</p>
                    </div>
                    <div class="col-md-3 col-xs-12">
                    </div>
                </div>

                <div class="general">
                <h2>¡Descubre el Mundo a Precios Increíbles!</h2>
                <p>Explora destinos soñados con las mejores ofertas de viaje.  <br> Realiza tu sueño de viajar sin romper el presupuesto con nuestros exclusivos descuentos.</p>
                <div class="ultimo">
                    <button class=""><a class="nav-link" href="https://api.whatsapp.com/send?phone=5545152321&text=*%C2%A1Hola%2C%20me%20encuentro%20en%20la%20p%C3%A1gina%20web%20de%20Real%20Dreams%20y%20me%20interesa%20conocer%20m%C3%A1s%20detalles"><b>📲¡Solicita tu Cotización Hoy Mismo!✈️</b></a></button>
                </div>
                
                <br><br><br>

                <h3>¡Descubre tu Próxima Aventura!✈️</h3>
                <p>Déjanos tus datos y uno de nuestros expertos te ayudará a encontrar las mejores ofertas y descuentos exclusivos en viajes por México y el mundo con Real Dreams.🌎</p>

                
                </div>

                <form method="POST" action="{{ route('correo') }}">
                    @csrf 
                    <div class="mb-3 container">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <label for="name" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" required>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="wa" class="form-label">Número de WhatsApp</label>
                            <input type="tel" class="form-control" name="wa" id="wa" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje">Mensaje (Cuéntanos a dónde quieres viajar o qué información necesitas)</label><br>
                            <textarea id="mensaje" name="mensaje" required></textarea>
                        </div>
                        <div class="mb-3 content-b">
                            <button type="submit" class="btn btn-primary">📲Da click aquí y envíanos tu solicitud y prepárate para vivir una experiencia inolvidable</button>
                        </div>
                    </div>
                </form>



            </main>
            <div class="contenedor">
                    <img class="g-img logo" src="{!! asset('imagenes/logo.png') !!}" width="20%">
                </div>
        </div>

    </body>
</html>
