function search() {
		var query_value = $('input#timkiem').val();
 		$('b#search-string').text(query_value);
		if(query_value !== ''){
			$.ajax({
				type: "POST",
				url: "{!! url('/getListsanpham') !!}"
				data: { query: query_value}, //this can be more complex if needed
				cache: false,
				success: function(data){
					//at each request - every written letter is request, firstly we delete old results, and fetch new ones.
                    $('#results').empty();
                    $.each(data.result, function(index, item) {
                        //now you can access properties using dot notation
                        //  console.log(data.result[index].first_name);
                        // Here I am fetching users names from users table, and echoing ther profile url
                          $('#results').append("<li><a href='" + data.result[index].permalink + "'>" + data.result[index].first_name + "</a></li>");
                    });
				}
			});
		}return false;    
	}
