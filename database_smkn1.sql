-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 11:15 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_smkn1`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `agenda_deskripsi` text,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(6, 'Sosialisasi Ekstrakurikuler', '2020-07-18 07:34:09', 'Assalamualaikum \r\nKpd. Yth. Bapak/Ibu Pembina dan Pelatih Ekskul dalam rangka sosialisasi Ekstrakurikuler pada kegiatan MPLS, diharap membuat Video promosi dgn durasi maksimal 5 menit. Dan diharapkan pula membuat akun/group Media Sosial resmi masing2 Ekskul dengan menggunakan Whatsapp dan IG, terutama dipersilahkan utk memanfaatkan IG dalam rangka mengenalkan Ekstrakurikuler nya secara lebih mendalam dan optimal.\r\nDemikian kami sampaikan dan terima kasih.\r\nWassalamualaikum Wr. Wb.', '2020-07-07', '2020-07-07', 'SMKN 1 Garut', '07.30 - 12.00 WIB', 'MPLS 2020', 'Andriansyah Maulana'),
(7, 'Undangan Silaturahmi', '2020-07-18 07:46:17', 'Assalamualaikum Wr.Wb.\r\nSelamat malam bapa dan ibu, semoga limpahan rahmat hidayah dan keberkahan senantiasa menyertai kita semua, aamiin...\r\nKami mengundang bapa/ibu/saudara guru, staf TU serta seluruh karyawan SMKN1 untuk hadir pada :\r\nHari, tanggal : kamis, 16 Juli 2020\r\nJam.              : 13.00 s.d. selesai\r\nTempat.        : Gor Motekar \r\nDemikian undangan ini kami sampaikan, atas kehadiran bapak/ibu/saudara tepat pada waktunya kami mengahaturkan terimakasih.\r\nWassalamualaikum Wr.Wb.', '2020-07-16', '2020-07-16', 'SMKN 1 Garut', '13.00 - Selesai', 'Undangan Silaturahmi', 'Admin SMKN  Garut');

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE `ekskul` (
  `ekskul_id` int(11) NOT NULL,
  `ekskul_judul` varchar(255) NOT NULL,
  `ekskul_deskripsi` varchar(255) NOT NULL,
  `ekskul_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekskul`
--

INSERT INTO `ekskul` (`ekskul_id`, `ekskul_judul`, `ekskul_deskripsi`, `ekskul_photo`) VALUES
(2, 'OSIS SMKN 1 Garut', 'OSIS Merupakan Organisasi Intrasekolah yang memiliki kepengurusan yang diisi oleh siswa dan siswi dan pembimbing OSIS ', '37cdfd72deafc1386e4054099b5b1123.jpg'),
(4, 'ROHIS SMKN 1 GARUT', 'ROHIS SMKN 1 GARUT adalah suatu organisasi yang bergerak dalam bidang keagamaan di bawah naungan OSIS .', '9907cdf5748d3931aacb820cc722bc99.png'),
(5, 'Pramuka SMKN 1 Garut', 'Pramuka SMKN 1 GARUT adalah suatu organisasi yang dapat diikuti oleh siswa dan siswi  untuk ikut melaksanakan kegiatan pramuka.', 'ecf40cd243c38e6b6ff7edc09e60fa83.jpg'),
(6, 'Patroli Keamanan Sekolah (PKS)', 'Patroli Keamanan Sekolah (PKS) adalah suatu wadah partisipasi siswa yang bergerak dibidang lantas khususnya penyebrangan umumnya di sekolah masing-masing.\r\n\r\n', '97ae47749b33f2abfa6e4e65e93b289a.JPG'),
(7, 'Palang Merah Remaja Indonesia (PMR)', 'PMR adalah suatu Organisasi Remaja yang berada dibawah naungan PMI yang bertugas menolong sesama manusia dan dipersiapkan untuk menjadi kader PMI dalam melaksanakan tugas dan mencapai tujuannya. ', '1801a71e75332d9c00f0596751d04ece.jpg'),
(8, 'Paskriba SMKN 1 Garut', 'Paskibra adalah kependekan dari Pasukan Pengibar Pendera. Paskibra umumnya selalu ada saat kegiatan Upacara. Paskibra awalnya dibentuk pada tahun 1946 atas perintah Presiden Soekarno kepada Mayor (Laut) M. Husein Mutahar untuk membuat upacara detik-detik ', '2238b69a9ca616bc4fe3e915ad88b9c8.JPG'),
(9, 'Majelis Perwakilan Kelas (MPK)', 'MPK adalah suatu organisasi di sekolah yang bertugas mengawasi kinerja OSIS dalam menjalankan tugas-tugasnya selama masa jabatannya berlangsung. Jabatan MPK lebih tinggi daripada OSIS karena MPK-lah satu-satunya organisasi di sekolah yang dapat memantau, ', 'f61c458acb5bc1a48f35dc85053ceb77.png'),
(10, 'Seni Teater Munggaran', 'Teater Munggaran didirikan pada tahun 2004, teater munggaran adalah salah satu organisasi di SMKN 1 Garut.', '9325def62e409364fffb79f8025c355f.png'),
(11, 'Olahraga SMKN 1 Garut', 'Ekskul yang ada di SMKN 1 Garut dibagi menjadi 2 kategori, yaitu ekskul wajib dan ekskul pilihan. Bagi siswa kelas X mereka wajib mengikuti salah satu dari ekskul wajib yaitu DKM, Pramuka, PMR, Paskibra, PKS, dan Seni Teater. Di bawah bimbingan guru olah ', '433f607a106c6fb32cef5acc5fc265ed.png');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `guru_id` int(11) NOT NULL,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` date DEFAULT NULL,
  `pendidikan_guru` varchar(80) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`guru_id`, `guru_nip`, `guru_nama`, `guru_jenkel`, `guru_tmp_lahir`, `guru_tgl_lahir`, `pendidikan_guru`, `guru_mapel`, `guru_photo`, `guru_tgl_input`) VALUES
(1, '1111', 'Andriansyah Maulana, S.Kom.', 'L', 'Tangerang', '1995-08-03', 'S1 Informatika Universitas Widyatama', 'Guru Sistem Informatika Jaringan Dan Aplikasi', '7f235d8c69c6eeef502b6d5c41b17dfc.JPG', '2017-01-26 00:49:43'),
(12, '1112', 'Asep Ulumudin, S. Kom.', 'L', 'Garut', '2018-11-03', 'S1 Informatika', 'Kepala Jurusan Sistem Informatika Jaringan Dan Aplikasi', NULL, '2018-11-12 00:30:52'),
(13, '1113', 'Revy Cahya Alamsyah, S.Kom.', 'P', 'Garut', '2018-11-03', 'S1 Informatika Universitas Widyatama', 'Guru Sistem Informatika Jaringan Dan Aplikasi', NULL, '2018-11-12 00:37:07'),
(14, '1114', 'Rahmi, S.PD', 'P', 'Garut', '2018-11-16', 'S1 Pendidikan Ilmu Komputer IPI', 'Guru Sistem Informatika Jaringan Dan Aplikasi', NULL, '2018-11-12 00:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `jurusan_id` int(11) NOT NULL,
  `jurusan_judul` varchar(150) DEFAULT NULL,
  `jurusan_deskripsi` text,
  `jurusan_author` varchar(255) DEFAULT NULL,
  `jurusan_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`jurusan_id`, `jurusan_judul`, `jurusan_deskripsi`, `jurusan_author`, `jurusan_photo`) VALUES
(2, 'Bisnis  Daring Dan Pemasaran', 'Menyiapkan tenaga pelaksana yang profesional dalam bidang bisnis (dunia usaha) serta mengembangkan sikap kewirausahaan. \r\n', 'Andriansyah Maulana', '58a12ee43d3dfa2079637c5f8febdf02.jpg'),
(3, 'Sistem Informatika Jaringan Dan Aplikasi', 'Menyiapkan Tenaga Profesional di bidang jaringan, aplikasi berbasis web , Internet Of Things(IoT). pembelajaran di SMK selama 4 tahun yaitu 3 tahun di sekolah dan 1 tahun di industri. ', 'Andriansyah Maulana', '68100e711a39b692060f0b5982a09e54.JPG'),
(4, 'Akuntansi Dan Keuangan Lembaga', 'Menghasilkan tamatan yang memiliki pengetahuan keterampilan dan nilai serta sikap yang terintegrasi dan kecakapan kerja dalam bidang akuntansi dengan menerapkan kewirausahaan .', 'Andriansyah Maulana', '61cc7b3ad983b8858b0bb53f6199092c.JPG'),
(5, 'Administrasi Perkantoran', 'Menyiapkan tenaga pelaksana di bidang sekretaris yang memiliki pengetahuan, keterampilan nilai dan sikap sebagai manusia yang bertanggung jawab dan mencintai pekerjaan. Bidang Pekerjaan Lulusan  yaitu Juru tata Usaha Kantor, Sekretaris Muda,\r\nJuru Tik, Resepsionis dan Juru Steno\r\n', 'Andriansyah Maulana', 'a920ef76fae12ce975814ea5e97f2fbb.JPG'),
(6, 'Teknik Komputer Dan Jaringan', 'Pesatnya perkembangan teknologi dan informasi (TIK) serta  perkembangan infrastruktur informasi global telah mengubah pola dan cara kegiatan pendidikan, bisnis, industri, perdagangan, maupun pemerintahan.  Lulusan mempunyai kompetensi dalam bidang  menginstalasi dan perbaikan PC, menginstalasi dan perbaikan jaringan Local (LAN), serta jaringan berbasis luas (WAN).', 'Andriansyah Maulana', '1cd76950ca4853c724715b738a19e4b8.jpg'),
(7, 'Multimedia', 'Menghasilkan tenaga pelaksana di bidang tekhnisi periferal grafis yang memiliki keterampilan, pengetahuan, dan sikap sebagai tenaga pelaksana yang bertanggung jawab terhadap pekerjaan dan mampu menghadapi kemajuan tekhnologi. Bidang Pekerjaan Lulusan yaitu Desainer Web, Desainer Grafis/ Image, Editor Video/Film, Animation Maker', 'Andriansyah Maulana', 'f04f0cb8bb124c37374070df9408feea.jpg'),
(8, 'Farmasi Klinis Dan Komunitas', 'Menghasilkan tamatan yang memiliki pengetahuan dan nilai serta sikap yang terintegrasi positif dan kecakapan kerja dalam bidang kefarmasian sehingga terserap di dunia ussaha dan industri baik di masa sekarang dan masa yang akan datang.', 'Andriansyah Maulana', '535a500767ed2a0596554c1aba906c22.jpg'),
(9, 'Teknologi Laboratorium Medik', 'Mempelajari tentang bagaimana cara menjadi seorang tenaga kesehatan dan ilmuwan berketerampilan tinggi yang akan berkecimpung di sarana kesehatan yang melaksanakan pelayanan pemeriksaan, pengukuran, penetapan, dan pengujian terhadap bahan yang berasal dari manusia atau bahan bukan berasal dari manusia untuk penentuan jenis penyakit, penyebab penyakit, kondisi kesehatan atau faktor-faktor yang dapat berpengaruh pada kesehatan perorangan dan masyarakat', 'Andriansyah Maulana', '3584de0c69abf545ffa6e66d949f6b81.png'),
(10, 'Manajemen Logistik', 'Manajemen Logistik merupakan salah satu Kompetensi Keahlian dari Program Keahlian: Logistik, dan Bidang Keahlian: Bisnis dan Manajemen. Manajemen Logistik mempelajari tentang bagaimana melakukan perencanaan, pengelolaan, pengendalian, dan pengawasan terhadap aliran uang, barang, energi, dan informasi, dan sumberdaya lainnya agar berjalan efisien dari asal hingga ke tujuan, mulai dari kegiatan pengadaan, penyimpanan, penyediaan, pengangkutan, hingga pengemasan barang-barang atau bahan baku tersebut.', 'Andriansyah Maulana', '0fbb476680a386ae461e280f9df55de1.JPG'),
(11, 'Teknik Energi Terbarukan', 'Teknik Energi Terbarukan hadir atas kebutuhan akan energi dari sumber daya alam yang bisa diperbaharui. Energi terbarukan yang berasal dari matahari, angin, biomassa, air, dan panas bumi akan menjadi andalan bagi manusia di masa depan. Pemanfaatannya akan mengurangi penggunaan bahan bakar fosil serta memperkecil dampak negatifnya terhadap perubahan iklim.', 'Andriansyah Maulana', 'bc898bc07aeeb699cc88918f372ed37d.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Pendidikan', '2016-09-05 22:49:04'),
(3, 'Sosial', '2016-09-05 22:59:39'),
(5, 'Penelitian', '2016-09-05 23:19:26'),
(6, 'Prestasi', '2016-09-06 19:51:09'),
(13, 'Olah Raga', '2017-01-13 06:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_parent`) VALUES
(2, 'a', 'andrimaulana105@gmail.com', 'aaaaaaaaaaaaaa', '2018-10-08 01:12:51', '1', 22, 0),
(3, 'siswa', 'siswa@gmail.com', 'halo bagus tulisannya', '2018-10-08 01:14:00', '1', 22, 0),
(4, 's', 'udindadang95@gmail.com', 'sssssss', '2018-10-08 01:14:46', '1', 24, 0),
(5, 'sss', 'meis@gmail.com', 'aaaaa', '2018-10-08 01:15:50', '1', 22, 0),
(6, 'Andriansyah Maulana', '', 'terima kasih', '2018-10-08 01:16:17', '1', 22, 5),
(8, 'a', 'andrimaulana105@gmail.com', 'aaaaaaaaaaaaa', '2018-11-02 13:23:51', '0', 22, 0),
(9, 'Budi', 'budi@gmail.com', 'halo budi', '2018-11-02 13:24:23', '1', 22, 0),
(10, 'Andriansyah Maulana', '', 'ok mantap', '2018-11-02 13:25:06', '1', 22, 9),
(11, 'Andriansyah Maulana', 'andrimaulana105@gmail.com', 'Mantaps', '2020-07-16 02:30:08', '1', 23, 0),
(12, 'Andriansyah Maulana', '', 'Terima Kasih', '2020-07-16 02:32:01', '1', 23, 11),
(13, 'Siswa', 'siswa@siswa.com', 'Maju Terus', '2020-07-16 02:32:45', '0', 23, 0),
(14, 'Siswa', 'siswa@siswa.com', 'ssss', '2020-07-16 02:35:50', '0', 23, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `pegawai_nip` varchar(20) DEFAULT NULL,
  `pegawai_nama` varchar(70) DEFAULT NULL,
  `pegawai_jenkel` varchar(2) DEFAULT NULL,
  `pegawai_jabatan` varchar(40) DEFAULT NULL,
  `pegawai_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `pegawai_nip`, `pegawai_nama`, `pegawai_jenkel`, `pegawai_jabatan`, `pegawai_photo`) VALUES
(24, '1112', 'Drs. Tisna Sutisna', 'L', 'Ketua Komite Sekolah', NULL),
(25, '1113', 'Mardiansyah, M.Ag.', 'L', 'Sekretaris Komite Sekolah', NULL),
(26, '1114', 'Drs. Ahmad Syamsudin', 'L', 'Bendahara Komite Sekolah', NULL),
(27, '1115', 'Drs. U. Saepudin', 'L', 'Seksi Pengendalian Sumber Daya Sekolah', NULL),
(28, '1116', 'Mumu Munawar', 'L', 'Seksi Pengelolaan Dana Sekolah   ', NULL),
(29, '1117', 'Sinta Horiyah, A.Md.', 'P', 'Anggota Seksi Pengelolaan Dana Sekolah', NULL),
(30, '195710161979012000', 'Yayan Sopian, S.Pd.I', 'L', 'Kepala Sub Bag. Tata Usaha', NULL),
(31, '196309141991032005', 'Hj. Teni Nuryani, S.IP.', 'P', 'Bagian/Urusan Perpustakaan', NULL),
(32, '196407111993032005', 'Nani Daniarsih', 'P', 'Bagian/Urusan Umum ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_email`, `pengguna_nohp`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Admin SMKN  Garut', 'L', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@smkn1garut.sch.id', '085318298489', 1, '1', '2016-09-02 23:07:55', '99ac6fe31346ed8e9228278f2b76c56b.png'),
(2, 'Bapak Bejo Siswoyo S.TP., M.PD', 'L', 'kepalasekolah', '55b5fe3fb7368486c96f70d79e4e51a4', 'smkn1garut@gmail.com', '(0262) 233316', 1, '2', '2018-10-04 09:14:32', 'b6e543f5160b61ea5a6217ffb5f0f5c8.jpg'),
(3, 'Andriansyah Maulana S.Kom', 'L', 'andri', '827ccb0eea8a706c4c34a16891f84e7b', 'andrimaulana105@gmail.com', '085318298489', 1, '1', '2020-07-18 07:26:07', 'b33ed68ba03b8c9c6bee449e486d5fdf.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE `sambutan` (
  `sambutan_id` int(11) NOT NULL,
  `sambutan_isi` varchar(40) DEFAULT NULL,
  `sambutan_photo` varchar(40) DEFAULT NULL,
  `nama_kepala_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sambutan`
--

INSERT INTO `sambutan` (`sambutan_id`, `sambutan_isi`, `sambutan_photo`, `nama_kepala_sekolah`) VALUES
(1, 'Isi Sambutan', '56e73774c59e549da710d41e94104063.jpg', 'Bapak Bejo Siswoyo, S.TP., M.PD');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_nama` varchar(30) DEFAULT NULL,
  `slider_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_nama`, `slider_photo`) VALUES
(19, 'Selamat Datang Di SMKN 1 Garut', '81fc08015aa050b8b7263241407bbc8a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text,
  `file_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT '0',
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`) VALUES
(13, 'PHP Heroes', 'E BOOK Modul Pemrograman PHP ', '2020-07-18 05:41:04', 'Andriansyah Maulana', 0, '033fd01c71156373ea49ec68dccc8db5.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tulisan`
--

CREATE TABLE `tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tulisan`
--

INSERT INTO `tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(25, 'Siswa SMK Negeri 1 Garut 100 Persen Lulus', '<p>Sebanyak 827 siswa kelas Xll SMK negeri 1 Garut 100 persen lulus, pengumuman kelulusan ini bertepatan dengan Hari Pendidikan Nasional 2 Mei 2020 dan secara serentak diumumkan melalui online.</p>\r\n\r\n<p>Untuk mengantisipasi konvoi pada saat pengumuman kelulusan, Kepala SMK Negeri 1 Garut, Drs. H. Dadang Johar Arifin, M.M telah memberikan edaran berupa imbauan kepada siswa untuk tidak berkeruman maupun konvoi.</p>\r\n\r\n<p>Selain itu sekolah menginstruksikan kepada seluruh wali kelas XII untuk meminta kepada seluruh orangtua siswa supaya mereka memantau putra putrinya untuk tetap&nbsp;stay at home, mematuhi protokol pencegahan COVID -19, untuk tetap di rumah dan menahan diri untuk tidak konvoi.</p>\r\n\r\n<p>Pemerintah juga diketahui telah meniadakan pelaksanaan Ujian Nasional (UN) 2020 menyusul adanya pandemi covid-19. Peniadaan UN ini dinilai sebagai bentuk penerapan physical distancing untuk menekan laju penyebaran virus tersebut.</p>\r\n\r\n<p>Sebagai gantinya, kelulusan siswa didasarkan pada nilai rapor, nilai Ujian Sekolah (US) yang dilakukan secara online dan hasil tugas selama menjalani pembelajaran jarak jauh di tengah pandemi covid-19.</p>\r\n', '2020-07-18 07:50:26', 1, 'Pendidikan', 0, '0ff352fdcb47a536082f30eb3e0a2d91.jpg', 1, 'Admin SMKN  Garut', 0, 'siswa-smk-negeri-1-garut-100-persen-lulus'),
(26, 'SMK Negeri 1 Garut Bagikan Sembako untuk Warga Terdampak COVID-19', '<p>SMK Negeri 1 Garut peduli terhadap dampak wabah Covid-19 dengan melakukan Bakti Sosial (Baksos) dengan membagikan sembako kepada masyarakat yang membutuhkan bantuan di sekitar sekolah, Kecamatan Tarogong Kidul, Kabupaten Garut, Senin (27/04/2020).</p>\r\n\r\n<p>Kepala SMK Negeri 1 Garut, Drs. H. Dadang Johar Arifin, M.M mengatakan, kegiatan Baksos SMKN 1 Garut merupakan inisitaif sekolah yang anggarannya murni donasi dari seluruh guru dan karyawan SMK 1 Garut, dalam bentuk kepedulian terhadap masyarakat yang membutuhkan di tengah pandemi wabah covid-19.</p>\r\n\r\n<p>&quot;Donasi ini murni anggaranya dari seluruh guru dan karyawan sekolah, ini merupakan sesi ketiga, sebelumnya pada sesi 1 dan 2 kami membagikan masker dan handsanitizer, sekarang sembako, dan mudah-mudahan bisa berlanjut di sesi berikutnya,&quot; katanya.</p>\r\n\r\n<p>Sembako ini dibagikan sebanyak 500 paket berisikan beras, mi instan, minyak goreng, sardines, dan minuman sirup yang disalurkan langsung kepada masyarakat sekitar sekolah dan petugas kebersihan di jalanan.</p>\r\n\r\n<p>&quot;Kami menyediakan 500 bungkus sembako, di antaranya 1 ton beras, mi instan, masing-masing 1 liter minyak, sarden dan minuman sirup, yang disalurkan langsung kepada masyarakat sekitar sekolah dan petugas kebersihan yang ada di jalan,&quot; ucapnya.</p>\r\n\r\n<p>Ia menambahkan, pembagian sembako ini diatur setertib mungkin dengan memberikan penjelasan kepada masyarakat memberikan kartu sembako, dan antre dengan jarak 2 meter tanpa bersentuhan fisik.</p>\r\n\r\n<p>&quot;Kami dengan panitia sebelumnya memberikan penjelasan kepada masyarakat yang menerima baksos supaya tertib, pengambilan dilakukan dengan jarak 2 meter tanpa bersentuhan fisik, diberi makser bagi warga yang tidak memakai masker dan hand sanitizer,&quot; tambahnya.</p>\r\n\r\n<p>Semoga dengan adanya kepedulian seperti ini diharapkan bantuan sembako tersebut bisa bermanfaat dan meringankan beban hidup masyarakat yang terdampak Covid-19.</p>\r\n\r\n<p>&quot;Semoga baksos sembako ini bermanfaat bagi masyarakat, dan sedikitnya bisa meringankan yang terdampak Covid-19,&quot; kata orang nomor 1 di SMKN 1 Garut.</p>\r\n', '2020-07-18 08:01:54', 3, 'Sosial', 0, 'b4995fedffca7012f313f6aad64f0c76.jpg', 1, 'Admin SMKN  Garut', 0, 'smk-negeri-1-garut-bagikan-sembako-untuk-warga-terdampak-covid-19'),
(29, 'Pelantikan dan Serah Terima Jabatan Kepala SMK Negeri 1 Garut', '<p>Melalui video conference (Vicon), sebanyak 39 Kepala Sekolah SMA dan SMK di Kabupaten Garut dilantik secara bersamaan oleh Gubernur Jawa Barat Ridwan Kamil di Sasana Wibawa Mukti SMK Negeri 1 Garut, Jumat.</p>\r\n\r\n<p>Para Kepsek yang dilantik dilakukan secara terpisah di tiga tempat sekolah, salah satunya di SMK Negeri 1 Garut, upacara pengambilan sumpah janji jabatan dan pelantikan dilakukan secara vicon untuk mencegah penyebaran Covid-19.</p>\r\n\r\n<p>Gubernur Jawa Barat dalam arahannya meminta agar para Kepsek bisa menjadi agen perubahan dan mengajak agar kepala sekolah yang baru dilantik untuk segera melaksanakan tugas dan kewajibannya di lingkungan kerja barunya.</p>\r\n\r\n<p>Dari 13 Kepala Sekolah yang dilantik yakni, Drs. H. Dadang Johar Arifin, M.M Kepala Sekolah lama di &nbsp;SMK Negeri 1 Garut kini bertugas menjadi Kepala SMK Negeri 2 Garut dan serah terima jabatan kepada Bejo Siswoyo, S.TP, M.Pd, Kepala Sekolah yang baru yang sebelumnya sebagai Kepsek SMKN 2 Garut.</p>\r\n\r\n<p>Pelantikan dan Serah Terima jabatan tersebut dilasanakan di Sasana Wibawa Mukti SMK Negeri 1 Garut yang berlangsung cukup hikmat, suasana haru dan sedih terasa meyelimuti ruangan tersebut.&nbsp;</p>\r\n\r\n<p>Selamat dan sukses untuk Bapak Drs. H. Dadang Johar Arifin, M.M semoga Allah SWT selalu memberikan petunjuk, kelancaran dan kemudahan dalam mengemban amanah baru, terimakasih yang setinggi-tingginya atas jasa dan pengabdian selama memimpin di SMK Negeri 1 Garut, serta selamat datang Bapak Bejo Siswoyo, S.TP, M.Pd, selaku Kepala Sekolah yang baru.</p>\r\n', '2020-07-18 08:11:27', 1, 'Pendidikan', 0, 'cdd075cecea0f88d6b2baa0e89648f97.JPG', 1, 'Admin SMKN  Garut', 0, 'pelantikan-dan-serah-terima-jabatan-kepala-smk-negeri-1-garut'),
(30, 'SMK Negeri 1 Garut Menggelar MPLS Secara Daring', '<p>Di tengah pandemi Covid-19 yang masih mewabah, penyelenggaraan Masa Pengenalan Lingkungan Sekolah (MPLS) 2020/2021 dilakukan secara daring, Senin (13/06/2020).</p>\r\n\r\n<p>Meski berlangsung secara daring, penyajian profil sekolah diharapkan bisa membantu peserta didik baru untuk mengenal, beradaptasi dan memahami peraturan sekolah.</p>\r\n\r\n<p>Selain itu upacara pembukaan MPLS diikuti oleh perwakilan siswa kelas X yang tentunya dengan menggunakan physical distancing dan protokol kesehatan.</p>\r\n\r\n<p>Kepala SMK Negeri 1 Garut, Drs. H. Dadang Johar Arifin, M.M mengatakan, pelaksanan MPLS ini berbeda dengan tahun sebelumnya karena dilakukan secara daring.</p>\r\n\r\n<p>&quot;Kegiatan MPLS tahun ini akan sangat berbeda, karena dilakukan tanpa tatap muka, seluruh siswa baru menerima, menyimak materi di rumah melalui virtual daring,&quot; katanya</p>\r\n\r\n<p>Ia menambahkan, jadilah generasi yang setia kepada Pancasila, NKRI dan Undang-undang, menjaga martabat, marwah, lingkungan sekolah, dan kredibilitas SMK Negeri 1 Garut.</p>\r\n\r\n<p>&quot;SMK Negeri 1 Garut merupakan salah satu ikon kota Garut, jaga kredibilitas, martabat dan lingkungan sekolah dengan baik, karena mempertahankan sekolah lebih sulit daripada merusaknya,&quot; tambahnya.</p>\r\n\r\n<p>Selain itu, Kepala KCD Wilayah XI Provinsi Jawa Barat, &nbsp;Asep Sudarsono, S.Pd yang pada saat itu membuka pembukaaan MPLS menyampaikan selamat mengikuti MPLS secara daring, ikuti aturan SMK Negeri 1 Garut, karena dengan aturan bisa membuat sekolah ini menjadi besar dan baik.</p>\r\n\r\n<p>&quot;Jaga nama baik SMK Negeri 1 Garut dengan mempertahankan prestasi yang sudah diraih ikuti aturan SMK Negeri 1 Garut, karena dengan aturan bisa membuat sekolah ini menjadi besar dan baik,&quot; ucap Asep</p>\r\n', '2020-07-18 08:14:24', 1, 'Pendidikan', 1, 'cbd3f1c1805da44ad8317e65613e44bf.jpg', 1, 'Admin SMKN  Garut', 0, 'smk-negeri-1-garut-menggelar-mpls-secara-daring');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`ekskul_id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`jurusan_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tulisan`
--
ALTER TABLE `tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `ekskul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `jurusan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tulisan`
--
ALTER TABLE `tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
