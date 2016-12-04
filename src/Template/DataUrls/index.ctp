<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Data Url'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Url Informations'), ['controller' => 'UrlInformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Url Information'), ['controller' => 'UrlInformations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dataUrls index large-9 medium-8 columns content">
    <h3><?= __('Data Urls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('long_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('short_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custom_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataUrls as $dataUrl): ?>
            <tr>
                <td><?= $this->Number->format($dataUrl->id) ?></td>
                <td><?= $dataUrl->has('user') ? $this->Html->link($dataUrl->user->id, ['controller' => 'Users', 'action' => 'view', $dataUrl->user->id]) : '' ?></td>
                <td><?= h($dataUrl->long_url) ?></td>
                <td><?= h($dataUrl->short_url) ?></td>
                <td><?= h($dataUrl->custom_url) ?></td>
                <td><?= h($dataUrl->created_date) ?></td>
                <td><?= h($dataUrl->modified_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dataUrl->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dataUrl->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dataUrl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataUrl->id)]) ?>
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
