<div class="users login content user-card">
    <?= $this->Flash->render() ?>
    <h3><?= __('Acceso al Sistema') ?></h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Ingresa tus credenciales') ?></legend>
        <?= $this->Form->control('correo', [
            'type' => 'email',
            'required' => true,
            'label' => __('Email'),
            'placeholder' => __('example@email.com')
        ]) ?>
        <?= $this->Form->control('password', [
            'type' => 'password',
            'required' => true,
            'label' => __('Password'),
            'placeholder' => '••••••••'
        ]) ?>
    </fieldset>
    <?= $this->Form->button('<i class="bi bi-box-arrow-in-right"></i> ' . __('Login'), ['escapeTitle' => false, 'escape' => false]); ?>
    <?= $this->Form->end() ?>

    <hr style="border: 0; border-top: 1px solid var(--border); margin: 2rem 0;">
    <div style="text-align: center;">
        <p><?= __('Don\'t have an account?') ?> <?= $this->Html->link(__('Register Here'), ['action' => 'add'], ['style' => 'color: var(--primary); font-weight: 600; text-decoration: none;']) ?></p>
    </div>
</div>
