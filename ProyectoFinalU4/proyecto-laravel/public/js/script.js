$(document).ready(function () {
  var products = [
    {
      "name": "Rocky",
      "image": "https://th.bing.com/th/id/R.8e994295fd1ea689f6159891f8ac5d4b?rik=IVXKBFFS5TtIPA&pid=ImgRaw&r=0",
      "price": "$7500",
      "description": "Perrito café"
    },
    {
      "name": "Toby",
      "image": "https://th.bing.com/th/id/R.f99e9890cdcedeeed2cc6a2eaa114c2b?rik=dqCqJLaHGWjPWg&riu=http%3a%2f%2fwww.animalesextremos.com%2fImagenes%2fbeagle-perros-mas-bonitos-del-mundo.jpg&ehk=7rONw%2b3CJQX7sKtA2k5NeV%2bn8jhHtE%2bBU6rCwm0OGt8%3d&risl=&pid=ImgRaw&r=0",
      "price": "$6999",
      "description": "Perrito blanco con cafe y negro"
    },
    {
      "name": "Coco",
      "image": "https://infoanimales.net/wp-content/uploads/2021/02/Perros-pequenos-que-no-crecen-5.jpg",
      "price": "$10200",
      "description": "Perrito Blanco"
    }
  ];

  $.each(products, function (index, product) {
    var productHTML = `
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="${product.image}" alt="${product.name}">
          <div class="card-body">
            <h4 class="card-title">${product.name}</h4>
            <h5>${product.price}</h5>
            <p class="card-text">${product.description}</p>
          </div>
        </div>
      </div>
    `;
    $('#product-gallery').append(productHTML);
  });
});
