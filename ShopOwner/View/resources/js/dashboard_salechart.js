$(document).ready(function () {
    var ctx = document.getElementById("myChart").getContext("2d");

    var barChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Mon","Tues","Wed","Thurs","Fri","Sat","Sun"],
            datasets:[
                {
                    data:[430000,300000,50000,700000,690000,80000,120000],
                    backgroundColor: ['#9D89BD','#3500F2']
                }
            ]
        },
        options: {
            responsive: false,
        },
    });
    var ctx = document.getElementById("myChart2").getContext("2d");

    var pieChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: ["coffee","desserts","juice"],
            datasets:[
                {
                    data:[50,89,45],
                    backgroundColor: ['#9D89BD','#3500F2','#200094']
                }
            ]
        },
        options: {
            responsive: false,
        },
    });

    // Top selling products

    let sellingTable = [
        {
            'ProductName' : 'Espresso',
            'Sold' : 54,
            'Instock' : 60,
            'Remain' : 6
        },
        {
            'ProductName' : 'Ice Americano',
            'Sold' : 54,
            'Instock' : 60,
            'Remain' : 6
        },
        {
            'ProductName' : 'Green Tea',
            'Sold' : 54,
            'Instock' : 60,
            'Remain' : 6
        },
        {
            'ProductName' : 'Choco Lava',
            'Sold' : 54,
            'Instock' : 60,
            'Remain' : 6
        },
    ]
    for (let i = 0; i < sellingTable.length; i++) {
          $(".tableBody").append(
            ` <tr >
                <td data-label="No.">${i + 1}</td>
                <td data-label="ProductName">${sellingTable[i].ProductName}</td>
                <td data-label="Sold">${sellingTable[i].Sold}</td>
                <td data-label="Instock">${sellingTable[i].Instock}</td>
                <td data-label="Remain">${sellingTable[i].Remain}</td>
            </tr>`
          );
      }
})