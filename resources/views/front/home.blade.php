@extends('layout')

@section('title')

@endsection

@section('style')

@endsection

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Inscripción</title>
</head>
<body>
    <h1>Formulario de Inscripción</h1>
    <form id="formulario_inscripcion">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </p>
        <p>
                <label for="password">Contraseña:</label>
                <input type="text" id="password" name="password" required>
            </p>
        <p>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>
        </p>
        <p>
            <label for="entidad">Entidad/Empresa:</label>
            <input type="text" id="entidad" name="entidad" required>
        </p>
        <p>
            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required>
        </p>
        <p>
            <label for="tipologia">Tipología:</label>
            <select id="tipologia" name="tipologia" required>
                <option value="">Seleccione...</option>
                <option value="1">Opción 1</option>
                <option value="2">Opción 2</option>
                <option value="3">Opción 3</option>
            </select>
        </p>
        <p>
            <label for="dni">DNI/CIF/Pasaporte:</label>
            <input type="text" id="dni" name="dni" required>
        </p>
        <p>
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
        </p>
        <p>
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
        </p>
        <p>
            <label for="experiencia_cpi">¿Tiene experiencia previa en CPI?</label>
            <br>
            <input type="radio" id="experiencia_cpi_si" name="experiencia_cpi" value="si" required>
            <label for="experiencia_cpi_si">Sí</label>
            <br>
            <input type="radio" id="experiencia_cpi_no" name="experiencia_cpi" value="no" required>
            <label for="experiencia_cpi_no">No</label>
        </p>
        <p>
            <label for="anios_experiencia">Indique los años de experiencia en CPI:</label>
            <input type="number" id="anios_experiencia" name="anios_experiencia" min="0">
        </p>
        <p>
            <label for="conoce_mdt">¿Conoce el MDT Salud Andalucía?</label>
            <br>
            <input type="radio" id="conoce_mdt_si" name="conoce_mdt" value="si" required>
     

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#formulario_inscripcion').submit(function(e) {
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: '/home',
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
        });        
    </script>
@endsection