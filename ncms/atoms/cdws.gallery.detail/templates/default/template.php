<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <style>
        @keyframes blink-silver {
            0%, 50%, 100% {
                background-color: rgba(40, 40, 40, 0.7);
            }
            15% {
                background-color: rgba(184, 181, 183, 1);
            }
        }
        * {
            /*border: 1px dotted gray;*/
        }
        html {
            margin: 0;
        }
        body {
            background: rgb(30,30,30);
            margin: 0;
        }
        div#cdws_gallery_detail_header {
            background-color: rgb(40, 40, 40);
            top: 0;
            left: 0;
            position: fixed;
            height: 70px;
            line-height: 70px;
            width: 100%;
        }
        div#cdws_gallery_detail_header h1 {
            margin: 0;
            height: inherit;
            line-height: inherit;
            padding-left: 35px;
            color: silver;
        }
        div#cdws_gallery_detail_header div.close_button {
            height: 70px;
            width: 70px;
            position: absolute;
            top: 0;
            right: 0;
            background: rgba(255, 1, 0, 0.4);
            transition: 0.4s;
            cursor: pointer;
        }
        div#cdws_gallery_detail_header div.close_button:hover {
            background: rgba(255, 1, 0, 1);
            transition: 0.15s;
        }
        div.cdws_gallery_scroll {
            height: 280px;
            width: 35px;
            background: rgba(40, 40, 40, 0.7);
            position: fixed;
            margin-top: 25%;
            top: -140px;
            transition: 0.4s;
            cursor: pointer;
        }
        div.cdws_gallery_scroll:hover {
            background: rgba(40, 40, 40, 1);
            transition: 0.15s;
        }
        div.cdws_gallery_scroll.prev {
            left: 0px;
            border-radius: 0 30px 30px 0;
        }
        div.cdws_gallery_scroll.next {
            right: 0px;
            border-radius: 30px 0 0 30px;
        }
        div.cdws_gallery_scroll.blink-silver {
            animation: blink-silver 1.5s linear infinite;
        }
        div#cdws_gallery_detail_img {
            height: 130px;
            width: 70px;
            margin: 80px auto 0 auto;
            background-position: 50% 50%;
            background-size: contain;
            background-repeat: no-repeat;
        }
        div#cdws_gallery_detail_description {
            background: rgb(245,245,245);
            margin: 20px auto;
            padding: 10px 0;
            height: auto;
            width: 600px;
        }
        div#cdws_gallery_detail_description p {
            padding: 0 10px;
        }
        div#cdws_gallery_detail_description a {
            color: rgb(40, 40, 40);
            font-weight: 700;
        }
    </style>
</head>
<body>
<script>
    if (!CDWS) var CDWS = {};
    if (!CDWS.Gallery) CDWS.Gallery = {};
    CDWS.Gallery.FullImg = {};

    CDWS.Gallery.Scroll = function (direction, buttonPressed) {
        buttonPressed.className += ' blink-silver';
        setTimeout(
            function() {
                document.getElementsByClassName('blink-silver')[0].className = document.getElementsByClassName('blink-silver')[0].className.replace('blink-silver', '').trim();
            },
            4400
        )
    }

    CDWS.Gallery.FullImg.Resize = function() {
        var full = document.getElementById('cdws_gallery_detail_img');
        full.style.height = window.innerHeight - 90 + 'px';
        full.style.width = window.innerWidth - 115 + 'px';
    }
</script>
<div id="cdws_gallery_detail_header">
    <h1>Название изображения</h1>
    <div class="close_button"></div>
</div>
<div id="cdws_gallery_detail_img" style="background-image:url('/ncms/upload/gallery/20171203114037295263.jpg')"></div>
<script>CDWS.Gallery.FullImg.Resize()</script>
<div id="cdws_gallery_detail_description">
    <p>Some funny text</p>
    <p>It'll descript the picture you see</p>
    <p>It'll tale 3-5 lines</p>
    <p>And some <a href="#">link maybe</a></p>
</div>
<div class="cdws_gallery_scroll prev" onclick="CDWS.Gallery.Scroll('prev', this)"></div>
<div class="cdws_gallery_scroll next" onclick="CDWS.Gallery.Scroll('next', this)"></div>
</body>
</html>