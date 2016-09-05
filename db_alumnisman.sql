-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2015 at 04:10 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_alumnisman`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(0, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(1, 'user', 'siswa', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE IF NOT EXISTS `beasiswa` (
  `id_beasiswa` int(4) NOT NULL AUTO_INCREMENT,
  `nama_beasiswa` varchar(50) NOT NULL,
  `isi_beasiswa` varchar(10000) NOT NULL,
  `tgl_beasiswa` varchar(20) NOT NULL,
  `file` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_beasiswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `nama_beasiswa`, `isi_beasiswa`, `tgl_beasiswa`, `file`) VALUES
(5, 'Beasiswa Djarum', 'Bagi Anda yang akan lulus Sekolah Menengah Atas tahun ini, seperti tahun sebelumnya, tahun ini CIMB Niaga kembali menawarkan beasiswa untuk kuliah s1 di universitas-universitas Malaysia. Beasiswa ini ditujukan untuk para pelajar SMA di seluruh penjuru nusantara yang berkeingan meneruskan pendidikan tingkat tinggi.', '2011-12-23', 'SILABUSMAT1BABI.doc'),
(6, 'Beasiswa Brunai', 'Pemerintah Brunei Darussalam menawarkan program beasiswa untuk mahasiswa asing pada tahun akademik 2011-2012. Beasiswa ini memberikan kesempatan kepada siswa untuk kuliah di salah satu perguruan tinggi di Brunei yaitu Universiti Brunei Darussalam (UBD), Universitas Islam Sultan Sharif Ali (UNISSA) dan Institut Teknologi Brunei (ITB). Tahun akademik pada ketiga perguruan tinggi tersebut akan dimulai pada bulan Juli/Agustus 2011.\r\n\r\nBeasiswa yang akan diberikan juga termasuk biaya masuk, tiket pesawat, tanggungan kesehatan pada rumah sakit pemerintah, biaya hidup per bulan dan biaya buku akademik.\r\n\r\nPendaftaran beasiswa Brunei 2011-2012 ini akan ditutup pada 15 Desember 2010. Ayo buruan!\r\n\r\nInformasi selengkapnya download file pdf dari situs resmi pemerintah Brunei Darussalam di:', '2011-12-23', 'Bab 1 (KONSEP SISTEL).doc');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_ber` int(4) NOT NULL AUTO_INCREMENT,
  `id_kat_ber` int(4) NOT NULL,
  `nama_ber` varchar(100) NOT NULL,
  `isi_ber` mediumtext NOT NULL,
  `foto_ber` varchar(1000) NOT NULL,
  `tgl_ber` varchar(20) NOT NULL,
  `post_ber` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ber`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_ber`, `id_kat_ber`, `nama_ber`, `isi_ber`, `foto_ber`, `tgl_ber`, `post_ber`) VALUES
(16, 1, ' Hasil SNMPTN Diumumkan Besok ', 'Liputan6.com, Medan: Hasil seleksi nasional masuk perguruan tinggi negeri (SNMPTN) se-Indonesia melalui ujian tertulis dan keterampilan akan diumumkan secara online melalui laman (website) dengan alamat http://www.snmptn.ac.id. Menurut Humas Universitas Sumatera Utara (USU) Bisru Hafi, Rabu (29/6), sesuai dengan jadwal dari panitia pusat pengumuman akan tetap dilakukan 30 Juni 2011 serentak di seluruh Indonesia.\r\n\r\nSementara itu, Bisru menerangkan, jumlah peserta SNMPTN yang mendaftar melalui USU tahun ini meningkat mencapai 33 persen. Tahun lalu jumlah pendaftar hanya mencapai sekitar 20 ribu orang.\r\n\r\nia juga menjelaskan, universitas negeri tertua di Sumatra itu tahun ini menempati peringkat kedua yang paling diminati peserta SNMPTN se-Indonesia. Peringkat pertama ditempati Universitas Padjajaran Bandung.', '110531bsnmptn.jpg', '2011-12-23', 'admin'),
(35, 2, 'Kumpul alumni angkatan 2006', 'Sebagai ajang silaturahim dan konsolidasi organisasi, ikatan alumni APB/STIPER Bale Bandung/Fakultas Pertanian UNIBBA akan mengadakan Kumpul Alumni APB/STIPER Bale Bandung/Fakultas Pertanian UNIBBA se-Indonesia pada:\r\n\r\nHari : Sabtu\r\nTanggal : 17 Maret 2012\r\nWaktu : 10.00 WIB s/d selesai\r\nTempat : Aula Fakultas Pertanian UNIBBA\r\n\r\nSebagai rangkaian kegiatan tersebut, maka akan diadakan kegiatan Kumpul Alumni tingkat komisariat yang waktu dan tempatnya dapat ditanyakan kepada koordinator sekretariat setempat.\r\n\r\nDemikian, untuk diketahui dan mohon kehadirannya pada acara dimaksud. Konfirmasi kehadiran dapat disampaikan melalui fax di nomor 022-5947087 atau sms ke pak Yudi di nomor 0813 2163 0325', 'index.jpg', '2012-06-8', 'admin'),
(24, 4, 'Ketua OSIS SMA Negeri 1 Suboh Wakili Kabupaten', 'Hay Dear, salah satu remaja berprestasi yang ingin saya perkenalkan kali ini adalah Santika Nindya Hapsari Wibowo. Dia akrab dipanggil Santi. Aktifitas kesehariannya adalah sebagai Ketua Organisasi Siswa Intra Sekolah (OSIS) di SMA 3, Situbondo. Melihat sepintas penampilannya, tentu sudah bisa menebak kalau dia cewe yang alim,sederhana tapi smart dan jago diplomasi. Tebakan kamu tentu tidak akan meleset, apalagi setelah mengenalnya lebih dekat.\r\n\r\nBagi teman-teman dekatnya, Santi dikenal sebagai sosok dengan seribu talenta. Di bidang akademis, dia selalu berprestasi. Di organsiasi OSIS dia juga dikenal sebagai siswa yang kreatif dan penuh ide.Wajar selama dibawah kepemimpinannya, berbagai event dan kegiatan tidak pernah berhenti alias selalu ada saja yang dikerjakan. Bukan hanya itu, berkat kemampuannya dalam berkomunikasi dan diplomasi, Agustus 2011, mendatang, dia bersama 66 wakil Indonesia lainnya akan berangkat ke Amerika Serikat.\r\n\r\nKeberangkatannya ke negeri Adidaya ini guna mengikuti program Youth Exchange and Study (YES). Program yang sengaja digulirkan pemerintah AS ini ditujukan untuk mengembangkan komunikasi antara penduduk Amerika Serikat dan negara berkembang khususnya sikap saling memahami dan menghargai. Mereka yang bergabung dalam program merupakan siswa-siswi terpilih. Sebelumnya, mereka wajib mengikuti sejumlah proses seleksi yang cukup ketat.\r\n\r\n“ Untuk DIY ada empat orang yang nantinya ikut bergabung,” kata remaja kelahiran Besuki,8 Juni 1994 ini.\r\n\r\nDiakui Santi, untuk ikut bergabung dalam program tersebut ada pengorbanan besar yang harus dilalui. Karena, dengan terpaksa sepulang dari AS nantinya dia harus mengulang kelas 12. Pasalnya, program YES berlangsung selama satu tahun. Tapi apapun pengorbanannya itu harus tetap dijalani. Karena bagi putri pertama dari Danang wibowo dan Reni Anggraeni, dia sangat berharap bisa melewati pengalaman luar biasa yang belum tentu dirasakan setiap siswa.\r\n\r\nTidak hanya pengalaman, karena selain mendapat beasiswa dia juga akan mendapat sertifikat khusus dan tabungan untuk masa depan sebanyak 1.800 USD per bulan. Berbagai kebutuhan harian dari mulai makan, menginap hingga kelengkapan proses belajar juga telah dicukupi. Santi berharap pengalaman tersebut bisa menjadi modal berharga untuk meraih cita-citanya di masa mendatang. “ Saya ingin sukses tanpa memberatkan orang tua saya,” terang Santi yang bercita-cita jadi akuntan ini.\r\n\r\nSalah satu cara untuk tidak merepotkan orang tua, dia selalu berupaya meraih bea siswa baik itu selama SMA maupun perguruan tinggi nanti. Di tempat kuliah, sedapat mungkin dia juga tidak akan mengambil program-program yang banyak membutuhkan dana. Atas dasar itulah, Santi tidak menargetkan kemana dia akan kuliah yang penting diterima perguruan tinggi negeri (PTN). “ Dimanapun yang penting bisa best of the best,” tandas kakak dari Satyaning Embun Kinasti Wibowo dan Anindita Sekar Kinanti Wibowo.', 'santi1-copy-223x300.jpg', '2012-06-1', 'admin'),
(25, 4, '9 Siswa SMA1S Mewakili Kota dalam O2SN Provinsi 2011', 'Ternyata tidak hanya di bidang akademik dan penyelenggaraan event saja prestasi yang diraih oleh anak-anak SMA Negeri 3 “Padmanaba” Yogyakarta, melainkan juga di bidang olahraga.\r\n\r\nSetidaknya pada tahun 2011 ini ada sembilan siswa peserta Olimpiade Olahraga Siswa (OOS) yang mewakili tingkat kota, maju ke tingkat provinsi. Mereka adalah para juara OOS tingkat Kota Yogyakarta yang diselenggarakan pada 15 dan 16 Mei 2011.\r\n\r\nPara siswa yang akan maju ke OOS Tingkat provinsi pada 13 dan 15 Juni 2011, adalah:\r\n\r\n(1) Adi Setya Mahardika (Juara 1 Silat Kelas B Putra), (2) Amanda Dania (Juara 1 Silat Kelas B Putri), (3) Bintang Jalu S. (Juara II Silat Kelas F Putra), (4) Elida Rahajeng (Juara II Silat Kelas F Putri), (5) Ahmad Fauzi N. (Juara II Seni Tunggal Putra), (6) Rahma Kusuma Sari (Juara II Senin Tunggal Putri), (7) Evaria Ayu Nurjana (Juara I Tenis Meja Putri), (8) Erika Wahyu Fajarwanto (Juara 1 Tenis Meja Putra), dan (9) Arini Wulandari (Juara II lari 100 m Putri).\r\n\r\nDemikian seperti disampaikan oleh pendamping kegiatan, Sumaryoto, S.Pd., MPd., yang juga pengampu mata pelajaran pendidikan jasmani olahraga dan kesehatan SMA Negeri 3, kepada Kominfo Humas, Senin 13 Juni 2011. Atas nama segenap keluarga besar Padmanaba, mengucapkan selamat dan sukses, semoga dapat meraih prestasi sebagaimana diharapkan.', 'Logo-O2SN.jpg', '2012-06-1', 'admin'),
(26, 4, 'Atlet O2SN SMAN1S  Siap Beraksi', 'O2SN memang tampaknya tidak lebih dikenal dibandingkan OSN atau Olimpiade Sains Nasional. O2SN adalah Olimpiade Olahraga Siswa Nasional yang diadakan oleh Dinas Pendidikan tiap tahunnya. O2SN ini melingkupi tingkat SD, SMP, dan SMA. Di Situbondo, O2SN telah dibuka tanggal 6 Mei 2011 lalu dengan penampilan 600 siswa SD yang memperagakan senam kreasi di lapangan Karang Kotagede,Situbondo.\r\n\r\nTahun ini, kembali SMA Negeri 1 Suboh situbondo mengirimkan wakilnya -atlet terbaik- untuk mengikuti ajang O2SN. Ada 22 cabang olahraga yang ditandingkan. 22 cabang itu dibagi menjadi 5 kategori: atletik, pencak silat, karate, bulu tangkis, dan tenis meja. Sedangkan SMA N 1 Situbondo ikut bertanding dalam 10 cabang, yaitu tenis meja putri, tenis meja putra, lari 100 m putra, lari 100 m putri, bulu tangkis putri, bulu tangkis putra, lompat jauh putra, lompat jauh putri, lompat tinggi putra, dan lompat tinggi putri.\r\n\r\nPara atlet dibina dan diadakan latihan rutin untuk meningkatkan stamina dan kemampuan atlet dalam bidangnya masing-masing. Untuk seleksi cabang atletik, akan diadakan di Stadion Mandalakrida pada Senin, 23 Mei 2011 mendatang. Semoga sukses untuk para atlet terbaik SMA Negeri 1 Suboh yang akan bertanding dalam O2SN mendatang!', '164043_1543401470353_1394476062_31219785_338145_n1.jpg', '2012-06-1', 'admin'),
(27, 6, 'Perencanaan Program Pengembangan SMA Tahun 2011 ', ' Pendidikan merupakan salahsatu urusan wajib yang harus dilaksanakan oleh Pemerintah Daerah, hal ini sejalan dengan Undang-undang Nomor 32 Tahun 2004 tentang Penyelenggaraan Pemerintahan Daerah, dan Peraturan Pemerintah Nomor 38 Tahun 2007 tentang pembagian urusan pemerintahan.\r\n\r\nOleh karena itu, perlu ada kesepahaman dan keserasian program antar pemerintah pusat, propinsi dan kabupaten/kota. Apalagi visi pendidikan nasional 2014 menyebutkan "Terselenggarannya layanan prima pendidikan nasional untuk membentuk insan Indonesia cerdas komprehensif, dengan fokus misi pada lima hal, yakni meningkatkan ketersediaan layanan pendidikan, meningkatkan keterjangkauan layanan, meningkatkan kualitas/mutu dan relevansi layanan pendidikan, dan meningkatkan kesetaraan memperoleh layanan pendidikan, serta meningkatkan kepastian/keterjaminan memperoleh layanan pendidikan. Fokus perhatian ini tidak jauh berbeda dengan misi sebelumnya. \r\n\r\nPersoalan yang dihadapi untuk jenjang pendidikan tingkat sma secara nasional antara lain adalah angka melanjutkan sekolah untuk jenjang SMA masih rendah, jumlah lulusan sma yang tidak tertampung pada pendidikan tinggi yang cukup banyak, belum lagi ketersediaan sarana dan prasarana sekolah yang memenuhi standar, ketersediaan tenaga pendidik yang memenuhi standar kompetensi, dan belum lagi persoalan kurikulum.\r\n\r\nOleh karena itu, Direktorat Pembinaan SMA, Dirjen Mandikdasmen,kementerian Pendidikan Nasional, mengadakan koordinasi implementasi dan perencanaan program pengembangan SMA, tingkat Kabupaten/Kota Tahun 2010 di suboh situbondo, tanggal 7 - 9 Nopember 2010. Adapun agenda yang menjadi target adalah identifikasi dan evaluasi implementasi program sma tahun 2010 di tingkat Propinsi dan Kab/Kota, validasi data pokok pendidikan sma, dan koordinasi dan sinkronisasi rencana program Direktorat Pembinaan SMA Tahun 2011. Upaya inni dilakukan untuk mengidentifikasi capaian sasaran/target program, masalah dan hambatan serta upaya untuk memecahkan persoalan dimaksud. ', '08_11_2010_0900.jpg', '2012-06-1', 'admin'),
(34, 6, 'Pelatihan Perpustakaan dalam rangka pengembangan SMA rintisan nasional se-jatim', 'Selama 4 hari berturut-turut - 23 Desember 2010, Perpustakaan SMA Negeri 1 suboh bekerja sama dengan Dinas Pendidikan, Pemuda dan Olah Raga Dikpora Provinsi jawa timur melaksanakan Pelatihan Perpustakaan dalam rangka pengembangan SMA rintisan nasional di SMA 1 Suboh.\r\nAcara yang berlangsung di Gedung UC dan PPTIK UGM diikuti oleh 30 peserta perwakilan dari 15 SMA RSBN di Situbondo.\r\nSelama mengikuti pelatihan peserta mendapatkan materi berupa: Kebijakan Bidang Dikmenti, Isu-isu Mutakhir Perpustakaan, Manajemen Sumber Informasi, SOP Perpustakaan, Kepustakawanan, Pengolahan Bahan Pustaka, Alih Media Dokumen Cetak, Kerjasama Perpustakaan, Aplikasi Software dan diakhiri dengan kunjungan ke Perpustakaan Unit 2 Sekip.\r\nHasil yang diharapkan dari program kerjasama ini adalah tercapainya Pengelola Perpustakaan yang memiliki kualitas layanan khusus. Sehingga diharapkan para pengelola perpustakaan lebih meningkat kinerjanya di bidang pengelolaan perpustakaan yang baik. ', 'ilib.jpg', '2012-06-8', 'admin'),
(28, 5, 'SMA 1 Suboh, Sekolah Berwawasan Lingkungan', 'Apakah kalian pernah mendengar sekolah berwawasan lingkungan? Mungkin sebagian dari kalian pernah mendengarnya, tetapi sebagian lagi belum pernah tahu.\r\n\r\nSalah satu sekolah berwawasan lingkungan yang ada di kawasan suboh, Situbondo, adalah sekolah kami MuDAers, SMA Negeri 1 Suboh. Sekolah kami ini telah mendapat penghargaan Adiwiyata, yaitu penghargaan yang diberikan bagi tempat yang mencerminkan budaya menjaga lingkungan dan kebersihan seperti sekolah kami.\r\n\r\nSekolah kami ini memiliki berbagai tempat yang asyik dan menarik, yang menjadi tempat favorit bagi siswa, antara lain Saung dan Kantin Alam. Di Kantin Alam, siswa bisa menggunakan peralatan makan yang ramah lingkungan. Makanan yang disediakan pun bebas dari bahan berbahaya, seperti zat pewarna, pengawet, pemanis, dan penyedap rasa.\r\n\r\nTidak hanya itu, ekstrakurikuler atau Ekskul Lingkungan Hidup (ELH) di sekolah kami juga mengolah sampah organik di sekolah untuk dijadikan pupuk kompos, yang telah menjadi usaha dengan koperasi mitra sekolah.\r\n\r\nSuasana sekolah yang asri juga menunjang proses pembelajaran di sekolah. Sementara keberadaan gedung sekolah lebih terlihat terbuka sehingga komunikasi antarsiswa dan guru menjadi tak terbatas dan dapat dilakukan di luar kelas dan tidak membosankan. Asyik, bukan?\r\n\r\nSekolah kami memperoleh beberapa penghargaan Sekolah Sehat, yang berawal dari ide kepala sekolah untuk mengajak siswa membawa tanaman dan menciptakan keadaan yang bersih.\r\n\r\n”Caranya, dengan mengadakan lomba kebersihan kelas dan peduli lingkungan, yang memenuhi berbagai aspek, seperti fasilitasi kelas bersih dan jumlah tanaman per kelas. Harapannya warga sekolah merasa memiliki dan mempunyai rasa peduli lingkungan. Diri kita mencerminkan keberadaan lingkungan di mana kita berada,” tutur Ibu Tri Sumarti, SpD selaku Pembimbing ELH.\r\n\r\nSMAN 1 Suboh tentu dapat menjadi contoh bagi sekolah lain, untuk mengajarkan bagaimana menjaga keselarasan hidup dengan alam melalui tindakan nyata. Ada sanksi yang diberikan kepada siswa yang membuang sampah sembarangan atau tidak peka terhadap sampah yang ada di sekitarnya, yaitu dengan membayar denda Rp 10.000. Uang denda ini digunakan untuk menunjang ELH. Dengan demikian, siswa bisa belajar bersikap disiplin dan bertanggung jawab terhadap lingkungan tempat mereka berada.\r\n', '1006421p.jpg', '2012-06-6', 'admin'),
(30, 3, 'Dibutuhkan Tim Web Desainer - Programming', ' Perusahaan kami bergerak di bid. Jasa Pembuatan Website yg sedang berkembang membutuhkan 1. Pria / Wanita 2. Pendidikan min. SMK / D3 jurusan IT / Web Desain 3. Pengalaman min. 1 tahun di bidang yang sama / freshgraduate 4. Mengerti Konsep Web Design & Mempunyai pengalaman di bidang yang sama 5. Menguasai Photoshop, Corel, Ilustrator dan Editor lainnya 6. Mengerti bahasa pemograman seperti HTML, CSS, PHP & Mysql 7. Mengerti penggunaan beberapa CMS Joomla, WordPress, Prestashop 8. Mengerti Flash Actionscript dan Creative Design 9. Mampu bekerja sama dalam team 10. Diutamakan yang bertempat tinggal di Tebet,Ps Minggu, Kebon Baru dan sekitarnya Atraktif renumerasi dan bonus akan diberikan bagi kandidat yang memenuhi syarat Cara Melamar Walk in interview lsg dngn mengirim surat lamaran lkp & CV sebelumnya ke alamat email kami kirim ke : marketing@quantumwebdesain.com / CP: Ridwan 021-99623352', 'undangan.jpg', '2012-06-7', ''),
(37, 1, 'Identitas Saya', 'Ini KTP Saya', 'KTP 001.jpg', '2015-07-4', 'Admin Ichal'),
(36, 2, 'Undangan Acara Kumpul Alumni Tahun 2007', 'Acara ini diselenggarakan oleh alumni tahun 2007 yang berdomisili di besuki dan sekitarnya. Maaf jika keterangan ini belum disertakan pada pesan yang disalin dari email di bawah ini.\r\n\r\nTerima kasih.\r\n\r\nDear all, sedulur singkep, co-konco, tereman-tereman,\r\n\r\nSaya sudah dapat konfirmasi dari Elly tentang ketersediaan tempat di Omah Sendok utk tanggal 3 Agustus. Tempat sudah oke. Sekarang tinggal kesediaan teman-teman untuk hadir. Mohon tidak mengecewakan rekan kita, Ikhlasul Amal yang jauh-jauh datang dari Bandung khusus untuk Turba ke konstituennya di besuki ini. Saya dengar juga dari Amal, bahwa Lisa juga berencana untuk hadir. Jadi nanti ada 2 orang dari Suboh yang akan datang untuk memantau dan memonitor kita. Please don’t let me down.\r\n\r\nSesuai rencana pertemuan ini diadakan di:\r\nTempat: Omah Sendok, Jl. Empu Sendok 45, Suboh\r\nWaktu: 18.00 – sak ngantuke\r\n\r\nInformasi tentang tempat pertemuannya bisa dibaca di sini\r\n\r\nMasih ada waktu 2 minggu untuk persiapan. Bagi yang kira-kira tidak diijinkan oleh pasangannya, please let me know. Saya akan mintakan izin untuk acara ketemuan ini. Belum tentu setahun sekali kita ketemuan bareng-bareng. Japri aja ke aku .. ivan.khusyairi@ptgasi.com Dalam catatan saya ada sekitar 23 orang angkatan kita di Situbondo. Sebagian besar saya belum pernah ketemu. Saya harapkan nanti yang sebagian besar ini bisa hadir.\r\n\r\nUntuk memudahkan administrasi, saya harapkan kerjasamanya dari rekan-rekan sekalian untuk konfirmasi ke saya atau Amal bilamana bisa hadir.\r\n\r\nIvan S. Khusyairi', 'index2.jpg', '2012-06-8', 'admin'),
(38, 1, 'UIN Membuka Pedaftaran Mahasiswa Baru gelombang II', 'Gelombang II membuka 8 Jurusan\r\nsafgea\r\nawefwea\r\nawef\r\nawefwea\r\nwaef', 'gelombang 2.jpg', '2015-07-30', 'Admin'),
(41, 1, 'MOS', 'MOS 2015', 'gelombang 2.jpg', '2015-07-31', 'Admin'),
(42, 1, 'ss', 'ss', 'Montric.png', '2015-09-7', 's'),
(43, 1, '2', 's', 'Montric.png', '2015-09-7', 'a'),
(44, 1, 's', 'a', 'Montric.png', '2015-09-7', 's'),
(45, 1, 'ss', 's', 'Montric.png', '2015-09-7', 's'),
(46, 1, 'w', 's', 'Montric.png', '2015-09-7', 's'),
(47, 1, 's', 's', 'Montric.png', '2015-09-7', 's'),
(48, 2, 'a', 's', 'Montric.png', '2015-09-7', 's'),
(49, 1, 's', 's', 'Montric.png', '2015-09-7', 's'),
(50, 1, 's', 's', 'Montric.png', '2015-09-7', 's'),
(51, 1, 's', 's', 'Montric.png', '2015-09-7', 's'),
(52, 1, 'f', 's', 'Montric.png', '2015-09-7', 's');

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `tanggal`, `nama`, `email`, `website`, `pesan`) VALUES
(1, 1438272329, 'FAIZAL RUZKY', 'faizalruzky@gmail.com', 'faizalruzky.zz.mu', 'Bismillah');

-- --------------------------------------------------------

--
-- Table structure for table `data_agenda`
--

CREATE TABLE IF NOT EXISTS `data_agenda` (
  `tgl_agenda` varchar(11) NOT NULL,
  `agenda` varchar(300) NOT NULL,
  PRIMARY KEY (`tgl_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_agenda`
--

INSERT INTO `data_agenda` (`tgl_agenda`, `agenda`) VALUES
('15-08-2015', '<li>Test</li>'),
('16-08-2015', '<li>KRS</li>'),
('17-08-2015', 'KRS'),
('18-08-2015', 'Test'),
('19-08-2015', '<li>Test</li>'),
('20-08-2015', '<li>(Aku)</li>'),
('8-09-2015', 'Test Aja');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(8) NOT NULL AUTO_INCREMENT,
  `nis` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id_jur` int(4) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_thun_lulus` int(4) NOT NULL,
  `kegiatan` varchar(250) NOT NULL,
  `nama_perusahaan` varchar(250) NOT NULL,
  `perguruan_tinggi` varchar(50) NOT NULL,
  `nama_perguruan_tinggi` varchar(250) NOT NULL,
  `foto_siswa` text NOT NULL,
  `kritik_saran` varchar(10000) NOT NULL,
  PRIMARY KEY (`id_siswa`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nis`, `nama`, `username`, `password`, `id_jur`, `alamat`, `no_hp`, `email`, `id_thun_lulus`, `kegiatan`, `nama_perusahaan`, `perguruan_tinggi`, `nama_perguruan_tinggi`, `foto_siswa`, `kritik_saran`) VALUES
(15, '2', 'rohimaa', 'rohim', '48d2eb9ba3b2f8c15ee693a2c3dac10c', 7, 'weec', '232', 'edwq@com.com', 58, 'Sekolah', '', 'PTN', 'wewe', '', 'we'),
(17, '5', 'faizal', 'faizal', '22bf59bcca5b77263b4021cf4695288d', 7, 'asdasd', '77576575', 'faizal@faizal.com', 58, 'Sekolah', '', 'PTN', 'UIN Bandung', '', 'HHHH'),
(18, '7', 'Ilah', 'ilah', '6976412d339fba22f4edf212d5f0967c', 7, 'ccc', '876875', 'faizal@gmail.com', 59, 'Sekolah', '', 'PTN', 'sadasd', '', 'asdsa'),
(14, '1', 'rohman', 'rohman', '2397977a0e43fb1f5ee26fe993674b5b', 7, 'aa', 'sss', 'asefaw@gmail.com', 58, 'Sekolah', '', 'PTN', 'ssd', '', 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `download_lowongan`
--

CREATE TABLE IF NOT EXISTS `download_lowongan` (
  `id_low` int(4) NOT NULL AUTO_INCREMENT,
  `nama_low` varchar(50) NOT NULL,
  `file` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_low`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `download_lowongan`
--

INSERT INTO `download_lowongan` (`id_low`, `nama_low`, `file`) VALUES
(9, 'Web Desainer - Programming', 'BASIS DATA SPASIAL.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `id_kat_galeri` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `nama_file`, `deskripsi`, `id_kat_galeri`) VALUES
(55, '08012006070.jpg', 'siswa-siswi', 16),
(56, '08012006072.jpg', 'bapak guru', 16),
(58, 'DSC09514.JPG', '', 13),
(59, 'DSC09520.JPG', '', 13),
(54, 'P1010266.JPG', 'guru-guru', 15),
(57, '08012006071.jpg', 'persentasi', 16),
(60, 'DSC09533.JPG', '', 13),
(61, 'DSC09528.JPG', '', 13),
(63, 'P1010383.jpg', 'persiapan pelepasan tim PKL', 17),
(64, 'P1010159.jpg', 'demo program ', 17),
(65, 'P1010163.jpg', '', 17),
(66, 'P1010166.jpg', '', 17),
(67, 'P1010365.jpg', '', 17),
(68, 'P1010406.jpg', 'foto bareng bersama guru-guru', 0),
(69, 'P1010428.jpg', 'foto bareng dengan kepala sekolah', 17),
(70, 'P1010406.jpg', '', 15);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE IF NOT EXISTS `kategori_berita` (
  `id_kat` int(4) NOT NULL AUTO_INCREMENT,
  `nama_kat` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kat`, `nama_kat`) VALUES
(1, 'berita'),
(2, 'acara'),
(3, 'lowongan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galeri`
--

CREATE TABLE IF NOT EXISTS `kategori_galeri` (
  `id_kat_galeri` int(4) NOT NULL AUTO_INCREMENT,
  `cover` text NOT NULL,
  `nama_kat_galeri` text NOT NULL,
  PRIMARY KEY (`id_kat_galeri`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id_kat_galeri`, `cover`, `nama_kat_galeri`) VALUES
(17, 'P1010406.jpg', 'pkl UIN Maliki Malang'),
(16, '08012006070.jpg', 'pembelajaran siswa dikelas'),
(13, 'DSC09519.JPG', 'Gerak jalan'),
(15, 'P1010266.JPG', 'SMAN1S');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_jurusan`
--

CREATE TABLE IF NOT EXISTS `kategori_jurusan` (
  `id_jur` int(4) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `kategori_jurusan`
--

INSERT INTO `kategori_jurusan` (`id_jur`, `nama_jurusan`) VALUES
(14, 'XII IIPS 2'),
(13, 'XII IPS 1'),
(12, 'XII IPA 4'),
(11, 'XII IPA 3'),
(7, 'XII IPA 1'),
(10, 'XII IPA 2');

-- --------------------------------------------------------

--
-- Table structure for table `ketegori_tahun`
--

CREATE TABLE IF NOT EXISTS `ketegori_tahun` (
  `id_thun` int(4) NOT NULL AUTO_INCREMENT,
  `nama_thun` int(4) NOT NULL,
  PRIMARY KEY (`id_thun`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `ketegori_tahun`
--

INSERT INTO `ketegori_tahun` (`id_thun`, `nama_thun`) VALUES
(58, 2010),
(59, 2011),
(60, 2012);

-- --------------------------------------------------------

--
-- Table structure for table `perguruan_tinggi`
--

CREATE TABLE IF NOT EXISTS `perguruan_tinggi` (
  `id_pt` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pt` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_traffic`
--

CREATE TABLE IF NOT EXISTS `sys_traffic` (
  `Tanggal` date NOT NULL,
  `ipAddress` text NOT NULL,
  `Jumlah` int(10) NOT NULL,
  PRIMARY KEY (`Tanggal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_traffic`
--

INSERT INTO `sys_traffic` (`Tanggal`, `ipAddress`, `Jumlah`) VALUES
('2015-09-01', '::1{}', 20),
('2015-08-31', '::1{}', 1),
('2015-08-27', '::1{}', 2),
('2015-08-26', '::1{}', 29),
('2015-08-24', '::1{}', 68),
('2015-08-22', '::1{}', 56),
('2015-08-21', '::1{}', 96),
('2015-09-02', '::1{}', 143),
('2015-09-03', '::1{}', 159),
('2015-09-04', '::1{}', 205),
('2015-09-05', '::1{}', 113),
('2015-09-06', '::1{}', 137),
('2015-09-07', '::1{}', 16),
('2015-09-08', '::1{}', 6),
('2015-09-10', '::1{}', 24),
('2015-09-15', '::1{}', 77),
('2015-09-16', '::1{}', 12),
('2015-09-19', '::1{}', 45),
('2015-09-22', '::1{}', 51),
('2015-10-22', '::1{}', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
