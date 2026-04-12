<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>VENTUX | Inicio</title> <style>
        body { 
            background-color: #000; 
            color: #fff; 
            font-family: 'Courier New', monospace; 
            margin: 0; 
            text-align: center; 
            overflow-x: hidden;
        }
        
        h1 { 
            font-family: 'Bebas Neue', sans-serif;
            font-size: 6rem; /* Subí un poco el tamaño para compensar */
            letter-spacing: 20px; /* Cambio 2: Más espacio para un look más pro */
            border-bottom: 2px solid #ff0000; 
            display: inline-block;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .hero { 
            height: 100vh; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://images.alphacoders.com/649/thumb-1920-649533.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; 
            text-align: center;
            color: white;
        }

        .btn-principal {
            margin-top: 30px;
            padding: 15px 40px;
            background-color: #ff0000;
            color: #fff;
            text-decoration: none;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.5rem;
            letter-spacing: 2px;
            transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: none;
            cursor: pointer;
        }

        .btn-principal:hover {
            background-color: #fff;
            color: #ff0000;
            transform: scale(1.1) rotate(-2deg); 
        }

        .coming-soon-section {
            padding: 100px 20px;
            background: linear-gradient(180deg, #000 0%, #0a0a0a 100%);
        }

        .drop-card {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #222;
            padding: 40px;
            transition: 0.5s;
        }

        .drop-card:hover {
            border-color: #ff0000;
            background: rgba(255, 0, 0, 0.02);
        }

        .flicker {
            animation: flicker 2s infinite;
            color: #ff0000;
            font-family: 'Bebas Neue';
            letter-spacing: 2px;
        }

        @keyframes flicker {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.3; }
        }
    </style>
    
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body> 
    <x-navbar tipo="inicio" /> 

    <div class="hero">
        <div style="animation: fadeInUp 1s ease-out;">
            <h1>VENTUX</h1> 
            <p style="letter-spacing: 5px; color: #aaa;">STREETWEAR & ANIME CULTURE</p>
            <a href="/tienda" class="btn-principal">EXPLORAR COLECCIÓN</a>
        </div>
    </div>

    <section class="coming-soon-section">
        <div class="drop-card">
            <h2 class="flicker">PRÓXIMO DROP</h2>
            <h3 style="font-family: 'Bebas Neue'; font-size: 2.5rem; margin: 10px 0;">ORIGINS VOL. 1</h3>
            <p style="color: #666; line-height: 1