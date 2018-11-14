/*$('#ventas').on('change', function() {
  var valueOption = this.value;
  console.log(valueOption);
    if (valueOption == "0") {
        $("#inflatablesNescafe").css("display", "none");
        $("#inflatablesMaggi").css("display", "none");
    }else{
        $("#inflatablesNescafe").css("display", "");
        $("#inflatablesMaggi").css("display", "");
    }
});*/
$('#todosNescafe').change(function(){
	if ($(this).is(":checked"))
	{
	   $('#inflatablesNescafe1').prop('checked', true);
	   $('#inflatablesNescafe2').prop('checked', true);
	   $('#inflatablesNescafe3').prop('checked', true);
	   $('#inflatablesNescafe4').prop('checked', true);
	   $('#inflatablesNescafe5').prop('checked', true);
	}
	else{
	   $('#inflatablesNescafe1').prop('checked', false);
	   $('#inflatablesNescafe2').prop('checked', false);
	   $('#inflatablesNescafe3').prop('checked', false);
	   $('#inflatablesNescafe4').prop('checked', false);
	   $('#inflatablesNescafe5').prop('checked', false);
	}
});
$('#todosMaggi').change(function(){
	if ($(this).is(":checked"))
	{
	   $('#inflatablesMaggi1').prop('checked', true);
	   $('#inflatablesMaggi2').prop('checked', true);
	   $('#inflatablesMaggi3').prop('checked', true);
	   $('#inflatablesMaggi4').prop('checked', true);
	   $('#inflatablesMaggi5').prop('checked', true);
	   $('#inflatablesMaggi6').prop('checked', true);
	   $('#inflatablesMaggi7').prop('checked', true);
	}
	else{
	   $('#inflatablesMaggi1').prop('checked', false);
	   $('#inflatablesMaggi2').prop('checked', false);
	   $('#inflatablesMaggi3').prop('checked', false);
	   $('#inflatablesMaggi4').prop('checked', false);
	   $('#inflatablesMaggi5').prop('checked', false);
	   $('#inflatablesMaggi6').prop('checked', false);
	   $('#inflatablesMaggi7').prop('checked', false);
	}
});