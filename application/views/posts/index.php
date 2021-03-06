<!DOCTYPE html>
<html>
    <head>
        <title>Facebook Style Infinite Scroll Pagination in Codeigniter using Ajax</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     </head>
     <body>
     	<div id="postList">
    <?php if(!empty($posts)){ foreach($posts as $post){ ?>
        <div class="list-item">
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['content']; ?></p>
        </div>
    <?php } ?>
        <div class="load-more" lastID="<?php echo $post['id']; ?>" style="display: none;">
            <img src="<?php echo base_url('assets/img/loading-sm.gif'); ?>"/> Loading more posts...
        </div>
    <?php }else{ ?>
        <p>Post(s) not available.</p>
    <?php } ?>
</div>
	<script type="text/javascript">
	$(document).ready(function(){
	    $(window).scroll(function(){
	        var lastID = $('.load-more').attr('lastID');
	        if(($(window).scrollTop() == $(document).height() - $(window).height()) && (lastID != 0)){
	            $.ajax({
	                type:'POST',
	                url:'<?php echo base_url('posts/loadMoreData'); ?>',
	                data:'id='+lastID,
	                beforeSend:function(){
	                    $('.load-more').show();
	                },
	                success:function(html){
	                    $('.load-more').remove();
	                    $('#postList').append(html);
	                }
	            });
	        }
	    });
	});
	</script>
     </body>
 </html>