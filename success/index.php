<?php require ('../inc/base.php')?>
<?php require ($_SERVER['PEMILU'].'inc/meta.php')?>
<div class="rancak-container">
  <?php $vote_page='success'; require ($_SERVER['PEMILU'].'section/voting-choice.php')?>
  <?php require ($_SERVER['PEMILU'].'section/voting-result.php')?>
</div>
<?php require ($_SERVER['PEMILU'].'inc/footer.php')?>
<?php require ($_SERVER['PEMILU'].'inc/base-bottom.php')?>