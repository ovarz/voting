<!DOCTYPE html>
<html lang="id">
<base href="/voting/" />
<?php 
  $_SERVER['PEMILU'] = $_SERVER['DOCUMENT_ROOT'] . '/voting/'; 
  $anticache = date ('s'.'i'.'H'.'d'.'m'.'Y');
  $sitetitle = 'Voting';
  $random_name=array("Pay Joe","Shuu Trysh Noe","Rhou Jya Lee","Rush Die","Soul as Three");
  $random_pres=array("prabowo","sandiaga","anies","ridwan","ganjar","puan","ahy","imin","andika","erick","airlangga","giring");
  $random_wapres=array("emil","mahfud","sri","gatot","ahok","luhut","lanyalla","khofifah","yenny","ilham","susi","zulkifli");
  
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