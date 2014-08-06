$(document).ready(function(){

	$("#content").on("click", ".btnEdit", edit);
	$("#edit").on("click", ".btnCancel", cancel);
	$("#edit").on("click", ".btnAdd", add);

	function edit()
	{
		var par = $(this).parent().parent();
		var id = par.data('id');

		$.get( "/admin/movies/edit/" + id, function(response){
			$("#edit").append(response);
			$("#editModal").modal('show');
		});
    }

    function cancel() {
    	$('#edit').empty();
    }

    function getRow(actor, character, id)
	{
		var tr = "<tr data-id='" + id + "'>" +
					"<td>" + character + "</td>" +
					"<td>"+ actor +"</td>" +
				"</tr>";
		console.log(id);
		return tr;
	}

	function add()
	{
		var addBtn = $(this);
		var actor = $('#actor').val();
		var character = $('#character').val();

		$('.table tbody:last').append(getRow(actor, character, $('#actor').data('id')));
		$('#actor, #character').val('');
		$('#actor, #character').removeData();
		$('.btnAdd').prop('disabled', true);
	};
});