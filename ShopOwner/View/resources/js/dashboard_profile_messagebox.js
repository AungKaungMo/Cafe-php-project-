$(document).ready(function () {
  let typeBox = $(".typeBox");
  $("#send").click(function () {
    if (typeBox.val() == "") {
      return;
    }
    $(".chatBox").append(
      ` <div class="p-1 messageChatContainer d-flex flex-row-reverse justify-content-start">
        <div><img src="./resources/img/admin.png"></div>
        <p class="chat me">${typeBox.val()}</p>
    </div>`
    );
  });
});
