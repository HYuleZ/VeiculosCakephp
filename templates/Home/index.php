<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="title-box">
        <div class="title">
            <h1 id="title-text">Cadastro de Veículos</h1>
        </div>
        <div class="buttons">
            <div class="button1">
                <a href="marcas"><button class="bmarcas">Tabela de marcas</button></a>
            </div>
            <div class="button2">
                <a href="veiculos"><button class="bveiculos">Tabela de veículos</button></a>
            </div>
        </div>
    </div>
    <div class="credits">
        <p>Criado por Henrique Yule</p>
    </div>
</body>
</html>

<style>
    .title-box{
        margin-top: 100px;
        display: grid;
        height: 25vh;
        box-shadow: 6px 6px 16px;
    }

    .title{
        margin-top: 20px;
        place-items: center;
        text-align: center;
    }

    .buttons{
        text-align: center;
    }

    .credits{
        margin-top: 20px;
        font-size: 18px;
    }
</style>