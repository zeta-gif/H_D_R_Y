<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Fuegos Artificiales con CSS</title>
  <style>
    body {
      margin: 0;
      background: #000;
      height: 100vh;
      overflow: hidden;
    }

    .firework {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 10px;
      height: 10px;
    }

    .particle {
      position: absolute;
      width: 6px;
      height: 6px;
      background-color: #ffcc00;
      border-radius: 50%;
      animation: explode 1s ease-out forwards;
    }

    .particle:nth-child(1) { --x: -40px; --y: -40px; }
    .particle:nth-child(2) { --x: 0px; --y: -50px; }
    .particle:nth-child(3) { --x: 40px; --y: -40px; }
    .particle:nth-child(4) { --x: 50px; --y: 0px; }
    .particle:nth-child(5) { --x: 40px; --y: 40px; }
    .particle:nth-child(6) { --x: 0px; --y: 50px; }
    .particle:nth-child(7) { --x: -40px; --y: 40px; }
    .particle:nth-child(8) { --x: -50px; --y: 0px; }

    @keyframes explode {
      0% {
        transform: translate(0, 0) scale(1);
        opacity: 1;
      }
      100% {
        transform: translate(var(--x), var(--y)) scale(0.5);
        opacity: 0;
      }
    }
  </style>
</head>
<body>
  <div class="firework">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
  </div>
</body>
</html>