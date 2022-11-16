<form>
<!-- Como não foi colocado Method, o padrão é GET -->

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="Enviar">

</form>
<?php
if(isset($_GET)){
    foreach($_GET as $key => $value ){
        echo "Nome do campo: ".$key."<br>";
        echo "Valor do campo: ".$value;

        echo "<hr>";
    }
}

//$key é o nome dos campos no caso nos inputs são name e value
//$value são os dados que vão ser digitados

?>

