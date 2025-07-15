<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diploma FESC</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        
        .font-sans {
            font-family: 'Arial', sans-serif;
        }

        .font-serif {
            font-family: 'Times New Roman', serif;
        }

        .h-full{
            height: 100%;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f3f4f6; /* Tailwind's gray-100 */
        }
    

        .principal-container {
            width: 100%;
            margin: auto;
            background-color: #fff; 
        }

        .contenedor-diploma {
            width: 100%;
            position: relative;
            background-color: #fff;
        }

        .esquina-superior-derecha{
            position: absolute;
            top: 0;
            right: 0;
            z-index: 40;
        }

        .esquina-superior-izquierda{
            position: absolute;
            top: 0;
            left: 0;
            z-index: 40;
        }

        .esquina-inferior-derecha{
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: 40;
        }

        .esquina-inferior-izquierda{
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 40;
        }

        .logo-fesc-proyectando {
            position: absolute;
            top: 1rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 50;
        }

        .logo-fesc-proyectando img{
            width: 20rem;
            height: auto;
        }

        .logo-mineducacion {
            position: absolute;
            top: 11rem;
            left: -1.5rem;
            transform: translateY(-50%) rotate(-90deg);
            z-index: 50;
        }

        .logo-mineducacion span {
            border-top: 2px solid #374151; 
            border-bottom: 2px solid #374151; 
            font-size: 7px; 
            color: #374151; 
        }

        .contenido-principal {
            position: relative;
            z-index: 30;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .contenido-diploma {
            position: relative;
            z-index: 20;
            width: 100%;
        }

        .titulo-principal{
            position: absolute;
            top: -10rem;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            font-size: 1.25rem;
            line-height: 1.75rem;
            color: #1f2937;
            text-align: center;
            width: 100%;
            font-style: italic;
        }

        .certifican{
            position: absolute;
            top: -7rem;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem /* 24px */;
            line-height: 2rem /* 32px */;
            text-align: center;
            color: #1f2937;
            width: 100%;
            font-style: italic;
        }

        .nombre{
            position: absolute;
            top: -4rem;
            left: 50%;
            transform: translateX(-50%);
            font-size: 3rem /* 48px */;
            line-height: 1;
            width: 75%;
            text-align: center;
            color: #1f2937;
            border-bottom-width: 2px;
            border-color: #6b7280;
            font-style: italic;
            white-space: nowrap;
        }

        .documento{
            position: absolute;
            top: -0.5rem;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem /* 24px */;
            line-height: 2rem /* 32px */;
            text-align: center;
            color: #1f2937;
            width: 100%;
        }

        .asistio{
            position: absolute;
            top: 2.5rem;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.25rem /* 20px */;
            line-height: 1.75rem /* 28px */;
            color: #1f2937;
            text-align: center;
            width: 100%;
            font-style: italic;
        }

        .nombre-evento{
            position: absolute;
            top: 4rem;
            left: 50%;
            transform: translateX(-50%);
            font-size: 3rem /* 48px */;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            color: #1f2937;
            font-weight: 500; /* Medium */
        }

        .participacion{
            position: absolute;
            top: 8rem;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem /* 24px */;
            line-height: 2rem /* 32px */;
            text-align: center;
            color: #1f2937;
            width: 100%;
            font-style: italic;
        }

        .fecha-realizacion{
            position: absolute;
            top: 13rem;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.25rem /* 20px */;
            line-height: 1.75rem /* 28px */;
            text-align: center;
            color: #1f2937;
            width: 100%;
            font-style: italic;
        }

        .contenedor-firma {
            position: absolute;
            top: 23rem;
            left: 50%;
            transform: translateX(-50%);
            width: 16%;
            text-align: center;
        }

        .nombre-firma{
            white-space: nowrap;
        }

        .nombre-firma strong{
            border-top-width: 2px;
            border-color: #000;
            padding-top: 0.25rem;
        }

        .imagen-firma{
            position: relative;
            top: 16rem;
            left: 1rem;
            z-index: 50;
        
        }

        .firma{
            width: 12rem; /* Adjust as needed */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body class="h-full">
    
    <!-- Contenedor principal del diploma -->
    <div class="principal-container h-full">
        <!-- Contenedor del diploma -->
        <div class="h-full contenedor-diploma">
            <!-- Esquina superior derecha -->
            <div class="esquina-superior-derecha">
                <!-- SVG Esquina superior derecha -->
                <img src="{{ asset('images/Right-top-corner.png') }}" alt="Esquina superior derecha" >
            </div>
            
            <div class="esquina-superior-izquierda">
                <!-- SVG Esquina superior izquierda -->
                <img src="{{ asset('images/Left-top-corner.png') }}" alt="Esquina superior izquierda" >
            </div>

            <div class="esquina-inferior-derecha">
                <!-- SVG Esquina inferior derecha -->
                <img src="{{ asset('images/Bottom-right-corner.png') }}" alt="Esquina inferior derecha" >

            </div>
            
            <div class="esquina-inferior-izquierda">
                <!-- SVG Esquina inferior izquierda -->
                <img src="{{ asset('images/Bottom-left-corner.png') }}" alt="Esquina inferior izquierda" >
            </div>

            <!-- Logo FESC & PROYECTANDO -->
            <div class="logo-fesc-proyectando">
                <img src="{{ asset('images/LOGO_PROYECTANDO.png') }}" alt="Logo FESC">
            </div>

            <!-- Logo MinEducacion lateral izquierdo -->
            <div class="logo-mineducacion">
                <span>VIGILADA MINEDUCACIÓN</span>
            </div>

            <!-- Contenido principal -->
            <div class=" h-full contenido-principal">
                <!-- Contenido del diploma -->
                <div class="contenido-diploma">
                    <!-- Título principal -->
                    <h1 class="titulo-principal font-serif">
                        Proyectando y la Fundación de Estudios Superiores Comfanorte - FESC
                    </h1>

                    <span class="certifican font-serif">
                        Certifican que:
                    </span>
                    
                    <!-- Nombre centrado dinámicamente -->
                    <h1 class="nombre font-serif ">Nick Alejandro Ortega Mendez</h1>

                    <!-- Documento de Identidad -->
                    <span class="documento font-sans">
                        D.I. 1091357666
                    </span>
                    
                    <!-- Asistió al -->
                    <span class="asistio font-serif">
                        Asistió al
                    </span>
                    
                    <!-- Nombre del evento -->
                    <h1 class="nombre-evento font-sans">V Congreso Internacional Proyectando</h1>

                    <!-- Texto de participación centrado -->
                    <span class="participacion font-serif">
                        "Impulsamos el Desarrollo Turístico y Productivo de Norte de Santander 
                        <br> 
                        a través de la educación superior."
                    </span>

                    <!-- Fechas de realización -->
                    <h1 class="fecha-realizacion font-sans">
                        Realizado los dias 21, 22, 23 y 24 de octubre de 2025 en la ciudad de San José de Cúcuta, Colombia.
                        <br>
                        Se firma a los 10 días del mes de noviembre de 2025.
                    </h1>

                    <!-- Contenedor para los dos textos de firma -->
                    <div class="contenedor-firma">

                        <span class="font-sans nombre-firma">
                            <strong>Carmen Cecilia Quero de González</strong>
                            <br>
                            Rectora FESC
                        </span>
                    </div>
                </div>
                <!-- Imagen de la firma -->
                <div class="relative top-64 left-4 z-50">
                    <img src="{{ asset('images/firma_ejemplo.png') }}" alt="" class="firma">
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>