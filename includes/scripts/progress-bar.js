const progressBar = document.getElementById("singular-progress-bar");
const mainDiv = document.getElementById("singular-main-wrapper");
const footer = document.getElementById("footer");

window.addEventListener("scroll", () => {
  const scrollPos = window.scrollY || window.pageYOffset;
  const footerHeight = footer.offsetHeight;
  const mainTop = mainDiv.offsetTop;
  const mainHeight = mainDiv.offsetHeight - footerHeight;

  const distanceScrolledInMain = scrollPos - mainTop;
  const scrollPercent =
    Math.min(Math.max(distanceScrolledInMain / mainHeight, 0), 1) * 100;
  progressBar.style.width = `${scrollPercent}%`;
});
