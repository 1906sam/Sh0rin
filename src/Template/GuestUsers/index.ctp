<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Guest User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="guestUsers index large-9 medium-8 columns content">
    <h3><?= __('Guest Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('long_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('short_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custom_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($guestUsers as $guestUser): ?>
            <tr>
                <td><?= $this->Number->format($guestUser->id) ?></td>
                <td><?= h($guestUser->ip_address) ?></td>
                <td><?= h($guestUser->long_url) ?></td>
                <td><?= h($guestUser->short_url) ?></td>
                <td><?= h($guestUser->custom_url) ?></td>
                <td><?= h($guestUser->created_date) ?></td>
                <td><?= h($guestUser->modified_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $guestUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $guestUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $guestUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guestUser->id)]) ?>
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
