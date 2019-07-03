-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2019 at 07:32 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `KMJ`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kimchhung', 'pechkimchhung@gmail.com', '$2y$10$sfiI9d19I6NXMq8CDUN1M.Idewk6n9frzVy22ql5Z8DgzMg285fBq', '9999999999', 1, '2017-07-27 23:52:47', '2019-07-02 09:50:15'),
(4, 'kmj', 'kmj@gmail.com', '$2y$10$3ICY8OWAyfbiPALRw0wcT.F7DW2vBTmZKbB.C4nosPdq.f.qVh2e.', '9999999990', 1, '2019-07-02 20:39:55', '2019-07-02 20:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `admin_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 3, 4, NULL, NULL),
(4, 7, 3, NULL, NULL),
(6, 3, 3, NULL, NULL),
(7, 1, 1, NULL, NULL),
(8, 1, 3, NULL, NULL),
(9, 1, 4, NULL, NULL),
(10, 4, 1, NULL, NULL),
(11, 4, 3, NULL, NULL),
(12, 4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Events', 'Events', '2019-07-02 09:52:18', '2019-07-02 09:52:18'),
(4, 'Tips', 'Tips', '2019-07-02 09:52:26', '2019-07-02 09:52:26'),
(5, 'Recommendation', 'Recommendation', '2019-07-02 09:52:34', '2019-07-02 09:52:34'),
(6, 'Story', 'Story', '2019-07-02 09:52:43', '2019-07-02 09:52:43');

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(171, 3, '2019-07-02 09:59:08', '2019-07-02 09:59:08'),
(172, 5, '2019-07-02 10:30:52', '2019-07-02 10:30:52'),
(173, 6, '2019-07-02 11:50:26', '2019-07-02 11:50:26'),
(174, 4, '2019-07-02 20:38:20', '2019-07-02 20:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `full_name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'king', 'king@gmail.com', 'Hello', '2019-07-02 11:21:02', '2019-07-02 11:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(24, 3, 170, '2017-08-03 23:24:28', '2017-08-03 23:24:28'),
(25, 3, 169, '2017-08-03 23:24:30', '2017-08-03 23:24:30'),
(26, 3, 167, '2017-08-03 23:24:33', '2017-08-03 23:24:33'),
(27, 2, 169, '2017-08-03 23:25:02', '2017-08-03 23:25:02'),
(28, 2, 170, '2017-08-03 23:25:24', '2017-08-03 23:25:24'),
(29, 2, 168, '2017-08-03 23:25:26', '2017-08-03 23:25:26'),
(31, 2, 166, '2017-08-03 23:25:28', '2017-08-03 23:25:28'),
(32, 2, 164, '2017-08-03 23:25:32', '2017-08-03 23:25:32'),
(33, 2, 163, '2017-08-03 23:25:34', '2017-08-03 23:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2017_06_19_070344_create_posts_table', 1),
(34, '2017_06_19_070731_create_tags_table', 1),
(35, '2017_06_19_070801_create_categories_table', 1),
(36, '2017_06_19_070824_create_category_posts_table', 1),
(37, '2017_06_19_070923_create_post_tags_table', 1),
(38, '2017_06_19_071000_create_admins_table', 1),
(39, '2017_06_19_071103_create_roles_table', 1),
(40, '2017_06_19_071125_create_admin_roles_table', 1),
(41, '2017_07_22_070234_create_permissions_table', 2),
(42, '2017_08_04_055752_likes', 3),
(43, '2019_06_27_141119_create_contact_us_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `for`, `created_at`, `updated_at`) VALUES
(4, 'Post-Create', 'post', '2017-07-22 01:21:37', '2017-07-22 01:21:37'),
(5, 'Post-update', 'post', '2017-07-22 01:22:27', '2017-07-22 01:22:27'),
(6, 'Post-Delete', 'post', '2017-07-22 01:22:40', '2017-07-22 01:22:40'),
(7, 'User-Create', 'user', '2017-07-22 01:23:05', '2017-07-22 01:23:05'),
(8, 'User-Update', 'user', '2017-07-22 01:23:24', '2017-07-22 01:23:24'),
(9, 'User-Delete', 'user', '2017-07-22 01:23:35', '2017-07-22 01:23:35'),
(10, 'Post-Publish', 'post', '2017-07-22 01:23:51', '2017-07-22 01:23:51'),
(11, 'Tag-CRUD', 'other', '2017-07-22 01:24:12', '2017-07-22 01:24:12'),
(12, 'Category-CRUD', 'other', '2017-07-22 01:24:20', '2017-07-22 01:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(3, 6),
(3, 10),
(4, 4),
(4, 5),
(4, 11),
(4, 12),
(5, 4),
(5, 9),
(5, 12),
(1, 6),
(1, 4),
(1, 12),
(1, 5),
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `slug`, `body`, `status`, `posted_by`, `image`, `created_at`, `updated_at`) VALUES
(171, 'EDM Cambodia Rave Ground – March 30th 2019', 'Cambodia EDM', 'edm', '<p><span style=\"font-size:14px\"><span style=\"color:#e74c3c\">Age Restriction</span>: 18 years old and above or born in the year of 2001.<br />\r\nEach ticket can be exchanged for 1 FREE Heineken bottle!</span></p>', 1, NULL, 'public/i41j8t6lboIdyWtHHrLHn8HZgGYH60p6xzYnfOy3.jpeg', '2019-07-02 09:59:08', '2019-07-02 10:03:16'),
(172, 'What to see and do around County Ground Taunton', 'travel', 'taunton', '<p><span style=\"font-size:16px\">County Ground Taunton is the home of Somerset County Cricket Club and will play host to three of this year&rsquo;s ICC Cricket World Cup 2019 matches. Located in&nbsp;<a href=\"https://www.booking.com/city/gb/taunton.html?aid=356980&amp;label=gog235jc-1DEghhcnRpY2xlcyiCAjjoB0gJWANoeIgBAZgBCbgBGcgBDNgBA-gBAfgBAogCAagCA7gCjqbu6AXAAgE&amp;sid=471071ca71830d354d8de85162e7e2fa\">Taunton</a>&nbsp;&ndash; Somerset county&rsquo;s major town &ndash; a visit to the grounds will put you within reach of some of the area&rsquo;s most alluring sights. When you&rsquo;re not caught up in your team&rsquo;s innings, you can explore the surrounding area for a taste of life in pastoral Somerset.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">While you&rsquo;re in the cricket mood, the Somerset Cricket Museum is worth a visit. The museum is adjoined to the grounds, and just the place to brush up on your county cricket knowledge. Wander through displays that depict as well as the local team&rsquo;s illustrious past, including anecdotal stories about Somerset cricket heroes. There&#39;s also a focus on the emergence of England women&rsquo;s cricket, alongside more generic displays for the cricket novice that track the development of cricket equipment. Perhaps the most appealing aspect of the museum is the 15th-century stone building itself &ndash; the last remaining building of the Augustinian monastery that was Taunton Priory, which was eventually dissolved by Henry VIII in 1539.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"\" src=\"https://bstatic.com/xdata/images/xphoto/1182x887/67518530.jpg?k=69745fae1b63c9a423093f49e378f732f9e80cd21cbbdbc81f24b0176e409cde&amp;o=?size=S\" style=\"height:300px; width:400px\" /></span></p>', 1, NULL, 'public/clv7AlJJOj8ym257Azzm9MUr2YiLgCPWDBPLVICO.jpeg', '2019-07-02 10:30:52', '2019-07-02 10:30:52'),
(173, 'How To Use Your Blog To Tell A Story', 'story blog', 'tellstory', '<p>A story can prick a conscience.</p>\r\n\r\n<p>A story can motivate into action. A story can cause outrage or empathy. A story can take a reader off of her sofa and on an adventure across the world.</p>\r\n\r\n<p>We often talk about using story in content marketing as a way to tell about our brand, our team, our product, or our service. We discuss&nbsp;<a href=\"http://todaymade.com/blog/tell-story/\" target=\"_blank\">how to use storytelling for businesses</a>&nbsp;as a way to make themselves more human. We give pointers on how to write copy&nbsp;in a story-like manner that would make it interesting to read.</p>\r\n\r\n<p>But what about telling a genuine story, free of the responsibility of&nbsp;<em>overtly</em>&nbsp;furthering your brand? In an age of&nbsp;<a href=\"http://coschedule.com/blog/long-form-content/\">long form content</a>, it makes sense to delve into telling stories online.</p>\r\n\r\n<p><a href=\"http://blog.bufferapp.com/science-of-storytelling-why-telling-a-story-is-the-most-powerful-way-to-activate-our-brains\" target=\"_blank\">Our brains like stories</a>. It makes them active, and if the story uses the right words, it causes our&nbsp;<a href=\"http://www.nytimes.com/2012/03/18/opinion/sunday/the-neuroscience-of-your-brain-on-fiction.html\" target=\"_blank\">brain to respond</a>&nbsp;as if what we were reading was really happening to us.</p>\r\n\r\n<p>Words that speak of action make our motor cortex buzz. Words that speak of textures get our sensory cortex alight. In other words, when we read a story, our brains light up like a meteor shower on a dark winter night.</p>\r\n\r\n<p>Our brain, on a diet of stories, is intense.</p>\r\n\r\n<blockquote>\r\n<p><a href=\"https://twitter.com/share?text=The+Play%27s+the+Thing%2C+wherein+I%27ll+catch+the+conscience+of+the+King.+-+Hamlet\" target=\"_blank\">The Play&rsquo;s the Thing, wherein I&rsquo;ll catch the conscience of the King. &ndash; Hamlet</a><a href=\"https://twitter.com/share?text=The+Play%27s+the+Thing%2C+wherein+I%27ll+catch+the+conscience+of+the+King.+-+Hamlet\" target=\"_blank\">Click To Tweet</a></p>\r\n</blockquote>\r\n\r\n<h2>What Makes A Good Story</h2>\r\n\r\n<p>No one will agree on what makes a good story completely.</p>\r\n\r\n<p>We all have our own tastes that dictates which kinds of stories we are drawn to, and the kind of language we prefer to read. But there are a few ways to consider &ldquo;good story&rdquo; as you create your own. There are also a few generalizations that can tentatively be applied across the board, no matter which approach to story you take.</p>\r\n\r\n<h3>1. Simplicity is best.</h3>\r\n\r\n<p>A simple plot is ideal. It is the convoluted plot that allows a soap opera to go on endlessly for 30 years.</p>\r\n\r\n<p>A simple plot, with simple motivations, will always be easier for you to write and a reader to follow. A simple plot can be deceptively complex, depending upon how you tell the story. Unique and conflicting points of view, jumping back and forth in time&ndash;these all make a simple plot compelling and deep. Can you sum up the plot in a sentence or two?</p>\r\n\r\n<p>Simple language that is clear and concise is also best.</p>\r\n\r\n<h3>2. Boring words don&rsquo;t work.</h3>\r\n\r\n<p><a href=\"http://www.nikkiwoodsmedia.com/12-cliches-writers-avoid/\" target=\"_blank\">Cliches</a>&nbsp;don&rsquo;t work.</p>\r\n\r\n<p>Phrases that have become common don&rsquo;t work. Our brain skips over phrases it is used to seeing without registering them as anything special. Common phrases (&ldquo;tough as nails&rdquo;) don&rsquo;t light up our brain.</p>\r\n\r\n<p>This isn&rsquo;t a license to write&nbsp;<a href=\"http://en.wikipedia.org/wiki/Purple_prose\" target=\"_blank\">purple prose</a>&nbsp;that is extravagant and excessive.&nbsp;In his&nbsp;<a href=\"http://www.amazon.com/Elmore-Leonards-10-Rules-Writing/dp/0061451460\" target=\"_blank\"><em>10 Rules Of Writing</em></a>, author Elmore Leonard ended his list with this:&nbsp;<em>Try to leave out the part that readers tend to skip.</em></p>\r\n\r\n<p>Leonard understood how people read books, whizzing by solid paragraphs of purple prose to get to the dialogue. The dialogue, after all, is where the characters develop, where they interact, where the action happens. Avoid cliches, but don&rsquo;t turn to purple prose to do so. Look for concise and unusual word pairings that readers&rsquo; brains haven&rsquo;t become accustomed to yet.</p>\r\n\r\n<h3>3. Get familiar with literary devices.</h3>\r\n\r\n<p>When telling a story, you can&rsquo;t avoid using&nbsp;<strong>literary elements</strong>, even if you wanted to. These include things like&nbsp;plot, dialog, setting, narrative, characters, mood, theme, and so on. Without them, there is no story.</p>\r\n\r\n<p>You could, however, avoid using&nbsp;<strong>literary techniques</strong>, though that would be a shame. These include things like allegory, irony, personification, metaphor, etc. They make your story richer.</p>\r\n\r\n<p>Even the simplest story becomes a real story when you use literary techniques. In&nbsp;<a href=\"http://en.wikipedia.org/wiki/The_Old_Man_and_the_Sea\" target=\"_blank\"><em>The Old Man And The Sea</em></a>, the plot could be summed up as &ldquo;an unlucky fisherman finally catches a marlin.&rdquo; Of course, Hemingway made that simple idea into much more than that, using conflict and allegory and imagery to tell something completely different.</p>\r\n\r\n<p>Use classic&nbsp;<a href=\"http://literarydevices.net/\" target=\"_blank\">literary devices</a>&nbsp;in your story if you&rsquo;re not sure how to make a &ldquo;boring&rdquo; story interesting. Once you realize how many&nbsp;<a href=\"http://en.wikipedia.org/wiki/Literary_technique\" target=\"_blank\">literary techniques</a>&nbsp;you can use to tell the same story, you won&rsquo;t suffer from the &ldquo;I don&rsquo;t have a story to tell&rdquo; syndrome that keeps you from giving storytelling a try.</p>', 1, NULL, 'public/n1h63AgXvRt0G0aPFjXkpanDLVi5M1SUE63TEwT4.png', '2019-07-02 11:50:26', '2019-07-02 11:50:26'),
(174, 'How to Find And Use Long Tail Keywords to Drive More Search Traffic Even If You’re A Beginner', 'Best tool in the world', 'findtool', '<h2>&nbsp;</h2>\r\n\r\n<p>To find long tail keywords, you need to get access to&nbsp;<a href=\"https://basicblogtips.com/online-marketing-tools.html\">keyword research tools</a>&nbsp;as they make the whole process much easier and faster.</p>\r\n\r\n<p>Personally I use and recommend premium tools like SEMrush for keyword research (but it&rsquo;s bit expensive which costs you $100 per month), so for this tutorial, we&rsquo;ll only discuss a few free tools. You can consider using any of the tools mentioned below for finding long tail keywords:</p>\r\n\r\n<ul>\r\n	<li>LSI Graph</li>\r\n	<li>Keywordtool.io</li>\r\n	<li>Ubersuggest</li>\r\n</ul>\r\n\r\n<p><strong>Quick note:&nbsp;</strong>Although Google&rsquo;s Keyword Planner is also a great free keyword research tool but it&rsquo;s used by too many people around the world (so you&rsquo;ll mostly end up finding highly competitive keywords) and doesn&rsquo;t provide highly accurate data. For beginners, you can give it a try as it can help you better understand keyword research and it&rsquo;s completely free to use.</p>\r\n\r\n<p>Let&rsquo;s pick Ubersuggest (by Neil Patel) tool for finding better keyword ideas for your next blog post. Let&#39;s assume that you want to target the keyword &ldquo;fitness apps.&rdquo;</p>\r\n\r\n<p>To find long-tail variations for that keyword, go to the&nbsp;<a href=\"https://neilpatel.com/ubersuggest/\">Ubersuggest tool</a>&nbsp;and enter that keyword. Here&rsquo;s what we get.</p>', 1, NULL, 'public/yeH6gFSnCbKPHljvfQpj0PZjtZqjxfWwdqlGQiFT.png', '2019-07-02 20:38:20', '2019-07-02 20:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(171, 4, '2019-07-02 09:59:08', '2019-07-02 09:59:08'),
(172, 4, '2019-07-02 10:30:52', '2019-07-02 10:30:52'),
(172, 5, '2019-07-02 10:30:52', '2019-07-02 10:30:52'),
(172, 7, '2019-07-02 10:30:52', '2019-07-02 10:30:52'),
(174, 5, '2019-07-02 20:38:20', '2019-07-02 20:38:20'),
(174, 6, '2019-07-02 20:38:20', '2019-07-02 20:38:20'),
(174, 7, '2019-07-02 20:38:20', '2019-07-02 20:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Editors', '2017-07-21 01:17:13', '2017-07-21 01:27:48'),
(3, 'Publisher', '2017-07-21 01:28:33', '2017-07-21 01:28:33'),
(4, 'Writer', '2017-07-21 01:28:38', '2017-07-21 01:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departing_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arriving_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `available_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `departing_time`, `arriving_time`, `price`, `available_date`, `created_at`, `updated_at`) VALUES
(1, '00:31', '12:22', 5.00, 'Jul2', '2019-07-02 06:16:41', '2019-07-02 06:16:41'),
(2, '12:31', '12:31', 5.00, 'Jul3', '2019-07-02 22:28:39', '2019-07-02 22:28:39'),
(3, '12:31', '00:03', 5.00, 'Jul3', '2019-07-02 22:28:47', '2019-07-02 22:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'room', 'room', '2019-07-02 09:50:38', '2019-07-02 09:50:38'),
(4, 'hotel', 'hotel', '2019-07-02 09:50:46', '2019-07-02 09:50:46'),
(5, 'plane', 'plane', '2019-07-02 09:51:19', '2019-07-02 09:51:19'),
(6, 'cinema', 'cinema', '2019-07-02 09:51:41', '2019-07-02 09:51:41'),
(7, 'train', 'train', '2019-07-02 09:51:49', '2019-07-02 09:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Sarthak Shrivastava', 'bitfumes@gmail.com', '$2y$10$5L.QBN0qXSZ8x9KuxSh65.E4aJtw5cAh901VXqHsfiHI72EfdH5dS', 'ZmfCotzspvRsk7tQVZamZpYyTHSM20SAPmLWjTg9DbWyNmA3Z7zEzTff9PSo', '2017-07-11 22:37:55', '2017-07-11 22:37:55'),
(3, 'Ankur Shrivastava', 'ankur@gmail.com', '$2y$10$l4ODE.jAzImO5cL7KJuK7Obok1VXHsDonQX9U/6aishfDfEyiyfaC', 'lMuCX5ZMe0yhEJPL7C2DcjgzKn5J1gY7UJYs35UL0iBmFoTvMdkysFBLTL4D', '2017-07-11 22:52:45', '2017-07-11 22:52:45'),
(4, 'Kimchhung', 'pechkimchhung@gmail.com', '$2y$10$sfiI9d19I6NXMq8CDUN1M.Idewk6n9frzVy22ql5Z8DgzMg285fBq', NULL, '2019-07-02 02:34:01', '2019-07-02 02:34:01'),
(5, 'putang', 'putang12@gmail.com', '$2y$10$ku3JUiHgFcp5NnyiMom4EuidrpQQx8Sckx443H8rf1vmtyeNL0N6e', NULL, '2019-07-02 21:55:47', '2019-07-02 21:55:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD KEY `category_posts_post_id_index` (`post_id`),
  ADD KEY `category_posts_category_id_index` (`category_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD KEY `post_tags_post_id_index` (`post_id`),
  ADD KEY `post_tags_tag_id_index` (`tag_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
