$(document).ready(function() {
   
    let pendingTable = [
        {
            'Name' : 'Silviana',
            'Phone' : '09123456789',
            'Date' : '112/05/2023',
            'Time' : '8:00PM',
            'Person' : '5',
        },
        {
            'Name' : 'John',
            'Phone' : '09123456789',
            'Date' : '112/05/2023',
            'Time' : '8:00PM',
            'Person' : '5',
        },
        {
            'Name' : 'John',
            'Phone' : '09123456789',
            'Date' : '112/05/2023',
            'Time' : '8:00PM',
            'Person' : '5',
        },
        {
            'Name' : 'John',
            'Phone' : '09123456789',
            'Date' : '112/05/2023',
            'Time' : '8:00PM',
            'Person' : '5',
        },
        {
            'Name' : 'John',
            'Phone' : '09123456789',
            'Date' : '112/05/2023',
            'Time' : '8:00PM',
            'Person' : '5',
        },
        // {
        //     'Name' : 'Silvana',
        //     'Phone' : 'Espresso',
        //     'Date' : 'COD',
        //     'Time' : '2000mmk',
        //     'Person' : '09123456789',
        // },
        // {
        //     'Name' : 'Franco',
        //     'Phone' : 'Espresso',
        //     'Date' : 'COD',
        //     'Time' : '2000mmk',
        //     'Person' : '09123456789',
        // },
        // {
        //     'Name' : 'Benedetta',
        //     'Phone' : 'Espresso',
        //     'Date' : 'COD',
        //     'Time' : '2000mmk',
        //     'Person' : '09123456789',
        // },
        // {
        //     'Name' : 'Gusion',
        //     'Phone' : 'Espresso',
        //     'Date' : 'COD',
        //     'Time' : '2000mmk',
        //     'Person' : '09123456789',
        // },
        // {
        //     'Name' : 'Carrot',
        //     'Phone' : 'Espresso',
        //     'Date' : 'COD',
        //     'Time' : '2000mmk',
        //     'Person' : '09123456789',
        // }
    ]
    let confirmTable = [
    {
        'Name' : 'John',
        'Phone' : '09123456789',
        'Date' : '112/05/2023',
        'Time' : '8:00PM',
        'Person' : '5',
        },
        {
            'Name' : 'John',
            'Phone' : '09123456789',
            'Date' : '112/05/2023',
            'Time' : '8:00PM',
            'Person' : '5',
        },
        {
            'Name' : 'John',
            'Phone' : '09123456789',
            'Date' : '112/05/2023',
            'Time' : '8:00PM',
            'Person' : '5',
        },
        {
            'Name' : 'John',
            'Phone' : '09123456789',
            'Date' : '112/05/2023',
            'Time' : '8:00PM',
            'Person' : '5',
        },
        {
            'Name' : 'John',
            'Phone' : '09123456789',
            'Date' : '112/05/2023',
            'Time' : '8:00PM',
            'Person' : '5',
        }
    ]

    loopingBooking(pendingTable, "", "tableBody");
    loopingBooking(confirmTable, "d-none", "confirmBody");

    $('.allPage').text(pendingTable.length/5);
    $('.allPage1').text(confirmTable.length/5);
  
    $('.next').click(function() {
        if($('.allPage').text() <= $('.currentPage').text() ) return;
        $('.currentPage').text((parseInt($('.currentPage').text() ) + 1));
    })
    $('.prev').click(function() {
        if( $('.currentPage').text() <= 1 ) return;
        $('.currentPage').text((parseInt($('.currentPage').text() ) - 1));
  })

  $('.next1').click(function() {
    if($('.allPage1').text() <= $('.currentPage1').text() ) return;
    $('.currentPage1').text((parseInt($('.currentPage1').text() ) + 1));
})
$('.prev1').click(function() {
    if( $('.currentPage1').text() <= 1 ) return;
        $('.currentPage1').text((parseInt($('.currentPage1').text() ) - 1));
})

    // $('.confirm').click(function() {
    //     console.log($(this).parent().parent(("td:first")).text());
        
    // })
    // $('.reject').click(function() {
    //     $(this).parent().parent().addClass("d-none");
    // })

})
function loopingBooking(tableName, state, appendTable) {
    for(let i=0; i< tableName.length ; i++){
        // let dataStage = '';
        if(tableName.length/5 )
        $(`.${appendTable}`).append(
            ` <tr>
            <td data-label="No.">${i + 1}</td>
            <td data-label="Name">${tableName[i].Name}</td>
            <td data-label="Phone">${tableName[i].Phone}</td>
            <td data-label="Date">${tableName[i].Date}</td>
            <td data-label="Time">${tableName[i].Time}</td>
            <td data-label="Person">${tableName[i].Person}</td>
            <td data-label="Action" class='${state}'>
            <iconify-icon icon="icon-park-solid:correct" class="confirm p-2 bg-success rounded-3 text-white me-3"></iconify-icon>
            <iconify-icon icon="fa6-solid:xmark" class="reject p-2 bg-danger rounded-3 text-white"></iconify-icon>
            </td>
        </tr>`
        )
    }

}