<script type="text/javascript">  

	    var count = 2; //number of the page that infinitescroll starts displaying
	    var total = <?php echo $wp_query->max_num_pages; ?>;

	//Checks the posts height and calls for more if needed
	    loadMore();
	//Definição da função loadMore()
	    function loadMore(){
		if($(".main-posts.span8").height() < $(".span4.sidebar-right").height()){
		loadArticle(count);
		count++;
		}
	    }
	//Original script of InfiniteScroll
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
	//Definição da Função loadArticle() with a tweak for use with the loadMore Function
            function loadArticle(pageNumber){  
                    $.ajax({  
                        url: "<?php bloginfo('wpurl') ?>/wp-admin/admin-ajax.php",  
                        type:'POST',  
                        data: "action=infinite_scroll&page_no="+ pageNumber + '&loop_file=loop',  
                        success: function(html){  
                            $(".main-posts").append(html);   // This will be the div where our content will be loaded  
			    loadMore();
                        }  
                    });  
                return false;  
            }  
</script>  
