# sacode-phpiii-project06-archy
Project 06 - Mysql Database &amp; PhpMyadmin
### Buat Database
```sql
CREATE DATABASE nama_database;
```

### Hapus Database
```sql
DROP DATABASE sacode;
```
### Hapus Tabel
```sql
DROP TABLE kategori_anggota;
```

### Buat Tabel
```sql
CREATE TABLE kategori_anggota(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
id VARCHAR(50) NOT NULL
)
```

### Tugas
### Tambah Tabel
```sql
INSERT INTO `kategori_anggota`(`id`,`kategori`) VALUES ('','Speaker');
```

### Ubah Data
```sql
UPDATE `kategori_anggota` SET `kategori` = 'Anggota' WHERE `id` = 1;
```

### Hapus Data
```sql
DELETE FROM `kategori_anggota` WHERE `id` = 1;
```