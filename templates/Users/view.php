<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link('<i class="bi bi-pencil"></i> ' . __('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item', 'escape' => false]) ?>
            <?php if ($this->request->getAttribute('identity')->rol == 1): ?>
                <?= $this->Form->postLink('<i class="bi bi-trash"></i> ' . __('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item', 'escape' => false, 'escapeTitle' => false]) ?>
            <?php endif; ?>
            <?= $this->Html->link('<i class="bi bi-list-ul"></i> ' . __('List Users'), ['action' => 'index'], ['class' => 'side-nav-item', 'escape' => false]) ?>
            <?= $this->Html->link('<i class="bi bi-person-plus"></i> ' . __('New User'), ['action' => 'add'], ['class' => 'side-nav-item', 'escape' => false]) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content user-card">
            <h3><?= h($user->nombre . ' ' . $user->apellido) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($user->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($user->apellido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Language') ?></th>
                    <td><?= h($user->language) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $user->rol == 1 ? __('Administrador') : __('Usuario') ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($user->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>