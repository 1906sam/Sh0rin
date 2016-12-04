<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $guestUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $guestUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Guest Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="guestUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($guestUser) ?>
    <fieldset>
        <legend><?= __('Edit Guest User') ?></legend>
        <?php
            echo $this->Form->input('ip_address');
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
