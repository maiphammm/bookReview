-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 02:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adv_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` int(50) NOT NULL,
  `bookName` varchar(250) NOT NULL,
  `bookAuthor` varchar(100) NOT NULL,
  `bookImg` varchar(250) NOT NULL,
  `bookDetail` longtext NOT NULL,
  `bookType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `bookName`, `bookAuthor`, `bookImg`, `bookDetail`, `bookType`) VALUES
(1, 'The help', 'Kathryn Stockett', 'theHelp.jpg', 'Three ordinary women are about to take one extraordinary step.\r\n\r\nTwenty-two-year-old Skeeter has just returned home after graduating from Ole Miss. She may have a degree, but it is 1962, Mississippi, and her mother will not be happy till Skeeter has a ring on her finger. Skeeter would normally find solace with her beloved maid Constantine, the woman who raised her, but Constantine has disappeared and no one will tell Skeeter where she has gone.\r\n\r\nAibileen is a black maid, a wise, regal woman raising her seventeenth white child. Something has shifted inside her after the loss of her own son, who died while his bosses looked the other way. She is devoted to the little girl she looks after, though she knows both their hearts may be broken.\r\n\r\nMinny, Aibileen\'s best friend, is short, fat, and perhaps the sassiest woman in Mississippi. She can cook like nobody\'s business, but she can\'t mind her tongue, so she\'s lost yet another job. Minny finally finds a position working for someone too new to town to know her reputation. But her new boss has secrets of her own.\r\n\r\nSeemingly as different from one another as can be, these women will nonetheless come together for a clandestine project that will put them all at risk. And why? Because they are suffocating within the lines that define their town and their times. And sometimes lines are made to be crossed.\r\n\r\nIn pitch-perfect voices, Kathryn Stockett creates three extraordinary women whose determination to start a movement of their own forever changes a town, and the way women, mothers, daughters, caregivers, friends, view one another. A deeply moving novel filled with poignancy, humor, and hope, The Help is a timeless and universal story about the lines we abide by, and the ones we don\'t.', 'Fiction'),
(2, 'Water for Elephants', 'Sara Gruen', 'waterOfElephant.jpg', 'When Jacob Jankowski, recently orphaned and suddenly adrift, jumps onto a passing train, he enters a world of freaks, drifters, and misfits, a second-rate circus struggling to survive during the Great Depression, making one-night stands in town after endless town. A veterinary student who almost earned his degree, Jacob is put in charge of caring for the circus menagerie. It is there that he meets Marlena, the beautiful young star of the equestrian act, who is married to August, the charismatic but twisted animal trainer. He also meets Rosie, an elephant who seems untrainable until he discovers a way to reach her. \r\n\r\nBeautifully written, Water for Elephants is illuminated by a wonderful sense of time and place. It tells a story of a love between two people that overcomes incredible odds in a world in which even love is a luxury that few can afford.\r\n', 'Fiction'),
(3, 'The Secret Life of Bees', 'Sue Monk Kidd', 'secretOfLife.jpg', 'Set in South Carolina in 1964, The Secret Life of Bees tells the story of Lily Owens, whose life has been shaped around the blurred memory of the afternoon her mother was killed. When Lily\'s fierce-hearted black \"stand-in mother,\" Rosaleen, insults three of the deepest racists in town, Lily decides to spring them both free. They escape to Tiburon, South Carolina--a town that holds the secret to her mother\'s past. Taken in by an eccentric trio of black beekeeping sisters, Lily is introduced to their mesmerizing world of bees and honey, and the Black Madonna. This is a remarkable novel about divine female power, a story women will share and pass on to their daughters for years to come.', 'Fiction'),
(4, 'Shadow and Bone', 'Leigh Bardugo', 'shadowAndBone.jpg', 'Surrounded by enemies, the once-great nation of Ravka has been torn in two by the Shadow Fold, a swath of near impenetrable darkness crawling with monsters who feast on human flesh. Now its fate may rest on the shoulders of one lonely refugee.\r\n\r\nAlina Starkov has never been good at anything. But when her regiment is attacked on the Fold and her best friend is brutally injured, Alina reveals a dormant power that saves his life—a power that could be the key to setting her war-ravaged country free. Wrenched from everything she knows, Alina is whisked away to the royal court to be trained as a member of the Grisha, the magical elite led by the mysterious Darkling.\r\n\r\nYet nothing in this lavish world is what it seems. With darkness looming and an entire kingdom depending on her untamed power, Alina will have to confront the secrets of the Grisha . . . and the secrets of her heart.', 'Fantasy'),
(5, 'Throne of Glass', 'Sarah J. Maas', 'throneOfGlass.png', 'In a land without magic, where the king rules with an iron hand, an assassin is summoned to the castle. She comes not to kill the king, but to win her freedom. If she defeats twenty-three killers, thieves, and warriors in a competition, she is released from prison to serve as the king\'s champion. Her name is Celaena Sardothien. \r\n\r\nThe Crown Prince will provoke her. The Captain of the Guard will protect her. But something evil dwells in the castle of glass—and it\'s there to kill. When her competitors start dying one by one, Celaena\'s fight for freedom becomes a fight for survival, and a desperate quest to root out the evil before it destroys her world.', 'Fantasy'),
(6, 'Hidden Pictures', 'Jason Rekulak', 'hiddenPictures.jpg', 'From Edgar Award-finalist Jason Rekulak comes a wildly inventive spin on the supernatural thriller, for fans of Stranger Things and Riley Sager, about a woman working as a nanny for a young boy with strange and disturbing secrets.\r\n\r\nMallory Quinn is fresh out of rehab when she takes a job as a babysitter for Ted and Caroline Maxwell. She is to look after their five-year-old son, Teddy.\r\n\r\nMallory immediately loves it. She has her own living space, goes out for nightly runs, and has the stability she craves. And she sincerely bonds with Teddy, a sweet, shy boy who is never without his sketchbook and pencil. His drawings are the usual fare: trees, rabbits, balloons. But one day, he draws something different: a man in a forest, dragging a woman’s lifeless body.\r\n\r\nThen, Teddy’s artwork becomes increasingly sinister, and his stick figures quickly evolve into lifelike sketches well beyond the ability of any five-year-old. Mallory begins to wonder if these are glimpses of a long-unsolved murder, perhaps relayed by a supernatural force.\r\n\r\nKnowing just how crazy it all sounds, Mallory nevertheless sets out to decipher the images and save Teddy before it’s too late.', 'Horror'),
(7, 'What Lies in the Woods', 'Kate Alice Marshall', 'whatLies.jpg', 'They were eleven when they sent a killer to prison. They were heroes . . . but they were liars.\r\n\r\nNaomi Shaw used to believe in magic. Twenty-two years ago, she and her two best friends, Cassidy and Olivia, spent the summer roaming the woods, imagining a world of ceremony and wonder. They called it the Goddess Game. The summer ended suddenly when Naomi was attacked. Miraculously, she survived her seventeen stab wounds and lived to identify the man who had hurt her. The girls’ testimony put away a serial killer, wanted for murdering six women. They were heroes.\r\n\r\nAnd they were liars.\r\n\r\nFor decades, the friends have kept a secret worth killing for. But now Olivia wants to tell, and Naomi sets out to find out what really happened in the woods―no matter how dangerous the truth turns out to be.', 'Horror'),
(8, 'Jack Templar, Monster Hunter', 'Jeff Gunhus', 'jackTemplar.jpg', 'Orphan Jack Templar has no memory of his parents and only the smallest details from his Aunt Sophie about how they died. The day before Jack\'s fourteenth birthday, things start to change for him. At first it\'s great: A sudden new strength helps him defend his nose-picking friend \"T-Rex\" from the school bully, and even his crush, Cindy Adams, takes notice. But then a mysterious girl named Eva arrives and tells him two facts that will change his life forever. First, that he\'s the descendent of a long line of monster hunters and he\'s destined to be in the family business. Second, that there\'s a truce between man and monster that children are off-limits...until their fourteenth birthday! Jack has only one day before hundreds of monsters will descend on his little town of Sunnyvale and try to kill him. \r\n\r\nAs if that weren\'t enough, things get even more complicated when Jack discovers that the Lord of the Creach (as the monsters are collectively known) holds a personal grudge against him and will do anything to see that Jack has a slow and painful death. To stay alive and save his friends, Jack will have to battle werewolves, vampires, harpies, trolls, zombies and more. But perhaps the most dangerous thing he must face is the truth about his past. Why do the other hunters call him the last Templar? Why do they whisper that he may be the \"One?\" Why do the monsters want him dead so badly? Even as these questions plague him, he quickly discovers survival is his new full-time job and that in the world of monster hunters, nothing is really what it seems.\r\n', 'Fantasy'),
(9, 'The Tale of Peter Rabbit', 'Beatrix Potter', 'peterRabbit.jpg', '\"Now, my dears,\" said old Mrs Rabbit one morning, \"you may go into the fields or down the lane, but don\'t go into Mr. McGregor\'s garden.\"\r\n\r\nFollow the story of naughty Peter Rabbit as he squeezes—predictably—under the gate into Mr. McGregor\'s garden and finds himself in all kinds of trouble! But how does Peter Rabbit get himself out of this tricky situation? Beatrix Potter\'s story about one mischievous but ultimately endearing little creature will tell us, accompanied by beautiful illustrations and timeless verses which have transcended generations.\r\n\r\n\'The Tale of Peter Rabbit\', first published in 1902, is still today one of Beatrix Potter\'s most popular and well-loved tales. It is the first of the illustrious series that is The World of Beatrix Potter\', and a story which has endured retelling after retelling at bedtimes all over the world.\r\n\r\nBeatrix Potter (1866–1943) loved the countryside and spent much of her childhood drawing and studying animals. \'The Tale of Peter Rabbit\', first published in 1902, was her first book. She later went on to publish more than twenty tales and collections of rhymes.', 'Childrens'),
(10, 'Alice in Wonderland', 'Jane Carruth (Adapted By), \r\nLewis Carroll (Original Story By), \r\nRene Cloke (Illustrator)\r\n', 'aliceInWonderland.jpg', 'Alice\'s Adventures in Wonderland (commonly shortened to Alice in Wonderland) is an 1865 novel written by English mathematician Charles Lutwidge Dodgson under the pseudonym Lewis Carroll. It tells of a girl named Alice falling through a rabbit hole into a fantasy world populated by peculiar, anthropomorphic creatures. The tale plays with logic, giving the story lasting popularity with adults as well as with children. It is considered to be one of the best examples of the literary nonsense genre. Its narrative course and structure, characters and imagery have been enormously influential in both popular culture and literature, especially in the fantasy genre.\r\n', 'Childrens'),
(11, 'The Hacienda', 'Isabel Cañas', 'theHacienda.jpg', 'Mexican Gothic meets Rebecca in this debut supernatural suspense novel, set in the aftermath of the Mexican War of Independence, about a remote house, a sinister haunting, and the woman pulled into their clutches...\r\n\r\nIn the overthrow of the Mexican government, Beatriz’s father is executed and her home destroyed. When handsome Don Rodolfo Solórzano proposes, Beatriz ignores the rumors surrounding his first wife’s sudden demise, choosing instead to seize the security his estate in the countryside provides. She will have her own home again, no matter the cost.\r\n\r\nBut Hacienda San Isidro is not the sanctuary she imagined.\r\n\r\nWhen Rodolfo returns to work in the capital, visions and voices invade Beatriz’s sleep. The weight of invisible eyes follows her every move. Rodolfo’s sister, Juana, scoffs at Beatriz’s fears—but why does she refuse to enter the house at night? Why does the cook burn copal incense at the edge of the kitchen and mark its doorway with strange symbols? What really happened to the first Doña Solórzano?\r\n\r\nBeatriz only knows two things for certain: Something is wrong with the hacienda. And no one there will help her.\r\n\r\nDesperate for help, she clings to the young priest, Padre Andrés, as an ally. No ordinary priest, Andrés will have to rely on his skills as a witch to fight off the malevolent presence haunting the hacienda and protect the woman for whom he feels a powerful, forbidden attraction. But even he might not be enough to battle the darkness.', 'Historical'),
(12, 'Book Lovers', 'Emily Henry', 'bookLovers.jpg', 'One summer. Two rivals. A plot twist they didn\'t see coming....\r\n\r\nNora Stephens’ life is books—she’s read them all—and she is not that type of heroine. Not the plucky one, not the laidback dream girl, and especially not the sweetheart. In fact, the only people Nora is a heroine for are her clients, for whom she lands enormous deals as a cutthroat literary agent, and her beloved little sister Libby.\r\n\r\nWhich is why she agrees to go to Sunshine Falls, North Carolina for the month of August when Libby begs her for a sisters’ trip away—with visions of a small-town transformation for Nora, who she’s convinced needs to become the heroine in her own story. But instead of picnics in meadows, or run-ins with a handsome country doctor or bulging-forearmed bartender, Nora keeps bumping into Charlie Lastra, a bookish brooding editor from back in the city. It would be a meet-cute if not for the fact that they’ve met many times and it’s never been cute.\r\n\r\nIf Nora knows she’s not an ideal heroine, Charlie knows he’s nobody’s hero, but as they are thrown together again and again—in a series of coincidences no editor worth their salt would allow—what they discover might just unravel the carefully crafted stories they’ve written about themselves.', 'Romance'),
(13, 'People We Meet on Vacation', 'Emily Henry', 'peopleWeMeet.jpg', 'Two best friends. Ten summer trips. One last chance to fall in love.\r\n\r\nPoppy and Alex. Alex and Poppy. They have nothing in common. She’s a wild child; he wears khakis. She has insatiable wanderlust; he prefers to stay home with a book. And somehow, ever since a fateful car share home from college many years ago, they are the very best of friends. For most of the year they live far apart—she’s in New York City, and he’s in their small hometown—but every summer, for a decade, they have taken one glorious week of vacation together.\r\n\r\nUntil two years ago, when they ruined everything. They haven’t spoken since.\r\n\r\nPoppy has everything she should want, but she’s stuck in a rut. When someone asks when she was last truly happy, she knows, without a doubt, it was on that ill-fated, final trip with Alex. And so, she decides to convince her best friend to take one more vacation together—lay everything on the table, make it all right. Miraculously, he agrees.\r\n\r\nNow she has a week to fix everything. If only she can get around the one big truth that has always stood quietly in the middle of their seemingly perfect relationship. What could possibly go wrong?', 'Romance'),
(14, 'The Unhoneymooners', 'Christina Lauren', 'theUnhoneymoners.jpg', 'Olive is always unlucky: in her career, in love, in…well, everything. Her identical twin sister Ami, on the other hand, is probably the luckiest person in the world. Her meet-cute with her fiancé is something out of a romantic comedy (gag) and she’s managed to finance her entire wedding by winning a series of Internet contests (double gag). Worst of all, she’s forcing Olive to spend the day with her sworn enemy, Ethan, who just happens to be the best man.\r\n\r\nOlive braces herself to get through 24 hours of wedding hell before she can return to her comfortable, unlucky life. But when the entire wedding party gets food poisoning from eating bad shellfish, the only people who aren’t affected are Olive and Ethan. And now there’s an all-expenses-paid honeymoon in Hawaii up for grabs.\r\n\r\nPutting their mutual hatred aside for the sake of a free vacation, Olive and Ethan head for paradise, determined to avoid each other at all costs. But when Olive runs into her future boss, the little white lie she tells him is suddenly at risk to become a whole lot bigger. She and Ethan now have to pretend to be loving newlyweds, and her luck seems worse than ever. But the weird thing is that she doesn’t mind playing pretend. In fact, she feels kind of... lucky.', 'Romance'),
(15, 'Soil: The Story of a Black Mother\'s Garden', 'Camille T. Dungy', 'soil.jpg', 'A seminal work that expands how we talk about the natural world and the environment as National Book Critics Circle Criticism finalist Camille T. Dungy diversifies her garden to reflect her heritage\r\n\r\nIn Soil: The Story of a Black Mother\'s Garden, poet and scholar Camille T. Dungy recounts the seven-year odyssey to diversify her garden in the predominately white community of Fort Collins, Colorado. When she moved there in 2013 with her husband and daughter, the community held strict restrictions about what residents could and could not plant.\r\n\r\nIn resistance to the homogeneous policies that limited the possibility and wonder that grows from the earth, Dungy employs the various plants, herbs, vegetables, and flowers she grows in her garden as metaphor and treatise for how homogeneity threatens the future of the planet, and why cultivating diverse and intersectional language in our national discourse about the environment is the best means of protecting it.\r\n\r\nDefinitive and singular, Soil functions at the nexus of nature writing, environmental justice, and prose to encourage readers to recognize the relationship between the peoples of the African diaspora and the land on which they live, and to understand that wherever soil rests beneath their feet is home.', 'Science'),
(16, 'The Maid', 'Nita Prose', 'theMaid.jpg', 'Molly Gray is not like everyone else. She struggles with social skills and misreads the intentions of others. Her gran used to interpret the world for her, codifying it into simple rules that Molly could live by. \r\n\r\nSince Gran died a few months ago, twenty-five-year-old Molly has been navigating life\'s complexities all by herself. No matter—she throws herself with gusto into her work as a hotel maid. Her unique character, along with her obsessive love of cleaning and proper etiquette, make her an ideal fit for the job. She delights in donning her crisp uniform each morning, stocking her cart with miniature soaps and bottles, and returning guest rooms at the Regency Grand Hotel to a state of perfection. \r\n\r\nBut Molly\'s orderly life is upended the day she enters the suite of the infamous and wealthy Charles Black, only to find it in a state of disarray and Mr. Black himself dead in his bed. Before she knows what\'s happening, Molly\'s unusual demeanor has the police targeting her as their lead suspect. She quickly finds herself caught in a web of deception, one she has no idea how to untangle. Fortunately for Molly, friends she never knew she had unite with her in a search for clues to what really happened to Mr. Black—but will they be able to find the real killer before it\'s too late? \r\n\r\nA Clue-like, locked-room mystery and a heartwarming journey of the spirit, The Maid explores what it means to be the same as everyone else and yet entirely different—and reveals that all mysteries can be solved through connection to the human heart.', 'Fiction'),
(17, 'The Paris Apartment', 'Lucy Foley', 'theParis.jpg', 'From the New York Times bestselling author of The Guest List comes a new locked room mystery, set in a Paris apartment building in which every resident has something to hide…\r\n\r\nJess needs a fresh start. She’s broke and alone, and she’s just left her job under less than ideal circumstances. Her half-brother Ben didn’t sound thrilled when she asked if she could crash with him for a bit, but he didn’t say no, and surely everything will look better from Paris. Only when she shows up – to find a very nice apartment, could Ben really have afforded this? – he’s not there.\r\n\r\nThe longer Ben stays missing, the more Jess starts to dig into her brother’s situation, and the more questions she has. Ben’s neighbors are an eclectic bunch, and not particularly friendly. Jess may have come to Paris to escape her past, but it’s starting to look like it’s Ben’s future that’s in question.\r\n\r\nThe socialite – The nice guy – The alcoholic – The girl on the verge – The concierge\r\n\r\nEveryone’s a neighbor. Everyone’s a suspect. And everyone knows something they’re not telling.', 'Mystery'),
(18, 'Remarkably Bright Creatures', 'Shelby Van Pelt', 'remarkablyBrightCreatures.jpg', 'Remarkably Bright Creatures, an exploration of friendship, reckoning, and hope, tracing a widow\'s unlikely connection with a giant Pacific octopus.\r\n\r\nAfter Tova Sullivan\'s husband died, she began working the night shift at the Sowell Bay Aquarium, mopping floors and tidying up. Keeping busy has always helped her cope, which she\'s been doing since her eighteen-year-old son, Erik, mysteriously vanished on a boat in Puget Sound over thirty years ago.\r\n\r\nTova becomes acquainted with curmudgeonly Marcellus, a giant Pacific octopus living at the aquarium. Marcellus knows more than anyone can imagine but wouldn\'t dream of lifting one of his eight arms for his human captors--until he forms a remarkable friendship with Tova.\r\n\r\nEver the detective, Marcellus deduces what happened the night Tova\'s son disappeared. And now Marcellus must use every trick his old invertebrate body can muster to unearth the truth for her before it\'s too late.\r\n\r\nShelby Van Pelt\'s debut novel is a gentle reminder that sometimes taking a hard look at the past can help uncover a future that once felt impossible.', 'Mystery'),
(19, 'Lessons in Chemistry', 'Bonnie Garmus', 'lessonsInChemistry.jpg', 'Chemist Elizabeth Zott is not your average woman. In fact, Elizabeth Zott would be the first to point out that there is no such thing as an average woman. But it’s the early 1960s and her all-male team at Hastings Research Institute takes a very unscientific view of equality. Except for one: Calvin Evans; the lonely, brilliant, Nobel–prize nominated grudge-holder who falls in love with—of all things—her mind. True chemistry results. \r\n\r\nBut like science, life is unpredictable. Which is why a few years later Elizabeth Zott finds herself not only a single mother, but the reluctant star of America’s most beloved cooking show Supper at Six. Elizabeth’s unusual approach to cooking (“combine one tablespoon acetic acid with a pinch of sodium chloride”) proves revolutionary. But as her following grows, not everyone is happy. Because as it turns out, Elizabeth Zott isn’t just teaching women to cook. She’s daring them to change the status quo. \r\n\r\nLaugh-out-loud funny, shrewdly observant, and studded with a dazzling cast of supporting characters, Lessons in Chemistry is as original and vibrant as its protagonist.', 'Historical'),
(20, 'Mad Honey', 'Jodi Picoult, \r\nJennifer Finney Boylan', 'madHoney.jpg', 'A soul-stirring novel about what we choose to keep from our past, and what we choose to leave behind.\r\n\r\nOlivia McAfee knows what it feels like to start over. Her picture-perfect life—living in Boston, married to a brilliant cardiothoracic surgeon, raising a beautiful son, Asher—was upended when her husband revealed a darker side. She never imagined she would end up back in her sleepy New Hampshire hometown, living in the house she grew up in, and taking over her father\'s beekeeping business.\r\n\r\nLily Campanello is familiar with do-overs, too. When she and her mom relocate to Adams, New Hampshire, for her final year of high school, they both hope it will be a fresh start. \r\n\r\nAnd for just a short while, these new beginnings are exactly what Olivia and Lily need. Their paths cross when Asher falls for the new girl in school, and Lily can’t help but fall for him, too. With Ash, she feels happy for the first time. Yet at times, she wonders if she can she trust him completely . . .\r\n\r\nThen one day, Olivia receives a phone call: Lily is dead, and Asher is being questioned by the police. Olivia is adamant that her son is innocent. But she would be lying if she didn’t acknowledge the flashes of his father’s temper in him, and as the case against him unfolds, she realizes he’s hidden more than he’s shared with her.\r\n\r\nMad Honey is a riveting novel of suspense, an unforgettable love story, and a moving and powerful exploration of the secrets we keep and the risks we take in order to become ourselves.', 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `usercomments`
--

CREATE TABLE `usercomments` (
  `reviewID` int(11) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `reviewDetails` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userfavorite`
--

CREATE TABLE `userfavorite` (
  `userID` varchar(50) NOT NULL,
  `bookID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(4) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fname`, `lname`, `email`, `address`, `password`) VALUES
(1, 'M', 'B', '', '123', ''),
(2, 'M', 'P', '', '456', ''),
(3, 'BD', 'CM', '', '456 Street', ''),
(4, 'Mai', 'Loop', '', '123 Street', ''),
(6, 'Mai', 'Smith', '', '123 Street', ''),
(7, 'Mai', 'Smith', '', '123 Street', ''),
(8, 'Mai', 'Smith', '', '123 Street', ''),
(9, 'Mai', 'Smith', '', '123 Street', ''),
(10, 'John', 'G', '', '20 abc street', '$2y$10$vEJ2oQbNN01IUH8dRA7HvuHcXlLciHtmqDFYJsv4xXHc8vpetCTkO'),
(11, 'John', 'G', '', '20 abc street', '$2y$10$8h6..HA4TyQMeFxPee4BLunwh0NOaCSZV4RpuL..BQFWweePpRPbu'),
(12, 'John', 'GBC', '', '20 abc street', '$2y$10$vq2dmhz/F0oaztn2L5wLBeZolYO6sV641ISypxIQPM9GqWn3TeUcG'),
(13, 'John', 'GBC', '', '22 abc street', '$2y$10$4X2cX6tpoxkTopFOxL6gXuQwfoD9/Uivexnxf6s4tgq8S/J9iy9w6'),
(14, '', '', 'john1@gmail.com', '', '$2y$10$GkaqIhgtNZp7QAmdkECeueotM5gk/4tt7NTVC2bgpGOlHKa.s0Q9C'),
(15, '', '', 'john1@gmail.com', '', '$2y$10$Pt/g8o7vol9SQ1vYECuXX.m8V/a8KCT9x.uzDmi.zZ5.jk0g6AfWe'),
(16, 'Mai', 'Pham', 'testMP@gmail.com', '22 abc street', '$2y$10$M/t8z91dTu818n/Q6U2JO.qA180vlV4dXH63jm8MIqALNTCmVAyYG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `usercomments`
--
ALTER TABLE `usercomments`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usercomments`
--
ALTER TABLE `usercomments`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
