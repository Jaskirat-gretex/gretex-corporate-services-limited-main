const tl = gsap.timeline();

tl.to("#main-headline-text span", {
    y: 0,
    opacity: 1,
    duration: 0.4,
    stagger: 0.1
  });
tl.to(".description", {
    y: 0,
    opacity: 1,
    duration: 0.4,
    delay: 0.1
  });