// https://codepen.io/virgilpana/pen/ZYqJXN
$(".add_to_cart").click(function() {
    var productCard = $(this).parent();
    var position = productCard.offset();
    var productImage = $(productCard)
      .find("img")
      .get(0).src;
    var productName = $(productCard)
      .find(".product_name")
      .get(0).innerHTML;

    $("body").append('<div class="floating-cart"></div>');
    var cart = $("div.floating-cart");
    productCard.clone().appendTo(cart);
    $(cart)
      .css({ top: position.top + "px", left: position.left + "px" })
      .fadeIn("slow")
      .addClass("moveToCart");
    setTimeout(function() {
      $("body").addClass("MakeFloatingCart");
    }, 800);
    setTimeout(function() {
      $("div.floating-cart").remove();
      $("body").removeClass("MakeFloatingCart");

      var cartItem =
        "<div class='cart-item'><div class='img-wrap'><img src='" +
        productImage +
        "' alt='' /></div><span>" +
        productName +
        "</span><strong>$39</strong><div class='cart-item-border'></div><div class='delete-item'></div></div>";

      $("#cart .empty").hide();
      $("#cart").append(cartItem);
      $("#checkout").fadeIn(500);

      $("#cart .cart-item")
        .last()
        .addClass("flash")
        .find(".delete-item")
        .click(function() {
          $(this)
            .parent()
            .fadeOut(300, function() {
              $(this).remove();
              if ($("#cart .cart-item").size() == 0) {
                $("#cart .empty").fadeIn(500);
                $("#checkout").fadeOut(500);
              }
            });
        });
      setTimeout(function() {
        $("#cart .cart-item")
          .last()
          .removeClass("flash");
      }, 10);
    }, 1000);
  });
});
