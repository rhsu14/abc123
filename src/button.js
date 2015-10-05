$(document).ready(function(){
  var data;
  $.ajax({url: "get_data.php", success: function(result){
    data = JSON.parse(result);
    $("#score2").text(data.player2.score);
    $("#score1").text(data.player1.score);
    $(".button2").text("Vote for " + data.player2.name);
    $(".button1").text("Vote for " + data.player1.name);
  }});
  $(".button1").click(function(){
    data.winner = 1;
    $.ajax({
      type: "POST",
      url: "post_data.php",
      data: data, 
      success: function(result){
        console.log(result);
      }
    });
    location.reload();
  }); 

  $(".button2").click(function(){
    data.winner = 2;
    $.ajax({
      type: "POST",
      url: "post_data.php",
      data: data, 
      success: function(result){
        console.log(result);
      }
    });
    location.reload();
  }); 
});
