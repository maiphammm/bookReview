
$(document).ready(function() {
    book_list();
    cat_list();
            //recommended_list();
            
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
               $.ajax({url:"action.php", method : "POST", 
                data : {categories:1,cat_id:cid},
                success : function(result1){
                $("#myproducts").html(result1);
        
     }
    })
	})	
	 	
     }
    
    
function add_to_fav_list() {
            // JavaScript code to execute when the button is clicked         
            $("body").on("click",".add-to-fav",function(event){
    	       var pid = $(this).attr('pid');
               $.ajax({
                url:"action.php", 
                method : "POST", 
                data : {addfavbook:1,fav_book_id:pid}, 
                success : function(result1){
            }
            })
	       })	 
}
    


    

    
    
}); 



/*
$("body").on("click",".add_book",function(event){
    event.preventDefault();
    var bookID = $(this).attr('bid');
    $.ajax({url:"action.php", method : "POST", 
                data : {addbook:1,BookID:bookID},
                success : function(data){alert(data)}}
           )
});
*/

           /* function recommended_list() { 
              $.ajax({
               url : "action.php",
               method : "POST",
               data : {mybooks2:1},
               success : function(result4){
                  $("#mysearch").html(result4);
               }
              })
            }
            */




