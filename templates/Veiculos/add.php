<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo $veiculo
 * @var \Cake\Collection\CollectionInterface|string[] $marcas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Listar Veiculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="veiculos form content">
            <?= $this->Form->create($veiculo) ?>
            <fieldset>
                <legend><?= __('Adicionar Veiculo') ?></legend>
                <?php
                    echo $this->Form->control('descricao_veiculo');
                    echo $this->Form->control('ano');
                    echo $this->Form->control('marca_id', ['options' => $marcas]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submeter')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
