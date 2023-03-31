$(document).ready(() => {
  let carts = JSON.parse(localStorage.getItem("cart")) || [];
  $(".cartCount").text("(" + carts.length + ")");
  $(".cartsValue").val(JSON.stringify(carts));

  let count = 1;
  let itemId;
  $(".buy").click((event) => {
    itemId = event.target.attributes[1].value;
    let index = event.target.attributes[2].value;

    $(".cake").text($(".pname")[index].innerText);
    $(".mmk").text($(".price")[index].innerText);
    $(".coin").text(
      $(".price")[index].innerText.substring(
        0,
        $(".price")[index].innerText.length - 3
      ) + " Coins"
    );
    $(".orderImage").attr("src", $(".img").attr("src"));
  });

  $("#plus").click(() => {
    count++;
    $(".countItem").text(count);
  });
  $(".minus").click(() => {
    if (count <= 1) {
      return;
    }
    count--;
    $(".countItem").text(count);
  });

  $(".addCart").click(() => {
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
    $(".cartsValue").val(JSON.stringify(carts));
  });
});
