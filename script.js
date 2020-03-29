var $ = jQuery;
$(".welcome-panel-content h2").html(
  $(".welcome-panel-content h2")
    .html()
    .split("!")[0]
);
$(".welcome-panel-content h2").append("<span>'.$user_name.'</span>");
