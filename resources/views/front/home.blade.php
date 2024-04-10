@extends('layout')

@section('title')
<title>Progreso y Salud</title>
@endsection

@section('style')

@endsection

@section('content')
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">CPI Salud</h1>
            <div class="row center">
                <h5 class="header col s12 light">Proyectos de Compra Pública Innovadora</h5>
            </div>
            <br><br>
        </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
    <div class="section">

    <!--   Icon Section   -->
    <div class="row">
        <div class="col s12">
            <h1 style="#047cec" id="titulo">CPI Salud</h1>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="col l4 s12">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="col l4 s12">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                </div>
                <div class="col l4 s12">
                            <label for="password">Contraseña:</label>
                            <input type="text" id="password" name="password" required>
                    </div>

                <div class="col s4">
                    <label for="dni">DNI/CIF/Pasaporte:</label>
                    <input type="text" id="dni" name="dni" required>
                </div>
                <div class="col s4">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </div>
                <div class="col s4">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="col s4">
                    <label for="entidad">Entidad/Empresa:</label>
                    <input type="text" id="entidad" name="entidad" required>
                </div>
                <div class="col s4">
                    <label for="cargo">Cargo:</label>
                    <input type="text" id="cargo" name="cargo" required>
                </div>
                <div class="col s4">
                    <label for="tipologia">Tipología:</label>
                    <select id="tipologia" name="tipologia">
                        <option value="">Seleccione...</option>
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                    </select>
                </div>
                <div style="clear:both;"></div>
                <div class="col s4">
                    <label for="experiencia_cpi">¿Tiene experiencia previa en CPI?</label>
                    <div class="switch">
                        <label>
                          No
                          <input type="checkbox" id="experiencia_cpi">
                          <span class="lever"></span>
                          Si
                        </label>
                    </div>
                </div>
                <div class="col s4 anios_experienciaBox">
                    <label for="anios_experiencia">Indique los años de experiencia en CPI:</label>
                    <input type="number" id="anios_experiencia" name="anios_experiencia" min="0">
                </div>
                <div class="col s4">
                    <label for="conoce_mdt">¿Conoce el MDT Salud Andalucía?</label>
                    <div class="switch">
                        <label>
                          No
                          <input type="checkbox" id="conoce_mdt">
                          <span class="lever"></span>
                          Si
                        </label>
                    </div>
                </div>
            </div>

                <div class="col s4">
                    <label for="acepta_tratamiento_datos">Consentimiento uso de datos personales * :
                        Aceptación de tratamiento de datos personales según la Ley Orgánica 3/2018 del 5 de diciembre LOPD.
                        Para más información <a class href='https://juntadeandalucia.es/protecciondedatos.html'>pincha aquí</a>
                    </label>
                    <div class="switch">
                        <label>
                          No
                          <input type="checkbox" id="acepta_tratamiento_datos">
                          <span class="lever"></span>
                          Si
                        </label>
                    </div>
                </div>

                <div class="col s4">
                    <label for="acepta_notificacion">Aceptación de envíos de notificaciones relacionadas con el acto</label>
                    <div class="switch">
                        <label>
                          No
                          <input type="checkbox" id="acepta_notificacion">
                          <span class="lever"></span>
                          Si
                        </label>
                    </div>
                </div>
                <div class="col s12 center-align">
                    <a href="javascript:;" id="savePreinscripcion" class="btn">Inscribirme</a>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
    <div class="container">
        <div class="row center">
        <h5 class="header col s12 light"></h5>
        </div>
    </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
    <div class="section">

    <div class="row">
        <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        
        </div>
    </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
    <div class="container">
        <div class="row center">
        <h5 class="header col s12 light"></h5>
        </div>
    </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
</div>
    

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.parallax').parallax();
            $('select').formSelect();
            var state = false;
            $('.anios_experienciaBox').hide();
            $('#experiencia_cpi').change(function(){
                if(state){
                    state = false;
                    $('.anios_experienciaBox').fadeOut();
                }else{
                    state = true;
                    $('.anios_experienciaBox').fadeIn();
                }
            })
            $('#formulario_inscripcion').submit(function(e) {
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: '/do_register',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        alert(response.success);

                        window.location.href = '/home';
                    },
                    error: function(error) {
                        var errors = error.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $('#' + key + '_error').html(value);
                        });
                    }
                });
            });
                $("#savePreinscripcion").click(function(){
                var name = $('#name').val();
                var apellidos = $('#apellidos').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var entidad = $('#entidad').val();
                var cargo = $('#cargo').val();
                var tipologia = $('#tipologia').val();
                var dni = $('#dni').val();
                var telefono = $('#telefono').val();
                var experiencia_cpi = $('#experiencia_cpi').val();
                var anios_experiencia = $('#anios_experiencia').val();
                var conoce_mdt = $('#conoce_mdt').val();
                var acepta_tratamiento_datos = $('#acepta_tratamiento_datos').val();
                var acepta_notificacion = $('#acepta_notificacion').val();
                var data = {
                    name:name,
                    email:email,
                    password:password,
                    apellidos:apellidos,
                    entidad:entidad,
                    cargo:cargo,
                    tipologia:tipologia,
                    dni:dni,
                    telefono:telefono,
                    experiencia_cpi:experiencia_cpi,
                    anios_experiencia:anios_experiencia,
                    conoce_mdt:conoce_mdt,
                    acepta_tratamiento_datos:acepta_tratamiento_datos,
                    acepta_notificacion:acepta_notificacion,
                    _token:'{{ csrf_token() }}'
                    };
                $.ajax({
                    url: '/do_register',
                    type: 'POST',
                    data: data,
                    success: function(response){
                        if(response.success){
                            M.toast({html: response.message});
                            window.location.reload();
                        }else{
                            M.toast({html: response.message});
                        }
                    }
                });
            });
        });     
    </script>
@endsection