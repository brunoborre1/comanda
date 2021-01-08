
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Tipo de Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $producto->Codigo}}</td>
            <td>{{ $producto->Descripcion}}</td>
            <td>{{ $producto->TipoProducto}}</td>
            <td>{{ $producto->Cantidad}}</td>
            <td>{{ $producto->Precio}}</td>
            <td>Editar / Borrar</td>
        </tr>
    @endforeach    
    </tbody>

</table>