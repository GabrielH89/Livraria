/*Funções referentes aos cards da página index.php*/
$('#cards').mouseover(function(){
	$('#cards').css('cursor', 'pointer');
	$('#cards').css('box-shadow', '10px 10px 10px #A9A9A9');
})

$('#cards').mouseout(function(){
	$('#cards').css('box-shadow', 'none');	
})