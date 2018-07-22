// jQuery(document).ready(function(){
// 	alert('Mensaje utilizando jQuery')
// });

// $(function(){
// 	alert('Mensaje utilizando jQuery');
// });

$(function(){
	$('p').click(function(){
		$(this).text('Mensaje al usuario utilizando jQuery');
	});
});

$(function(){
	$('#textohtml').click(function(){
		$(this).text('<i>Texto utilizado jQuery y HTML</i><hr>');
	});
});

$(function(){
	$('p.texto').click(function(){
		$(this).html('<i>Texto utilizando JQuery</i><hr>');
	});
});

$(function(){
	$('#textocss').click(function(){
		$(this).html('<i>Texto utilizando JQuery y HTML</i><hr>');

		$(this).css({'font-size':'15px', 'text-align':'center'});

		$('.texto,#textocss').hide();

	});
});

// $(function(){})