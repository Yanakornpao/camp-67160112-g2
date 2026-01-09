<form action="/pokedexs" method="POST">
@csrf
<input name="name" placeholder="Name">
<input name="type" placeholder="Type">
<input name="species" placeholder="Species">
<input type="number" name="height">
<input type="number" name="weight">
<input type="number" step="0.01" name="hp">
<input type="number" step="0.01" name="attack">
<input type="number" step="0.01" name="defense">
<input name="image_url" id="image_url" placeholder="Image URL">
<button type="submit">Save</button>
</form>
<img id="preview" width="150">

<script>
document.getElementById('image_url').addEventListener('input', function(){
    document.getElementById('preview').src = this.value;
});
</script>
