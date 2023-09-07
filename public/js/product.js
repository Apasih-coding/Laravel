document.addEventListener("click", async function (e) {
    if (e.target.classList.contains("modal-detail-btn")) {
        const productId = e.target.dataset.productid;
        const detailProduct = await getDetailProduct(productId);
        updateModalBody(detailProduct);
    }
});

function getDetailProduct(productId) {
    return fetch("https://dummyjson.com/products/" + productId)
        .then((response) => response.json())
        .then((product) => product);
}
function updateModalBody(product) {
    const productDetails = showDetailsProduct(product);
    const modalContent = document.querySelector(".modal-body");
    modalContent.innerHTML = productDetails;
    const starRating = document.querySelector(".star-progress");
    starRating.style.width = (product.rating / 5) * 100 + "%";
    // console.log(product.rating);
}
function showDetailsProduct(product) {
    return `<div class="container">
                <div class="row">
                    <div class="col col-left">
                        <h5><u>${product.title}</u></h5>
                        <img src="${product.thumbnail}" class="img-thumbnail">
                        <div class="row product-images">
                            <div class="col col-md-3">
                                <img src="${product.images[0]}">
                            </div>
                            <div class="col col-md-3">
                                <img src="${product.images[1]}">
                            </div>
                            <div class="col col-md-3">
                                <img src="${product.images[2]}">
                            </div>
                            <div class="col col-md-3">
                                <img src="${product.images[3]}">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h6>Price : $.${product.price}</h6>
                                <p>Category: ${product.category}</p>
                            </div>
                            <div class="col">
                                <div class="star-rating">
                                    <div class="star-progress"></div>
                                </div>
                                <p class="brand">Brand: ${product.brand}</p>
                            </div>
                        </div>
                        <p>Stock: 90</p>
                        <p>Description: <br/>${product.description}</p>
                    </div>
                </div>
            </div>`;
}
