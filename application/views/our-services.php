<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Our Services</h1>
                            
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
                <div class="col-sm-12 text-center">
                    <?php foreach ($get_text as $d) {?>
                    <h1 class="margin-bottom"><?php echo $d['text1']; ?></h1>
                    <p><?php echo $d['text2'] ?></p><br>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--/#about-company-->
    
    <section id="services">
        <div class="container">
            <div class="row" style="margin-left: 0px; margin-right: 0px;">
                <div id="accordion-container">
                <div class="panel-group" id="accordion">
                <?php $i = 0; ?>
                <?php foreach ($get_service as $d) {?>
                <?php $i++; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>">
                                    <?php echo $d['kategori']; ?>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $i;?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo $d['keterangan'];?>                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                   
                </div><!--/#accordion-->
            </div><!--/#accordion-container-->
            </div>
        </div>
   </section>
<script type="text/javascript">
    document.getElementById('collapse1').setAttribute("class"," in");
</script>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
