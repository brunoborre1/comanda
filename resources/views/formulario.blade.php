
<form action="{{ url('/home')}}" method="POST">
{{ csrf_field() }}
    <label for="codigo_prod">Codigo Producto</label><br>
    <input type="number" id="codigo_prod" name="codigo_prod"><br>

    <label for="descripcion_prod">Descripcion Producto</label><br>
    <input type="text" id="descripcion_pord" name="descripcion_prod"><br>

    <label for="cantidad_prod">Cantidad</label><br>
    <input type="number" id="cantidad_prod" name="cantidad_prod"><br>

    <label for="precio_prod">Precio</label><br>
    <input type="number" id="precio_prod" name="precio_prod"><br>

    <label for="tipo_prod">Tipo de producto</label><br>
    <input type="text" id="tipo_prod" name="tipo_prod"><br>
    <br>
    <input type="submit" value="Enviar"><br>
</form>