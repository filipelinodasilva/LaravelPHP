<h1>Listagem de Produtos</h1>

<p><a href=" <?= url('/imoveis/novo') ?> ">Cadastrar Novo Imóvel</a></p>

<?php

if(!empty($properties)){

    echo "<table>";

        echo "<tr>
                 <td>Título</td>
                 <td>Valor de Locação</td>
                 <td>Valor de Compra</td>
              </tr>";

    foreach($properties as $property){
        echo "<tr>
                 <td>{$property->title}</td>
                 <td>{$property->rental_price}</td>
                 <td>{$property->sale_price}</td>
              </tr>";
    }
        echo "</table>";

}
