<?php $session = $this->session->userdata('c_user_id');?>
<?php $employer = $this->Recruitment_model->read_employer_info($session['c_user_id']);?>
<div class="container">
  <div class="sixteen columns">
    <h2 class="my-acc-h2">Hello <strong><?php echo $employer[0]->first_name.' '.$employer[0]->last_name;?></strong></h2>
    <p class="woocommerce-dashboard-welcome"> Dari dasbor akun Anda, Anda dapat melihat lamaran pekerjaan Anda</a>, kelola milikmu <a href="<?php echo site_url('employer/manage_jobs');?>">jobs</a> and <a href="<?php echo site_url('employer/account');?>">edit your password and account details</a>.</p>
    <p> Untuk memeriksa Daftar Pekerjaan dan Lamaran Anda, kunjungi <a href="<?php echo site_url('employer/manage_jobs');?>">Daftar Pekerjaan</a>.<br>
    </p>
    <br>
    <a href="<?php echo site_url('employer/post_job');?>" class="button">Tambahkan Pekerjaan</a> </div>
</div>
<div class="margin-top-50"></div>