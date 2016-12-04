<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Data Urls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Url Informations'), ['controller' => 'UrlInformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Url Information'), ['controller' => 'UrlInformations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dataUrls form large-9 medium-8 columns content">
    <?= $this->Form->create($dataUrl) ?>
    <fieldset>
        <legend><?= __('Add Data Url') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('long_url');
            echo $this->Form->input('short_url');
            echo $this->Form->input('custom_url');
            echo $this->Form->input('created_date');
            echo $this->Form->input('modified_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
