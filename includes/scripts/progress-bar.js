const progressBar = document.getElementById("singular-progress-bar");
const mainDiv = document.getElementById("singular-main-wrapper");

window.addEventListener("scroll", () => {
  const scrollPos = window.scrollY || window.pageYOffset;
  const mainTop = mainDiv.offsetTop;
  const mainHeight = mainDiv.offsetHeight;

  const distanceScrolledInMain = scrollPos - mainTop;
  const scrollPercent =
    Math.min(Math.max(distanceScrolledInMain / mainHeight, 0), 1) * 100;
  progressBar.style.width = `${scrollPercent}%`;
});
