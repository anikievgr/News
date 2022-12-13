<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/index.css" />
    <title>Document</title>
  </head>
  <body>
    <div
      class="chek-news"
      style="
        width: 50%;
        height: auto;
        background-color: #e5e5e5;
        position: absolute;
        left: 50%;
        border: 1px solid black;

        transform: translate(-50%, 0);
      "
    >
      <div class="text" style="display: flex; justify-content: space-around">
        <p><?=$NEWS[1]?></p>
        <p><?=$NEWS[4]?></p>
      </div>
      <p><?=$NEWS[2]?></p>
    </div>
  </body>
</html>
