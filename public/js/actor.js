$(document).ready(function(){

	$("#searchform").on("click", ".btnSearch", search);
	$("#content").on("click", ".btnEdit", edit);
	$("#edit").on("click", ".btnCancel", cancel);

	function search()
	{
		var key = $(".search").val();

		$.get("/search/" + key, function() {
			$(".wrapper").load("/search/" + key + " #page");
		});
	}

	function edit()
	{
		var par = $(this).parent().parent();
		var id = par.data('id');

		$.get( "/admin/actors/edit/" + id, function(response){
			$("#edit").append(response);
			$("#editModal").modal('show');
		});
    }

    function cancel() {
    	$('#edit').empty();
    }

});