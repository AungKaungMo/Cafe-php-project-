$(document).ready(function () {
    var ctx = document.getElementById("myChart").getContext("2d");

    var barChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Jan","Feb","March","April","May","June","July"],
            datasets:[
                {
                    data: sever_data,
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
                    data: product_type_data,
                    backgroundColor: ['#9D89BD','#3500F2','#200094']
                }
            ]
        },
        options: {
            responsive: false,
        },
    });


})