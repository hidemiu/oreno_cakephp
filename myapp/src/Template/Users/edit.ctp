<div class="Edit users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->input($user->username) ?>
        <?= $this->Form->input($user->password) ?>
        <?= $this->Form->input($user->role, [
            'options' => ['admin' => 'Admin', 'user' => 'user']
        ]) ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>
<?= $this->Form->button($this->Html->link('Back', ['action' => 'index'])); ?>