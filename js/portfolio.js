const pr = document.getElementsByClassName("pr");
const tr = document.getElementsByClassName("tr");

function portfolio(index) {
  pr[index].addEventListener("mouseover", () => {
    for (let i = 0; i < pr.length; i++) {
      if (i === index) {
        pr[i].classList.add("color-change");
        tr[i].classList.remove("transform-portfolio");
      } else {
        pr[i].classList.remove("color-change");
        tr[i].classList.add("transform-portfolio");
      }
    }
  });
}
for (let i = 0; i < pr.length; i++) {
  portfolio(i);
}
// let index = 0;

// for (let i = 0; i < pr.length; i++) {
//   pr[i].addEventListener("mouseover", () => {
//     if (i === 1) {
//       pr[i].classList.add("color-change");
//       tr[i].classList.remove("transform-portfolio");
//     } else {
//       pr[i].classList.remove("color-change");
//       tr[i].classList.add("transform-portfolio");
//     }
//   });
// }
