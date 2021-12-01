<h1>Formulário de Edição :: imóveis</h1>

<?php
$property = $property[0];
?>

<form action="<?= url('/imoveis/update', ['id' => $property->id]); ?>" method="post">

    // todo formulário deve ser adicionado esse script para gerar um token de acesso ao banco. <br/>

    <?= csrf_field(); ?>
    <?= method_field('PUT'); ?>

    <label for="title">Título do imóvel</label>
    <input type="text" name="title" id="title" value="<?= $property->title ?>">

    <br />

    <label for="description">Descrição</label>
    <textarea name="description" id="description" cols="30" rows="10"> <?= $property->description ?> </textarea>

    <br />

    <label for="rental_price">Valor de Locação</label>
    <input type="text" name="rental_price" id="rental_price" value="<?= number_format($property->rental_price, 2, ',', '.'); ?>">

    <br />

    <label for="sale_price">Valor de Compra</label>
    <input type="text" name="sale_price" id="sale_price" value="<?= number_format($property->sale_price, 2, ',', '.'); ?>">

    <br />

    <button type="submit">Cadastrar Imóvel</button>

</form>
