<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>

  <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Board of Director</h1>
                            
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->
    <?php foreach ($takeBod as $d) { ?>
    <section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img height="215px" src="<?php echo base_url('assets/images/our-people/').$d['foto']?>" class="margin-bottom" alt="">
                    <div class="margin-bottom">
                        <h1><?php echo $d['nama']; ?></h1>
                        <h5><?php echo $d['jabatan'];?></h5>
                    </div>
                    
                    <p><?php echo $d['keterangan']; ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
