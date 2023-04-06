$(document).ready(() => {
  console.log("hi");
  $("#searchIcon").click(() => {
    $.ajax({
      url: "../Controller/searchController.php",
      type: "POST",
      data: {
        searchText: $("#searchItems").val(),
      },
      success: function (res) {
        let returnData = JSON.parse(res);
        $("#searchProductsContainerBox").empty();
        for (let i = 0; i < returnData.length; i++) {
          $("#searchProductsContainerBox").append(
            `
                    <div class="m-auto searchProductContainer">
                  <div class="detailsBox ms-3 pt-3 d-flex justify-content-between">
                    <div class="productImage">
                      <img src="../../Storages/${returnData[i].product_photo}">
                    </div>
                    <div class="me-4 mb-3">
                      <div class="d-flex justify-content-between">
                      <p class="productName">${returnData[i].product_name}</p>
                      <p class="productAmount">${returnData[i].product_price} MMK</p>
                      </div>
                      <p class="cafeName">Shop Name - (<span> Htet Naung Cafe</span>)</p>
                      <div class="d-flex justify-content-between">
                      <button class="goShopBtn"><a href="./shopinterface?id=${returnData[i].shop_id}">Go Shop</a></button>
                      <iconify-icon icon="ph:shopping-cart-simple-fill" data-id="${returnData[i]["product_id"]}" index="${i}" class="buy buyCart"> <?php if (empty($_SESSION["userid"])) { ?> data-bs-toggle="modal" data-bs-target="#staticBackdropCheckLogin" <?php } else { ?> data-bs-toggle="modal" data-bs-target="#staticBackdrop" <?php } ?></iconify-icon>
                      </div>
                    </div>
                  </div>
                    `
          );
        }
      },
    });
  });
});
