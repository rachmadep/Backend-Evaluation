## Migrasi dari Plain PHP ke Framework Symfony

### Hal yang Perlu Dipertimbangkan

Migrasi sistem artinya mengganti sistem lama (legacy system) dengan sistem baru. Hal yang perlu dipertimbangkan dalam melakukan migrasi sistem khususnya pada live production system adalah :


**1. Kebutuhan**
Kebutuhan atau alasan apa yang mengharuskan migrasi sistem. Ya walaupun migrasi dari plain PHP ke framework memang akan meningkatkan scalability sistem dan memiliki struktur yang lebih baik sehingga memudahkan penyeragaman kode antar developer namun apakah benar-benar dibutuhkan. Dari penjabaran kebutuhan ini nantinya juga dapat digunakan sebagai pertimbangan langkah-langkah yang perlu diambil dalam proses migrasi.

**2. Resource atau Sember Saya**
Ketersediaan sumber daya manusia, infrastruktur, teknologi, dan waktu untuk melakukan migrasi sistem perlu dipertimbangkan.

**3. Database**
Data pada database sistem lama harus dapat di import pada database sistem baru.

**4. Integrasi**
Apabila sistem lama memiliki integrasi dengan sistem lain maka sistem baru juga harus dirancang untuk mampu melakukan integrasi dengan sistem lain tersebut.

**5. Proses Migrasi**
Perlu menentukan proses migrasi sistem ini akan dilakukan secara bertahap atau keseluruhan. Bertahap artinya setelah beberapa fitur atau bagian sistem baru selesai, maka bagaian sistem baru ini akan langsung menggantikan bagian sistem lama di production tanpa menunggu keseluruhan sistem baru selesai dikembangkan. Keseluruhan artinya migrasi sistem di production dilakukan setelah keseluruhan sistem baru selesai dikembangkan.

**6. Ketersediaan (Availability)**
Ketersediaan sistem selama proses migrasi perlu diperhatikan. Apabila sistem ini digunakan langsung oleh customer dan memiliki user experience yang berbeda sebaiknya mempertahankan sistem lama tetap online selama beberapa waktu bersama sistem baru. Hal ini untuk mengantisipasi apabila ada customer yang kebingungan dalam mengoperasikan sistem baru dapat menggunakan sistem lama dahulu untuk sementara waktu hingga customer mampu menyesuaikan dengan sistem baru. Selain itu, hal ini juga untuk mengantisipasi apabila masih terdapat bug pada sistem baru.

### Perencanaan Melakukan Migrasi 
Saya belum pernah melakukan migrasi sistem dari plain PHP ke framework terutama framework Symfony. Dalam bayangan saya proses migrasi sistem ini hampir mirip dengan proses pengembangan sistem baru namun sudah memiliki alur proses yang sudah jelas dengan mengikuti software requirement specification dari sistem lama.

Hal pertama yang perlu dilakukan dalam melakukan migrasi sistem ini adalah membuat dokumentasi atau software requirement specification berdasarkan sistem lama. Dokumantasi menyesuaikan dari kebutuhan sistem lama. Pembuatan dokumentasi bisa menggunakan diagram UML (Unified Modeling Language). Dokumentasi ini dapat melingkupi :
- Kebutuhan fungsional atau fitur-fitur yang harus ada pada sistem.
- Skema database melingkupi tabel, atribut dan relasi.
- Daftar endpoint atau route.
- Daftar page atau halaman web jika diperlukan.
- Batasan-batasan sistem.
- Alur proses bisnis dari tiap fitur dan sub-fitur dengan menggunakan diagram UML. Alur proses ini dapat digambarkan melalui use case diagram, activity diagram, business process flow diagram maupun flowchart.

Selanjutnya adalah tahap development sistem baru menggunakan framework Symfony. 
1. Install dan konfigurasi framework Symfony serta package-package yang diperlukan.
2. Membuat file migrasi untuk seluruh tabel pada database.
3. Pengembangan selanjutnya dilakukan per fitur. Fitur dikembangkan sesuai dengan alur bisnis dan requirement sistem lama yang telah didokumentasikan.

Symfony menggunakan konsep MVC (Model View Controller) sehingga struktur folder dan class menjadi lebih rapi. Dalam pengerjaan suatu fitur, yang perlu dilakukan adalah membuat Model dari suatu entitas untuk menentukan relasi dengan entitas lain, menambahkan Route, membuat Controller dan membuat View atau halaman apabila diperlukan. Selain hal tersebut, dalam pengerjaan suatu fitur mungkin juga memerlukan package maupun komponen lain seperti Event, Listener, Service Container, Cache dan lain-lain sesuai kebutuhan dari fitur tersebut. Pada setiap fitur juga perlu dibuatkan Unit Test untuk memastikan dapat berjalan sesuai fungsionalitasnya dan memudahkan ketika melakukan refactor code.

Untuk migrasi sistem di production perlu mempertimbangkan proses migrasi dan ketersediaan sistem seperti yang sudah dijelaskan sebelumnya bergantung pada skenario yang ada.
 