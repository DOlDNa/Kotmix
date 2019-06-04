<!doctype html>
<html lang=ja>
	<head>
		<meta charset=utf-8>
		<meta name=viewport content="width=device-width,initial-scale=1">
		<title>Kotmix</title>
		<style>body{background:#222;color:#ccc;margin:0}img{cursor:zoom-in;display:block;max-width:100%;margin:0 auto}#a{bottom:0;position:fixed;right:0}</style>
	</head>
	<body>
		<?php
		if ($a = glob('/var/tmp/*.{tar,tar.gz,zip}', GLOB_BRACE))
		{
			$b = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('phar://'. $a[0]), RecursiveIteratorIterator::CHILD_FIRST);
			foreach ($b as $c) if ($e = @exif_imagetype($d = $c->getPathname())) echo '<img src="data:', image_type_to_mime_type($e), ';base64,', base64_encode(file_get_contents($d)), '" alt="">';
		}
		?>

		<select id=a onchange="a[this.value].scrollIntoView()" tabindex=0></select>
		<script>let b=window,d=document,a=d.images,c=a.length,f=d.getElementById('a');for(let i=0;i<c;i++){e=d.createElement('option'),e.value=e.text=a[i].dataset.value=i;f.appendChild(e);a[i].onclick=function(){if(!this.style.width)this.style.cssText='cursor:zoom-out;height:100%;width:100%';else this.style=''}}const g=new IntersectionObserver(entries=>{entries.forEach(entry=>{if(entry.isIntersecting)f.value=entry.target.dataset.value})}),h=d.querySelectorAll('img');h.forEach(h=>g.observe(h))</script>
	</body>
</html>
