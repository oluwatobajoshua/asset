<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<?php
$this->assign('title', __('User'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Users', 'url' => ['action' => 'index']],
    ['title' => 'View'],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($user->id) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Raw Password') ?></th>
            <td><?= h($user->raw_password) ?></td>
        </tr>
        <tr>
            <th><?= __('Quest One') ?></th>
            <td><?= h($user->quest_one) ?></td>
        </tr>
        <tr>
            <th><?= __('Ans One') ?></th>
            <td><?= h($user->ans_one) ?></td>
        </tr>
        <tr>
            <th><?= __('Quest Two') ?></th>
            <td><?= h($user->quest_two) ?></td>
        </tr>
        <tr>
            <th><?= __('Ans Two') ?></th>
            <td><?= h($user->ans_two) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Employee Id') ?></th>
            <td><?= $this->Number->format($user->employee_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('PasswdIsValid') ?></th>
            <td><?= $user->passwdIsValid ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $user->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-employees view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Employees') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Employees' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'Employees' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('Branch Id') ?></th>
          <th><?= __('Staff No') ?></th>
          <th><?= __('First Name') ?></th>
          <th><?= __('Last Name') ?></th>
          <th><?= __('Phone') ?></th>
          <th><?= __('Email') ?></th>
          <th><?= __('Other Name') ?></th>
          <th><?= __('Reporting To') ?></th>
          <th><?= __('Name Of Spouse') ?></th>
          <th><?= __('Years Of Experience') ?></th>
          <th><?= __('Grade Id') ?></th>
          <th><?= __('Salary') ?></th>
          <th><?= __('Transport Allowance') ?></th>
          <th><?= __('Housing Allowance') ?></th>
          <th><?= __('Utility Allowance') ?></th>
          <th><?= __('Leave Allowance') ?></th>
          <th><?= __('Section Id') ?></th>
          <th><?= __('Cadre Id') ?></th>
          <th><?= __('Bank Id') ?></th>
          <th><?= __('Acct No') ?></th>
          <th><?= __('Service Charge Bank') ?></th>
          <th><?= __('Service Charge Number') ?></th>
          <th><?= __('Gender Id') ?></th>
          <th><?= __('Religion Id') ?></th>
          <th><?= __('Local Id') ?></th>
          <th><?= __('Home Town') ?></th>
          <th><?= __('State Of Origin Id') ?></th>
          <th><?= __('State Id') ?></th>
          <th><?= __('Physical Posture Id') ?></th>
          <th><?= __('Marital Status Id') ?></th>
          <th><?= __('Highest Education Id') ?></th>
          <th><?= __('Housing Upfront') ?></th>
          <th><?= __('Designation Id') ?></th>
          <th><?= __('Status Id') ?></th>
          <th><?= __('Date Of Birth') ?></th>
          <th><?= __('Date Joined') ?></th>
          <th><?= __('Domestic Allowance') ?></th>
          <th><?= __('Tax Number') ?></th>
          <th><?= __('Tax Relief') ?></th>
          <th><?= __('Tax Paid To Date') ?></th>
          <th><?= __('Pension No') ?></th>
          <th><?= __('Medical Allowance') ?></th>
          <th><?= __('Entertainment Allowance') ?></th>
          <th><?= __('Other Allowance') ?></th>
          <th><?= __('Personal Loan') ?></th>
          <th><?= __('Pers Loan Rep') ?></th>
          <th><?= __('Pers Loan Paid') ?></th>
          <th><?= __('Pers Loan Inst') ?></th>
          <th><?= __('Car Loan') ?></th>
          <th><?= __('Car Loan Rep') ?></th>
          <th><?= __('Car Loan Inst') ?></th>
          <th><?= __('Car Loan Paid') ?></th>
          <th><?= __('Whl Cics') ?></th>
          <th><?= __('Pension Control') ?></th>
          <th><?= __('Salary Advance') ?></th>
          <th><?= __('Salary Advance Rep') ?></th>
          <th><?= __('Salary Advance Paid') ?></th>
          <th><?= __('Salary Advance Inst') ?></th>
          <th><?= __('Drivers Allowance') ?></th>
          <th><?= __('Bro Cics') ?></th>
          <th><?= __('User Id') ?></th>
          <th><?= __('Contribution') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($user->employees)) { ?>
        <tr>
            <td colspan="66" class="text-muted">
              Employees record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($user->employees as $employees) : ?>
        <tr>
            <td><?= h($employees->id) ?></td>
            <td><?= h($employees->branch_id) ?></td>
            <td><?= h($employees->staff_no) ?></td>
            <td><?= h($employees->first_name) ?></td>
            <td><?= h($employees->last_name) ?></td>
            <td><?= h($employees->phone) ?></td>
            <td><?= h($employees->email) ?></td>
            <td><?= h($employees->other_name) ?></td>
            <td><?= h($employees->reporting_to) ?></td>
            <td><?= h($employees->name_of_spouse) ?></td>
            <td><?= h($employees->years_of_experience) ?></td>
            <td><?= h($employees->grade_id) ?></td>
            <td><?= h($employees->salary) ?></td>
            <td><?= h($employees->transport_allowance) ?></td>
            <td><?= h($employees->housing_allowance) ?></td>
            <td><?= h($employees->utility_allowance) ?></td>
            <td><?= h($employees->leave_allowance) ?></td>
            <td><?= h($employees->section_id) ?></td>
            <td><?= h($employees->cadre_id) ?></td>
            <td><?= h($employees->bank_id) ?></td>
            <td><?= h($employees->acct_no) ?></td>
            <td><?= h($employees->service_charge_bank) ?></td>
            <td><?= h($employees->service_charge_number) ?></td>
            <td><?= h($employees->gender_id) ?></td>
            <td><?= h($employees->religion_id) ?></td>
            <td><?= h($employees->local_id) ?></td>
            <td><?= h($employees->home_town) ?></td>
            <td><?= h($employees->state_of_origin_id) ?></td>
            <td><?= h($employees->state_id) ?></td>
            <td><?= h($employees->physical_posture_id) ?></td>
            <td><?= h($employees->marital_status_id) ?></td>
            <td><?= h($employees->highest_education_id) ?></td>
            <td><?= h($employees->housing_upfront) ?></td>
            <td><?= h($employees->designation_id) ?></td>
            <td><?= h($employees->status_id) ?></td>
            <td><?= h($employees->date_of_birth) ?></td>
            <td><?= h($employees->date_joined) ?></td>
            <td><?= h($employees->domestic_allowance) ?></td>
            <td><?= h($employees->tax_number) ?></td>
            <td><?= h($employees->tax_relief) ?></td>
            <td><?= h($employees->tax_paid_to_date) ?></td>
            <td><?= h($employees->pension_no) ?></td>
            <td><?= h($employees->medical_allowance) ?></td>
            <td><?= h($employees->entertainment_allowance) ?></td>
            <td><?= h($employees->other_allowance) ?></td>
            <td><?= h($employees->personal_loan) ?></td>
            <td><?= h($employees->pers_loan_rep) ?></td>
            <td><?= h($employees->pers_loan_paid) ?></td>
            <td><?= h($employees->pers_loan_inst) ?></td>
            <td><?= h($employees->car_loan) ?></td>
            <td><?= h($employees->car_loan_rep) ?></td>
            <td><?= h($employees->car_loan_inst) ?></td>
            <td><?= h($employees->car_loan_paid) ?></td>
            <td><?= h($employees->whl_cics) ?></td>
            <td><?= h($employees->pension_control) ?></td>
            <td><?= h($employees->salary_advance) ?></td>
            <td><?= h($employees->salary_advance_rep) ?></td>
            <td><?= h($employees->salary_advance_paid) ?></td>
            <td><?= h($employees->salary_advance_inst) ?></td>
            <td><?= h($employees->drivers_allowance) ?></td>
            <td><?= h($employees->bro_cics) ?></td>
            <td><?= h($employees->user_id) ?></td>
            <td><?= h($employees->contribution) ?></td>
            <td><?= h($employees->created) ?></td>
            <td><?= h($employees->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

<div class="related related-biddings view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Biddings') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Biddings' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'Biddings' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('User Id') ?></th>
          <th><?= __('Asset Qty') ?></th>
          <th><?= __('Amount') ?></th>
          <th><?= __('Remark') ?></th>
          <th><?= __('Approved Amount') ?></th>
          <th><?= __('Reviewed Amount') ?></th>
          <th><?= __('Status Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($user->biddings)) { ?>
        <tr>
            <td colspan="11" class="text-muted">
              Biddings record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($user->biddings as $biddings) : ?>
        <tr>
            <td><?= h($biddings->id) ?></td>
            <td><?= h($biddings->user_id) ?></td>
            <td><?= h($biddings->asset_qty) ?></td>
            <td><?= h($biddings->amount) ?></td>
            <td><?= h($biddings->remark) ?></td>
            <td><?= h($biddings->approved_amount) ?></td>
            <td><?= h($biddings->reviewed_amount) ?></td>
            <td><?= h($biddings->status_id) ?></td>
            <td><?= h($biddings->created) ?></td>
            <td><?= h($biddings->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Biddings', 'action' => 'view', $biddings->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Biddings', 'action' => 'edit', $biddings->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Biddings', 'action' => 'delete', $biddings->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $biddings->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

<div class="related related-grades view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Grades') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Grades' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'Grades' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('User Id') ?></th>
          <th><?= __('Name') ?></th>
          <th><?= __('Description') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($user->grades)) { ?>
        <tr>
            <td colspan="7" class="text-muted">
              Grades record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($user->grades as $grades) : ?>
        <tr>
            <td><?= h($grades->id) ?></td>
            <td><?= h($grades->user_id) ?></td>
            <td><?= h($grades->name) ?></td>
            <td><?= h($grades->description) ?></td>
            <td><?= h($grades->created) ?></td>
            <td><?= h($grades->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Grades', 'action' => 'view', $grades->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Grades', 'action' => 'edit', $grades->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Grades', 'action' => 'delete', $grades->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $grades->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

<div class="related related-profiles view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Profiles') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Profiles' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'Profiles' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('First Name') ?></th>
          <th><?= __('Last Name') ?></th>
          <th><?= __('Email') ?></th>
          <th><?= __('Phone') ?></th>
          <th><?= __('User Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($user->profiles)) { ?>
        <tr>
            <td colspan="9" class="text-muted">
              Profiles record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($user->profiles as $profiles) : ?>
        <tr>
            <td><?= h($profiles->id) ?></td>
            <td><?= h($profiles->first_name) ?></td>
            <td><?= h($profiles->last_name) ?></td>
            <td><?= h($profiles->email) ?></td>
            <td><?= h($profiles->phone) ?></td>
            <td><?= h($profiles->user_id) ?></td>
            <td><?= h($profiles->created) ?></td>
            <td><?= h($profiles->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Profiles', 'action' => 'view', $profiles->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Profiles', 'action' => 'edit', $profiles->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Profiles', 'action' => 'delete', $profiles->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $profiles->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

