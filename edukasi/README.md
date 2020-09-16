# Web Edukasi OWASP Top 10
## 1. Aplikasi 
Aplikasi ini dibuat untuk keperluan edukasi tentang kerawanan pada aplikasi web. Web ini memberikan definisi dan penjelasan terkait kerawanan web yang terdaftar pada OWASP Top 10, ilustrasi serangan berdasarkan kerawanan tersebut, serta teknik pencegahannya. Modul Lab Pembelajaran Kerentanan Aplikasi ditujukan untuk mengedukasi para pelaku usaha agar mengembangkan aplikasi yang aman dari serangan yang ada pada OWASP Top 10 tersebut

Web Edukasi ini, memiliki beberapa menu utama yaitu:
1. Menu Admin
Menu admin merupakan menu yang hanya dapat diakses oleh Admin dimana menu tersebut dapat memanajemen postingan dan komentar yang ada pada web.
2. Home
Menu home merupakan menu yang menampilkan halaman awal web yang berisi penjelasan umum mengenai SDLC, SSDLC dan OWASP Top 10.
3. About
Menu about merupakan menu yang menampilkan halaman yang berisi penjelasan umum mengenai Badan Siber dan Sandi Negara.
4. OWASP Top 10
Menu OWASP Top 10 merupakan menu yang menampilkan halaman yang menjelaskan mengenai 5 kerentanan yang ada pada OWASP Top 10.
5. Contact
Menu contact merupakan menu yang menampilkan halaman yang berisi kontak dari Badan Siber dan Sandi Negara.

## 2. Instalasi
1.  Pertama unduh file aplikasi Web edukasi terlebih dahulu, masukkan kedalam direktori /htdocs. User dapat mengunduhnya pada alamat berikut : https://github.com/kamalfikrikamal/Web-Edukasi-OWASP-Top-10.

2. Setelah mengunduh file aplikasi maka pengguna perlu menambahkan database dan mengimport file *.sql yang ada pada folder file aplikasi yang telah didownload. 
- Buka halaman phpMyAdmin atau http://localhost/phpmyadmin/
- Tambahkan database baru dengan nama “db_newsone”

![1](https://i.ibb.co/SV2V7Qz/1.png)

- Setelah menambahkan database, import file *.sql kedalam database db_newsone.

![2](https://i.ibb.co/jhTMY0V/2.png)

- Buka browser dan jalankan aplikasi

## 3. Dokumentasi Penggunaan 
- Halaman Awal Web Edukasi OWASP Top 10  (Menu Home):

Setelah web edukasi telah berhasil di install dan dijalankan pada perangkat masing-masing user, maka akan muncul halaman awal seperti berikut:
![3](https://i.ibb.co/v3BxQjM/3.png "Halaman Awal")

-	Menu Admin

Menu admin atau halaman admin hanya dapat diakses oleh Admin, dimana untuk mengakses nya admin perlu melakukan autentikasi dengan memasukkan username dan password.

![4](https://i.ibb.co/DthgDLt/4.png)

Adapun username dan password yang digunakan untuk login adalah:
<table>
        <tr>
          <td>Username</td>
          <td>administrator</td>
        </tr>
        <tr>
        <td>Password</td>
        <td>administrator</td>
        </tr>
</table>
Setelah, admin melakukan login akan terdapat halaman sebagai berikut:
      
![5](https://i.ibb.co/bsPfxkV/5.png "Halaman Dashboard Admin")

![6](https://i.ibb.co/yYRbFRh/6.png "Halaman Manajemen Komen Pada Menu Admin")

![7](https://i.ibb.co/99tdk0x/7.png "Halaman About Menu Admin")

-	Menu OWASP Top 10

Merupakan menu yang berisi penjelasan kerentanan pada OWASP Top 10, dimana pada web edukasi ini terdapat 5 pilihan penjelasan mengenai OWASP Top 10. Berikut screenshot dari menu OWASP Top 10 : 

![8](https://i.ibb.co/YcXs324/8.png "Isi Menu OWASP Top 10")
![9](https://i.ibb.co/Rg585PP/9.png "Isi Konten OWASP Top 10")

 
 
Pada setiap postingan, yang ada pada web edukasi terdapat fitur untuk mengomentari postingan tersebut . Berikut bagaimana tampilan kolom komentar tersebut : 

![10](https://i.ibb.co/wBwxscr/10.png "Tombol Latihan Eksploit dan Forum Diskusi")
![11](https://i.ibb.co/MCrk3yZ/11.png "Halaman Forum Diskusi")

-	Menu About 

Menu about merupakan menu yang menampilkan halaman yang berisi penjelasan umum mengenai Badan Siber dan Sandi Negara.
![16](https://i.ibb.co/wKwFj9v/16.png "Menu About")

-	Menu Contact 
![17](https://i.ibb.co/KhG7GG1/17.png "Menu Contact")

