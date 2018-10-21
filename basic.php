<!DOCTYPE html>
<html lang="ro-RO">
    <head>
        <title>Pagina HTML</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body">
          
          <?php for($i=0;$i<10;$i++){ ?>
            <h1>Primul meu titlu</h1>
          <?php } 
          $variabila="Am modificat php-ul";
          ?>
          <p> <?php echo $variabila; ?> </p>
    </body>
</html>
