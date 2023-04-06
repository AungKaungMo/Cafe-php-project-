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
        $("#searchProductsContainerBox").empty();
        $("#searchProductsContainerBox").append(res);
      },
    });
  });
});
