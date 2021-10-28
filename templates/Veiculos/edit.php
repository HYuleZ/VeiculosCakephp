<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo $veiculo
 * @var string[]|\Cake\Collection\CollectionInterface $marcas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $veiculo->id],
                ['confirm' => __('Deseja excluir o item #{0}?', $veiculo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Veículos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="veiculos form content">
            <?= $this->Form->create($veiculo) ?>
            <fieldset>
                <legend><?= __('Editar Veículo') ?></legend>
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
