<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test1 $test1
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Test1'), ['action' => 'edit', $test1->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Test1'), ['action' => 'delete', $test1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test1->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Test1'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test1'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="test1 view large-9 medium-8 columns content">
    <h3><?= h($test1->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($test1->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($test1->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Money') ?></th>
            <td><?= $this->Number->format($test1->money) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($test1->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($test1->modified) ?></td>
        </tr>
    </table>
</div>
