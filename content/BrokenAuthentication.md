# Broken Authentication

Penyerang memiliki akses ke ratusan atau jutaan nama pengguna yang valid dan kombinasi kata sandi untuk pengisian kredensial, administrasi default, daftar akun, brute-force, dan dictioanry attack. Manajemen sesi serangan harus dipahami, terutama dalam kaitannya dengan token sesi yang belum kedaluwarsa.

Prevalensi broken authentication tersebar luas karena desain dan implementasi sebagian besar dari identitas dan kontrol akses. Pengelolaan sesi adalah landasan otentikasi dan akses kontrol, dan ada di semua aplikasi stateful. 

Penyerang dapat mendeteksi otentikasi yang cacat menggunakan cara manual dan memanfaatkannya dengan menggunakan alat otomatis dengan daftar kata sandi dan serangan dictionary.


## Cara melakukan eksploit Broken Authentication pada sebuah aplikasi dapat digambarkan dari scenario dibawah ini seperti berikut : 
![](https://i.ibb.co/QnYP3C9/broken-auth.png)
1.  **Scenario #1** : 
        Pengisian kredensial, penggunaan daftar kata serangan sandi yang dikenal, adalah serangan yang umum. Jika aplikasi tidak menerapkan ancaman otomatis atau perlindungan isian kredensial, aplikasi dapat digunakan sebagai oracle sandi atau password oracle untuk menentukan apakah kredensial itu valid.
2.  **Scenario #2**: 
        Waktu tunggu sesi aplikasi atau timeout session tidak disetel dengan benar. Seorang pengguna menggunakan komputer publik untuk mengakses aplikasi. Namun pengguna tersebut terlupa untuk melakukan "logout", pengguna hanya menutup tab browser dan pergi. Penyerang menggunakan browser yang sama satu jam kemudian, dan pengguna masih diautentikasi.
    

## Mitigasi yang dapat dilakukan untuk menghindari adanya kerentanan Broken Authentication adalah sebagai berikut: 
• Terapkan otentikasi multi-faktor untuk mencegah pengisian otomatis, kredensial, dan pencurian
kredensial menggunakan re-use attack. Multi-faktor Authentication sejauh ini merupakan pertahanan terbaik terhadap sebagian besar serangan yang berkaitan dengan password atau kata sandi termasuk serangan brute-force, dengan analisis yang dilakukan oleh Microsoft menunjukkan bahwa itu akan menghentikan 99,9% penyusupan akun.

• Jangan mengirim atau menyebarkan dengan kredensial default apa pun, khususnya untuk pengguna admin.

• Menerapkan pemeriksaan kata sandi yang lemah, seperti pengujian baru atau mengubah kata sandi terhadap daftar 10.000 teratas kata sandi terburuk.

• Sejajarkan panjang sandi, kompleksitas, dan kebijakan rotasi dengan Pedoman NIST 800-63 B Guidelines di bagian 5.1.1 for memorized secrets or other modern, evidence-based password policies.

• Pastikan pendaftaran, pemulihan kredensial, dan jalur API tersedia dipeerkuat terhadap serangan pencacahan akun dengan menggunakan pesan yang sama untuk semua hasil.

• Membatasi atau menunda upaya login yang gagal. 
Catat semua kegagalan dan beri tahu administrator saat memasukkan kredensial, brute force, atau serangan lain yang terdeteksi.

• Gunakan sisi server, aman, manajer sesi built-in yang
menghasilkan ID sesi acak baru dengan entropi tinggi setelah login. ID sesi tidak boleh ada di URL, disimpan dengan aman dan tidak valid setelah waktu keluar atau logout.
    

## Saran dalam membangun software untuk kasus tersebut:
Berikut contoh kode yang baik, untuk menghindari kerentanan broken authentication : 
``` php
// Generate password hash
var salt = bcrypt.genSaltSync();
var passwordHash = bcrypt.hashSync(password, salt);

// Create user document
var user = {
    userName: userName,
    firstName: firstName,
    lastName: lastName,
    password: passwordHash
};
```


# [Latihan eksploit Web Rentan](https://juice-shop.herokuapp.com/)

## Referensi Kerawanan
##### • OWASP Proactive Controls: Implement Identity and Authentication Controls
##### • OWASP ASVS: V2 Authentication, V3 Session Management 
##### • OWASP Testing Guide: Identity, Authentication 
##### • OWASP Cheat Sheet: Authentication 
##### • OWASP Cheat Sheet: Credential Stuffing 
##### • OWASP Cheat Sheet: Forgot Password 
##### • OWASP Cheat Sheet: Session Management 
##### • OWASP Automated Threats Handbook 
##### • NIST 800-63b: 5.1.1 Memorized Secrets 
##### • CWE-287: Improper Authentication 
##### • CWE-384: Session Fixation 