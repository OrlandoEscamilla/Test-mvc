<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modelo Vista Controlador (MVC)</title>
    <style media="screen">
      td{border:1px dotted #FF0000;}
    </style>
  </head>
  <body>
    <table>
      <tr><td>ID DEL ARTICULO</td>
          <td>NOMBRE DEL ARTICULO</td>
      </tr>
      <?php
        foreach($matrizProductos as $registro){
          echo "<tr>"."<td>". $registro["IDARTICULO"]."</td>"."<td>".$registro["NOMBREARTICULO"]."</td>"."</tr>";
        }
       ?>
    </table>
  </body>
</html>
