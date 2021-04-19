<?php
session_start();
require 'inc/head.php';
require 'inc/data/products.php';

$countProducts = array_count_values($_SESSION['cart']);
?>
<section class="cookies  container w-25">
<h2 class="mt-5">List of selected products</h2>
    <table class="table table-striped  " >
        <thead>
        <tr>
            <th scope="col" >Product</th>
            <th scope="col">Quantity</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($countProducts as $productId => $quantity):?>
                <tr>
                    <td scope="row"><?= $catalog[$productId]['name']; ?></td>
                    <td><?=$quantity?></td>
                </tr>
            <?php endforeach;?>

        </tbody>
    </table>
</section>

<?php require 'inc/foot.php'; ?>
