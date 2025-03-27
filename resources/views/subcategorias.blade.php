@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Subcategorías</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($subcategorias as $subcategoria)
        <a href="{{ route('productos', ['subcategoria' => $subcategoria->id]) }}" class="block p-4 border rounded hover:shadow">
            <h2 class="text-lg font-semibold">{{ $subcategoria->nombre }}</h2>
        </a>
        @endforeach
    </div>
</div>
@endsection
