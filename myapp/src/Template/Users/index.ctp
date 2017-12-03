<h1>users</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user->id ?></td>
        <td><?= $this->Html->link($user->username, ['action' => 'view', $user->id]) ?></td>
        <td><?= $this->Html->link('edit', ['action' => 'edit', $user->id]) ?></td>
    </tr>
    <?php endforeach; ?>
</table>


<div align="right">
    <?= $this->Form->button($this->Html->link('Add new user', ['action' => 'add'])); ?>

</div>

