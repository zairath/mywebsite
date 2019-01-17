<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Vision, Mision & Value</h1>
                            
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
                    
                    <h1 class="margin-bottom">Corporate Values</h1>
                    <p>Integra dedicates seven values as corporate culture to provide the best service to its clients.</p><br>
                </div>
            </div>
        </div>
    </section>
    <!--/#about-company-->
    
    <section id="services">
        <div class="container">
            <div class="row">
                <div id="feature-container">
                <div class="row">
                   
                    <div class="col-sm-3 col-xs-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-briefcase"></i>
                            </div>
                            <h2>PROFESIONAL</h2>
                            
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-check-square-o"></i>
                            </div>
                            <h2>INTEGRITY</h2>
                            
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-lock"></i>
                            </div>
                            <h2>PROTECTIVE</h2>
                            
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="1200ms">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h2>PROACTIVE</h2>
                            
                        </div>
                    </div>                        
                </div>
            </div><!--/#feature-container-->

             <div id="feature-container">
                <div class="row">
                   
                    <div class="col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-envelope-o"></i>
                            </div>
                            <h2>ADAPTABLE</h2>
                            
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-eye"></i>
                            </div>
                            <h2>FOCUS</h2>
                            
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="900ms">
                        <div class="feature-inner">
                            <div class="icon-wrapper">
                                <i class="fa fa-2x fa-handshake-o"></i>
                            </div>
                            <h2>COMMITMENT</h2>
                            
                        </div>
                    </div>
                                          
                </div>
            </div><!--/#feature-container-->

            </div>
        </div>
   </section>
    <!--/#action-->


    <section id="services">
        <div class="container">
            <div class="row">
                <div id="tab-container">
                            <div class="row" style="margin-right: 5px; margin-left: 5px;">
                                <div class="col-md-12 col-xs-12">
                                    <h4 style="text-align: center; padding-top: 50px; color: #d1a31c;">Those seven values are Integra’s fundamental to achieve its vision and mission</h4>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <ul id="tab1" class="nav nav-tabs">
                                        <li class="active"><a href="#tab1-item1" data-toggle="tab">VISION</a></li>
                                        <li><a href="#tab1-item2" data-toggle="tab">MISION</a></li>
                                        
                                    </ul>
                                    <?php foreach ($takeVisiMisi as $d) {?>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab1-item1">
                                            <p><?php echo $d['visi'] ?></p>
                                        </div>
                                        <div class="tab-pane fade" id="tab1-item2">
                                            <p><?php echo $d['misi'] ?></p>
                                        </div>
                                        
                                    </div>
                                    <?php } ?>
                                </div>

                                
                            </div>
                        </div><!--/#table-container-->
        </div>
        </div>
    </section><br><br>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
