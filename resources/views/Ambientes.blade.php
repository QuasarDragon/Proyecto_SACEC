<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
.letra {
  font-family: Verdana, Geneva, sans-serif;
  color: #0FF;
}
.letra {
  color: #FFF;
}
a:link {
  color: #fffffff;
}
</style>
</head>

<body>

@extends ('layout.master')
@section ('content')
<div align="center">
<table  width="550" border="1" bgcolor="CCCCCC">
</tr>


@foreach($ambiente as $aulas)
<tr>
<td>{{$aulas->Id}})</td>
<td>Ambiente {{$aulas->Numero_de_ambiente}} </td>
<td><a href="{{url('Equipos',$aulas->Id)}}">Ingresar Equipo</a></td>
<td><a href="{{url('Listar_equipos',$aulas->Id)}}">Dar de baja</a></td>
<td><a href="{{url('Consultar',$aulas->Id)}}">Consultar Equipo</a></td>
<td><a href="{{url('Actualizar',$aulas->Id)}}">Actualizar</a></td>
</tr>

@endforeach

@endsection
</div>
</table>
<style type="text/css">
.center {
	text-align: center;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
}
</style>
<table width="407" border="1" align="center">
  <tr>
    <td width="200" bgcolor="#99CCFF" class="center">Agregar nuevo  ambiente</td>
    <td width="200" bgcolor="#99CCFF" class="center">Eliminar ambiente</td>
  </tr>
</table>

</body>
</html>