<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
  .card {
    margin : 4px;
  }
</style>

<!-- Begin page content -->
<main role="main" >
<div class="container">
  <br>
  <div class="row">
    <div class="col-md-12">
      <h3>Actions</h3>
    </div>
  </div>
</div>
  <div class="container">
  <br />
  <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-text">Create a new question</p>
        <a href="<?php echo base_url();?>admin/create_question" class="btn btn-primary">Create Question</a>
      </div>
    </div>
  </div>
  <?php if($userdata['admin']==1) { ?>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-text">Create a new user.</p>
        <a href="<?php echo base_url();?>admin/create_user" class="btn btn-primary">Create User</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-text">Create a new question group</p>
        <a href="<?php echo base_url();?>admin/create_group" class="btn btn-primary">Create Group</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-text">Create a new question sub-group</p>
        <a href="<?php echo base_url();?>admin/create_sub_group" class="btn btn-primary">Create Sub-Group</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-text">Create a new question level</p>
        <a href="<?php echo base_url();?>admin/create_level" class="btn btn-primary">Create Level</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-text">Create a new language</p>
        <a href="<?php echo base_url();?>admin/create_language" class="btn btn-primary">Create Language</a>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
  </div>
</main>