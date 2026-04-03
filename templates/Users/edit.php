<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?php if ($this->request->getAttribute('identity')->rol == 1): ?>
                <?= $this->Form->postLink(
                    __('<i class="bi bi-trash"></i> Eliminar Usuario'),
                    ['action' => 'delete', $user->id],
                    ['confirm' => __('¿Estás seguro de que deseas eliminar al usuario # {0}?', $user->id), 'class' => 'side-nav-item', 'escape' => false]
                ) ?>
            <?php endif; ?>
            <?= $this->Html->link(__('<i class="bi bi-list-ul"></i> Lista de Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item', 'escape' => false]) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content user-card">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Editar Perfil de Usuario') ?></legend>
                <?php
                    echo $this->Form->control('nombre', ['label' => __('First Name')]);
                    echo $this->Form->control('apellido', ['label' => __('Last Name')]);
                    echo $this->Form->control('correo', ['label' => __('Email')]);
                    echo $this->Form->control('password', ['label' => __('Password'), 'value' => '', 'required' => false, 'placeholder' => __('Leave blank to keep current')]);
                    echo $this->Form->control('language', [
                        'label' => __('Language'),
                        'type' => 'select',
                        'options' => ['es' => 'Español', 'en' => 'English']
                    ]);
                    if ($this->request->getAttribute('identity') && $this->request->getAttribute('identity')->rol == 1) {
                        echo $this->Form->control('rol', ['options' => [1 => __('Administrador'), 2 => __('Usuario')], 'label' => __('Role')]);
                        echo $this->Form->control('estado', [
                            'options' => ['activo' => __('Activa'), 'inactivo' => __('Inactiva')],
                            'label' => __('Status')
                        ]);
                    }
                ?>
            </fieldset>
            <?= $this->Form->button('<i class="bi bi-save"></i> ' . __('Guardar Cambios'), ['escapeTitle' => false, 'escape' => false]) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
