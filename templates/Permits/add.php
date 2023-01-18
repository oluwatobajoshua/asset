<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permit $permit
 */
?>
<?php
$this->assign('title', __('Add Permit'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Permits', 'url' => ['action' => 'index']],
    ['title' => 'Add'],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($permit) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('bidding_id', ['options' => $biddings]);
      echo $this->Form->control('receipt_no');
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

