<?php

defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

if ( ! $this->zuser->is_logged_in )
{
    $submit_ticket_path = ( db_config( 'sp_guest_ticketing' ) == 1 ) ? 'create_ticket' : 'user/support/create_ticket';
}
else
{
    $submit_ticket_path = 'user/support/create_ticket';
}

?>
<div class="container">
  <div class="z-hero mb-5 p-4 p-md-5 shadow-sm rounded no-luck">
    <div class="row">
      <div class="col-md-8">
        <div class="d-flex">
          <img class="d-none d-lg-block" src="<?php illustration_by_color( 'no_luck' ); ?>" alt="">
          <div class="align-self-center">
            <h4 class="fw-bold"><?php echo lang( 'still_no_luck' ); ?></h4>
            <p class="mb-0"><?php echo lang( 'still_no_luck_tagline' ); ?></p>
          </div>
        </div>
      </div>
      <!-- /col -->
      <div class="col-md-4 align-self-center clearfix">
        <a class="btn btn-wide btn-outline-sub mt-3 mt-md-0 float-md-end" href="<?php echo env_url( $submit_ticket_path ); ?>"><?php echo lang( 'submit_a_ticket' ); ?></a>
      </div>
      <!-- /col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.z-hero -->
</div>
<!-- /.container -->