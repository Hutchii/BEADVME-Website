var portfolio1 = document.querySelector('.s1');
var portfolio2 = document.querySelector('.s2');
var portfolio3 = document.querySelector('.s3');
var portfolio4 = document.querySelector('.s4');
var portfolio5 = document.querySelector('.s5');
var i1 = document.querySelector('.i1');
var i2 = document.querySelector('.i2');
var i3 = document.querySelector('.i3');
var i4 = document.querySelector('.i4');
var i5 = document.querySelector('.i5');
var p2 = document.querySelector('.p2');
var p1 = document.querySelector('.p1');
var p3 = document.querySelector('.p3');
var p4 = document.querySelector('.p4');
var p5 = document.querySelector('.p5');

portfolio1.addEventListener('mouseover', () => {
    i1.classList.remove('transform-portfolio');
    i2.classList.add('transform-portfolio');
    i3.classList.add('transform-portfolio');
    i4.classList.add('transform-portfolio');
    i5.classList.add('transform-portfolio');
    p1.classList.remove('color-change2');
    p2.classList.remove('color-change');
    p3.classList.remove('color-change');
    p4.classList.remove('color-change');
    p5.classList.remove('color-change');
});
portfolio2.addEventListener('mouseover', () => {
    i1.classList.add('transform-portfolio');
    i2.classList.remove('transform-portfolio');
    i3.classList.add('transform-portfolio');
    i4.classList.add('transform-portfolio');
    i5.classList.add('transform-portfolio');
    p1.classList.add('color-change2');
    p2.classList.add('color-change');
    p1.classList.remove('color-change');
    p3.classList.remove('color-change');
    p4.classList.remove('color-change');
    p5.classList.remove('color-change');
});
portfolio3.addEventListener('mouseover', () => {
    i1.classList.add('transform-portfolio');
    i2.classList.add('transform-portfolio');
    i3.classList.remove('transform-portfolio');
    i4.classList.add('transform-portfolio');
    i5.classList.add('transform-portfolio');
    p1.classList.add('color-change2');
    p3.classList.add('color-change');
    p1.classList.remove('color-change');
    p2.classList.remove('color-change');
    p4.classList.remove('color-change');
    p5.classList.remove('color-change');
});
portfolio4.addEventListener('mouseover', () => {
    i1.classList.add('transform-portfolio');
    i2.classList.add('transform-portfolio');
    i3.classList.add('transform-portfolio');
    i4.classList.remove('transform-portfolio');
    i5.classList.add('transform-portfolio');
    p1.classList.add('color-change2');
    p4.classList.add('color-change');
    p1.classList.remove('color-change');
    p2.classList.remove('color-change');
    p3.classList.remove('color-change');
    p5.classList.remove('color-change');
});
portfolio5.addEventListener('mouseover', () => {
     document.querySelector('.i5').classList.remove('transform-portfolio');
     document.querySelectorAll('.i1, .i2, .i3, .i4').forEach(item => {
         item.classList.add('transform-portfolio');})
     document.querySelector('.p1').classList.add('color-change2');
     document.querySelector('.p5').classList.add('color-change');
     document.querySelectorAll('.p1, .p2, .p3, .p4').forEach(item => {
         item.classList.remove('color-change');})
});