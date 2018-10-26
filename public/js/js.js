$('#ventas').on('change', function() {
  var valueOption = this.value;
  console.log(valueOption);
    if (valueOption == "no") {
        $("#inflatablesNescafe").css("display", "none");
        $("#inflatablesMaggi").css("display", "none");
    }else{
        $("#inflatablesNescafe").css("display", "");
        $("#inflatablesMaggi").css("display", "");
    }
});