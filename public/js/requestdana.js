let table = document.querySelector('#isi');
let addRow = document.querySelector('#tambah');

let noInput = 0;
let uraianInput = document.querySelector('#transaksi');
let hargaInput = document.querySelector('#harga');
let satuanInput = document.querySelector('#satuan');
let jumlahInput = document.querySelector('#jumlah');
let subtotalInput = parseDouble(harga)*parseInt(jumlah);

addRow.addEventListener('click', () => {
	let no = noInput.value;
	let uraian =  uraianInput.value;
	let harga =  hargaInput.value;
	let satuan =  satuanInput.value;
	let jumlah =  jumlahInput.value;
	let subtotal =  subtotalInput.value;

	let template = '<tr><td>${no}</td><td>${uraian}</td><td>${jumlah}</td><td>${satuan}</td><td>${harga}</td><td>${subtotal}</td></tr>';

	table.innerHTML += template;
});
