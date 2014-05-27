document.addEventListener('DOMContentLoaded', initStatut);

function clickStatut()
{
	this.removeEventListener('click', clickStatut);
	document.querySelector('#statut-span').className = 'hidden';
	document.querySelector('#statut input').className = '';
	document.querySelector('#statut input').focus();
	document.querySelector('#statut input').addEventListener('blur', blurStatut);
}

function blurStatut()
{
	this.removeEventListener('blur', blurStatut);
	document.querySelector('#statut-span').className = '';
	document.querySelector('#statut input').className = 'hidden';
	var statutContent = document.querySelector('#statut input').value;
	document.getElementById('statut').addEventListener('click', clickStatut);
	var idUser = <?php echo $_SESSION['id_user']; ?>;
	$.ajax({
	  type: 'POST',
	  url: 'controllers/statutController.php',
	  data: {action: 'new_statut', statut: statutContent, user: idUser},
	});
}


function initStatut()
{
	document.getElementById('statut').addEventListener('click', clickStatut);
	

}