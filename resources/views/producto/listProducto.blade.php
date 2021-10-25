@extends('layouts.layoutAdmin') 
@section('title', 'Productos | SICRA')
@section('subtema1','Lista Productos') 
@section('ruta')
    <li class="breadcrumb-item"><a href="/home"><i class="fa fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page">Producto</li>
@endsection


@section('content')
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Abierto</a>
  </li>
</ul>

<!-- Row -->
<div class="row">
    <!-- DataTable with Hover -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Productos Abiertos</h6>
                <a href="{{ route('producto.add') }}" class="btn btn-success float-right"><i class="fa fa-box"></i> Añadir</a>
            </div>

            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                    <tr class="text-center">
                        <th>#</th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Sucursal</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if($productos
                        ->count()) @foreach($productos as $producto)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$producto->idProducto}}</td>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->categoria}}</td>
                                <td>{{$producto->sucursal}}</td>
                                <td class="text-center"><a href="{{action('ProductoController@editProducto', $producto->idProducto)}}"><span class="fa fa-edit" style="color: #00bcd4;"></span></a></td>
                                <td class="text-center"><a href="{{action('ProductoController@deleteProducto', $producto->idProducto)}}">
                                <span class="fas fa-trash" style="color: red;"></span></a></td>
                            </tr> 
                            @endforeach
                            @else
                            <tr>
                                <td align="center" colspan="8">La tabla está vacía</td>
                            </tr>
                            @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(function() {
        var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 4000
        });

        @if (session()->has('successAdd'))
        Toast.fire({
            icon: 'success',
            title: 'Registro Exitoso.'
        })
        @endif

        @if (session()->has('successUpd'))
        Toast.fire({
            icon: 'success',
            title: 'Modificación Exitosa.'
        })
        @endif

        @if (session()->has('successDelete'))
        Toast.fire({
            icon: 'success',
            title: 'Eliminación Exitosa'
        })
        @endif
      }); 
</script>
@endsection