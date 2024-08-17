<html>
     <head>
         <meta charset="UTF-8">
         <title>Página principal</title>
     <h1>Usando get e post</h1>
     </head>
     <body>
         
         <?php
             if(isset($_Get['name'])){
                 echo ("<h3> parametro enviado por get: ". $_Get['name'] . "</h3>");
             }
             
             if(isset($_Post['name'])){
                 echo ("<h3> parametro enviado por post: ". $_Post['name'] . "</h3>");
             }
         ?>
         <h1>usando get</h1>
         <form method="get">
             <input type="text" name="name" placeholder="Digite algo">
             <input type="submit" value="Submeter">
         </form>
         
         <h1>usando Post</h1>
         <form method="post">
             <input type="text" name="name" placeholder="Digite algo">
             <input type="submit" value="Submeter">
         </form>
     </body>