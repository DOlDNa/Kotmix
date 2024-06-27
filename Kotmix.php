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
		echo '<img src="data:', image_type_to_mime_type($d), ';base64,', base64_encode(file_get_contents($e)), '" alt="', basename($e), '">';
		ob_flush();
	}
	unset($e, $d);
}
?><!doctype html><html lang=ja><head><meta charset=utf-8><meta name=viewport content="width=device-width,initial-scale=1"><title>Kotmix</title><style><?=$f='::-webkit-scrollbar{width:.5em}::-webkit-scrollbar:hover,::-webkit-scrollbar-corner:hover,::-webkit-scrollbar-thumb:hover{height:unset;width:unset}::-webkit-scrollbar-thumb{background:hotpink}body{background:#222;margin:0;user-select:none}'?>img{cursor:pointer;display:block;margin:0 auto;max-width:100%}menu{margin:0;padding:0;position:fixed;right:0;bottom:0;z-index:1;width:unset}menu a{opacity:.35;text-decoration:none;transition:opacity.5s}menu a:hover{opacity:1}</style><link rel=icon href="<?=$g='data:image/svg+xml,%3csvg%20xmlns%3d%22http%3a%2f%2fwww%2ew3%2eorg%2f2000%2fsvg%22%20fill%3d%22inherit%22%3e%3c%2fsvg%3e'?>"></head><body><?php ob_flush();
if (($a = glob('/var/tmp/*.tar.gz')) && isset($a[0]))
{
	$b = iterator_to_array(new RecursiveIteratorIterator(new RecursiveDirectoryIterator('phar://'. $a[0]), RecursiveIteratorIterator::CHILD_FIRST));
	natsort($b);
	foreach ($b as $c) a(b($c));
}
unset($a, $b, $c)?><script>[].slice.call(document.images).forEach(a=>a.onclick=i=>{w=window.open("javascript:opener.globalHTML"),d=w.document,s=d.createElement("script"),t=d.createElement("style"),l=document.createElement("link"),l.rel="icon",l.href="<?=$g?>",s.innerText='let b=document.body,c;b.onmousedown=e=>{b.style.cursor="grabbing",c=1,x=e.clientX,y=e.clientY,e.preventDefault()},b.onmouseup=()=>{b.style.cursor="grab",c=0},b.onmousemove=e=>{if(c)b.style.cursor="grabbing",b.scrollLeft-=(-x+(x=e.clientX)),b.scrollTop-=(-y+(y=e.clientY))}',t.innerText='<?=$f?>',d.write(i.target.outerHTML),d.head.appendChild(t),d.head.appendChild(s),d.head.appendChild(l),d.title=i.target.alt+" - "+document.title}),f=[],o=()=>window.scrollBy(0,1),g=()=>f.push(setInterval(o,25)),h=()=>{if(f.length)while(f.length)clearInterval(f.shift())},document.onkeydown=j=>{if("ScrollLock"===j.key)g();if("Pause"===j.key)h()}</script><menu><a href="javascript:g()">🔽</a><a href="javascript:h()">⏹</a><a href="javascript:(()=>%7Bdocument.querySelector(%22body%22).scrollIntoView(true)%7D)()">🔼</a></menu></body></html>
