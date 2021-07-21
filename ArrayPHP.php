<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Array no PHP</title>
</head>
<body>
    <?php
    $nome=array("Pessoa","Rapaz","Moça");
    //Um array equivale a:
    //$nome1="Pessoa";
    //$nome2="Rapaz";
    //$nome3="Moça";

    echo($nome[1]);
    //Seria o modo para selecionar um valor da array (Começa com o 0)
    $nome[3]="Moleque";
    //Adicionar outro valor (Começa com o 0)
    $nome=array("Senhor","Senhora","Senhorita");
    //Apaga os dados e os atualiza
    echo(count($nome));
    //Conta quantos índices tem uma variável (Começa com o 1)
    $nome=array("Josias"=>"Senhor","Betilda"=>"Senhora","Beatriz"=>"Senhorita");
    echo($nome["Betilda"]);
    //Dá um nome ao dado (seja por números os nomes)
    ?>
    <hr>
    <?php
    $coisa=array(
        "nome"=>"Gelo",
        "qtd"=>15,
        "solido"=>true
    );
    echo("Nome: ".$coisa["nome"]."</br>");
    echo("Quantidade: ".$coisa["qtd"]."</br>");
    echo("É Sólido? ".$coisa["solido"]."</br>");
    ?>
    <h1>FOREACH</h1>
    <?php
    $produto=array("HD"=>234.09,"Placa Mãe"=>2345.95,"Processador"=>262.98);
    foreach($produto as $prod=>$preco){         //Renomeia a variável temporariamente
        echo("Produto: ".$prod." ");            //Afeta todos os valores da variável
        echo("R$".$preco."</br>");              //Repete pela quantidade de dados da variável
    };
    ?>
</body>
</html>