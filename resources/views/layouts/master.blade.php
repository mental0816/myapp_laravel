<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>심심할때 하는 라라벨 </title>
    <style>
      .test{
        color:hotpink;
        font-size:40px;
        text-align:center;
        font-family:"Hack";
      }
      .test:hover{
        transition:5s;
        color:aquamarine;
        font-size:100px;
        text-align:center;
        font-family:"Hack";
      }
      .test:matrix{
        color:hotpink;
        font-size:40px;
        text-align:center;
        font-family:"Hack";
      }
    </style>
  </head>
  <body style="background-color:black;">
  @yield('content')
  <p class="test">Hello World!</p>
  <p style="background-color:black;"></p>
  </body>
</html>
