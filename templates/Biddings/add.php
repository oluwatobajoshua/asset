<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bidding $bidding
 */
?>
<?php
$this->assign('title', __('Add Bidding'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Biddings', 'url' => ['action' => 'index']],
    ['title' => 'Add'],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($bidding) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('user_id', ['options' => $users]);
      echo $this->Form->control('asset_qty');
      echo $this->Form->control('amount');
      echo $this->Form->control('remark');
      echo $this->Form->control('approved_amount');
      echo $this->Form->control('reviewed_amount');
      echo $this->Form->control('status_id', ['options' => $statuses]);
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>

