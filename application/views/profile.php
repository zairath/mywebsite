<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Profile</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
   
    <!--profilen-->

   <section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
    <?php foreach ($takeProfile as $d) {?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="<?php echo base_url('assets/images/our-people/').$d['foto'];?>" class="margin-bottom" alt="">
                    <div class="margin-bottom">
                        <h1><?php echo $d['nama'];?></h1>
                        <h5><?php echo $d['jabatan']; ?></h5>
                    </div>
                    
                    <div class="margin-bottom">
                    <p><?php echo $d['keterangan']; ?></p> </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>
    <!-- end profile -->
     
   <!--senior personel -->
     <section id="team">
        <div class="container">
            <div class="row">
                <h1 class="title text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">See our people</h1>
                <p class="text-center wow fadeInDown" data-wow-duration="400ms" data-wow-delay="400ms">Lorem Ipsum</p>

                <div id="team-carousel" class="carousel slide wow fadeIn" data-ride="carousel" data-wow-duration="400ms" data-wow-delay="400ms">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                    <?php for($i=0; $i<ceil(count($d)/4); $i++) { ?>
                        <li data-target="#team-carousel" data-slide-to="<?php echo $i; ?>" <?php echo !$i ? ' class="active"' : ''; ?>></li>
                    <?php } ?>   
                    </ol>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <?php foreach ($takeLeadership2 as $i => $d) {?>
                                <?php if(($i>0) && ($i%4 == 0)) { ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                            <?php } ?>
                            <div class="col-sm-3 col-xs-6">
                                <div class="team-single-wrapper">
                                    <div class="team-single">
                                        <div class="person-thumb">
                                            <img src="<?php echo base_url('assets/images/our-people/').$d['foto'];?>" class="img-responsive" alt="">
                                        </div>
                                        <div class="social-profile">
                                            <ul class="nav nav-pills">
                                                <li><a href="<?php echo base_url('aboutus/profile/').$d['id']; ?>"><i class="fa fa-link"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="person-info">
                                        <h2><?php echo $d['nama']; ?></h2>
                                        <p><?php echo $d['jabatan']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                            
                            
                        </div>
                        <!-- Controls -->
                    <a class="left team-carousel-control hidden-xs" href="#team-carousel" data-slide="prev">left</a>
                    <a class="right team-carousel-control hidden-xs" href="#team-carousel" data-slide="next">right</a>
                    </div>

                    
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
