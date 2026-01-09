<form action="/pokedexs" method="POST">
@csrf
<input name="name" placeholder="Name">
<input name="type" placeholder="Type">
<input name="species" placeholder="Species">
<input name="height" placeholder="Height">
<input name="weight" placeholder="Weight">
<input name="hp" placeholder="HP">
<input name="attack" placeholder="Attack">
<input name="defense" placeholder="Defense">
<input name="image_url" placeholder="Image URL">
<button type="submit">Save</button>
</form>
