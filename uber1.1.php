<!DOCTYPE html>
<html lang"es">
   <head>
       <title></title>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maxinum-scale=1, ninimum-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </head>
   <body>
   	<div class="container">
      <h1>Usuario Nuevo BIENVENIDO</h1>

<form action="" method="post"> 

   <div class="row g-3">
   	
	<label for="exampleInputEmail1" class="form-label">Seleccione tarifa de cada Uber</label><br>
	<div class="col-md-6">
	<label for="exampleInputEmail1" class="form-label">UberX:</label><br>
	<input class="form-control" type="text" name="Ux[]"><br>
</div>
<div class="col-md-6">
	<label for="exampleInputEmail1" class="form-label">UberXL:</label><br>
	<input class="form-control" type="text" name="Ux[]"><br>
</div>
	<div class="col-md-6">
	<label for="exampleInputEmail1" class="form-label">UberPlus:</label><br>
	<input class="form-control" type="text" name="Ux[]"><br>
</div>
	<div class="col-md-6">
	<label for="exampleInputEmail1" class="form-label">UberBlack:</label><br>
	<input class="form-control" type="text" name="Ux[]"><br>
</div>
	<div class="col-md-6">
	<label for="exampleInputEmail1" class="form-label">UberSUV:</label><br>
	<input class="form-control" type="text" name="Ux[]"><br>
</div>
	<div class="col-md-6">
	<label for="exampleInputEmail1" class="form-label">Millas a recorrer:</label><br>
	<input class="form-control" type="text" name="I"> <br> 
</div>
</div>

	<button type="submit" name="p" value="p" class="btn btn-primary" >Verificar</button>
	<br>
	<br>
	 
	
</form>
	
<?php
error_reporting(E_ALL^E_NOTICE);

	if($_POST['p']){
		
		$millas=$_POST['I'];
		$tarifasAr  = $_POST['Ux'] ;

		if(4 <= $millas && $millas <= 30){
			for ($i=0; $i < count($tarifasAr); $i++) { 
				 if($tarifasAr[$i]==0.3){
				 	$tarifa1 = $tarifasAr[$i]*$millas;
				 	if($tarifa1 <=20){
				 		echo "El UberX es una buena opcion:<br> Su costo es:",$tarifa1,'<br><br>';

				 	}else{
						echo "EL UberX no es una buena opcion ya que se sale de su presupuesto <br><br>";
					}
				 	
				 }
				 if($tarifasAr[$i]==0.5){
				 	$tarifa2 = $tarifasAr[$i]*$millas;
				 	if($tarifa2 <=20){
				 		echo "El UberXL es una buena opcion:<br> Su costo es:",$tarifa2,'<br><br>';

				 	}else{
						echo "EL UberXL no es una buena opcion ya que se sale de su presupuesto <br><br>";
					}
				 }
				 if ($tarifasAr[$i]==0.7) {
				 	$tarifa3 = $tarifasAr[$i]*$millas;
				 	if($tarifa3 <=20){
				 		echo "El UberPlus es una buena opcion:<br> Su costo es:",$tarifa3,'<br><br>';

				 	}else{
						echo "EL UberPlus no es una buena opcion ya que se sale de su presupuesto <br><br>";
					}
				 }
				  if ($tarifasAr[$i]==1) {
				 	$tarifa4 = $tarifasAr[$i]*$millas;
				 	if($tarifa4 <=20){
				 		echo "El UberBlack es una buena opcion:<br> Su costo es:",$tarifa4,'<br><br>';

				 	}else{
						echo "EL UberBlack no es una buena opcion ya que se sale de su presupuesto <br><br>";
					}
				 }
				  if ($tarifasAr[$i]==1.3) {
				 	$tarifa5 = $tarifasAr[$i]*$millas;
				 	if($tarifa5 <=20){
				 		echo "El UberSUV es una buena opcion:<br> Su costo es:",$tarifa5,'<br><br>';

				 	}else{
						echo "EL UberSUV no es una buena opcion ya que se sale de su presupuesto <br><br>";
					}
				 }
			}
		/*$tarifa1 = $tarifasAr[0]*$millas;
		if($tarifa1 <= 20 ){
			echo 'El UberX es una buena opcion le costara: ', $tarifa1;

		*/

		}else{
			echo 'Restriciones de recorrido. Vuelva a poner un Numero de recorrido .!!Gracias';
		}

		
		
	}
?>
</div> 
   </body>
</html>