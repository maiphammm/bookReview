              
        $(document).ready(function() {
            book_list();
            cat_list();
            
            function book_list() { 
              $.ajax({
               url : "action.php",
               method : "POST",
               data : {mybooks:1},
               success : function(result){
                  $("#myproducts").html(result);
               }
              })
            }
            
            function cat_list() { 
                $("body").on("click",".category",function(event){
    	       var cid = $(this).attr('cid');
               $.ajax({url:"action.php", method : "POST", data : {categories:1,cat_id:cid}, success : function(result1){
                $("#myproducts").html(result1);
        
     }
    })
	})	
	 	
     }
            
        });           