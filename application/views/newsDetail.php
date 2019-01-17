<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><?php echo $judul; ?></h1>
                            
                        </div>                                                                                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <?php foreach ($takeDetail as $d) {?>
                <?php       $waktu = $d['waktu'];
                            $date = date("l, j F Y", strtotime($waktu));
                            $tanggal = date("j", strtotime($waktu));
                            $bulan = date("M", strtotime($waktu));
                             ?>
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-thumb">
                                    <a href="#"><img style="width: 100%" src="<?php echo base_url('assets/images/blog/timeline/').$d['gambar'];?>" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#"><?php echo $tanggal;?><br><small><?php echo $bulan;?></small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <h2 class="post-title bold"><a href="#"><?php echo $d['judul']; ?></a></h2>
                                    <h3 class="post-author"><a href="#"><?php echo $date; ?></a></h3>
                                    <p><?php echo $d['isi']; ?>
                                   

                                   <i>sumber: <a href="http://www.pramita.co.id/index.php/artikel-kesehatan/99-bulletin/260-waspada-osteoporosis">www.pramita.co.id</a></i><br>
                                    </p>
                                    <div class="post-bottom overflow post-nav">
                                        <ul class="list-inline" style="float: left; margin-bottom: 0;">
                                            <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 <?php } ?>
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                            <ul id="kategori" class="nav navbar-stacked">
                                <?php foreach ($getKatNews as $d) {?>
                                <li><a href="<?php echo base_url('newsarticles/katNews/').$d['id']; ?>"><?php echo $d['sub_kategori']; ?><span class="pull-right"></span></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="sidebar-item popular">
                            <h3>Latest News </h3>
                            <?php foreach ($getLatesNews as $d) {?>
                            <div class="col-md-12">
                                    <div class="single-blog blog-details two-column">
                                    <div class="post-thumb">
                                        <a href="<?php echo base_url('newsarticles/newsDetail/').$d['id'];?>">
                                        <img style="width: 100%" src="<?php echo base_url('assets/images/blog/timeline/').$d['gambar'];?>" class="img-responsive" alt=""> 
                                        </a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#"><?php echo $tanggal;?><br><small><?php echo $bulan;?></small></a></span>
                                    </div> 
                                    </div>
                                    </div>  
                                </div>
                            <div class="col-md-12">
                                <a href="<?php echo base_url('newsarticles/newsDetail/').$d['id'];?>">
                                    <?php echo $d['judul']; ?>
                                </a>
                               <hr>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
