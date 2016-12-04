<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Url Information'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Data Urls'), ['controller' => 'DataUrls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Data Url'), ['controller' => 'DataUrls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="urlInformations index large-9 medium-8 columns content">
    <h3><?= __('Url Informations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_url_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('browser') ?></th>
                <th scope="col"><?= $this->Paginator->sort('device') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($urlInformations as $urlInformation): ?>
            <tr>
                <td><?= $this->Number->format($urlInformation->id) ?></td>
                <td><?= $urlInformation->has('data_url') ? $this->Html->link($urlInformation->data_url->id, ['controller' => 'DataUrls', 'action' => 'view', $urlInformation->data_url->id]) : '' ?></td>
                <td><?= h($urlInformation->browser) ?></td>
                <td><?= h($urlInformation->device) ?></td>
                <td><?= h($urlInformation->ip_address) ?></td>
                <td><?= h($urlInformation->location) ?></td>
                <td><?= h($urlInformation->created_date) ?></td>
                <td><?= h($urlInformation->modified_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $urlInformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $urlInformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $urlInformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $urlInformation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
