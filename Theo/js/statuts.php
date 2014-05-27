document.addEventListener('DOMContentLoaded', initStatut);

function clickStatut(e)
{
	document.getElementById('statut').removeEventListener('click', clickStatut);
	document.getElementById('statut-span').className = 'hidden';
	document.getElementById('statut-input').className = '';
	document.getElementById('statut-input').focus();
	document.getElementById('statut-input').addEventListener('blur', blurStatut);
}

function blurStatut(e)
{
	document.getElementById('statut-input').removeEventListener('blur', blurStatut);
	document.getElementById('statut').addEventListener('click', clickStatut);
	var statutContent = document.getElementById('statut-input').value;
	$.ajax({
	  type: 'POST',
	  url: 'controllers/statutController.php',
	  data: {action: 'new_statut', statut: statutContent},
	  success: function(response){
	  	if (response != false) {
	  		document.getElementById('statut-span').innerHTML = '"'+response+'"';
	  	};
	  	document.getElementById('statut-input').className = 'hidden';
	  	document.getElementById('statut-span').className = '';
	  }
	});
}


function initStatut(e)
{
	document.getElementById('statut').addEventListener('click', clickStatut);
	

}