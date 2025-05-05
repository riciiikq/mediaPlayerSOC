<?php
$song = isset($_GET['song']) ? $_GET['song'] : 'A';

$songs = [
  'blinding_lights' => [
    'mp3' => 'audio/blinding_lights.mp3',
    'title' => 'Blinding Lights',
    'artist' => 'The Weeknd',
    'album' => 'After Hours',
    'date' => '2019',
    'genre' => 'Pop',
    'cover' => 'covers/blinding_lights.jpg',
    'description' => 'Retro synth-pop hit, ktorý dominoval rebríčkom v roku 2020.'
  ],
  'teen_spirit' => [
    'mp3' => 'audio/nirvana_spirit.mp3',
    'title' => 'Smells Like Teen Spirit',
    'artist' => 'Nirvana',
    'album' => 'Nevermind',
    'date' => '1991',
    'genre' => 'Rock',
    'cover' => 'covers/smells_like_teen_spirit.jpg',
    'description' => 'Grungeová hymna 90. rokov, ikonický hit od Nirvany.'
  ],
  'lose_yourself' => [
    'mp3' => 'audio/lose_yourself.mp3',
    'title' => 'Lose Yourself',
    'artist' => 'Eminem',
    'album' => '8 Mile',
    'date' => '2002',
    'genre' => 'Hip-Hop',
    'cover' => 'covers/lose_yourself.jpg',
    'description' => 'Motivačný rap z filmu 8 Mile, za ktorý Eminem získal Oscara.'
  ],
  'take_five' => [
    'mp3' => 'audio/take_five.mp3',
    'title' => 'Take Five',
    'artist' => 'Dave Brubeck',
    'album' => 'Time Out',
    'date' => '1959',
    'genre' => 'Jazz',
    'cover' => 'covers/take_five.jpg',
    'description' => 'Jedna z najznámejších jazzových skladieb v 5/4 takte.'
  ],
  'strobe' => [
    'mp3' => 'audio/strobe.mp3',
    'title' => 'Strobe',
    'artist' => 'Deadmau5',
    'album' => 'For Lack of a Better Name',
    'date' => '2009',
    'genre' => 'Electronic',
    'cover' => 'covers/strobe.jpg',
    'description' => 'Melancholická elektronická skladba s atmosférickým vývojom.'
  ],
  'the_boxer' => [
    'mp3' => 'audio/the_boxer.mp3',
    'title' => 'The Boxer',
    'artist' => 'Simon & Garfunkel',
    'album' => 'Bridge Over Troubled Water',
    'date' => '1969',
    'genre' => 'Folk',
    'cover' => 'covers/the_boxer.jpg',
    'description' => 'Introspektívna folková balada s bohatým zvukovým aranžmánom.'
  ],
  'ordinary_people' => [
    'mp3' => 'audio/ordinary_people.mp3',
    'title' => 'Ordinary People',
    'artist' => 'John Legend',
    'album' => 'Get Lifted',
    'date' => '2004',
    'genre' => 'R&B',
    'cover' => 'covers/ordinary_people.jpg',
    'description' => 'Klasické R&B piano s emóciami a silným vokálom.'
  ],
  'clair_de_lune' => [
    'mp3' => 'audio/clair_de_lune.mp3',
    'title' => 'Clair de Lune',
    'artist' => 'Claude Debussy',
    'album' => 'Suite bergamasque',
    'date' => '1905',
    'genre' => 'Classical',
    'cover' => 'covers/clair_de_lune.jpg',
    'description' => 'Jemná a ikonická impresionistická klavírna skladba.'
  ],
];

$songData = isset($songs[$song]) ? $songs[$song] : $songs['A'];
?>
<!DOCTYPE html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $songData['title']; ?> - Detail skladby</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
  <header>
    <h1><?php echo $songData['title']; ?> – <?php echo $songData['artist']; ?></h1>
    <nav>
      <ul>
        <li><a href="index.html">Zoznam skladieb</a></li>
        <li><a href="register.php">Registrácia</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="song-detail">
      <div class="detail-content">
        <img src="<?php echo $songData['cover']; ?>" alt="Cover <?php echo $songData['title']; ?>">
        <div class="song-meta">
          <p><strong>Album:</strong> <?php echo $songData['album']; ?></p>
          <p><strong>Dátum vydania:</strong> <?php echo $songData['date']; ?></p>
          <p><strong>Žáner:</strong> <?php echo $songData['genre']; ?></p>
        </div>
      </div>
      <div class="song-description">
        <p><?php echo $songData['description']; ?></p>
      </div>
      <div class="audio-player">
        <audio controls>
          <source src="<?php echo $songData['mp3']; ?>" type="audio/mpeg">
          Váš prehliadač nepodporuje prehrávanie audia.
        </audio>
      </div>
      <a href="index.html"><button>← Späť na zoznam</button></a>
    </section>
  </main>
</body>
</html>
