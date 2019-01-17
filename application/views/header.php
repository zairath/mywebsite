<body>
<header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 hidden-xs overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="<?php echo base_url();?>homepage/home">
                        <h1><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"></h1>
                    </a>

                </div>
                <div class="collapse navbar-collapse" style="padding-right: 0px; padding-left: 0px; padding-top: 10px;">
                    <form class="hidden-md hidden-lg hidden-sm">
                        <input type="text" class="search-form" autocomplete="off" placeholder="Search" style="width: 100%; margin-right: 0px; margin-left: 0px;">
                    </form>
                    <ul class="nav navbar-nav navbar-right" style="padding-left: 20px; padding-right: 20px;">
                        <li id="home"><a href="<?php echo base_url()?>homepage/home">Home</a></li>
                        <li class="dropdown"><a href="#">About Us<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="<?php echo base_url()?>aboutus/overview">Overview</a></li>
                                <li><a href="<?php echo base_url()?>aboutus/visimisi">Vision, Mision & Value </a></li>
                                <li><a href="<?php echo base_url()?>aboutus/aboutindonesia">About Indonesia</a></li>
                                <li><a data-toggle="collapse" role="button" aria-expanded="false" aria-control="ourPeople" data-target="#ourPeople">Our People<i class="fa fa-angle-down"></i></a>
                                    <ul class="collapse" id="ourPeople">
                                        <li><a href="<?php echo base_url()?>aboutus/bod" title="">Board of Director</a></li>
                                        <li><a href="<?php echo base_url()?>aboutus/leadership" title="">Senior Personel</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li><a href="<?php echo base_url()?>ourservices/service">Our Services</a></li>
                        <li class="dropdown"><a href="">Why Integra<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="<?php echo base_url()?>whyintegra/why_integra">Why Integra</a></li>
                                <li><a href="<?php echo base_url()?>whyintegra/specialprogram">Special Program</a></li>
                                <li><a href="#">Awards</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" title="">News & Articles<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="<?php echo base_url()?>newsarticles/news" title="">News</a></li>
                                <li><a href="<?php echo base_url()?>newsarticles/articles" title="">Article</a></li>
                                <li><a href="<?php echo base_url()?>newsarticles/downloadnews" title="">Newsletters</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url()?>integracareer/career">Career</a></li>
                        <li><a href="<?php echo base_url()?>contact_us/contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="search hidden-xs">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
