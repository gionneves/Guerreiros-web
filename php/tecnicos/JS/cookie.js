function createCookie(name, value, days) {
	var expires;
	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + days);
		expires = "; expires=" + date.toGMTString();
	} else {
		expires = "";
	}
	document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
}

$(document).ready(function () {
	$(".editbtn").on("click", function () {
		$("#editmodal").modal("show");

		$tr = $(this).closest("tr");

		var data = $tr
			.children("th")
			.map(function () {
				return $(this).text();
			})
			.get();

		console.log(data);

		$("#os_update_id").val(data[0]);
		$("#os_marca").val(data[1]);
		$("#os_modelo").val(data[2]);
		createCookie("modelo", $("#os_modelo").val(data[2]), "5");
		$("#os_servico").val(data[6]);
		$("#os_estado").val(data[7]);
	});
});
