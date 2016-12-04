<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Url Informations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Data Urls'), ['controller' => 'DataUrls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Data Url'), ['controller' => 'DataUrls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="urlInformations form large-9 medium-8 columns content">
    <?= $this->Form->create($urlInformation) ?>
    <fieldset>
        <legend><?= __('Add Url Information') ?></legend>
        <?php
            echo $this->Form->input('data_url_id', ['options' => $dataUrls]);
            echo $this->Form->input('browser');
            echo $this->Form->input('device');
            echo $this->Form->input('ip_address');
            echo $this->Form->input('location');
            echo $this->Form->input('created_date');
            echo $this->Form->input('modified_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
