<!-- resources/views/auth/register.blade.php -->
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
        <td width="100" bgcolor="#999999" class="letra"><a style="color:#FFF" href="login">Iniciar sesión</a></td>
        <td width="100" bgcolor="#FFF" class="center" style="color: #999">Registrar</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="400" border="0" align="center" bgcolor="#CCCCCC">
      <tr><br/><br/>

      <form method="POST" action="/auth/register">
    {!! csrf_field() !!}


        <td>Nombre y Apellido</td>
        <td>
    <div>
       
        <input type="text" name="name" value="{{ old('name') }}">
    </div>
    </td>
    </tr>

      <tr>
        <td>Numero de Documento</td>
        <td><div>
        
        <input type="email" name="email" value="{{ old('email') }}">
    </div></td>
      </tr>


      <tr>
        <td>Contraseña</td>
        <td><div>
        
        <input type="password" name="password">
    </div></td>
      </tr>

      <tr>
        <td>Confirmar Contraseña</td>
        <td><div>
        
        <input type="password" name="password_confirmation">
    </div></td>
      </tr>

      <tr>
        <td colspan="2" class="center"><div><br/>
        <button type="submit">Registrar</button>
    </div>
</form></td>
        </tr>
    </table>      <span class="center"></span></td>
  </tr>
  <tr>
    <td><p>footer</p>
    <p>&nbsp;</p></td>
  </tr>
</table>
