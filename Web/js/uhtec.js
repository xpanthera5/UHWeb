function slideContent(parent, child) {
	
	var parent = $("#" + parent),
		child = $("#" + child);
	if (parent[0].classList.contains("ferme")) {
		child.slideDown();
		parent[0].classList.remove("ferme");
		parent[0].getElementsByTagName('span')[0].classList.remove("fa-caret-down");
		parent[0].getElementsByTagName('span')[0].classList.add("fa-caret-up");
	}else{
		child.slideUp();
		parent[0].classList.add("ferme");
		parent[0].getElementsByTagName('span')[0].classList.remove("fa-caret-up");
		parent[0].getElementsByTagName('span')[0].classList.add("fa-caret-down");
	}
}

function toggleRegisterBox(id, id2) {
	
	var tab1 = $("#" + id)[0],
		tab2 = $("#" + id2)[0],
		tab2Class = tab2.classList,
	    tab1Class = tab1.classList;

	tab1Class.remove('active');
	tab1Class.remove('show');
	tab2Class.add('active');
	tab2Class.add('show');
}