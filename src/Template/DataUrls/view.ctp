<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Data Url'), ['action' => 'edit', $dataUrl->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Data Url'), ['action' => 'delete', $dataUrl->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataUrl->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Data Urls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Data Url'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Url Informations'), ['controller' => 'UrlInformations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Url Information'), ['controller' => 'UrlInformations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dataUrls view large-9 medium-8 columns content">
    <h3><?= h($dataUrl->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $dataUrl->has('user') ? $this->Html->link($dataUrl->user->id, ['controller' => 'Users', 'action' => 'view', $dataUrl->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Long Url') ?></th>
            <td><?= h($dataUrl->long_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Short Url') ?></th>
            <td><?= h($dataUrl->short_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custom Url') ?></th>
            <td><?= h($dataUrl->custom_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dataUrl->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Date') ?></th>
            <td><?= h($dataUrl->created_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified Date') ?></th>
            <td><?= h($dataUrl->modified_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Url Informations') ?></h4>
        <?php if (!empty($dataUrl->url_informations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Data Url Id') ?></th>
                <th scope="col"><?= __('Browser') ?></th>
                <th scope="col"><?= __('Device') ?></th>
                <th scope="col"><?= __('Ip Address') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('Created Date') ?></th>
                <th scope="col"><?= __('Modified Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dataUrl->url_informations as $urlInformations): ?>
            <tr>
                <td><?= h($urlInformations->id) ?></td>
                <td><?= h($urlInformations->data_url_id) ?></td>
                <td><?= h($urlInformations->browser) ?></td>
                <td><?= h($urlInformations->device) ?></td>
                <td><?= h($urlInformations->ip_address) ?></td>
                <td><?= h($urlInformations->location) ?></td>
                <td><?= h($urlInformations->created_date) ?></td>
                <td><?= h($urlInformations->modified_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UrlInformations', 'action' => 'view', $urlInformations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UrlInformations', 'action' => 'edit', $urlInformations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UrlInformations', 'action' => 'delete', $urlInformations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $urlInformations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
