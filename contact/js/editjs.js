$('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
$('.collapsible').collapsible();


$( document ).ready(function() {
  $('.modal').modal();
  $('.modal').on('click', function() {
  });
});


$(document).ready(function() {
	$('select').material_select();
	$('.select').on('click', function() {
  });
});

function clickOften(){
  $('#modal-Often').modal('open');
}
