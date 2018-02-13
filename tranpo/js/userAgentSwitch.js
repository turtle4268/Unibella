function AgentCheck(sp_url) {
	
	// useragent list
	var media = [
		'iPhone',
		'iPod',
		'Android.*Mobile',
		'Windows Phone'
	];

	var pattern = new RegExp(media.join('|'), 'i');

	if(pattern.test(navigator.userAgent)){
		location.href=sp_url;
	}
	delete pattern;
}



AgentCheck("index_sp.html")