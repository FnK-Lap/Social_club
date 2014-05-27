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

function selectReceiver(e){
	function sendMessage(e)
	{
		e.preventDefault();
		var message = document.getElementById('message-content').value;
		console.log(message);
		$.ajax({
		  type: 'POST',
		  url: 'controllers/messageController.php',
		  data: {action: 'send_message', message: message, receiver: idReceiver},
		  	
		});

	}

	function receiveMessage(e)
	{
		$.ajax({
		  type: 'POST',
		  url: 'controllers/messageController.php',
		  data: {action: 'receive_message', receiver: idReceiver},
		  success: function(response){
		  	var messages = JSON.parse(response);
		  	while (document.getElementById('list-message-bloc').firstChild) {
			    document.getElementById('list-message-bloc').removeChild(document.getElementById('list-message-bloc').firstChild);
			}
		  	for (var i = 0; i < messages.length; i++) {
		  		var div = document.createElement('div');
		  		if (messages[i][0] == 'send') {
		  			div.className = 'message-send';
		  			
		  		}else if (messages[i][0] == 'receive') {
		  			div.className = 'message-receive';
		  		};
		  		div.innerHTML = messages[i][1];
		  		document.getElementById('list-message-bloc').appendChild(div);
		  	};
		  }
		});
	}
	e.preventDefault();
	var idReceiver = this.id;
	console.log(idReceiver);
	var messages = receiveMessage();
	document.getElementById('send-message-button').addEventListener('click', sendMessage);
}




function initStatut(e)
{	
	if (document.getElementById('statut') != null) {
		document.getElementById('statut').addEventListener('click', clickStatut);
	};
	if (document.querySelectorAll('.list_message-user') != null) {
		var conversations = document.querySelectorAll('.list_message-user');
		for (var i = 0; i < conversations.length; i++) {
			conversations[i].addEventListener('click', selectReceiver);
		};
	};
}