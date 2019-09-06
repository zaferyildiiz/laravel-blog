-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Eyl 2019, 14:03:57
-- Sunucu sürümü: 10.3.16-MariaDB
-- PHP Sürümü: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `email`, `job_title`, `password`, `remember_token`) VALUES
(1, 'iletisimzafer52@hotmail.com', 'engineer', '$2y$10$BlBb3cgn5JOZLuwqYbe/zuXwX5jVuu7hZ1/ixGHOgmknZoI9KqK82', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `authorid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `hit` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `articles`
--

INSERT INTO `articles` (`id`, `authorid`, `title`, `slug`, `kategori_id`, `image_path`, `content`, `status`, `hit`, `date`) VALUES
(6, '1', 'Css3 Nedir ?', 'css3-nedir', 2, 'public/img/post/css3-nedir.jpg', '<p>CSS3\'ün ne olduğunu açıklamadan önce CSS\'in ne olduğunu bilmekte fayda var.Açılımı&nbsp;<em>Cascading Style Sheets</em>&nbsp;olan CSS dilimizde&nbsp;<em>Basamaklı Stil Sayfaları</em>&nbsp;anlamına gelmektedir. HTML ile yazılan kodların görsel açıdan daha zengin olmasını sağlamak için kullanılır. Örneğin; CSS ile paragrafların metin renklerini tek bir noktadan değiştirebilirsiniz. Burası önemlidir; çünkü CSS piyasaya çıkmadan önce her bir HTML etiketi için ayrı ayrı stil tanımlaması yapmamız gerekiyordu. CSS ile birlikte bu sorun ortadan kalktı. Artık tek bir dosya ile tüm sayfalarımızdaki içerikleri şekillendirebiliriz.</p>\r\n\r\n<p>CSS\'nin ilk harfi olan&nbsp;<em>cascading</em>&nbsp;(basamaklı) terimi ise ismini hiyerarşik olarak istenilen nesneye basamak basamak ulaşılabilir olmasından almaktadır. Örneğin bir alan (div) içindeki bir paragrafın ilk satırına<br />\r\n<em>div &gt; p:first-line</em>&nbsp;basamak yolu ile kolayca ulaşılabilir ve ulaşılan bu satır, tek bir kod satırı ile projenin tüm sayfalarında görsel olarak değiştirilebilir.</p>\r\n\r\n<p>CSS3, CSS\'in daha önceki sürümleri üzerine geliştirilmiş üçüncü ve son sürümüdür. Bu sürüm ile birlikte @media-queries, box-shadow, text-shadow, translate, transform, transition gibi birçok güzel özellik gelmiş, artık web siteleri görsel açıdan daha güçlü bir konuma erişmiştir.</p>\r\n\r\n<p>CSS3 ile birlikte gelen bir diğer özellik font-face teknolojisidir. CSS\'ten önce sayfamıza istediğimiz bir font\'u yükleyemiyorduk. Font gösterimleri için kullanıcının bilgisayarında yayınlamak istediğimiz fontun bulunması gerekiyordu. Bunu yapamadığımız zamanlarda sadece belirli resimlerde ilgili font\'u kullanmak zorunda kalıyorduk. CSS3 ile birlikte gelen @font-face kullanımı ile birlikte artık kullanıcının işletim sistemi ne olursa olsun dilediğimiz font\'u gösterebiliyoruz.</p>\r\n\r\n<p>CSS3\'ün öğrenimi ve kullanımı oldukça basittir. Yazılım öğrenilmeye başlamadan önce ilk olarak HTML ve CSS öğrenilmesi tavsiye edilir; çünkü kişinin kodlarla tanışması HTML ve CSS ile daha yerindedir.</p>\r\n\r\n<p>CSS3\'ü öğrendikçe bağımlısı olacak; daha önce yapmak isteyip de yapamadığınız tasarımları çok daha kolay bir şekilde yapabileceğinizi fark edeceksiniz.</p>', 1, 0, '2019-09-04 18:14:54'),
(7, '1', 'Html5 Nedir ?', 'html5-nedir', 1, 'public/img/post/html5-nedir.jpg', '<p>Günümüz web teknolojlerinde kullanımı yaygınlaşan ve pratik özelikleri sunması açısından kullanışlı olan HTML5’i temel ve orta seviyede sizlere anlatmaya çalışacağım.</p>\r\n\r\n<p>Daha ileri düzeyde tasarımları gerçekleştirmek ve çeşitlendirmek programcılara ve diğer web araçlarını(CSS3, JavaScript vb.) kullanabilme kabiliyetine kalmıştır. HTML5 hakkında düzenlenen makalelerin listesi ve ilgili sayfalara bağlantısı(yayınlananların) &nbsp;yazının sonunda&nbsp;maddeler halinde gösterilmiştir</p>\r\n\r\n<p>İnşallah sizlere faydalı bir yazı dizisi olacaktır.<br />\r\nHepinize kolaylıklar dilerim.</p>\r\n\r\n<hr />\r\n<p><strong>HTML (Hyper Text Markup Language)&nbsp;</strong>internet üzerinde web sayfası oluşturmak için kullanılan bir betik dilidir. HTML dosyaları .html&nbsp;ya da .htm uzantısı ile saklanır.&nbsp;HTML, W3C tarafından standartlaştırılmaktadır. Html, “etiket” ismi verilen çeşitli başlıklardan oluşur.</p>\r\n\r\n<p>HTML, bir programlama dili olarak tanımlanamaz. Zira HTML kodlarıyla kendi başına çalışan bir program yazılamaz. Ancak bu dili yorumlayabilen programlar (ASP, ASP.NET, PHP, JavaScript vb.) aracılığıyla çalışabilen programlar yazılabilir.</p>\r\n\r\n<p>Yani HTML, basitçe web sitelerinin kodlarıdır. Her web sitesinin arka planında kodlar yatar. Kullanıcı siteye girdiğinde tarayıcı bu kodları işler ve anlayabileceği web sayfalarını oluşturur.</p>\r\n\r\n<p>Dilin son sürümü HTML5’tir. HTML5 görselliğin ve pratik web ihtiyaçlarının giderilmesi açısından önemli bir aşama olarak görülmektedir.</p>\r\n\r\n<p>HTML5 halâ geliştirilme aşamasında olsa da günümüz web tasarımcılarının ekseriyeti artık bu yeni sürümü tercih etmektedir.</p>', 0, 0, '2019-09-04 18:26:38'),
(8, '1', 'Javascript Nedir ?', 'javascript-nedir', 3, 'public/img/post/javascript-nedir.jpg', '<p>Her an gelişen teknolojinin içindeki web sayfalarının, son dönemlerde güzel şekillerde süslenmesi, geliştirilmesi ve kullanım kolaylığı yaratması açısından web uygulamalarında farkında olmasak bile sıkça karşılaştığımız bir kavram javascript.<br />\r\n<br />\r\nPeki nedir bu javascript?<br />\r\n<br />\r\nBu sorunun yanıtını açıklamak konuya aşina olanlar için aslında basit. Ama web programcılığına yeni başlayan veya başlamak isteyenler için işin birazcık daha temeline iniyoruz;<br />\r\n<br />\r\nWeb sayfaları, masaüstü programlarının yanı sıra biraz daha farklı yapıya sahip olan yapılardır. Peki nedir bu fark?<br />\r\nBir masaüstü uygulaması, bilgisayarımız üzerinde çalışmaya başladığı andan, bizim onu kapattığımız ana kadar çalışırlar ve bizim işlemlerimizi gerçekleştirmemizi sağlarlar. Web sayfaları ise onları çağırdığımız anda, kaynak kodları web server ve yorumlayıcılardan milisaniyeler içerisinde geçerek, bizim HTML adını vermiş olduğumuz bir dile render edilerek sayfayı isteyen tarayıcıya gönderirlirler. Bu kodların bizim tarayıcımıza geldiği an, web sayfasındaki bütün kodların çalışıp, işlemleri yapıp bize sonucu geri döndükleri ve tüm işlerin bittiği andır. Yani herşey milisaniyeler içinde gelişitikten sonra sayfalar bize sadece statik (durağan) bir görüntü sunarlar.<br />\r\nİşte Javascript tam burada devreye girer. Bu karşımıza sunulan, HTML kodlarından oluşmuş görüntüyü dinamik hale getirmemize yarar bir nevi. Mesela web sayfasındaki bir nesneyi sürükleyip,&nbsp; sayfa içindeki başka bir alana bırakabilmek veya sayfa içindeki bir resmin üzerine geldiğimizde, yeni bir sayfa açılmaksızın resmin büyüyp ekranı kaplaması bu dinamizme örnek olabilir. Tüm bu dinamizmi yaratan kavram javascript\'tir.<br />\r\n<br />\r\nPeki bu nasıl olur?<br />\r\n<br />\r\nJavascript, HTML kodlarının arasında yazılıp tarayıcıya gönderilir. Tarayıcılarımız, bu kodları alıp yorumlayarak ekrandaki HTML nesnelerinin yer değiştirmesi, özellik değiştirmesi gibi işlemleri yaparlar. Yani javascript kodları, sunucumuzda yorumlanmak yerine, bizim bilgisayarımız üzerinde çalışırlar. Tüm bu dinamizmi yaratan olay da budur.<br />\r\n<br />\r\nSayfalarımıza nasıl ekleriz?<br />\r\n<br />\r\nJavascript kodlarını, HTML sayfalarımıza eklemek için 2 yöntem mevcuttur.<br />\r\nİlk olarak HTML kodlarının arasında, \"&lt;script type=\"text/javascript\"&gt;// Kodlar.....&nbsp; &lt;/script&gt;\" şeklindeki taglardan yararlanabiliriz. Küçük uygulamalarımız için yazması kolay bir yöntem olabilir. Fakat satırlarca uzayan animasyonlar v.b. uygulamalarımız için ideal olan, kodlarımızı ayrı bir dosyada yazarak, HTML içindeki, \"&lt;head&gt;&lt;/head&gt;\" etiketlerinin arasına, \"&lt;script type=\"text/javascript\" src=\"benim_dosyam.js\"&gt;&lt;/script&gt;\"&nbsp; etiketlerini ekleyerek&nbsp; kodlarımızı tanıtmamız mümkün.<br />\r\n<br />\r\nNasıl yazarız?<br />\r\n<br />\r\nJavascript, php gibi dillere aşina olanlar için çok ta zor olmayan bir yazım yapsına sahiptir. İlerleyen sayılarımızda, javascript\'i öğrenmeye başlayacağız.</p>', 1, 0, '2019-09-05 11:35:50'),
(9, '1', 'sfdsfdsfs', 'sfdsfdsfs', 3, 'public/img/post/sfdsfdsfs.jpg', '<p>sdfdsfdsfsd</p>', 0, 0, '2019-09-05 18:03:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`) VALUES
(1, 'Html5', 'html5'),
(2, 'Css3', 'css3'),
(3, 'Javascript', 'javascript');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` int(11) NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `fullname`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 6, 'Zafer Yıldız', 'zafer@gmail.com', 'Başarılı bir makale', '2019-09-04 20:24:59', '2019-09-04 20:24:59'),
(4, 6, 'Zafer Yıldız', 'zafer@gmail.com', 'Başarılı bir makale', '2019-09-04 20:28:36', '2019-09-04 20:28:36'),
(6, 6, 'Sedanur Yıldız', 'zafer@gmail.com', 'qweewqewqe', '2019-09-04 20:31:09', '2019-09-04 20:31:09'),
(7, 7, 'sadads', 'zafer@gmail.com', 'asdsdadsa', '2019-09-04 21:17:56', '2019-09-04 21:17:56'),
(8, 6, 'Sedanur Yıldız', 'seda@gmail.com', 'Pek iyi anlatım olmamış gibi...', '2019-09-05 11:33:44', '2019-09-05 11:33:44');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_23_192343_create_users_table', 1),
(2, '2019_08_26_115945_create_articles_table', 1),
(3, '2019_08_28_125919_create_categories_table', 1),
(4, '2019_08_28_221122_create_admins_table', 1),
(5, '2019_09_04_182823_create_comments_table', 2),
(6, '2019_09_05_120137_create_messages_table', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `rank`) VALUES
(1, 'Zafer Yıldız', 'zafer', 'iletisimzafer52@gmail.com', '$2y$10$wf7aVpKG9UV.5RJ5cZJWoePeyVH/JGjUsQUDU4Ro9ZEDrVXPe4tza', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Tablo için indeksler `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
