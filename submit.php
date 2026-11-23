<?php
require_once __DIR__ . '/includes/functions.php';
$message = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = create_article($_POST);
    if ($result['ok']) {
        header('Location: article.php?slug=' . urlencode($result['slug']) . '&published=1');
        exit;
    }
    $error = $result['error'];
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Write an Article | AliRazaSEO333</title>
<meta name="description" content="Publish an SEO article on AliRazaSEO333.">
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="topbar"><div class="container nav">
<a class="brand" href="index.php"><img src="assets/aliraza.jpg" alt="Ali Raza"><span>AliRaza<span>SEO333</span></span></a>
<nav><a href="index.php#services">Services</a><a href="index.php#articles">Articles</a></nav>
</div></header>
<main class="form-page"><div class="container narrow">
<div class="eyebrow">PUBLIC ARTICLE PUBLISHING</div>
<h1>Write & Publish an Article</h1>
<p class="lead">Anyone can submit an article. After submission, the article is published on this website with its own page.</p>
<?php if ($error): ?><div class="alert error"><?= e($error) ?></div><?php endif; ?>
<form class="publish-form" method="post">
<label>Article Title<input name="title" required maxlength="180" placeholder="Enter your article title"></label>
<div class="two">
<label>Your Name<input name="author" required maxlength="80" placeholder="Author name"></label>
<label>Category<input name="category" maxlength="60" placeholder="SEO, Marketing, Business..."></label>
</div>
<label>Website URL <span class="hint">(optional)</span><input type="url" name="url" placeholder="https://example.com"></label>
<label>Article Content<textarea name="content" required rows="18" placeholder="Write your article here..."></textarea></label>
<p class="small">Basic HTML links are allowed. Script and unsafe HTML are removed automatically.</p>
<button class="btn primary wide" type="submit">Publish Article</button>
</form>
</div></main>
<footer><div class="container footer"><div><strong>AliRazaSEO333</strong></div><a href="index.php">Back to home</a></div></footer>
</body>
</html>