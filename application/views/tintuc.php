<div class="tt-main-left">
  <div class="tt-box-style">
 
    <ul class="tt-tintuc-style">
    <?php 
	foreach($results as $row){
		$id_tin=$row->id_tin;
		$TieuDe=$row->TieuDe;
		$UrlHinh=$row->UrlHinh;
		$TomTat=$row->TomTat;
	?>
      <li> <a href="<?php echo base_url().'site/chitiettin/'.$id_tin; ?>" class="pull-left"> <img src="<?php echo base_url().'upload/'.$UrlHinh?>" width="150" height="110"></a>
        <div class="tt-body-overl"> <a href="<?php echo base_url().'site/chitiettin/'.$id_tin; ?>" class="tt-tintuc-tieude">
          <h3> <?php echo $TieuDe ?></h3>
          </a>
          <p class="tt-sumary"> <?php echo $TomTat ?></p>
        </div>
        <div class="clear"></div>
      </li>
    <?php } ?>  
      
    </ul>
    
    <div class="tt-phantrang">
    <?php 	echo $phantrang;
	?>
    </div>
  </div>
</div>
