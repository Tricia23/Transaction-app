var txcount = 1;
$('#save-transaction').on('click', function (e) {
  e.preventDefault();

  // Coding
  $('#exampleModalCenter').modal('toggle'); //or  $('#IDModal').modal('hide');
  var transname = $('#transnamemodal').val();
  var transprice = $('#pricemodal').val();

  var elem = `<div class="row">
    <div class="column1" name="transno" id="transno">${txcount}</div>
    <div class="column2" name"transname" id="transname"> ${transname}</b></div>
    <div class="column3" name="transprice" id="transprice"> ${transprice}</b></div>
    <input class="btn btn-primary2" type="button" value="X">
    <hr>
  </div>`;
  $('#transaction').append(elem);

  txcount++;
  return false;
});
