<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moneda $moneda
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Moneda'), ['action' => 'edit', $moneda->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Moneda'), ['action' => 'delete', $moneda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $moneda->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Monedas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Moneda'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="monedas view content">
            <h3><?= h($moneda->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($moneda->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($moneda->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Simbolo') ?></th>
                    <td><?= h($moneda->simbolo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($moneda->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($moneda->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tasa Cambio') ?></th>
                    <td><?= $moneda->tasa_cambio === null ? '' : $this->Number->format($moneda->tasa_cambio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($moneda->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activa') ?></th>
                    <td><?= $moneda->activa ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>