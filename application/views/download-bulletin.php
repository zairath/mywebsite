<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Dowloads</h1>
                        
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
                    <?php foreach ($bulletin as $d) {?>
                    <?php   $desc = $d['isi'] ;
                            $strCut = substr($desc, 0, 100);
                            $desc = substr($strCut, 0, strrpos($strCut, ' ')).'[...]';
                     ?>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column">
                            <div class="post-thumb">
                                <a href="blogdetails.html"><img style="width: 100%; height: 337px;" src="<?php echo base_url('assets/images/download/article/').$d['gambar'];?>" class="img-responsive" alt=""></a>
                                <div class="post-overlay">
                                    <span class="uppercase"><a href="#">13 <br><small>Jun</small></a></span>
                                </div>
                            </div>
                            <div class="post-content overflow">
                               
                                <h2 class="post-title bold"><a href="blogdetails.html"><?php echo $d['judul']; ?></a></h2>
                                <h3 class="post-author"><a href="#">Posted by Integra</a></h3>
                                <p><?php echo $desc; ?></p>
                                <a href="<?php echo base_url();?>assets/downloads/newsletters/mengenal-asma.pdf" target="blank" class="read-more">Download</a>
                                <div class="post-bottom overflow">
                                    <ul class="nav nav-justified post-nav">
                                        <li><a href="#"><i class="fa fa-heart"></i>32 Love</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i>3 Comments</a></li>
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
