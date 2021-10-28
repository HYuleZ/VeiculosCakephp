<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo $veiculo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Veículo'), ['action' => 'edit', $veiculo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Veículo'), ['action' => 'delete', $veiculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Veículos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Veículo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="veiculos view content">
            <h3><?= h($veiculo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descrição Veiculo') ?></th>
                    <td><?= h($veiculo->descricao_veiculo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano') ?></th>
                    <td><?= h($veiculo->ano) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= $veiculo->has('marca') ? $this->Html->link($veiculo->marca->id, ['controller' => 'Marcas', 'action' => 'view', $veiculo->marca->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($veiculo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($veiculo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modificado') ?></th>
                    <td><?= h($veiculo->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
