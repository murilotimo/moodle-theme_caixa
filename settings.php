<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme
 * @subpackage bcu
 * @copyright  2014 Birmingham City University <michael.grant@bcu.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

$settings = null;
require_once(__DIR__.'/libs/admin_confightmleditor.php');
defined('MOODLE_INTERNAL') || die;

$fontlist = array(
'default' => "default",
'ABeeZee' => "ABeeZee",
'Abel' => "Abel",
'Abril Fatface' => "Abril Fatface",
'Aclonica' => "Aclonica",
'Acme' => "Acme",
'Actor' => "Actor",
'Adamina' => "Adamina",
'Advent Pro' => "Advent Pro",
'Aguafina Script' => "Aguafina Script",
'Akronim' => "Akronim",
'Aladin' => "Aladin",
'Aldrich' => "Aldrich",
'Alef' => "Alef",
'Alegreya' => "Alegreya",
'Alegreya Sans' => "Alegreya Sans",
'Alegreya Sans SC' => "Alegreya Sans SC",
'Alegreya SC' => "Alegreya SC",
'Alex Brush' => "Alex Brush",
'Alfa Slab One' => "Alfa Slab One",
'Alice' => "Alice",
'Alike' => "Alike",
'Alike Angular' => "Alike Angular",
'Allan' => "Allan",
'Allerta' => "Allerta",
'Allerta Stencil' => "Allerta Stencil",
'Allura' => "Allura",
'Almendra' => "Almendra",
'Almendra Display' => "Almendra Display",
'Almendra SC' => "Almendra SC",
'Amarante' => "Amarante",
'Amaranth' => "Amaranth",
'Amatic SC' => "Amatic SC",
'Amethysta' => "Amethysta",
'Amiri' => "Amiri",
'Amita' => "Amita",
'Anaheim' => "Anaheim",
'Andada' => "Andada",
'Andika' => "Andika",
'Angkor' => "Angkor",
'Annie Use Your Telescope' => "Annie Use Your Telescope",
'Anonymous Pro' => "Anonymous Pro",
'Antic' => "Antic",
'Antic Didone' => "Antic Didone",
'Antic Slab' => "Antic Slab",
'Anton' => "Anton",
'Arapey' => "Arapey",
'Arbutus' => "Arbutus",
'Arbutus Slab' => "Arbutus Slab",
'Architects Daughter' => "Architects Daughter",
'Archivo Black' => "Archivo Black",
'Archivo Narrow' => "Archivo Narrow",
'Arimo' => "Arimo",
'Arizonia' => "Arizonia",
'Armata' => "Armata",
'Artifika' => "Artifika",
'Arvo' => "Arvo",
'Arya' => "Arya",
'Asap' => "Asap",
'Asar' => "Asar",
'Asset' => "Asset",
'Astloch' => "Astloch",
'Asul' => "Asul",
'Atomic Age' => "Atomic Age",
'Aubrey' => "Aubrey",
'Audiowide' => "Audiowide",
'Autour One' => "Autour One",
'Average' => "Average",
'Average Sans' => "Average Sans",
'Averia Gruesa Libre' => "Averia Gruesa Libre",
'Averia Libre' => "Averia Libre",
'Averia Sans Libre' => "Averia Sans Libre",
'Averia Serif Libre' => "Averia Serif Libre",
'Bad Script' => "Bad Script",
'Balthazar' => "Balthazar",
'Bangers' => "Bangers",
'Basic' => "Basic",
'Battambang' => "Battambang",
'Baumans' => "Baumans",
'Bayon' => "Bayon",
'Belgrano' => "Belgrano",
'Belleza' => "Belleza",
'BenchNine' => "BenchNine",
'Bentham' => "Bentham",
'Berkshire Swash' => "Berkshire Swash",
'Bevan' => "Bevan",
'Bigelow Rules' => "Bigelow Rules",
'Bigshot One' => "Bigshot One",
'Bilbo' => "Bilbo",
'Bilbo Swash Caps' => "Bilbo Swash Caps",
'Biryani' => "Biryani",
'Bitter' => "Bitter",
'Black Ops One' => "Black Ops One",
'Bokor' => "Bokor",
'Bonbon' => "Bonbon",
'Boogaloo' => "Boogaloo",
'Bowlby One' => "Bowlby One",
'Bowlby One SC' => "Bowlby One SC",
'Brawler' => "Brawler",
'Bree Serif' => "Bree Serif",
'Bubblegum Sans' => "Bubblegum Sans",
'Bubbler One' => "Bubbler One",
'Buda' => "Buda",
'Buenard' => "Buenard",
'Butcherman' => "Butcherman",
'Butterfly Kids' => "Butterfly Kids",
'Cabin' => "Cabin",
'Cabin Condensed' => "Cabin Condensed",
'Cabin Sketch' => "Cabin Sketch",
'Caesar Dressing' => "Caesar Dressing",
'Cagliostro' => "Cagliostro",
'Calligraffitti' => "Calligraffitti",
'Cambay' => "Cambay",
'Cambo' => "Cambo",
'Candal' => "Candal",
'Cantarell' => "Cantarell",
'Cantata One' => "Cantata One",
'Cantora One' => "Cantora One",
'Capriola' => "Capriola",
'Cardo' => "Cardo",
'Carme' => "Carme",
'Carrois Gothic' => "Carrois Gothic",
'Carrois Gothic SC' => "Carrois Gothic SC",
'Carter One' => "Carter One",
'Catamaran' => "Catamaran",
'Caudex' => "Caudex",
'Caveat' => "Caveat",
'Caveat Brush' => "Caveat Brush",
'Cedarville Cursive' => "Cedarville Cursive",
'Ceviche One' => "Ceviche One",
'Changa One' => "Changa One",
'Chango' => "Chango",
'Chau Philomene One' => "Chau Philomene One",
'Chela One' => "Chela One",
'Chelsea Market' => "Chelsea Market",
'Chenla' => "Chenla",
'Cherry Cream Soda' => "Cherry Cream Soda",
'Cherry Swash' => "Cherry Swash",
'Chewy' => "Chewy",
'Chicle' => "Chicle",
'Chivo' => "Chivo",
'Chonburi' => "Chonburi",
'Cinzel' => "Cinzel",
'Cinzel Decorative' => "Cinzel Decorative",
'Clicker Script' => "Clicker Script",
'Coda' => "Coda",
'Coda Caption' => "Coda Caption",
'Codystar' => "Codystar",
'Combo' => "Combo",
'Comfortaa' => "Comfortaa",
'Coming Soon' => "Coming Soon",
'Concert One' => "Concert One",
'Condiment' => "Condiment",
'Content' => "Content",
'Contrail One' => "Contrail One",
'Convergence' => "Convergence",
'Cookie' => "Cookie",
'Copse' => "Copse",
'Corben' => "Corben",
'Courgette' => "Courgette",
'Cousine' => "Cousine",
'Coustard' => "Coustard",
'Covered By Your Grace' => "Covered By Your Grace",
'Crafty Girls' => "Crafty Girls",
'Creepster' => "Creepster",
'Crete Round' => "Crete Round",
'Crimson Text' => "Crimson Text",
'Croissant One' => "Croissant One",
'Crushed' => "Crushed",
'Cuprum' => "Cuprum",
'Cutive' => "Cutive",
'Cutive Mono' => "Cutive Mono",
'Damion' => "Damion",
'Dancing Script' => "Dancing Script",
'Dangrek' => "Dangrek",
'Dawning of a New Day' => "Dawning of a New Day",
'Days One' => "Days One",
'Dekko' => "Dekko",
'Delius' => "Delius",
'Delius Swash Caps' => "Delius Swash Caps",
'Delius Unicase' => "Delius Unicase",
'Della Respira' => "Della Respira",
'Denk One' => "Denk One",
'Devonshire' => "Devonshire",
'Dhurjati' => "Dhurjati",
'Didact Gothic' => "Didact Gothic",
'Diplomata' => "Diplomata",
'Diplomata SC' => "Diplomata SC",
'Domine' => "Domine",
'Donegal One' => "Donegal One",
'Doppio One' => "Doppio One",
'Dorsa' => "Dorsa",
'Dosis' => "Dosis",
'Dr Sugiyama' => "Dr Sugiyama",
'Droid Sans' => "Droid Sans",
'Droid Sans Mono' => "Droid Sans Mono",
'Droid Serif' => "Droid Serif",
'Duru Sans' => "Duru Sans",
'Dynalight' => "Dynalight",
'Eagle Lake' => "Eagle Lake",
'Eater' => "Eater",
'EB Garamond' => "EB Garamond",
'Economica' => "Economica",
'Eczar' => "Eczar",
'Ek Mukta' => "Ek Mukta",
'Electrolize' => "Electrolize",
'Elsie' => "Elsie",
'Elsie Swash Caps' => "Elsie Swash Caps",
'Emblema One' => "Emblema One",
'Emilys Candy' => "Emilys Candy",
'Engagement' => "Engagement",
'Englebert' => "Englebert",
'Enriqueta' => "Enriqueta",
'Erica One' => "Erica One",
'Esteban' => "Esteban",
'Euphoria Script' => "Euphoria Script",
'Ewert' => "Ewert",
'Exo' => "Exo",
'Exo 2' => "Exo 2",
'Expletus Sans' => "Expletus Sans",
'Fanwood Text' => "Fanwood Text",
'Fascinate' => "Fascinate",
'Fascinate Inline' => "Fascinate Inline",
'Faster One' => "Faster One",
'Fasthand' => "Fasthand",
'Fauna One' => "Fauna One",
'Federant' => "Federant",
'Federo' => "Federo",
'Felipa' => "Felipa",
'Fenix' => "Fenix",
'Finger Paint' => "Finger Paint",
'Fira Mono' => "Fira Mono",
'Fira Sans' => "Fira Sans",
'Fjalla One' => "Fjalla One",
'Fjord One' => "Fjord One",
'Flamenco' => "Flamenco",
'Flavors' => "Flavors",
'Fondamento' => "Fondamento",
'Fontdiner Swanky' => "Fontdiner Swanky",
'Forum' => "Forum",
'Francois One' => "Francois One",
'Freckle Face' => "Freckle Face",
'Fredericka the Great' => "Fredericka the Great",
'Fredoka One' => "Fredoka One",
'Freehand' => "Freehand",
'Fresca' => "Fresca",
'Frijole' => "Frijole",
'Fruktur' => "Fruktur",
'Fugaz One' => "Fugaz One",
'Gabriela' => "Gabriela",
'Gafata' => "Gafata",
'Galdeano' => "Galdeano",
'Galindo' => "Galindo",
'Gentium Basic' => "Gentium Basic",
'Gentium Book Basic' => "Gentium Book Basic",
'Geo' => "Geo",
'Geostar' => "Geostar",
'Geostar Fill' => "Geostar Fill",
'Germania One' => "Germania One",
'GFS Didot' => "GFS Didot",
'GFS Neohellenic' => "GFS Neohellenic",
'Gidugu' => "Gidugu",
'Gilda Display' => "Gilda Display",
'Give You Glory' => "Give You Glory",
'Glass Antiqua' => "Glass Antiqua",
'Glegoo' => "Glegoo",
'Gloria Hallelujah' => "Gloria Hallelujah",
'Goblin One' => "Goblin One",
'Gochi Hand' => "Gochi Hand",
'Gorditas' => "Gorditas",
'Goudy Bookletter 1911' => "Goudy Bookletter 1911",
'Graduate' => "Graduate",
'Grand Hotel' => "Grand Hotel",
'Gravitas One' => "Gravitas One",
'Great Vibes' => "Great Vibes",
'Griffy' => "Griffy",
'Gruppo' => "Gruppo",
'Gudea' => "Gudea",
'Gurajada' => "Gurajada",
'Habibi' => "Habibi",
'Halant' => "Halant",
'Hammersmith One' => "Hammersmith One",
'Hanalei' => "Hanalei",
'Hanalei Fill' => "Hanalei Fill",
'Handlee' => "Handlee",
'Hanuman' => "Hanuman",
'Happy Monkey' => "Happy Monkey",
'Headland One' => "Headland One",
'Henny Penny' => "Henny Penny",
'Herr Von Muellerhoff' => "Herr Von Muellerhoff",
'Hind' => "Hind",
'Hind Siliguri' => "Hind Siliguri",
'Hind Vadodara' => "Hind Vadodara",
'Holtwood One SC' => "Holtwood One SC",
'Homemade Apple' => "Homemade Apple",
'Homenaje' => "Homenaje",
'Iceberg' => "Iceberg",
'Iceland' => "Iceland",
'IM Fell Double Pica' => "IM Fell Double Pica",
'IM Fell Double Pica SC' => "IM Fell Double Pica SC",
'IM Fell DW Pica' => "IM Fell DW Pica",
'IM Fell DW Pica SC' => "IM Fell DW Pica SC",
'IM Fell English' => "IM Fell English",
'IM Fell English SC' => "IM Fell English SC",
'IM Fell French Canon' => "IM Fell French Canon",
'IM Fell French Canon SC' => "IM Fell French Canon SC",
'IM Fell Great Primer' => "IM Fell Great Primer",
'IM Fell Great Primer SC' => "IM Fell Great Primer SC",
'Imprima' => "Imprima",
'Inconsolata' => "Inconsolata",
'Inder' => "Inder",
'Indie Flower' => "Indie Flower",
'Inika' => "Inika",
'Inknut Antiqua' => "Inknut Antiqua",
'Irish Grover' => "Irish Grover",
'Istok Web' => "Istok Web",
'Italiana' => "Italiana",
'Italianno' => "Italianno",
'Itim' => "Itim",
'Jacques Francois' => "Jacques Francois",
'Jacques Francois Shadow' => "Jacques Francois Shadow",
'Jaldi' => "Jaldi",
'Jim Nightshade' => "Jim Nightshade",
'Jockey One' => "Jockey One",
'Jolly Lodger' => "Jolly Lodger",
'Josefin Sans' => "Josefin Sans",
'Josefin Slab' => "Josefin Slab",
'Joti One' => "Joti One",
'Judson' => "Judson",
'Julee' => "Julee",
'Julius Sans One' => "Julius Sans One",
'Junge' => "Junge",
'Jura' => "Jura",
'Just Another Hand' => "Just Another Hand",
'Just Me Again Down Here' => "Just Me Again Down Here",
'Kadwa' => "Kadwa",
'Kalam' => "Kalam",
'Kameron' => "Kameron",
'Kantumruy' => "Kantumruy",
'Karla' => "Karla",
'Karma' => "Karma",
'Kaushan Script' => "Kaushan Script",
'Kavoon' => "Kavoon",
'Kdam Thmor' => "Kdam Thmor",
'Keania One' => "Keania One",
'Kelly Slab' => "Kelly Slab",
'Kenia' => "Kenia",
'Khand' => "Khand",
'Khmer' => "Khmer",
'Khula' => "Khula",
'Kite One' => "Kite One",
'Knewave' => "Knewave",
'Kotta One' => "Kotta One",
'Koulen' => "Koulen",
'Kranky' => "Kranky",
'Kreon' => "Kreon",
'Kristi' => "Kristi",
'Krona One' => "Krona One",
'Kurale' => "Kurale",
'La Belle Aurore' => "La Belle Aurore",
'Laila' => "Laila",
'Lakki Reddy' => "Lakki Reddy",
'Lancelot' => "Lancelot",
'Lateef' => "Lateef",
'Lato' => "Lato",
'League Script' => "League Script",
'Leckerli One' => "Leckerli One",
'Ledger' => "Ledger",
'Lekton' => "Lekton",
'Lemon' => "Lemon",
'Libre Baskerville' => "Libre Baskerville",
'Life Savers' => "Life Savers",
'Lilita One' => "Lilita One",
'Lily Script One' => "Lily Script One",
'Limelight' => "Limelight",
'Linden Hill' => "Linden Hill",
'Lobster' => "Lobster",
'Lobster Two' => "Lobster Two",
'Londrina Outline' => "Londrina Outline",
'Londrina Shadow' => "Londrina Shadow",
'Londrina Sketch' => "Londrina Sketch",
'Londrina Solid' => "Londrina Solid",
'Lora' => "Lora",
'Love Ya Like A Sister' => "Love Ya Like A Sister",
'Loved by the King' => "Loved by the King",
'Lovers Quarrel' => "Lovers Quarrel",
'Luckiest Guy' => "Luckiest Guy",
'Lusitana' => "Lusitana",
'Lustria' => "Lustria",
'Macondo' => "Macondo",
'Macondo Swash Caps' => "Macondo Swash Caps",
'Magra' => "Magra",
'Maiden Orange' => "Maiden Orange",
'Mako' => "Mako",
'Mallanna' => "Mallanna",
'Mandali' => "Mandali",
'Marcellus' => "Marcellus",
'Marcellus SC' => "Marcellus SC",
'Marck Script' => "Marck Script",
'Margarine' => "Margarine",
'Marko One' => "Marko One",
'Marmelad' => "Marmelad",
'Martel' => "Martel",
'Martel Sans' => "Martel Sans",
'Marvel' => "Marvel",
'Mate' => "Mate",
'Mate SC' => "Mate SC",
'Maven Pro' => "Maven Pro",
'McLaren' => "McLaren",
'Meddon' => "Meddon",
'MedievalSharp' => "MedievalSharp",
'Medula One' => "Medula One",
'Megrim' => "Megrim",
'Meie Script' => "Meie Script",
'Merienda' => "Merienda",
'Merienda One' => "Merienda One",
'Merriweather' => "Merriweather",
'Merriweather Sans' => "Merriweather Sans",
'Metal' => "Metal",
'Metal Mania' => "Metal Mania",
'Metamorphous' => "Metamorphous",
'Metrophobic' => "Metrophobic",
'Michroma' => "Michroma",
'Milonga' => "Milonga",
'Miltonian' => "Miltonian",
'Miltonian Tattoo' => "Miltonian Tattoo",
'Miniver' => "Miniver",
'Miss Fajardose' => "Miss Fajardose",
'Modak' => "Modak",
'Modern Antiqua' => "Modern Antiqua",
'Molengo' => "Molengo",
'Molle' => "Molle",
'Monda' => "Monda",
'Monofett' => "Monofett",
'Monoton' => "Monoton",
'Monsieur La Doulaise' => "Monsieur La Doulaise",
'Montaga' => "Montaga",
'Montez' => "Montez",
'Montserrat' => "Montserrat",
'Montserrat Alternates' => "Montserrat Alternates",
'Montserrat Subrayada' => "Montserrat Subrayada",
'Moul' => "Moul",
'Moulpali' => "Moulpali",
'Mountains of Christmas' => "Mountains of Christmas",
'Mouse Memoirs' => "Mouse Memoirs",
'Mr Bedfort' => "Mr Bedfort",
'Mr Dafoe' => "Mr Dafoe",
'Mr De Haviland' => "Mr De Haviland",
'Mrs Saint Delafield' => "Mrs Saint Delafield",
'Mrs Sheppards' => "Mrs Sheppards",
'Muli' => "Muli",
'Mystery Quest' => "Mystery Quest",
'Neucha' => "Neucha",
'Neuton' => "Neuton",
'New Rocker' => "New Rocker",
'News Cycle' => "News Cycle",
'Niconne' => "Niconne",
'Nixie One' => "Nixie One",
'Nobile' => "Nobile",
'Nokora' => "Nokora",
'Norican' => "Norican",
'Nosifer' => "Nosifer",
'Nothing You Could Do' => "Nothing You Could Do",
'Noticia Text' => "Noticia Text",
'Noto Sans' => "Noto Sans",
'Noto Serif' => "Noto Serif",
'Nova Cut' => "Nova Cut",
'Nova Flat' => "Nova Flat",
'Nova Mono' => "Nova Mono",
'Nova Oval' => "Nova Oval",
'Nova Round' => "Nova Round",
'Nova Script' => "Nova Script",
'Nova Slim' => "Nova Slim",
'Nova Square' => "Nova Square",
'NTR' => "NTR",
'Numans' => "Numans",
'Nunito' => "Nunito",
'Odor Mean Chey' => "Odor Mean Chey",
'Offside' => "Offside",
'Old Standard TT' => "Old Standard TT",
'Oldenburg' => "Oldenburg",
'Oleo Script' => "Oleo Script",
'Oleo Script Swash Caps' => "Oleo Script Swash Caps",
'Open Sans' => "Open Sans",
'Open Sans Condensed' => "Open Sans Condensed",
'Oranienbaum' => "Oranienbaum",
'Orbitron' => "Orbitron",
'Oregano' => "Oregano",
'Orienta' => "Orienta",
'Original Surfer' => "Original Surfer",
'Oswald' => "Oswald",
'Over the Rainbow' => "Over the Rainbow",
'Overlock' => "Overlock",
'Overlock SC' => "Overlock SC",
'Ovo' => "Ovo",
'Oxygen' => "Oxygen",
'Oxygen Mono' => "Oxygen Mono",
'Pacifico' => "Pacifico",
'Palanquin' => "Palanquin",
'Palanquin Dark' => "Palanquin Dark",
'Paprika' => "Paprika",
'Parisienne' => "Parisienne",
'Passero One' => "Passero One",
'Passion One' => "Passion One",
'Pathway Gothic One' => "Pathway Gothic One",
'Patrick Hand' => "Patrick Hand",
'Patrick Hand SC' => "Patrick Hand SC",
'Patua One' => "Patua One",
'Paytone One' => "Paytone One",
'Peddana' => "Peddana",
'Peralta' => "Peralta",
'Permanent Marker' => "Permanent Marker",
'Petit Formal Script' => "Petit Formal Script",
'Petrona' => "Petrona",
'Philosopher' => "Philosopher",
'Piedra' => "Piedra",
'Pinyon Script' => "Pinyon Script",
'Pirata One' => "Pirata One",
'Plaster' => "Plaster",
'Play' => "Play",
'Playball' => "Playball",
'Playfair Display' => "Playfair Display",
'Playfair Display SC' => "Playfair Display SC",
'Podkova' => "Podkova",
'Poiret One' => "Poiret One",
'Poller One' => "Poller One",
'Poly' => "Poly",
'Pompiere' => "Pompiere",
'Pontano Sans' => "Pontano Sans",
'Poppins' => "Poppins",
'Port Lligat Sans' => "Port Lligat Sans",
'Port Lligat Slab' => "Port Lligat Slab",
'Pragati Narrow' => "Pragati Narrow",
'Prata' => "Prata",
'Preahvihear' => "Preahvihear",
'Press Start 2P' => "Press Start 2P",
'Princess Sofia' => "Princess Sofia",
'Prociono' => "Prociono",
'Prosto One' => "Prosto One",
'PT Mono' => "PT Mono",
'PT Sans' => "PT Sans",
'PT Sans Caption' => "PT Sans Caption",
'PT Sans Narrow' => "PT Sans Narrow",
'PT Serif' => "PT Serif",
'PT Serif Caption' => "PT Serif Caption",
'Puritan' => "Puritan",
'Purple Purse' => "Purple Purse",
'Quando' => "Quando",
'Quantico' => "Quantico",
'Quattrocento' => "Quattrocento",
'Quattrocento Sans' => "Quattrocento Sans",
'Questrial' => "Questrial",
'Quicksand' => "Quicksand",
'Quintessential' => "Quintessential",
'Qwigley' => "Qwigley",
'Racing Sans One' => "Racing Sans One",
'Radley' => "Radley",
'Rajdhani' => "Rajdhani",
'Raleway' => "Raleway",
'Raleway Dots' => "Raleway Dots",
'Ramabhadra' => "Ramabhadra",
'Ramaraja' => "Ramaraja",
'Rambla' => "Rambla",
'Rammetto One' => "Rammetto One",
'Ranchers' => "Ranchers",
'Rancho' => "Rancho",
'Ranga' => "Ranga",
'Rationale' => "Rationale",
'Ravi Prakash' => "Ravi Prakash",
'Redressed' => "Redressed",
'Reenie Beanie' => "Reenie Beanie",
'Revalia' => "Revalia",
'Rhodium Libre' => "Rhodium Libre",
'Ribeye' => "Ribeye",
'Ribeye Marrow' => "Ribeye Marrow",
'Righteous' => "Righteous",
'Risque' => "Risque",
'Roboto' => "Roboto",
'Roboto Condensed' => "Roboto Condensed",
'Roboto Mono' => "Roboto Mono",
'Roboto Slab' => "Roboto Slab",
'Rochester' => "Rochester",
'Rock Salt' => "Rock Salt",
'Rokkitt' => "Rokkitt",
'Romanesco' => "Romanesco",
'Ropa Sans' => "Ropa Sans",
'Rosario' => "Rosario",
'Rosarivo' => "Rosarivo",
'Rouge Script' => "Rouge Script",
'Rozha One' => "Rozha One",
'Rubik' => "Rubik",
'Rubik Mono One' => "Rubik Mono One",
'Rubik One' => "Rubik One",
'Ruda' => "Ruda",
'Rufina' => "Rufina",
'Ruge Boogie' => "Ruge Boogie",
'Ruluko' => "Ruluko",
'Rum Raisin' => "Rum Raisin",
'Ruslan Display' => "Ruslan Display",
'Russo One' => "Russo One",
'Ruthie' => "Ruthie",
'Rye' => "Rye",
'Sacramento' => "Sacramento",
'Sahitya' => "Sahitya",
'Sail' => "Sail",
'Salsa' => "Salsa",
'Sanchez' => "Sanchez",
'Sancreek' => "Sancreek",
'Sansita One' => "Sansita One",
'Sarala' => "Sarala",
'Sarina' => "Sarina",
'Sarpanch' => "Sarpanch",
'Satisfy' => "Satisfy",
'Scada' => "Scada",
'Scheherazade' => "Scheherazade",
'Schoolbell' => "Schoolbell",
'Seaweed Script' => "Seaweed Script",
'Sevillana' => "Sevillana",
'Seymour One' => "Seymour One",
'Shadows Into Light' => "Shadows Into Light",
'Shadows Into Light Two' =>  "Shadows Into Light Two",
'Shanti' => "Shanti",
'Share' => "Share",
'Share Tech' => "Share Tech",
'Share Tech Mono' => "Share Tech Mono",
'Shojumaru' => "Shojumaru",
'Short Stack' => "Short Stack",
'Siemreap' => "Siemreap",
'Sigmar One' => "Sigmar One",
'Signika' => "Signika",
'Signika Negative' => "Signika Negative",
'Simonetta' => "Simonetta",
'Sintony' => "Sintony",
'Sirin Stencil' => "Sirin Stencil",
'Six Caps' => "Six Caps",
'Skranji' => "Skranji",
'Slabo 13px' => "Slabo 13px",
'Slabo 27px' => "Slabo 27px",
'Slackey' => "Slackey",
'Smokum' => "Smokum",
'Smythe' => "Smythe",
'Sniglet' => "Sniglet",
'Snippet' => "Snippet",
'Snowburst One' => "Snowburst One",
'Sofadi One' => "Sofadi One",
'Sofia' => "Sofia",
'Sonsie One' => "Sonsie One",
'Sorts Mill Goudy' => "Sorts Mill Goudy",
'Source Code Pro' => "Source Code Pro",
'Source Sans Pro' => "Source Sans Pro",
'Source Serif Pro' => "Source Serif Pro",
'Special Elite' => "Special Elite",
'Spicy Rice' => "Spicy Rice",
'Spinnaker' => "Spinnaker",
'Spirax' => "Spirax",
'Squada One' => "Squada One",
'Sree Krushnadevaraya' => "Sree Krushnadevaraya",
'Stalemate' => "Stalemate",
'Stalinist One' => "Stalinist One",
'Stardos Stencil' => "Stardos Stencil",
'Stint Ultra Condensed' => "Stint Ultra Condensed",
'Stint Ultra Expanded' => "Stint Ultra Expanded",
'Stoke' => "Stoke",
'Strait' => "Strait",
'Sue Ellen Francisco' => "Sue Ellen Francisco",
'Sumana' => "Sumana",
'Sunshiney' => "Sunshiney",
'Supermercado One' => "Supermercado One",
'Sura' => "Sura",
'Suranna' => "Suranna",
'Suravaram' => "Suravaram",
'Suwannaphum' => "Suwannaphum",
'Swanky and Moo Moo' => "Swanky and Moo Moo",
'Syncopate' => "Syncopate",
'Tangerine' => "Tangerine",
'Taprom' => "Taprom",
'Tauri' => "Tauri",
'Teko' => "Teko",
'Telex' => "Telex",
'Tenali Ramakrishna' => "Tenali Ramakrishna",
'Tenor Sans' => "Tenor Sans",
'Text Me One' => "Text Me One",
'The Girl Next Door' => "The Girl Next Door",
'Tienne' => "Tienne",
'Tillana' => "Tillana",
'Timmana' => "Timmana",
'Tinos' => "Tinos",
'Titan One' => "Titan One",
'Titillium Web' => "Titillium Web",
'Trade Winds' => "Trade Winds",
'Trocchi' => "Trocchi",
'Trochut' => "Trochut",
'Trykker' => "Trykker",
'Tulpen One' => "Tulpen One",
'Ubuntu' => "Ubuntu",
'Ubuntu Condensed' => "Ubuntu Condensed",
'Ubuntu Mono' => "Ubuntu Mono",
'Ultra' => "Ultra",
'Uncial Antiqua' => "Uncial Antiqua",
'Underdog' => "Underdog",
'Unica One' => "Unica One",
'UnifrakturCook' => "UnifrakturCook",
'UnifrakturMaguntia' => "UnifrakturMaguntia",
'Unkempt' => "Unkempt",
'Unlock' => "Unlock",
'Unna' => "Unna",
'Vampiro One' => "Vampiro One",
'Varela' => "Varela",
'Varela Round' => "Varela Round",
'Vast Shadow' => "Vast Shadow",
'Vesper Libre' => "Vesper Libre",
'Vibur' => "Vibur",
'Vidaloka' => "Vidaloka",
'Viga' => "Viga",
'Voces' => "Voces",
'Volkhov' => "Volkhov",
'Vollkorn' => "Vollkorn",
'Voltaire' => "Voltaire",
'VT323' => "VT323",
'Waiting for the Sunrise' =>  "Waiting for the Sunrise",
'Wallpoet' => "Wallpoet",
'Walter Turncoat' => "Walter Turncoat",
'Warnes' => "Warnes",
'Wellfleet' => "Wellfleet",
'Wendy One' => "Wendy One",
'Wire One' => "Wire One",
'Work Sans' => "Work Sans",
'Yanone Kaffeesatz' => "Yanone Kaffeesatz",
'Yantramanav' => "Yantramanav",
'Yellowtail' => "Yellowtail",
'Yeseva One' => "Yeseva One",
'Yesteryear' => "Yesteryear",
'Zeyada' => "Zeyada");

if (is_siteadmin()) {
    $ADMIN->add('themes', new admin_category('theme_bcu', 'BCU'));

    $temp = new admin_settingpage('theme_bcu_colour', get_string('coloursettings', 'theme_bcu'));

    $temp->add(new admin_setting_heading('theme_bcu_colour',
                                         '',
                                         format_text(get_string('colourdesc', 'theme_bcu'),
                                         FORMAT_MARKDOWN)));

    // Main colours heading.
    $name = 'theme_bcu/settingsmaincolors';
    $heading = get_string('settingsmaincolors', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Site main colour.
    $name = 'theme_bcu/maincolor';
    $title = get_string('maincolor', 'theme_bcu');
    $description = get_string('maincolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#001E3C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Site background colour.
    $name = 'theme_bcu/backcolor';
    $title = get_string('backcolor', 'theme_bcu');
    $description = get_string('backcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Link colour.
    $name = 'theme_bcu/linkcolor';
    $title = get_string('linkcolor', 'theme_bcu');
    $description = get_string('linkcolordesc', 'theme_bcu');
    $default = '#001E3C';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    // Link hover colour.
    $name = 'theme_bcu/linkhover';
    $title = get_string('linkhover', 'theme_bcu');
    $description = get_string('linkhoverdesc', 'theme_bcu');
    $default = '#001E3C';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Header colours heading.
    $name = 'theme_bcu/settingsheadercolors';
    $heading = get_string('settingsheadercolors', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Loading bar colour.
    $name = 'theme_bcu/loadingcolor';
    $title = get_string('loadingcolor', 'theme_bcu');
    $description = get_string('loadingcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#29d', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Top header background colour.
    $name = 'theme_bcu/headerbkcolor';
    $title = get_string('headerbkcolor', 'theme_bcu');
    $description = get_string('headerbkcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#001e3c', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Top header text colour.
    $name = 'theme_bcu/headertextcolor';
    $title = get_string('headertextcolor', 'theme_bcu');
    $description = get_string('headertextcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Bottom header background colour.
    $name = 'theme_bcu/headerbkcolor2';
    $title = get_string('headerbkcolor2', 'theme_bcu');
    $description = get_string('headerbkcolor2desc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#001e3c', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Bottom header text colour.
    $name = 'theme_bcu/headertextcolor2';
    $title = get_string('headertextcolor2', 'theme_bcu');
    $description = get_string('headertextcolor2desc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Loading bar colour.
    $name = 'theme_bcu/loadingcolor';
    $title = get_string('loadingcolor', 'theme_bcu');
    $description = get_string('loadingcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#29d', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Menu colours heading.
    $name = 'theme_bcu/settingsmenucolors';
    $heading = get_string('settingsmenucolors', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Main menu background colour.
    $name = 'theme_bcu/menubkcolor';
    $title = get_string('menubkcolor', 'theme_bcu');
    $description = get_string('menubkcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu text colour.
    $name = 'theme_bcu/menufontcolor';
    $title = get_string('menufontcolor', 'theme_bcu');
    $description = get_string('menufontcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#444444', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu text hover colour. 
    $name = 'theme_bcu/menufonthovercolor';
    $title = get_string('menufonthovercolor', 'theme_bcu');
    $description = get_string('menufonthovercolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#3c469c', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu bottom border colour.
    $name = 'theme_bcu/menubordercolor';
    $title = get_string('menubordercolor', 'theme_bcu');
    $description = get_string('menubordercolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#b7b3ef', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Mobile Menu colours heading.
    $name = 'theme_bcu/settingsmobilemenucolors';
    $heading = get_string('settingsmobilemenucolors', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Mobile menu background colour.
    $name = 'theme_bcu/mobilemenubkcolor';
    $title = get_string('mobilemenubkcolor', 'theme_bcu');
    $description = get_string('mobilemenubkcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Mobile menu text colour.
    $name = 'theme_bcu/mobilemenufontcolor';
    $title = get_string('mobilemenufontcolor', 'theme_bcu');
    $description = get_string('mobilemenufontcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#000000', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Info Box colours heading.
    $name = 'theme_bcu/settingsinfoboxcolors';
    $heading = get_string('settingsinfoboxcolors', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Info Box background colour.
    $name = 'theme_bcu/infoboxcolor';
    $title = get_string('infoboxcolor', 'theme_bcu');
    $description = get_string('infoboxcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Info Box text colour.
    $name = 'theme_bcu/infoboxtextcolor';
    $title = get_string('infoboxtextcolor', 'theme_bcu');
    $description = get_string('infoboxtextcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Info Box 2 colours heading.
    $name = 'theme_bcu/settingssecondinfoboxcolors';
    $heading = get_string('settingssecondinfoboxcolors', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Info Box 2 background colour.
    $name = 'theme_bcu/infoboxcolor2';
    $title = get_string('infoboxcolor2', 'theme_bcu');
    $description = get_string('infoboxcolor2desc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#f3f3f3', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Info Box 2 text colour.
    $name = 'theme_bcu/infoboxtextcolor2';
    $title = get_string('infoboxtextcolor2', 'theme_bcu');
    $description = get_string('infoboxtextcolor2desc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#666666', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Market blocks colours heading.
    $name = 'theme_bcu/settingsmarketingcolors';
    $heading = get_string('settingsmarketingcolors', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_bcu/marketblockbordercolor';
    $title = get_string('marketblockbordercolor', 'theme_bcu');
    $description = get_string('marketblockbordercolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/marketblocksbackgroundcolor';
    $title = get_string('marketblocksbackgroundcolor', 'theme_bcu');
    $description = get_string('marketblocksbackgroundcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFFFFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);



    // Overlay tiles colours heading.
    $name = 'theme_bcu/settingsoverlaycolors';
    $heading = get_string('settingsoverlaycolors', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_bcu/rendereroverlaycolour';
    $title = get_string('rendereroverlaycolour', 'theme_bcu');
    $description = get_string('rendereroverlaycolourdesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#001E3C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/rendereroverlayfontcolour';
    $title = get_string('rendereroverlayfontcolour', 'theme_bcu');
    $description = get_string('rendereroverlayfontcolourdesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/tilesbordercolor';
    $title = get_string('tilesbordercolor', 'theme_bcu');
    $description = get_string('tilesbordercolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/covbkcolor';
    $title = get_string('covbkcolor', 'theme_bcu');
    $description = get_string('covbkcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0066cc', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/covfontcolor';
    $title = get_string('covfontcolor', 'theme_bcu');
    $description = get_string('covfontcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/dividingline';
    $title = get_string('dividingline', 'theme_bcu');
    $description = get_string('dividinglinedesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#B7B3EF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/dividingline2';
    $title = get_string('dividingline2', 'theme_bcu');
    $description = get_string('dividingline2desc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#B7B3EF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Navbar colours heading.
    $name = 'theme_bcu/settingsnavbarcolors';
    $heading = get_string('settingsnavbarcolors', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_bcu/navbarborder';
    $title = get_string('navbarborder', 'theme_bcu');
    $description = get_string('navbarborderdesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#B7B3EF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/navbarhover';
    $title = get_string('navbarhover', 'theme_bcu');
    $description = get_string('navbarhoverdesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#3C469C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Breadcrumb colours heading.
    $name = 'theme_bcu/settingsbreadcrumbcolors';
    $heading = get_string('settingsbreadcrumbcolors', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_bcu/breadcrumb';
    $title = get_string('breadcrumb', 'theme_bcu');
    $description = get_string('breadcrumbdesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#b4bbbf', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Breadcrumb text colour
    $name = 'theme_bcu/breadcrumbtextcolor';
    $title = get_string('breadcrumbtextcolor', 'theme_bcu');
    $description = get_string('breadcrumbtextcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#444444', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/activebreadcrumb';
    $title = get_string('activebreadcrumb', 'theme_bcu');
    $description = get_string('activebreadcrumbdesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/sectionheadingcolor';
    $title = get_string('sectionheadingcolor', 'theme_bcu');
    $description = get_string('sectionheadingcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#5f588a', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/currentcolor';
    $title = get_string('currentcolor', 'theme_bcu');
    $description = get_string('currentcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#d9edf7', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Footer colours heading.
    $name = 'theme_bcu/settingsfootercolors';
    $heading = get_string('settingsfootercolors', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_bcu/footerbkcolor';
    $title = get_string('footerbkcolor', 'theme_bcu');
    $description = get_string('footerbkcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#001e3c', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/footertextcolor';
    $title = get_string('footertextcolor', 'theme_bcu');
    $description = get_string('footertextcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/footertextcolor2';
    $title = get_string('footertextcolor2', 'theme_bcu');
    $description = get_string('footertextcolor2desc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/footerlinkcolor';
    $title = get_string('footerlinkcolor', 'theme_bcu');
    $description = get_string('footerlinkcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Fonts heading.
    $name = 'theme_bcu/settingsfonts';
    $heading = get_string('settingsfonts', 'theme_bcu');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Main Font Name.
	$name = 'theme_bcu/fontname';
    $title = get_string('fontname', 'theme_bcu');
    $description = get_string('fontnamedesc', 'theme_bcu');
    $default = 'Open Sans';
    $choices = $fontlist;
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main Font weight.
    $name = 'theme_bcu/fontweight';
    $title = get_string('fontweight', 'theme_bcu');
    $description = get_string('fontweightdesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '400');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main Font color.
    $name = 'theme_bcu/fontcolor';
    $title = get_string('fontcolor', 'theme_bcu');
    $description = get_string('fontcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header Font Name.
    $name = 'theme_bcu/fontheadername';
    $title = get_string('fontheadername', 'theme_bcu');
    $description = get_string('fontheadernamedesc', 'theme_bcu');
    $default = 'Roboto';
    $choices = $fontlist;
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);

    // Header Font weight.
    $name = 'theme_bcu/fontheaderweight';
    $title = get_string('fontheaderweight', 'theme_bcu');
    $description = get_string('fontheaderweightdesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '400');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header font color.
    $name = 'theme_bcu/fontheadercolor';
    $title = get_string('fontheadercolor', 'theme_bcu');
    $description = get_string('fontheadercolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    $ADMIN->add('theme_bcu', $temp);

    // Title Font Name.
    $name = 'theme_bcu/fonttitlename';
    $title = get_string('fonttitlename', 'theme_bcu');
    $description = get_string('fonttitlenamedesc', 'theme_bcu');
    $default = 'Roboto';
    $choices = $fontlist;
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Title Font size.
    $name = 'theme_bcu/fonttitlesize';
    $title = get_string('fonttitlesize', 'theme_bcu');
    $description = get_string('fonttitlesizedesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '24px');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Title Font weight.
    $name = 'theme_bcu/fonttitleweight';
    $title = get_string('fonttitleweight', 'theme_bcu');
    $description = get_string('fonttitleweightdesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '700');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Title font color.
    $name = 'theme_bcu/fonttitlecolor';
    $title = get_string('fonttitlecolor', 'theme_bcu');
    $description = get_string('fonttitlecolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $temp = new admin_settingpage('theme_bcu_buttons', get_string('buttonsettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_header', get_string('buttonsettingsheading', 'theme_bcu'),
    format_text(get_string('buttondesc', 'theme_bcu'), FORMAT_MARKDOWN)));
	
	$name = 'theme_bcu/buttonradius';
    $title = get_string('buttonradius', 'theme_bcu');
    $description = get_string('buttonradiusdesc', 'theme_bcu');
    $radchoices = array(
    	'0px' => "0px",
        '1px' => "1px",
        '2px' => "2px",
        '3px' => "3px",
        '4px' => "4px",
        '5px' => "5px",
        '6px' => "6px",
        '7px' => "7px",
        '8px' => "8px",
        '9px' => "9px",
        '10px' => "10px",
        '11px' => "11px",
        '12px' => "12px",        
    );
	$setting = new admin_setting_configselect($name, $title, $description, '2px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_bcu/buttoncolour';
    $title = get_string('buttoncolour', 'theme_bcu');
    $description = get_string('buttoncolourdesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#00aeef', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/buttonhovercolour';
    $title = get_string('buttonhovercolour', 'theme_bcu');
    $description = get_string('buttonhovercolourdesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0084c2', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/buttontextcolor';
    $title = get_string('buttontextcolor', 'theme_bcu');
    $description = get_string('buttontextcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);	

    $name = 'theme_bcu/editonbk';
    $title = get_string('editonbk', 'theme_bcu');
    $description = get_string('editonbkdesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0c901f', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/editoffbk';
    $title = get_string('editoffbk', 'theme_bcu');
    $description = get_string('editoffbkdesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#f01f1f', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/editfont';
	$title = get_string('editfont', 'theme_bcu');
	$description = get_string('editfontdesc', 'theme_bcu');
	$previewconfig = null;
	$setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$temp->add($setting);
	
	$name = 'theme_bcu/editverticalpadding';
    $title = get_string('editverticalpadding', 'theme_bcu');
    $description = get_string('editverticalpadding', 'theme_bcu');
    $radchoices = array(
    	'0px' => "0px",
        '1px' => "1px",
        '2px' => "2px",
        '3px' => "3px",
        '4px' => "4px",
        '5px' => "5px",
        '6px' => "6px",                
    );
	$setting = new admin_setting_configselect($name, $title, $description, '4px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/edithorizontalpadding';
    $title = get_string('edithorizontalpadding', 'theme_bcu');
    $description = get_string('edithorizontalpadding', 'theme_bcu');
    $radchoices = array(
    	'0px' => "0px",
        '1px' => "1px",
        '2px' => "2px",
        '3px' => "3px",
        '4px' => "4px",  
        '5px' => "5px",
        '6px' => "6px",
        '7px' => "7px",
        '8px' => "8px",                  
        '9px' => "9px",
        '10px' => "10px",
        '11px' => "11px",
        '12px' => "12px",
        '13px' => "13px",
        '14px' => "14px",
        '15px' => "15px",
        '16px' => "16px",
    );
	$setting = new admin_setting_configselect($name, $title, $description, '6px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/edittopmargin';
    $title = get_string('edittopmargin', 'theme_bcu');
    $description = get_string('edittopmargin', 'theme_bcu');
    $radchoices = array(
    	'0px' => "0px",
        '1px' => "1px",
        '2px' => "2px",
        '3px' => "3px",
        '4px' => "4px",                  
    );
	$setting = new admin_setting_configselect($name, $title, $description, '1px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/buttonlogincolor';
    $title = get_string('buttonlogincolor', 'theme_bcu');
    $description = get_string('buttonlogincolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0C901F', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/buttonloginhovercolor';
    $title = get_string('buttonloginhovercolor', 'theme_bcu');
    $description = get_string('buttonloginhovercolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0084c2', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/buttonlogintextcolor';
    $title = get_string('buttonlogintextcolor', 'theme_bcu');
    $description = get_string('buttonlogintextcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFFFFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_bcu/buttonloginpadding';
    $title = get_string('buttonloginpadding', 'theme_bcu');
    $description = get_string('buttonloginpaddingdesc', 'theme_bcu');
    $radchoices = array(
    	'0px' => "0px",
        '2px' => "2px",
        '3px' => "3px",
        '4px' => "4px",
        '5px' => "5px",
        '6px' => "6px",
        '7px' => "7px",
        '8px' => "8px",        
    );
	$setting = new admin_setting_configselect($name, $title, $description, '4px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);	
	
	$name = 'theme_bcu/buttonloginheight';
    $title = get_string('buttonloginheight', 'theme_bcu');
    $description = get_string('buttonloginheightdesc', 'theme_bcu');
    $radchoices = array(
    	'16px' => "16px",
        '18px' => "18px",
        '20px' => "20px",
        '22px' => "22px",
        '24px' => "24px",
        '26px' => "26px",  
        '28px' => "28px",
        '30px' => "30px",            
        '32px' => "32px",
        '34px' => "34px",
    );
	$setting = new admin_setting_configselect($name, $title, $description, '22px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/buttonloginmargintop';
    $title = get_string('buttonloginmargintop', 'theme_bcu');
    $description = get_string('buttonloginmargintopdesc', 'theme_bcu');
    $radchoices = array(
    	'0px' => "0px",
        '1px' => "1px",
        '2px' => "2px",
        '3px' => "3px",
        '4px' => "4px",
        '5px' => "5px",            
    );
	$setting = new admin_setting_configselect($name, $title, $description, '3px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
			
	$ADMIN->add('theme_bcu', $temp);	

    $temp = new admin_settingpage('theme_bcu_header', get_string('headersettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_header', get_string('headersettingsheading', 'theme_bcu'),
    format_text(get_string('headerdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu/sitetitle';
    $title = get_string('sitetitle', 'theme_bcu');
    $description = get_string('sitetitledesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/logo';
    $title = get_string('logo', 'theme_bcu');
    $description = get_string('logodesc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/frontpagelogin';
    $title = get_string('frontpagelogin', 'theme_bcu');
    $description = get_string('frontpagelogindesc', 'theme_bcu');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/alertbox';
    $title = get_string('alertbox', 'theme_bcu');
    $description = get_string('alertboxdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
	
	$name = 'theme_bcu/disablealertcoursepages';
    $title = get_string('disablealertcoursepages', 'theme_bcu');
    $description = get_string('disablealertcoursepagesdesc', 'theme_bcu');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_bcu', $temp);
	
	$temp = new admin_settingpage('theme_bcu_navbar', get_string('navbarsettings', 'theme_bcu'));	
	$temp->add(new admin_setting_heading('theme_bcu_navbar', get_string('navbarsettingsheading', 'theme_bcu'),
        format_text(get_string('navbardesc', 'theme_bcu'), FORMAT_MARKDOWN)));
	
	
	$name = 'theme_bcu/menufontsize';
    $title = get_string('menufontsize', 'theme_bcu');
    $description = get_string('menufontsizedesc', 'theme_bcu');
    $radchoices = array(
    	'11px' => "11px",
    	'12px' => "12px",
        '13px' => "13px",
        '14px' => "14px",
        '15px' => "15px",
        '16px' => "16px",        
    );
	$setting = new admin_setting_configselect($name, $title, $description, '12px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
		
	$name = 'theme_bcu/enablehome';
    $title = get_string('home');
    $description = get_string('enablehomedesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_bcu/enablehomeredirect';
    $title = get_string('enablehomeredirect', 'theme_bcu');
    $description = get_string('enablehomeredirectdesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/enablemyhome';
    $title = get_string('myhome');
    $description = get_string('enablemyhomedesc', 'theme_bcu', get_string('myhome'));
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/enableevents';
    $title = get_string('events', 'theme_bcu');
    $description = get_string('enableeventsdesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/enablemysites';
    $title = get_string('mysites', 'theme_bcu');
    $description = get_string('enablemysitesdesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/enablethiscourse';
    $title = get_string('thiscourse', 'theme_bcu');
    $description = get_string('enablethiscoursedesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_bcu/enablezoom';
    $title = get_string('enablezoom', 'theme_bcu');
    $description = get_string('enablezoomdesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/enableshowhideblocks';
    $title = get_string('enableshowhideblocks', 'theme_bcu');
    $description = get_string('enableshowhideblocksdesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable help link.
    $name = 'theme_bcu/enablehelp';
    $title = get_string('enablehelp', 'theme_bcu');
    $description = get_string('enablehelpdesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/helpprofilefield';
    $title = get_string('helpprofilefield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/helpprofilevalue';
    $title = get_string('helpprofilevalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
	$name = 'theme_bcu/enablehelp2';
    $title = get_string('enablehelp', 'theme_bcu');
    $description = get_string('enablehelpdesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/helpprofilefield2';
    $title = get_string('helpprofilefield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/helpprofilevalue2';
    $title = get_string('helpprofilevalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/helptarget';
    $title = get_string('helptarget', 'theme_bcu');
    $description = get_string('helptargetdesc', 'theme_bcu');
    $choices = array(
        '_blank' => get_string('targetnewwindow', 'theme_bcu'),
        '_self' => get_string('targetsamewindow', 'theme_bcu'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, '_blank', $choices);
    $temp->add($setting);	
		
	$ADMIN->add('theme_bcu', $temp);
	
	$temp = new admin_settingpage('theme_bcu_usernav', get_string('usernav', 'theme_bcu'));
	
	$temp->add(new admin_setting_heading('theme_bcu_usernav', get_string('usernavheading', 'theme_bcu'),
    format_text(get_string('usernavdesc', 'theme_bcu'), FORMAT_MARKDOWN)));
	
	$name = 'theme_bcu/headerprofilefontsize';
    $title = get_string('headerprofilefontsize', 'theme_bcu');
    $description = get_string('headerprofilefontsizedesc', 'theme_bcu');
    $radchoices = array(    	
        '12px' => "12px",
        '13px' => "13px",
        '14px' => "14px",        
        '15px' => "15px",
        '16px' => "16px",
    );
	$setting = new admin_setting_configselect($name, $title, $description, '12px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable My.
    $name = 'theme_bcu/enablemy';
    $title = get_string('enablemy', 'theme_bcu');
    $description = get_string('enablemydesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable View Profile.
    $name = 'theme_bcu/enableprofile';
    $title = get_string('enableprofile', 'theme_bcu');
    $description = get_string('enableprofiledesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Edit Profile.
    $name = 'theme_bcu/enableeditprofile';
    $title = get_string('enableeditprofile', 'theme_bcu');
    $description = get_string('enableeditprofiledesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Calendar.
    $name = 'theme_bcu/enablecalendar';
    $title = get_string('enablecalendar', 'theme_bcu');
    $description = get_string('enablecalendardesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Private Files.
    $name = 'theme_bcu/enableprivatefiles';
    $title = get_string('enableprivatefiles', 'theme_bcu');
    $description = get_string('enableprivatefilesdesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Badges.
    $name = 'theme_bcu/enablebadges';
    $title = get_string('enablebadges', 'theme_bcu');
    $description = get_string('enablebadgesdesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     $name = 'theme_bcu/enablepref';
    $title = get_string('enablepref', 'theme_bcu');
    $description = get_string('enableprefdesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     $name = 'theme_bcu/enablenote';
    $title = get_string('enablenote', 'theme_bcu');
    $description = get_string('enablenotedesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     $name = 'theme_bcu/enableblog';
    $title = get_string('enableblog', 'theme_bcu');
    $description = get_string('enableblogdesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     $name = 'theme_bcu/enableposts';
    $title = get_string('enableposts', 'theme_bcu');
    $description = get_string('enablepostsdesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     $name = 'theme_bcu/enablefeed';
    $title = get_string('enablefeed', 'theme_bcu');
    $description = get_string('enablefeeddesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$ADMIN->add('theme_bcu', $temp);
	
	$temp = new admin_settingpage('theme_bcu_social', get_string('socialsettings', 'theme_bcu'));
	
	$temp->add(new admin_setting_heading('theme_bcu_social', get_string('socialheading', 'theme_bcu'),
    format_text(get_string('socialtitledesc', 'theme_bcu'), FORMAT_MARKDOWN)));
	
	$name = 'theme_bcu/socialset';
    $title = get_string('socialset', 'theme_bcu');
    $description = get_string('socialsetdesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    //$setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/socialsize';
    $title = get_string('socialsize', 'theme_bcu');
    $description = get_string('socialsize', 'theme_bcu');
    $choices = array(
    	16 => "16px",
        18 => "18px",
        22 => "22px",
        26 => "26px",
        32 => "32px",
        36 => "36px",
        42 => "42px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, 22, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    $name = 'theme_bcu/socialsizemobile';
    $title = get_string('socialsizemobile', 'theme_bcu');
    $description = get_string('socialsizemobile', 'theme_bcu');
    $choices = array(
    	14 => "14px",
    	16 => "16px",
        18 => "18px",
        22 => "22px",
        26 => "26px",
        32 => "32px",
        36 => "36px",
        42 => "42px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '14', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);	
		
	$name = 'theme_bcu/socialpaddingtop';
    $title = get_string('socialpaddingtop', 'theme_bcu');
    $description = get_string('socialpaddingtop', 'theme_bcu');
    $choices = array(
    	'0%' => "0%",
        '0.1%' => "0.1%",
        '0.2%' => "0.2%",
        '0.3%' => "0.3%",
        '0.4%' => "0.4%",
        '0.5%' => "0.5%",
        '0.6%' => "0.6%",
        '0.7%' => "0.7%",        
        '0.8%' => "0.8%",
        '0.9%' => "0.9%",
        '1%' => "1%",
        '1.1%' => "1.1%",
        '1.2%' => "1.2%",
        '1.3%' => "1.3%",
        '1.4%' => "1.4%",
        '1.5%' => "1.5%",
        '1.6%' => "1.6%",
        '1.7%' => "1.7%",
        '1.8%' => "1.8%",
        '1.9%' => "1.9%",        
        '2%' => "2%",
        '2.1%' => "2.1%",
        '2.2%' => "2.2%",
        '2.3%' => "2.3%",
        '2.4%' => "2.4%",
        '2.5%' => "2.5%",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '1.8%', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	// Social settings.
	$name = 'theme_bcu/socialsearchicon';
    $title = get_string('socialsearchicon', 'theme_bcu');
    $description = get_string('socialsearchicondesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, false, false);
    $temp->add($setting);
	
	$name = 'theme_bcu/social1';
    $title = get_string('social1', 'theme_bcu');
    $description = get_string('social1desc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
    
	$name = 'theme_bcu/social1icon';
    $title = get_string('social1icon', 'theme_bcu') . ' - ' . get_string('social1', 'theme_bcu');
	$default = 'fa-facebook-square';
    $description = get_string('socialicondesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);
	
    $name = 'theme_bcu/social2';
    $title = get_string('social2', 'theme_bcu');
    $description = get_string('social2desc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/social2icon';
    $title = get_string('social2icon', 'theme_bcu') . ' - ' . get_string('social2', 'theme_bcu');
	$default = 'fa-twitter-square';
    $description = get_string('socialicondesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/social3';
    $title = get_string('social3', 'theme_bcu');
    $description = get_string('social3desc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/social3icon';
    $title = get_string('social3icon', 'theme_bcu') . ' - ' . get_string('social3', 'theme_bcu');
	$default = 'fa-google-plus';
    $description = get_string('socialicondesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/social4';
    $title = get_string('social4', 'theme_bcu');
    $description = get_string('social4desc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/social4icon';
    $title = get_string('social4icon', 'theme_bcu') . ' - ' . get_string('social4', 'theme_bcu');
	$default = 'fa-instagram';
    $description = get_string('socialicondesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/social5';
    $title = get_string('social5', 'theme_bcu');
    $description = get_string('social5desc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/social5icon';
    $title = get_string('social5icon', 'theme_bcu') . ' - ' . get_string('social5', 'theme_bcu');
	$default = 'fa-tumblr-square';
    $description = get_string('socialicondesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/social6';
    $title = get_string('social6', 'theme_bcu');
    $description = get_string('social6desc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/social6icon';
    $title = get_string('social6icon', 'theme_bcu') . ' - ' . get_string('social6', 'theme_bcu');
	$default = 'fa-linkedin';
    $description = get_string('socialicondesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/social7';
    $title = get_string('social7', 'theme_bcu');
    $description = get_string('social7desc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/social7icon';
    $title = get_string('social7icon', 'theme_bcu') . ' - ' . get_string('social7', 'theme_bcu');
	$default = 'fa-youtube-square';
    $description = get_string('socialicondesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/social8';
    $title = get_string('social8', 'theme_bcu');
    $description = get_string('social8desc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/social8icon';
    $title = get_string('social8icon', 'theme_bcu') . ' - ' . get_string('social8', 'theme_bcu');
	$default = 'fa-flickr';
    $description = get_string('socialicondesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/social9';
    $title = get_string('social9', 'theme_bcu');
    $description = get_string('social9desc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/social9icon';
    $title = get_string('social9icon', 'theme_bcu') . ' - ' . get_string('social9', 'theme_bcu');
	$default = 'fa-pinterest-p';
    $description = get_string('socialicondesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

	$name = 'theme_bcu/social10';
    $title = get_string('social10', 'theme_bcu');
    $description = get_string('social10desc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/social10icon';
    $title = get_string('social10icon', 'theme_bcu') . ' - ' . get_string('social10', 'theme_bcu');
	$default = 'fa-globe';
    $description = get_string('socialicondesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/social11';
    $title = get_string('social11', 'theme_bcu');
    $description = get_string('social11desc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);
	
	$name = 'theme_bcu/social11icon';
    $title = get_string('social11icon', 'theme_bcu') . ' - ' . get_string('social11', 'theme_bcu');
	$default = 'fa-rss';
    $description = get_string('socialicondesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);
	
	$ADMIN->add('theme_bcu', $temp);
	
	$temp = new admin_settingpage('theme_bcu_menus', get_string('menusettings', 'theme_bcu'));
	
	$temp->add(new admin_setting_heading('theme_bcu_menus', get_string('menusheading', 'theme_bcu'),
    format_text(get_string('menustitledesc', 'theme_bcu'), FORMAT_MARKDOWN)));

	$name = 'theme_bcu/disablecustommenu';
    $title = get_string('disablecustommenu', 'theme_bcu');
    $description = get_string('disablecustommenudesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, false, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/menusession';
    $title = get_string('menusession', 'theme_bcu');
    $description = get_string('menusessiondesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, true, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/menusessionttl';
    $title = get_string('menusessionttl', 'theme_bcu');
    $description = get_string('menusessionttldesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '30', PARAM_INT);
    $temp->add($setting);	
	
	// settings for tools menus
	$temp->add(new admin_setting_heading('theme_bcu_toolsmenu', get_string('toolsmenu', 'theme_bcu'),
    format_text(get_string('toolsmenustitledesc', 'theme_bcu'), FORMAT_MARKDOWN)));
	
	$temp->add(new admin_setting_heading('theme_bcu_toolsmenu', get_string('toolsmenu', 'theme_bcu'),
    format_text(get_string('toolsmenustitledesc', 'theme_bcu'), FORMAT_MARKDOWN)));
	
	$temp->add(new admin_setting_heading('theme_bcu_toolsmenu1', get_string('toolsmenuheading1', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

	$name = 'theme_bcu/enabletoolsmenus';
    $title = get_string('enabletoolsmenus', 'theme_bcu');
    $description = get_string('enabletoolsmenusdesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/toolsmenu';
    $title = get_string('toolsmenu1', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	
	$name = 'theme_bcu/toolsmenu1field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/toolsmenu1value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
	$temp->add(new admin_setting_heading('theme_bcu_toolsmenu2', get_string('toolsmenuheading2', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

	$name = 'theme_bcu/toolsmenu2';
    $title = get_string('toolsmenu2', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	
    $name = 'theme_bcu/toolsmenu2field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/toolsmenu2value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);    
	
	// settings for top header menus
	
	$temp->add(new admin_setting_heading('theme_bcu_topmenus', get_string('topmenusheading', 'theme_bcu'),
    format_text(get_string('topmenusheadingdesc', 'theme_bcu'), FORMAT_MARKDOWN)));
		
	$temp->add(new admin_setting_heading('theme_bcu_menus1', get_string('menusheading1', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));
	
	$name = 'theme_bcu/enablemenus';
    $title = get_string('enablemenus', 'theme_bcu');
    $description = get_string('enablemenusdesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/disablemenuscoursepages';
    $title = get_string('disablemenuscoursepages', 'theme_bcu');
    $description = get_string('disablemenuscoursepagesdesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/newmenu1';
    $title = get_string('newmenu1', 'theme_bcu');
    $description = get_string('newmenudesc', 'theme_bcu');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	
	$name = 'theme_bcu/newmenu1field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = ''; //get_string('newmenu1field', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/newmenu1value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = ''; // get_string('newmenu1value', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
	$temp->add(new admin_setting_heading('theme_bcu_menus2', get_string('menusheading2', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));
	
	$name = 'theme_bcu/newmenu2';
    $title = get_string('newmenu2', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	
	$name = 'theme_bcu/newmenu2field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/newmenu2value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
	$temp->add(new admin_setting_heading('theme_bcu_menus3', get_string('menusheading3', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));
    
    $name = 'theme_bcu/newmenu3';
    $title = get_string('newmenu3', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	    
    $name = 'theme_bcu/newmenu3field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/newmenu3value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

	$temp->add(new admin_setting_heading('theme_bcu_menus4', get_string('menusheading4', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));
	
    $name = 'theme_bcu/newmenu4';
    $title = get_string('newmenu4', 'theme_bcu');
    $description = get_string('newmenudesc', 'theme_bcu');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_bcu/newmenu4field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/newmenu4value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
	$temp->add(new admin_setting_heading('theme_bcu_menus5', get_string('menusheading5', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu/newmenu5';
    $title = get_string('newmenu5', 'theme_bcu');
    $description = get_string('newmenudesc', 'theme_bcu');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_bcu/newmenu5field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/newmenu5value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
		$temp->add(new admin_setting_heading('theme_bcu_menus6', get_string('menusheading6', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu/newmenu6';
    $title = get_string('newmenu6', 'theme_bcu');
    $description = get_string('newmenudesc', 'theme_bcu');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_bcu/newmenu6field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/newmenu6value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
	$temp->add(new admin_setting_heading('theme_bcu_menus7', get_string('menusheading7', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu/newmenu7';
    $title = get_string('newmenu7', 'theme_bcu');
    $description = get_string('newmenudesc', 'theme_bcu');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_bcu/newmenu7field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/newmenu7value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
	$temp->add(new admin_setting_heading('theme_bcu_menus8', get_string('menusheading8', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu/newmenu8';
    $title = get_string('newmenu8', 'theme_bcu');
    $description = get_string('newmenudesc', 'theme_bcu');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_bcu/newmenu8field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/newmenu8value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
	$temp->add(new admin_setting_heading('theme_bcu_menus9', get_string('menusheading9', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu/newmenu9';
    $title = get_string('newmenu9', 'theme_bcu');
    $description = get_string('newmenudesc', 'theme_bcu');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_bcu/newmenu9field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/newmenu9value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
	$temp->add(new admin_setting_heading('theme_bcu_menus10', get_string('menusheading10', 'theme_bcu'),
    format_text(get_string('menusdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu/newmenu10';
    $title = get_string('newmenu10', 'theme_bcu');
    $description = get_string('newmenudesc', 'theme_bcu');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_bcu/newmenu10field';
    $title = get_string('newmenufield', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_bcu/newmenu10value';
    $title = get_string('newmenuvalue', 'theme_bcu');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
	$ADMIN->add('theme_bcu', $temp);

    $temp = new admin_settingpage('theme_bcu_blocks', get_string('blocksettings', 'theme_bcu'));

	$name = 'theme_bcu/blockicons';
    $title = get_string('blockicons', 'theme_bcu');
    $description = get_string('blockiconsdesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_bcu/blockheadercolor';
    $title = get_string('blockheadercolor', 'theme_bcu');
    $description = get_string('blockheadercolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#002f67', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_bcu/blocklinecolor';
    $title = get_string('blocklinecolor', 'theme_bcu');
    $description = get_string('blocklinecolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#001e3c', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_bcu/blocklinkcolor';
    $title = get_string('blocklinkcolor', 'theme_bcu');
    $description = get_string('blocklinkcolordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_bcu', $temp);

    $temp = new admin_settingpage('theme_bcu_frontpage_blocks', get_string('frontpageblocksettings', 'theme_bcu'));

     $name = 'theme_bcu/homebk';
    $title = get_string('homebk', 'theme_bcu');
    $description = get_string('homebkdesc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homebk');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/infobox';
    $title = get_string('infobox', 'theme_bcu');
    $description = get_string('infoboxdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
	
	$name = 'theme_bcu/infoboxfullscreen';
    $title = get_string('infoboxfullscreen', 'theme_bcu');
    $description = get_string('infoboxfullscreendesc', 'theme_bcu');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/infobox2';
    $title = get_string('infobox2', 'theme_bcu');
    $description = get_string('infobox2desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_bcu_marketing', get_string('marketingsettingsheading', 'theme_bcu'),
        format_text(get_string('marketingdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

	$name = 'theme_bcu/frontpagemarketenabled';
    $title = get_string('frontpagemarketenabled', 'theme_bcu');
    $description = get_string('frontpagemarketenableddesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_bcu/frontpagemarketoption';
    $title = get_string('frontpagemarketoption', 'theme_bcu');
    $description = get_string('frontpagemarketoptiondesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_bcu/market1';
    $title = get_string('market1', 'theme_bcu');
    $description = get_string('market1desc', 'theme_bcu');
    $default = '';
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/market2';
    $title = get_string('market2', 'theme_bcu');
    $description = get_string('market2desc', 'theme_bcu');
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/market3';
    $title = get_string('market3', 'theme_bcu');
    $description = get_string('market3desc', 'theme_bcu');
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/market4';
    $title = get_string('market4', 'theme_bcu');
    $description = get_string('market4desc', 'theme_bcu');
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/market5';
    $title = get_string('market5', 'theme_bcu');
    $description = get_string('market5desc', 'theme_bcu');
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/market6';
    $title = get_string('market6', 'theme_bcu');
    $description = get_string('market6desc', 'theme_bcu');
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/market7';
    $title = get_string('market7', 'theme_bcu');
    $description = get_string('market7desc', 'theme_bcu');
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/market8';
    $title = get_string('market8', 'theme_bcu');
    $description = get_string('market8desc', 'theme_bcu');
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/market9';
    $title = get_string('market9', 'theme_bcu');
    $description = get_string('market9desc', 'theme_bcu');
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/market10';
    $title = get_string('market10', 'theme_bcu');
    $description = get_string('market10desc', 'theme_bcu');
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/market11';
    $title = get_string('market11', 'theme_bcu');
    $description = get_string('market11desc', 'theme_bcu');
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/market12';
    $title = get_string('market12', 'theme_bcu');
    $description = get_string('market12desc', 'theme_bcu');
    $setting = new bcu_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_bcu', $temp);
	
    $temp = new admin_settingpage('theme_bcu_frontpage_ticker', get_string('frontpagetickersettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_ticker', get_string('tickersettingsheading', 'theme_bcu'),
        format_text(get_string('tickerdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu/enableticker';
    $title = get_string('enableticker', 'theme_bcu');
    $description = get_string('enabletickerdesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    //$setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

   	$name = 'theme_bcu/tickertext';
	$title = get_string('tickertext','theme_bcu');
	$description = get_string('tickertextdesc', 'theme_bcu');
	$default = '';
	$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
	$temp->add($setting);

	$ADMIN->add('theme_bcu', $temp);
	
    $temp = new admin_settingpage('theme_bcu_frontpage_slider', get_string('frontpageslidersettings', 'theme_bcu'));

    $temp->add(new admin_setting_heading('theme_bcu_slideshow', get_string('slideshowsettingsheading', 'theme_bcu'),
        format_text(get_string('slideshowdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

 	$name = 'theme_bcu/sliderfullscreen';
    $title = get_string('sliderfullscreen', 'theme_bcu');
    $description = get_string('sliderfullscreendesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);
	
	$name = 'theme_bcu/slidermargintop';
    $title = get_string('slidermargintop', 'theme_bcu');
    $description = get_string('slidermargintopdesc', 'theme_bcu');
    $radchoices = array(
    	'0px' => "0px",
        '5px' => "5px",
        '10px' => "10px",
        '15px' => "15px",
        '20px' => "20px",        
    );
	$setting = new admin_setting_configselect($name, $title, $description, '20px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_bcu/slidermarginbottom';
    $title = get_string('slidermarginbottom', 'theme_bcu');
    $description = get_string('slidermarginbottomdesc', 'theme_bcu');
    $radchoices = array(
    	'0px' => "0px",
        '5px' => "5px",
        '10px' => "10px",
        '15px' => "15px",
        '20px' => "20px",        
    );
	$setting = new admin_setting_configselect($name, $title, $description, '20px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_bcu/slideroption2';
    $title = get_string('slideroption2', 'theme_bcu');
    $description = get_string('slideroption2desc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_bcu/p1';
    $title = get_string('p1', 'theme_bcu');
    $description = get_string('p1desc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/p1url';
    $title = get_string('p1url', 'theme_bcu');
    $description = get_string('p1urldesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/p1cap';
    $title = get_string('p1cap', 'theme_bcu');
    $description = get_string('p1capdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/p2';
    $title = get_string('p2', 'theme_bcu');
    $description = get_string('p2desc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/p2url';
    $title = get_string('p2url', 'theme_bcu');
    $description = get_string('p2urldesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/p2cap';
    $title = get_string('p2cap', 'theme_bcu');
    $description = get_string('p2capdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/p3';
    $title = get_string('p3', 'theme_bcu');
    $description = get_string('p3desc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/p3url';
    $title = get_string('p3url', 'theme_bcu');
    $description = get_string('p3urldesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/p3cap';
    $title = get_string('p3cap', 'theme_bcu');
    $description = get_string('p3capdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/p4';
    $title = get_string('p4', 'theme_bcu');
    $description = get_string('p4desc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p4');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/p4url';
    $title = get_string('p4url', 'theme_bcu');
    $description = get_string('p4urldesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/p4cap';
    $title = get_string('p4cap', 'theme_bcu');
    $description = get_string('p4capdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/p5';
    $title = get_string('p5', 'theme_bcu');
    $description = get_string('p5desc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p5');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/p5url';
    $title = get_string('p5url', 'theme_bcu');
    $description = get_string('p5urldesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_bcu/p5cap';
    $title = get_string('p5cap', 'theme_bcu');
    $description = get_string('p5capdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/slideroption2color';
    $title = get_string('slideroption2color', 'theme_bcu');
    $description = get_string('slideroption2colordesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0066cc', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/slideroption2a';
    $title = get_string('slideroption2a', 'theme_bcu');
    $description = get_string('slideroption2adesc', 'theme_bcu');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0066cc', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_bcu', $temp);

    $temp = new admin_settingpage('theme_bcu_frontpage_courses', get_string('frontpagecoursesettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_frontpage_courses', get_string('frontpagesettingsheading', 'theme_bcu'),
        format_text(get_string('frontpagedesc', 'theme_bcu'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu/frontpagerenderer';
    $title = get_string('frontpagerenderer', 'theme_bcu');
    $description = get_string('frontpagerendererdesc', 'theme_bcu');
    $choices = array(
        1 => get_string('frontpagerendereroption1', 'theme_bcu'),
        2 => get_string('frontpagerendereroption2', 'theme_bcu'),
        3 => get_string('frontpagerendereroption3', 'theme_bcu'),
        4 => get_string('frontpagerendereroption4', 'theme_bcu'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 2, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/frontpagerendererdefaultimage';
    $title = get_string('frontpagerendererdefaultimage', 'theme_bcu');
    $description = get_string('frontpagerendererdefaultimagedesc', 'theme_bcu');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'frontpagerendererdefaultimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/tilesshowcontacts';
    $title = get_string('tilesshowcontacts', 'theme_bcu');
    $description = get_string('tilesshowcontactsdesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_bcu/tilesshowallcontacts';
    $title = get_string('tilesshowallcontacts', 'theme_bcu');
    $description = get_string('tilesshowallcontactsdesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_bcu/tilescontactstitle';
    $title = get_string('tilescontactstitle', 'theme_bcu');
    $description = get_string('tilescontactstitledesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_bcu/covhidebutton';
    $title = get_string('covhidebutton', 'theme_bcu');
    $description = get_string('covhidebuttondesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $ADMIN->add('theme_bcu', $temp);

    $temp = new admin_settingpage('theme_bcu_layout', get_string('layoutsettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_layout', get_string('layoutsettingsheading', 'theme_bcu'),
        format_text(get_string('layoutdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

    $name = 'theme_bcu/blockside';
    $title = get_string('blockside', 'theme_bcu');
    $description = get_string('blocksidedesc', 'theme_bcu');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            0 => get_string('rightblocks', 'theme_bcu'),
            1 => get_string('leftblocks', 'theme_bcu'),
        ));
    $temp->add($setting);

    // view default.
    $name = 'theme_bcu/viewselect';
    $title = get_string('viewselect', 'theme_bcu');
    $description = get_string('viewselectdesc', 'theme_bcu');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
		
	// fullscreen width
	$name = 'theme_bcu/fullscreenwidth';
    $title = get_string('fullscreenwidth', 'theme_bcu');
    $description = get_string('fullscreenwidthdesc', 'theme_bcu');
    $radchoices = array(
    	'95%' => '95%',
        '96%' => '96%',
        '97%' => '97%',
        '98%' => '98%',
        '99%' => '99%',
        '100%' => '100%',
    );
	$setting = new admin_setting_configselect($name, $title, $description, '95%', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/coursetitlemaxwidth';
    $title = get_string('coursetitlemaxwidth', 'theme_bcu');
    $description = get_string('coursetitlemaxwidthdesc', 'theme_bcu');
    $radchoices = array(
    	'35%' => '35%',
        '36%' => '36%',
        '37%' => '37%',
        '38%' => '38%',
        '39%' => '39%',
        '40%' => '40%',
        '41%' => '41%',
        '42%' => '42%',
        '43%' => '43%',
        '44%' => '44%',
        '45%' => '45%',
        '46%' => '46%',
        '47%' => '47%',
        '48%' => '48%',
        '49%' => '49%',
        '50%' => '50%',
    );
	$setting = new admin_setting_configselect($name, $title, $description, '35%', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$temp->add(new admin_setting_heading('theme_bcu_mobile', get_string('layoutmobilesettings', 'theme_bcu'),
    format_text(get_string('layoutmobilesettingsdesc', 'theme_bcu'), FORMAT_MARKDOWN)));
		
	$name = 'theme_bcu/hidesocialmobile';
    $title = get_string('hidesocialmobile', 'theme_bcu');
    $description = get_string('hidesocialmobiledesc', 'theme_bcu');
    $radchoices = array(    	
        ', .socialbox' => 'Hide',
        '' => 'Show',
    );	
	$setting = new admin_setting_configselect($name, $title, $description, ', .socialbox', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/socialboxpaddingtopmobile';
    $title = get_string('socialboxpaddingtopmobile', 'theme_bcu');
    $description = get_string('socialboxpaddingtopmobile', 'theme_bcu');
    $choices = array(
    	'5px' => "5px",
    	'6px' => "6px",
    	'7px' => "7px",
    	'8px' => "8px",
    	'9px' => "9px",
    	'10px' => "10px",
        '12px' => "12px",
        '14px' => "14px",
        '16px' => "'16px'",
        '18px' => "18px",
        '20px' => "20px",
        '22px' => "22px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '10px', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/socialboxpaddingbottommobile';
    $title = get_string('socialboxpaddingbottommobile', 'theme_bcu');
    $description = get_string('socialboxpaddingbottommobile', 'theme_bcu');
    $choices = array(
    	'1px' => "1px",
    	'2px' => "2px",
    	'3px' => "3px",
    	'4px' => "4px",
    	'5px' => "5px",
    	'6px' => "6px",
        '7px' => "7px",
        '8px' => "8px",
        '9px' => "'9px'",
        '10px' => "10px",        
    );
    $setting = new admin_setting_configselect($name, $title, $description, '10px', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	
	$name = 'theme_bcu/hidecoursetitlemobile';
    $title = get_string('hidecoursetitlemobile', 'theme_bcu');
    $description = get_string('hidecoursetitlemobiledesc', 'theme_bcu');
    $radchoices = array(    	
        ', #coursetitle' => 'Hide',
        '' => 'Show',
    );
	$setting = new admin_setting_configselect($name, $title, $description, ', #coursetitle', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);		
	
	$name = 'theme_bcu/hidelogomobile';
    $title = get_string('hidelogomobile', 'theme_bcu');
    $description = get_string('hidelogomobiledesc', 'theme_bcu');
    $radchoices = array(    	
        ', #logocontainer' => 'Hide',
        '' => 'Show',
    );
	$setting = new admin_setting_configselect($name, $title, $description, ', #logocontainer', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/hideheadermobile';
    $title = get_string('hideheadermobile', 'theme_bcu');
    $description = get_string('hideheadermobiledesc', 'theme_bcu');
    $radchoices = array(        
        ', #page-header' => 'Hide',
        '' => 'Show',
    );
	$setting = new admin_setting_configselect($name, $title, $description, ', #page-header', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
		
	$name = 'theme_bcu/hidebreadcrumbmobile';
    $title = get_string('hidebreadcrumbmobile', 'theme_bcu');
    $description = get_string('hidebreadcrumbmobiledesc', 'theme_bcu');
    $radchoices = array(        
        ', .breadcrumb' => 'Hide',
        '' => 'Show',
    );
	$setting = new admin_setting_configselect($name, $title, $description, ', .breadcrumb', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_bcu/hidepagefootermobile';
    $title = get_string('hidepagefootermobile', 'theme_bcu');
    $description = get_string('hidepagefootermobiledesc', 'theme_bcu');
    $radchoices = array(        
        ', #page-footer' => 'Hide',
        '' => 'Show',
    );
	$setting = new admin_setting_configselect($name, $title, $description, ', #page-footer', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
			
    $ADMIN->add('theme_bcu', $temp);

    $temp = new admin_settingpage('theme_bcu_footer', get_string('footersettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_footer', get_string('footersettingsheading', 'theme_bcu'),
        format_text(get_string('footerdesc', 'theme_bcu'), FORMAT_MARKDOWN)));

    // Show moodle docs link.
    $name = 'theme_bcu/moodledocs';
    $title = get_string('moodledocs', 'theme_bcu');
    $description = get_string('moodledocsdesc', 'theme_bcu');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_bcu/showfooterblocks';
    $title = get_string('showfooterblocks', 'theme_bcu');
    $description = get_string('showfooterblocksdesc', 'theme_bcu');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);	

    $name = 'theme_bcu/footerblocksplacement';
    $title = get_string('footerblocksplacement', 'theme_bcu');
    $description = get_string('footerblocksplacementdesc', 'theme_bcu');
    $choices = array(
        1 => get_string('footerblocksplacement1', 'theme_bcu'),
        2 => get_string('footerblocksplacement2', 'theme_bcu'),
        3 => get_string('footerblocksplacement3', 'theme_bcu'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 2, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_bcu/footer1header';
    $title = get_string('footer1header', 'theme_bcu');
    $description = get_string('footer1desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/footer1content';
    $title = get_string('footer1content', 'theme_bcu');
    $description = get_string('footer1contentdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/footer2header';
    $title = get_string('footer2header', 'theme_bcu');
    $description = get_string('footer2desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/footer2content';
    $title = get_string('footer2content', 'theme_bcu');
    $description = get_string('footer2contentdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/footer3header';
    $title = get_string('footer3header', 'theme_bcu');
    $description = get_string('footer3desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/footer3content';
    $title = get_string('footer3content', 'theme_bcu');
    $description = get_string('footer3contentdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/footer4header';
    $title = get_string('footer4header', 'theme_bcu');
    $description = get_string('footer4desc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/footer4content';
    $title = get_string('footer4content', 'theme_bcu');
    $description = get_string('footer4contentdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/footnote';
    $title = get_string('footnote', 'theme_bcu');
    $description = get_string('footnotedesc', 'theme_bcu');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $ADMIN->add('theme_bcu', $temp);

    $temp = new admin_settingpage('theme_bcu_generic', get_string('customcssjssettings', 'theme_bcu'));
    $temp->add(new admin_setting_heading('theme_bcu_generic', get_string('genericsettingsheading', 'theme_bcu'),
        format_text(get_string('genericsettingsdescription', 'theme_bcu'), FORMAT_MARKDOWN)));

    // Custom CSS file.
    $name = 'theme_bcu/customcss';
    $title = get_string('customcss', 'theme_bcu');
    $description = get_string('customcssdesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Section for javascript to be added e.g. Google Analytics.
    $name = 'theme_bcu/jssection';
    $title = get_string('jssection', 'theme_bcu');
    $description = get_string('jssectiondesc', 'theme_bcu');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_bcu/fsize';
    $title = get_string('fsize', 'theme_bcu');
    $description = get_string('fsizedesc', 'theme_bcu');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $temp->add($setting);

    $ADMIN->add('theme_bcu', $temp);
}
