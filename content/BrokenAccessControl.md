# Broken Access Control
![](https://i.ibb.co/bbnY9zz/Broken-Access-Control.png)
Kontrol akses memberlakukan kebijakan sehingga pengguna tidak dapat bertindak di luar izin yang dimaksudkan. Kegagalan biasanya menyebabkan pengungkapan informasi yang tidak sah, modifikasi atau penghancuran dari semua data, atau menjalankan fungsi bisnis di luar batas pengguna. Kerentanan kontrol akses yang umum meliputi:
1. Melewati pemeriksaan kontrol akses dengan memodifikasi URL, status aplikasi internal, atau halaman HTML, atau cukup menggunakan alat serangan API khusus
2. Mengizinkan kunci utama untuk diubah ke pengguna lain merekam, mengizinkan melihat atau mengedit akun orang lain
3. Peninggian hak istimewa. Bertindak sebagai pengguna tanpa masuk, atau bertindak sebagai admin saat masuk sebagai pengguna
4. Manipulasi metadata, seperti memutar ulang atau merusak sebuah JSON Web Token (JWT) token kontrol akses atau cookie atau bidang tersembunyi dimanipulasi untuk meningkatkan hak istimewa, atau menyalahgunakan JWT penghapusan
5. Kesalahan konfigurasi CORS memungkinkan akses API yang tidak sah.
6. Paksa penjelajahan ke halaman yang diautentikasi sebagai tidak diautentikasi pengguna atau ke halaman istimewa sebagai pengguna standar. Mengakses API dengan kontrol akses yang hilang untuk POST, PUT dan DELETE.

## Kode rentan yang dapat menyebabkan Broken Access Control adalah sebagai berikut : 
Skenario # 1: Aplikasi menggunakan data yang belum diverifikasi dalam panggilan SQL yang mengakses informasi akun:
```
pstmt.setString (1, request.getParameter ("acct"));
Hasil ResultSet = pstmt.executeQuery ();
```
Seorang penyerang cukup mengubah parameter 'acct' di browser menjadi kirim nomor rekening apapun yang mereka inginkan. Jika tidak benar diverifikasi, penyerang dapat mengakses akun pengguna mana pun.
```
http://example.com/app/accountInfo?acct=notmyacct
```
Skenario # 2: Penyerang memaksa penjelajahan ke URL target. Hak admin diperlukan untuk mengakses halaman admin.
```
http://example.com/app/getappInfo
http://example.com/app/admin_getappInfo
```
Jika pengguna yang tidak diautentikasi dapat mengakses salah satu halaman, itu cacat. Jika sebuah
non-admin dapat mengakses halaman admin, ini cacat.

## Bagaimana mitigasi untuk Broken Access Control? 
Kontrol akses hanya efektif jika diterapkan dalam kode sisi server tepercaya atau API tanpa server, di mana penyerang tidak dapat mengubah pemeriksaan kontrol akses atau metadata.

- Melakukan pembagian jenis pengguna.
- Tentukan terlebih dahulu daftar kontrol akses dan hak yang dimilkinya.
- Jangan hanya menyembunyikan fungsi tapi lakukan pengamanan pada fungsi tersebut.

# [Latihan eksploit Web Rentan](https://juice-shop.herokuapp.com/)

## Referensi 
1. OWASP Proactive Controls: Access Controls
2. OWASP Application Security Verification Standard: V4 Access Control
3. OWASP Testing Guide: Authorization Testing
4. OWASP Cheat Sheet: Access Control