<div class="Contienes form">
    <h2><?php echo __('Contienes') ?></h2>

    <h3> <?php echo __('Introduzca Los Datos') ?></h3>
    
<?php
echo $this->Form->create('Contiene');

            echo $this->From->input('producto_id');
            echo $this->From->input('ingredientes_id');

echo $this->Form->end('Adicionar');
?>
</div>
