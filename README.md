# arkademyb10k3
jawaban soal tes online arkademy batch 10 kloter 3

1. Soal 1

	REST adalah standar arsitektur komunikasi berbasis web yang sering diterapkan dalam pengembangan layanan berbasis web. Biasanya menggunakan protocol HTTP untuk komunikasi data. REST mengembalikan nilai berbentuk JOSN lalu dari sisi klien mengambil nilai JSON tersebut. Jadi fungsi JSON pada REST adalah sebagai format data untuk REST

2. Soal 2

	function untuk validasi username dan email

	* validasi username = kombinasi huruf kecil dan titik, panjang harus tepat 8 karakter
	* validasi email = kombinasi dari huruf kecil, huruf besar, angka, dan titik. Dengan panjang nama akun minimal 4 karakter. Dan diahiri titik dan domain.

	contoh penggunaam

	1. validasi username
		* `is_username_valid("dimasfeb")` return `true` 
		* `is_username_valid("dimas")` return `false`
	2. validasi email
		* `is_email_valid("email@mail.co")` return `true`
		* `is_email_valid("ema@mail.co")` return `false`
