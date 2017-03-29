<style type="text/css">
.letra {
  font-family: Verdana, Geneva, sans-serif;
  font-size: 14px;
}
.letra1 {
  font-family: Verdana, Geneva, sans-serif;
  font-size: 30px;
}
</style>
<form name="form1" method="post" action="{{url('consultar_activo')}}">
{!!csrf_field()!!}
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <h1 align="center" class="letra1">CONSULTA DE EQUIPO</h1>
  <table width="244" border="0" align="center">
    <tr>
      <td width="54"><input type="submit" name="buscar" id="buscar" value="Buscar🔎"></td>
      <td width="361"><label for="textfield"></label>
      <input name="activo" type="text" placeholder="Numero de Activo" id="activo" size="30"></td>
    </tr>
  </table>

@extends ('layout.master')
@section ('content')

<div align="center">
<table  width="550" border="1" bgcolor="CCCCCC">
</tr>
@if($activo)

@foreach($activo as $equipo)
<tr>
<td>{{$equipo->Id}})</td>
<td>{{$equipo->Fecha_de_ingreso}}</td>
<td>{{$equipo->Marca}}</td>
<td>{{$equipo->Numero_de_equipo}}</td>
<td>{{$equipo->Codigo_de_mouse}}</td>
<td>{{$equipo->Codigo_de_teclado}}</td>
<td>{{$equipo->Codigo_de_pantalla}}</td>
<td>{{$equipo->Codigo_del_cpu}}</td>
<td>{{$equipo->Descripcion}}</td>
</tr>

@endforeach
@endif
</table>

@endsection
  <p>&nbsp;</p>
</form>
