<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Career Details</h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio-information" class="padding-top">
      
        <div class="container">
            <div class="row">
                  <?php foreach ($takeCareer as $d){?>
                <div class="col-sm-6">
                    <img src="<?php echo base_url('assets/images/career/').$d['gambar']; ?>" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="project-name overflow">
                        <h2 class="bold"><?php echo $d['judul']; ?></h2>
                        <ul class="nav navbar-nav navbar-default">
                            <li><a href="#"><i class="fa fa-clock-o"></i>25 June, 2017</a></li>
                            
                        </ul>
                    </div>
                    <div class="project-info overflow">
                        <h3>Requirements:</h3>
                        
                        <ul class="elements">
                            <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li><i class="fa fa-angle-right"></i> Donec tincidunt felis quis ipsum porttitor, non rutrum lorem rhoncus.</li>
                            <li><i class="fa fa-angle-right"></i> Nam in quam consectetur nulla placerat dapibus ut ut nunc.</li>
                            <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li><i class="fa fa-angle-right"></i> Donec tincidunt felis quis ipsum porttitor, non rutrum lorem rhoncus.</li>
                            <li><i class="fa fa-angle-right"></i> Nam in quam consectetur nulla placerat dapibus ut ut nunc.</li>
                        </ul>
                    </div>
                    <div class="skills overflow">
                        <h3>Job Description:</h3>
                        <ul class="elements">
                            <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li><i class="fa fa-angle-right"></i> Donec tincidunt felis quis ipsum porttitor, non rutrum lorem rhoncus.</li>
                            <li><i class="fa fa-angle-right"></i> Nam in quam consectetur nulla placerat dapibus ut ut nunc.</li>
                            <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            <li><i class="fa fa-angle-right"></i> Donec tincidunt felis quis ipsum porttitor, non rutrum lorem rhoncus.</li>
                            <li><i class="fa fa-angle-right"></i> Nam in quam consectetur nulla placerat dapibus ut ut nunc.</li>
                        </ul>
                    </div>
                     <?php } ?>

                     <?php foreach ($takeCareer1 as $d) {?>
                    <div class="client overflow">
                        <h3>Send A Detailed CV to:</h3>
                        <div style="font-size: 12pt; color: #d1a31c; "><?php echo $d['send_cv']; ?><br>
                        <?php echo $d['email_send_cv']; ?>
                        </div>
                       
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
       
    </section>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
