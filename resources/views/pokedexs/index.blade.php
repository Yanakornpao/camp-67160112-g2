<table border="1">
<tr>
    <th>Image</th>
    <th>Name</th>
    <th>Type</th>
    <th>HP</th>
    <th>Attack</th>
    <th>Defense</th>
    <th>Action</th>
</tr>

@foreach($pokedexs as $p)
<tr>
    <td>
        <img src="{{ $p->image_url }}" width="80">
    </td>
    <td>{{ $p->name }}</td>
    <td>{{ $p->type }}</td>
    <td>{{ $p->hp }}</td>
    <td>{{ $p->attack }}</td>
    <td>{{ $p->defense }}</td>
    <td>
        <a href="/pokedexs/{{ $p->id }}/edit">Edit</a>
        <form action="/pokedexs/{{ $p->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>
