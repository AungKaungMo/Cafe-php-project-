$(document).ready(() => {
  let carts = JSON.parse(localStorage.getItem("cart"));
  let count = 0;
  let orgCount = document.getElementsByClassName("countItem");
  let total = document.getElementsByClassName("totalPrice");
  let price = document.getElementsByClassName("price");
  let totalCoinPrice = document.getElementsByClassName("totalCoinPrice");
  let subtotal = document.getElementsByClassName("subTotal")[0];
  let taxFee = document.getElementsByClassName("taxFee")[0];
  let orgp1;
   let orgp2;

  for (let i = 0; i < orgCount.length; i++) {
    document.getElementsByClassName("plus")[i].addEventListener("click", () => {
      
      count = Number(orgCount[i].innerText);
      count++;
      orgCount[i].innerText = count;
      let mmk = Number(
        price[i].innerText.substring(0, price[i].innerText.length - 4)
      );
      
      total[i].innerText = mmk * count + " MMK";
      orgp1 = mmk * count ;
      totalCoinPrice[i].innerText = mmk * count + " Coins" ;
      carts[i]["quantity"] = count;
      localStorage.setItem("cart",JSON.stringify(carts));
      subtotal.innerText = Number(subtotal.innerText.substring(0,subtotal.innerText.length - 11)) + mmk + " MMK(Coins)";
      taxFee.innerText =(Number(subtotal.innerText.substring(0,subtotal.innerText.length - 11)) + mmk) * 5/100 + " MMK(Coins)"; 
      document.getElementsByClassName("grandTotal")[0].innerText = Number(subtotal.innerText.substring(0,subtotal.innerText.length - 11)) + Number(taxFee.innerText.substring(0,taxFee.innerText.length - 11)) + " MMK(Coins)";;
    });

    document
      .getElementsByClassName("minus")
      [i].addEventListener("click", () => {
        count = Number(orgCount[i].innerText);
        if (count <= 1) {
          return;
        }
        count--;
        orgCount[i].innerText = count;
       let mmk = Number(
        price[i].innerText.substring(0, price[i].innerText.length - 4)
        );
      
        total[i].innerText = mmk * count + " MMK";
        orgp2 = mmk * count ;
        totalCoinPrice[i].innerText = mmk * count + " Coins" ;
        carts[i]["quantity"] = count;
        localStorage.setItem("cart",JSON.stringify(carts));  
        subtotal.innerText = Number(subtotal.innerText.substring(0,subtotal.innerText.length - 11)) - mmk + " MMK(Coins)";
        taxFee.innerText =(Number(subtotal.innerText.substring(0,subtotal.innerText.length - 11)) + mmk) * 5/100 + " MMK(Coins)"; 
        document.getElementsByClassName("grandTotal")[0].innerText = Number(subtotal.innerText.substring(0,subtotal.innerText.length - 11)) + Number(taxFee.innerText.substring(0,taxFee.innerText.length - 11)) + " MMK(Coins)";
      });

    

  }


});
