<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Career</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    
  
    <section id="recent-projects" class="recent-projects">
        <div class="container">
            <div class="row" style="margin-right: 5px; margin-left: 5px;">
                  <?php foreach ($career as $d) {?>
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms"><?php echo $d['judul_career']; ?></h1>
                <p class="text-center padding-bottom wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">
                    <?php echo $d['keterangan_career1']; ?>
                </p>

                <p><?php echo $d['keterangan_career2']; ?></p> 
                <br><br>

                <?php } ?>

                <?php foreach ($career2 as $d) {?>
                <div    class="col-sm-3 col-xs-12 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="portfolio-wrapper">   
                        <div class="portfolio-single">
                            <div class="portfolio-thumb">
                                <img src="<?php echo base_url('assets/images/career/').$d['gambar'];?>" class="img-responsive" alt="">
                            </div>
                            <div class="portfolio-view">
                                <ul class="nav nav-pills">
                                    <li><a href="<?php echo base_url('integracareer/careerDetail/').$d['id']; ?>"><i class="fa fa-link"></i></a></li>
                                    <li><a href="<?php echo base_url('assets/images/career/').$d['gambar'];?>" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="portfolio-info">
                            <h2><?php echo $d['judul']; ?></h2>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
                 <div class="blog-pagination">
                        <?php
                            echo $this->pagination->create_links();
                        ?>
                    </div>
                </div>

    </section>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
