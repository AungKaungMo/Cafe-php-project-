$(document).ready(() => {
  let carts = JSON.parse(localStorage.getItem("cart"));
  let count = 0;
  let orgCount = document.getElementsByClassName("countItem");
  let total = document.getElementsByClassName("totalPrice");
  let price = document.getElementsByClassName("price");
  // let totalCoinPrice = document.getElementsByClassName("totalCoinPrice");
  let subtotal = document.getElementsByClassName("subTotal")[0];
  let taxFee = document.getElementsByClassName("taxFee")[0];
  $("#totalPriceCheck").val(
    document.getElementsByClassName("grandTotal")[0].innerText
  );
  $(".cartList").val(JSON.stringify(carts));

  for (let i = 0; i < orgCount.length; i++) {
    document.getElementsByClassName("plus")[i].addEventListener("click", () => {
      count = Number(orgCount[i].innerText);
      count++;
      orgCount[i].innerText = count;
      let mmk = Number(
        price[i].innerText.substring(0, price[i].innerText.length - 4)
      );

      total[i].innerText = mmk * count + " MMK";
      orgp1 = mmk * count;
      // totalCoinPrice[i].innerText = mmk * count + " Coins" ;
      carts[i]["quantity"] = count;
      localStorage.setItem("cart", JSON.stringify(carts));
      subtotal.innerText =
        Number(subtotal.innerText.substring(0, subtotal.innerText.length - 4)) +
        mmk +
        " MMK";
      taxFee.innerText =
        ((Number(
          subtotal.innerText.substring(0, subtotal.innerText.length - 4)
        ) +
          mmk) *
          5) /
          100 +
        " MMK";
      document.getElementsByClassName("grandTotal")[0].innerText =
        Number(subtotal.innerText.substring(0, subtotal.innerText.length - 4)) +
        Number(taxFee.innerText.substring(0, taxFee.innerText.length - 4)) +
        " MMK";
      $("#totalPriceCheck").val(
        document.getElementsByClassName("grandTotal")[0].innerText
      );
      carts[i].quantity += 1;
      $(".cartList").val(JSON.stringify(carts));
    });

    document
      .getElementsByClassName("minus")
      [i].addEventListener("click", () => {
        count = Number(orgCount[i].innerText);
        count--;
        orgCount[i].innerText = count;
        let mmk = Number(
          price[i].innerText.substring(0, price[i].innerText.length - 4)
        );

        total[i].innerText = mmk * count + " MMK";
        orgp2 = mmk * count;
        // totalCoinPrice[i].innerText = mmk * count + " Coins" ;
        carts[i]["quantity"] = count;
        localStorage.setItem("cart", JSON.stringify(carts));
        subtotal.innerText =
          Number(
            subtotal.innerText.substring(0, subtotal.innerText.length - 4)
          ) -
          mmk +
          " MMK";
        taxFee.innerText =
          ((Number(
            subtotal.innerText.substring(0, subtotal.innerText.length - 4)
          ) +
            mmk) *
            5) /
            100 +
          " MMK";
        document.getElementsByClassName("grandTotal")[0].innerText =
          Number(
            subtotal.innerText.substring(0, subtotal.innerText.length - 4)
          ) +
          Number(taxFee.innerText.substring(0, taxFee.innerText.length - 4)) +
          " MMK";
        $("#totalPriceCheck").val(
          document.getElementsByClassName("grandTotal")[0].innerText
        );

        if (count == 0) {
          document.getElementsByClassName("table_row")[i].remove();
          var newCart = carts.filter((obj) => {
            return obj.quantity != 0;
          });
          localStorage.setItem("cart", JSON.stringify(newCart));
        }

        carts[i].quantity -= 1;
        $(".cartList").val(JSON.stringify(carts));
      });
  }
  console.log($(".cartList").val());
});
