<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Url Information'), ['action' => 'edit', $urlInformation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Url Information'), ['action' => 'delete', $urlInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $urlInformation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Url Informations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Url Information'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Data Urls'), ['controller' => 'DataUrls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Url'), ['controller' => 'DataUrls', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="urlInformations view large-9 medium-8 columns content">
    <h3><?= h($urlInformation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Data Url') ?></th>
            <td><?= $urlInformation->has('data_url') ? $this->Html->link($urlInformation->data_url->id, ['controller' => 'DataUrls', 'action' => 'view', $urlInformation->data_url->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Browser') ?></th>
            <td><?= h($urlInformation->browser) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Device') ?></th>
            <td><?= h($urlInformation->device) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip Address') ?></th>
            <td><?= h($urlInformation->ip_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($urlInformation->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($urlInformation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Date') ?></th>
            <td><?= h($urlInformation->created_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified Date') ?></th>
            <td><?= h($urlInformation->modified_date) ?></td>
        </tr>
    </table>
</div>
