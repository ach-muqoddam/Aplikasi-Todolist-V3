<?php 

// membuat php class yg berisi php static method untuk nge-GET koneksi

namespace Config {

    class Database {

        // membuat static function digunakan apabila membutuhkan data koneksi dengan cara GET koneksinya
        // mengembalikan(return) berupa PDO
        static function getConnection(): \PDO {

            // membuat koneksi
            $host = "localhost";
            $port = 3306;
            $database = "belajar_php_database";
            $username = "root";
            $password = "";

            return new \PDO("mysql:host=$host:$port;dbname=$database", $username, $password);

        }

    }
}