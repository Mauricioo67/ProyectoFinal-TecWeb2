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
            <?= $this->Html->link(__('List Monedas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="monedas form content">
            <?= $this->Form->create($moneda) ?>
            <fieldset>
                <legend><?= __('Add Moneda') ?></legend>
                <?php
                    echo $this->Form->control('nombre', ['label' => __('Name')]);
                    echo $this->Form->control('codigo', ['label' => __('Code')]);
                    echo $this->Form->control('simbolo', ['label' => __('Symbol')]);
                    echo $this->Form->control('pais', ['label' => __('Country')]);
                    echo $this->Form->control('tasa_cambio', ['label' => __('Exchange Rate')]);
                    echo $this->Form->control('activa', ['label' => __('Active')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
