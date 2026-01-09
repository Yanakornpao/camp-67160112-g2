<form action="/pokedexs/{{ $pokedex->id }}" method="POST">
@csrf
@method('PUT')

<input name="name" value="{{ $pokedex->name }}">
<input name="type" value="{{ $pokedex->type }}">
<input name="species" value="{{ $pokedex->species }}">
<input name="height" value="{{ $pokedex->height }}">
<input name="weight" value="{{ $pokedex->weight }}">
<input name="hp" value="{{ $pokedex->hp }}">
<input name="attack" value="{{ $pokedex->attack }}">
<input name="defense" value="{{ $pokedex->defense }}">
<input name="image_url" value="{{ $pokedex->image_url }}">

<button type="submit">Update</button>
</form>
