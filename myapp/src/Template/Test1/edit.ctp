<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test1 $test1
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $test1->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $test1->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Test1'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="test1 form large-9 medium-8 columns content">
    <?= $this->Form->create($test1) ?>
    <fieldset>
        <legend><?= __('Edit Test1') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('money');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
