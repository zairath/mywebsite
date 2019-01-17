<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <?php foreach ($takeOverview as $d) { ?>
    <section id="company-information" class="choose">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <img src="<?php echo base_url('assets/images/aboutus/').$d['gambar'];?>" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 padding-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <h2><?php echo $d['judul'];?></h2>
                    <p><?php echo $d['isi'];?></p>
                    

                    
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
