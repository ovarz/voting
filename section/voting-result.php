<?php 
  $voting_array = array();
  $voting_array[]=array('post'=>'1','capres_id'=>'anies','cawapres_id'=>'ahy','total_vote'=>'2194');
  $voting_array[]=array('post'=>'2','capres_id'=>'ganjar','cawapres_id'=>'ahok','total_vote'=>'1387');
  $voting_array[]=array('post'=>'3','capres_id'=>'anies','cawapres_id'=>'khofifah','total_vote'=>'1097');
  $voting_array[]=array('post'=>'4','capres_id'=>'ganjar','cawapres_id'=>'erick','total_vote'=>'844');
  $voting_array[]=array('post'=>'5','capres_id'=>'prabowo','cawapres_id'=>'rk','total_vote'=>'358');
?>



<section aria-label="Hasil Voting" class="section-container section-votingresult" id="voting-result">
  <div class="width-max">
    
	<div class="section-title">
	  <div class="section-title-main">Hasil Voting</div>
	</div>
	
	<div class="section-votingresult-content">
	  <?php foreach($voting_array as $voting_list){ ?>  
		<div class="voting-result-row">
		  <div class="votingresult-person votingresult-capres">
			<div class="voting-person-base votingresult-frame flex_ori thumb-loading">
			  <img alt="IMG_Title" class="lazyload" data-original="img/tokoh/<?php echo($voting_list['capres_id'])?>.png" />
			</div>
		  </div>
		  <div class="votingresult-info">
			<div class="votingresult-number">#<?php echo($voting_list['post'])?></div>
			<div class="votingresult-name">
			  <?php echo($voting_list['capres_id'])?> - <?php echo($voting_list['cawapres_id'])?>
			</div>
			<div class="votingresult-total"><?php echo($voting_list['total_vote'])?> Suara</div>
		  </div>
		  <div class="votingresult-person votingresult-cawapres">
			<div class="voting-person-base votingresult-frame flex_ori thumb-loading">
			  <img alt="IMG_Title" class="lazyload" data-original="img/tokoh/<?php echo($voting_list['cawapres_id'])?>.png" />
			</div>
		  </div>
		</div>
      <?php } ?>
	</div>
  </div>
</section>