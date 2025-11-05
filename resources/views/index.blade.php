<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; padding: 0;
            background: #f9f9f9;
            color: #333;
        }
        header {
            background: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        section {
            padding: 40px;
            max-width: 800px;
            margin: auto;
        }
        h2 {
            border-bottom: 2px solid #eee;
            padding-bottom: 5px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            background: #eee;
            margin: 5px 0;
            padding: 10px;
            border-radius: 6px;
        }
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <header>
        <h1>👋 Halo, Saya Prima Ardi</h1>
        <p>Web Developer | Laravel Enthusiast</p>
    </header>

    <section>
        <h2>Tentang Saya</h2>
        <p>
            Saya seorang web developer yang suka membangun aplikasi berbasis Laravel
            dan teknologi modern. Fokus pada backend, API, dan sistem informasi.
        </p>
    </section>

    <section>
        <h2>Keahlian</h2>
        <ul>
            <li>PHP & Laravel</li>
            <li>HTML, CSS, JavaScript</li>
            <li>MySQL & SQLite</li>
            <li>Git & Version Control</li>
        </ul>
    </section>

    <section>
        <h2>Kontak</h2>
        <p>Email: <a href="mailto:prima@example.com">prima@example.com</a></p>
        <p>LinkedIn: <a href="https://linkedin.com" target="_blank">linkedin.com/in/prima</a></p>
    </section>

    <footer>
        <p>&copy; {{ date('Y') }} Prima Ardi. Dibuat dengan ❤️ menggunakan Laravel.</p>
    </footer>

</body>
</html>
