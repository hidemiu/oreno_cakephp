<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test1[]|\Cake\Collection\CollectionInterface $test1
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Test1'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="test1 index large-9 medium-8 columns content">
    <h3><?= __('Test1') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('money') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($test1 as $test1): ?>
            <tr>
                <td><?= $this->Number->format($test1->id) ?></td>
                <td><?= h($test1->name) ?></td>
                <td><?= $this->Number->format($test1->money) ?></td>
                <td><?= h($test1->created) ?></td>
                <td><?= h($test1->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $test1->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $test1->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $test1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test1->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
