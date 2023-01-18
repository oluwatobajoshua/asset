<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php
$this->assign('title', __('Add User'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Users', 'url' => ['action' => 'index']],
    ['title' => 'Add'],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($user) ?>
  <div class="card-body">
    <?php
      echo $this->Form->control('employee_id');
      echo $this->Form->control('role_id', ['options' => $roles]);
      echo $this->Form->control('username');
      echo $this->Form->control('password');
      echo $this->Form->control('raw_password');
      echo $this->Form->control('quest_one');
      echo $this->Form->control('ans_one');
      echo $this->Form->control('quest_two');
      echo $this->Form->control('ans_two');
      echo $this->Form->control('passwdIsValid', ['custom' => true]);
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

