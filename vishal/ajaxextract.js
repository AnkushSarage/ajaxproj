
function ajax_search(clicked_id){ 
// get the value of the id and fetching in the variable search_val
  var search_val= clicked_id;
  console.log(search_val);
// passing value of search_val in search_term and searching it in the extract php file to get the values

  $.post("php_files/extract.php", {search_term : search_val}, function(data){
   
     $("#search_results").html(data); 
  }) 
} 