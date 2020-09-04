# XML External Entities (XXE)
Penyerang dapat melakukan eksploitasi kerawanan kepada pemrosesan XML jika mereka dapat mengunggah XML atau memasukkan kode-kode jahat pada dokumen XML untuk mengeksploitasi kode yang memiliki kerawanan.

XXE dapat terjadi biasanya karena banyak XML lama yang mengizinkan spesifikasi yang berasal dari entitas eksternal, yaitu URL yang sedang ditangguhkan dan dievaluasi selama pemrosesan XML. SAST (Source Code Analysis Tools) dapat menemukan masalah ini dengan memeriksa konfigurasinya. tester manual perlu mengetahui cara menguji kerawanan XXE, karena pada tahun 2017 masih belum umum untuk diuji.

Dampak dari kerawanan ini adalah dapat digunakan untuk mengekstrak data, menjalankan permintaan untuk dapat mengendalikan server dari jarak jauh, memindai sistem internal, melakukan serangan DOS (denial-of-service), serta serangan lainnya.

## Cara melakukan eksploit XML External Entities dapat digambarkan dari scenario dibawah ini seperti berikut :
![](https://i.ibb.co/f4Qdh8F/XXE.png)
--
Scenario #1 : Penyerang mencoba untuk mengekstrak data dari server

    <?xml version="1.0" encoding="ISO-8859-1"?>
        <!DOCTYPE foo[
        <!ELEMENT foo ANY >
        <!ENTITY xxe SYSTEM "file:///etc/passwd">]>
        <foo>&xxe;</foo>
    
Scenario #2 : Penyerang dapat menyelidiki jaringan pribadi server dengan mengubah baris entitas diatas menjadi :

    <!ENTITY xxe SYSTEM "https://192.168.1.1/private">]>

Scenario #3 : Penyerang dapat melakukan serangan DOS dengan menambahkankan file yang berptensi merusak L

    <!ENTITY xxe SYSTEM "file:///dev/random">]>
    
## Mitigasi yang dapat dilakukan untuk menghindari serangan ini adalah :
- Jika memungkinkan, gunakan format data yang tidak terlalu kompleks seperti JSON, dan hindari melakukan serialisasi pada data sensitif
- lakukan peningkatan pada semua prosesor dan pustaka XML yang digunakan oleh aplikasi atau pada sistem operasi yang digunakan. 
- nonaktifkan entitas external XML dan pemrosesan DTD di semua aplikasi yang menggunakan XML.
- implementasikan "whitelisting" pada validasi input pada sisi server, atau lakukan sanitasi untuk mencegah adanya data perusak yang masuk pada dokumen XML.
- SAST dapat membantu mendeteksi XXE pada kode sumber, walaupun begitu peninjauan secara manual adalah alternatif terbaik pada aplikasi yang besar dan kompleks

## Saran Pembangunan Software
Berikut beberapa contoh penulisan kode sumber yang baik untuk menghindari kerawanan XXE.

- Secara umum
  
  selalu menonaktifkan DTDs (Entitas Eksternal)

  ```
    factory.setFeature("http://apache.org/xml/features/disallow-doctype-decl", true);
  ```

- C/C++
  
  Menggunakan SAXParses :

  ```c
    XercesDOMParser *parser = new XercesDOMParser;
    parser->setCreateEntityReferenceNodes(true);
    parser->setDisableDefaultEntityResolution(true);
  ```
# [Latihan eksploit Web Rentan](https://juice-shop.herokuapp.com/)

## Refrensi Kerawanan
- CWE-611 : Improper Restriction of XXE