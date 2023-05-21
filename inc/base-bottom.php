<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
</noscript>
<script defer>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function(){window.setTimeout(loadDeferredStyles,0);});
  else window.addEventListener('load', loadDeferredStyles);
</script>
<script defer src="js/lazysizes.min.js"></script>
<script defer rancak-hold="js/rancak.js?<?php echo $anticache; ?>"></script>

<script>
function changeCapres(){
   const imgName = document.getElementById('input_3').value;
   document.getElementById('vote-capres').src = 'img/tokoh/'+imgName+'.png';       

   var opCawapres = document.getElementById("input_4").getElementsByTagName("option");
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
    const imgName = document.getElementById('input_4').value;
    document.getElementById('vote-cawapres').src = 'img/tokoh/'+imgName+'.png';  

    var opCapres = document.getElementById("input_3").getElementsByTagName("option");
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



</body>
</html>