var counter = 1;
var total = 0;
function addRow() {
	var no = counter + 1;
	var transaksi = document.getElementById('transaksi1').value;
	var harga = document.getElementById('harga1').value;
	var satuan = document.getElementById('satuan1').value;
	var jumlah = document.getElementById('jumlah1').value;
	var subtotal = document.getElementById('subtotal1').value;
	subtotal = subtotal || 0;
	total = total + subtotal;


	var table = document.getElementById('isi');

	var template = '<tr><td>'+no+'</td><td><input class="transaksi" value="'+transaksi+'" type="input" id="transaksi'+no+'" name="transaksi[]"></td><td><input class="jumlah" value="'+jumlah+'" type="number" id="jumlah'+no+'" value="0" name="jumlah[]"></td><td><input class="satuan" id="satuan'+no+'" name="satuan[]" value="'+satuan+'"></td><td>Rp<input class="harga" type="number" id="harga'+no+'" value="'+harga+'" name="harga[]"></td><td>Rp<input class="subtotal" type="text" id="subtotal'+no+'" name="subtotal[]" value="'+subtotal+'" readonly></td><td><a onclick="delRow()">hapus</a></td></tr>';

	table.innerHTML += template;

	document.getElementById('total').innerHTML = "TOTAL : Rp "+total.toString();

	counter = counter + 1;
}

function calculate() {
	var harga = document.getElementById('harga1').value;
	var jumlah = document.getElementById('jumlah1').value;
	var subtotal = parseFloat(harga) * parseFloat(jumlah);
	subtotal = subtotal || 0;

	document.getElementById('subtotal1').value = subtotal.toString();

	
}

function delRow() {
	
}