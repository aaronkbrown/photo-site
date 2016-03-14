
$('#collectionsButton').click(function(){
  $('#collectionsMenu').toggleClass('active');
  $('#collectionsButton').toggleClass('active');
});

$('#mobileMenuToggle').click(function(){
  $('#masthead').toggleClass('active');
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
