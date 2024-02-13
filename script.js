let currentIndex = 0;
const images = document.querySelectorAll('#carousel img');
const totalImages = images.length;

function showImage(index) {
    images.forEach((image, i) => {
        if (i === index) {
            image.style.display = 'inline-block';
        } else {
            image.style.display = 'none';
        }
    });
}

function nextImage() {
    currentIndex = (currentIndex + 1) % totalImages;
    showImage(currentIndex);
}

// Mostrar la primera imagen al cargar la página
showImage(currentIndex);

// Cambiar de imagen cada 3 segundos (3000 milisegundos)
setInterval(nextImage, 3000);
