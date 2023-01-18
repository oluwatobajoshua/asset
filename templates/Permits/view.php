<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Permit $permit
 */
?>

<?php
$this->assign('title', __('Permit'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Permits', 'url' => ['action' => 'index']],
    ['title' => 'View'],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($permit->id) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Bidding') ?></th>
            <td><?= $permit->has('bidding') ? $this->Html->link($permit->bidding->id, ['controller' => 'Biddings', 'action' => 'view', $permit->bidding->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($permit->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Receipt No') ?></th>
            <td><?= $this->Number->format($permit->receipt_no) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($permit->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($permit->modified) ?></td>
        </tr>
    </table>
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
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $permit->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


