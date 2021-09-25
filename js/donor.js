const images = [
    'image/1.jpg',
    'image/2.png',
    'image/3.jpg',

];
let imgIndex = 0;
const imgElement = document.getElementById('slider-img')
setInterval(() => {
    if (imgIndex >= images.length) {
        imgIndex = 0;
    }
    const imgUrl = images[imgIndex];
    imgElement.setAttribute('src', imgUrl);
    imgIndex++;
}, 2000)