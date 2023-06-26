<?php

// // variable (integer)
// $angka = 10;
// var_dump("ini adalah int " . $angka);

// // Variable (string)
// $kata = "Hello World";
// var_dump("Ini adalah variable string " . $kata);

// // Operator 
// // aritmatika
// // + - * / %
// // +
// $x = 10;
// $y = 20;
// $result = $x * $y;
// var_dump($x . " + " . $y . " = " . $result . PHP_EOL);

/**
 * Penggabung string / concatenation / concat
 * .
 * $nama_depan = "Dwi"
 * $nama_belakang = "Riski"
 * echo $nama_depan . " " . $nama_belakang
 */

//  $nama_depan = "Dwi";
//  $nama_belakang = "Riski";
//  var_dump($nama_depan . " " . $nama_belakang);

/**
 * Assignment
 * =, +=, -=, *=, /=, %=, .=
 * $x = 1;
 * $x -= 5;
 * echo $x;
 * 
 * $nama = "Riski";
 * $nama .= " ";
 * $nama .= "Galih";
 * echo $nama;
 */

// $nama = "Azqia";
// $nama .= " ";
// $nama .= "Fikriani";
// var_dump($nama);

/**
 * Perbandingan
 * <, >, <=, >=, ==, !=
 * var_dump(1 == "1")
 */

//  var_dump(1 != "1");

/**
 * Identitas
 * * ===, !==
 */
// var_dump(1 === "1");

/**
 * Logika
 * * &&, ||, !
 */

$x = 40;
var_dump($x < 30 || $x % 2 == 0);