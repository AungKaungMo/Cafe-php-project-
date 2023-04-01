$(document).ready(() => {
  let carts = JSON.parse(localStorage.getItem("cart")) || [];
  $(".cartCount").text("(" + carts.length + ")");
  $("#cartList").val(JSON.stringify(carts));

  let count = 1;
  let itemId;
  let mmk;
  let originalPrice = 0;
  $(".buy").click((event) => {
    itemId = event.target.attributes[1].value;
    let index = event.target.attributes[2].value;

    $(".cake").text($(".pname")[index].innerText);
    $(".mmk").text($(".price")[index].innerText);
    mmk = Number($(".price")[index].innerText.substring(0, $(".price")[index].innerText.length - 4));
    originalPrice = mmk;

    $(".coin").text(
      $(".price")[index].innerText.substring(
        0,
        $(".price")[index].innerText.length - 3
      ) + " Coins"
    );
    $(".orderImage").attr("src", $(".img").attr("src"));
  });

  $(".plus").click(() => {
    count++;
    $(".countItem").text(count);
    mmk += originalPrice;
    $(".mmk").text(mmk + " MMK");
    $(".coin").text(mmk + " Coins");
  });
  $(".minus").click(() => {
    if (count <= 1) {
      return;
    }
    count--;
    $(".countItem").text(count);
    mmk -= originalPrice;
    $(".mmk").text(mmk + " MMK");
    $(".coin").text(mmk + " Coins");
  });

  $(".addCart").click(function addCart() {
    let found = false;
    carts.forEach(item => {
      if (Number(item.id) == Number(itemId)) {
        item.quantity += count;
        found = true;
      }
    });

    if (!found) {
        carts.push({
        id: itemId,
        quantity: count,
      });
    }

    count = 1;
    $(".countItem").text(count);

    $(".cartCount").text("(" + carts.length + ")");
    localStorage.setItem("cart", JSON.stringify(carts));
    $("#cartList").val(JSON.stringify(carts));
  });
});
