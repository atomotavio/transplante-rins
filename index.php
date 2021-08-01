<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doe rins</title>
</head>

<body>
    <main>
        <h1>Verificação de compatibilidade de pacientes:</h1>

        <form action="" method="post" target="_self">
            <fieldset>
                <legend>Paciente 1</legend>
                <label for="ncompleto">Nome completo:</label>
                <input type="text" id="ncompleto" name="ncompleto" required autofocus><br>
                <p>
                    Genero:
                    <label for="genero">Feminino</label>
                    <input type="radio" id="genero" name="genero" value="Feminino">
                    <label for="genero">Masculino</label>
                    <input type="radio" id="genero" name="genero" value="Masculino">
                </p>
                <label for="idade">Idade</label>
                <input type="number" id="idade" name="idade" required><br>
                <p>
                    Tipo sanguineo:
                    <label for="sangue">A+</label>
                    <input type="radio" id="sangue" name="sangue" value="A+">
                    <label for="sangue">AB+</label>
                    <input type="radio" id="sangue" name="sangue" value="AB+">
                    <label for="sangue">B+</label>
                    <input type="radio" id="sangue" name="sangue" value="B+">
                    <label for="sangue">O+</label>
                    <input type="radio" id="sangue" name="sangue" value="O+">
                    <label for="sangue">A-</label>
                    <input type="radio" id="sangue" name="sangue" value="A-">
                    <label for="sangue">AB-</label>
                    <input type="radio" id="sangue" name="sangue" value="AB-">
                    <label for="sangue">O-</label>
                    <input type="radio" id="sangue" name="sangue" value="O-">
                </p>
                <label for="peso">Peso</label>
                <input type="number" id="peso" name="peso" required><br>
                <label for="altura">Altura</label>
                <input type="number" id="altura" name="altura" required>
            </fieldset>
            <fieldset>
                <legend>Paciente 2</legend>
                <label for="ncompleto2">Nome completo:</label>
                <input type="text" id="ncompleto2" name="ncompleto2" required><br>
                <p>
                    Genero:
                    <label for="genero2">Feminino</label>
                    <input type="radio" id="genero2" name="genero2" value="Feminino">
                    <label for="genero2">Masculino</label>
                    <input type="radio" id="genero2" name="genero2" value="Masculino">
                </p>
                <label for="idade2">Idade</label>
                <input type="number" id="idade2" name="idade2" required><br>
                <p>
                    Tipo sanguineo:
                    <label for="sangue2">A+</label>
                    <input type="radio" id="sangue2" name="sangue2" value="A+">
                    <label for="sangue2">AB+</label>
                    <input type="radio" id="sangue2" name="sangue2" value="AB+">
                    <label for="sangue2">B+</label>
                    <input type="radio" id="sangue2" name="sangue2" value="B+">
                    <label for="sangue2">O+</label>
                    <input type="radio" id="sangue2" name="sangue2" value="O+">
                    <label for="sangue2">A-</label>
                    <input type="radio" id="sangue2" name="sangue2" value="A-">
                    <label for="sangue2">AB-</label>
                    <input type="radio" id="sangue2" name="sangue2" value="AB-">
                    <label for="sangue2">O-</label>
                    <input type="radio" id="sangue2" name="sangue2" value="O-">
                </p>
                <label for="peso2">Peso</label>
                <input type="number" id="peso2" name="peso2" required><br>
                <label for="altura2">Altura</label>
                <input type="number" id="altura2" name="altura2" required>
            </fieldset>
            <input type="submit" value="Comparar">
        </form>
    </main>

</body>

</html>

<?php

?>