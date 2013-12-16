<!-- File: /app/View/Times/edit.ctp -->

<h1>Editar Time</h1>
<?php
    echo $this->Form->create('Times', array('action' => 'edit'));
    echo $this->Form->input('nome');
    echo $this->Form->input('fundacao', array('label'=>'Fundação'));
    echo $this->Form->input('titulos', array('label'=>'Títulos'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Editar Time');

