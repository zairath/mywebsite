<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Special Programs</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7">
                    <div class="row">

                    <?php foreach ($sp as $d) {?>
                    <?php   
                            $waktu = $d['waktu'];
                            $date = date("l, j F Y", strtotime($waktu));
                            $tanggal = date("j", strtotime($waktu));
                            $bulan = date("M", strtotime($waktu));

                            $desc = $d['isi'] ;
                            $strCut = substr($desc, 0, 200);
                            $desc = substr($strCut, 0, strrpos($strCut, ' ')).'[...]';
                     ?>
                         <div class="col-sm-12 col-md-12">
                            <div class="single-blog single-column">
                                <div class="post-thumb">
                                    <a href="<?php echo base_url('whyintegra/specialProgramDetail/').$d['id']; ?>"><img style="width: 100%; height: 400px;" src="<?php echo base_url('assets/images/special_prog/').$d['gambar'];?>" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                       <span class="uppercase"><a href="#"><?php echo $tanggal; ?> <br><small><?php echo $bulan; ?></small></a></span>
                                   </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="spcprog-details.html"><?php echo $d['judul'];?></a></h2>
                                    <h3 class="post-author"><a href="#"><?php echo $date;?></a></h3>
                                    <p><?php echo $desc; ?></p>
                                    <a href="#" class="read-more">View More</a>
                                    <div class="post-bottom overflow post-nav">
                                        <ul class="list-inline" style="float: right; margin-bottom: 0;">
                                            <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                                        </ul>
                                    </div>
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
                
        </div>
    </section>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
