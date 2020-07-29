<html lang="en">
    <head>
        <!-- Required meta tags -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title >Canciones</title>
    </head>
    <body style="background: #FDB160">
        <br />
        <div  class="p-3 mb-2  text-Dark" align="center">
            <h1>Canciones Atzel</h1>
        </div>
        <div align="right">
            <a href="index.html"> <button type="submit" class="btn btn-dark">salir</button></a>
        </div>
        <br />
    <?php
      if(isset($_GET['producto']))
      {
       include('Conexion.php');
       $con= new Conexion();

   
       ?>
      
       <br/>
	

     <?php
 }
    ?>

    <div align="center" >
        <table border="1
		
		"  bgcolor="LIGHTCORAL">
		<tr  bgcolor="LIGHTCORAL">
		<td></td>
		<td>Cancion</td>
		<td>Arista</td>
		<td>
		lanzamiento
		</td>
		<td></td>
		</tr>
            <tr bgcolor="DARKSALMON">
			<tr bgcolor="DARKSALMON">
			<td>------</td>
                <td> TAKE ON ME </td>
                <td>
                   
                    AH-HA
                 
                </td>
                
				<td>1985</td>
				<td>------</td>
            </tr>
            <tr bgcolor="DARKSALMON">
			<td>------</td>
                <td> INSTANT CRUSH </td>
                <td>
                   
                 DAFT PUNK
                 
                </td>
                
				<td>2013</td>
				<td>------</td>
            </tr>
            <tr bgcolor="DARKSALMON">
			<td>------</td>
                <td>CLINT EASTWOOD</td>
                <td>
                    
                  GORILLAZ
                 
                </td>
              
				  <td>2001</td>
				  <td>------</td>
            </tr>
            <tr bgcolor="DARKSALMON">
			<td>------</td>
                <td>SMELLS LIKE TEEN SPIRIT</td>
                <td>
                   
              NIRVANA
                 
                </td>
               
				<td>1991</td>
				<td>------</td>
            </tr>
            <tr bgcolor="DARKSALMON">
			<td>------</td>
                <td>HOY TEN MIEDO DE MI</td>
                <td>
                    
                   FERNANDO DELGADILLO
                   
                </td>
             
				<td>1992</td>
				<td>------</td>
            </tr>

        </table>

    </div>
</body>
</html>

