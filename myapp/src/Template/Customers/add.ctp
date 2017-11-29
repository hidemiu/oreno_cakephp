<div class="customers form">
<?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('Add Customer') ?></legend>
        <?= $this->Form->input('first_name') ?>
        <?= $this->Form->input('last_name') ?>
        <?= $this->Form->input('telephone_number') ?>
        <?= $this->Form->input('mailaddress') ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>