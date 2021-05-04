<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 4</title>
</head>

<body>

<h1 style="color: blue;">VOCÊ É MAIS SAFADO(A) ou ANJO(A)? Descubra agora!</h1>

    <form action="exercicio4_index.php" method="GET">
        <p> Digite a dia do seu nascimento: </p>
        <input type="number" min="1" max="31" name="dia">
        <p> Digite o mês do seu nascimento: </p>
        <input type="number" min="1" max="12" name="mes">
        <p> Digite o ano do seu nascimento: </p>
        <input type="number" min="1" max="99" name="ano">

        <input type="submit">
    </form>

</body>

</html>
