@props(['tipo' => 'inicio']) 

<nav style="background: #000; padding: 20px 5%; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #111;">
    
    <div>
        @if($tipo == 'tienda')
            <a href="/" style="color: #fff; text-decoration: none; font-family: 'Bebas Neue'; border: 1px solid #333; padding: 5px 15px;">
                <i class="fa-solid fa-arrow-left"></i> VOLVER
            </a>
        @else
            <span style="font-family: 'Bebas Neue'; letter-spacing: 5px; font-size: 1.5rem;">VENTUX</span>
        @endif
    </div>

    <div style="font-family: 'Bebas Neue'; letter-spacing: 3px;">
        <a href="/" style="color: {{ $tipo == 'inicio' ? '#ff0000' : '#fff' }}; margin-left: 20px; text-decoration: none;">INICIO</a>
        <a href="/tienda" style="color: {{ $tipo == 'tienda' ? '#ff0000' : '#fff' }}; margin-left: 20px; text-decoration: none;">TIENDA</a>
    </div>
</nav>