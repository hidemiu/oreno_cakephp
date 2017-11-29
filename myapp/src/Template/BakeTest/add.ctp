<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BakeTest $bakeTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bake Test'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bakeTest form large-9 medium-8 columns content">
    <?= $this->Form->create($bakeTest) ?>
    <fieldset>
        <legend><?= __('Add Bake Test') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('money');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
