<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
.letra {
  font-family: Verdana, Geneva, sans-serif;
  font-size: 14px;
}
#form1 table tr td #guardar {
  text-align: right;
}
#form1 table tr .center h1 {
  text-align: center;
}
center {
  text-align: center;
}
#center {
  text-align: center;
  font-family: Verdana, Geneva, sans-serif;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="519" height="489" border="1" align="center">
    <tr>
      <td height="379" colspan="2" bgcolor="#CCCCCC"><h1 id="center">Ambiente 100</h1>
        <p><span class="letra">Fecha de ingreso:
  <input type="text" name="fecha" id="fecha" /> 
        </span></p>
      <p><span class="letra">Marca: 
        <input type="text" name="marca" id="marca" />
      </span></p>
      <p><span class="letra">Numero de equipo:</span>
<select name="select" id="select">
  <option selected="selected" >seleccionar</option>
  <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
      </select>
      </p>
      <p>Codigo de Mouse: 
        <label for="Mouse"></label>
        <input type="text" name="Mouse" id="Mouse" />
      </p>
      <p>Codigo de Teclado: 
        <label for="teclado"></label>
        <input type="text" name="teclado" id="teclado" />
      </p>
      <p>Codigo de Pantalla: 
        <label for="pantalla"></label>
        <input type="text" name="pantalla" id="pantalla" />
      </p>
      <p>Codigo del CPU: 
        <label for="cpu"></label>
        <input type="text" name="cpu" id="cpu" />
      </p></td>
    </tr>
    <tr>
      <td height="77" colspan="2" bgcolor="#CCCCCC" class="letra">Descripciòn: 
        <label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="70" rows="3"></textarea></td>
    </tr>
    <tr>
      <td width="421" bgcolor="#CCCCCC" class="letra"><a href="Index">Volver a Inicio</a></td>
      <td width="82" class="letra"><input type="submit" name="guardar" id="guardar" value="Guardar datos" /></td>
    </tr>
  </table>
</form>
</body>
</html>