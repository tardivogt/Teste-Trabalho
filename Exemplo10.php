<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="assets/css/style.css" rel="stylesheet">
        <title>Exemplo 1</title>
    </head>
    <body>        
        <div class="contanier">
            <button onclick="Function()">Clique aqui</button>
            <script>
                function Function()
                {
                var sorveteDeChocolate=prompt("Prefere sorvete de chocolate sim ou nao:");
                    if (sorveteDeChocolate === 'sim' ) {
                        alert("amo sorvete de chocolate"); 
                    }  
                    else {
                        alert("prefiro outros sabores");
                    }
                }
            </script>
        </div>
        <div class="contanier">
            <h2>Voltar ao Index</h2>
            <a href="index.php">Index</a>
        </div>
        <script src="assets/js/script.js"></script>     
    </body>
</html>