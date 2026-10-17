CREATE DATABASE IF NOT EXISTS smk;

USE smk;
CREATE TABLE IF NOT EXISTS anggota (id int AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(100),
kelas VARCHAR(20)information_schemainformation_schemasmk
);

INSERT INTO anggota (nama,kelas)VALUES
('andi', 'xi rpl 1'),
('budi', 'xi rpl 1');
SELECT * FROM anggota;
