 <div class="tt-main-left">
    <div class="tt-chitietin-box">
    <?php
	foreach($results as $row){
		$TieuDe=$row->TieuDe;
		$TomTat=$row->TomTat;
		$NoiDung=$row->NoiDung;
	}
	 ?>
    <h1 class="tt-chitiettin-tieude"> <?php echo $TieuDe ?> </h1>
    <p class="tt-chitiettin-tomtat"> <?php echo $TomTat ?></p>
    <div class="mh-content-prod-con">
    <?php echo $NoiDung; ?>
    </div>
    
    </div>
    <div class="tt-chitiettin-lq">
    <p class="tt-tinlq-style"> Tin liên quan</p>
    <ul class="tt-tinlq-danhmuc">
     <li><a href="#"> tin lien quan ve tau chien</a></li>
    <li><a href="#"> tin lien quan ve tau chien</a></li>
    <li><a href="#"> tin lien quan ve tau chien</a></li>
    <li><a href="#"> tin lien quan ve tau chien</a></li>
    <li><a href="#"> tin lien quan ve tau chien</a></li>
    <li><a href="#"> tin lien quan ve tau chien</a></li>
    
    </ul>
    </div>
    </div>