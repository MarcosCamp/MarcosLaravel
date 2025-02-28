<!-- resources/views/components/personajes-table.blade.php -->

<table class="min-w-full table-auto border-collapse bg-white shadow-md rounded-lg">
    <thead>
    <tr>
        <th class="py-2 px-4 border-b text-left">Nombre</th>
        <th class="py-2 px-4 border-b text-left">Tipo</th>
        <th class="py-2 px-4 border-b text-left">Categoría</th>
        <th class="py-2 px-4 border-b text-left">Vida</th>
        <th class="py-2 px-4 border-b text-left">Hipercarga</th>
        <th class="py-2 px-4 border-b text-left">Skins</th>
        <th class="py-2 px-4 border-b text-left">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($personajes as $personaje)
        <tr>
            <td class="py-2 px-4 border-b">{{ $personaje->nombre }}</td>
            <td class="py-2 px-4 border-b">{{ $personaje->tipo }}</td>
            <td class="py-2 px-4 border-b">{{ $personaje->categoria }}</td>
            <td class="py-2 px-4 border-b">{{ $personaje->vida }}</td>
            <td class="py-2 px-4 border-b">{{ $personaje->hipercarga ? 'Sí' : 'No' }}</td>
            <td class="py-2 px-4 border-b">
                <ul>
                    @foreach($personaje->skins as $skin)
                        <li>{{ $skin->nombre }}</li>
                    @endforeach
                </ul>
            </td>
            <td class="py-2 px-4 border-b">
                <a href="{{ route('personajes.edit', $personaje->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                <form action="{{ route('personajes.destroy', $personaje->id) }}" method="POST" class="inline-block ml-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
