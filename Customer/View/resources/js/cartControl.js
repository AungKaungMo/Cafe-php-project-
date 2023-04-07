$(document).ready(() => {
  let carts = JSON.parse(localStorage.getItem("cart")) || [];
  $(".cartCount").text("(" + carts.length + ")");
  $(".cartList").val(JSON.stringify(carts));

  let count = 1;
  let itemId;
  let mmk;
  let originalPrice;
  $(".buy").click((event) => {
    count = 1;
    $(".countItem").text(count);
    itemId = event.target.attributes[1].value;
    let index = event.target.attributes[2].value;

    $(".cake").text($(".pname")[index].innerText);
    $(".mmk").text($(".priceChange")[index].innerText);
    mmk = Number(
      $(".priceChange")[index].innerText.substring(
        0,
        $(".priceChange")[index].innerText.length - 4
      )
    );
    originalPrice = mmk;

    // $(".coin").text(
    //   $(".priceChange")[index].innerText.substring(
    //     0,
    //     $(".priceChange")[index].innerText.length - 3
    //   ) + " Coins"
    // );

    $(".orderImage").attr(
      "src",
      document.getElementsByClassName("img")[index].src
    );
  });

  $(".plus").click(() => {
    count++;
    $(".countItem").text(count);
    mmk += originalPrice;
    $(".mmk").text(mmk + " MMK");
    // $(".coin").text(mmk + " Coins");
  });
  $(".minus").click(() => {
    if (count <= 1) {
      return;
    }
    count--;
    $(".countItem").text(count);
    mmk -= originalPrice;
    $(".mmk").text(mmk + " MMK");
    // $(".coin").text(mmk + " Coins");
  });

  $(".addCart").click(function addCart() {
    let found = false;
    let noteValue = $("#noteToOrder").val();
    carts.forEach((item) => {
      if (Number(item.id) == Number(itemId)) {
        item.quantity += count;
        found = true;
        item.orderNote += " / " + noteValue;
      }
      $("#noteToOrder").val("");
    });

    if (!found) {
      carts.push({
        id: itemId,
        quantity: count,
        orderNote: noteValue,
      });
    }

    count = 1;
    $(".countItem").text(count);

    $(".cartCount").text("(" + carts.length + ")");
    localStorage.setItem("cart", JSON.stringify(carts));
    $(".cartList").val(JSON.stringify(carts));
  });
  console.log($(".cartList").val());
});
