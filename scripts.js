/* scripts.js */

// Função para carregar os produtos da vitrine
function loadProducts() {
    // Simule uma requisição AJAX para obter os dados dos produtos do banco de dados
    // Neste exemplo, usaremos uma matriz de objetos como dados de amostra
    const products = [
        { id: 1, affiliateLink: "link1", imageUrl: "image1.jpg", description: "Descrição do produto 1" },
        { id: 2, affiliateLink: "link2", imageUrl: "image2.jpg", description: "Descrição do produto 2" },
        { id: 3, affiliateLink: "link3", imageUrl: "image3.jpg", description: "Descrição do produto 3" }
    ];

    const productList = document.getElementById("product-list");

    // Limpa a lista de produtos antes de carregar novos
    productList.innerHTML = "";

    // Itera sobre os produtos e cria elementos HTML para cada um
    products.forEach(product => {
        const productItem = document.createElement("div");
        productItem.classList.add("product");

        const productLink = document.createElement("a");
        productLink.href = product.affiliateLink;
        productLink.target = "_blank";

        const productImage = document.createElement("img");
        productImage.src = product.imageUrl;
        productImage.alt = "Imagem do produto";

        const productDescription = document.createElement("div");
        productDescription.classList.add("product-description");
        productDescription.textContent = product.description;

        productLink.appendChild(productImage);
        productItem.appendChild(productLink);
        productItem.appendChild(productDescription);
        
        productList.appendChild(productItem);
    });
}

// Carrega os produtos ao carregar a página
window.onload = loadProducts;
