<?php 
  include '../../conexion.php';

  $re=mysql_query("select * from lugares  ")or die(mysql_error());

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lugares</title>
  <link rel="Shortcut Icon" href="../../img/paz.ico" >
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="../gmaps.js"></script>

  <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="examples.css" />
  <script type="text/javascript">
    var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        lat: 24.1693862,
        lng: -110.2814659,
        zoom:11
      });
      
      map.addMarker({
        lat: 24.1397816,
        lng: -110.3043895,
        title: 'Lima',
        details: {
          database_id: 42,
          author: 'HPNeo'
        },
        click: function(e){
          if(console.log)
            console.log(e);
          alert('You clicked in this marker');
        },
        mouseover: function(e){
          if(console.log)
            console.log(e);
        }
      });
<?php 

  while ($f=mysql_fetch_array($re)) {


    $id=$f['id'];
    $nombre=$f['nombre'];
    $descripcion=$f['descripcion'];
    $direccion =$f['direccion'];
    $latitud=$f['latitud'];
    $longitud=$f['longitud'];
    
    ?>
     map.addMarker({
        lat: <?php echo $latitud; ?>,
        lng: <?php echo $longitud; ?>,
        title: 'Marker with InfoWindow',
        infoWindow: {
          content: '<p><h3><?php echo $nombre; ?></h3></p>'
        }
      });

<?php
    
  }
?>

 



    });
  </script>
</head>
<body>
<center>
  <a href="../../index.php" title="Inicio">
     <img src="../../img/home.png" width="30px" height="30px " style="margin-top:20px">
      </a>
    </center>  
  <div class="row">
    <div class="span11">
      <div id="map"></div>
    </div>
    <div class="span6">
    
      
    </div>
  </div>
</body>
</html>
