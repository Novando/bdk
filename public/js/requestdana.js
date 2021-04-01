var counter = 1;
var total = 0;
function addRow() {
	var no = counter;
	var uraian = document.getElementById('transaksi').value;
	var harga = document.getElementById('harga').value;
	var jumlah = document.getElementById('jumlah').value;
	var satuan = document.getElementById('satuan').value;
	var subtotal = parseFloat(harga) * parseFloat(jumlah);
	var total = total + subtotal;

	var table = document.getElementById('isi');

	var template = '<tr><td><input type="text" name="no'+no+'" value="'+no+'" disabled></td><td><input type="text" name="uraian'+no+'" value="'+uraian+'" disabled></td><td><input type="text" name="jumlah'+no+'" value="'+jumlah+'" disabled></td><td><input type="text" name="satuan'+no+'" value="'+satuan+'" disabled></td><td><input type="text" name="harga'+no+'" value="'+harga+'" disabled></td><td><input type="text" name="subtotal'+no+'" value="'+subtotal+'" disabled></td></tr>';
	table.innerHTML += template;
	
	

	counter = counter + 1;
}