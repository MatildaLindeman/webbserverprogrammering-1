<title><?php echo "{$blogpost['title']} - Läxhjälpens ->
	blogg"; ?></title>

<body class="subpage">
<?php
require "masthead.php";
Require "menu.php";

echo <<<MAIN
<div role="main">
	<article class="singleblogpost">
	<h2>{$blogpost['title']}</h2>
	<p><small>Postad {$blogpost['pubdate']} av
		{$blogpost['username']}</small>
		<div class="blogtext">
		{$blogpost['text']}
</div>

<!-- Här ska kommentarer listas i framtiden, samt ett fomulär för att skriva kommentarer finnas -->

</article>
</div>
MAIN;

require "footer.php";
?>
</body>