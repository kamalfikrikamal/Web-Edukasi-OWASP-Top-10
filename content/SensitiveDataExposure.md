# Sensitive Data Exposure


Pada kerawanan ini, penyerang lebih banyak melakukan kegiatan seperti pencurian kunci, menjalankan man-in-the-middle attack, atau mencuri data plain teks yang ditransmisikan dari server, ketika sedang ditransmisikan, atau dari pengguna. Serangan ini menjadi salah satu serangan yang berdampak besar dalam beberapa tahun terakhir. Kesalahan yang umum yang dapat membuka celah untuk serangan ini adalah tidak mengenkripsi data yang bersifat sensitif. Selain itu, menyimpan data penting pada source code untuk kunci_rahasia, token, password, atau salt juga memberi celah pada kerawanan ini. Serangan ini juga dapat terjadi jika menggunakan algoritma yang lemah atau teknik penyimpanan kata sandi yang lemah. Serangan ini membahayakan semua data atau informasi yang seharusnya dilindungi. Informasi tersebut biasanya berupa kata sandi, catatan kesehatan, data pribadi dan sebagainya.

## Kode yang Rentan
Berikut ini adalah contoh kode yang rentan terhadap kerawanan Sensitive Data Exposure:
1.  Penyimpanan data sensitif yaitu kata sandi dalam bentuk clear text. Jika source code ditulis demikian, maka data yang tersimpan pada database akan berbentuk clear text, misalkan untuk nilai password.
```
$username = mysqli_real_escape_string($_POST[$username]);
$password = mysqli_real_escape_string($_POST[$password]);
$sql = "INSERT INTO tbl_login (username, password) VALUES ('$username', '$password')";
```

2. Penggunaan algoritma yang lemah atau tanpa salt.
```
$hash = hash('md5', $password);
```
Penggunaan algoritma yang lemah seperti md5 atau SHA-1 dapat dengan mudah di-crack menggunakan rainbow tables. Fungsi hash yang lemah dapat juga dapat di-crack menggunakan GPU emskipun menggunakan salt. Tidak adanya salt membuat hash lebih mudah di-crack karena salt berfungsi untuk menambah nilai yang unik pada data sehingga akan mempersulit penyerang.

3. Penyimpanan nilai-nilai sensitif pada source code.
```
$salt = "P3nd3k4r54w0"
```


## Cara Penyerang mengeksploit kerawanan ini
![](https://i.ibb.co/M5PGd8W/sensitive.png)
--
Cara penyerang mengeksploit berdasarkan kerawanan ini adalah jika pengembang tidak melindungi data sensitif pada database lalu penyerang berhasil mengakses database misalkan menggunakan SQL injection, maka semua data tersebut berada dalam bahaya. Selain itu, penggunaan algoritma yang lemah dapat memperlebar celah kerawanan untuk penyerang. Penyerang juga dapat melihat celah kerawanan dari penulisan source code oleh pengembang. Ia dapat memanfaatkan nilai-nilai penting yang ditulis oleh pengembang seperti nilai salt yang didefinisikan pada source code sehingga membantu penyerang mencapai tujuannya.


## Mitigasi yang dapat dilakukan untuk menghindari adanya kerentanan Sensitive Data Exposure adalah sebagai berikut:

Mitigasi yang dapat dilakukan untuk mengurangi resiko kerawanan ini adalah sebagai berikut :

1. Klasifikasikan data yang diproses, disimpan atau ditransmisikan oleh aplikasi anda. Identifikasi juga data yang dianggap sensitif.
2. Pastikan semua data yang perlu dilindungi dienkripsi dengan baik.
3. Hindari penggunaan algoritma yang lemah 
4. Simpan Data sensitif menggunakan algoritma hashing yang kuat serta penambahan salt.
5. Hindari penyimpanan nilai nilai yang sensitif pada source code.

Mitigasi yang disebutkan diatas dapat membantu menurunkan resiko kerawanan karena data-data yang bersifat sensitif dilindungi dengan enkripsi sehingga meskipun penyerang memiliki akses ke database namun ia tidak akan mendapatkan informasi yang penting. Pemilihan algoritma untuk melakukan hashing dan/atau salting juga berpengaruh pada kerawanan ini. pemilihan algoritma yang lemah seperti md5 atau SHA-1 tidak disarankan karena algoritma tersebut sudah dapat di-crack dengan mudah. Selain itu, perlu diperhatikan juga penulisan pada source code anda. jangan menyimpan nilai-nilai yang sensitif pada source code se

## Saran Pembangunan Software

Data yang dianggap sensitif harus diklasifikasikan dan dilindungi contohnya data password dengan algoritma yang lebih kuat. Penyimpanan nilai-nilai yang sensitif harus dihindari seperti nilai untuk $salt yang didefinisikan pada source code. Mengingat prinsip Kerckhoffs, hal ini dilakukan agar terhindar dari kemungkinan penyerang memiliki akses ke source code (terutama jika dikembangkan menggunakan free/open source software) sehingga disarankan agar menggunakan salt yang dibangkitkan secara random serta penambahan pepper.

Atau untuk hasil yang lebih optimal dapat menggunakan Bcrypt yang membagkitkan salt secara default tanpa perlu menyimpan nilai salt pada database, karena salt sudah termasuk dalam nilai hash.
```
$hash = password_hash($password, PASSWORD_DEFAULT);
```
# [Latihan eksploit Web Rentan](https://juice-shop.herokuapp.com/)
sumber : 
1. OWASP Top 10 - 2017 : The Ten Most Critical Web Application Security Risks.
2. https://crackstation.net/hashing-security.htm
