<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">About Indonesia</h1>
                            
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <?php foreach ($takeAboutIndonesia as $d) {?>
                <div class="col-sm-12 text-center">
                    <img src="<?php echo base_url('assets/images/aboutus/').$d['gambar_1'];?>" class="margin-bottom img-responsive" alt="">
                    <h1 class="margin-bottom"><?php echo $d['judul']; ?></h1>
                    <p><?php echo $d['isi']; ?></p> <br><br>
                </div>
            </div>
        </div>
    </section>
    <!--/#about-company-->
    
    
    <!--/#services-->

    <section id="action2">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="imgtable" style="padding-right: 10px; padding-left: 10px;">
                        <img style="margin: auto;" class="img-responsive" src="<?php echo base_url('assets/images/aboutus/').$d['gambar_2'];?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
   </section>


<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
