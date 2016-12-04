<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Guest User'), ['action' => 'edit', $guestUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Guest User'), ['action' => 'delete', $guestUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guestUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Guest Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guest User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="guestUsers view large-9 medium-8 columns content">
    <h3><?= h($guestUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ip Address') ?></th>
            <td><?= h($guestUser->ip_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Long Url') ?></th>
            <td><?= h($guestUser->long_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Short Url') ?></th>
            <td><?= h($guestUser->short_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custom Url') ?></th>
            <td><?= h($guestUser->custom_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($guestUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Date') ?></th>
            <td><?= h($guestUser->created_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified Date') ?></th>
            <td><?= h($guestUser->modified_date) ?></td>
        </tr>
    </table>
</div>
