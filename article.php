<?php
require_once __DIR__ . '/includes/functions.php';
$slug = $_GET['slug'] ?? '';
$article = find_article($slug);
if (!$article) { http_response_code(404); echo 'Article not found'; exit; }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($article['title']) ?> | AliRazaSEO333</title>
<meta name="description" content="<?= e(article_excerpt($article['content'], 155)) ?>">
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="topbar"><div class="container nav">
<a class="brand" href="index.php"><img src="assets/aliraza.jpg" alt="Ali Raza"><span>AliRaza<span>SEO333</span></span></a>
<nav><a href="index.php#services">Services</a><a href="index.php#articles">Articles</a><a class="nav-btn" href="submit.php">Write an Article</a></nav>
</div></header>
<main class="article-page"><div class="container article-wrap">
<?php if (isset($_GET['published'])): ?><div class="alert success">Your article has been published successfully.</div><?php endif; ?>
<div class="tag"><?= e($article['category'] ?? 'SEO') ?></div>
<h1><?= e($article['title']) ?></h1>
<div class="meta"><?= e($article['author'] ?? 'Guest Author') ?> · <?= e($article['date'] ?? '') ?></div>
<?php if (!empty($article['url'])): ?><a class="source-link" href="<?= e($article['url']) ?>" target="_blank" rel="nofollow noopener">Visit website →</a><?php endif; ?>
<div class="article-content"><?= sanitize_content($article['content']) ?></div>
<a class="btn secondary" href="submit.php">Publish Another Article</a>
</div></main>
<footer><div class="container footer"><div><strong>AliRazaSEO333</strong> — Off-Page SEO Expert</div><a href="index.php">Home</a></div></footer>
</body>
</html>