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
?><!doctype html><html lang=ja><head><meta charset=utf-8><meta name=viewport content="width=device-width,initial-scale=1"><title>Kotmix</title><style>::-webkit-scrollbar{width:.5em}::-webkit-scrollbar-thumb{background:hotpink}body{background:#222;margin:0}img{cursor:pointer;display:block;margin:0 auto;max-width:100%}</style></head><body><?php ob_flush();
if (($a = glob('/var/tmp/*.tar.gz')) && isset($a[0]))
{
	$b = iterator_to_array(new RecursiveIteratorIterator(new RecursiveDirectoryIterator('phar://'. $a[0]), RecursiveIteratorIterator::CHILD_FIRST));
	natsort($b);
	foreach ($b as $c) a(b($c));
}
unset($a, $b, $c)?><script>[].slice.call(document.images).forEach(a=>a.onclick=i=>{w=window.open("javascript:opener.globalHTML"),d=w.document,s=d.createElement("script"),t=d.createElement("style"),s.innerText='let b=document.body,c;b.addEventListener("mousedown",e=>{b.style.cursor="grabbing",c=1,x=e.clientX,y=e.clientY,e.preventDefault()}),b.addEventListener("mouseup",()=>{b.style.cursor="grab",c=0}),b.addEventListener("mousemove",e=>{if(c)b.style.cursor="grabbing",b.scrollLeft-=(-x+(x=e.clientX)),b.scrollTop-=(-y+(y=e.clientY))})',t.innerText='::-webkit-scrollbar{height:.5em;width:.5em}::-webkit-scrollbar-thumb,::-webkit-scrollbar-corner{background:hotpink}body{background:#222;margin:0}',d.write(i.target.outerHTML),d.head.appendChild(t),d.head.appendChild(s),d.title=i.target.alt+" - "+document.title})</script></body></html>
