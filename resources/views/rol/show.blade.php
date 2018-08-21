@extends('layout.admin')
@section('content')


<form method="post" action="">
<table class="table">
<tr>
<td>ID</td>
<td><input type="text" name="txtid" value="{{$usuario->id}}"></td>
</tr>
<tr>
<td>DNI</td>
<td><input type="text" name="txtdni" value="{{$usuario->dni}}"></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="text" name="txtclave" value="{{$usuario->password}}"></td>
</tr>
<tr>
<td>ROL_ID</td>
<td><input type="text" name="txtrol" value="{{$usuario->rol_id}}"></td>
</tr>
<tr>
<td>FECHA CREACION</td>
<td><input type="text" name="txtcreacion" value=""></td>
</tr>
<tr>
<td>FECHA MODIFICACION</td>
<td><input type="text" name="txtmodifica" value=""></td>
</tr>
<tr>
<td collspan="2"><button type="submit" class="btn btn-primary">Modificar</button></td>
</tr>
</table>
</form>	


@endsection