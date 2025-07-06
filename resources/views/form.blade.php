<form method="POST" action="recibir">
    {{csrf_field()}} 
    @csrf
    
    nombre<input type="text" name="input_nombre" id="input_nombre"><br>
    precio<input type="text" name="input_precio" id="input_precio"><br>
    stock<input type="text" name="input_stock" id="input_stock"><br>
    <input type="submit">
</form>