<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo[]|\Cake\Collection\CollectionInterface $veiculos
 */
?>
<div class="veiculos index content">
    <?= $this->Html->link(__('Novo Veículo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Veículos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descricao_veículo') ?></th>
                    <th><?= $this->Paginator->sort('ano') ?></th>
                    <th><?= $this->Paginator->sort('marca_id') ?></th>
                    <th><?= $this->Paginator->sort('Criado') ?></th>
                    <th><?= $this->Paginator->sort('modificado') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($veiculos as $veiculo): ?>
                <tr>
                    <td><?= $this->Number->format($veiculo->id) ?></td>
                    <td><?= h($veiculo->descricao_veiculo) ?></td>
                    <td><?= h($veiculo->ano) ?></td>
                    <td><?= $veiculo->has('marca') ? $this->Html->link($veiculo->marca->id, ['controller' => 'Marcas', 'action' => 'view', $veiculo->marca->id]) : '' ?></td>
                    <td><?= h($veiculo->created) ?></td>
                    <td><?= h($veiculo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $veiculo->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $veiculo->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $veiculo->id], ['confirm' => __('Deseja excluir o item #{0}?', $veiculo->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('início')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próxima') . ' >') ?>
            <?= $this->Paginator->last(__('última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')) ?></p>
    </div>
</div>

<a href="home"><button class="button-page">Início</button></a>
<style>
    .button-page{
        margin-top: 20px;
    }
</style>

<a href="marcas"><button class="button2-page">Tabela de marcas</button></a>
<style>
    .button2-page{
        margin-top: 20px;
    }
</style>