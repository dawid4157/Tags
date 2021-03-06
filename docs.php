<?php error_reporting(E_ALL); ini_set('display_errors', 1);	?>
<?php require_once 'class.Tags.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
	<?= $tags->title('Tags v 1.0 - Documentation by dawid4157'); ?>
	<?= $tags->link('stylesheet', 'style.css'); ?>
</head>
<body>
	<h1>Tags v 1.0 - Documentation by dawid4157</h1>
	<h1>Method: url(); </h1>
		<p>With this method you can use the link attributes as function parameters.</p>
		<p>Available function parameters</p>
		<ul>
			<li>URL link</li>
			<li>Visible text of the link</li>
			<li>Target</li>
			<ul>
				<li>0 - _self</li>
				<li>1 - _blank</li>
				<li>2 - _parent</li>
				<li>3 - _top</li>
			</ul>
			<li>CSS - inline style(optional)</li>
			<li>Class(optional)</li>
			<li>ID(optional)</li>
		</ul>
	<h2>Structure</h2>
		<p style="font-family: courier">$tags->url(url_adres[str], text_inside_link[str], target[int], style[str, optional], class[str, optional], id[str, optional]);</p>
	<h2>Examples</h2>
	<p>Use of links</p>
	<ul>
		<li><?= $tags->url('http://google.com', 'I`m a link. I have target: _self'); ?></li>
		<li><?= $tags->url('http://google.com', 'I`m a red link. I have target: _self', false, 'color: red'); ?></li>
		<li><?= $tags->url('http://google.com', 'I`m a green link I have target: _blank', 1); ?></li>
		<li><?= $tags->url('http://google.com', 'I`m a green link with `green` class. I have target: _blank', 1, 'color: green', 'green'); ?></li>
		<li><?= $tags->url('http://google.com', 'I`m a link. I have target: _parent', 2); ?></li>
		<li><?= $tags->url('http://google.com', 'I`m a blue link with `blue` ID. I have target: _parent', 2, 'color: blue', false, 'blue'); ?></li>
		<li><?= $tags->url('http://google.com', 'I`m a pink I have target: _top', 3); ?></li>
		<li><?= $tags->url('http://google.com', 'I`am a pink link with `pink` class and `pink_2` ID. I have target: _top', 3, 'color: deeppink', 'pink', 'pink_2'); ?></li>
	</ul>
	<hr>
	<h1>Method: image(); </h1>
		<p>This method can use the image attributes as a function.</p>
	<h2>Structure</h2>
		<p style="font-family: courier">$tags->image(url_adres[str], alt[str] ,style[str, optional], class[str, optional], id[str, optional]);</p>
	<h2>Examples</h2>
	<p>Image link</p>
	<ul>
		<p>You can insert an instance of a class into an existing instance: </p>
		<li>
			<?php $img = $tags->image('http://forum.bladeandsoul.com.pl/download/file.php?avatar=446_1452981972.jpg', 'Lack image'); ?>
			<?= $tags->url('http://google.com', $img); ?>
		</li>
		<p>The photo without a link</p>
		<li><?= $tags->image('https://vintage.ponychan.net/chan/files/src/131999656437.png', 'Lack image'); ?></li>
	</ul>
	<h1>Method: link(); </h1>
		<p>Use this CSS style outer style signature method</p>
	<h2>Structure</h2>
		<p style="font-family: courier">$tags->link(rel[str], href[str]);</p>
	<h1>Method: title(); </h1>
		<p>This method set title in browser bar.</p>
	<h2>Structure</h2>
		<p style="font-family: courier">$tags->title(title[str]);</p>
</body>
</html>
