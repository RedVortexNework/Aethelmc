<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>RedVortexNetwork - Otthonod a hálózaton</title>
    <style>
        .hero {
            padding: 100px 20px;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://wallpaperaccess.com/full/2215642.jpg');
            background-size: cover;
            text-align: center;
        }
        .hero h1 { font-size: 3.5rem; color: #ff4757; text-shadow: 0 0 10px #ff4757; }
        .stats { display: flex; justify-content: center; gap: 40px; margin-top: 30px; }
        .stat-card { background: #1a1a1a; padding: 20px; border-radius: 10px; border: 1px solid #333; }
        .glow-text { color: #00d2d3; font-weight: bold; }
    </style>
</head>
<body>

<nav>
    <a href="index.php">KEZDŐLAP</a>
    <a href="shop.php">SHOP</a>
    <a href="login.php">FIÓK</a>
</nav>

<div class="hero">
    <h1>REDVORTEX NETWORK</h1>
    <p>A szerver, ahol a te képességeid határozzák meg a rangodat.</p>
    <br>
    <a href="shop.php" style="background:#ff4757; padding: 15px 30px; color:white; text-decoration:none; border-radius:5px; font-weight:bold;">CSATLAKOZZ MOST</a>
</div>

<div class="stats">
    <div class="stat-card">
        <p>Játékosok száma</p>
        <span class="glow-text">142 / 500</span>
    </div>
    <div class="stat-card">
        <p>Szerver verzió</p>
        <span class="glow-text">1.21.x</span>
    </div>
</div>

<footer style="margin-top: 100px; text-align: center; color: #666;">
    <p>© 2026 RedVortexNetwork | Nem hivatalos Minecraft szerver</p>
</footer>

</body>
</html>
