*“If you have built castles in the air, your work need not be lost; that is where they should be. Now put the foundations under them.”
― Henry David Thoreau, Walden*

## **Software Development Life Cycle**
### Apa Itu Software Development Life Cycle?
*Software Development Life Cycle* (SDLC) adalah tahapan seorang pengembang perangkat lunak dalam mengembangkan perangkat lunaknya kepada klien dimulai dari perencanaan sampai dengan ke tahap *maintenance*.
### Apa Manfaat Penggunaan Software Development Life Cycle?
SDLC tidak hanya sekedar tahapan yang mengatur pembuatan perangkat lunak tetapi juga memiliki beberapa manfaat dalam pengembangan perangkat lunak, diantaranya:
1. Memperjelas alur, peran setiap orang, dan tujuan dari projek yang sedang dikerjakan
2. Meminimalisir kesalahan dengan adanya tahap pengujian sebelum perangkat lunak digunakan
3. Pengembangan projek dapat terus berlangsung sampai menemukan hasil yang sempurna
4. Dokumentasi projek menjadi jelas sehingga projek perangkat lunak yang sama dapat diulang atau dilanjutkan oleh siapa saja
5. Estimasi waktu dan sumber daya bisa ditentukan sebelum projek dikerjakan

## Secure Software Development Life Cycle
### Apa Itu Secure Software Development Life Cycle
*Secure Software Development Life Cycle* (SSDLC) adalah pengembangan dari SDLC sebelumnya dengan menambahkan kegiatan pengamanan seperti *penetration testing*, reviu kode, dan analisis arsitektur pada tahap pengembangannya, tidak hanya pada tahap pengujiannya saja. 
### Kenapa Ada Secure Software Development Life Cycle?
Tahap pengujian keamanan yang difokuskan pada satu tahap saja, yaitu pengujian, menimbulkan beberapa permasalahan keamanan yang baru ditemukan sangat banyak dan membutuhkan usaha lebih untuk memperbaikinya. Bahkan beberapa celah keamanan tidak terdeteksi sama sekali dan pada akhirnya menimbulkan kerugian besar. Diantara banyak kerawanan yang ada, *Open Web Application Security Project* (OWASP) mempublikasikan 10 kerentanan yang sering muncul pada aplikasi web yaitu OWASP Top 10 yang terdiri dari *Injection, Broken Authentication, Sensitive Data Exposure, XML External Entities (XEE), Broken Access Control, Security Misconfiguration, Cross-Site Scripting (XSS), Insecure Desentralization, Using Components with Known Vulnerabilities, Insufficient Logging & Monitoring*.

## **OWASP Top 10**
### [• A1:2017-Injection](Injection)
Kerentanan *Injection* seperti SQL, NoSQL, OS, dan Injeksi LDAP, terjadi saat **data tidak terpercaya dikirim** kepada interpreter **sebagai** bagian dari **perintah atau query**.
### [• A2:2017-Broken Authentication](BrokenAuthentication)
Sering kali **fungsi** aplikasi berupa **autentikasi dan manajemen session diimplementasikan secara keliru** sehingga mengakibatkan *attacker* dapat membocorkan password, kunci, atau *session token* atau juga untuk melakukan eksploitasi kerawanan lain untuk menentukan akun user baik bersifat sementara atau tetap.
### [• A3:2017-Sensitive Data Exposure](SensitiveDataExposure)
Banyaknya aplikasi web dan API yang **tidak mengamankan data sensitif secara benar mengakibatkan** terjadinya **pencurian atau pengubahan data** oleh *attacker*.
### [• A4:2017-XML External Entities (XXE)](XXE)
Banyaknya **XML prosesor yang belum update atau dikonfigurasi secara asal mengakibatkan** referensi **entitas luar ikut dievaluasi** bersama dokumen XML **yang** dapat **berujung pada bocornya file internal**. 
### [• A5:2017-Broken Access Control](BrokenAccessControl)
**Kesalahan pembatasan hak akses** kepada pengguna terautentikasi **mengakibatkan *attacker* dapat mendapatkan akses** untuk menggunakan **fungsi dan/atau data yang bukan aksesnya**. 

