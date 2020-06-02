@extends("../layouts.plantilla")

@section("cabecera")
INSERTAR REGISTROS
@endsection

@section("contenido")

<form method="post" action="/productos" enctype="multipart/form-data">



<table>
<tr>
<td>
    <label for="imagen">Imagen:</label></td></tr>

<td><input type="file" name="imagen" size="20"></td></tr>
<tr><td colspan="2" style="text-align:center"></td></tr>

</table>








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
@if(count($errors)>0)
<ul>
   @foreach($errors->all() as $error)
       <li> {{$error}}</li>
   @endforeach
</ul>
@endif

@section("pie")



@endsection