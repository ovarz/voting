<?php 
  $calon_array = array();
  $calon_array[]=array('calon_id'=>'ahy','calon_name'=>'Agus Harimurti Yudhoyono');
  $calon_array[]=array('calon_id'=>'aher','calon_name'=>'Ahmad Heryawan');
  $calon_array[]=array('calon_id'=>'airlangga','calon_name'=>'Airlangga Hartarto');
  $calon_array[]=array('calon_id'=>'andika','calon_name'=>'Andika Perkasa');
  $calon_array[]=array('calon_id'=>'anies','calon_name'=>'Anies Baswedan');
  $calon_array[]=array('calon_id'=>'ahok','calon_name'=>'Basuki Tjahaja Purnama');
  $calon_array[]=array('calon_id'=>'emil','calon_name'=>'Emil Dardak');
  $calon_array[]=array('calon_id'=>'erick','calon_name'=>'Erick Thohir');
  $calon_array[]=array('calon_id'=>'ganjar','calon_name'=>'Ganjar Pranowo');
  $calon_array[]=array('calon_id'=>'gatot','calon_name'=>'Gatot Nurmantyo');
  $calon_array[]=array('calon_id'=>'gibran','calon_name'=>'Gibran Rakabuming');
  $calon_array[]=array('calon_id'=>'giring','calon_name'=>'Giring Ganesha');
  $calon_array[]=array('calon_id'=>'ilham','calon_name'=>'Ilham Habibie');
  $calon_array[]=array('calon_id'=>'khofifah','calon_name'=>'Khofifah Indar Parawansa');
  $calon_array[]=array('calon_id'=>'lanyalla','calon_name'=>'La Nyalla Mattalitti');
  $calon_array[]=array('calon_id'=>'luhut','calon_name'=>'Luhut Binsar Panjaitan');
  $calon_array[]=array('calon_id'=>'mahfud','calon_name'=>'Mahfud MD');
  $calon_array[]=array('calon_id'=>'moeldoko','calon_name'=>'Moeldoko');
  $calon_array[]=array('calon_id'=>'imin','calon_name'=>'Muhaimin Iskandar');
  $calon_array[]=array('calon_id'=>'najwa','calon_name'=>'Najwa Shihab');
  $calon_array[]=array('calon_id'=>'prabowo','calon_name'=>'Prabowo Subianto');
  $calon_array[]=array('calon_id'=>'puan','calon_name'=>'Puan Maharani');
  $calon_array[]=array('calon_id'=>'rk','calon_name'=>'Ridwan Kamil');
  $calon_array[]=array('calon_id'=>'sandiaga','calon_name'=>'Sandiaga Uno');
  $calon_array[]=array('calon_id'=>'sri','calon_name'=>'Sri Mulyani');
  $calon_array[]=array('calon_id'=>'susi','calon_name'=>'Susi Pudjiastuti');
  $calon_array[]=array('calon_id'=>'yenny','calon_name'=>'Yenny Wahid');
  $calon_array[]=array('calon_id'=>'zulkifli','calon_name'=>'Zulkifli Hasan');
?>



<section aria-label="Voting Capres & Cawapres" class="section-container section-votingchoice" id="voting">
  <div class="votingchoice-bg"></div>
  <div class="width-max">
    
	<div class="section-title">
	  <div class="section-title-main">Voting Capres & Cawapres</div>
	</div>
    
	<?php if($vote_page == 'success') { ?>
	<div class="success-container content_center">
	  <div class="success-box">Voting berhasil</div>
	</div>
	<?php } ?>
	
    <form class="jotform-form section-votingchoice-content" action="https://submit.jotform.com/submit/231405293021039/" method="post" enctype="multipart/form-data" name="form_231405293021039" id="231405293021039" accept-charset="utf-8" autocomplete="on">
      <input type="hidden" name="formID" value="231405293021039" />
      <input type="hidden" id="JWTContainer" value="" />
      <input type="hidden" id="cardinalOrderNumber" value="" />
	  <div class="votingchoice-split">
	    <div class="votingchoice-capres">
		  <div class="votingchoice-title">
		    Calon <b>Presiden</b>
		  </div>
		  <div class="votingchoice-photo">
		    <div class="voting-person-base votingchoice-photo-frame flex_ori thumb-loading">
			  <img id="vote-capres" alt="Default" class="lazyload" data-original="img/person-default.png" />
			</div>
		  </div>
		  <div class="votingchoice-form">
		    <select onchange="changeCapres()" class="form-dropdown votingchoice-select validate[required]" id="input_3" name="q3_typeA" data-component="dropdown" required=""
			aria-label="calon presiden">
              <option value="person-default" disabled selected hidden>- Pilih Calon Presiden -</option>
			  <?php foreach($calon_array as $calon_list){ ?>
                <option value="<?php echo($calon_list['calon_id'])?>"><?php echo($calon_list['calon_name'])?></option>
			  <?php } ?>
            </select>
			<?php require ($_SERVER['PEMILU'].'img/icon/sortdown.svg')?>
		  </div>
		</div>
		<div class="votingchoice-cawapres">
		  <div class="votingchoice-title">
		    Calon <b>Wakil Presiden</b>
		  </div>
		  <div class="votingchoice-photo">
		    <div class="voting-person-base votingchoice-photo-frame flex_ori thumb-loading">
			  <img id="vote-cawapres" alt="Default" class="lazyload" data-original="img/person-default.png" />
			</div>
		  </div>
		  <div class="votingchoice-form">
		    <select onchange="changeCawapres()" class="form-dropdown votingchoice-select validate[required]" id="input_4" name="q4_typeA4" data-component="dropdown" required=""
			aria-label="calon wakil presiden">
              <option value="person-default" disabled selected hidden>- Pilih Calon Wakil Presiden -</option>
			  <?php foreach($calon_array as $calon_list){ ?>
                <option value="<?php echo($calon_list['calon_id'])?>"><?php echo($calon_list['calon_name'])?></option>
			  <?php } ?>
            </select>
			<?php require ($_SERVER['PEMILU'].'img/icon/sortdown.svg')?>
		  </div>
		</div>
	  </div>
	  
      <input id="input_27" type="submit" title="Submit Vote" class="btn votingchoice-submit" 
      data-component="button" data-content value="Submit Vote" />
      <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="231405293021039" />
      <script type="text/javascript">
        var all_spc = document.querySelectorAll("form[id='231405293021039'] .si" + "mple" + "_spc");
        for (var i = 0; i < all_spc.length; i++)
        {
          all_spc[i].value = "231405293021039-231405293021039";
        }
      </script>
      <input type="hidden" name="event_id" value="1660302006575_231405293021039_N83I2GA">
      <input type="hidden" name="temp_upload_folder" value="231405293021039_62f632b6ce2f9">
	</form>
	
  </div>
</section>