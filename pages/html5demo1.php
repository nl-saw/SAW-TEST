<!doctype html>
<html>
	<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=0;" />
	<title>OMG! Snow!</title>
	</head>
	<body>
	<canvas></canvas>
	<script>
		var c = document.getElementsByTagName('canvas')[0];
		var b = document.body;
		var a = c.getContext('2d');
	</script>
	<script>
		D=b.style,f=window;D.margin=0;D.overflow="hidden";i=f.innerWidth,j=f.innerHeight;c.width=i;c.height=j;k=Math,l=k.random,n=k.sin,p=k.floor,q=20,r=[],s=k.PI;function t(d){d.b=d.x=(l()*i-i*.5)*q;d.c=d.y=(l()*j-j*.15)*q;d.a=q;d.d=l()}for(var v=0,w;v<300;v++){w={};t(w);r.push(w)}setInterval(function(){a.fillStyle="rgba(64,64,64,.8)";a.fillRect(0,0,i,j);for(var d=0;d<300;d++){var b=r[d],o=n(s)*132-16,u=b.x/b.a,e=u+i/2-o,g=o=b.y/b.a,m=l()*360,x=b.a>q-5?(q-b.a)/5:1,h=q-b.a-3;a.fillStyle="hsla("+p(m)+",50%,95%,"+x+")";a.beginPath();if(b.a<q-6){a.save();a.translate(e,g);a.rotate(b.d*(d%2?1:-1)*(d%3/2+.1));g=0;e=h/(d%4+2);for(m=h/(d%3+1);g<6;g++){a.lineTo(-e,m);a.lineTo(0,h);a.lineTo(e,m);a.lineTo(0,0);a.rotate(k.PI/3)}a.fill();if(d%2==0){g=0;for(e=h/(d%5+1);g<6;g++){a.beginPath();a.moveTo(0,h);a.lineTo(-e,h-e);a.lineTo(0,h-e);a.lineTo(e,h-e);a.fill();a.rotate(k.PI/3)}}a.restore()}else{a.arc(e,g,1/b.a*5+4,0,k.PI*2,true);a.fill()}b.b=u;b.c=o;b.a-=.15;b.d+=l()/5;if(b.a<.15||b.b<-i/2||b.b>i/2||b.c>j)t(b);s+=k.PI/2}},40);
	</script>
	</body>
</html>