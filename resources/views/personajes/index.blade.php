@extends('layouts.guest')

@section('content')
    <h1>Personajes</h1>
    <a href="{{ route('personajes.create') }}">Crear nuevo personaje</a>

    @foreach($personajes as $personaje)
        @if($personaje)  <!-- Aseguramos que $personaje no sea null -->
        <div>
            <h3>{{ $personaje->nombre }} ({{ $personaje->tipo }})</h3>
            <p>Categoria: {{ $personaje->categoria }}</p>
            <p>Vida: {{ $personaje->vida }}</p>
            <p>Hipercarga: {{ $personaje->hipercarga ? 'Sí' : 'No' }}</p>

            <h4>Skins:</h4>
            @if($personaje->skins->isNotEmpty())  <!-- Verifica si tiene skins -->
            <ul>
                @foreach($personaje->skins as $skin)
                    <li>{{ $skin->nombre }}</li>
                @endforeach
            </ul>
            @else
                <p>No tiene skins.</p>
            @endif

            <a href="{{ route('personajes.edit', $personaje->id) }}">Editar</a>
            <form action="{{ route('personajes.destroy', $personaje->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </div>
        @else
            <p>Este personaje no existe.</p>  <!-- Si el personaje es null, se muestra un mensaje -->
        @endif
    @endforeach
@endsection
