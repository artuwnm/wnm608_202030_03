    $(".best dt").on("click",function(){
      $(this).next().slideDown()
        .siblings("dd").slideUp();
    })

    $(".complicated dt").on("click",function(){
      // get the index of this dt in the list of dts
      let id = $(this).index(".complicated dt");
      // use that index to select the next dd
      let nextSibling = $(".complicated dd").eq(id);
      // that was all stupid and complicated
      
      if(nextSibling.is(":visible")) {
        nextSibling.slideUp();
      } else {
        nextSibling.slideDown()
          .siblings("dd").slideUp();
      }
    })