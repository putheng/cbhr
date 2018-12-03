@yield('title')
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<link rel="shortcut icon" href="/images/logo-3.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="/images/my-logo-3.png">
<link href="/css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="/css/main.css" rel='stylesheet' type='text/css'>
<script src="/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
    function fbShare(url) {
        var winTop = (screen.height / 2) - (350 / 2);
        var winLeft = (screen.width / 2) - (520 / 2);
        window.open('http://www.facebook.com/sharer.php?u='+url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + 520 + ',height=' + 350);
    }
</script>