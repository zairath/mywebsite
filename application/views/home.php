<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>

    <?php foreach ($takeHomepage as $d) { ?>
    <?php   $desc = $d['isi'] ;
            $strCut = substr($desc, 0, 300);
            $desc = substr($strCut, 0, strrpos($strCut, ' ')).'...';
    ?>
    <section id="home-slider" style="background: url(<?php echo base_url('assets/images/home/').$d['gambar_jumbotron'];?>) 0 100% repeat-x; position: relative;">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1><?php echo $d['text1_jumbotron']; ?></h1>
                        <p><?php echo $d['text2_jumbotron']; ?></p>
                        <a href="#" class="btn btn-common">View More</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="<?php echo base_url();?>assets/images/home/homic-01.png" alt="">
                        </div>
                        <h2>To take care of your employees’ welfare</h2>
                        <p>that is the security of their health as well as company benefits.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="<?php echo base_url();?>assets/images/home/homic-02.png" alt="">
                        </div>
                        <h2>For a more productive workforce</h2>
                        <p>as a healthier, happier employee equals a greater, more efficient output</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="<?php echo base_url();?>assets/images/home/homic-03.png" alt="">
                        </div>
                        <h2>So that you can focus on your core business</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title"><?php echo $d['judul']; ?></h1>
                            <p><?php echo $desc; ?></p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="<?php echo base_url();?>aboutus/overview" class="btn btn-common">View More</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 col-xs-12 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <iframe width="100%" height="300" src="<?php echo $d['link_youtube'] ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2><?php echo $d['judul_youtube']; ?></h2>
                        <P><?php echo $d['keterangan_youtube']; ?></P>
                    </div>
                </div>

                <div class="single-features">

                </div>
            </div>
        </div>
    </section>
    <?php } ?>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?>
