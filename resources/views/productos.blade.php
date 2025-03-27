@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Productos</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($productos as $producto)
        <a href="{{ route('detalle-producto', ['producto' => $producto->id]) }}" class="block p-4 border rounded hover:shadow">
            <h2 class="text-lg font-semibold">{{ $producto->nombre }}</h2>
            <p class="text-sm text-gray-600">{{ $producto->descripcion }}</p>
        </a>
        @endforeach
    </div>
</div>
@endsection
