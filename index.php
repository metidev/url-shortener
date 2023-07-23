<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Url Shortener</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css"/>
</head>
<body>
<div class="wrapper">
    <form action="#">
        <input type="text" name="full-url" placeholder="Enter or paste a long url" required>
        <i class="url-icon uil uil-link"></i>
        <button>Shorten</button>
    </form>
    <div class="count">
        <span>Total Links: <span>10</span> & Total Clicks: 140</span>
        <a href="#">Clear All</a>
    </div>
    <div class="urls-area">
        <div class="title">
            <li>Shorten URL</li>
            <li>Original URL</li>
            <li>Clicks</li>
            <li>Action</li>
        </div>
        <div class="data">
            <li><a href="">example.com/xyz</a></li>
            <li>www.google.com/dsfgsdfesdsfsdsdfdsfdsfsfdsfdsf</li>
            <li>16</li>
            <li><a href="#">Delete</a></li>
        </div>
        <div class="data">
            <li><a href="">example.com/xyz</a></li>
            <li>www.google.com/dsfgsdfesdsfsdsdfdsfdsfsfdsfdsf</li>
            <li>16</li>
            <li><a href="#">Delete</a></li>
        </div>
        <div class="data">
            <li><a href="">example.com/xyz</a></li>
            <li>www.google.com/dsfgsdfesdsfsdsdfdsfdsfsfdsfdsf</li>
            <li>16</li>
            <li><a href="#">Delete</a></li>
        </div>
        <div class="data">
            <li><a href="">example.com/xyz</a></li>
            <li>www.google.com/dsfgsdfesdsfsdsdfdsfdsfsfdsfdsf</li>
            <li>16</li>
            <li><a href="#">Delete</a></li>
        </div>
    </div>
</div>
<div class="blur-effect">

</div>
    <div class="popup-box">
        <div class="info-box">Your short link is ready. You can also edit your short link now but can't edit once you saved it</div>
    	<form action="#">
            <label>Edit your shorten url</label>
            <input type="text" spellcheck="false" value="">
            <i class="copy-icon uil uil-copy-alt"></i>
			<button>Save</button>
        </form>
    </div>
</body>
<script type="text/javascript" src="script.js"></script>
</html>