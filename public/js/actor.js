$("#searchform").on("click", ".btnSearch", search);

function search()
{
	var key = $(".search").val();

	console.log(key);
	$.get("/search/" + key, function() {
		$(".wrapper").load("/search/" + key + " #page");
	});
}