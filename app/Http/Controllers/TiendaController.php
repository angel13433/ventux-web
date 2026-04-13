<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index()
    {
        return view('tienda');
    }

    public function show($id)
    {
        // AJUSTE: Quitamos los ceros a la izquierda para que coincidan con las URLs /producto/1, /producto/2
        $productos = [
            '1' => [
                'nombre' => 'OVERSIZE DROP 01',
                'descripcion' => 'Diseño técnico con estética urbana. Corte relax-fit premium con gráficos de alto impacto en serigrafía digital.',
                'precio' => '$20.00',
                'imagen' => '1.png'
            ],
            '2' => [
                'nombre' => 'OVERSIZE DROP 02',
                'descripcion' => 'Línea "Saint". Inspiración gótica técnica con arte expansivo en el reverso. Algodón de alto gramaje.',
                'precio' => '$20.00',
                'imagen' => '2.png'
            ],
            '3' => [
                'nombre' => 'OVERSIZE DROP 03', // Cambié el nombre para seguir tu orden del catálogo
                'descripcion' => 'VNTX x Evangelion. Gráficos de la Unidad-01 con especificaciones técnicas integradas en el diseño.',
                'precio' => '$20.00',
                'imagen' => '3.png'
            ],
            '4' => [
                'nombre' => 'OVERSIZE DROP 04',
                'descripcion' => 'Pieza exclusiva de colección. Detalles en rojo carmesí sobre base técnica.',
                'precio' => '$20.00',
                'imagen' => '4.png'
            ],
            '5' => [
                'nombre' => 'OVERSIZE DROP 05',
                'descripcion' => 'Edición limitada con estilo brutalista y patrones exclusivos.',
                'precio' => '$25.00',
                'imagen' => '5.png'
            ],
        ];

        if (!array_key_exists($id, $productos)) {
            abort(404);
        }

        $producto = $productos[$id];

        return view('detalle', compact('producto', 'id'));
    }
}