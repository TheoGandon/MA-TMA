<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Epsilon</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="text-green-700 overflow-hidden h-screen bg-gradient-to-b from-fuchsia-400 to-fuchsia-700">
        <div class="pt-28">
            <div class="flex flex-col items-center justify-center text-center bg-gradient-to-b from-white to-transparent w-fit h-fit mx-auto px-20 rounded-xl">
                <?php
                    include 'header.php';
                ?>
                <table>
                    <tr>
                        <td><img src="william.jpg" alt="William, prince de Galles" class="w-40 rounded-full"></td>
                        <td><img src="theo.jpg" alt="Theo Sins" class="w-40 rounded-full"></td>
                    </tr>
                    <tr>
                        <td><p class="my-4">William DOURLENS</td>
                        <td><p class="my-4">Theo GANDON</td>
                    </tr>
                </table>
                
                <p><br>Groupe : Vianney DRS, Téo Fiminski</p>
                <p><br>15,3 / 20 Tout est pafait sah quelle plaisir</p>
                <a href="upload.php"><p class="mb-4 underline text-fuchsia-900">Upload your file !</p></a>
                <?php
                    include 'footer.php';
                ?>
            </div>
        </div>
    </body>
</html>