<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Moneda> $monedas
 */
?>
<div class="monedas index content">
    <?= $this->Html->link(__('New Moneda'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Monedas') ?></h3>
    <div class="search-box" style="margin-bottom: 20px;">
        <?= $this->Form->create(null, ['type' => 'get', 'valueSources' => 'query']) ?>
        <div style="display: flex; gap: 10px; align-items: flex-end; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 200px;">
                <?= $this->Form->control('search', ['label' => __('Search (Name, Code, Country)'), 'placeholder' => __('e.g. Dollar, USD, USA')]) ?>
            </div>
            <div style="width: 150px;">
                <?= $this->Form->control('activa', ['label' => __('Status'), 'type' => 'select', 'options' => ['' => __('Any'), '1' => __('Active'), '0' => __('Inactive')]]) ?>
            </div>
            <div style="width: 150px;">
                <?= $this->Form->control('fecha', ['label' => __('Registration Date'), 'type' => 'date']) ?>
            </div>
            <div>
                <?= $this->Form->button(__('Filter'), ['class' => 'button']) ?>
                <?= $this->Html->link(__('Clear'), ['action' => 'index'], ['class' => 'button secondary']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre', __('Name')) ?></th>
                    <th><?= $this->Paginator->sort('codigo', __('Code')) ?></th>
                    <th><?= $this->Paginator->sort('simbolo', __('Symbol')) ?></th>
                    <th><?= $this->Paginator->sort('pais', __('Country')) ?></th>
                    <th><?= $this->Paginator->sort('tasa_cambio', __('Exchange Rate')) ?></th>
                    <th><?= $this->Paginator->sort('activa', __('Active')) ?></th>
                    <th><?= $this->Paginator->sort('created', __('Created')) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($monedas as $moneda): ?>
                <tr>
                    <td><?= $this->Number->format($moneda->id) ?></td>
                    <td><?= h($moneda->nombre) ?></td>
                    <td><?= h($moneda->codigo) ?></td>
                    <td><?= h($moneda->simbolo) ?></td>
                    <td><?= h($moneda->pais) ?></td>
                    <td><?= $moneda->tasa_cambio === null ? '' : $this->Number->format($moneda->tasa_cambio) ?></td>
                    <td><?= h($moneda->activa) ?></td>
                    <td><?= h($moneda->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('<i class="bi bi-eye"></i>', ['action' => 'view', $moneda->id], ['escape' => false, 'title' => __('View')]) ?>
                        <?= $this->Html->link('<i class="bi bi-pencil-square"></i>', ['action' => 'edit', $moneda->id], ['escape' => false, 'title' => __('Edit')]) ?>
                        <?= $this->Form->postLink(
                            '<i class="bi bi-trash"></i>',
                            ['action' => 'delete', $moneda->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $moneda->id),
                                'escape' => false,
                                'escapeTitle' => false,
                                'title' => __('Delete'),
                                'class' => 'delete'
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>