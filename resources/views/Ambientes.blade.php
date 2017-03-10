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

<table width="400" border="1">
</tr>


@foreach($ambiente as $aulas)
<tr>
<td>{{$aulas->Id}}).</td>
<td>{{$aulas->Numero_de_ambiente}}</td>
<td><a href="{{url('ingresar',$aulas->Id)}}">Dar de alta</a></td>
<td><a href="{{url('eliminar',$aulas->Id)}}">Dar de baja</a></td>
</tr>



@endforeach

@endsection
</table>
</body>
</html>