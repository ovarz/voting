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
  $calon_array[]=array('calon_id'=>'imin','calon_name'=>'Muhaimin Iskandar');
  $calon_array[]=array('calon_id'=>'najwa','calon_name'=>'Najwa Shihab');
  $calon_array[]=array('calon_id'=>'prabowo','calon_name'=>'Prabowo Subianto');
  $calon_array[]=array('calon_id'=>'puan','calon_name'=>'Puan Maharani');
  $calon_array[]=array('calon_id'=>'ridwan','calon_name'=>'Ridwan Kamil');
  $calon_array[]=array('calon_id'=>'sandiaga','calon_name'=>'Sandiaga Uno');
  $calon_array[]=array('calon_id'=>'sri','calon_name'=>'Sri Mulyani');
  $calon_array[]=array('calon_id'=>'susi','calon_name'=>'Susi Pudjiastuti');
  $calon_array[]=array('calon_id'=>'yenny','calon_name'=>'Yenny Wahid');
  $calon_array[]=array('calon_id'=>'zulkifli','calon_name'=>'Zulkifli Hasan');
?>

<section aria-label="Voting Capres & Cawapres" class="section-container section-votingchoice" id="voting">
  <div class="width-max">
    
	<div class="section-title">
	  <div class="section-title-main">Voting Capres & Cawapres</div>
	  <div class="section-title-summary">
	    Silahkan pilih pasangan <b>Capres</b> dan <b>Cawapres</b> yang paling ideal untuk pemilu 2024
	  </div>
	</div>
	
	<div class="section-votingchoice-content">
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
		    <select onchange="changeCapres()" class="votingchoice-select" name="capres" id="capres">
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
		    <select onchange="changeCawapres()" class="votingchoice-select" name="cawapres" id="cawapres">
              <option value="person-default" disabled selected hidden>- Pilih Calon Wakil Presiden -</option>
			  <?php foreach($calon_array as $calon_list){ ?>
                <option value="<?php echo($calon_list['calon_id'])?>"><?php echo($calon_list['calon_name'])?></option>
			  <?php } ?>
            </select>
			<?php require ($_SERVER['PEMILU'].'img/icon/sortdown.svg')?>
		  </div>
		</div>
	  </div>
	  
	  <div class="votingchoice-captcha content_center">
	    captcha here
	  </div>
	  
	  <button title="Sumbit Vote" class="btn votingchoice-submit"
	     <?php if($vote_result == 'none'){ ?>onclick="location.href='error.php';"<?php } ?>
	     <?php if($vote_result == 'error'){ ?>onclick="location.href='success.php';"<?php } ?>
	  >
	    Pilih pasangan ini
	  </button>
	  
	  <?php if($vote_result == 'error'){ ?>
	  <div class="votingchoice-error content_center">
	    <span>
		  <b>Vote Gagal!</b> Silakan pilih presiden terlebih dahulu.
		</span>
	  </div>
	  <?php } ?>
	  
	  <?php if($vote_result == 'success'){ ?>
	  <div class="votingchoice-error content_center">
	    <span>
		  <b>Vote Berhasil!</b>.
		</span>
	  </div>
	  <?php } ?>
	</div>
	
  </div>
</section>



<script>
function changeCapres(){
   const imgName = document.getElementById('capres').value;
   document.getElementById('vote-capres').src = 'img/tokoh/'+imgName+'.png';       

   var opCawapres = document.getElementById("cawapres").getElementsByTagName("option");
   for(var i = 0; i < opCawapres.length; i++){
    if(opCawapres[i].value.toLowerCase() == imgName.toLowerCase()){ 
        opCawapres[i].disabled = true;
        opCawapres[i].style.display = "none";
        opCawapres[0].disabled = true;
        opCawapres[0].style.display = "none";
    }else{
        opCawapres[i].disabled = false;
        opCawapres[i].style.display = "block";
    }
   }
};
function changeCawapres(){
    const imgName = document.getElementById('cawapres').value;
    document.getElementById('vote-cawapres').src = 'img/tokoh/'+imgName+'.png';  

    var opCapres = document.getElementById("capres").getElementsByTagName("option");
    for(var i = 0; i < opCapres.length; i++){
        if(opCapres[i].value.toLowerCase() == imgName.toLowerCase()){
            opCapres[i].disabled = true;
            opCapres[i].style.display = "none";
            opCapres[0].disabled = true;
            opCapres[0].style.display = "none";
        }else{ 
            opCapres[i].disabled = false;
            opCapres[i].style.display = "block";
        }
    }
};
</script>