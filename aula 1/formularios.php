<?php

/*comentario e, bloco

sghshah
rrerrt
gwretr

*/

    //escreve o conteudo na tela
    //echo('Testando o PHP' . '<br>');

    /*isset() -> permite verificar a existencia de uma
    variavel ou de um objeto*/

    //validaçao para identificar se o botao foi clicado e disponibilizado na açao do get
    if(isset($_GET['btnSalvar'])){

    //recuperando dados via get do formulario
    $nome = $_GET['txtNome'];
    $cidade = $_GET['sltCidade'];
    $sexo = $_GET['rdoSexo'];
    $observacao = $_GET['txtObs'];    

    //foi criado essas variaveis paa resolver o problema de variavel indefinida na eibiçao de dados
    $idiomaEN = null;
    $idiomaES = null;
    $idiomaPT = null;

    //tratamento para recuperar os checkbox que foram selecionados no formulario
    if(isset($_GET['chkPT'])){
 
        $idiomaPT = $_GET['chkPT'];

    } 

    if(isset($_GET['chkEN'])){
 
        $idiomaEN = $_GET['chkEN'];

    }

    if(isset($_GET['chkES'])){
 
        $idiomaES = $_GET['chkES'];

    }

    //escrevendo o conteudo das variaveis no navegador
    //concatenaçao é representado pelo ponto
    echo('nome:' . $nome . '<br>');
    echo('cidade:' . $cidade . '<br>');
    echo('sexo:' . $sexo . '<br>');
    echo('obs:' . $observacao . '<br>');
    echo('idioma:' . $idiomaPT . ' ' . $idiomaEN . ' ' .$idiomaES);


    //escrevendo o conteudo das variaveis no navegador

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

   
           /*codigo para desativar o redimensionamento da textarea*/

        textarea{

            resize: none;
        }
    </style>
</head>
<body>

    <!--
     
        get -> permite retirar os dados do forulario e 
        disponibilizar na url da pagina

        post -> permite retirar os dados do forulario e 
        disponibilizar em variaveis locais

        action -> é utilizado para especifiar em qual 
        arquivo ou pagina sera disponibilizado os dados do form

        input type = text -> permite colocar uma caixa do 
        tipo de texto

          size="" permite especificar o tamanho da caixa

          maxlenght= permite configurar a qtd de caracteres 
                     que sera digitado na

        select -> permite criar um lista de opçoes

            option -> é atraves dela que podemos criar
            itens dentro da lista
                   
            option value="" -> a propriedade value é obrigatoria
            para que o formulario consiga resgatar o valor do
            item selecionado e disponibilizar para o back-end

        input type = radio ->  permite criar opçoes de escolha
        
             obs: para onfigurar o radio fazendo com que permita 
             apenas uma opção de escolha é obrigatorio todas as inputs
             terem o mesmo nome

    -->

    <form name="frmCadastro" method="get" action="formularios.php">
       nome: <input type="text" name="txtNome" size="50" maxlength="30"> <br><br>
    
        cidade:

       <select name="sltCidade">
 
        <option value="" selected>Selecione uma cidade.</option>
        <option value="jandira"> Jandira</option>
        <option value="barueri"> Barueri</option>
        <option value="carapicuiba"> Carapicuiba</option>
        <option value="osasco"> Osasco</option>
        <option value="itapevi"> Itapevi</option>

       </select> <br><br>
       
       sexo:
       <input type="radio" name="rdoSexo" value="F"> Feminino
       <input type="radio" name="rdoSexo" value="M"> Masculino
       <input type="radio" name="rdoSexo" value="NB" checked> Neutro

       <br><br>
       idiomas:
       <input type="checkbox" name="chkPT" value="PT" checked> Portugues
       <input type="checkbox" name="chkEN" value="EN"> Ingles
       <input type="checkbox" name="chkES" value="ES"> Espanhol

       <br><br>
       observaçao:
       <textarea name="txtObs" cols="30" rows="5"></textarea>

       <!--  
           
           input type= "submit" -> permite retirar os dados do
           formulario atraves do proprio html, fazendo submit
           dos dados

           input type="button" -> somente sera possivel retirar os 
           dados do formulario atraves do javascript

           input type= "reset" -> permite limpar todos os elementos 
           do formularios
            
       -->

       <br><br>
       <input type="submit" name="btnSalvar" value="Salvar">
       <input type="reset" name="btnReset" value="Limpar">

    </form>
    </body>
</html>