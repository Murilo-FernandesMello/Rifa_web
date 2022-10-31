<?php
  function Resposta(){
      
      $item = $_POST['item'];
      $data = $_POST['data'];
      $numero = $_POST['num'];
      $valor = $_POST['valor'];

    for($i=0; $i <= $numero; $i++){
        echo "
        <H1>Ação entre amigos</H1>
    <br>
    <br>Prêmio: $item 
    <br>Data: $data
    <br>Valor: $valor
    <br>Número: $i
    <br>
    ";
    }
}
Resposta();

?>