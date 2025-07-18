<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diploma FESC - {{ $user->name }}</title>
    <style>@page{size:letter landscape;margin:0}*{margin:0;padding:0;box-sizing:border-box}.font-sans{font-family:'Arial',sans-serif}.font-serif{font-family:'Times New Roman',serif}.h-full{height:100%}body{background-color:#fff;height:100vh;overflow:hidden}.principal-container{width:100%;height:100vh;margin:0;background-color:#fff}.contenedor-diploma{width:100%;height:100vh;position:relative;background-color:#fff}.esquina-superior-derecha{position:absolute;top:0;right:0;z-index:40}.esquina-superior-izquierda{position:absolute;top:0;left:0;z-index:40}.esquina-inferior-derecha{position:absolute;bottom:0;right:0;z-index:40}.esquina-inferior-izquierda{position:absolute;bottom:0;left:0;z-index:40}.logo-fesc-proyectando{position:absolute;top:1.5rem;left:50%;transform:translateX(-50%);z-index:50}.logo-fesc-proyectando img{width:22rem;height:auto}.logo-mineducacion{position:absolute;top:25%;left:-3rem;transform:translateY(-50%) rotate(-90deg);z-index:50}.logo-mineducacion img{width:10rem}.fondo-inferior-izquierda{position:absolute;bottom:-3.5rem;left:-4.5rem;z-index:10}.fondo-inferior-izquierda img{width:15rem}.fondo-inferior-derecha{position:absolute;bottom:-10rem;right:3rem;z-index:10}.fondo-inferior-derecha img{width:15rem;transform:rotate(-30deg)}.fondo-superior-derecha{position:absolute;top:5rem;right:-7.5rem;z-index:10}.fondo-superior-derecha img{width:15rem}.contenido-principal{position:relative;z-index:30;display:flex;flex-direction:column;justify-content:center;align-items:center;width:100%;height:100vh}.contenido-diploma{position:relative;z-index:20;width:100%;height:100%}.titulo-principal{position:absolute;top:11rem;left:50%;transform:translateX(-50%);text-align:center;font-size:1.5rem;line-height:1.5rem;color:#1f2937;width:90%;font-style:italic;font-weight:500}.certifican{position:absolute;top:14rem;left:50%;transform:translateX(-50%);font-size:1.75rem;line-height:2rem;text-align:center;color:#1f2937;width:100%;font-style:italic}.nombre{position:absolute;top:17rem;left:50%;transform:translateX(-50%);font-size:3.5rem;line-height:1;width:80%;text-align:center;color:#000;border-bottom:3px solid #1f2937;font-style:italic;font-weight:500}.documento{position:absolute;top:21rem;left:50%;transform:translateX(-50%);font-size:1.75rem;line-height:1.75rem;text-align:center;color:#1f2937;width:100%}.asistio{position:absolute;top:24rem;left:50%;transform:translateX(-50%);font-size:1.375rem;line-height:1.75rem;color:#1f2937;text-align:center;width:100%;font-style:italic}.nombre-evento{position:absolute;top:26rem;left:50%;transform:translateX(-50%);font-size:3.25rem;line-height:1.1;text-align:center;color:#000;font-weight:300;width:95%}.participacion{position:absolute;top:30rem;left:50%;transform:translateX(-50%);font-size:1.5rem;line-height:1.75rem;text-align:center;color:#1f2937;width:90%;font-style:italic}.fecha-realizacion{position:absolute;top:35rem;left:50%;transform:translateX(-50%);font-size:1rem;line-height:1.5rem;text-align:center;color:#1f2937;width:90%;font-style:italic}.contenedor-firma{position:absolute;top:44rem;left:50%;transform:translateX(-50%);width:20rem;text-align:center}.nombre-firma{white-space:nowrap}.nombre-firma strong{border-top:2px solid #000;padding-top:.5rem;display:inline-block;font-size:1.125rem}.imagen-firma{position:absolute;top:34rem;left:50%;transform:translateX(-50%);z-index:50}.firma{width:15rem;height:auto}@media print{body{-webkit-print-color-adjust:exact;color-adjust:exact}}</style>
</head>
<body class="h-full">

    <!-- Contenedor principal del diploma -->
    <div class="principal-container h-full">

        <!-- =========== Aqui inicia el contenedor general del diploma =========== -->
        <div class="h-full contenedor-diploma">

            <!-- =========== Aqui inicia el uso de las esquinas decorativas =========== -->

                <!-- Esquina superior derecha -->
                <div class="esquina-superior-derecha">
                    <img src="{{ public_path('images/Right-top-corner.webp') }}" alt="Esquina superior derecha">
                </div>

                <!-- Esquina superior izquierda -->
                <div class="esquina-superior-izquierda">
                    <img src="{{ public_path('images/Left-top-corner.webp') }}" alt="Esquina superior izquierda">
                </div>

                <!-- Esquina inferior derecha -->
                <div class="esquina-inferior-derecha">
                    <img src="{{ public_path('images/Bottom-right-corner.webp') }}" alt="Esquina inferior derecha">
                </div>

                <!-- Esquina inferior izquierda -->
                <div class="esquina-inferior-izquierda">
                    <img src="{{ public_path('images/Bottom-left-corner.webp') }}" alt="Esquina inferior izquierda">
                </div>

            <!-- =========== Aqui finaliza el uso de las esquinas decorativas =========== -->

            <!-- *************************************************************************************** -->

            <!-- =========== Aqui inicia el uso de la imagenes de fondo del diploma =========== -->

            <!-- Fondo del diploma esquina inferior izquierda -->
            <div class="fondo-inferior-izquierda">
                <img src="{{ public_path('images/EJE-01.png') }}">
            </div>

            <!-- Fondo del diploma esquina inferior derecha -->
            <div class="fondo-inferior-derecha">
                <img src="{{ public_path('images/EJE-02.png') }}">
            </div>

            <!-- Fondo del diploma esquina superior derecha -->
            <div class="fondo-superior-derecha">
                <img src="{{ public_path('images/EJE-03.png') }}">
            </div>
            <!-- *************************************************************************************** -->

            <!-- =========== Aqui inicia el uso de los logos del diploma =========== -->

            <!-- Logo FESC & PROYECTANDO -->
            <div class="logo-fesc-proyectando">
                <img src="{{ public_path('images/LOGO_PROYECTANDO.webp') }}" alt="Logo FESC y Proyectando">
            </div>

            <!-- Logo MinEducacion lateral izquierdo -->
            <div class="logo-mineducacion">
                <img src="{{ public_path('images/LOGO_MINEDUCACION.png') }}" alt="Logo FESC y Proyectando">
            </div>

            <!-- =========== Aqui finaliza el uso de los logos del diploma =========== -->

            <!-- *************************************************************************************** -->

            <!-- =========== Aqui inicia el contenido principal del diploma =========== -->
            <div class="h-full contenido-principal">  

                <!-- Contenido del diploma -->
                <!-- =========== Aqui inicia el contenido de textos para el diploma =========== -->

                <div class="contenido-diploma">
                    <!-- Título principal -->
                    <h1 class="titulo-principal font-serif">
                        Proyectando y la Fundación de Estudios Superiores Comfanorte - FESC
                    </h1>

                    <span class="certifican font-serif">
                        Certifican que:
                    </span>
                    
                    <!-- Nombre del participante -->
                    <!-- Se obtiene el nombre dinamicamente segun la ID del participante -->
                    <h1 class="nombre font-serif">{{ $user->name }}</h1>

                    <!-- Documento de Identidad del participante-->
                    <!-- Se obtiene el documento dinamicamente segun la ID del participante -->
                    <span class="documento font-sans">
                        D.I. {{ $user->documento_identidad }}
                    </span>
                    
                    <span class="asistio font-serif">
                        Asistió al
                    </span>
                    
                    <!-- Nombre del evento -->
                    <h1 class="nombre-evento font-sans">V Congreso Internacional Proyectando</h1>

                    <!-- Texto de participación -->
                    <span class="participacion font-serif">
                        "Impulsamos el Desarrollo Turístico y Productivo de Norte de Santander<br>
                        a través de la educación superior."
                    </span>

                    <!-- Fechas de realización -->
                    <h1 class="fecha-realizacion font-sans">
                        Realizado los días 21, 22, 23 y 24 de octubre de 2025 en la ciudad de San José de Cúcuta, Colombia.<br>
                        Se firma a los 10 días del mes de noviembre de 2025.
                    </h1>

                    <!-- =========== Se inicia el contenedor ded uso de la firma en imagen =========== -->
                    <!-- Imagen de la firma -->
                    <div class="imagen-firma">
                        <img src="{{ public_path('images/FIRMA_RECTORA.png') }}" alt="Firma" class="firma">
                    </div>
                    <!-- =========== Aqui finaliza el contendor de la imagen de la firma =========== -->
                    
                    <!-- *************************************************************************************** -->

                    <!-- =========== Aqui inicia el contendor de textos para la firma =========== -->
                    <!-- Contenedor para los textos de firma -->
                    <div class="contenedor-firma">
                        <span class="font-sans nombre-firma">
                            <!-- Nombre de la persona que firma -->
                            <strong>Carmen Cecilia Quero de González</strong>
                            <br>
                            <!-- Cargo de la persona que firma -->
                            Rectora FESC
                        </span>
                    </div> <!-- =========== Aqui finaliza el contendor de textos para la firma =========== -->
                </div> <!-- =========== Aqui finaliza el contenido de textos para el diploma =========== -->
            </div> <!-- =========== Aqui finaliza el contenido principal del diploma =========== -->
        </div> <!-- =========== Aqui finaliza el contenedor general del diploma =========== -->
    </div>
</body>
</html>