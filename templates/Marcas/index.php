<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca[]|\Cake\Collection\CollectionInterface $marcas
 */
?>
<div class="marcas index content">
    <?= $this->Html->link(__('Nova Marca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Marcas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descrição_marca') ?></th>
                    <th><?= $this->Paginator->sort('criado') ?></th>
                    <th><?= $this->Paginator->sort('modificado') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marcas as $marca): ?>
                <tr>
                    <td><?= $this->Number->format($marca->id) ?></td>
                    <td><?= h($marca->descricao_marca) ?></td>
                    <td><?= h($marca->created) ?></td>
                    <td><?= h($marca->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $marca->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $marca->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $marca->id], ['confirm' => __('Deseja excluir o item # {0}?', $marca->id)]) ?>
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
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registros de {{count}} no total')) ?></p>
    </div>
</div>

<a href="home"><button class="button-page">Início</button></a>
<style>
    .button-page{
        margin-top: 20px;
    }
</style>

<a href="veiculos"><button class="button-page">Tabela de Veículos</button></a>
<style>
    .button-page{
        margin-top: 20px;
    }
</style>

