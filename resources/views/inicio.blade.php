<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTUX | Streetwear & Art Collective</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;700&family=JetBrains+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        :root {
            --fondo: #E3DCD2;    /* Crema Kit */
            --texto: #55736B;    /* Verde Pizarra */
            --acento: #A65D4A;   /* Terracota */
            --blanco: #ffffff;
            --negro: #121212;
            --grid-line: rgba(85, 115, 107, 0.12);
        }

        body { 
            background-color: var(--fondo); 
            color: var(--texto); 
            font-family: 'Montserrat', sans-serif; 
            margin: 0; 
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Estética de Rejilla Técnica */
        .tech-bg {
            background-image: 
                linear-gradient(var(--grid-line) 1px, transparent 1px),
                linear-gradient(90deg, var(--grid-line) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        /* Navbar Minimalista */
        nav {
            display: flex;
            justify-content: flex-end; /* Alineado a la derecha sin el logo de sistema */
            align-items: center;
            padding: 30px 50px;
            position: absolute;
            width: 100%;
            box-sizing: border-box;
            z-index: 100;
        }

        .nav-links a { 
            color: var(--texto);
            text-decoration: none;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.75rem;
            letter-spacing: 3px;
            margin-left: 40px;
            transition: 0.3s;
            text-transform: uppercase;
        }

        .nav-links a:hover { color: var(--acento); }

        /* Hero Section */
        .hero { 
            height: 100vh; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 0 20px;
        }

        /* Elementos flotantes de datos técnicos (Solo el estado inferior) */
        .tech-data {
            position: absolute;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.65rem;
            letter-spacing: 2px;
            opacity: 0.5;
            text-transform: uppercase;
        }

        .data-bl { bottom: 50px; left: 50px; }

        h1 { 
            font-family: 'Bebas Neue', sans-serif;
            font-size: clamp(6rem, 20vw, 15rem); 
            letter-spacing: -4px; 
            margin: 0;
            line-height: 0.8;
            color: var(--texto);
            font-weight: 400;
        }

        .hero-sub {
            font-family: 'JetBrains Mono', monospace;
            letter-spacing: 15px;
            font-size: 0.9rem;
            margin-top: 20px;
            text-transform: uppercase;
            opacity: 0.8;
        }

        /* Botón Estilo Tech-Art */
        .btn-system {
            margin-top: 60px;
            padding: 20px 40px;
            background-color: transparent;
            color: var(--texto);
            border: 1px solid var(--texto);
            text-decoration: none;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.8rem;
            letter-spacing: 4px;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .btn-system:hover {
            background-color: var(--texto);
            color: var(--fondo);
            border-color: var(--texto);
        }

        .btn-system i { font-size: 1rem; transition: 0.3s; }
        .btn-system:hover i { transform: translateX(5px); }

        /* Sección de Información Industrial */
        .info-section {
            padding: 150px 50px;
            background-color: var(--blanco);
            border-top: 1px solid var(--grid-line);
        }

        .info-container {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 100px;
            text-align: left;
        }

        .info-header span {
            color: var(--acento);
            font-family: 'JetBrains Mono';
            font-size: 0.7rem;
            letter-spacing: 5px;
            display: block;
            margin-bottom: 20px;
        }

        .info-header h2 {
            font-family: 'Bebas Neue';
            font-size: 5rem;
            line-height: 1;
            margin: 0;
            color: var(--negro);
        }

        .info-body p {
            font-size: 1.1rem;
            line-height: 1.8;
            font-weight: 300;
            color: var(--texto);
            margin-top: 0;
        }

        .tech-list {
            list-style: none;
            padding: 0;
            margin-top: 40px;
            font-family: 'JetBrains Mono';
            font-size: 0.75rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .tech-list li::before {
            content: "[+] ";
            color: var(--acento);
        }

        /* Animaciones */
        .animate-reveal {
            animation: fadeIn 1.5s cubic-bezier(0.19, 1, 0.22, 1) forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            nav { padding: 20px; justify-content: center; }
            .nav-links a { margin: 0 15px; }
            .info-container { grid-template-columns: 1fr; gap: 40px; }
            .data-bl { display: none; }
        }
    </style>
</head>

<body class="tech-bg"> 
    <nav>
        <div class="nav-links">
            <a href="/">INICIO</a>
            <a href="/tienda">TIENDA</a>
            <a href="/contacto">CONTACTO</a>
        </div>
    </nav>

    <div class="hero">
        <div class="animate-reveal" style="text-align: center;">
            <h1>VENTUX</h1> 
            <p class="hero-sub">Streetwear & Art Collective</p>
            <div style="display: flex; justify-content: center;">
                <a href="/tienda" class="btn-system">
                    EXPLORAR CATÁLOGO <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>

        <div class="tech-data data-bl">
            [STATUS: SYSTEM_READY]<br>
            LOAD_TIME: 0.04s
        </div>
    </div>

    <section class="info-section">
        <div class="info-container">
            <div class="info-header">
                <span>NEW_COLLECTION_2026</span>
                <h2>ORIGINS VOL. 1</h2>
            </div>
            <div class="info-body">
                <p>
                    Una propuesta técnica que redefine el streetwear local a través de la arquitectura brutalista y la ingeniería de datos. Cada pieza es un módulo diseñado para el colectivo.
                </p>
                <ul class="tech-list">
                    <li>HEAVY_COTTON_250GSM</li>
                    <li>OVERSIZED_FIT_PATTERN</li>
                    <li>INDUSTRIAL_SCREEN_PRINT</li>
                    <li>LIMITED_DATA_DROP</li>
                </ul>
            </div>
        </div>
    </section>

    <footer style="padding: 60px; text-align: center; border-top: 1px solid var(--grid-line); font-family: 'JetBrains Mono'; font-size: 0.6rem; opacity: 0.5;">
        VENTUX STUDIO © 2026 // ALL_RIGHTS_RESERVED // DESIGNED_IN_PORTUGUESA
    </footer>
</body>
</html>