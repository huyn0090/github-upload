function toggleDisplayMenu(x) {
  const menu1 = document.getElementById("display_menu");
  menu1.classList.toggle("change");
  const menu2 = document.getElementById("menu-popup");
  menu2.classList.toggle("hidden");
}

document.getElementById("display_menu").addEventListener("click", toggleDisplayMenu);


function randomInt (min, max) {
  min = Math.ceil(min)
  max = Math.floor(max)
  // The maximum is inclusive and the minimum is inclusive
  return Math.floor(Math.random() * (max - min + 1)) + min
}


const products = []
const nums = [1,2,3,4,5,6,7,8,9]

for (let e = 0; e < 8; e++){
        products.push(`<div class="subbox">`)
        for (let i = 0; i < 1; i++){
        const numbers = nums.splice(nums, 1)
        products.push(`<div class="sub-box box">`)
        products.push(`<img src="img/cover-${(numbers)}.jpg" alt="photography-image-${(numbers)}">`)
        products.push(`</div>`)
        }
       
    products.push(` </div>`)   
    }

const $products = document.getElementById('products')
$products.innerHTML = products.join(``)
$products.addEventListener('mouseover', function(e){
    const box = e.target.closest('.box')
    if (box) {
        box.classList.toggle('hover')
    }
})

$photography.addEventListener('mouseout', function(e){
    const box = e.target.closest('.box')
    if (box) {
        box.classList.toggle('hover2')
    }
})