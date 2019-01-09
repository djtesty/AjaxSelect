<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="Ajax.js"></script>
    </head>
    <body>
        
        <form id="form1" name="form1">
            <?php
            require_once('letturaScrittura.php');
            $ls= new letturaScrittura();
            $ls->aperturaFile();
            print" <select name='province' onchange='myFunction()'>";
            print "<option value='Seleziona'>Seleziona</option> " ;
            foreach (array_unique($ls->prendiVal()) as $m){
                
                    print"<option value=".$m.">".$m."</option>";
                }
                print '</select>';

            print "</form>";
            print "<select name='paesi' id='paesi'>";
            print"</select>";
            ?>
            
            
        
        
    </body>
</html>