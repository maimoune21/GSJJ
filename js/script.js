/******************************************************************************/
/* Calculate Years of expertise and Animate Numbers */
document.addEventListener("DOMContentLoaded", function () {
  const startYear = 2002;
  const currentYear = new Date().getFullYear();
  const yearsOfExpertise = currentYear - startYear;

  const creationSpan = document.querySelector(".creation span");
  const expertiseSpan = document.getElementById("yearsOfExpertise");
  let hasAnimated = false;

  function animateCount(element, start, end, duration) {
      let startTime = null;
      function step(timestamp) {
          if (!startTime) startTime = timestamp;
          const progress = Math.min((timestamp - startTime) / duration, 1);
          const value = Math.floor(progress * (end - start) + start);
          element.textContent = value;
          if (progress < 1) {
              window.requestAnimationFrame(step);
          }
      }

      window.requestAnimationFrame(step);
  }
  function handleIntersect(entries) {
      entries.forEach(entry => {
          if (entry.isIntersecting && !hasAnimated) {
              hasAnimated = true;
              animateCount(creationSpan, 0, startYear, 1000);
              animateCount(expertiseSpan, 0, yearsOfExpertise, 1000);
          }
      });
  }
  const observer = new IntersectionObserver(handleIntersect, {
      threshold: 0.1
  });
  const section = document.querySelector('.Creation-infos');
  observer.observe(section);
});

/******************************************************************************/
/* Form inputs Scrolling */
const inputs = document.querySelectorAll(
  ".Contacts-form input, .Contacts-form textarea"
);
inputs.forEach((input, index) => {
  input.addEventListener("keypress", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      const nextInput = inputs[index + 1];
      if (nextInput) {
        nextInput.focus();
      }
    }
  });
});

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

