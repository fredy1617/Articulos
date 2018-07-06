<!DOCTYPE html>
<html>
<head>
	<title>Importar</title>
</head>
<body>
	<form action="postImport"  method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="file" name="archivo" >
		<input type="submit"  value="Importar"> 
	</form>

</body>
</html>