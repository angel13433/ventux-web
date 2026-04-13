<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VENTUX // DEEP_SYSTEM_OS</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;700&family=JetBrains+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        :root {
            --fondo-profundo: #0a0f0d; 
            --fondo-kit: #E3DCD2;    
            --texto-suave: rgba(227, 220, 210, 0.5);
            --verde-pizarra: #55736B; 
            --acento-rojo: #A65D4A;   
            --terminal-glow: rgba(166, 93, 74, 0.15);
        }

        body { 
            background-color: var(--fondo-profundo); 
            color: var(--fondo-kit); 
            font-family: 'Montserrat', sans-serif; 
            margin: 0; 
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        .tech-bg {
            background-image: 
                radial-gradient(circle at 50% -20%, rgba(85, 115, 107, 0.15), transparent 80%),
                linear-gradient(rgba(166, 93, 74, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(166, 93, 74, 0.02) 1px, transparent 1px);
            background-size: 100% 100%, 30px 30px, 30px 30px;
            background-attachment: fixed;
        }

        .system-top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            border-bottom: 1px solid rgba(227, 220, 210, 0.1);
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            color: var(--verde-pizarra);
            text-transform: uppercase;
            letter-spacing: 2px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            background: rgba(10, 15, 13, 0.8);
            backdrop-filter: blur(10px);
            box-sizing: border-box;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a { 
            color: var(--fondo-kit);
            text-decoration: none;
            font-family: 'JetBrains Mono';
            font-size: 10px;
            transition: 0.3s;
        }

        .nav-links a:hover { color: var(--acento-rojo); }

        .hero { 
            height: 100vh; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            padding: 0 20px;
        }

        /* --- ESTILO ACTUALIZADO PARA EL LOGOTIPO --- */
        .hero-logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 600px; /* Tamaño ideal para el logo horizontal */
            margin: 0 auto;
        }

        .hero-logo-container img {
            width: 100%;
            height: auto;
            object-fit: contain;
            /* Resplandor técnico */
            filter: drop-shadow(0 0 15px rgba(85, 115, 107, 0.2));
        }

        .corner-data {
            position: absolute;
            font-family: 'JetBrains Mono';
            font-size: 8px;
            color: var(--verde-pizarra);
            opacity: 0.5;
            text-transform: uppercase;
        }
        .top-l { top: 80px; left: 40px; }
        .bot-r { bottom: 40px; right: 40px; }

        .hero-sub {
            font-family: 'JetBrains Mono', monospace;
            letter-spacing: 12px;
            font-size: clamp(0.55rem, 2vw, 0.9rem);
            margin-top: 40px; 
            text-transform: uppercase;
            color: var(--acento-rojo);
            text-align: center;
        }

        .btn-system {
            margin-top: 60px;
            padding: 20px 50px;
            background-color: transparent;
            color: var(--fondo-kit);
            border: 1px solid rgba(227, 220, 210, 0.3);
            text-decoration: none;
            font-family: 'JetBrains Mono', monospace;
            font-size: 10px;
            letter-spacing: 4px;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .btn-system:hover {
            background-color: var(--fondo-kit);
            color: var(--fondo-profundo);
            box-shadow: 0 0 30px var(--terminal-glow);
        }

        .info-section {
            padding: 100px 40px;
            background-color: rgba(227, 220, 210, 0.02);
            border-top: 1px solid rgba(227, 220, 210, 0.05);
        }

        .info-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .info-header h2 {
            font-family: 'Bebas Neue';
            font-size: clamp(3.5rem, 8vw, 7rem);
            line-height: 0.9;
            margin: 0;
            color: var(--fondo-kit);
            text-transform: uppercase;
        }

        .info-body p {
            font-family: 'JetBrains Mono';
            font-size: 0.9rem;
            line-height: 2;
            color: var(--texto-suave);
            border-left: 2px solid var(--acento-rojo);
            padding-left: 30px;
        }

        @media (max-width: 768px) {
            .system-top-bar { padding: 15px 20px; }
            .nav-links { display: none; }
            
            .hero-logo-container {
                max-width: 85vw;
            }

            .hero-sub { letter-spacing: 6px; }

            .top-l { top: 70px; left: 20px; }
            .bot-r { bottom: 20px; right: 20px; }

            .info-container { 
                grid-template-columns: 1fr; 
                gap: 40px;
            }
            
            .info-section { padding: 80px 25px; }

            .info-body p {
                padding-left: 20px;
                font-size: 0.85rem;
            }

            footer {
                padding: 60px 25px !important;
            }
            
            footer div {
                flex-direction: column;
                align-items: flex-start !important;
                gap: 20px;
            }
        }

        .animate-reveal {
            animation: fadeIn 1.5s cubic-bezier(0.19, 1, 0.22, 1) forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body class="tech-bg"> 
    <div class="system-top-bar">
        <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 6px; height: 6px; background: var(--acento-rojo); border-radius: 50%;"></div>
            <span>VNTX_CORE_INIT: SUCCESS</span>
        </div>
        <div class="nav-links">
            <a href="/">// INICIO</a>
            <a href="/tienda">// CATALOGO</a>
            <a href="/contacto">// PROTOCOLO_CONTACTO</a>
        </div>
        <span style="opacity: 0.5;">2026_VNTX.SYS</span>
    </div>

    <div class="hero">
        <div class="corner-data top-l">OS_INTERFACE: VER_3.0</div>
        <div class="corner-data bot-r">LOC: 9.55°N 69.20°W</div>

        <div class="animate-reveal" style="text-align: center;">
            
            <div class="hero-logo-container">
                <img src="{{ asset('img/Agrupar.png') }}" alt="VENTUX Collective">
            </div>

            <p class="hero-sub">Streetwear & Art Collective</p>
            <div style="display: flex; justify-content: center;">
                <a href="/tienda" class="btn-system">
                    ACCEDER_AL_CATÁLOGO
                </a>
            </div>
        </div>
    </div>

    <section class="info-section">
        <div class="info-container">
            <div class="info-header">
                <span style="font-family: 'JetBrains Mono'; color: var(--acento-rojo); font-size: 10px; letter-spacing: 5px;">[ DATA_FILE_01 ]</span>
                <h2>ESTÉTICA BRUTALISTA</h2>
            </div>
            <div class="info-body">
                <p>
                    Arquitectura textil diseñada bajo parámetros de ingeniería de datos. Cada prenda es un activo digital materializado. No es moda, es el sistema operativo de tu identidad.
                </p>
            </div>
        </div>
    </section>

    <footer style="padding: 80px 40px; text-align: left; border-top: 1px solid rgba(227, 220, 210, 0.05); font-family: 'JetBrains Mono'; font-size: 10px; color: var(--verde-pizarra);">
        <div style="display: flex; justify-content: space-between; align-items: flex-end;">
            <div>
                VENTUX STUDIO // ALL_RIGHTS_RESERVED<br>
                DESIGNED_IN_PORTUGUESA_VENEZUELA
            </div>
            <div style="text-align: right; opacity: 0.5;">
                [ TERMINAL_STATUS: ONLINE ]<br>
                SECURE_CONNECTION_ENABLED
            </div>
        </div>
    </footer>
</body>
</html>