const englishButton = document.getElementById("english-button");
const dropdownMenu = document.querySelector(".dropdown-menu");

let currentLanguage = {
  text: "ENGLISH",
  flag: "./data/pictures/english.png",
};

const languageOptions = document.querySelectorAll(".dropdown-menu li");
const flagMap = {
  Français: "./data/pictures/french.png",
  العربية: "./data/pictures/arabic.png",
  ENGLISH: "./data/pictures/english.png",
};

englishButton.addEventListener("click", (event) => {
  event.stopPropagation();
  dropdownMenu.classList.toggle("show");
  englishButton.setAttribute(
    "aria-expanded",
    dropdownMenu.classList.contains("show")
  );
});

document.addEventListener("click", (event) => {
  if (
    !englishButton.contains(event.target) &&
    !dropdownMenu.contains(event.target)
  ) {
    dropdownMenu.classList.remove("show");
    englishButton.setAttribute("aria-expanded", "false");
  }
});

languageOptions.forEach((option) => {
  option.addEventListener("click", (event) => {
    event.preventDefault();

    const selectedAnchor = option.querySelector("a");
    const selectedLanguage = selectedAnchor.textContent.trim();
    const selectedFlag = flagMap[selectedLanguage];

    let tempLanguage = {
      text: currentLanguage.text,
      flag: currentLanguage.flag,
    };

    englishButton.innerHTML = `<img src="${selectedFlag}" alt="${selectedLanguage} flag" style="height: 1em;"> ${selectedLanguage}`;

    selectedAnchor.innerHTML = `<img src="${tempLanguage.flag}" alt="${tempLanguage.text} flag" style="height: 1em;"> ${tempLanguage.text}`;

    currentLanguage = {
      text: selectedLanguage,
      flag: selectedFlag,
    };

    dropdownMenu.classList.remove("show");
    englishButton.setAttribute("aria-expanded", "false");
  });
});
