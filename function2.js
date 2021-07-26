
function checkAll(All) {
	var recs = document.querySelectorAll('input[type="checkbox"]');

	for (var i = 1; i < recs.length	; i++) {
		if (recs[i] != All) {
			recs[i].checked = All.checked;
		}
	}
}