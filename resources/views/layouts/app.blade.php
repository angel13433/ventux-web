<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTUX | @yield('title', 'System')</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;700&family=JetBrains+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css'])
    
    <style>
        :root {
            --fondo: #E3DCD2;    /* Crema Kit */
            --texto: #55736B;    /* Verde Pizarra */
            --acento-rojo: #A65D4A;
            --grid-line: rgba(85, 115, 107, 0.12);
        }

        /* Rejilla Técnica Global */
        .tech-bg {
            background-color: var(--fondo);
            background-image: 
                linear-gradient(var(--grid-line) 1px, transparent 1px),
                linear-gradient(90deg, var(--grid-line) 1px, transparent 1px);
            background-size: 40px 40px;
            background-attachment: fixed;
            margin: 0;
            min-height: 100vh;
        }

        /* --- NUEVO: Estilos Navegación Global --- */
        .global-nav {
            display: flex;
            justify-content: flex-end; /* Alineado a la derecha como en tu inicio */
            padding: 30px 60px;
            gap: 40px;
            position: relative;
            z-index: 1001;
        }

        .nav-link {
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
            color: var(--texto);
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: 0.3s ease;
        }

        .nav-link:hover {
            color: var(--acento-rojo);
        }

        .nav-link.active {
            font-weight: bold;
            border-bottom: 1px solid var(--acento-rojo);
        }
        /* --------------------------------------- */

        .whatsapp-float {
            position: fixed;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 1000;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }
    </style>

    @yield('extra-css')
</head>
<body class="tech-bg">

    <nav class="global-nav">
        <a href="{{ url('/') }}" class="nav-link">INICIO</a>
        <a href="{{ url('/tienda') }}" class="nav-link">TIENDA</a>
        <a href="https://wa.me/584125245470" target="_blank" class="nav-link">CONTACTO</a>
    </nav>

    <a href="https://wa.me/584125245470" class="whatsapp-float" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <main>
        @yield('content')
    </main>

    @yield('scripts')
</body>
</html>