# Pawfect Match

Pawfect Match adalah platform adopsi hewan peliharaan dan pembelian perlengkapan hewan. Dengan tampilan yang ramah pengguna, kamu bisa menjelajahi berbagai kategori hewan, menyimpan favorit, hingga melakukan adopsi atau pembelian dengan mudah.  

## Cara Menggunakan PawFetch Match

### 1. Homepage
- Saat pertama kali masuk ke website, kamu akan diarahkan ke halaman **Home**.  
- Di bagian atas terdapat *navbar* dengan **logo, tombol Home, dan About**.  
- Klik **Home** untuk kembali ke halaman utama.  
- Klik **About** untuk melihat perkenalan singkat tentang PawFetch Match.  
- Pada halaman Home terdapat ajakan eksplorasi dan tombol **Explore** untuk masuk ke *Main Page*.  

### 2. Main Page
- Terdapat **dua navbar**:  
  - Navbar pertama: ikon paw (*Favorite Pets*), **Sign Up**, dan **Login**.  
  - Navbar kedua: kategori **Dogs & Puppies, Cats & Kittens, Other Pets, Pet Foods, Pet Cages, Pet Toys**.  
- Bagian tengah: gambar utama, *search bar*, serta tombol ikon **Dog, Cat, dan Paw (Other Pets)**.  
- Bagian bawah: tulisan **Available Pets** dengan foto hewan (anjing, kucing, rubah, kelinci) yang dapat ditekan untuk melihat detail.  

### 3. Kategori
- Setiap kategori memiliki **dua navbar** dan menampilkan foto hewan/produk sesuai kategorinya.  
- Pengguna bisa menelusuri daftar hewan atau produk berdasarkan kategori.  

### 4. Favorite Pets
- Tekan ikon paw di navbar pertama untuk menuju halaman **Favorite Pets**.  
- Halaman ini menampilkan hewan/produk yang sudah ditandai sebagai favorit.  

### 5. Adopsi atau Pembelian
- Untuk adopsi/pembelian, tekan tombol **Adopt** atau pilih foto item yang diinginkan.  
- Kamu akan diarahkan ke halaman **Product Info** untuk melihat detail.  
- Jika setuju, tekan **Adopt** lalu lanjut ke halaman **Payment**.  
- Pembayaran tersedia via **QR Code** dan berbagai layanan pembayaran di Indonesia.  

### 6. Open Adoption (Kirim Data)
- Di halaman kategori terdapat tombol **Send Data** untuk membuka adopsi hewan milikmu.  
- Isi formulir data yang tersedia.  
- Lanjutkan ke proses pembayaran **ongkos kirim (ongkir)** jika diperlukan.  
- Setelah pembayaran berhasil, akan muncul **popup konfirmasi** bahwa adopsi/pembelian berhasil.  

### 7. Profil
- Setelah berhasil Login atau Sign Up, tombol **Login** dan **Sign Up** di navbar kanan akan berubah menjadi nama pengguna beserta foto profil.  
- Jika menekan profil tersebut, kamu akan diarahkan ke halaman **Profile Page**.  
- Di halaman ini, kamu bisa:  
  - Mengubah foto profil dengan menekan profile picture.  
  - Mengedit informasi pribadi seperti nama, alamat, dan tanggal lahir.  
- Terdapat satu tombol utama:  
  - **Favorite** → menampilkan kembali daftar hewan atau barang yang telah kamu favoritkan.
 
### Fitur Utama
Pengguna dapat menelusuri hewan peliharaan dari lima kategori utama:
- Anjing
- Kucing
- Kelinci
- Hamster
- Rubah

Setiap hewan menampilkan informasi dasar yang jelas dan mudah dipahami:
- Nama hewan
- Ras
- Usia
- Pemilik (penjual)

Penjual dapat memposting hewan dengan mengisi:
- Nama penjual
- Alamat
- Nomor HP
- Deskripsi hewan
- Foto hewan

Favorit
-Pengguna dapat menyimpan hewan favorit untuk dilihat kembali kapan saja.

### Relasi Antar Tabel
  1. users dan hewan_user
Satu user dapat menggunggah banyak hewaan untuk dijual.
Relasi: one to many

  2. users, favorite, dan hewan
Pengguna dapat memfavoritkan hewan default yang disediakan oleh website.
Relasi: Many-to-Many melalui tabel favorite.

  3. users, favorite, dan hewan_user
Selain hewan default, pengguna juga dapat memfavoritkan hewan yang diunggah oleh penjual di tabel hewan_user.
Relasi: Many-to-Many melalui tabel favorite.

  4. hewan dan hewan_user tidak saling berhubungan langsung
Karena kedua tabel memiliki tujuan dan sumber data yang berbeda:
    - hewan       = daftar hewan default dari sistem/website
    - hewan_user  = daftar hewan yang iunggah oleh penjual
     
## Kontribusi Anggota untuk STS
- Rebeca: Membuat Halaman web bagian Homepage, Favorite, Dogs & puppies, Github
- Lionel: Membuat Halaman web bagian Signup, Login, Cats & Kittens, Other pets
- Deven: Membuat semua Design

## Kontribusi Anggota untuk SAS
- Di lihat dari excel (tambahan: Deven: back-end favorite, rebeca: back-end info produk dan readme, lionel: bantu back-end rebeca)
