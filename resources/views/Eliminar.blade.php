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
<table  width="1000" border="1" bgcolor="CCCCCC">
</tr>
<tr>
<td>
id
</td>
<td>
Fecha de ingreso
</td>
<td>
Marca
</td>
<td>
Numero del equipo
</td>
<td>
Codigo del mouse
</td>
<td>
Codigo del teclado
</td>
<td>
Codigo de la pantalla
</td>
<td>
Codigo de la cpu
</td>
<td>
descripcion
</td>
</tr>

@foreach($equipo as $pc)
<tr>
<td>{{$pc->Id}})</td>
<td>{{$pc->Fecha_de_ingreso}}</td>
<td>{{$pc->Marca}}</td>
<td>{{$pc->Numero_de_equipo}}</td>
<td>{{$pc->Codigo_de_mouse}}</td>
<td>{{$pc->Codigo_de_teclado}}</td>
<td>{{$pc->Codigo_de_pantalla}}</td>
<td>{{$pc->Codigo_del_cpu}}</td>
<td>{{$pc->Descripcion}}</td>
<td><a href="{{url('Eliminarequipo',$pc->Id)}}"> Eliminar </a></td>

</tr>

@endforeach

@endsection
</div>
</table>
</body>
</html>