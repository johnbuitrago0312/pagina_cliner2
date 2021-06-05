<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLINER</title>
    <link rel="shortcut icon" href="img/logocliner2.png">
    <link rel="stylesheet" href="{{url('css/app.css')}}">

</head>

<body>

    <div class="contenedor">
        <!-- Navegador -->
        <nav>
            <div class="logo">
                <img src="img/logocliner.png" alt="Logo Empresa" title="Titulo Logo Empresa">
            </div>
            <div class="navega"></div>
            <div class="ingreso">
                <ul>
                    <li><a href="#Ingresar">Ingresar</a>
                        <ul>
                            <li>
                                <a type="button" class="" data-toggle="modal" data-target="#login">Iniciar Sesion</a>
                            </li>
                            <li>
                                <a type="button" class="" data-toggle="modal" data-target="#record">Registrarse</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>


        <!-- Encabezado -->
        <header>
            <div class="head-opc">
                <img src="img/imageninicio.png" width="600" alt="">
                <h1>Bienvenidos</h1>
            </div>
        </header>

        <!-- Nosotros-->
        <section class="section-nosotros">
            <div id="Nosotros" class="titulo-portafolio">
                <h1>Nosotros</h1>
            </div>
            <div class="fila-nos">
                <div class="col-izq-nos">
                    <h2>Mision</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas explicabo dolores delectus nihil cum distinctio rerum veniam repudiandae in, quidem, ipsa? Magni, eius. Culpa illum ducimus expedita enim modi ullam quidem. Numquam
                        expedita ab possimus necessitatibus, ratione, nobis? Ex, ea, animi. Corrupti cum mollitia reiciendis blanditiis quisquam sapiente accusantium numquam.</p>
                </div>
                <div class="col-cnt-nos">
                    <img src="img/doctor.png" width="200" alt="" class="img-portafolio">
                </div>
                <div class="col-der-nos">
                    <h2>Vision</h2>
                    <p> Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Quibusdam vitae maxime eum facilis saepe, aut corporis voluptate dolorum. Eveniet enim eos deserunt excepturi consequatur hic ullam quae officia impedit aperiam laborum similique
                        placeat reiciendis dignissimos veniam dicta itaque voluptas ea corporis, molestias quibusdam ipsum illum nisi. Amet id, quis quia!</p>
                </div>
            </div>
            <div class="fila-nos">
                <div class="col-izq-nos">
                    <h2>Objetivo General</h2>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore voluptates mollitia unde vero aspernatur, rem odio dolorem perspiciatis repellendus distinctio, maiores facilis quia voluptatibus commodi nihil quod modi! Quos, facilis
                        quam nulla tempora vitae ab dolor eveniet. Itaque, natus, nemo doloribus corrupti aperiam earum et necessitatibus optio asperiores maxime? Suscipit.</p>
                </div>
                <div class="col-cnt-nos">
                    <img src="img/doctor.png" width="200" alt="" class="img-portafolio">
                </div>
                <div class="col-der-nos">
                    <h2>Objetivo Especificos</h2>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore voluptates mollitia unde vero aspernatur, rem odio dolorem perspiciatis repellendus distinctio, maiores facilis quia voluptatibus commodi nihil quod modi! Quos, facilis
                        quam nulla tempora vitae ab dolor eveniet. Itaque, natus, nemo doloribus corrupti aperiam earum et necessitatibus optio asperiores maxime? Suscipit.</p>
                </div>
            </div>
        </section>

        <!-- Contactenos -->
        <section>
            <div id="Contactenos" class="titulo-portafolio">
                <h1>Contactenos</h1>
            </div>

            <div class="col-conts">
                <div class="borde col-arr-conts">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.2283040964192!2d-74.19853557079426!3d4.609554499790707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9e3e2847d0bf%3A0x78e0bbedc8b7903b!2sCra.%2080n%20%2373-20%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1599873042334!5m2!1ses!2sco"
                        allowfullscreen="" aria-hidden="false" tabindex="0" width="100%" height="100%"></iframe>
                </div>
            </div>
            <div class="col-abj-conts">
                <div class="fila-col-abj-cont">
                    <p>Direccion: Carrera 80 N #73-20sur</p>
                    <p>Whatsapp: 3103388243</p>
                    <p>Domicilios</p>
                    <p>Bogota D.C.</p>
                </div>
                <div class="fila-col-abj-cont-img">
                    <div class="fila-col-abj-cont-col">
                        <i class="fab fa-share-alt-square">
						    <a><img src="img/wa.link_uswq5m.png" width="250" alt="" class="img-portafolio"></a>
                        </i>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pie de Pagina -->
        <footer></footer>
        <a href="#"><i class="fas fa-arrow-circle-up"></i></a>
    </div>

<!-- Modal login -->

    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="form_login" style="background-color: #6e8080;">
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input style="background: #fff;" type="email" name="Emailogin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"></label>
                            <input style="background: #fff;" type="password" name="Passwordlogin" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-primary" name="sesion" id="ingresar_modal" value="Ingresar">
                </div>
            </div>
        </div>
    </div>

<!-- Modal Record -->

    <div class="modal fade" id="record" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" id="form_registrarse" style="background-color: #6e8080;">
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input style="background: #fff;" type="text" name="Nombre" class="form-control" id="Nombre Completo" placeholder="Nombre Completo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input style="background: #fff;" type="text" name="Direccion" class="form-control" id="Direccion" placeholder="Direccion">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input style="background: #fff;" type="text" name="Celular" class="form-control" id="Celular" aria-describedby="" placeholder="Celular">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input style="background: #fff;" type="text" name="Edad" class="form-control" id="Edad" aria-describedby="emailHelp" placeholder="Edad">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"></label>
                            <input style="background: #fff;" type="email" name="Email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"></label>
                            <input style="background: #fff;" type="password" name="Password" class="form-control" id="Password" placeholder="Password">
                        </div>    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-primary" name="regis" id="registro_modal" value="Registrarse">
                </div>
            </div>
        </div>
    </div>

    <!--<script src="{{asset('js/app.js') }}"></script>-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script>
        $('#login_modal').click(function() {
            login();
            
        });

        function Ingresar() {
            var data = new FormData($('#form_login')[0]);
            $.ajax({
                url: 'public/php/login.php',
                type: 'POST',
                dataType: 'HTML',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#loading').show();
                    $('#message_error').html('');
                },
                success: function(response) {
                    $('#loading').hide();
                    $('#message_error').html(response);
                }
            });
        }

        $('#record_modal').click(function() {
            record();
        });

        function record() {
            var data = new FormData($('#form_registrarse')[0]);
            $.ajax({
                url: 'public/php/record.php',
                type: 'POST',
                dataType: 'HTML',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#loading').show();
                    $('#message_error').html('');
                },
                success: function(response) {
                    $('#loading').hide();
                    $('#message_error').html(response);
                }
            });
        }
    </script>

</body>    
</html>
