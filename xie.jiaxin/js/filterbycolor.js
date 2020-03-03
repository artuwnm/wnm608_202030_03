$("#filter-options :checkbox").click(function() 
	{
       	$("#product-list li").hide();
       	$("#filter-options :checkbox:checked").each(function() 
       	{
           $("." + $(this).val()).fadeIn();
		});
       
        if($('#filter-options :checkbox').filter(':checked').length < 1) 
        {
        	$("#product-list li").fadeIn();
        	
        }
        
    });
