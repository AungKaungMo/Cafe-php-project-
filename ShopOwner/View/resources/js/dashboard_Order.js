$(document).ready(function () {
  let dataTable = [
    {
      Name: "AungKaungMoe",
      Product: "Espresso",
      Payment: "COD",
      Price: "2000mmk",
      Phone: "09123456789",
      Address: "No.124,Hlaing,YadanarLane",
    },
    {
      Name: "EiPwintPhyo",
      Product: "Espresso",
      Payment: "AYA",
      Price: "2300mmk",
      Phone: "09123456789",
      Address: "No.124,Hlaing,YadanarLane",
    },
    {
      Name: "WinMyatThwe",
      Product: "Espresso",
      Payment: "COD",
      Price: "2000mmk",
      Phone: "09123456789",
      Address: "No.124,Hlaing,YadanarLane",
    },
    {
      Name: "ChyuYati",
      Product: "Espresso",
      Payment: "COD",
      Price: "2000mmk",
      Phone: "09123456789",
      Address: "No.124,Hlaing,YadanarLane",
    },
    {
      Name: "ChitPaingSoe",
      Product: "Espresso",
      Payment: "COD",
      Price: "2000mmk",
      Phone: "09123456789",
      Address: "No.124,Hlaing,YadanarLane",
    },
    {
      Name: "DavidJohn",
      Product: "Espresso",
      Payment: "COD",
      Price: "2000mmk",
      Phone: "09123456789",
      Address: "No.124,Hlaing,YadanarLane",
    },
    {
      Name: "Bendezal",
      Product: "Espresso",
      Payment: "COD",
      Price: "2000mmk",
      Phone: "09123456789",
      Address: "No.124,Hlaing,YadanarLane",
    },
    {
      Name: "ae",
      Product: "Espresso",
      Payment: "COD",
      Price: "2000mmk",
      Phone: "09123456789",
      Address: "No.124,Hlaing,YadanarLane",
    },
    {
      Name: "jaienai",
      Product: "Espresso",
      Payment: "COD",
      Price: "2000mmk",
      Phone: "09123456789",
      Address: "No.124,Hlaing,YadanarLane",
    },
    {
      Name: "kagikakhway",
      Product: "Espresso",
      Payment: "COD",
      Price: "2000mmk",
      Phone: "09123456789",
      Address: "No.124,Hlaing,YadanarLane",
    },
  ];

  for (let i = 0; i < dataTable.length; i++) {
      $(".tableBody").append(
        ` <tr >
            <td data-label="No.">${i + 1}</td>
            <td data-label="Name">${dataTable[i].Name}</td>
            <td data-label="Product">${dataTable[i].Product}</td>
            <td data-label="Payment">${dataTable[i].Payment}</td>
            <td data-label="Price">${dataTable[i].Price}</td>
            <td data-label="Phone">${dataTable[i].Phone}</td>
            <td data-label="Address">${dataTable[i].Address}</td>
        </tr>`
      );
  }
  $(".allPage").text(dataTable.length / 5);

  $(".next").click(function () {
    if ($(".allPage").text() <= $(".currentPage").text()) return;
    $(".currentPage").text(parseInt($(".currentPage").text()) + 1);
  });
  $(".prev").click(function () {
    if ($(".currentPage").text() <= 1) return;
    $(".currentPage").text(parseInt($(".currentPage").text()) - 1);
  });
});
