<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link('<i class="bi bi-plus-lg"></i> ' . __('New User'), ['action' => 'add'], ['class' => 'button float-right', 'escape' => false]) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', __('ID')) ?></th>
                    <th><?= $this->Paginator->sort('nombre', __('First Name')) ?></th>
                    <th><?= $this->Paginator->sort('apellido', __('Last Name')) ?></th>
                    <th><?= $this->Paginator->sort('correo', __('Email')) ?></th>
                    <th><?= $this->Paginator->sort('created', __('Created')) ?></th>
                    <th><?= $this->Paginator->sort('modified', __('Modified')) ?></th>
                    <th><?= $this->Paginator->sort('language', __('Language')) ?></th>
                    <th><?= $this->Paginator->sort('rol', __('Role')) ?></th>
                    <th><?= $this->Paginator->sort('estado', __('Status')) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->nombre) ?></td>
                    <td><?= h($user->apellido) ?></td>
                    <td><?= h($user->correo) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td><?= h($user->language) ?></td>
                    <td>
                        <span class="badge role-<?= $user->rol ?>">
                            <?= $user->rol == 1 ? __('Administrador') : __('Usuario') ?>
                        </span>
                    </td>
                    <td><?= h($user->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('<i class="bi bi-eye"></i>', ['action' => 'view', $user->id], ['escape' => false, 'title' => __('View')]) ?>
                        <?= $this->Html->link('<i class="bi bi-pencil-square"></i>', ['action' => 'edit', $user->id], ['escape' => false, 'title' => __('Edit')]) ?>
                        <?php if ($this->request->getAttribute('identity')->rol == 1): ?>
                            <?= $this->Form->postLink(
                                '<i class="bi bi-trash"></i>',
                                ['action' => 'delete', $user->id],
                                [
                                    'method' => 'delete',
                                    'confirm' => __('Are you sure you want to delete # {0}?', $user->id),
                                    'escape' => false,
                                    'escapeTitle' => false,
                                    'class' => 'delete',
                                    'title' => __('Delete')
                                ]
                            ) ?>
                        <?php endif; ?>
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