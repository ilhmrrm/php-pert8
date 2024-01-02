CREATE DATABASE universitas;

USE universitas;

CREATE TABLE mahasiswa_npm (
    id_mahasiswa INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nama VARCHAR(50),
    npm CHAR(8),
    materi_kursus VARCHAR(50)
);
