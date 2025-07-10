<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diploma FESC</title>
    <style>

        *, *::before, *::after {
            box-sizing: border-box;
        }
        
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        html{
            height: 100%;
        }

        body{
            
            height: 100%;
            background-color: #f3f4f6; /* Tailwind's gray-100 */
        }

        @font-face {
            font-family: 'Montserrat Alternates';
            src: url('{{ public_path('fonts/MontserratAlternates-Regular.ttf') }}') format('truetype');
        }
    
        @font-face {
            font-family: 'Great vibes';
            src: url('{{ public_path('fonts/GreatVibes-Regular.ttf') }}') format('truetype');
        }

        .font-title {
            font-family: 'Montserrat Alternates', serif;
        }
        
        .font-cursive {
            font-family: 'Great vibes', cursive;
        }


        .border-gradient-red{
            padding: 2rem;
            margin: auto;
            height: 100%;
            width: 100%;
            background: linear-gradient(to bottom, #841315, #E10600, #841315);
        }

        .first-bg-white{
            position: relative;
            height: 100%;
            width: 100%;
            background-color: #ffffff; /* Tailwind's white */
        }

        .svg-right-bottom{
            position: absolute;
            bottom: -32px;
            right: -32px;
            z-index: 40;
            transform: rotate(180deg);
        }

        .svg-left-top{
            position: absolute;
            top: -32px;
            left: -32px;
            z-index: 40;
        }

        .fesc-logo{
            position: absolute;
            top: 4rem;
            z-index: 50;
        }

        .fesc-logo img {
            height: auto;
        }
        
        @media (min-width: 640px) {
            .fesc-logo{
                left: 3.5rem;
            }

            .fesc-logo img{
                width: 8rem; /* Tailwind's w-32 */
            }
        }

        @media (min-width: 1024px) {
            .fesc-logo{
                left: 7rem;
            }

            .fesc-logo img {
                width: 12rem; /* Tailwind's w-48 */
            }
        }


        .logo-proyectando{
            position: absolute;
            top: 4rem;
            z-index: 50;
        }

        .logo-proyectando img {
            height: auto;
        }
        
        
        @media (min-width: 640px) {
            .logo-proyectando{
                right: 3.5rem;
            }
            
            .logo-proyectando img {
                width: 7rem; /* Tailwind's w-28 */
            }
        }
        
        @media (min-width: 1024px) {
            .logo-proyectando{
                right: 7rem;
            }

            .logo-proyectando img {
                width: 9rem; /* Tailwind's w-36 */
            }
        }

        .logo-mineducacion{
            position: absolute;
            top: 50%;
            left: -3rem; /* Ajusta según sea necesario */
            transform: translateY(-50%) rotate(-90deg);
            z-index: 50;
        }

        .logo-mineducacion img {
            height: auto;
            width: 8rem; /* Tailwind's w-32 */
        }

        .principal-content{
            position: relative;
            z-index: 30;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            padding: 2rem;
            padding-top: 2rem;
            gap: 1.5rem;
        }

        .external-golden-border{
            background: linear-gradient(to right, #fef08a, #facc15, #fef08a);
            padding: 2px;
            width: 100%;
            height: 100%;
            margin: auto;
        }

        .second-bg-white{
            position: relative;
            height: 100%;
            width: 100%;
            background-color: #ffffff; /* Tailwind's white */
            padding: 0.5rem;
        }

        .internal-golden-border{
            background: linear-gradient(to right, #fef08a, #facc15, #fef08a);
            padding: 4px;
            width: 100%;
            height: 100%;
            margin: auto;
        }

        .third-bg-white{
            position: relative;
            height: 100%;
            width: 100%;
            background-color: #ffffff; /* Tailwind's white */
        }

        .crown-background{
            position: absolute;
            inset: 0;
            z-index: 0;
            background-image: url('{{ public_path('images/corona_triunfal.svg') }} '); 
            background-size: 55rem 55rem;
            background-repeat: no-repeat;
            background-position: center;
        }

        .content{
            position: relative;
            z-index: 10;
        }

        .main-title{
            position: absolute;
            top: 0.5rem;
            left: 50%;
            transform: translateX(-50%);
            font-weight: bold;
            color: #1f2937; /* Tailwind's gray-800 */
            text-align: center;
        }

        
        @media (min-width: 640px) {
            .main-title{
                font-size: 1.875rem; /* Tailwind's text-3xl */
                line-height: 2.25rem; /* Tailwind's text-3xl */
            }
        }
        
        @media (min-width: 1024px) {
            .main-title{
                font-size: 3rem; /* Tailwind's text-3xl */
                line-height: 1; /* Tailwind's text-3xl */
            }
        }
        
        .otorgado-a{
            position: absolute;
            top: 11rem;
            left: 50%;
            transform: translateX(-50%);
            color: #4b5563; /* Tailwind's gray-600 */
        }

        @media (min-width: 1024px) {
            .otorgado-a{
                font-size: 1.25rem; /* Tailwind's text-xl */
                line-height: 1.75rem; /* Tailwind's text-xl */
            }
        }

        .nombre-participante{
            position: absolute;
            top: 13rem;
            left: 50%;
            transform: translateX(-50%);
            border-bottom: 2px solid #6b7280;
            white-space: nowrap;
            font-weight: 500;
        }

        
        @media (min-width: 640px) {
            .nombre-participante{
                font-size: 2.5rem; /* Tailwind's text-5xl */
            }
        }
        
        @media (min-width: 1024px) {
            .nombre-participante{
                font-size: 3rem; /* Tailwind's text-5xl */
                line-height: 1; /* Tailwind's text-5xl */
            }
        }

        .participation-text{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        
        @media (min-width: 640px) {
            .participation-text{
                width: 80%;
                top: 21rem;
                margin-top: 2.5rem;
            }
        }
        
        @media (min-width: 1024px) {
            .participation-text{
                width: 70%;
                top: 19rem;
            }
        }

        .signature-container{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 56rem;
        }

        
        @media (min-width: 640px) {
            .signature-container{
                top: 30rem;
            }
        }
        
        @media (min-width: 1024px) {
            .signature-container{
                top: 26rem;
            }
        }

        .signature-container-2{
            display: flex;
            justify-content: center;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        
        @media (min-width: 640px) {
            .signature-container-2{
                gap: 6rem;
                margin-top: 2rem;
            }
        }
        
        @media (min-width: 1024px) {
            .signature-container-2{
                gap: 12rem;
            }
        }

        .date-location-text{
            text-align: center;
            border-top: 2px solid #6b7280; /* Tailwind's gray-500 */
            padding-top: 0.5rem;
            white-space: nowrap;
            width: 15rem;
        }

        .signature-text{
            text-align: center;
            border-top: 2px solid #6b7280; /* Tailwind's gray-500 */
            padding-top: 0.5rem;
            width: 15rem;
        }

        .participation-medal{
            position: absolute;
        }

        .participation-medal img {
            width: 12rem; /* Tailwind's w-48 */
            height: auto;
        }

        
        @media (min-width: 640px) {
            .participation-medal{
                bottom: -15rem;
                left: 12rem;
            }
        }

        @media (min-width: 1024px) {
            .participation-medal{
                bottom: -12rem;
                left: 22rem;
            }
        }
        </style>
    
</head>
<body>

    <div class="border-gradient-red">
        
        <div class="first-bg-white">
            
            <div class="svg-right-bottom">
                <!-- SVG Esquina superior derecha -->
                <svg width="316" height="255" viewBox="0 0 316 255" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M315 1C157 27.5 63 93.5 1 254V161V119V1H315Z" fill="#E10600" stroke="#E10600"/>
                    <path d="M1 161V120.875C87.3485 45.6395 140.256 25.5768 276.018 1H286C151.236 28.5862 78.8064 68.9239 1 161Z" fill="#841315" stroke="#841315"/>
                </svg>
            </div>
            
            <div class="svg-left-top">
                <!-- SVG Esquina superior izquierda -->
                <svg width="316" height="255" viewBox="0 0 316 255" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M315 1C157 27.5 63 93.5 1 254V161V119V1H315Z" fill="#E10600" stroke="#E10600"/>
                    <path d="M1 161V120.875C87.3485 45.6395 140.256 25.5768 276.018 1H286C151.236 28.5862 78.8064 68.9239 1 161Z" fill="#841315" stroke="#841315"/>
                </svg>
            </div>
            

            <!-- Logo FESC (superior izquierda) -->
            <div class="fesc-logo">
                <img src="{{ public_path('images/Logo_FESC.png') }}" alt="Logo FESC">
            </div>

            <!-- Logo Proyectando (superior derecha) -->
            <div class="logo-proyectando">
                <img src="{{ public_path('images/logo_Proyectando_2025.png') }}" alt="Logo Proyectando">
            </div>

            <!-- Logo MinEducacion lateral izquierdo -->
            <div class="logo-mineducacion">
                <img src="{{ public_path('images/Logo_MINEDUCACION.png') }}" alt="">
            </div>

            <!-- Contenido principal -->
            <div class="principal-content">
                
                <!-- Borde externo delgado dorado -->
                <div class="external-golden-border">
                    <div class="second-bg-white">
                        
                        <!-- Borde interno grueso dorado -->
                            <div class="internal-golden-border">

                                <div class="third-bg-white">
                                    
                                    <!-- Corona de espigas de fondo -->
                                    <div class="crown-background"></div>
                                    
                                    <!-- Contenido del diploma con z-index mayor -->
                                    <div class="content">

                                        <!-- Título principal -->
                                        <h1 class="main-title font-title">
                                            DIPLOMA DE<br>PARTICIPACIÓN
                                        </h1>
                                        
                                        <!-- "Otorgado a:" centrado -->
                                        <span class="otorgado-a">Otorgado a:</span>
                                        
                                        <!-- Nombre centrado dinámicamente -->
                                        <h1 class="nombre-participante font-cursive">{{ $users->name }}</h1>
                                        
                                        <!-- Texto de participación centrado -->
                                        <span class="participation-text">Por su participación en el V Congreso Internacional Proyectando: Impulsando el desarrollo turístico y productivo de Norte de Santander, a través de la educación superior.</span>
                                        
                                        <!-- Contenedor para los dos textos de firma -->
                                        <div class="signature-container">

                                            <div class="signature-container-2">
                                                <!-- Texto de fecha y lugar -->
                                                <span class="date-location-text font-title">
                                                    Fecha y Lugar del Evento
                                                </span>
                                                
                                                <!-- Medalla de participación -->
                                                <div class="participation-medal">
                                                    <img src="{{ public_path('images/medalla.png') }}" alt="">
                                                </div>

                                                <!-- Texto de Firma -->
                                                <span class="signature-text font-title">
                                                    Firma Autorizada
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        
                    </div>
                </div>
                
            </div>

        </div>

    </div>

</body>
</html>