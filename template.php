<!doctype html>
<html class="no-js" lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php titulo();?></title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css">
  </head>
  
  <body>
<header>
<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li><a href="inserir.php">Inserir</a></li>
<li><a href="lista.php">Listar</a></li>
</ul>
</div>
<div class="top-bar-rigth">
<ul class="menu">
<li><input type="search" placeholder="Search"></li>
<li><button type="button" class="button">Search</button></li>
</ul>
</div>
</div>
</header>
    
    <?php principal();?>
  <div class="grid-container">
    <ul class="menu">
      <l1><a href="graficos.html">Gráfico Mulheres/Homens</a></li>
      <li><a href="geradorPdf.php">Gerar PDF</a></li>
    </ul>  
  </div>    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script>
      $(document).foundation();
    </script>

  </body>
</html>