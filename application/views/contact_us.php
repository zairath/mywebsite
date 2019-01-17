<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>

	<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Contact US</h1>
                            
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="map-section">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4716.829528436986!2d106.82976653089354!3d-6.215496445589741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f408839eaaab%3A0xc8f5299a1167f71d!2sPT.+Cipta+Integra+Duta!5e0!3m2!1sid!2sid!4v1500523978795" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section> <!--/#map-section-->  
 <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="<?php echo base_url();?>assets/images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                        <div class="col-sm-12 slides">  
                            <div>
                                <blockquote>"Keeping your employee welfare plans in accordance with national and local policies shows respect for both your employees and the law, " <h3><a href="#">Prof. Dedy Septianta</a></h3></blockquote>
                                
                            </div>
                            <div>
                                <blockquote>"Providing better employee welfare benefits reflects well on your company, building its reputation, often attracting both good press and good people."<h3><a href="#">Dr. Reza Hapid (SENIOR MEDICAL ADVISOR, PT. SOUTH PACIFIC VISCOSE)</a></h3></blockquote>
                                
                            </div>
                            <div>
                                <blockquote>"If your health plan has wellness coverage and preventative care, employees are more likely to stay healthy, cutting down on absenteeism and sick days."<h3><a href="#">Dr. Reza Hapid (SENIOR MEDICAL ADVISOR, PT. SOUTH PACIFIC VISCOSE)</a></h3></blockquote>
                                
                            </div>
                            <div>
                                <blockquote>"A professional insurance broker, where have been more than 5 years delivered a quality service to our employee benefit especially employees" <h3><a href="#">Dr. Reza Hapid (SENIOR MEDICAL ADVISOR, PT. SOUTH PACIFIC VISCOSE)</a></h3></blockquote>
                               
                            </div>
                         </div>
                     </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="<?php echo base_url();?>assets/images/mari-berasuransi.png" alt="" width="150px" height="auto">
                            </div>

                                <img src="<?php echo base_url();?>assets/images/ojk1.jpg" alt="" width="160px" height="auto">
                            
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:info@integra.co.id">info@integra.co.id</a> <br> 
                        Phone: +62 21 5290 5878 <br> 
                        Fax: +62 21 5290 1013 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        Setiabudi Atrium Building, 3rd Floor<br> 
                        Jln. H.R.Rasuna Said Kav.62 Kuningan <br> 
                        Jakarta 12920 <br> 
                        Indonesia<br> 
                        </address>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form name="contact-form" method="post" action="<?php echo base_url()?>sendemail/pre_sent" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="body" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; PT. Cipta Integra Duta 2017. All Rights Reserved.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php $this->load->view('nav_footer'); ?>