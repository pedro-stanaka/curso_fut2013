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
        <th>Ações</th>
    </tr>

    <?php foreach ($times as $time): ?>
    <tr>
        <td><?php echo $time['Time']['id']; ?></td>    
        <td>
            <?php echo $this->Html->link($time['Time']['nome'],
array('controller' => 'times', 'action' => 'view', $time['Time']['id'])); ?>
        </td>
        <td><?php echo $time['Time']['created']; ?></td>
        <td><?php echo $this->Html->link('Editar', array('action' => 'edit',$time['Time']['id'])); ?>
        
            <?php 
                echo $this->Form->postLink(
                    'Excluir', array('controller'=>'Times', 'action'=>'delete', $time['Time']['id'])); 
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>



