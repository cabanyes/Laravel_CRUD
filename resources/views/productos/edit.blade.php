@extends("../layouts.plantilla")

@section("cabecera")
EDITAR REGISTROS
@endsection

@section("contenido")

<form method="post" action="/productos/{{$producto->id}}">

    <table>
        <tr>
            <td>Nombre: </td>
            <td>
                <input type="text" name="nombre" value="{{$producto->nombre}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
            </td>
        </tr>

        <tr>
            <td>Seccion:</td>
            <td>
                <input type="text" name="seccion" value="{{$producto->seccion}}">
                {{csrf_field()}}
            </td>
        </tr>

        <tr>
            <td>Precio:</td>
            <td>
                <input type="text" name="precio" value="{{$producto->precio}}">
                {{csrf_field()}}
            </td>
        </tr>

        <tr>
            <td>Fecha:</td>
            <td>
                <input type="text" name="fecha" value="{{$producto->fecha}}">
                {{csrf_field()}}
            </td>
        </tr>

        <tr>
            <td>Pais:</td>
            <td>
                <input type="text" name="pais" value="{{$producto->pais}}">
                {{csrf_field()}}
            </td>
        </tr>




        <tr>
            <td>
                <input type="submit" name="enviar" value="actualizar">
            </td>

            <td>

                <input type="reset" name="borrar" value="Borrar campos"> 
            </td>
        </tr>
    </table>
</form>

<form method="post" action="/productos/{{$producto->id}}">

{{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value="eliminar registro">
</form>
@endsection
@section("pie")



@endsection