// ini jawaban no 1
SELECT * FROM `negara` WHERE Nama_Negara = "USA";

// Ini jawaban no 2
~ membuat tabel produk
CREATE TABLE produk (
    id_produk INT PRIMARY KEY,
    nama_produk VARCHAR(255),
    harga_produk BIGINT,
    kategori_produk VARCHAR(50)
);

~ mengisi tabel produk
INSERT INTO `produk`(`id_produk`, `nama_produk`, `harga_produk`, `kategori_produk`) VALUES ('101','Laptop','7000000','Elektronik'),
('102','Handphone','5500000','Elektronik'),
('103','Televisi','4000000','Elektronik'),
('104','AC','3000000','Elektronik'),
('105','Radio','300000','Elektronik');

// Ini jawaban no 3
~ membuat tabel status
CREATE TABLE status (
    id_produk INT PRIMARY KEY,
    harga_produk BIGINT,
    status_produk VARCHAR(50)
);

~ mengisi tabel status
INSERT INTO `status`(`id_produk`, `harga_produk`, `status_produk`) VALUES 
('101','7000000','Mahal'),
('102','5500000','Mahal'),
('103','4000000','Mahal'),
('104','3000000','Mahal'),
('105','300000','Murah');


// Ini jawaban no 4
DELETE FROM produk
WHERE id_produk IN (SELECT id_produk FROM status WHERE status_produk = 'murah');

// no 5
INSERT INTO `stok`(`id_product`, `quantity`) VALUES ('101','100'), 
('102','50'),
('103','20'),
('104','10'),
('105','30');

// Ini jawaban no 5
SELECT id_produk, jumlah FROM stok WHERE jumlah > 10;
