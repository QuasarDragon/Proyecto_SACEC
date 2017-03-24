<style type="text/css">
.letra {
    text-align: center;
    color: #FFF;
}
.center {
    text-align: center;
}
.center {
    text-align: center;
}
</style>
<table width="900" height="293" border="0" align="center">
  <tr>
    <td height="76"><table width="900" height="75" border="0">
      <tr>
        <td width="552">&nbsp;</td>
        <td width="100" bgcolor="#999999" class="letra"><a style="color:#FFF" href="/home">Inicio</a></td>
        <td width="100" bgcolor="#FFF" class="center" style="color: #999">Iniciar sesión</td>
        <td width="100" bgcolor="#999999" class="letra"><a style="color:#FFF" href="register">Registrar</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>Slider</td>
  </tr>
  <tr>
    <td><table width="400" border="0" align="center">
      <tr>
       <form method="POST" action="/auth/login">
    {!! csrf_field() !!}

        <td>Numero de Documento</td>
        <td><div>
        
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
</td>
      </tr>
      <tr>
        <td>Contraseña</td>
        <td>
    <div>
        
        <input type="password" name="password" id="password">
    </div></td>
      </tr>

      <tr>
        <td colspan="2" class="center"> <div><br/>
        <button type="submit">iniciar sesión</button>
    </div></td>
    </form>
        </tr>
    </table>      <span class="center"></span></td>
  </tr>
  <tr>
    <td><p>footer</p>
    <p>&nbsp;</p></td>
  </tr>
</table>