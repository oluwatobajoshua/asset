<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Status $status
 */
?>

<?php
$this->assign('title', __('Status'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Statuses', 'url' => ['action' => 'index']],
    ['title' => 'View'],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($status->name) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($status->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($status->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($status->id) ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $status->id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $status->id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $status->id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


<div class="related related-assets view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Assets') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Assets' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'Assets' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('Code') ?></th>
          <th><?= __('Item') ?></th>
          <th><?= __('Model') ?></th>
          <th><?= __('Date Of Purchase') ?></th>
          <th><?= __('Qty Available') ?></th>
          <th><?= __('Qty Bidded') ?></th>
          <th><?= __('Qty Left') ?></th>
          <th><?= __('Reserved Price') ?></th>
          <th><?= __('Location Id') ?></th>
          <th><?= __('Status Id') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($status->assets)) { ?>
        <tr>
            <td colspan="12" class="text-muted">
              Assets record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($status->assets as $assets) : ?>
        <tr>
            <td><?= h($assets->id) ?></td>
            <td><?= h($assets->code) ?></td>
            <td><?= h($assets->item) ?></td>
            <td><?= h($assets->model) ?></td>
            <td><?= h($assets->date_of_purchase) ?></td>
            <td><?= h($assets->qty_available) ?></td>
            <td><?= h($assets->qty_bidded) ?></td>
            <td><?= h($assets->qty_left) ?></td>
            <td><?= h($assets->reserved_price) ?></td>
            <td><?= h($assets->location_id) ?></td>
            <td><?= h($assets->status_id) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Assets', 'action' => 'view', $assets->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Assets', 'action' => 'edit', $assets->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Assets', 'action' => 'delete', $assets->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $assets->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

<div class="related related-biddingDetails view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Bidding Details') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'BiddingDetails' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'BiddingDetails' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('Bidding Id') ?></th>
          <th><?= __('Asset Id') ?></th>
          <th><?= __('Qty') ?></th>
          <th><?= __('Qty Approved') ?></th>
          <th><?= __('Price') ?></th>
          <th><?= __('Total Payable') ?></th>
          <th><?= __('Qty Met') ?></th>
          <th><?= __('Approved Payable') ?></th>
          <th><?= __('Reviewed Payable') ?></th>
          <th><?= __('Qty Reviewed') ?></th>
          <th><?= __('Status Id') ?></th>
          <th><?= __('Remark') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($status->bidding_details)) { ?>
        <tr>
            <td colspan="16" class="text-muted">
              Bidding Details record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($status->bidding_details as $biddingDetails) : ?>
        <tr>
            <td><?= h($biddingDetails->id) ?></td>
            <td><?= h($biddingDetails->bidding_id) ?></td>
            <td><?= h($biddingDetails->asset_id) ?></td>
            <td><?= h($biddingDetails->qty) ?></td>
            <td><?= h($biddingDetails->qty_approved) ?></td>
            <td><?= h($biddingDetails->price) ?></td>
            <td><?= h($biddingDetails->total_payable) ?></td>
            <td><?= h($biddingDetails->qty_met) ?></td>
            <td><?= h($biddingDetails->approved_payable) ?></td>
            <td><?= h($biddingDetails->reviewed_payable) ?></td>
            <td><?= h($biddingDetails->qty_reviewed) ?></td>
            <td><?= h($biddingDetails->status_id) ?></td>
            <td><?= h($biddingDetails->remark) ?></td>
            <td><?= h($biddingDetails->created) ?></td>
            <td><?= h($biddingDetails->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'BiddingDetails', 'action' => 'view', $biddingDetails->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'BiddingDetails', 'action' => 'edit', $biddingDetails->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'BiddingDetails', 'action' => 'delete', $biddingDetails->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $biddingDetails->id)]) ?>
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
      <?php if (empty($status->biddings)) { ?>
        <tr>
            <td colspan="11" class="text-muted">
              Biddings record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($status->biddings as $biddings) : ?>
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
      <?php if (empty($status->employees)) { ?>
        <tr>
            <td colspan="66" class="text-muted">
              Employees record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($status->employees as $employees) : ?>
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

<div class="related related-leaves view card">
  <div class="card-header d-sm-flex">
    <h3 class="card-title"><?= __('Related Leaves') ?></h3>
    <div class="card-toolbox">
      <?= $this->Html->link(__('New'), ['controller' => 'Leaves' , 'action' => 'add'], ['class' => 'btn btn-primary btn-sm']) ?>
      <?= $this->Html->link(__('List '), ['controller' => 'Leaves' , 'action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <tr>
          <th><?= __('Id') ?></th>
          <th><?= __('Employee Id') ?></th>
          <th><?= __('Days Entitled') ?></th>
          <th><?= __('Previous Outstanding') ?></th>
          <th><?= __('Days Requested') ?></th>
          <th><?= __('Outstanding Days') ?></th>
          <th><?= __('Commencement Date') ?></th>
          <th><?= __('Staff Signature') ?></th>
          <th><?= __('Relieving Officer') ?></th>
          <th><?= __('Hou Comments') ?></th>
          <th><?= __('Hod Comments') ?></th>
          <th><?= __('Hrm Comments') ?></th>
          <th><?= __('Md Comments') ?></th>
          <th><?= __('Status Id') ?></th>
          <th><?= __('Created') ?></th>
          <th><?= __('Modified') ?></th>
          <th class="actions"><?= __('Actions') ?></th>
      </tr>
      <?php if (empty($status->leaves)) { ?>
        <tr>
            <td colspan="17" class="text-muted">
              Leaves record not found!
            </td>
        </tr>
      <?php }else{ ?>
        <?php foreach ($status->leaves as $leaves) : ?>
        <tr>
            <td><?= h($leaves->id) ?></td>
            <td><?= h($leaves->employee_id) ?></td>
            <td><?= h($leaves->days_entitled) ?></td>
            <td><?= h($leaves->previous_outstanding) ?></td>
            <td><?= h($leaves->days_requested) ?></td>
            <td><?= h($leaves->outstanding_days) ?></td>
            <td><?= h($leaves->commencement_date) ?></td>
            <td><?= h($leaves->staff_signature) ?></td>
            <td><?= h($leaves->relieving_officer) ?></td>
            <td><?= h($leaves->hou_comments) ?></td>
            <td><?= h($leaves->hod_comments) ?></td>
            <td><?= h($leaves->hrm_comments) ?></td>
            <td><?= h($leaves->md_comments) ?></td>
            <td><?= h($leaves->status_id) ?></td>
            <td><?= h($leaves->created) ?></td>
            <td><?= h($leaves->modified) ?></td>
            <td class="actions">
              <?= $this->Html->link(__('View'), ['controller' => 'Leaves', 'action' => 'view', $leaves->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Html->link(__('Edit'), ['controller' => 'Leaves', 'action' => 'edit', $leaves->id], ['class'=>'btn btn-xs btn-outline-primary']) ?>
              <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leaves', 'action' => 'delete', $leaves->id], ['class'=>'btn btn-xs btn-outline-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $leaves->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
      <?php } ?>
    </table>
  </div>
</div>

