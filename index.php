<?php
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
?>
<!doctype html>
<html lang="en" ⚡>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="author" content="Lukáš Mešťan">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="amp-3p-iframe-src" content="https://l0.sk/remote.html">
    <meta name="msapplication-TileColor" content="#181818">
    <meta name="theme-color" content="#181818">
    <meta name="referrer" content="unsafe-url">
    <meta name="description" content="Lukáš Mešťan developer from Žilina, Slovakia.">
    <title>le zéro</title>
    <link rel="canonical" href="https://l0.sk">
    <style amp-custom>body,html{background:#181818;margin:0;height:100%;max-width:1200px;min-width:720px;padding:10px;width:100%}</style>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
</head>

<body>
    <amp-iframe height="100" sandbox="allow-scripts allow-forms allow-same-origin allow-popups" layout="fill" frameborder="0" resizable src="//l.l0.sk/init.html">
        <div placeholder>loading...</div>
        <div overflow></div>
    </amp-iframe>
    <amp-analytics type="googleanalytics" id="analytics1">
        <script type="application/json">
            {
                "vars": {
                    "account": "UA-80812831-1"
                },
                "triggers": {
                    "trackPageview": {
                        "on": "visible",
                        "request": "pageview"
                    }
                }
            }
        </script>
    </amp-analytics>
</body>
</html>

