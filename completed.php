<!DOCTYPE html>
<html lang="en">
<head>
    <title>VG Nostalgia</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" />
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <meta name="robots" content="index, follow" />
    <link rel="stylesheet" type="text/css" href="screen.css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://www.youtube.com/player_api"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <script src="toggles.js"></script>
</head>
<body>
<div class="wrapper">
    <div id="header">
        <p>&nbsp;</p>
    </div>
    <div id="content">
        <!-- Video Player start -->
        <div id="videoWrapper">          
            <div id="player"></div>
        </div>   
        <!-- Video Player end -->
    </div> 
        <!-- Search / List start -->
    <div id="sidebar">
        <a onclick="searchContent();" class="hvr-icon-rotate" style="float: right; margin-top: 25px; margin-right: 25px;">Search</a>
        <div style="overflow: hidden; padding-right: .5em;">
            <form id="search"> 
                <input list="games" placeholder="Enter title..." name="games" id="searchGames" style="width: 85%; margin-left: 25px; margin-right: 10px;" required>
                <datalist id="games">
                    <option value="Ape Escape (PSX)">
                    <option value="Final Fantasy VII (PSX)">    
                    <option value="Legend of Zelda, The: Link's Awakening (GB)">
                    <option value="Legend of Zelda, The: Ocarina of Time (N64)">
                    <option value="Mario Tennis (GBC)">
                    <option value="Mega Man 2 (NES)">
                    <option value="Pokemon Red Version (GB)">
                    <option value="Pokemon Silver Version (GBC)"> 
                    <option value="Sonic 2 (GEN)">    
                    <option value="Streets of Rage 2 (GEN)">
                    <option value="Super Mario 64 (N64)">
                    <option value="Super Mario Bros. 2 (NES)">
                </datalist>
            </form>
        </div>
        <nav>
        <!-- Game Boy -->
            <div id="gameboyDiv" style="display:none;">
                <h3>Game Boy</h3>
                <ul id="gameboy_list">
                    <li><a href="#PokemonRed" onclick="pokemonRed();">Pokémon Red Version</a></li>
                    <li><a href="#LinksAwakening" onclick="linksAwakening();">The Legend of Zelda: Link's Awakening</a></li>
                </ul>
            </div>

            <div id="pokemonredDiv" style="display:none;">
                <h3>Pokémon Red Version</h3>
                <ul id="pokemonred_list">
                    <li><a id="PokemonRed1" href="#PokemonRed1" onclick="pokemonRed1();" >Title Screen</a></li>
                </ul>
            </div>

            <div id="linksawakeningDiv" style="display:none;">
                <h3>The Legend of Zelda: Link's Awakening</h3>
                <ul id="linksawakening_list">
                    <li><a href="#LinksAwakening1" onclick="linksAwakening1();">Intro & Title Screen</a></li>
                </ul>
            </div>

        <!-- Game Boy Color -->   
            <div id="gameboycolorDiv" style="display:none;">
                <h3>Game Boy Color</h3>
                <ul id="gameboycolor_list">
                    <li><a href="#PokemonSilver" onclick="pokemonSilver();">Pokemon Silver</a></li>
                    <li><a href="#MarioTennis" onclick="marioTennis();">Mario Tennis</a></li>
                </ul>
            </div>

            <div id="pokemonsilverDiv" style="display:none;">
                <h3>Pokémon Silver Version</h3>
                <ul id="pokemonsilver_list">
                    <li><a href="#PokemonSilver1" onclick="pokemonSilver1();">Title Screen</a></li>
                    <li>Intro</li>
                </ul>
            </div>

            <div id="mariotennisDiv" style="display:none;">
                <h3>Mario Tennis</h3>
                <ul id="mariotennis_list">
                    <li><a href="#MarioTennis1" onclick="marioTennis1();">Intro & Title Screen</a></li>
                </ul>
            </div>
        
        <!-- Nintendo Entertainment System -->   
            <div id="nintendoDiv" style="display:none;">
                <h3>Nintendo Entertainment System</h3>
                <ul id="nintendo_list">
                    <li><a href="#MegaMan2" onclick="megaMan2();">Mega Man 2</a></li>
                    <li><a href="#SuperMarioBros2" onclick="superMarioBros2();">Super Mario Bros. 2</a></li>
                </ul>
            </div>

            <div id="megaman2Div" style="display:none;">
                <h3>Mega Man 2</h3>
                <ul id="megaman2_list">
                    <li><a href="#MegaMan21" onclick="megaMan21();">Intro & Title Screen</a></li>
                </ul>
            </div>

            <div id="supermariobros2Div" style="display:none;">
                <h3>Super Mario Bros. 2</h3>
                <ul id="supermariobros2_list">
                    <li><a href="#SuperMarioBros21" onclick="superMarioBros21();">Intro & Title Screen</a></li>
                </ul>
            </div>
        
        <!-- Nintendo 64 -->   
            <div id="nintendo64Div" style="display:none;">
                <h3>Nintendo 64</h3>
                <ul id="nintendo64_list">
                    <li><a href="#OcarinaOfTime" onclick="ocarinaOfTime();">The Legend of Zelda: Ocarina of Time</a></li>
                    <li><a href="#SuperMario64" onclick="superMario64();">Super Mario 64</a></li>
                </ul>
            </div>

            <div id="ocarinaoftimeDiv" style="display:none;">
                <h3>The Legend of Zelda: Ocarina of Time</h3>
                <ul id="ocarinaoftime_list">
                    <li><a href="#ocarinaOfTime1" onclick="ocarinaOfTime1();">Intro & Title Screen</a></li>
                </ul>
            </div>

            <div id="supermario64Div" style="display:none;">
                <h3>Super Mario 64</h3>
                <ul id="supermario64_list">
                    <li><a href="#superMario641" onclick="superMario641();">Intro & Title Screen</a></li>
                </ul>
            </div>

        <!-- PlayStation -->   
            <div id="playstationDiv" style="display:none;">
                <h3>PlayStation</h3>
                <ul id="playstation_list">
                    <li><a href="#ApeEscape" onclick="apeEscape();">Ape Escape</a></li>
                    <li><a href="#FinalFantasyVII" onclick="finalFantasyVII();">Final Fantasy VII</a></li>
                </ul>
            </div>

            <div id="apeescapeDiv" style="display:none;">
                <h3>Ape Escape</h3>
                <ul id="apeescapee_list">
                    <li><a href="#apeEscape1" onclick="apeEscape1();">Intro & Title Screen</a></li>
                </ul>
            </div>

            <div id="finalfantasyviiDiv" style="display:none;">
                <h3>Final Fantasy VII</h3>
                <ul id="finalfantasyvii_list">
                    <li><a href="#finalFantasyVII1" onclick="finalFantasyVII1();">Intro & Title Screen</a></li>
                </ul>
            </div>
        
        <!-- Sega Genesis -->   
            <div id="genesisDiv" style="display:none;">
                <h3>Sega Genesis</h3>
                <ul id="genesis_list">
                    <li><a href="#Sonic2" onclick="sonic2();">Sonic 2</a></li>
                    <li><a href="#StreetsOfRage2" onclick="streetsOfRage2();">Streets of Rage 2</a></li>
                </ul>
            </div>

            <div id="sonic2Div" style="display:none;">
                <h3>Sonic 2</h3>
                <ul id="sonic2_list">
                    <li><a href="#sonic21" onclick="sonic21();">Intro & Title Screen</a></li>
                </ul>
            </div>

            <div id="streetsofrage2Div" style="display:none;">
                <h3>Streets of Rage 2</h3>
                <ul id="streetsofrage2_list">
                    <li><a href="#streetsOfRage21" onclick="streetsOfRage21();">Intro & Title Screen</a></li>
                </ul>
            </div>
        
        <!-- Platform names -->
            <div id="platformsDiv">
                <h3>Platforms</h3>
                <ul>
                    <li><a href="#gameboy" onclick="showGameboy();">Game Boy</a></li>
                    <li><a href="#gameboycolor" onclick="showGameboyColor();">Game Boy Color</a></li>
                    <li><a href="#nintendo64" onclick="showNintendo64();">Nintendo 64</a></li>
                    <li><a href="#nintendo" onclick="showNintendo();">Nintendo Entertainment System</a></li>
                    <li><a href="#playstation" onclick="showPlaystation();">PlayStation</a></li>
                    <li><a href="#genesis" onclick="showGenesis();">Sega Genesis</a></li>
                </ul>
            </div>

        <!-- Button navigation -->
            <div id="content_navigation">
                <a onclick="goBack();" class="hvr-icon-back">Back</a> &nbsp; 
                <a onclick="playRandom()" class="hvr-icon-spin">Random</a> &nbsp; 
                <a onclick="goHome();" class="hvr-icon-grow">Home</a>
                <br><br>
            </div>
        
            <div id="gameboynavigationDiv" style="display:none";>
                <a onclick="goBackGameboy();" class="hvr-icon-back">Back</a> &nbsp; 
                <a onclick="playRandom()" class="hvr-icon-spin">Random</a> &nbsp; 
                <a onclick="goHome();" class="hvr-icon-grow">Home</a>
                <br><br>
            </div>
        
            <div id="gameboycolornavigationDiv" style="display:none";>
                <a onclick="goBackGameboyColor();" class="hvr-icon-back">Back</a> &nbsp; 
                <a onclick="playRandom()" class="hvr-icon-spin">Random</a> &nbsp; 
                <a onclick="goHome();" class="hvr-icon-grow">Home</a>
                <br><br>
            </div>

            <div id="nintendo64navigationDiv" style="display:none";>
                <a onclick="goBackNintendo64();" class="hvr-icon-back">Back</a> &nbsp; 
                <a onclick="playRandom()" class="hvr-icon-spin">Random</a> &nbsp; 
                <a onclick="goHome();" class="hvr-icon-grow">Home</a>
                <br><br>
            </div>

            <div id="nintendonavigationDiv" style="display:none";>
                <a onclick="goBackNintendo();" class="hvr-icon-back">"Back</a> &nbsp; 
                <a onclick="playRandom()" class="hvr-icon-spin">Random</a> &nbsp; 
                <a onclick="goHome();" class="hvr-icon-grow">Home</a>
                <br><br>
            </div>

            <div id="playstationnavigationDiv" style="display:none";>
                <a onclick="goBackPlayStation();" class="hvr-icon-back">Back</a> &nbsp; 
                <a onclick="playRandom()" class="hvr-icon-spin">Random</a> &nbsp; 
                <a onclick="goHome();" class="hvr-icon-grow">Home</a>
                <br><br>
            </div>

            <div id="genesisnavigationDiv" style="display:none";>
                <a onclick="goBackGenesis();" class="hvr-icon-back">Back</a> &nbsp; 
                <a onclick="playRandom()" class="hvr-icon-spin">Random</a> &nbsp; 
                <a onclick="goHome();" class="hvr-icon-grow">Home</a>
                <br><br>
            </div>
        </nav> 
    </div>
    <!-- Search / List end -->

    <!-- Description Start -->
    <div id="description">

        <!-- Game Boy -->
        <div id="pokemonRedContent" style="display:none;">
            <h3>Pokémon Red Version</h3>
            <p>Pokémon Red Version and Pokémon Blue Version, originally released in Japan as Pocket Monsters: Red & Green, are role-playing video games developed by Game Freak and published by Nintendo for the Game Boy. They are the first installments of the Pokémon series. They were first released in Japan in 1996 as Red and Green. "Blue" was released later in the year as a special edition. They were later released as Red and Blue in North America, Europe and Australia over the following three years.</p>
        </div>
        
        <div id="linksAwakeningContent" style="display:none;">
            <h3>The Legend of Zelda: Link's Awakening</h3>
            <p>The Legend of Zelda: Link's Awakening, known as Zelda no Densetsu: Yume o Miru Shima (Japanese: ゼルダの伝説 夢をみる島, lit. The Legend of Zelda: Dream Island) in Japan, is a 1993 action-adventure video game developed by Nintendo Entertainment Analysis & Development and published by Nintendo for the Game Boy. It is the fourth installment in the The Legend of Zelda series, and the first for a handheld game console.</p>
        </div>
        
        <!-- Game Boy Color -->
        <div id="pokemonSilverContent" style="display:none;">
            <h3>Pokémon Silver Version</h3>
            <p>Pokémon Gold Version and Silver Version are the second installments of the Pokémon series of role-playing video games, developed by Game Freak and published by Nintendo for the Game Boy Color. They were released in Japan in 1999, Australia and North America in 2000, and Europe in 2001. Pokémon Crystal, a special edition, was released roughly a year later in each region. In 2009, Nintendo remade Gold and Silver for the Nintendo DS as Pokémon HeartGold and SoulSilver.</p>
        </div>
        
        <div id="marioTennisContent" style="display:none;">
            <h3>Mario Tennis</h3>
            <p>Mario Tennis is a tennis game for the Game Boy Color. It is the third Mario Tennis game in the series, and the first handheld game in the series. The game features an RPG-like story mode, in which the player controls either Alex or Nina in a quest to become the top tennis player and beat the best player of all, Mario. It was re-released on the 3DS Virtual Console.</p>
        </div>
        
        <!-- Nintendo 64 -->
        
        <div id="ocarinaOfTimeContent" style="display:none;">
            <h3>The Legend of Zelda: Ocarina of Time</h3>
            <p>The Legend of Zelda: Ocarina of Time (Japanese: ゼルダの伝説 時のオカリナ // Zeruda no Densetsu: Toki no Okarina) is an action-adventure video game developed and published by Nintendo for the Nintendo 64. It was released in Japan and North America in November 1998, and in Europe and Australia in December 1998. Originally developed for the 64DD peripheral, the game was instead released on a 256-megabit (32-megabyte) cartridge, the largest-capacity cartridge Nintendo produced at that time. Ocarina of Time is the fifth game in the The Legend of Zelda series, and the first with 3D graphics.</p>        
        </div>
        
        <div id="superMario64Content" style="display:none;">
            <h3>Super Mario 64</h3>
            <p>Super Mario 64 (Japanese: スーパーマリオ64 // Sūpā Mario Rokujūyon) is a 1996 platform video game developed and published by Nintendo for the Nintendo 64. Along with Pilotwings 64, it was one of the launch titles for the console. It was released in Japan on June 23, 1996, and later in North America, Europe, and Australia. It is the best-selling game on the Nintendo 64, with more than eleven million copies sold.</p>        
        </div>
        
        <!-- Nintendo Entertainment System -->
        
        <div id="superMarioBros2Content" style="display:none;">
            <h3>Super Mario Bros. 2</h3>
            <p>Super Mario Bros. 2, released in Japan as Super Mario USA (Japanese: スーパーマリオUSA?, Sūpā Mario USA), is a 1988 platform game developed and published by Nintendo for the Nintendo Entertainment System. The game was first released in North America on October 9, 1988. Super Mario Bros. 2 has been remade or re-released for several video game consoles. The game that became Super Mario Bros. 2 started out as a prototype for a vertically scrolling, two-player, cooperative-action game, but later was re-branded into Yume Kōjō: Doki Doki Panic.</p>
        </div>
        
        <div id="megaMan2Content" style="display:none;">
            <h3>Mega Man 2</h3>
            <p>Mega Man 2, known in Japan as Rockman 2: Dr. Wily no Nazo (ロックマン2 Dr.ワイリーの謎 Rokkuman 2 Dr. Wairī no Nazo?, lit. "Rockman 2: The Mystery of Dr. Wily"), is a platform game developed and published by Capcom for the Nintendo Entertainment System. It is the second installment in the original Mega Man series. The game was released in Japan in 1988, and in North America and PAL regions the following years. Mega Man 2 continues the titular protagonist's battle against the evil Dr. Wily and his rogue robots.</p>
        </div>
        
        <!-- PlayStation -->
        
        <div id="finalFantasyVIIContent" style="display:none;">
            <h3>Final Fantasy VII</h3>
            <p>Final Fantasy VII is a role-playing video game developed and published by Square (now Square Enix) for the PlayStation platform. Released in 1997, it is the seventh installment in the Final Fantasy series and the first in the series to use 3D computer graphics, featuring fully rendered characters on pre-rendered backgrounds. It was also the first game in the main series to be released in Europe. The story follows Cloud Strife, a mercenary who joins the eco-terrorist rebel organization AVALANCHE to stop the world-controlling megacorporation Shinra from draining the life of the planet to use as an energy source. Cloud and his allies become involved in a larger world-threatening conflict and face off against Sephiroth, the main antagonist.</p>
        </div>
        
        <div id="apeEscapeContent" style="display:none;">
            <h3>Ape Escape</h3>
            <p>Ape Escape (known as Saru Get You (サルゲッチュ Saru Getchu?) in Japan) is a series of video games made by Sony Computer Entertainment, starting with Ape Escape for PlayStation in 1999. The series often incorporates ape-related humour, unique gameplay, and a wide variety of pop culture references; it is also notable for being the first game to make the DualShock or Dual Analog controller mandatory. The first game and various spin-offs were developed by SCEI while the second, third and other various party games were developed by SCE Japan Studio.</p>
        </div>
        
        <!-- Sega Genesis -->
        
        <div id="sonic2Content" style="display:none;">
            <h3>Sonic 2</h3>
            <p>PSonic the Hedgehog 2 (Japanese: ソニック・ザ・ヘッジホッグ2ツー // Sonikku za Hejjihoggu Tsū?) is a platform video game developed by Sonic Team, with assistance from Sega Technical Institute, and published by Sega for the Sega Genesis console. It was released worldwide in November 1992. The game is the second main entry in the Sonic the Hedgehog series, and the first to feature Miles "Tails" Prower, a flying two-tailed fox. He and protagonist Sonic the Hedgehog must stop the series antagonist Dr. Ivo Robotnik from stealing the Chaos Emeralds in order to power his space station, called the Death Egg.</p>
        </div>
        
        <div id="streetsOfRage2Content" style="display:none;">
            <h3>Streets of Rage 2</h3>
            <p>Streets of Rage 2, released in Japan as Bare Knuckle II: The Requiem of the Deadly Battle (ベア・ナックルII 死闘への鎮魂歌 Bea Nakkuru Tsū: Shitō he no Chinkonka?), is a side-scrolling beat 'em up video game developed and published by Sega in 1992 for the Mega Drive/Genesis console. It is the second game in the Streets of Rage series, a sequel to Streets of Rage and followed by Streets of Rage 3. The game introduced two new characters: Max Thunder and Eddie "Skate" Hunter, brother of Adam Hunter from the original game. It was critically acclaimed upon release and has since been listed among the best games of all time.</p>        
        </div>
        
        <!-- Welcome Video -->
        <div id="welcomeContent">
        <h3>Welcome!</h3>
            <p>Hi! VG Nostalgia features curated videos of your favorite video game sequences. 
                To begin, select a platform from the list on the right. 
                Use the search function to quickly find exactly what you're looking for. 
                If you don't have anything specific in mind, try pressing the "Random" button to play a random video. Enjoy!</p>
        </div>
    </div>
    <!-- Description End --> 
</div>
    
    <!-- Push / Footer Begin -->
<div class="push"></div>
<div id="footer">
    <span id="site-modals">
    &nbsp; &nbsp;<img src="http://vgnostalgia.com/logo_small.png" alt="footer_logo">&nbsp; &nbsp;
    <a href="http://www.vgnostalgia.com/">Home</a>&nbsp; &nbsp;
        
        <!-- About Modal -->
    <a onclick="document.getElementById('about-modal').style.display='block'">About</a>&nbsp; &nbsp;
    <div id="about-modal" class="modal">
        <div class="modal-content">
          <div class="modal-container-about">
            <span onclick="document.getElementById('about-modal').style.display='none'" class="closebtn">&times;</span>
            <br>
            <h1>About</h1>
            <p>Hello! I created this for a few different reasons: <br><br>
                <span id="bold">(1)</span> To meet the requirements of my class, CIT 336.<br>
                <span id="bold">(2)</span> To meet the requirements of my class, CS 371.<br>
                <span id="bold">(3)</span> Because I'm a sucker for nostalgic moments and video games were a large part of my childhood and teenage years.</p>
            <br>
            <p>I hope you enjoy experiencing the content made available here.</p>
            <br>
          </div>
        </div>
    </div>
        
        <!-- Request Modal-->
    <a onclick="document.getElementById('request-modal').style.display='block'">Request</a>&nbsp; &nbsp;
    <div id="request-modal" class="modal">
        <div class="modal-content">
          <div class="modal-container">
            <span onclick="document.getElementById('request-modal').style.display='none'" class="closebtn">&times;</span>
            <div id="contact-area">
                    <br>
                    <h1>Request</h1>
                    <p>Couldn't find what you were looking for? Want a video added? Send a request!</p>
                <form method="post">
                    
                    <label for="Platform">Platform:</label>
                    <input type="text" name="Platform" id="Platform" required/>

                    <label for="Title">Title:</label>
                    <input type="text" name="Title" id="Title" required/>

                    <label for="Year">Year:</label>
                    <input type="text" name="Year" id="Year" required/>

                    <label for="Description">Description:</label><br />
                    <textarea name="Description" rows="20" cols="20" id="Description" required></textarea>

                    <input type="submit" name="Submit" value="Submit" class="submit-button" />
                </form>
                    <p id="demo"></p>
                <div style="clear: both;"></div>
                </div>
          </div>
        </div>
        </div>
        
        <!-- Contact Modal-->
        <a onclick="document.getElementById('contact-modal').style.display='block'">Contact</a>&nbsp; &nbsp; 
        <div id="contact-modal" class="modal">
        <div class="modal-content">
          <div class="modal-container">
            <span onclick="document.getElementById('contact-modal').style.display='none'" class="closebtn">&times;</span>
                <div id="contact-area">
                    <br>
                    <h1>Contact</h1>
                    <p>Have some kind words? Perhaps some not-so-kind words? Drop us a line!</p>
                <form method="post">
                    
                                    <label for="Name">Name:</label>
                                    <input type="text" name="Name" id="Name" required/>

                                    <label for="Email">Email:</label>
                                    <input type="text" name="Email" id="Email" required/>

                                    <label for="Message">Message:</label><br />
                                    <textarea name="Message" rows="20" cols="20" id="Message" required></textarea>

                                    <input type="submit" name="Submit" value="Submit" class="submit-button" />
                </form>
                <div style="clear: both;"></div>
                </div>
            
            
          </div>
        </div>
        </div>
        
        <a href="http://www.vgnostalgia.com/cit336.php">CIT 336</a>
    </span>
        
    </p>
</div>

</body>
</html>