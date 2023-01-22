// When the user scrolls down 50px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {

    document.getElementById("topBtn").style.display = "block";
  } else {
    document.getElementById("topBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  window.scrollTo({
    top: 0, 
    left: 0, 
    behavior: 'smooth' 
  });
}

// const asideLinks = [...document.querySelectorAll("aside a")]
// const sections = [...document.querySelectorAll("section")]

// let sectionsPosition;

// function positionClaculation() {
//     sectionsPosition = sections.map(section => section.offsetTop)
// }
// positionClaculation()
// console.log(sectionsPosition);

// asideLinks.forEach(link => link.addEventListener("click", addScrollSmooth))

// function addScrollSmooth(e) {
//     const linkIndex = asideLinks.indexOf(e.target);
//     window.scrollTo({
//         top: sectionsPosition[linkIndex],
//         behavior: "smooth"
//     })
// }

// window.addEventListener("resize",positionClaculation)