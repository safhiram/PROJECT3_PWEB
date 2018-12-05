# PROJECT3_PWEB

## Bekerja dengan Github

Biar gampang ini caranya.

### Menjalankan Project Phalcon dengan XAMPP Menggunakan Symlink 
 
Dengan menggunakan _symlink_, anda bisa memulai project anda di _direktori lain_(di direktori repositori Github) dan tidak harus di folder _htdocs_ milik XAMPP. Misalkan, project anda berada di `D:\project-saya` dan anda akan membuat _symlink_(folder shortcut baru)-nya dengan folder `C:\xampp\htdocs\my-project` 
 
Maka, masuk ke direktori C:\xampp\htdocs dan jalankan perintah berikut: 
1. Di windows, arahkan cursor di list direktori yang berada diatas. Biasanya berupa `C:\folder\folderA\folderAA`. Lalu ketik cmd dan enter. Di Linux, masuk terminal dan pindah direktori ke `C:\xampp\htdocs`
2. Command `mklink /J “C:\xampp\htdocs\my-project” “D:\project-saya”` 
3. Maka, untuk mengakses **project** anda, cukup menggunakan URL `localhost\my-project `
4. Semua perubahan di direktori `D:\project-saya` akan diupdate selalu ke `C:\xampp\htdocs\my-project` sehingga memungkinkan untuk langsung dilihat di localhost perubahannya

---

## Back-End & Front-End di Phalcon

View yang ada menyesuaikan routing di `nama-project/app/config/routing.php`. Sebagai contoh, letakkan folder project ke `/htdocs/` lalu akses di browser `localhost/"nama-project"/testes`, maka view yang muncul menurut routing adalah di **folder yang bernama sama dengan controller** pada **nama file yang sama dengan action**. Dalam kasus ini, controller yang menangani `IndexController` dengan action `show404Action`. Lebih lengkap view dapat dilihat di `nama-project/app/views` dan berlaku pada yang lainnya juga. Masih dalam pengerjaan ...

---

_To be continued_