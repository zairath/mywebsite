<?php $this->load->view('nav_header'); ?>
<?php $this->load->view('header'); ?>



    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">News</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5">
                    <div class="sidebar blog-sidebar">
                        
                        <div class="sidebar-item categories">
                            <h3>Categories</h3>
                            <ul id="kategori" class="nav navbar-stacked">
                                <li><a href="<?php echo base_url('newsarticles/news'); ?>">All<span class="pull-right"></span></a></li>
                                <?php foreach ($getKatNews as $d) {?>
                                <li><a href="<?php echo base_url('newsarticles/katNews/').$d['id']; ?>"><?php echo $d['sub_kategori']; ?><span class="pull-right"></span></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        
                        <div class="sidebar-item popular">
                            <h3>Latest News</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-7">
                    <div class="row">
                    <!-- post 1 -->

                    <?php foreach ($takeNews as $d) {?>
                     <?php
                            $waktu = $d['waktu'];
                            $date = date("l, j F Y", strtotime($waktu));
                            $tanggal = date("j", strtotime($waktu));
                            $bulan = date("M", strtotime($waktu));

                            $descJudul = $d['judul'];
                            $judul = substr($descJudul, 0, 80);

                            $descIsi = $d['isi'] ;
                            $isi = substr($descIsi, 0, 115);
                     ?>
                         <div class="col-md-6 col-sm-12 blog-padding-right">
                            <div class="single-blog two-column">
                                <div class="post-thumb">
                                    <a href="<?php echo base_url('newsarticles/newsDetail/').$d['id'];?>"><img style="width: 100%; height: 219px;" src="<?php echo base_url('assets/images/blog/timeline/').$d['gambar'];?>" class="img-responsive" alt=""></a>
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#"><?php echo $tanggal; ?><br><small><?php echo $bulan; ?></small></a></span>
                                    </div>
                                </div>
                                <div class="post-content overflow">
                                    <div class="post-con-nav">
                                        <h2 class="post-title bold"><a href="<?php echo base_url('newsarticles/newsDetail/').$d['id'];?>"><?php echo $judul; ?></a></h2>
                                        <h3 class="post-author"><a href="#"><?php echo $date; ?></a></h3>
                                        <p><?php echo $isi; ?></p>
                                        <a href="<?php echo base_url('newsarticles/newsDetail/').$d['id'];?>" class="read-more">View More</a>
                                    </div>
                                    <div class="post-bottom overflow post-nav">
                                        <ul class="list-inline" style="float: right; margin-bottom: 0;">
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=example.org" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                                            <li><a href="https://twitter.com/intent/tweet"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                        <!-- end post 1 -->
          
                        
                    </div>
                    <div class="blog-pagination">
                        <?php
                            echo $this->pagination->create_links();
                        ?>
                    </div>
                 </div>

            </div>
        </div>
    </section>

<?php $this->load->view('footer'); ?>
<?php $this->load->view('nav_footer'); ?> 
