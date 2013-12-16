<!-- File: /app/View/Times/add.ctp -->

<h1>Cadastro de times</h1>
<?php
echo $this->Form->create('Time');
echo $this->Form->input('nome');
echo $this->Form->input('fundacao', array('label'=>"Fundação"));
echo $this->Form->input('titulos', array('label'=>"Títulos"));
echo $this->Form->end('Cadastrar');

