/******************************************************************************/
/* Scroll Up Button */
const goUpContainer = document.querySelector(".go-up-container");
const strokeCircle = goUpContainer.querySelector("circle");
const maxScroll = document.documentElement.scrollHeight - window.innerHeight;

window.addEventListener("scroll", function () {
    const scrollPosition = window.scrollY; 
    const viewportHeight = window.innerHeight;
    if (scrollPosition > viewportHeight * 0.5) {
        goUpContainer.style.display = "block";
    } else {
        goUpContainer.style.display = "none";
    }
    const strokeOffset = 119.38 * (scrollPosition / maxScroll);
    strokeCircle.style.strokeDashoffset = Math.max(0, 119.38 - strokeOffset); 
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}