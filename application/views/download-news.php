<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Newsletter</h1>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->
    
    <section id="blog" class="padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="masonery_area">
                    <?php foreach ($newsletter as $d) {?>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="<?php echo base_url();?>assets/downloads/newsletters/mengenal-asma.pdf" target="blank"><img style="max-height: 500px ;margin-left: auto; margin-right: auto;" src="<?php echo base_url('assets/images/blog/masonary/').$d['gambar'];?>" class="img-responsive" alt=""></a>
                            </div>
                            <div class="post-content overflow">
                               
                                <h2 class="post-title bold"><a href="#"><?php echo $d['judul'];?></a></h2>
                                <h3 class="post-author"><a href="#">Posted by Integra</a></h3>
                                    <div class="post-bottom overflow post-nav">
                                        <ul class="list-inline" style="float: right; margin-bottom: 0;">
                                            <li><a href="<?php echo base_url();?>assets/downloads/newsletters/mengenal-asma.pdf"><i class="fa fa-download fa-2x"></i></a></li>
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
               
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
