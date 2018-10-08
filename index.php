<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>Music Player</title>
        <link href="https://use.fontawesome.com/releases/v5.3.1/css/solid.css" rel="stylesheet"/>
        <link href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" rel="stylesheet"/>
        <link href="assets/css/style.css" rel="stylesheet"/>
    </head>
    <body>
        <div id="app-cover">
            <div id="bg-artwork"></div>
            <div id="bg-layer"></div>
            <div id="player">
                <div id="player-track">
                    <div id="album-name"></div>
                    <div id="track-name"></div>
                    <div id="track-time">
                        <div id="current-time"></div>
                        <div id="track-length"></div>
                    </div>
                    <div id="s-area">
                        <div id="ins-time"></div>
                        <div id="s-hover"></div>
                        <div id="seek-bar"></div>
                    </div>
                </div>
                <div id="player-content">
                    <div id="album-art">
                    <img src="http://k003.kiwi6.com/hotlink/8msy543338/1.jpg" class="active" id="_1">
                    <img src="http://k003.kiwi6.com/hotlink/ifpd9xk6n4/2.jpg" id="_2">
                    <img src="http://k003.kiwi6.com/hotlink/36u2tfrwiu/3.jpg" id="_3">
                    <img src="http://k003.kiwi6.com/hotlink/l633hnztuz/4.jpg" id="_4">
                    <img src="http://k003.kiwi6.com/hotlink/0yp24xn1o8/5.jpg" id="_5">
                    <div id="buffer-box">Carregando...</div>
                </div>
                <div id="player-controls">
                    <div class="control">
                        <div class="button" id="play-previous">
                            <i class="fas fa-backward"></i>
                        </div>
                    </div>
                    <div class="control">
                        <div class="button" id="play-pause-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="control">
                        <div class="button" id="play-next">
                            <div class="fas fa-forward"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
    </body>
</html>