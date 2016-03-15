
$('#collectionsButton').click(function(){
  $('#collectionsMenu').toggleClass('active');
  $('#collectionsButton').toggleClass('active');
});

$('#mobileMenuToggle').click(function(){
  $('#masthead').toggleClass('active');
});

$('#pictures a').click(function(){
  $('#panel').toggleClass('active');
  var imgSrc = $(this).attr('data-src');
  $('#display').attr('src', imgSrc);
  $('#display').load(function(){
    $('#display').addClass('active');
  });
});

$('#panel').click(function(){
  $('#panel').toggleClass('active');
  $('#display').load(null);
  $('#display').removeClass('active');
});


/**
function toggleClass(classToToggle, toggledElement){
  var className = ' ' + toggledElement.className + ' ';
  if( ~className.indexOf(' ' + classToToggle + ' ')){
    toggledElement.className = className.replace(' ' + classToToggle + ' ', '');
  } else {
    toggledElement.className += ' ' + classToToggle;
  }
}

document.getElementById('masthead').onclick = function(){
  toggleClass('mobile', document.getElementById('masthead'));
}
*/
