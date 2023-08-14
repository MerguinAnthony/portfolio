function typeEffect(element, speed) {
  let text = element.innerHTML;
  element.innerHTML = "";

  let i = 0;
  let timer = setInterval(function () {
    if (i < text.length) {
      element.append(text.charAt(i));
      i++;
    } else {
      clearInterval(timer);
    }
  }, speed);
}

// application
let speed = 75;
let h1 = document.querySelector("h1");
let p = document.getElementById("description");
let delay = h1.innerHTML.length * speed + speed;

// type affect to header
typeEffect(h1, speed);

// type affect to body
setTimeout(function () {
  p.style.display = "inline-block";
  typeEffect(p, speed);
}, delay);
