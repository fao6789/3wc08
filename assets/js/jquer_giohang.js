//updown ở popup
function up(){
  var value = parseInt(document.getElementById('s-luong').value);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('s-luong').value = value;
}
function down(){
  var value = parseInt(document.getElementById('s-luong').value);
  value--;
  document.getElementById('s-luong').value = value;
}
function up3(){
  var value = parseInt(document.getElementById('s-luong3').value);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('s-luong3').value = value;
}
function down3(){
  var value = parseInt(document.getElementById('s-luong3').value);
  value--;
  document.getElementById('s-luong3').value = value;
}
//up down ở giao diện
function up2(){
  var value = parseInt(document.getElementById('s-luong2').value);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('s-luong2').value = value;
}
function down2(){
  var value = parseInt(document.getElementById('s-luong2').value);
  value--;
  document.getElementById('s-luong2').value = value;
}

