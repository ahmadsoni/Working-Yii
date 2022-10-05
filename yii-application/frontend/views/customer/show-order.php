<?php 

use yii\bootstrap5\Html;

?>

<div class="showOrder">
  <h2><?= $customer->name ?></h2>
    <h5>List Order</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Order Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customer->order as $order): ?>
                <?php foreach ($order->items as $item): ?>
                <tr>
                    <td><?= $order->id ?></td>
                    <td><?= $order->date ?></td>
                    <td><?= $item->name ?></td>
                    <td>
                        <?= Html::a('View', ['order/view', 'id' => $order->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Update', ['order/update', 'id' => $order->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['order/delete', 'id' => $order->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
</div>