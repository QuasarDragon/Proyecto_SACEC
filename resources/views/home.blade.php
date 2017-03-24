@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


@if (Auth::check())
	{{Auth::user()->email}}
@endif
	<br>
	

	<style type="text/css">
.letra {
	text-align: center;
	color: #FFF;
}
</style>
<table width="900" height="293" border="0" align="center">
  <tr>
    <td height="76" colspan="3"><table width="900" height="75" border="0">
      <tr>
        <td width="552">&nbsp;</td>
        <td width="100" bgcolor="#FFF" style="color: #999">Inicio</td>
        <td width="100" bgcolor="#999999" class="letra"><a style="color:#FFF" href="auth/login">Iniciar sesión</a></td>
        <td width="100" bgcolor="#999999" class="letra" ><a style="color:#FFF" href="auth/register">Registrar</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3">Slider</td>
  </tr>
  <tr>
    <td width="300">cuerpo1</td>
    <td width="300">cuerpo2</td>
    <td width="300">cuerpo3</td>
  </tr>
  <tr>
    <td colspan="3">footer</td>
  </tr>
</table>

@endsection
</body>
</html>
