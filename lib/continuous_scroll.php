<script type="text/javascript">  

            var count = <?php echo $posts_per_page; ?>;  
	    var total = <?php echo $wp_query->max_num_pages; ?>;
            $(window).scroll(function(){  
                    if  ($(window).scrollTop() == $(document).height() - $(window).height()){  
                       if (count > total){
                            $('a#inifiniteLoader').hide('1000');
				return false;
			}else{
				loadArticle(count);  
                            $('a#inifiniteLoader').show('1000');
                       		count++;  
			}
                    }  
            });  
            function loadArticle(pageNumber){  
                    $.ajax({  
                        url: "<?php bloginfo('wpurl') ?>/wp-admin/admin-ajax.php",  
                        type:'POST',  
                        data: "action=infinite_scroll&page_no="+ pageNumber + '&loop_file=loop',  
                        success: function(html){  
                            $("#content").append(html);   // This will be the div where our content will be loaded  
                        }  
                    });  
                return false;  
            }  
</script>  
