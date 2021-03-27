function onClick(e) {
	var element = e.target.querySelector('[contenteditable]'), row;

	element && e.target != document.documentElement && e.target != document.body && element.focus();

	if (e.target.matchesSelector('.add')) {
		document.querySelector('table.inventory tbody').appendChild(generateTableRow());
	}
	else if (e.target.className == 'cut') {
		row = e.target.ancestorQuerySelector('tr');

		row.parentNode.removeChild(row);
	}

	updateInvoice();
}

if (window.addEventListener) {
	document.addEventListener('click', onClick);
}