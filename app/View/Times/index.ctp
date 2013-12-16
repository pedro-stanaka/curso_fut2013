<!-- File: /app/View/Times/index.ctp -->

<h1>Listagem de Times</h1>
<div class="row-fluid">
    <?= $this->Html->link('Cadastrar times', array('controller'=>'Times', 'action'=>'add')); ?>
</div>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Criado Em</th>
    </tr>

    <?php foreach ($times as $time): ?>
    <tr>
        <td><?php echo $time['Time']['id']; ?></td>    
        <td>
            <?php echo $this->Html->link($time['Time']['nome'],
array('controller' => 'times', 'action' => 'view', $time['Time']['id'])); ?>
        </td>
        <td><?php echo $time['Time']['created']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>