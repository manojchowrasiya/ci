<!-- <div style="height:000px"></div> -->
<div id="finalResult">
<?php 
// print_r($profile_msg);exit;
foreach ($profile_msg as $value) {
		echo '<div class="msgcount count-'.$value->mes_id.'">'.$value->msg.'</div>';
}

?>
</div>
<button class="manoj">jhi</button>
<style type="text/css">
.msgcount{background-color: #ccc;border: 1px solid #ccc;margin-bottom: 20px;}


</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript">
// jQuery(document).ready(function () {
// jQuery('.manoj').click(function () {     
// 	// var scrollBottom = jQuery(document).height() - jQuery(window).height() - jQuery(window).scrollTop();    
// 	// console.log(scrollBottom);	
// 	// if (scrollBottom) {
// 		jQuery('#finalResult').append('<div class="msgcount">Manoj</div>');
// 	// }

// });

// jQuery(window).scroll(function() {
//    if(jQuery(window).scrollTop() + jQuery(window).height() == jQuery(document).height()) {
//        // alert("bottom!");

  
//    }
// });
  


// });
var scroll = true;
jQuery(window).scroll(function () {
 var docHeight = jQuery(document).height();
   if (jQuery(window).scrollTop() + jQuery(window).height() >= docHeight && scroll==true) {
       scroll = false;
       // var url = currentUrl+"1/1";
       // changeUrl(url);
       // jQuery.ajax({
       //         url: url,
       //         cache: true
       //     })
       //     .done(function( html ) {
       //         $("#body-content").append(html);
       //         scroll = true;
       //         console.log(123);
       // });
       jQuery('#finalResult').append('<div class="msgcount">Manoj</div>');
       jQuery('#finalResult').append('<div class="msgcount">Manoj</div>');
       jQuery('#finalResult').append('<div class="msgcount">Manoj</div>');
       jQuery('#finalResult').append('<div class="msgcount">Manoj</div>');
       jQuery('#finalResult').append('<div class="msgcount">Manoj</div>');
       jQuery('#finalResult').append('<div class="msgcount">Manoj</div>');
       jQuery('#finalResult').append('<div class="msgcount">Manoj</div>');
   }
});
</script>