@extends("../layouts.plantilla")

@section("cabecera")
INSERTAR REGISTROS
@endsection

@section("contenido")

<form method="post" action="/productos">

    <table>
        <tr>
            <td>Nombre: </td>
            <td>
                <input type="text" name="nombre">
                {{csrf_field()}}
            </td>
        </tr>

        <tr>
            <td>Seccion:</td>
            <td>
                <input type="text" name="seccion">
                {{csrf_field()}}
            </td>
        </tr>

        <tr>
            <td>Precio:</td>
            <td>
                <input type="text" name="precio">
                {{csrf_field()}}
            </td>
        </tr>

        <tr>
            <td>Fecha:</td>
            <td>
                <input type="text" name="fecha">
                {{csrf_field()}}
            </td>
        </tr>

        <tr>
            <td>Pais:</td>
            <td>
                <input type="text" name="pais">
                {{csrf_field()}}
            </td>
        </tr>




        <tr>
            <td>
                <input type="submit" name="enviar" value="Enviar">
            </td>

            <td>

                <input type="reset" name="borrar" value="Borrar"> 
            </td>
        </tr>
    </table>
</form>



@endsection
@section("pie")



@endsection