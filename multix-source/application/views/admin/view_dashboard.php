<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>
<section class="content-header">
  <h1>Dashboard</h1>
</section>

<section class="content">

  <div class="row">

    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blackz"><i class="fa fa-paper-plane"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Categories</span>
          <span class="info-box-number"><?php echo $total_category; ?></span>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blackz"><i class="fa fa-paper-plane"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">News</span>
          <span class="info-box-number"><?php echo $total_news; ?></span>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blackz"><i class="fa fa-paper-plane"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Events</span>
          <span class="info-box-number"><?php echo $total_event; ?></span>
        </div>
      </div>
    </div>
    
    
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blackz"><i class="fa fa-paper-plane"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Team Members</span>
          <span class="info-box-number"><?php echo $total_team_member; ?></span>
        </div>
      </div>
    </div>

   <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blackz"><i class="fa fa-paper-plane"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Clients</span>
          <span class="info-box-number"><?php echo $total_client; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blackz"><i class="fa fa-paper-plane"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Services</span>
          <span class="info-box-number"><?php echo $total_service; ?></span>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blackz"><i class="fa fa-paper-plane"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Testimonials</span>
          <span class="info-box-number"><?php echo $total_testimonial; ?></span>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blackz"><i class="fa fa-paper-plane"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Gallery</span>
          <span class="info-box-number"><?php echo $total_photo; ?></span>
        </div>
      </div>
    </div>



    

  </div>


</section>