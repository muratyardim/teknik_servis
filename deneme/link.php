<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.1.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function(){ 
  $('a').click( degistir ); 
    }); 
      function degistir() 
       { 
        $('#sonuc').html('Beğeniliyor...'); 
        $.ajax({ 
        type: 'GET', 
        url: 'begen.php', 
        data: 'url=www.facebook.com',        
        success: function(sonuc) { 
        $('#sonuc').html(sonuc); 
       } 
    }); 
  return false; 
} 
</script> 

 <?php if ($onay==1) { ?>
                   <div class="get_ornek">
                    <a href="?onay_id=<?php echo $form_id; ?>&onay=1">
                       <i style='font-size:20px;color:red;' class='fas fa-minus-circle'></i>
                    </a>
                   </div>
<?php }  ?>