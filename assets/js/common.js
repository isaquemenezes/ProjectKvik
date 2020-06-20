
function crsf_update () {

	$.get(var_url_crsf,function(data) {

		var_token_name=data.token_name;
		var_token_hash=data.token_hash;
		$('input[name='+var_token_name+']').val(var_token_hash);

	}).fail(function() {

		alert('error crsf');

	});

}
/* COMMAS FOR NUMBERS */
function addCommas (nStr) {

	var comma=' ';
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + comma + '$2');
	}
	return x1 + x2;

}

/**
 * ACTIVATION D'UN TAB-PANE AU CHARGEMENT
 * EN FONCTION DE L'ANCRE
 */
var ancre = window.location.hash.replace('#T', '');
if(ancre) {

	$('li.nav-item a[aria-controls="'+ancre+'"]').tab('show');

} else {

	$('.nav.nav-tabs').each(function(){
		var id = $(this).attr('id');
		$('#'+id+' li.nav-item a[data-toggle="tab"]:first').tab('show');
	});

}
/**
 * AJOUT DES ANCRES SUR TOUS LES LIENS DES TAB-PANE
 *
 */
$.each($('.tab-pane'), function(i, val) {

	var ancre = val.getAttribute('id');
	$('#'+ancre+' a.btn').attr('href', function(i,val) {

		return val+'#T'+ancre;

	});
	$('#'+ancre+' form').attr('action', function(i,val) {

		return val+'#T'+ancre;

	});

});
/**
 * ACTIVATION D'UN TAB-PANE
 *
 */
$('li.nav-item a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {

	/* changement de tab = changement d'ancre */
	diese = e.target.hash.replace(/^.(\s+)?/, '');
	window.location.hash = 'T'+diese;
	/* RECHARGER LES JS */
	// coreFnReload('#'+diese);

});
