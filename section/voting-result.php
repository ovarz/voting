<section aria-label="Hasil Voting" class="section-container section-votingresult" id="voting-result">
  <div class="width-max">
    
	<div class="section-title">
	  <div class="section-title-main">Hasil Voting</div>
	</div>
	
	<div class="section-votingresult-content">
	  <?php for ($i=1; $i <= 5; $i++) { ?>  
		<div class="voting-result-row">
		  <div class="votingresult-person votingresult-capres">
			<div class="voting-person-base votingresult-frame flex_ori thumb-loading">
			  <img alt="IMG_Title" class="lazyload" data-original="img/tokoh/<?php echo $random_pres[array_rand($random_pres)]; ?>.png" />
			</div>
		  </div>
		  <div class="votingresult-info">
			<div class="votingresult-number">#00</div>
			<div class="votingresult-name">
			  <?php echo $random_name[array_rand($random_name)]; ?> - <?php echo $random_name[array_rand($random_name)]; ?>
			</div>
			<div class="votingresult-total"><?php echo rand(90000,11000); ?> Suara</div>
		  </div>
		  <div class="votingresult-person votingresult-cawapres">
			<div class="voting-person-base votingresult-frame flex_ori thumb-loading">
			  <img alt="IMG_Title" class="lazyload" data-original="img/tokoh/<?php echo $random_wapres[array_rand($random_wapres)]; ?>.png" />
			</div>
		  </div>
		</div>
      <?php } ?>
	</div>
  </div>
</section>