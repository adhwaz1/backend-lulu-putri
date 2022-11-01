-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 07:32 AM
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
(2, 'Peluncuran Website Resmi SMKN 1 Garut', '2017-01-21 23:26:33', 'Peluncuran website resmi  SMKN 1 Garut, sebagai media informasi dan akademik online untuk pelayanan pendidikan yang lebih baik kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat.', '2017-01-04', '2017-01-04', 'SMKN 1 Garut', '07.30 - 12.00 WIB', 'Peluncuran website resmi  SMKN 1 Garut, sebagai media informasi dan akademik online untuk pelayanan pendidikan yang lebih baik kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat.', 'Andriansyah Maulana'),
(3, 'Penerimaan Raport Semester Ganjil Tahun Ajaran 2017-2018', '2017-01-21 23:29:49', 'Berakhirnya semester ganjil tahun pelajaran 2016-2017, ditandai dengan pembagian laporan hasil belajar.', '2017-02-17', '2017-02-17', 'SMK Almadani Garut', '07.30 - 12.00 WIB', 'Untuk kelas XI dan XII, pembagian raport dimulai pukul 07.30 WIB. Sedangkan untuk kelas X pada pukul 09.00 WIB. Raport diambil oleh orang tua/wali murid masing-masing.', 'Andri'),
(4, 'Rapat Sekolah', '2018-11-02 13:56:36', 'Diharapkan Seluruh Guru Untuk Dapat Hadir Pada Saat Rapat', '2018-11-03', '2018-11-07', 'SMKN 1 Garut', '10.30 - 11.30', 'Diharapkan Seluruh Guru Untuk Dapat Hadir Pada Saat Rapat', 'Andriansyah Maulana'),
(5, 'Pelantikan Bapak Kepala Sekolah', '2020-07-17 03:31:57', 'Diharapkan Seluruh Guru Hadir Pada Saat Acara Pelantikan Kepala Sekolah SMKN 1 Garut', '2020-07-08', '2020-07-08', 'SMKN 1 Garut', '12.00 - 13.00', 'Diharapkan Seluruh Guru Hadir Pada Saat Acara Pelantikan Kepala Sekolah SMKN 1 Garut', 'Andriansyah Maulana');

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
(1, '1234567', 'Andriansyah Maulana, S.Kom.', 'L', 'Tangerang', '1995-08-03', 'S1 Informatika Universitas Widyatama', 'Guru Sistem Informatika Jaringan Dan Aplikasi', '7f235d8c69c6eeef502b6d5c41b17dfc.JPG', '2017-01-26 00:49:43'),
(12, '1112', 'Asep Ulumudin, S. Kom.', 'L', 'Garut', '2018-11-03', 'S1 Informatika', 'Kepala Jurusan Sistem Informatika Jaringan Dan Aplikasi', NULL, '2018-11-12 00:30:52'),
(13, '1113', 'Revy Cahya Alamsyah, S.Kom.', 'P', 'Garut', '2018-11-03', 'S1 Informatika Universitas Widyatama', 'Guru Sistem Informatika Jaringan Dan Aplikasi', NULL, '2018-11-12 00:37:07'),
(14, '1114', 'Rahmi, S.PD', 'P', 'Garut', '2018-11-16', 'S1 Pendidikan Ilmu Komputer IPI', 'Guru Sistem Informatika Jaringan Dan Aplikasi', NULL, '2018-11-12 00:39:36'),
(15, '1115', 'Husnalilah, S.Pd', 'L', 'Garut', '2018-11-07', 'S1 Pendidikan', 'Matematika, IPA', NULL, '2018-11-12 00:44:34'),
(16, '1116', 'Yashinta Kusuma Wardhania, SE', 'P', 'Garut', '2018-11-12', 'S1 Ekonomi', 'Mata Pelajaran  Kompetensi Progran Studi Perhotelan', NULL, '2018-11-12 00:46:09'),
(17, '1117', 'Elan, S.Pd', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan Kewarganegaraan', 'PPKN', NULL, '2018-11-12 00:47:09'),
(18, '1118', 'Ainna Julianna S.Pd', 'P', 'Garut', '2018-11-12', 'S1 Pendidikan', 'Bahasa Inggris', NULL, '2018-11-12 00:48:50'),
(19, '1119', 'Dedi , S.Pd', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan Seni', 'Seni Budaya , Bahasa Sunda', NULL, '2018-11-12 00:50:02'),
(20, '1120', 'Nana, S.Pd', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan', 'Bahasa Indonesia', NULL, '2018-11-12 00:51:05'),
(21, '1121', 'Hilman Saefnur Hakim, S.Pd', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan', 'Pendidikan Jasmani dan Kesehatan', NULL, '2018-11-12 00:52:08'),
(22, '1122', 'Soni Muhammad Sidik, Spd.', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan Komputer', 'Mata Pelajaran  Kompetensi Progran Studi RPL', NULL, '2018-11-12 00:53:18'),
(23, '1123', 'Asep Nurjaman, A.Md,Kom', 'L', 'Garut', '2018-11-12', 'D3 Informatika', 'Mata Pelajaran Kompetensi Progran Studi RPL', NULL, '2018-11-12 00:59:26'),
(24, '1124', 'Sri Ratih, SPd', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan ', 'Mata Pelajaran Kompetensi Progran Studi Perhotelan', NULL, '2018-11-12 01:00:33'),
(25, '1125', 'Ferina Ferbriani, Spd ', 'P', 'Garut', '2018-11-12', 'S1 Pendidikan', 'Matematika', NULL, '2018-11-12 01:01:27'),
(26, '1126', 'Adang Syamsul A.J.S,St.Par', 'L', 'Garut', '2018-11-12', 'D4 Pariwisata', 'Mata Pelajaran Kompetensi Progran Studi Perhotelan', NULL, '2018-11-12 01:02:38'),
(27, '1127', 'Ade Sukmana S.A.B', 'L', 'Garut', '2018-11-12', 'S1 Administrasi Bisnis', 'OTKP', NULL, '2018-11-12 01:03:36'),
(28, '1128', 'Laili Noer Alfiah, ST', 'P', 'Garut', '2018-11-12', 'S1 Teknik Informatika ', 'RPL', NULL, '2018-11-12 01:04:37'),
(29, '1129', 'Ahmad Jaelani S.Pd', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan Bahasa Indonesia', 'Bahasa Indonesia', NULL, '2018-11-12 01:05:54'),
(30, '1130', 'Eneng Iam Ratnasari, S.Pd', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan', 'Fisika dan Kimia', NULL, '2018-11-12 01:06:48'),
(31, '1131', 'Yusup S.Pd', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan Bahasa Indonesia', 'Bahasa Indonesia', NULL, '2018-11-12 01:17:05'),
(32, '1132', 'Ridwan Wahyudi S.Ag', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan  Agama', 'Pendidikan Agama dan Budi Pekerti', NULL, '2018-11-12 01:18:44'),
(33, '1133', 'Gan Gan Taopiq Alamsyah, S.Pd', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan', 'Pendidikan Kewarganegaraan', NULL, '2018-11-12 01:19:52'),
(34, '1134', 'Enjang Komara', 'L', 'Garut', '2018-11-12', 'S1 Pendidikan', 'Mata Pelajaran  Kompetensi Progran Studi Perhotelan', NULL, '2018-11-12 01:20:54'),
(35, '1135', 'Agus Koswara, S.Sos.M.Si', 'L', 'Garut', '2018-11-12', 'S1 Ilmu Sosial, S2 Ilmu Sains', 'Mata Pelajaran  Kompetensi Progran Studi Perhotelan', NULL, '2018-11-12 01:32:15');

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
(2, 'Politik', '2016-09-05 22:50:01'),
(3, 'Sains', '2016-09-05 22:59:39'),
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
(12, '1111', 'Ferry Indra Kusumah, M.Si', 'L', 'Wakil Kepala Sekolah Bidang Kurikulum', NULL),
(13, '1116', 'Yashinta Kusuma Wardhania, SE', 'P', 'KA Tata Usaha', NULL),
(14, '1211', 'Mira Verawati, A.md', 'P', 'Bendahara Sekolah', NULL),
(16, '1133', 'Gan Gan Taopiq Alamsyah, S.Pd', 'L', 'Wakasek Sarana Prasarana', NULL),
(17, '1115', 'Husnalilah, S.Pd', 'L', 'Wakasek Kesiswaan', NULL),
(18, '1131', 'Yusup S.Pd', 'L', 'Wakasek Hubungan Masyarakat', NULL),
(19, '1231', 'Hj. Oom Rohmayati, A.md,Pd', 'P', 'Komite Sekolah', NULL),
(20, '1113', 'Ai Adhayani, S.T', 'P', 'Ketua Kompetensi Keahlian RPL', NULL),
(21, '1112', 'Nia Masriah, S.Pd', 'P', 'Ketua Kompetensi Keahlian OTKP', NULL),
(22, '1124', 'Sri Ratih, SPd', 'P', 'Ketua Kompetensi Keahlian Perhotelan', NULL),
(23, '13111', 'Lia Tresnayusnita, SE', 'P', 'Kepala Sekolah', NULL);

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
(1, 'Andriansyah Maulana', 'L', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'andrimaulana105@gmail.com', '085223603720', 1, '1', '2016-09-02 23:07:55', 'eeb58d519cb287a6185c58333be3de4c.PNG'),
(2, 'Bapak Bejo Siswoyo S.TP., M.PD', 'L', 'kepalasekolah', '55b5fe3fb7368486c96f70d79e4e51a4', 'smkn1garut@gmail.com', '(0262) 233316', 1, '2', '2018-10-04 09:14:32', 'b6e543f5160b61ea5a6217ffb5f0f5c8.jpg');

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
(16, 'Selamat Datang Di SMK', '13b8fc21b4a703b6426d08360933cd4b.jpg'),
(18, 'Selamat Bekerja', 'f9b065619c13e52870353bb2b8ff3571.jpg');

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
(2, 'Dasar-dasar CSS', 'Modul dasar-dasar CSS 3. Modul ini membantu anda untuk memahami struktur dasar CSS', '2017-01-23 04:30:01', 'Drs. Joko', 0, 'ab9a183ff240deadbedaff78e639af2f.pdf'),
(3, '14 Teknik Komunikasi Yang Paling Efektif', 'Ebook 14 teknik komunikasi paling efektif membantu anda untuk berkomunikasi dengan baik dan benar', '2017-01-23 15:26:06', 'Drs. Joko', 0, 'ab2cb34682bd94f30f2347523112ffb9.pdf'),
(4, 'Bagaimana Membentuk Pola Pikir yang Baru', 'Ebook ini membantu anda membentuk pola pikir baru.', '2017-01-23 15:27:07', 'Drs. Joko', 0, '30f588eb5c55324f8d18213f11651855.pdf'),
(5, '7 Tips Penting mengatasi Kritik', '7 Tips Penting mengatasi Kritik', '2017-01-23 15:27:44', 'Drs. Joko', 0, '329a62b25ad475a148e1546aa3db41de.docx'),
(6, '8 Racun dalam kehidupan kita', '8 Racun dalam kehidupan kita', '2017-01-23 15:28:17', 'Drs. Joko', 0, '8e38ad4948ba13758683dea443fbe6be.docx'),
(7, 'Jurnal Teknolgi Informasi', 'Jurnal Teknolgi Informasi', '2017-01-25 03:18:53', 'Gunawan, S.Pd', 0, '87ae0f009714ddfdd79e2977b2a64632.pdf'),
(9, 'Naskah Publikasi IT', 'Naskah Teknolgi Informasi', '2017-01-25 03:21:04', 'Gunawan, S.Pd', 0, '71380b3cf16a17a02382098c028ece9c.pdf'),
(10, 'Modul Teknologi Informasi', 'Modul Teknologi Informasi', '2017-01-25 03:22:08', 'Gunawan, S.Pd', 0, '029143a3980232ab2900d94df36dbb0c.pdf'),
(11, 'Modul Teknologi Informasi Part II', 'Modul Teknologi Informasi', '2017-01-25 03:22:54', 'Gunawan, S.Pd', 0, 'ea8f3f732576083156e509657614f551.pdf'),
(12, 'Modul Teknologi Informasi Part III', 'Modul Teknologi Informasi', '2017-01-25 03:23:21', 'Andriansyah Maulana', 0, 'c5e5e7d16e4cd6c3d22c11f64b0db2af.pdf');

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
(20, 'Persiapan siswa menjelang ujian nasional', '<p>Banyak metode bejalar yang dilakukan oleh siswa untuk persiapan menghadapi ujian nasional (UN). Biantaranya mengingat dengan metode Mind Map, ataupun bejalar diluar kelas (outdoor).&nbsp; Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 02:24:42', 1, 'Pendidikan', 30, 'e640ab5a2b979c4e5bcd0daa4db687cd.jpg', 1, 'Andriansyah Maulana', 0, 'persiapan-siswa-menjelang-ujian-nasional'),
(22, 'Artikel Berita', '<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 02:38:21', 6, 'Prestasi', 53, '80e28c725f35bed1fc2d76ec18aba973.png', 1, 'Andriansyah Maulana', 0, 'artikel-berita'),
(23, 'Pelaksanaan Ujian Nasional', '<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 02:41:30', 1, 'Pendidikan', 56, '11d054a95e5dde860dc98d21c5b174d5.png', 1, 'Andriansyah Maulana', 0, 'pelaksanaan-ujian-nasional'),
(24, 'Proses belajar mengajar', '<p>Proses belajar mengajar di sekolah berlangsung menyenangkan. Didukung oleh instruktur yang fun dengan metode mengajar yang tidak biasa. Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel a Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel .</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n', '2017-05-17 02:46:29', 1, 'Pendidikan', 183, 'a5eb8789b4f33a8d5100409409527db4.jpg', 1, 'Andriansyah Maulana', 0, 'proses-belajar-mengajar');

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
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `ekskul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tulisan`
--
ALTER TABLE `tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
