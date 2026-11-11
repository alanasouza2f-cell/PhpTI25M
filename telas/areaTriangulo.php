<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");//Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes;//Acessando a classe

    $funcoes = new Funcoes();//Criando um vínculo com a classe Funcoes
    $resultado = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Triângulo</title>
</head>
<body>
    <h1>Informe os valores que deseja PARA calcular a Área do Triângulo: </h1>
    <form method="POST">
        <label>Informe o número da Base: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>
        <label>Informe o número da Altura: </label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        <br><br>

        <button type="submit">Área do Triângulo
        <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];

                $resultado = $funcoes->areaTriangulo($num1,$num2);//Utilizando o método da classe Funcoes
            }
        ?>
        </button>
    </form>
    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O resultado da Área do Triângulo é: ".$resultado;
        }else{
            echo "Preencha os Campos!";
        }
        
    ?>
</body>
</html>