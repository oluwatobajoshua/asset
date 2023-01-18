<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permit $permit
 */
?>
<?php
$this->assign('title', __('Edit Permit'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Permits', 'url' => ['action' => 'index']],
    ['title' => 'View', 'url' => ['action' => 'view', $permit->id]],
    ['title' => 'Edit'],
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
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $permit->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $permit->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>

