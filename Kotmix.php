<?php
ini_set('memory_limit', -1);
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
function a($a)
{
	`$a > /dev/null &`;
	posix_kill(getmypid(), 28);
}
function b($b)
{
	if ($b->isFile() && $d = exif_imagetype($e = $b->getPathname()))
	{
		echo '<img decoding=async src="data:', image_type_to_mime_type($d), ';base64,', base64_encode(file_get_contents($e)), '" alt="', basename($e), '">';
		ob_flush();
	}
	unset($e, $d);
}
?>
<!doctype html>
<html lang=ja>
	<head>
		<meta charset=utf-8>
		<meta name=viewport content="width=device-width,initial-scale=1">
		<title>Kotmix</title>
		<style>body{background:#222;color:#ccc;margin:0}img{cursor:pointer;display:block;margin:0 auto;max-width:100%}</style>
	</head>
	<body><?php ob_flush();
		if (($a = glob('/var/tmp/*.tar.gz')) && isset($a[0]))
		{
			$b = iterator_to_array(new RecursiveIteratorIterator(new RecursiveDirectoryIterator('phar://'. $a[0]), RecursiveIteratorIterator::CHILD_FIRST));
			natsort($b);
			foreach ($b as $c) a(b($c));
		}
		unset($a, $b, $c)?><script>let i,w,a=document.images;for(i in a){a[i].onclick=function(){w=window.open(),d=w.document,s=d.createElement('script');s.innerText='let b=document.body,c;b.addEventListener("mousedown",function(e){b.style.cursor="grabbing";c=1;x=e.clientX;y=e.clientY;e.preventDefault()});b.addEventListener("mouseup",function(){b.style.cursor="grab";c=0});b.addEventListener("mousemove",function(e){if(c){b.style.cursor="grabbing";b.scrollLeft-=(-x+(x=e.clientX));b.scrollTop-=(-y+(y=e.clientY))}})';d.write(this.outerHTML);d.title=this.alt+' - '+document.title;d.body.style.backgroundColor='#222';d.body.style.margin=0;d.body.appendChild(s)}}</script>
	</body>
</html>
