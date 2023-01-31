window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (window.innerWidth < 900 ) {
    document.getElementById("topBtn").style.display = "none";
  }
  else if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {

    document.getElementById("topBtn").style.display = "block";
  }   else {
    document.getElementById("topBtn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  window.scrollTo({
    top: 0, 
    left: 0, 
    behavior: 'smooth' 
  });
}