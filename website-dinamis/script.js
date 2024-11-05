$(document).ready(function() {
    $('#productTable').DataTable();
});

function showContent(id) {
    $('.content').hide();
    $('#' + id).show();
}

let products = [
    { name: 'Product 1', price: '1000' },
    { name: 'Product 2', price: '2000' }
];

function loadProducts() {
    const table = $('#productTable').DataTable();
    table.clear();
    products.forEach((product, index) => {
        table.row.add([
            product.name,
            product.price,
            `<button class="btn btn-warning btn-sm" onclick="editProduct(${index})">Edit</button>
             <button class="btn btn-danger btn-sm" onclick="deleteProduct(${index})">Delete</button>`
        ]);
    });
    table.draw();
}

function addProduct() {
    const name = prompt("Enter product name:");
    const price = prompt("Enter product price:");
    if (name && price) {
        products.push({ name, price });
        loadProducts();
    }
}

function editProduct(index) {
    const product = products[index];
    const newName = prompt("Edit product name:", product.name);
    const newPrice = prompt("Edit product price:", product.price);
    if (newName && newPrice) {
        products[index] = { name: newName, price: newPrice };
        loadProducts();
    }
}

function deleteProduct(index) {
    if (confirm("Are you sure you want to delete this product?")) {
        products.splice(index, 1);
        loadProducts();
    }
}

// Initialize products table with data
loadProducts();
