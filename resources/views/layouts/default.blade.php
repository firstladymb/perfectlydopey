<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <!-- Page title -->
        <title>Template Generator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Raleway:300,500,800|Source+Sans+Pro:100,300,400,600,700,900" rel="stylesheet" type="text/css" />

        <!-- Styles -->
        <link rel="stylesheet" href="css/slides.css" name="main-styles">
        <link rel="stylesheet" href="/css/chartist-plugin-tooltip.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
        <script src="js/plugins.js" type="text/javascript" name="plugins"></script>
        <script src="js/slides.js" type="text/javascript" name="main-scripts"></script>      
    </head>

    <body class="slides animated">

        <!-- SVG Library -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
            <symbol id="logo" viewBox="0 0 106 31"><path d="M17.413 14.04c-.56-5.84-5.6-7-8.52-7-4.6 0-8.6 2.92-8.6 7.52 0 3 2.4 4.88 5.28 5.8 4.24 1.64 5.88 1.84 5.88 3.36 0 1.08-1.2 1.72-2.32 1.72-.28 0-2.24 0-2.52-2.04h-6.6c.6 5.84 5.68 7.36 9.04 7.36 4.92 0 9.04-2.88 9.04-7.76 0-4.8-4-5.92-7.76-6.96-1.76-.52-3.4-1.2-3.4-2.2 0-.6.48-1.48 1.88-1.48 1.96 0 2.04 1.2 2.08 1.68h6.52zm2.222 15.96h6.64v-29.6h-6.64v29.6zm9.662-24.56h6.64v-5.04h-6.64v5.04zm0 24.56h6.64v-22.2h-6.64v22.2zm32.782-29.6h-6.64v9.28c-.72-.72-2.6-2.64-6.52-2.64-5.64 0-11 4.28-11 11.8 0 6.68 4.4 11.88 11.12 11.88 4.48 0 6.08-2.2 6.72-3.12v2.4h6.32v-29.6zm-17.52 18.4c0-2.56 1.8-5.56 5.64-5.56 1.56 0 2.96.56 3.96 1.56 1 .96 1.64 2.32 1.64 3.92.08 1.64-.52 3.08-1.56 4.12s-2.52 1.68-4.12 1.68c-3.12 0-5.56-2.28-5.56-5.68v-.04zm42.502 2.4c.52-4.08-.32-7.64-3.12-10.64-2.08-2.2-5-3.52-8.4-3.52-6.76 0-11.64 5.72-11.64 11.92 0 6.6 5.4 11.76 11.76 11.76 2.28 0 4.48-.68 6.32-2 1.88-1.28 3.44-3.2 4.52-5.68h-6.8c-.8 1.16-1.92 2.08-4.04 2.08-2.6 0-4.84-1.56-5.12-3.92h16.52zm-16.44-5.04c.16-1.04 1.52-3.52 4.96-3.52s4.8 2.48 4.96 3.52h-9.92zm34.502-2.12c-.56-5.84-5.6-7-8.52-7-4.6 0-8.6 2.92-8.6 7.52 0 3 2.4 4.88 5.28 5.8 4.24 1.64 5.88 1.84 5.88 3.36 0 1.08-1.2 1.72-2.32 1.72-.28 0-2.24 0-2.52-2.04h-6.6c.6 5.84 5.68 7.36 9.04 7.36 4.92 0 9.04-2.88 9.04-7.76 0-4.8-4-5.92-7.76-6.96-1.76-.52-3.4-1.2-3.4-2.2 0-.6.48-1.48 1.88-1.48 1.96 0 2.04 1.2 2.08 1.68h6.52z"/></symbol>
            <symbol id="logo-icon" viewBox="0 0 50 41"><path d="M4,12h42c2.2,0,4,1.8,4,4v21c0,2.2-1.8,4-4,4H4c-2.2,0-4-1.8-4-4V16C0,13.8,1.8,12,4,12z"/><path opacity="0.6" d="M45.5,9h-41C3.7,9,3,8.3,3,7.5v0C3,6.7,3.7,6,4.5,6h41C46.3,6,47,6.7,47,7.5v0C47,8.3,46.3,9,45.5,9z"/><path opacity="0.4" d="M7.5,0h35C43.3,0,44,0.7,44,1.5v0C44,2.3,43.3,3,42.5,3h-35C6.7,3,6,2.3,6,1.5v0C6,0.7,6.7,0,7.5,0z"/></symbol>
            <symbol id="close" viewBox="0 0 30 30"><path d="M15 0c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm5.7 19.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-4.3-4.3-4.3 4.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l4.3-4.3-4.3-4.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4.3 4.3 4.3-4.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4.3 4.3 4.3 4.3z"/></symbol>
            <symbol id="back" viewBox="0 0 20 20"><path d="M2.3 10.7l5 5c.4.4 1 .4 1.4 0s.4-1 0-1.4l-3.3-3.3h11.6c.6 0 1-.4 1-1s-.4-1-1-1h-11.6l3.3-3.3c.4-.4.4-1 0-1.4-.2-.2-.4-.3-.7-.3s-.5.1-.7.3l-5 5c-.2.2-.3.5-.3.7 0 .2.1.5.3.7z"/></symbol>
            <symbol id="menu" viewBox="0 0 22 22"><path d="M1 5h20c.6 0 1-.4 1-1s-.4-1-1-1h-20c-.6 0-1 .4-1 1s.4 1 1 1zm20 5h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1zm0 7h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1z"/></symbol>
            <symbol id="share" viewBox="0 0 22 22"><path d="M21 10c-.6 0-1 .4-1 1v7h-18v-7c0-.6-.4-1-1-1s-1 .4-1 1v7c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2v-7c0-.6-.4-1-1-1zM5.5 7.5c.3 0 .5-.1.7-.3l3.8-3.8v9.6c0 .6.4 1 1 1s1-.4 1-1v-9.6l3.8 3.8c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4l-5.5-5.5c-.1-.1-.2-.2-.3-.2-.2-.1-.5-.1-.8 0l-.3.2-5.5 5.5c-.4.4-.4 1 0 1.4.2.2.4.3.7.3z"/></symbol>
            <symbol id="facebook" viewBox="0 0 24 24"><path d="M24 1.3v21.3c0 .7-.6 1.3-1.3 1.3h-6.1v-9.3h3.1l.5-3.6h-3.6v-2.2c0-1.1.3-1.8 1.8-1.8h1.9v-3.2c-.3 0-1.5-.1-2.8-.1-2.8 0-4.7 1.7-4.7 4.8v2.7h-3.1v3.6h3.1v9.2h-11.5c-.7 0-1.3-.6-1.3-1.3v-21.4c0-.7.6-1.3 1.3-1.3h21.3c.8 0 1.4.6 1.4 1.3z"/></symbol>
            <symbol id="fb-like" viewBox="0 0 20 20"><path d="M0 8v12h5v-12h-5zm2.5 10.8c-.4 0-.8-.3-.8-.8 0-.4.3-.8.8-.8s.8.3.8.8c0 .4-.4.8-.8.8zm3.5-.8h9.5c1.1 0 1.7-1 1.7-1.7 0-.3-.4-1-.4-1 1.4-.3 1.7-1.2 1.7-1.7-.1-.5-.3-.9-.5-1 1-.4 1.5-1.1 1.4-1.9-.1-.8-1-1.5-1-1.5 1-.6.9-1.5.9-1.5-.3-1.3-1.5-1.7-1.7-1.7h-5.6s.3-.5.3-2.4-1.3-3.6-2.6-3.6c0 0-.7.1-1 .3v3.5l-2.7 4.4v9.8z"/></symbol>
            <symbol id="twitter" viewBox="0 1 24 23"><path d="M21.5 7.6v.6c0 6.6-5 14.1-14 14.1-2.8 0-5.4-.8-7.6-2.2l1.2.1c2.3 0 4.4-.8 6.1-2.1-2.2 0-4-1.5-4.6-3.4.3.1.6.1.9.1.5 0 .9-.1 1.3-.2-2.1-.6-3.8-2.6-3.8-5 .7.4 1.4.6 2.2.6-1.3-.9-2.2-2.4-2.2-4.1 0-.9.2-1.8.7-2.5 2.4 3 6.1 5 10.2 5.2-.1-.4-.1-.7-.1-1.1 0-2.7 2.2-5 4.9-5 1.4 0 2.7.6 3.6 1.6 1-.3 2.1-.7 3-1.3-.4 1.2-1.1 2.1-2.2 2.7 1-.1 1.9-.4 2.8-.8-.6 1.1-1.4 2-2.4 2.7z"/></symbol>
            <symbol id="dribbble" viewBox="0 0 24 24"><path d="M12 0c-6.7 0-12 5.3-12 12s5.3 12 12 12 12-5.3 12-12-5.3-12-12-12zm7.9 5.7c1.3 1.7 2.1 3.9 2.3 6.1-.4-.1-2.4-.4-4.7-.4-.8 0-1.5 0-2.3.1 0-.1-.1-.3-.3-.5l-.7-1.5c3.7-1.4 5.3-3.4 5.7-3.8zm-7.9-3.8c2.5 0 4.9.9 6.7 2.5-.3.4-1.9 2.3-5.2 3.6-1.6-2.9-3.3-5.3-3.7-5.9.6-.1 1.4-.2 2.2-.2zm-4.4 1c.4.6 2.1 3 3.7 5.8-4.4 1.2-8.2 1.2-9.2 1.2h-.1c.8-3.1 2.9-5.6 5.6-7zm-5.7 9.1v-.3h.3c1.2 0 5.6-.1 10.1-1.5l.8 1.6c-.1 0-.3 0-.4.1-5.1 1.6-7.9 6-8.3 6.7-1.6-1.7-2.5-4.1-2.5-6.6zm10.1 10.1c-2.3 0-4.4-.8-6.1-2.1.3-.5 2.4-4.4 7.9-6.3 1.3 3.6 2 6.7 2.1 7.6-1.2.6-2.6.8-3.9.8zm5.7-1.8c-.1-.8-.7-3.6-2-7.1.7-.1 1.3-.1 2-.1 2.1 0 3.7.4 4.1.5-.3 2.8-1.8 5.2-4.1 6.7z"/></symbol>
            <symbol id="youtube" viewBox="0 0 24 24"><path d="M23.6 6.3c-.3-1.2-1.4-2.2-2.6-2.3-3-.3-6-.3-9-.3s-6 0-9 .3c-1.2.1-2.3 1.1-2.6 2.3-.4 1.8-.4 3.8-.4 5.7 0 1.9 0 3.9.4 5.7.3 1.2 1.4 2.2 2.6 2.3 3 .3 6 .3 9 .3s6 0 9-.3c1.3-.1 2.3-1.1 2.6-2.4.4-1.7.4-3.7.4-5.6 0-1.9 0-3.9-.4-5.7zm-14.1 9v-6.6l6.5 3.3-6.5 3.3z"/></symbol>
            <symbol id="pinterest" viewBox="0 0 24 24"><path d="M5.9 13.9c1.2-2-.4-2.5-.6-4-1-6.1 7.1-10.2 11.4-6 2.9 2.9 1 12-3.7 11-4.6-.9 2.2-8.1-1.4-9.5-3-1.1-4.6 3.6-3.2 5.9-.8 4-2.5 7.7-1.8 12.7 2.3-1.7 3.1-4.8 3.7-8.1 1.2.7 1.8 1.4 3.3 1.5 5.5.4 8.6-5.4 7.8-10.7-.7-4.7-5.5-7.1-10.6-6.6-4.1.4-8.1 3.7-8.3 8.3-.1 2.8.7 4.9 3.4 5.5z"/></symbol>
            <symbol id="googlePlus" viewBox="0 0 24 24"><path d="M7.8 13.5h4.6c-.6 2-2.5 3.4-4.6 3.4-2.7 0-4.9-2.2-4.9-4.9s2.2-4.9 4.9-4.9c1.1 0 2.1.3 3 1l1.8-2.4c-1.4-1.1-3-1.6-4.8-1.6-4.3 0-7.9 3.5-7.9 7.9s3.5 7.9 7.9 7.9 7.9-3.5 7.9-7.9v-1.5h-7.9v3zM21.7 11v-2.2h-2v2.2h-2.2v2h2.2v2.2h2v-2.2h2.2v-2z"/></symbol>
            <symbol id="stumbleupon" viewBox="0 0 24 24"><path d="M13.3 9.6l1.6.8 2.5-.8v-1.4c0-3-2.4-5.4-5.4-5.4s-5.4 2.4-5.4 5.4v7.5c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2h-4v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-7.5c0-.7.6-1.3 1.3-1.3s1.3.6 1.3 1.3l-.1 1.4zm6.6 2.9v3.2c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2l-2.5.8-1.6-.8v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-3.2h-4.1z"/></symbol>
            <symbol id="linkedin" viewBox="0 0 24 24"><path d="M22.2 0h-20.4c-1 0-1.8.8-1.8 1.7v20.7c0 1 .8 1.7 1.8 1.7h20.5c1 0 1.8-.8 1.8-1.7v-20.7c-.1-.9-.9-1.7-1.9-1.7zm-14.9 20.2h-3.6v-10.9h3.6v10.9zm-1.8-12.4c-1.2 0-2-.8-2-1.9 0-1.1.8-1.9 2.1-1.9 1.2 0 2 .8 2 1.9-.1 1.1-.9 1.9-2.1 1.9zm14.8 12.4h-3.6v-5.8c0-1.5-.5-2.5-1.8-2.5-1 0-1.6.7-1.9 1.3-.1.2-.1.6-.1.9v6.1h-3.6v-10.9h3.6v1.5c.5-.7 1.3-1.8 3.3-1.8 2.4 0 4.2 1.6 4.2 4.9v6.3z"/></symbol>
            <symbol id="apple" viewBox="-1 1 24 24"><path d="M17.6 13.8c0-3 2.5-4.5 2.6-4.6-1.4-2.1-3.6-2.3-4.4-2.4-1.9-.2-3.6 1.1-4.6 1.1-.9 0-2.4-1.1-4-1-2 0-3.9 1.2-5 3-2.1 3.7-.5 9.1 1.5 12.1 1 1.5 2.2 3.1 3.8 3 1.5-.1 2.1-1 3.9-1s2.4 1 4 1 2.7-1.5 3.7-2.9c1.2-1.7 1.6-3.3 1.7-3.4-.1-.1-3.2-1.3-3.2-4.9zm-3.1-9c.8-1 1.4-2.4 1.2-3.8-1.2 0-2.7.8-3.5 1.8-.8.9-1.5 2.3-1.3 3.7 1.4.1 2.8-.7 3.6-1.7z"/></symbol>
            <symbol id="tumblr" viewBox="0 0 23 23"><path d="M12.573 4.94v-4.94h-3.188c-.072.183-.11.4-.11.622-.034.107-.072.184-.072.293-.328 1.829-1.28 3.11-2.892 3.807-.476.218-.914.253-1.39.218v3.987h2.342c.039 5.603.039 8.493.039 8.64v.332c.294 2.449 1.573 3.914 3.843 4.463.914.257 1.901.366 2.892.366 1.279-.036 2.525-.256 3.771-.659v-4.685c-.731.22-1.395.402-1.977.583-1.135.333-2.087.113-2.857-.619-.073-.11-.183-.257-.221-.403-.106-.586-.178-1.206-.178-1.795v-6.222h5.083v-3.988h-5.085z"/></symbol>
            <symbol id="instagram" viewBox="0 0 24 24"><path d="M24,2.5C23.8,1.1,22.7,0,21.2,0C15.1,0,8.9,0,2.8,0C2.6,0,2.4,0,2.3,0C0.9,0.3,0,1.4,0,2.8C0,5.9,0,8.9,0,12
                c0,3.1,0,6.1,0,9.2c0,0.2,0,0.3,0,0.5C0.2,23,1.4,24,2.7,24c6.2,0,12.4,0,18.5,0c0.1,0,0.2,0,0.3,0c1.4-0.2,2.4-1.3,2.4-2.7
                c0-6.2,0-12.4,0-18.5C24,2.7,24,2.6,24,2.5z M12,7.4c2.5,0,4.6,2.1,4.6,4.6c0,2.6-2.1,4.6-4.6,4.6c-2.6,0-4.6-2.1-4.6-4.6
                C7.4,9.5,9.5,7.4,12,7.4z M21.2,10.3c0,3.3,0,6.6,0,9.9c0,0.6-0.4,1-1,1c-5.1,0-10.3,0-15.4,0c-0.4,0-0.7,0-1.1,0c-0.6,0-1-0.4-1-1
                c0-3.3,0-6.7,0-10c0,0,0-0.1,0-0.1c0.7,0,1.4,0,2.1,0c-0.5,1.9-0.3,3.7,0.7,5.4c0.7,1.2,1.6,2.2,2.9,2.9c2.4,1.4,5.5,1.2,7.8-0.3
                c1.3-0.9,2.2-2,2.8-3.5c0.5-1.5,0.6-2.9,0.2-4.4c0.7,0,1.4,0,2.1,0C21.2,10.2,21.2,10.2,21.2,10.3z M21.2,6.4c0,0.5-0.4,0.9-1,0.9
                c0,0,0,0,0,0c-0.4,0-0.9,0-1.3,0c-0.5,0-0.9,0-1.4,0c-0.5,0-0.9-0.4-0.9-0.9c0-0.9,0-1.9,0-2.8c0-0.5,0.4-0.9,0.9-0.9
                c0.9,0,1.8,0,2.7,0c0.5,0,0.9,0.4,0.9,0.9C21.2,4.6,21.2,5.5,21.2,6.4z"/></symbol>
            <symbol id="arrow-down" viewBox="0 0 24 24"><path d="M12 18c-.2 0-.5-.1-.7-.3l-11-10c-.4-.4-.4-1-.1-1.4.4-.4 1-.4 1.4-.1l10.4 9.4 10.3-9.4c.4-.4 1-.3 1.4.1.4.4.3 1-.1 1.4l-11 10c-.1.2-.4.3-.6.3z"/></symbol>
            <symbol id="arrow-up" viewBox="0 0 24 24"><path d="M11.9 5.9c.2 0 .5.1.7.3l11 10c.4.4.4 1 .1 1.4-.4.4-1 .4-1.4.1l-10.4-9.4-10.3 9.4c-.4.4-1 .3-1.4-.1-.4-.4-.3-1 .1-1.4l11-10c.1-.2.4-.3.6-.3z"/></symbol>
            <symbol id="arrow-left" viewBox="0 0 31 72"><path d="M30 72c-.3 0-.6-.1-.8-.4l-29-34c-.3-.4-.3-.9 0-1.3l29-36c.3-.4 1-.5 1.4-.2.4.3.5 1 .2 1.4l-28.5 35.5 28.5 33.4c.4.4.3 1.1-.1 1.4-.2.1-.5.2-.7.2z"/></symbol>
            <symbol id="arrow-right" viewBox="0 0 31 72"><path d="M1 0c.3 0 .6.1.8.4l29 34c.3.4.3.9 0 1.3l-29 36c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l28.5-35.5-28.5-33.4c-.4-.4-.3-1.1.1-1.4.2-.1.5-.2.7-.2z"/></symbol>
            <symbol id="arrow-top" viewBox="0 0 24 24"><path d="M20.7 10.3l-8-8c-.4-.4-1-.4-1.4 0l-8 8c-.4.4-.4 1 0 1.4s1 .4 1.4 0l6.3-6.3v15.6c0 .6.4 1 1 1s1-.4 1-1v-15.6l6.3 6.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4z"/></symbol>
            <symbol id="play" viewBox="0 0 30 30"><path d="M7 30v-30l22 15z"/></symbol>
            <symbol id="appstoreButton" viewBox="0 0 135 40"><path fill="#000" d="M135 36.2c0 2.1-1.7 3.8-3.8 3.8h-127.4c-2.1 0-3.8-1.7-3.8-3.8v-32.3c0-2.2 1.7-3.9 3.8-3.9h127.3c2.1 0 3.8 1.7 3.8 3.8l.1 32.4z"/><path fill="#ffffff" d="M30.1 19.8c0-3.2 2.6-4.8 2.8-4.9-1.5-2.2-3.9-2.5-4.7-2.5-2-.2-3.9 1.2-4.9 1.2s-2.6-1.2-4.2-1.1c-2.1 0-4.1 1.3-5.2 3.2-2.3 3.9-.6 9.7 1.6 12.9 1.1 1.6 2.4 3.3 4 3.2 1.6-.1 2.2-1 4.2-1 1.9 0 2.5 1 4.2 1s2.8-1.6 3.9-3.1c1.3-1.8 1.8-3.5 1.8-3.6-.1-.2-3.4-1.5-3.5-5.3zM26.9 10.3c.9-1.1 1.5-2.6 1.3-4.1-1.3.1-2.8.9-3.8 1.9-.8.9-1.5 2.5-1.3 3.9 1.5.2 2.9-.6 3.8-1.7zM53.6 31.5h-2.3l-1.2-3.9h-4.3l-1.2 3.9h-2.2l4.3-13.3h2.6l4.3 13.3zm-3.8-5.5l-1.1-3.5c-.2-.4-.4-1.2-.7-2.5-.1.6-.3 1.4-.6 2.5l-1.2 3.5h3.6zM64.7 26.6c0 1.6-.4 2.9-1.3 3.9-.8.8-1.8 1.3-2.9 1.3-1.3 0-2.2-.5-2.7-1.4v5.1h-2.1v-10.4c0-1 0-2.1-.1-3.2h1.9l.1 1.5c.7-1.1 1.8-1.7 3.2-1.7 1.1 0 2.1.4 2.8 1.3.7.9 1.1 2.1 1.1 3.6zm-2.2.1c0-.9-.2-1.7-.6-2.3-.5-.6-1.1-.9-1.9-.9-.5 0-1 .2-1.4.5-.4.3-.7.8-.8 1.4-.1.3-.1.5-.1.7v1.6c0 .7.2 1.3.6 1.8s1 .7 1.7.7c.8 0 1.4-.3 1.9-.9.4-.8.6-1.6.6-2.6zM75.7 26.6c0 1.6-.4 2.9-1.3 3.9-.8.8-1.8 1.3-2.9 1.3-1.3 0-2.2-.5-2.7-1.4v5.1h-2.1v-10.4c0-1 0-2.1-.1-3.2h1.9l.1 1.5c.7-1.1 1.8-1.7 3.2-1.7 1.1 0 2.1.4 2.8 1.3.7.9 1.1 2.1 1.1 3.6zm-2.2.1c0-.9-.2-1.7-.6-2.3-.5-.6-1.1-.9-1.9-.9-.5 0-1 .2-1.4.5-.4.3-.7.8-.8 1.4-.1.3-.1.5-.1.7v1.6c0 .7.2 1.3.6 1.8.4.3 1 .5 1.7.5.8 0 1.4-.3 1.9-.9.4-.6.6-1.4.6-2.4zM88 27.8c0 1.1-.4 2.1-1.2 2.8-.9.8-2.1 1.2-3.6 1.2-1.4 0-2.6-.3-3.4-.8l.5-1.8c.9.6 2 .8 3.1.8.8 0 1.4-.2 1.9-.5.4-.4.7-.8.7-1.5 0-.5-.2-1-.6-1.4-.4-.4-1-.7-1.8-1-2.4-.9-3.6-2.2-3.6-3.9 0-1.1.4-2 1.2-2.7.8-.7 1.9-1 3.3-1 1.2 0 2.2.2 3 .6l-.5 1.8c-.8-.4-1.6-.6-2.5-.6-.8 0-1.3.2-1.8.6-.4.3-.5.7-.5 1.2s.2 1 .6 1.3c.4.3 1 .7 1.9 1 1.1.5 2 1 2.5 1.6.6.6.8 1.4.8 2.3zM95.1 23.5h-2.3v4.7c0 1.2.4 1.8 1.2 1.8.4 0 .7 0 .9-.1l.1 1.6c-.4.2-1 .2-1.7.2-.8 0-1.5-.3-2-.8s-.7-1.4-.7-2.6v-4.8h-1.4v-1.6h1.4v-1.8l2.1-.6v2.4h2.3l.1 1.6zM105.7 26.6c0 1.5-.4 2.7-1.3 3.6-.9 1-2.1 1.5-3.5 1.5s-2.5-.5-3.4-1.4c-.8-.9-1.3-2.1-1.3-3.5 0-1.5.4-2.7 1.3-3.7.9-.9 2-1.4 3.5-1.4 1.4 0 2.5.5 3.4 1.4.9.9 1.3 2.1 1.3 3.5zm-2.2.1c0-.9-.2-1.6-.6-2.3-.4-.8-1.1-1.1-1.9-1.1-.9 0-1.5.4-2 1.1-.4.6-.6 1.4-.6 2.3s.2 1.6.6 2.3c.5.8 1.1 1.1 1.9 1.1.8 0 1.5-.4 1.9-1.2.5-.6.7-1.3.7-2.2zM112.6 23.8c-.2 0-.4-.1-.7-.1-.8 0-1.3.3-1.7.8s-.5 1.1-.5 1.9v5h-2.1v-6.6c0-1.1 0-2.1-.1-3h1.9l.1 1.8h.1c.2-.6.6-1.1 1.1-1.5.5-.3 1-.5 1.5-.5h.5v2.2h-.1zM122.2 26.3c0 .4 0 .7-.1 1h-6.4c0 .9.3 1.7.9 2.2.5.4 1.2.7 2.1.7.9 0 1.8-.2 2.6-.5l.3 1.5c-.9.4-2 .6-3.2.6-1.5 0-2.7-.4-3.5-1.3s-1.3-2.1-1.3-3.5.4-2.7 1.2-3.6c.8-1 1.9-1.5 3.4-1.5 1.4 0 2.4.5 3.1 1.5.6.6.9 1.7.9 2.9zm-2.1-.6c0-.6-.1-1.2-.4-1.6-.4-.6-.9-.9-1.7-.9-.7 0-1.3.3-1.7.9-.4.5-.6 1-.6 1.7l4.4-.1zM49 10c0 1.2-.4 2.1-1.1 2.7-.7.5-1.6.8-2.8.8-.6 0-1.1 0-1.5-.1v-6.4c.6-.1 1.2-.1 1.8-.1 1.1 0 2 .2 2.6.7.7.6 1 1.4 1 2.4zm-1.1 0c0-.8-.2-1.3-.6-1.8-.4-.4-1-.6-1.8-.6-.3 0-.6 0-.8.1v4.9h.7c.8 0 1.4-.2 1.9-.7.4-.4.6-1 .6-1.9zM54.9 11c0 .7-.2 1.3-.6 1.8s-1 .7-1.7.7-1.2-.2-1.7-.7c-.4-.5-.6-1-.6-1.7s.2-1.3.6-1.8 1-.7 1.7-.7 1.2.2 1.7.7c.4.5.6 1 .6 1.7zm-1.1.1c0-.4-.1-.8-.3-1.1-.2-.4-.5-.6-.9-.6s-.7.2-1 .6c-.2.3-.3.7-.3 1.1 0 .4.1.8.3 1.1.2.4.5.6 1 .6.4 0 .7-.2.9-.6.2-.3.3-.7.3-1.1zM62.8 8.7l-1.5 4.7h-1l-.6-2c-.2-.5-.3-1-.4-1.5-.1.5-.2 1-.4 1.5l-.6 2h-1l-1.4-4.7h1.1l.5 2.3.3 1.5c.2-.4.3-.9.5-1.5l.7-2.2h.9l.6 2.2c.2.5.3 1.1.4 1.6.1-.5.2-1 .3-1.6l.6-2.2 1-.1zM68.2 13.4h-1v-2.7c0-.8-.3-1.2-1-1.2-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8v2.8h-1v-4.7h.9v.7c.1-.2.3-.4.5-.6.3-.2.6-.3.9-.3.4 0 .8.1 1.1.4.4.3.5.9.5 1.6v2.9h.2zM71.1 13.4h-1v-6.9h1v6.9zM77.3 11c0 .7-.2 1.3-.6 1.8-.4.5-1 .7-1.7.7s-1.2-.2-1.7-.7c-.4-.5-.6-1-.6-1.7s.2-1.3.6-1.8c.4-.5 1-.7 1.7-.7s1.2.2 1.7.7c.4.5.6 1 .6 1.7zm-1.1.1c0-.4-.1-.8-.3-1.1-.2-.4-.5-.6-.9-.6s-.7.2-1 .6c-.2.3-.3.7-.3 1.1 0 .4.1.8.3 1.1.2.4.5.6 1 .6.4 0 .7-.2.9-.6.2-.3.3-.7.3-1.1zM82.3 13.4h-.9l-.1-.5c-.3.4-.8.7-1.4.7-.4 0-.8-.1-1.1-.4-.2-.3-.4-.6-.4-1 0-.6.2-1 .7-1.3.5-.3 1.2-.5 2-.4v-.1c0-.6-.3-.9-1-.9-.5 0-.9.1-1.2.3l-.1-.8c.4-.3 1-.4 1.6-.4 1.2 0 1.8.6 1.8 1.9v1.7c.1.6.1 1 .1 1.2zm-1.1-1.6v-.7c-1.2 0-1.7.3-1.7.9 0 .2.1.4.2.6.1.1.3.2.5.2s.4-.1.6-.2c.2-.1.3-.3.4-.6v-.2zM88.3 13.4h-.9v-.8c-.3.6-.8.9-1.5.9-.6 0-1-.2-1.4-.7-.4-.4-.6-1-.6-1.7 0-.8.2-1.4.6-1.9.4-.4.9-.7 1.5-.7s1.1.2 1.3.6v-2.7h1v5.6c-.1.6 0 1 0 1.4zm-1.1-2v-1.1c-.1-.3-.2-.5-.4-.6-.2-.2-.4-.3-.7-.3-.4 0-.7.2-.9.5-.2.3-.3.7-.3 1.2s.1.8.3 1.1c.2.3.5.5.9.5.3 0 .6-.1.8-.4.2-.2.3-.5.3-.9zM97.2 11c0 .7-.2 1.3-.6 1.8-.4.5-1 .7-1.7.7s-1.2-.2-1.7-.7c-.4-.5-.6-1-.6-1.7s.2-1.3.6-1.8 1-.7 1.7-.7 1.2.2 1.7.7c.4.5.6 1 .6 1.7zm-1 .1c0-.4-.1-.8-.3-1.1-.2-.4-.5-.6-.9-.6s-.7.2-1 .6c-.2.3-.3.7-.3 1.1 0 .4.1.8.3 1.1.2.4.5.6 1 .6.4 0 .7-.2.9-.6.2-.3.3-.7.3-1.1zM102.9 13.4h-1v-2.7c0-.8-.3-1.2-1-1.2-.3 0-.6.1-.8.3s-.3.5-.3.8v2.8h-1v-4.7h.9v.7c.1-.2.3-.4.5-.6.3-.2.6-.3 1-.3s.8.1 1.1.4c.4.3.5.9.5 1.6v2.9h.1zM109.9 9.5h-1.2v2.3c0 .6.2.9.6.9h.5v.8c-.2.1-.5.1-.8.1-.4 0-.7-.1-1-.4-.2-.3-.3-.7-.3-1.3v-2.4h-.7v-.8h.7v-.9l1-.3v1.2h1.2v.8zM115.5 13.4h-1v-2.7c0-.8-.3-1.3-.9-1.3-.5 0-.8.2-1 .7v3.2h-1v-6.9h1v2.8c.3-.5.8-.8 1.4-.8.4 0 .8.1 1.1.4.4.4.5.9.5 1.6v3h-.1zM121.2 10.9v.5h-3.2c0 .5.2.8.5 1.1.3.2.6.3 1 .3.5 0 .9-.1 1.3-.2l.2.7c-.4.2-1 .3-1.6.3-.7 0-1.3-.2-1.7-.6s-.6-1-.6-1.7.2-1.3.6-1.8c.4-.5 1-.8 1.6-.8.7 0 1.2.3 1.5.8.3.3.4.8.4 1.4zm-1-.3c0-.3-.1-.6-.2-.8-.2-.3-.5-.4-.8-.4s-.6.1-.8.4c-.2.2-.3.5-.3.8h2.1z"/></symbol>
            <symbol id="googlePlayButton" viewBox="0 0 135 40"><path d="M130 40h-125c-2.8 0-5-2.2-5-5v-30c0-2.8 2.2-5 5-5h125c2.8 0 5 2.2 5 5v30c0 2.8-2.2 5-5 5z" fill="#000"/><path fill="#FFFFFF" d="M44.5 13.2c.9 0 1.7-.3 2.3-.9.5-.5.8-1.2.8-2.1v-.6h-3.1v.9h2.2c-.1.4-.2.8-.5 1-.4.4-1 .6-1.6.6-.6 0-1.1-.2-1.6-.6-.4-.4-.7-1-.7-1.7s.2-1.2.7-1.7c.4-.4 1-.6 1.6-.6.7 0 1.2.2 1.6.7l.1.1.7-.7-.1-.1c-.2-.3-.6-.5-1-.7-.4-.2-.8-.3-1.3-.3-.9 0-1.7.3-2.3.9-.6.6-.9 1.4-.9 2.3s.3 1.7.9 2.3c.5.9 1.3 1.2 2.2 1.2zM52.1 12.2h-2.7v-1.7h2.5v-1h-2.5v-1.7h2.7v-.9h-3.7v6.2h3.7zM55.4 13.1v-5.3h1.7v-.9h-4.4v.9h1.7v5.3zM59.8 6.9h1v6.2h-1zM64.2 13.1v-5.3h1.7v-.9h-4.3v.9h1.7v5.3zM71.4 13.2c.9 0 1.7-.3 2.3-.9.6-.6.9-1.4.9-2.3 0-.9-.3-1.7-.9-2.3-.6-.6-1.4-.9-2.3-.9-.9 0-1.7.3-2.3.9-.6.6-.9 1.4-.9 2.3s.3 1.7.9 2.3c.6.6 1.4.9 2.3.9zm-1.5-4.9c.4-.4.9-.6 1.6-.6.6 0 1.1.2 1.6.6.4.4.6 1 .6 1.7s-.2 1.2-.6 1.7c-.4.4-.9.6-1.6.6-.6 0-1.1-.2-1.6-.6-.4-.4-.6-1-.6-1.7s.1-1.2.6-1.7zM76.4 9.3v-.9l2.9 4.7h1v-6.2h-1v3.6l.1.9-2.8-4.5h-1.1v6.2h.9zM123.7 22l-2.1 5.4h-.1l-2.2-5.4h-2l3.3 7.6-1.9 4.2h2l5.1-11.8zM106.9 17.5h1.9v12.5h-1.9zM113.4 21.7c-1.4 0-2.8.6-3.3 1.9l1.7.7c.4-.7 1-.9 1.7-.9 1 0 1.9.6 2 1.6v.1c-.3-.2-1.1-.5-1.9-.5-1.8 0-3.6 1-3.6 2.8 0 1.7 1.5 2.8 3.1 2.8 1.3 0 1.9-.6 2.4-1.2h.1v1h1.8v-4.8c-.2-2.2-1.9-3.5-4-3.5zm-.2 6.9c-.6 0-1.5-.3-1.5-1.1 0-1 1.1-1.3 2-1.3.8 0 1.2.2 1.7.4-.2 1.2-1.2 2-2.2 2zM58.8 21.8c-2.4 0-4.3 1.8-4.3 4.3 0 2.4 1.9 4.3 4.3 4.3s4.3-1.8 4.3-4.3c0-2.6-1.9-4.3-4.3-4.3zm0 6.8c-1.3 0-2.4-1.1-2.4-2.6s1.1-2.6 2.4-2.6c1.3 0 2.4 1 2.4 2.6 0 1.5-1.1 2.6-2.4 2.6zM68.1 21.8c-2.4 0-4.3 1.8-4.3 4.3 0 2.4 1.9 4.3 4.3 4.3s4.3-1.8 4.3-4.3c0-2.6-1.9-4.3-4.3-4.3zm0 6.8c-1.3 0-2.4-1.1-2.4-2.6s1.1-2.6 2.4-2.6 2.4 1 2.4 2.6c0 1.5-1.1 2.6-2.4 2.6zM82.6 17.5h1.9v12.5h-1.9zM93.1 24.5c-.4-1-1.4-2.7-3.6-2.7s-4 1.7-4 4.3c0 2.4 1.8 4.3 4.2 4.3 1.9 0 3.1-1.2 3.5-1.9l-1.4-1c-.5.7-1.1 1.2-2.1 1.2s-1.6-.4-2.1-1.3l5.7-2.4-.2-.5zm-5.8 1.4c0-1.6 1.3-2.5 2.2-2.5.7 0 1.4.4 1.6.9l-3.8 1.6zM47.7 23.1v1.8h4.3c-.1 1-.5 1.8-1 2.3-.6.6-1.6 1.3-3.3 1.3-2.7 0-4.7-2.1-4.7-4.8s2.1-4.8 4.7-4.8c1.4 0 2.5.6 3.3 1.3l1.3-1.3c-1.1-1-2.5-1.8-4.5-1.8-3.6 0-6.7 3-6.7 6.6 0 3.6 3.1 6.6 6.7 6.6 2 0 3.4-.6 4.6-1.9 1.2-1.2 1.6-2.9 1.6-4.2 0-.4 0-.8-.1-1.1h-6.2zM79.6 22.7c-.5-.5-1.3-1-2.3-1-2.1 0-4.1 1.9-4.1 4.3s1.9 4.2 4.1 4.2c1 0 1.8-.5 2.2-1h.1v.6c0 1.6-.9 2.5-2.3 2.5-1.1 0-1.9-.8-2.1-1.5l-1.6.7c.5 1.1 1.7 2.5 3.8 2.5 2.2 0 4-1.3 4-4.4v-7.6h-1.8v.7zm-2.2 5.9c-1.3 0-2.4-1.1-2.4-2.6s1.1-2.6 2.4-2.6c1.3 0 2.3 1.1 2.3 2.6s-1 2.6-2.3 2.6zM101.8 17.5h-4.5v12.5h1.9v-4.7h2.6c2.1 0 4.1-1.5 4.1-3.9s-2-3.9-4.1-3.9zm.1 6h-2.7v-4.3h2.7c1.4 0 2.2 1.2 2.2 2.1-.1 1.1-.9 2.2-2.2 2.2z"/><path d="M10.4 7.5c-.3.3-.4.8-.4 1.4v22.1c0 .6.2 1.1.5 1.4l.1.1 12.4-12.4v-.2l-12.6-12.4z" fill="#5BCAE8"/><path d="M27 24.3l-4.1-4.1v-.30000000000000004l4.1-4.1.1.1 4.9 2.8c1.4.8 1.4 2.1 0 2.9l-5 2.7z" fill="#F99B1C"/><path d="M27.1 24.2l-4.2-4.2-12.5 12.5c.5.5 1.2.5 2.1.1l14.6-8.4" fill="#C31E63"/><path d="M27.1 15.8l-14.6-8.3c-.9-.5-1.6-.4-2.1.1l12.5 12.4 4.2-4.2z" fill="#66BE69"/></symbol>
            <symbol id="login" viewBox="0 0 22 22"><path d="M13 2c0 .6.4 1 1 1h6v16h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c1.1 0 2-.9 2-2v-16c0-1.1-.9-2-2-2h-6c-.6 0-1 .4-1 1zm-6.5 3.5c0 .3.1.5.3.7l3.8 3.8h-9.6c-.6 0-1 .4-1 1s.4 1 1 1h9.6l-3.8 3.8c-.2.2-.3.5-.3.7s.1.5.3.7c.4.4 1 .4 1.4 0l5.5-5.5c.1-.1.2-.2.2-.3.1-.2.1-.5 0-.8l-.2-.3-5.5-5.5c-.4-.4-1-.4-1.4 0-.2.2-.3.4-.3.7z"/></symbol>
            <symbol id="chat" viewBox="0 0 22 22"><path d="M11 22c-.1 0-.3 0-.4-.1-.4-.1-.6-.5-.6-.9v-4h-7.8c-1.2 0-2.2-1-2.2-2.2v-11.6c0-1.2 1-2.2 2.2-2.2h17.7c1.1 0 2.1 1 2.1 2.2v11.7c0 1.2-1 2.2-2.2 2.2h-3.4l-4.7 4.7c-.2.1-.4.2-.7.2zm-8.8-19c-.1 0-.2.1-.2.2v11.7s.1.1.2.1h8.8c.6 0 1 .4 1 1v2.6l3.3-3.3c.2-.2.4-.3.7-.3h3.8c.1 0 .2-.1.2-.2v-11.6c0-.1-.1-.2-.2-.2h-17.6zM5 6h6v2h-6zM5 10h10v2h-10z"/></symbol>
            <symbol id="mail" viewBox="0 0 22 22"><path d="M19.8 2h-17.6c-1.2 0-2.2 1-2.2 2.2v13.5c0 1.3 1 2.3 2.2 2.3h17.5c1.2 0 2.2-1 2.2-2.2v-13.6c.1-1.2-.9-2.2-2.1-2.2zm-17.6 2h17.5c.2 0 .3.1.3.2v.3l-9 6.3-9-6.3v-.3c0-.1.1-.2.2-.2zm17.6 14h-17.6c-.1 0-.2-.1-.2-.2v-10.9l8.1 5.7c.3.2.6.3.9.3.3 0 .6-.1.9-.3l8.1-5.7v10.9c0 .1-.1.2-.2.2z"/></symbol>
            <symbol id="drop-down" viewBox="0 0 16 16"><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="1,5 8,12 15,5" fill="none"/></symbol>
            <symbol id="direction-horizontal" viewBox="-2 6 16 16"><path d="M13.7 13.3l-5-5c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l3.3 3.3h-11.6c-.6 0-1 .4-1 1s.4 1 1 1h11.6l-3.3 3.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3l5-5c.2-.2.3-.5.3-.7s-.1-.5-.3-.7z"/></symbol>
            <symbol id="direction-vertical" viewBox="-2 6 16 16"><path d="M6.7 21.7l5-5c.4-.4.4-1 0-1.4s-1-.4-1.4 0l-3.3 3.3v-11.6c0-.6-.4-1-1-1s-1 .4-1 1v11.6l-3.3-3.3c-.4-.4-1-.4-1.4 0-.2.2-.3.4-.3.7 0 .3.1.5.3.7l5 5c.2.2.4.3.7.3s.5-.1.7-.3z"/></symbol>
            <symbol id="right" viewBox="-2 6 16 16"><path d="M13.7 13.3l-5-5c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l3.3 3.3h-11.6c-.6 0-1 .4-1 1s.4 1 1 1h11.6l-3.3 3.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3l5-5c.2-.2.3-.5.3-.7s-.1-.5-.3-.7z"/></symbol>
        </svg>

        <!-- Navigation -->
        <nav class="side">
            <div class="navigation">
                <ul></ul>
            </div>
        </nav>

        <!-- Panel top #07 -->
        <nav class="panel top">
            <div class="sections">
                <div class="left"><a href="#">Perfectly Dopey</a></div>
                <div class="right">
                    <span class="button actionButton dropdownTrigger" data-dropdown-id="1"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#share"></use></svg></span>
                    <!--<span class="button actionButton sidebarTrigger" data-sidebar-id="1"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu"></use></svg></span>-->
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <nav class="sidebar deepPurple" data-sidebar-id="1">
            <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
            <div class="content">
                <a href="#" class="logo" style="font-size:35px;font-weight:bold;">Perfectly Dopey</a>
                <ul class="mainMenu uppercase">
                    <li><a href="#">Perfects</a></li>
                    <li><a href="#">Overall</a></li>
                    <li><a href="#">2016</a></li>
                    <li><a href="#">2015</a></li>
                    <li><a href="#">2014</a></li>
                </ul>
                <ul class="subMenu">
                </ul>
                <ul class="social">
                </ul>
            </div>
        </nav>

        <!-- Share Window -->
        <div class="dropdown share top right hidden" data-dropdown-id="1" data-text="Take a look at this" data-url="http://designmodo.com" data-pinterest-image="http://designmodo.com/wp-content/uploads/2015/10/Presentation.jpg">
            <h3>Share</h3>
            <ul>
                <li class="facebook"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fb-like"></use></svg></li>
                <li class="twitter"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></li>
                <li class="googlePlus"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#googlePlus"></use></svg></li>
                <li class="pinterest"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pinterest"></use></svg></li>
                <!-- li class="stumbleupon"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stumbleupon"></use></svg></li>
                <li class="linkedin"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></li -->
                <li class="mail" data-subject="Subject" data-body="Body">share by email</li>
            </ul>
        </div>

        <!-- Title -->
        <section class="slide fade kenBurns" data-title="Title">
            <div class="content">
                <div class="container">
                    <div class="wrap">

                        <div class="fix-10-12">
                            <h1>Perfect Dopeys</h1>
                            <p>At the Walt Disney World Marathon Weekend there are four running events held over four days: a 5k, 10k, half marathon, and full marathon. To finish all four races is known as the <a href="#">Dopey Challenge</a>.</p>
                            <p>Those runners who have successfully completed the Dopey Challenge every year since it was first held are considered to be "perfect" hence the term Perfectly Dopey.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(assets/img/dopey-2a.jpg)"></div>
        </section>

        <!-- Year -->
        <section class="slide fade kenBurns" data-title="Totals">
            <div class="content">
                <div class="container">
                    <div class="wrap">

                        <div class="fix-12-12">
                            <ul class="grid">
                                <li class="col-4-12">
                                    <h1 class="small ae-1 fromLeft">Totals</h1>
                                    <div class="ae-2 fromLeft">
                                        <p>6,145 runners finished the innaugural Dopey Challange, but only 864 of them continued the challenge every year. That's an 86% decrease.</p>
                                    </div>
                                </li>
                                <li class="col-8-12">
                                    <div class="ae-3 fromLeft">
                                        <div id="perfect-count-by-year" class="ct-chart ct-golden-section ct-line"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(assets/img/dopey-3a.jpg)"></div>
        </section>

        <!-- Gender -->
        <section class="slide fade kenBurns" data-title="Genders">
            <div class="content">
                <div class="container">
                    <div class="wrap">

                        <div class="fix-12-12">
                            <ul class="grid">
                                <li class="col-8-12">
                                    <div class="ae-3 fromLeft">
                                        <div id="perfect-count-by-gender" class="ct-golden-section ct-pie"></div>
                                    </div>
                                </li>
                                <li class="col-4-12">
                                    <h1 class="small ae-1 fromLeft">Genders</h1>
                                    <div class="ae-2 fromLeft">
                                        <p>Of the current 864 Perfect Dopeys 513 or 59% are men and 351 or 41% are women.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(assets/img/dopey-1b.jpg)"></div>
        </section>

        <!-- Age -->
        <section class="slide fade kenBurns" data-title="Ages">
            <div class="content">
                <div class="container">
                    <div class="wrap">

                        <div class="fix-10-12 toCenter">
                            <h1 class="small ae-1">Ages</h1>
                            <div class="ae-2"><p>The average age of a Perfect Dopey is 42.79 years</p></div>
                        </div>
                        <div class="fix-12-12">
                            <ul class="grid">
                                <li class="col-12-12">
                                    <div id="perfect-count-by-age" class="ae-4 fromLeft ct-double-octave ct-bar"></div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(assets/img/dopey-1c.jpg)"></div>
        </section>

        <!-- State -->
        <section class="slide fade kenBurns" data-title="States">
            <div class="content">
                <div class="container">
                    <div class="wrap">

                        <div class="fix-10-12 toCenter">
                            <h1 class="small ae-1">States</h1>
                            <div class="ae-2"><p>Most Perfect Dopeys are local Floridians with Californians a distant second.</p></div>
                        </div>
                        <div class="fix-12-12">
                            <ul class="grid">
                                <li class="col-12-12">
                                    <div id="perfect-count-by-state" class="ae-4 fromLeft ct-double-octave ct-bar"></div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(assets/img/dopey-2b.jpg)"></div>
        </section>

        <!-- Country -->
        <section class="slide fade kenBurns" data-title="Countries">
            <div class="content">
                <div class="container">
                    <div class="wrap">

                        <div class="fix-10-12 toCenter">
                            <h1 class="small ae-1">Countries</h1>
                            <div class="ae-2"><p>94% of Perfect Dopeys live in the US. 10 countries are represented by the other 6%.</p></div>
                        </div>
                        <div class="fix-12-12">
                            <ul class="grid">
                                <li class="col-12-12">
                                    <div id="perfect-count-by-country" class="ae-4 fromLeft ct-double-octave ct-bar"></div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(assets/img/dopey-1d.jpg)"></div>
        </section>

        <!-- Three Grahps -->
        <!--<section class="slide fade kenBurns">
            <div class="content">
                <div class="container">
                    <div class="wrap">

                        <div class="fix-10-12 toCenter">
                            <h1 class="small ae-1">How to Install</h1>
                            <div class="ae-2"><p>The ugly can be beautiful. The pretty, never.</p></div>
                        </div>
                        <div class="fix-12-12">
                            <ul class="grid later grid-45">
                                <li class="col-4-12">
                                    <div id="perfect-count-by-agde" class="ae-4 fromLeft ct-golden-section ct-bar"></div>
                                    <div class="fix-3-12 ae-4">
                                        <p class="small left">Step 1. It’s very easy to be different, but very difficult to be better.</p>
                                    </div>
                                </li>
                                <li class="col-4-12">
                                    <div id="perfect-count-by-sdtate" class="ae-6 fromLeft ct-golden-section ct-bar"></div>
                                    <div class="fix-3-12 ae-6">
                                        <p class="small left">Step 2. Space and light and order. Those are the things that men.</p>
                                    </div>
                                </li>
                                <li class="col-4-12">
                                    <div id="perfect-count-by-coudntry" class="ae-8 fromLeft ct-golden-section ct-bar"></div>
                                    <div class="fix-3-12 ae-8">
                                        <p class="small left">Step 3. The proper study of mankind is the science of design.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="background" style="background-image:url(assets/img/img-45.jpg)"></div>
        </section>
        -->

        <!-- Panel Bottom #22 -->
        <nav class="panel bottom">
            <div class="sections">
                <div class="center"><span class="nextSlide"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-down"></use></svg></span></div>
            </div>
        </nav>

        <!-- Preloader -->
        <div class="loadingIcon"><svg class="loading-icon" id="loading-circle" viewBox="0 0 18 18"><circle class="circle" opacity=".1" stroke="#fff" stroke-width="2" stroke-miterlimit="10" cx="9" cy="9" r="8" fill="none"></circle><circle class="dash" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="1,100" cx="9" cy="9" r="8" fill="none"></circle></svg></div>


        <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
        <script src="/js/chartist-plugin-tooltip.min.js"></script>
        <script src="/js/vendor/auto-scale-axis.js"></script>
        <script>
            // Perfect count by year
            new Chartist.Line('#perfect-count-by-year', {
                labels: {!! json_encode($perfect['countByYear']['labels']) !!},
                series: [{!! json_encode($perfect['countByYear']['series']) !!}]
            }, {
                fullWidth: true,
                showArea: true,
                lineSmooth: Chartist.Interpolation.none(),
                plugins: [
                    Chartist.plugins.tooltip()
                ],
                chartPadding: {
                    right: 50,
                    left: 50,
                    top: 50,
                    bottom: 50,
                }
            });

            // Perfect count by gender
            var data = {
                labels: {!! json_encode($perfect['countByGender']['labels']) !!},
                series: {!! json_encode($perfect['countByGender']['series']) !!}
            };

            var options = {
                labelInterpolationFnc: function(value) {
                    return value[0]
                },
                plugins: [
                    Chartist.plugins.tooltip()
                ],
            };

            var responsiveOptions = [
                ['screen and (min-width: 640px)', {
                    chartPadding: 30,
                    labelOffset: 100,
                    labelDirection: 'explode',
                    labelInterpolationFnc: function(value) {
                        return value;
                    },
                    plugins: [
                        Chartist.plugins.tooltip({
                            tooltipFnc: function(thing) {
                                return 'cheese';
                            }
                        })
                    ],
                }],
                ['screen and (min-width: 1024px)', {
                    labelOffset: 80,
                    chartPadding: 20,
                    plugins: [
                        Chartist.plugins.tooltip()
                    ],
                }]
            ];

            var sum = function(a, b) { return a + b };

            //new Chartist.Pie('#perfect-count-by-gender', data, options, responsiveOptions);
            
            new Chartist.Pie('#perfect-count-by-gender', data, {
                labelInterpolationFnc: function(value, index) {
                    //console.log(value);
                    //console.log(data.series[index].label);
                    //var label = index ? 'Men' : 'Women';
                    //var percentage = Math.round(data.series[index] / data.series.reduce(sum) * 100) + '%';
                    
                    return value;
                },
                plugins: [
                    Chartist.plugins.tooltip()
                ],
                chartPadding: {
                    right: 20,
                    left: 20,
                    top: 20,
                    bottom: 20,
                }
            });

            var thedata = {
                labels: {!! json_encode($perfect['countByAge']['labels']) !!},
                series: {!! json_encode($perfect['countByAge']['series']) !!}
            };

            var total = count = 0;
            for (var i = 0; i < thedata.series.length; i++) {
                count += thedata.series[i] << 0;
                total += (thedata.labels[i] * thedata.series[i]) << 0;
            }

            console.log(total);
            console.log(total / count);

            // Perfect count by age
            new Chartist.Bar('#perfect-count-by-age', {
                labels: {!! json_encode($perfect['countByAge']['labels']) !!},
                series: [{!! json_encode($perfect['countByAge']['series']) !!}]
            }, {
                plugins: [
                    Chartist.plugins.tooltip()
                ]
            });

            // Perfect count by state
            new Chartist.Bar('#perfect-count-by-state', {
                labels: {!! json_encode($perfect['countByState']['labels']) !!},
                series: [{!! json_encode($perfect['countByState']['series']) !!}]
            }, {
                axisY: {
                    //type: Chartist.FixedScaleAxis,
                    //ticks: [0, 1, 5, 10, 20, 220],
                    //type: Chartist.AutoScaleAxis,
                    //scale: 'log',
                    //low: 1,
                    //onlyInteger: true,
                },
                plugins: [
                    Chartist.plugins.tooltip()
                ]
            });

            console.log([{!! json_encode($perfect['countByCountry']['series']) !!}]);

            // Perfect count by country
            new Chartist.Bar('#perfect-count-by-country', {
                labels: {!! json_encode($perfect['countByCountry']['labels']) !!},
                series: [{!! json_encode($perfect['countByCountry']['series']) !!}]
            }, {
                //seriesBarDistance: 10,
                axisY: {
                    //offset: 70,
                    type: Chartist.AutoScaleAxis,
                    scale: 'log',
                    low: 1,
                    onlyInteger: true,
                },
                axisX: {
                    //type: Chartist.AutoScaleAxis,
                    //ticks: [0, 1, 5, 100, 812],
                },
                plugins: [
                    Chartist.plugins.tooltip()
                ]
            });
        </script>
    </body>
</html>
