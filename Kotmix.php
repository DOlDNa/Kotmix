<?php
ini_set('memory_limit', -1);
set_time_limit(0);
ob_implicit_flush(1);
function a($a)
{
	exec("nohup $a > /dev/null &");
}
function b($b)
{
	if ($d = @exif_imagetype($c = $b->getPathname()))
	{
		echo '
		<img src="data:', image_type_to_mime_type($d), ';base64,', base64_encode(file_get_contents($c)), '" alt="">';
		ob_flush();
	}
	unset($c, $d);
}
?>
<!doctype html>
<html lang=ja>
	<head>
		<meta charset=utf-8>
		<meta name=viewport content="width=device-width,initial-scale=1">
		<title>Kotmix</title>
		<style>body{background:#222;color:#ccc;margin:0}img{display:block;max-width:100%;margin:0 auto}#a{bottom:0;position:fixed;right:0}</style>
	</head>
	<body><?php
		if (($a = glob('/var/tmp/*.{tar,tar.gz,zip}', GLOB_BRACE)) && is_readable($a[0]))
			foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator('phar://'. $a[0]), RecursiveIteratorIterator::CHILD_FIRST) as $b) a(b($b));
		unset($a, $b)?>
		<select id=a onchange="a[this.value].scrollIntoView()" tabindex=0></select>
		<script>let b=window,d=document,a=d.images,c=a.length,f=d.getElementById('a');for(let i=0;i<c;i++){e=d.createElement('option'),e.value=e.text=a[i].dataset.value=i;f.appendChild(e);a[i].onclick=function(){let w=window.open();w.document.write(this.outerHTML)}}const g=new IntersectionObserver(entries=>{entries.forEach(entry=>{if(entry.isIntersecting)f.value=entry.target.dataset.value})}),h=d.querySelectorAll('img');h.forEach(h=>g.observe(h))</script>
	</body>
</html>
