<div class="slideshow">
  <ul class="slides">
    <li class="slide is-active">
      <div class="cover"
        style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/unsplash_nature4.jpg);"></div>
    </li>
    <li class="slide">
      <div class="cover"
        style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/unsplash_nature1.jpg);"></div>
    </li>
    <li class="slide">
      <div class="cover"
        style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/unsplash_nature6.jpg);"></div>
    </li>
  </ul>
  <div class="arrows">
    <button class="arrow arrow-prev">
      <span></span>
    </button>
    <button class="arrow arrow-next">
      <span></span>
    </button>
  </div>
</div>
<style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

ul {
  list-style: none;
}

a {
  color: inherit;
  text-decoration: none;
}

button {
  background: transparent;
  border: none;
  outline: none;
}

body {
  font: 20px/28px sans-serif;
}

.container {
  max-width: 900px;
  margin: 0 auto;
}

.cover {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  height: 100vh;
}


/* SLIDESHOW
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.slideshow {
  cursor: none;
}

.slideshow .slides {
  display: grid;
}

.slideshow .slide {
  grid-column: 1;
  grid-row: 1;
  opacity: 0;
  transition: opacity 0.4s;
}

.slideshow .slide.is-active {
  opacity: 1;
}

.slideshow .arrows {
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.slideshow .arrows .arrow {
  position: relative;
  width: 50%;
  cursor: inherit;
  visibility: hidden;
  overflow: inherit;
}

.slideshow .arrows .is-visible {
  visibility: visible;
}

.slideshow .arrows span {
  position: absolute;
  width: 72px;
  height: 72px;
  background-size: 72px 72px;
  mix-blend-mode: difference;
  filter: invert(1);
}

.slideshow .arrow-prev span {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/slider-prev-arrow.svg);
}

.slideshow .arrow-next span {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/slider-next-arrow.svg);
}

main {
  padding: 50px;
}

main p + p {
  margin-top: 20px;
}

</style>
<script>
    
const slideshow = document.querySelector(".slideshow");
const list = document.querySelector(".slideshow .slides");
const btns = document.querySelectorAll(".slideshow .arrows .arrow");
const prevBtn = document.querySelector(".slideshow .arrow-prev");
const prevBtnChild = document.querySelector(".slideshow .arrow-prev span");
const nextBtn = document.querySelector(".slideshow .arrow-next");
const nextBtnChild = document.querySelector(".slideshow .arrow-next span");
const main = document.querySelector("main");
const autoplayInterval = parseInt(slideshow.dataset.autoplayInterval) || 4000;
const isActive = "is-active";
const isVisible = "is-visible";
let intervalID;

window.addEventListener("load", () => {
  changeSlide();
  autoPlay();
  stopAutoPlayOnHover();
  customizeArrows();
});

function changeSlide() {
  for (const btn of btns) {
    btn.addEventListener("click", e => {
      const activeSlide = document.querySelector(".slide.is-active");
      activeSlide.classList.remove(isActive);
      if (e.currentTarget === nextBtn) {
        activeSlide.nextElementSibling
          ? activeSlide.nextElementSibling.classList.add(isActive)
          : list.firstElementChild.classList.add(isActive);
      } else {
        activeSlide.previousElementSibling
          ? activeSlide.previousElementSibling.classList.add(isActive)
          : list.lastElementChild.classList.add(isActive);
      }
    });
  }
}

function autoPlay() {
  if (slideshow.dataset.autoplay === "true") {
    intervalID = setInterval(() => {
      nextBtn.click();
    }, autoplayInterval);
  }
}

function stopAutoPlayOnHover() {
  if (
    slideshow.dataset.autoplay === "true" &&
    slideshow.dataset.stopAutoplayOnHover === "true"
  ) {
    slideshow.addEventListener("mouseenter", () => {
      clearInterval(intervalID);
    });

    slideshow.addEventListener("touchstart", () => {
      clearInterval(intervalID);
    });
  }
}

function customizeArrows() {
  slideshow.addEventListener("mousemove", mousemoveHandler);
  slideshow.addEventListener("touchmove", mousemoveHandler);
  slideshow.addEventListener("mouseleave", mouseleaveHandler);
  main.addEventListener("touchstart", mouseleaveHandler);
}

function mousemoveHandler(e) {
  const width = this.offsetWidth;
  const xPos = e.pageX;
  const yPos = e.pageY;
  const xPos2 = e.pageX - nextBtn.offsetLeft - nextBtnChild.offsetWidth;

  if (xPos > width / 2) {
    prevBtn.classList.remove(isVisible);
    nextBtn.classList.add(isVisible);

    nextBtnChild.style.left = `${xPos2}px`;
    nextBtnChild.style.top = `${yPos}px`;
  } else {
    nextBtn.classList.remove(isVisible);
    prevBtn.classList.add(isVisible);

    prevBtnChild.style.left = `${xPos}px`;
    prevBtnChild.style.top = `${yPos}px`;
  }
}

function mouseleaveHandler() {
  prevBtn.classList.remove(isVisible);
  nextBtn.classList.remove(isVisible);
}



Resources1× 0.5× 0.25×Rerun
</script>