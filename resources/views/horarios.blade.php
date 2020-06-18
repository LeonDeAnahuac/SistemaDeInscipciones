<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Inscripciones</title>
    <link rel="stylesheet" href={{ asset('css/reset.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>  
</head>
<body>
    <div id="header">
        <div class="header-widget-full">
            <div class="header-widget-inner">
                <div class="col4-1">
                    <a href="http://www.unam.mx"><img src={{ asset('img/logo_unam_blanco.png') }} width="298" height="100"></a>
                </div>
                <div class="col4-1">&nbsp;</div>
                <div class="col4-1">&nbsp;</div>
                <div class="col4-1">
                    <a href="http://www.filos.unam.mx/"><img src={{ asset('img/logo_blanco_colores_ffyl.png') }} width="298" height="100"></a>
                </div>
                <div style="clear:both;"></div>
            </div>
            <nav>
                <ul id="main-nav">
                    <li><a href="http://www.filos.unam.mx/nuestra-facultad/">nuestra facultad</li>
                    <li><a href="http://www.filos.unam.mx/programas_academicos/">programas academicos</a></li>
                    <li><a href="http://www.filos.unam.mx/investigacion/">investigacion</a></li>
                    <li><a href="http://www.filos.unam.mx/publicaciones/">publicaciones</a></li>
                    <li><a href="http://www.filos.unam.mx/comunidad-ffyl/">comunidad ffyl</a></li>
                    <li><a href="http://www.filos.unam.mx/extension/">extension</a></li>
                    <li><a href="http://www.filos.unam.mx/equidad-de-genero/">equidad de genero</a></li>
                    <li><a href="http://sistemaintegral.filos.unam.mx/">sistema integral</a></li>
                    <li><a href="http://www.transparencia.unam.mx/">transparencia</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="info-central">
        <h1>Horarios Semestre 2020-2</h1>
        <table class="horarios">
        <thead>
            <th>Grupo</th>
            <th>Materia</th>
            <th>Profesor</th>
            <th>Salon</th>
        </thead>
        <tbody>
        @foreach($materias as $materia)
            @foreach($materia->profesors as $profesor)
            <tr>
            <td>{{ $profesor->pivot->clave }}</td>
            <td>[ {{ $materia->nombre }} ]</td>   
            <td>{{ $profesor->nombre }}</td> 
            <td>{{ $profesor->pivot->salon }}</td>
            </tr>
            @endforeach
        @endforeach
        </tbody>
        </table>
    </div>
</body>
</html>