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
	e.preventDefault();
	var idReceiver = this.id;
	console.log(idReceiver);
	document.getElementById('send-message-button').setAttribute('data-id', idReceiver);
	var messages = receiveMessage();
	
}

function receiveMessage(e)
{
	var idReceiver = document.getElementById('send-message-button').getAttribute('data-id');
	console.log(idReceiver);
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
	  		if (i > 5) {
	  			document.getElementById('list-message-bloc').removeChild(document.getElementById('list-message-bloc').firstChild);
	  		};
	  		var div = document.createElement('div');
	  		if (messages[i][0] == 'send') {
	  			div.className = 'message-send';
	  			var divdelete = document.createElement('div');
	  			divdelete.className = 'delete-send';
	  			div.innerHTML = messages[i][1]+'<div data-id-delete='+messages[i][2]+' class=\'delete-send\'></div>';
		  		document.getElementById('list-message-bloc').appendChild(div);
		  		
	  			
	  		}else if (messages[i][0] == 'receive') {
	  			div.className = 'message-receive';
	  			div.innerHTML = messages[i][1];
		  		document.getElementById('list-message-bloc').appendChild(div);
		  		
	  		};

	  	};
	  	document.getElementById('send-message-button').addEventListener('click', sendMessage);
	  	if (document.querySelectorAll('.delete-send') != null) {
		var deletebuttons = document.querySelectorAll('.delete-send');
		console.log(deletebuttons);
		for (var i = 0; i < deletebuttons.length; i++) {
			document.querySelectorAll('.delete-send')[i].addEventListener('click', deleteMessage);
		};
		
	};
	  }
	});
}

function sendMessage(e)
{
	e.preventDefault();
	var message = document.getElementById('message-content').value;
	var idReceiver = document.getElementById('send-message-button').getAttribute('data-id');
	$.ajax({
	  type: 'POST',
	  url: 'controllers/messageController.php',
	  data: {action: 'send_message', message: message, receiver: idReceiver},
	  success: function(){
	  	document.getElementById('send-message-button').removeEventListener('click', sendMessage);
	  	receiveMessage();
	  }
	});

}

function deleteMessage(e){
	e.preventDefault();
	var idMessage = this.getAttribute('data-id-delete');
	console.log(idMessage);
	$.ajax({
	  type: 'POST',
	  url: 'controllers/messageController.php',
	  data: {action: 'delete_message', id: idMessage},
	  success: function(){
	  	document.getElementById('send-message-button').removeEventListener('click', sendMessage);
	  	receiveMessage();
	  }
	});
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