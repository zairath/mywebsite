
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/lightbox.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
    </body>
</html>
    <script type="text/javascript">

    	var path = window.location.href;

        if(path == '<?php echo base_url()?>'){
            $("#home").addClass('active');
        }

    	var target = $('.nav a[href="'+path+'"]');
    	target.parent().addClass('active');

    	if($('.nav a[href="'+path+'"]').parent().hasClass('active')){
    		$('.dropdown a[href="'+path+'"]').parent().parent().parent().addClass('active');
    	}

        if($('.nav a[href="'+path+'"]').parent().hasClass('active')){
            $('.collapse a[href="'+path+'"]').parent().parent().parent().parent().parent().addClass('active');
        }

    </script>
    <script>
        $(document).ready(function(){
            $('#kategori li').click(function(){
                $('li').removeClass("active");
                $(this).addClass("active");
            });

      
        });
    </script>
    <script type="text/javascript">
        $(function(){
            $('.slides div:first').addClass('top');

           var change =  function(){
                var curr = $('.slides div.top');
                var next = curr.next();

                if(!next.length){
                    next = $('.slides div:first');
                    next.addClass('top');
                    curr.animate({opacity:0.0}, 500, function(){
                        curr.removeClass('top');
                        curr.css({opacity:1.0});
                    });
                    //curr.removeClass('top');
                }else{
                    next.css({opacity:0.0}).addClass('top').animate({opacity:1.0}, 500, function(){
                        curr.removeClass('top');
                    });

                }
            }

            setInterval(change,5000);
        });
    </script>
