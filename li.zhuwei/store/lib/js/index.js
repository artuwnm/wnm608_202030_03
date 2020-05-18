var collectionFormButtonClicked = null;

function highlight(element) {
  if (collectionFormButtonClicked != null) {
    collectionFormButtonClicked.style.background = "white";
    collectionFormButtonClicked.style.color = "black";
  }
  collectionFormButtonClicked = element;
  collectionFormButtonClicked.style.background = "#fb8ca9";
  collectionFormButtonClicked.style.background = "white";
}

$(function() {

  $(".gallery-item").on("click", function(){
    let src = $(this). find("img").attr("src");
    $("body").append(`<div class='lightbox'><img src='${src}'></div>`);
  });

  $("body").on("click",".lightbox", function(){
    $(this).remove();
  })

  $("#scroll-button-left").click(function() {
    $(".scrolling-wrapper").animate({
        scrollLeft: -3500
    }, 1000);
  });

  $("#scroll-button-right").click(function() {
    $(".scrolling-wrapper").animate({
        scrollLeft: 4000
    }, 1000);
  });

  $(".form-button").hover(function() {
    if ($(this)[0] != collectionFormButtonClicked) {
      $(this).css("background-color","#2079b0");
      $(this).css("color","white");
    }
  }).mouseout(function(){
    if ($(this)[0] != collectionFormButtonClicked) {
      $(this).css({
        "background-color":"white",
        "color":"black",
      });
    }
  });
});

$( document ).ready(function() {
  collectionFormButtonClicked = $("#default-button")[0];
  highlight(collectionFormButtonClicked);
});

function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}

