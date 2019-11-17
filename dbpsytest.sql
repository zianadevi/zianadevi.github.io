-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 01:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpsytest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ziana', '$2y$10$2QowQDYAfoudnu/g0JrQzu.Iag0dRCLYSC18w81CF/KbNgNa9D/YS');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(10) NOT NULL,
  `gejala` varchar(1000) NOT NULL,
  `ifyes` varchar(10) NOT NULL,
  `ifno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`, `ifyes`, `ifno`) VALUES
('G01', 'Apakah Anda merasa ketakutan, kecemasan, kekhawatiran yang berlebihan, penghindaran akan sesuatu, atau peningkatan ketegangan ? ', 'G02', 'G02'),
('G02', 'Apakah kecemasan dan ketakutan yang Anda rasakan datang secara terus menerus dan timbul sebuah dorongan yang menuntun Anda untuk melakukan sesuatu yang memberikan rasa kelegaan sementara ?', 'G03', 'G04'),
('G03', 'Apakah Anda terus mempunyai pikiran yang membuat Anda merasa cemas seperti merasa bertanggung jawab terhadap hal-hal buruk yang sudah atau mungkin terjadi dan Anda tidak dapat mengabaikannya sekeras apapun Anda berusaha ?', 'G04', 'G05'),
('G04', 'Apakah Anda sering mencuci tangan berkali-kali atau sangat menjaga kebersihan ?', 'G05', 'G06'),
('G05', 'Apakah Anda sering melakukan pengecekan terhadap sesuatu dengan berlebihan ?', 'A01', 'G06'),
('G06', 'Apakah hampir setiap hari selama setidaknya 6 bulan ini Anda mengalami cemas berlebihan ?', 'G07', 'G08'),
('G07', 'Apakah Anda merasa kesulitan untuk mengendalikan perasaan cemas yang Anda rasakan ?', 'G08', 'G09'),
('G08', 'Apakah cemas berlebihan yang Anda alami diiringi dengan gejala-gejala yang terkait seperti gemetaran, nyeri kepala, sesak nafas, keringat berlebihan, dan jantung berdetak lebih cepat ?', 'G09', 'G10'),
('G09', 'Apakah Anda merasa kecemasan, kekhawatiran, gejala fisik yang Anda alami sudah sangat menganggu aktivitas sosial, pekerjaan dan yang lainnya ?', 'A02', 'G10'),
('G10', 'Apakah kecemasan yang Anda rasakan timbul diakibatkan rasa takut oleh suatu objek tertentu atau akan situasi tertentu sehingga anda merasa harus menghindarinya ? ', 'G11', 'G12'),
('G11', 'Apakah Anda mengekspresikan kecemasan dengan sering menangis ? ', 'G12', 'G13'),
('G12', 'Apakah rasa takut yang Anda alami selama ini tidak mempunyai alasan yang jelas ? ', 'G13', 'G14'),
('G13', 'Apakah Anda merasa penghindaran, antisipasi kecemasan yang Anda alami sudah sangat menganggu aktivitas sosial, pekerjaan dan yang lainnya ? ', 'A03', 'G14'),
('G14', 'Apakah Anda merasa ketakutan saat dalam situasi dimana seseorang memperhatikan Anda secara terus menerus atau berhubungan dengan orang yang tidak dikenal ?', 'G15', 'G16'),
('G15', 'Apakah Anda merasa ketakutan terhadap penampilan atau situasi yang memalukan atau dipermalukan di kehidupan sosial ?', 'A04', 'G16'),
('G16', 'Apakah Anda mengalami gejala serangan panik seperti detak jantung berdetak dengan cepat, atau berkeringat, atau sesak nafas, atau nyeri dada, dan atau rasa takut mati ?', 'G17', 'G18'),
('G17', 'Apakah serangan panik yang Anda alami berlangsung secara berulang dan datang secara tidak terduga ?', 'G18', 'G19'),
('G18', 'Apakah selama serangan panik yang Anda alami diikuti dengan rasa khawatir mendapat serangan panik kembali?', 'A05', 'G19'),
('G19', 'Apakah Anda merasa cemas bila ditempatkan disuatu tempat atau situasi yang sulit dihindari atau sulit mendapat bantuan ketika serangan panik terjadi?', 'A06', 'G20'),
('G20', 'Apakah Anda merasa takut jika berpergian sendiri?', 'G21', 'G22'),
('G21', 'Apakah Anda selalu meminta untuk ditemani setiap saat akan meninggalkan rumah?', 'G22', 'G23'),
('G22', 'Apakah Anda merasa takut jika berada dalam keramaian seperti di tempat umum?', 'G23', 'A08'),
('G23', 'Apakah Anda lebih menyukai berpergian bersama teman atau saudara pada tempat yang ramai?', 'A07', 'A08');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(10) NOT NULL,
  `kd_user` int(11) NOT NULL,
  `kd_penyakit` varchar(10) NOT NULL,
  `hasil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `kd_user`, `kd_penyakit`, `hasil`) VALUES
(10, 12, 'A01', 'Gangguan Obsesif Kompulsif');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(5) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `fname`, `lname`, `email`, `subject`, `pesan`) VALUES
(1, 'dina', 'sari', 'dina@gmail.cpm', 'konsultasi', 'caranya mencegah gangguan kecemasan gimana?');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(10) NOT NULL,
  `penyakit` text NOT NULL,
  `keterangan` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `penyakit`, `keterangan`, `solusi`) VALUES
('A01', 'Gangguan Obsesif Kompulsif', 'Penyakit OCD atau Obsessive Compulsive Disorder adalah kelainan psikologis yang memengaruhi pikiran dan perilaku penderitanya.  Begitu seseorang memiliki penyakit OCD, pikiran dan rasa takut yang tidak diinginkan akan muncul secara terus menerus, menyebabkan penderita terobsesi pada sesuatu dan melakukan tindakan tertentu secara berulang-ulang sebagai respon terhadap ketakutannya.', 'Pemberian obat Clomipramine (Anafranil), Fluvoxamine (Luvox CR), Fluoxetine (Prozac), Paroxetine (Paxil, Pexeva), Sertraline (Zoloft) dan Terapi perilaku kognitif yang dapat membantu Anda untuk menemukan kebiasaan bawah sadar yang menyebabkan pikiran itu terjadi. Selanjutnya terapi tersebut akan menuntun Anda untuk menemukan kebiasaan lain yang dapat digunakan untuk menghindari pikiran negatif tersebut.'),
('A02', 'Gangguan Kecemasan Umum', 'Gangguan kecemasan umum adalah rasa cemas atau khawatir yang berlebihan dan tak terkendali sehingga mengganggu aktivitas sehari-hari penderitanya. Kondisi jangka panjang ini bisa dialami oleh anak-anak maupun orang dewasa.', 'Terapi perilaku kognitif (CBT). Diskusikanlah dengan dokter mengenai jenis obat yang cocok untuk kondisi Anda, contohnya durasi pengobatan yang akan dijalani serta efek sampingnya. Beberapa jenis obat yang biasanya diberikan meliputi: Antidepresan, seperti selective serotonin reuptake inhibitor (SSRI) atau serotonin and noradrenaline reuptake inhibitor (SNRI). Pregabalin. Benzodiazepine. Berolahraga dengan teratur, Melakukan teknik relaksasi, seperti yoga, Menghindari kafein, merokok, dan konsumsi minuman keras.'),
('A03', 'Fobia Spesifik', 'Fobia spesifik adalah jenis gangguan kecemasan yang ditandai oleh ketakutan yang berlebihan dan tidak rasional terhadap objek atau situasi tertentu.', 'Secara aktif mencari pengobatan dan berpartisipasi dalam proses, Membuat komitmen untuk menghadapi kesulitan anda dengan berani, Melakukan latihan relaksasi secara teratur untuk mengurangi gejala kecemasan, Menjaga gaya hidup sehat: makan makanan yang sehat dan seimbang, berolahraga secara teratur dan cukup, mengembangkan hobi yang bermakna, mempertahankan hubungan sosial.'),
('A04', 'Fobia Sosial', 'Social anxiety disorder atau fobia sosial adalah gangguan kesehatan mental yang ditandai dengan rasa takut akan diawasi, dihakimi, atau dipermalukan oleh orang lain.', 'Salah satu bentuk psikoterapi untuk mengatasi fobia sosial adalah terapi perilaku kognitif. Terapi perilaku kognitif berlangsung selama 12 minggu, Pemberian obat anticemas atau antiansietas benzodiazepine, obat antidepresan, seperti fluoxetine, Obat penghambat beta, bisoprolol.'),
('A05', 'Gangguan Panik dengan Agorafobia', 'Agoraphobia adalah salah satu jenis gangguan cemas pada manusia, di mana penderitanya merasa ketakutan yang berlebih dan menghindari tempat atau situasi yang menimbulkan rasa panik dan membuatnya malu, terjebak, atau tidak berdaya.', 'Beberapa langkah pengobatan yang dapat dilakukan untuk mengatasi agoraphobia adalah dengan Psikoterapi, Penderita akan dibantu oleh psikolog atau psikiater untuk belajar mengurangi gejala-gejala kecemasan. Konsumsi obat-obatan, obat antidepresan atau obat antiansietas untuk meredakan gejala kecemasan. Jika Anda menderita agoraphobia, berlatihlah untuk mengatasi dan mengendalikan rasa takut akan suatu tempat. Ajaklah anggota keluarga atau teman untuk pergi bersama ke tempat yang ditakuti.'),
('A06', 'Gangguan Panik tanpa Agorafobia', 'Gangguan panik ditandai dengan adanya serangan panik yang tidak diduga\r\ndan spontan yang terdiri atas periode takut intens yang hati-hati dan\r\nbervariasi dari sejumlah serangan sepanjang hari sampai hanya sedikit\r\nserangan selama satu tahun.', 'Umumnya pengobatan jangka pendek, terapi perilaku kognitif berfokus pada pengajaran keterampilan khusus untuk secara bertahap kembali ke aktivitas yang pernah Anda dihindari karena kecemasan. Melalui proses ini, gejala Anda akan semakin berkurang.'),
('A07', 'Agorafobia tanpa Gangguan Panik', 'DSM-IV menyatakan agorafobia tanpa riwayat gangguan panik didasarkan\r\npada rasa takut akan ketidakmampuan mendadak atau gejala yang\r\nmemalukan serta penghindaran situasi yang didasarkan pada kekhawatiran\r\nterkait gangguan medis (rasa takut menderita infark miokardium pada\r\npasien dengan penyakit jantung parah).', 'Beberapa langkah pengobatan yang dapat dilakukan untuk mengatasi agoraphobia tanpa riwayat gangguan panik adalah dengan Psikoterapi, Penderita akan dibantu oleh psikolog atau psikiater untuk belajar mengurangi rasa takut. Konsumsi obat-obatan, obat antidepresan atau obat antiansietas untuk meredakan gejala kecemasan. Belajarlah mengendalikan pernapasan. Berlatihlah untuk memberanikan diri terkait gangguan medis.'),
('A08', 'Gangguan Kecemasan Lain', 'Tidak ada keterangan.', 'Silahkan berkonsultasi langsung dengan psikiater/ pakar.'),
('A09', 'Anda Sehat!', '-', 'Pertahankan! Jaga emosi Anda dan bergabunglah dengan lingkungan yang baik.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `jenis_kelamin`, `umur`, `tanggal`) VALUES
(12, 'dina', 'perempuan', '20', '2019-11-16 18:08:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
