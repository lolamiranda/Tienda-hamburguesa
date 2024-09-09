<!DOCTYPE hmtl>
<html>
<head>
  <title>LOLA'S</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      color: #333;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    h3 {
      color: solid orange;
      text-align: center;
      font-size: 40px;
    }

    form {
      margin-top: 20px;
    }

    #progress-bar {
      width: 50%; 
      background-color: transparent;
      border: 1px solid orange; 
      height: 20px;
      position: relative;
      overflow: hidden;
      margin-top: 20px;
    }

    #progress {
      height: 100%;
      width: 0;
      background-color: orange;
      position: absolute;
      transition: width 6s ease;
    }
  </style>
</head>
<body onload="startProgressBar();">

  <div>
    <h3>Conectándose a UMAPal, espere unos instantes...</h3>

    <form name="umapal" action="<?php echo base_url(); ?>public/umapal/procesar.php" method="post">

  
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="LOLAS">

  <?php foreach ($carrito as $producto): ?>
    <input type="hidden" name="item_name" value="<?= $nombres ?>">
    <input type="hidden" name="item_number" value="<?= $ides?>">
    <input type="hidden" name="amount" value="<?= $precios ?>">
    <input type="hidden" name="quantity" value="<?= $cantidades?>">
<?php endforeach; ?>


  <input type="hidden" name="currency_code" value="EUR">


  <input type="hidden" name="address_override" value="1">
  <input type="hidden" name="first_name" value="<?= $usuario ?>">
  <input type="hidden" name="last_name" value="Nadie">
  <input type="hidden" name="address1" value="<?= $direccion ?>">
  <input type="hidden" name="city" value="<?= $ciudad ?>">
  <input type="hidden" name="zip" value="<?= $codigopostal ?>">
  <input type="hidden" name="country" value="ES">


  <input type="hidden" name="return" value="<?php echo base_url('formsucess'); ?>">
  <input type="hidden" name="cancel_return" value="<?php echo base_url('formcancel'); ?>">

  <input type="hidden" name="cartID" value="<?= $peticionActual ?>">


</form>



    <div id="progress-bar">
      <div id="progress"></div>
    </div>
  </div>

  <script>
    function startProgressBar() {
      var progressBar = document.getElementById("progress");
      progressBar.style.width = "100%";
      setTimeout(function() {
        document.umapal.submit();
      }, 6000);
    }
  </script>

</body>
</html>

</body>
</html>


