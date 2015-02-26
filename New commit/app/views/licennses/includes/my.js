$('package_name').click(function(){
    
         var data = {};
                var url = "prayers/show";
               ajaxHandler(url, data);
               
 });

 function ajaxHandler(url, data) {
  
            $.ajax({
         type: "get",
         url: url,
         
         success: function(data) {
          $('#div').append(data);