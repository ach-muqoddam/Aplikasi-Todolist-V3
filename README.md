# Aplikasi-Todolist-V3
Project Studi Kasus PHP MySQL: Aplikasi Todolist

## Agenda
- Mengubah Aplikasi TodoList PHP OOP menjadi PHP Database

## Daftar Isi

- [Membuat-Table](#membuat-table)
- [Membuat-Koneksi-Database](#membuat-koneksi-database)
- [Menambah-Todolist](#menambah-todolist)
- [Testing-Menambah-Todolist](#testing-menambah-todolist)
- [Menghapus-Todolist](#menghapus-todolist)
- [Testing-Menghapus-Todolist](testing-menghapus-todolist)
- [Menampilkan-Todolist](#menampilkan-todolist)
- [Testing-Menampilkan-Todolist](#testing-menampilkan-todolist)
- [Testing-Seluruh-Aplikasi](#testing-seluruh-aplikasi)

## Membuat-Table

- Menyiapkan tabel di database menggunakan MySQL

## Membuat-Koneksi-Database

- Membuat koneksi ke database didalam folder Config
- Lalu didalam folder Confif membuat php class menggunakan static method untuk nge-GET koneksinya

## Menambah-Todolist

- Membuat SQL CREATE
- kelebihan menggunakan desain clean-architecture pada Aplikasi-Todolist-V2, disaat ingin implementasi untuk menyimpan data ke dalam database tidak ada perubahan yg signifikan, perubahan hanya fokus di bagian Repository (mengelola data)
- Mengubah implementasi function testAddTodolist()

## Tes-Menambah-Todolist

- Melakukan testing pada Service QUERY SQL CREATE

## Menghapus-Todolist

- Membuat SQL DELETE
- Function remove() menggunakan return value boolean menyebabkan problem, dikarenakan return value harus bernilai TRUE or FALSE
- Dibuatkan pengecekan id ke database ada/tidak

## Tes-Menghapus-Todolist

- Melakukan testing pada Service QUERY SQL DELETE

## Menampilkan-Todolist

- Membuat SQL SHOW
- Membuat objek todolist di return value array (array_of_todolist)
- Mengubah dari awalnya menggunakan number index ke number id (AUTO_INCREMENT) database

## Testing-Menampilkan-Todolist

- Melakukan testing pada Service QUERY SQL SHOW

## Testing-Seluruh-Aplikasi

- Mengetes seluruh aplikasi digunakan apakah masih bermasalah/tidak