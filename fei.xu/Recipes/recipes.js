    $(".complicated dt").on("click",function(){
      let id = $(this).index(".complicated dt");

      let nextSibling = $(".complicated dd").eq(id);
  
      
      if(nextSibling.is(":visible")) {
        nextSibling.slideUp();
      } else {
        nextSibling.slideDown()
          .siblings("dd").slideUp();
      }
    })
