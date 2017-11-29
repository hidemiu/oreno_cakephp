<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BakeTest $bakeTest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bake Test'), ['action' => 'edit', $bakeTest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bake Test'), ['action' => 'delete', $bakeTest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bakeTest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bake Test'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bake Test'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bakeTest view large-9 medium-8 columns content">
    <h3><?= h($bakeTest->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($bakeTest->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bakeTest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Money') ?></th>
            <td><?= $this->Number->format($bakeTest->money) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bakeTest->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($bakeTest->modified) ?></td>
        </tr>
    </table>
</div>
