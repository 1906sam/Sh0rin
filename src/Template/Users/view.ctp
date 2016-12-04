<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Data Urls'), ['controller' => 'DataUrls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Url'), ['controller' => 'DataUrls', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Id') ?></th>
            <td><?= h($user->email_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Date') ?></th>
            <td><?= h($user->created_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified Date') ?></th>
            <td><?= h($user->modified_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Data Urls') ?></h4>
        <?php if (!empty($user->data_urls)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Long Url') ?></th>
                <th scope="col"><?= __('Short Url') ?></th>
                <th scope="col"><?= __('Custom Url') ?></th>
                <th scope="col"><?= __('Created Date') ?></th>
                <th scope="col"><?= __('Modified Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->data_urls as $dataUrls): ?>
            <tr>
                <td><?= h($dataUrls->id) ?></td>
                <td><?= h($dataUrls->user_id) ?></td>
                <td><?= h($dataUrls->long_url) ?></td>
                <td><?= h($dataUrls->short_url) ?></td>
                <td><?= h($dataUrls->custom_url) ?></td>
                <td><?= h($dataUrls->created_date) ?></td>
                <td><?= h($dataUrls->modified_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DataUrls', 'action' => 'view', $dataUrls->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DataUrls', 'action' => 'edit', $dataUrls->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DataUrls', 'action' => 'delete', $dataUrls->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataUrls->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
