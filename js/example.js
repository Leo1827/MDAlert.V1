document.addEventListener('DOMContentLoaded', function(){

	document.getElementById('only_show').addEventListener('click', function(e){
		//console.log('Leo1827-Github');
		mdalert({title: 'Alerta 1', type: 'error', msg: 'Ha ocurrido un error', msgs: JSON.stringify(['mensaje #1', 'mensaje #2', 'mensaje #3']), additional: JSON.stringify({hideclose: false})});
	});

	document.getElementById('alert_with_actions').addEventListener('click', function(e){
		//console.log('Leo1827-Github');
		mdalert({title: 'Alerta con acciones', type: 'success', msg: 'Todo un éxito', actions: JSON.stringify([
			{url: base+'/login', name: 'Ingresar', type: 'success'},
			{url: base+'/login', name: 'INFO', type: 'info'}, 
			{url: base+'/login', name: 'Error', type: 'danger'}, 
			{url: base+'/login', name: 'primary', type: 'primary'}])});
	});

	document.getElementById('alert_confirm').addEventListener('click', function(e){
		//console.log('Leo1827-Github');
		mdalert({title: '¿Deseas eliminar?', type: 'delete', msg: 'Si elimina este elemento, ya no lo podra recuperar', actions: JSON.stringify([
			{url: base+'/delete', name: 'Si, Eliminar', type: 'danger'}]), additional: JSON.stringify({hideclose: false})});
	});

	document.getElementById('alert_callback').addEventListener('click', function(e){
		//console.log('Leo1827-Github');
		mdalert({title: '¿Deseas eliminar?', type: 'delete', msg: 'Si elimina este elemento, ya no lo podra recuperar', actions: JSON.stringify([
			{url: base+'/delete', name: 'Si, Eliminar', type: 'danger'},
			{callback: 'callback_alert', params: "'param1, param2'" , name: 'No, Cancelar', type: 'success'}]), additional: JSON.stringify({hideclose: true})});
	});

	document.getElementById('alert_no_close').addEventListener('click', function(e){
		//console.log('Leo1827-Github');
		mdalert({title: '¿Deseas eliminar?', type: 'delete', msg: 'Si elimina este elemento, ya no lo podra recuperar', actions: JSON.stringify([
			{url: base+'/delete', name: 'Si, Eliminar', type: 'danger'}]), additional: JSON.stringify({hideclose: true})});
	});

});

function callback_alert(param1, param2){
	console.log(param1, param2);

	md_alert_status('hide');
}