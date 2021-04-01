<html>
<head>
  <title> {{ env('APP_NAME')}} </title>
</head>
<body>
  <center>
    <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
    <script type="text/javascript">
    MRP.insert({
      'url':'http://100.4.153.48:9999/exilednoname',
      'codec':'mp3',
      'volume':100,
      'autoplay':true,
      'jsevents':true,
      'buffering':0,
      'title':'EXILEDNONAME',
      'wmode':'transparent',
      'skin':'arvyskin',
      'width': 'auto',
      'height':30
    });
  </script>
</center>
<hr>
<b> {{ env('APP_NAME')}} Radio, Local Network! </b>

</body>
</html>
