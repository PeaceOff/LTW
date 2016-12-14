--
-- 
--
-- 
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: awnser
CREATE TABLE awnser (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, content VARCHAR, review INTEGER REFERENCES review (id), user INTEGER REFERENCES user (id));
INSERT INTO awnser (id, content, review, user) VALUES (61, '&Eacute; maravilhoso sentir que o nosso amor est&aacute; presente em todos os momentos. Em cada coisa que fazemos, a qualquer hora. Sei que esse sentimento me estimula para enfrentar qualquer barreira, qualquer obst&aacute;culo.

Nosso amor vai al&eacute;m das fronteiras do pensamento e acontece em cada ato que fazemos, em cada gesto. Sou feliz por isso e vejo que voc&ecirc; tamb&eacute;m &eacute;. A felicidade &eacute; isso, pequenos momentos, pequenos gestos, a certeza da parceria, do companheirismo, do carinho e do afeto.

Saber que existimos um para o outro a todo momento &eacute; a coisa mais linda que algu&eacute;m pode sentir. A vontade de estarmos juntos, de planejar a vida, de fazer todas as coisas bem simples, por&eacute;m repletas de amor.

Eu gostaria que cada dia tivesse 25 horas, s&oacute; para curtir mais um pouquinho tudo aquilo que venho curtindo ao seu lado. Como &eacute; gostoso estar com voc&ecirc;: ouvir a sua voz e curtir esse seu olhar t&atilde;o especial, t&atilde;o diferente.

Somos duas metades que se completam, que se abra&ccedil;am e se amam e que ficaram unidas 25 horas por dia e se Deus quiser para sempre. Voc&ecirc; &eacute; minha alma g&ecirc;mea. Te amo!', 77, 64);
INSERT INTO awnser (id, content, review, user) VALUES (62, 'O cuidado em identificar pontos cr&iacute;ticos na valoriza&ccedil;&atilde;o de fatores subjetivos assume importantes posi&ccedil;&otilde;es no estabelecimento dos relacionamentos verticais entre as hierarquias.', 77, 64);
INSERT INTO awnser (id, content, review, user) VALUES (63, 'Obrigado jose martins, volte sempre!', 79, 66);
INSERT INTO awnser (id, content, review, user) VALUES (64, '?????', 85, 66);
INSERT INTO awnser (id, content, review, user) VALUES (65, '?????', 86, 66);
INSERT INTO awnser (id, content, review, user) VALUES (66, '?????', 87, 66);
INSERT INTO awnser (id, content, review, user) VALUES (67, 'Talvez n&atilde;o existam palavras suficientes e significativas que me permitam agradecer voc&ecirc; com justi&ccedil;a, com o devido merecimento. Sua ajuda e seu apoio foram para mim de valor inestim&aacute;vel, mas &eacute; tudo o que me resta. Apenas posso me expressar atrav&eacute;s da limita&ccedil;&atilde;o de meras palavras, e com elas lhe prestar esta humilde, mas sincera, homenagem.

Muito obrigado! Com todo o carinho e de cora&ccedil;&atilde;o eu lhe agrade&ccedil;o, e pelo resto da minha vida lhe agradecerei!', 78, 67);
INSERT INTO awnser (id, content, review, user) VALUES (68, 'Quando eu nasci, 
n&atilde;o houve nada de novo 
sen&atilde;o eu.', 90, 67);
INSERT INTO awnser (id, content, review, user) VALUES (69, 'N&atilde;o te sintas mal!
Solu&ccedil;&otilde;es: A Sol. A luz. O m. N&atilde;o te esque&ccedil;as de visitar &quot;O Piqueno!&quot;', 91, 67);
INSERT INTO awnser (id, content, review, user) VALUES (70, 'J&aacute; Agora ficam aqui as solu&ccedil;&otilde;es: Sol. A luz. O m. N&atilde;o te esque&ccedil;as de visitar &quot;O Piqueno!&quot;', 92, 67);
INSERT INTO awnser (id, content, review, user) VALUES (71, 'Esperava uma resposta mais atenciosa, seu BRUTO!', 79, 64);

-- Table: favorites
CREATE TABLE favorites (id INTEGER PRIMARY KEY AUTOINCREMENT, user INTEGER REFERENCES user (id), restaurant INTEGER REFERENCES restaurant (id));

-- Table: picture
CREATE TABLE picture (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL);
INSERT INTO picture (id) VALUES (71);
INSERT INTO picture (id) VALUES (74);
INSERT INTO picture (id) VALUES (75);
INSERT INTO picture (id) VALUES (77);
INSERT INTO picture (id) VALUES (79);
INSERT INTO picture (id) VALUES (80);
INSERT INTO picture (id) VALUES (81);
INSERT INTO picture (id) VALUES (90);
INSERT INTO picture (id) VALUES (91);
INSERT INTO picture (id) VALUES (92);
INSERT INTO picture (id) VALUES (93);
INSERT INTO picture (id) VALUES (95);
INSERT INTO picture (id) VALUES (97);
INSERT INTO picture (id) VALUES (98);
INSERT INTO picture (id) VALUES (99);
INSERT INTO picture (id) VALUES (100);
INSERT INTO picture (id) VALUES (101);
INSERT INTO picture (id) VALUES (102);
INSERT INTO picture (id) VALUES (103);
INSERT INTO picture (id) VALUES (104);
INSERT INTO picture (id) VALUES (105);
INSERT INTO picture (id) VALUES (106);
INSERT INTO picture (id) VALUES (107);
INSERT INTO picture (id) VALUES (108);
INSERT INTO picture (id) VALUES (109);
INSERT INTO picture (id) VALUES (110);
INSERT INTO picture (id) VALUES (111);
INSERT INTO picture (id) VALUES (113);
INSERT INTO picture (id) VALUES (116);

-- Table: restaurant
CREATE TABLE restaurant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR NOT NULL, owner INTEGER REFERENCES user (id), description VARCHAR DEFAULT ('Description not available'), latitude DOUBLE, longitude DOUBLE);
INSERT INTO restaurant (id, name, owner, description, latitude, longitude) VALUES (48, 'Aid&eacute;', 64, 'Cozinha tradicional de excel&ecirc;ncia. Entradas boas e variadas. O cap&atilde;o assado no forno e servido com batatas alouradas, constitui um must! Variada garrafeira satisfaz qualquer exig&ecirc;ncia . Sobremesas: primam as rabanadas e o creme queimado', 41.2869334, -8.341782500000022);
INSERT INTO restaurant (id, name, owner, description, latitude, longitude) VALUES (49, 'Tapabento Trindade', 65, 'Um restaurante onde num ambiente elegante e relaxado se saboreia o melhor da cozinha portuguesa, com um toque internacional sofisticado, e em que cada prato desde as entradas &agrave;s sobremesas &eacute; um prazer para a vista e os sabores s&atilde;o de uma complexidade que nos surpreende sempre, notando-se a elevada q', 41.1579438, -8.629105299999992);
INSERT INTO restaurant (id, name, owner, description, latitude, longitude) VALUES (50, 'The Lingerie Restaurant', 66, 'O &quot;The Lingerie Restaurant&quot; desenvolve desde 2004 um conceito tem&aacute;tico &uacute;nico em Portugal. Situado no centro do Porto, o restaurante envolve a cozinha de excel&ecirc;ncia em sensualidade e erotismo. O prazer serve-se &agrave; mesa.', 35.90775699999999, 127.76692200000002);
INSERT INTO restaurant (id, name, owner, description, latitude, longitude) VALUES (51, 'Anda C&aacute; ao PAI', 64, 'A n&iacute;vel organizacional, o comprometimento entre as equipes faz parte de um processo de gerenciamento das condi&ccedil;&otilde;es financeiras e administrativas exigidas.
A certifica&ccedil;&atilde;o de metodologias que nos auxiliam a lidar com a estrutura atual da organiza&ccedil;&atilde;o agrega valor ao estabelecimento do sistema de parti', 23.634501, -102.55278399999996);
INSERT INTO restaurant (id, name, owner, description, latitude, longitude) VALUES (52, 'The Pepper Nights', 65, 'A pr&aacute;tica cotidiana prova que a crescente influ&ecirc;ncia da m&iacute;dia auxilia a prepara&ccedil;&atilde;o e a composi&ccedil;&atilde;o do sistema de participa&ccedil;&atilde;o geral. Nunca &eacute; demais lembrar o peso e o significado destes problemas, uma vez que a percep&ccedil;&atilde;o das dificuldades desafia a capacidade de equaliza&ccedil;&atilde;o dos relacionamentos vertica', 40.831362678260106, -8.613760481874124);
INSERT INTO restaurant (id, name, owner, description, latitude, longitude) VALUES (53, 'O Piqueno', 67, 'No entanto, n&atilde;o podemos esquecer que o novo modelo estrutural aqui preconizado desafia a capacidade de equaliza&ccedil;&atilde;o dos m&eacute;todos utilizados na avalia&ccedil;&atilde;o de resultados.
Percebemos, cada vez mais, que a estrutura atual da organiza&ccedil;&atilde;o auxilia a prepara&ccedil;&atilde;o e a composi&ccedil;&atilde;o das diversas correntes de pensame', 37.49982749088158, -8.796556150217839);
INSERT INTO restaurant (id, name, owner, description, latitude, longitude) VALUES (54, 'O Gra&uacute;do', 67, 'Este restaurante fica muito pr&oacute;ximo do largo do Rato, na rua a subir que fica ao lado dos CTT.
O espa&ccedil;o tem um estilo antiquado e r&uacute;stico embora bem conservado e com alguns toques modernos, embora, no geral, seja pouco acolhedor devido ao uso excessivo de pedra (mas faz jus ao nome).', 41.289625834403296, -8.401258891125508);
INSERT INTO restaurant (id, name, owner, description, latitude, longitude) VALUES (55, 'Mamak', 64, 'Comida fabulosa! Pratos da culin&aacute;ria da Mal&aacute;sia e China, todos muito saborosos a pre&ccedil;os convidativos. Recomendo muit&iacute;ssimo o Satay e os pratos com curry! Atendimento r&aacute;pido e prestativos. S&oacute; assistir a prepara&ccedil;&atilde;o dos p&atilde;es na vitrine j&aacute; &eacute; um show a parte!', 35.86166000000001, 104.19539699999996);
INSERT INTO restaurant (id, name, owner, description, latitude, longitude) VALUES (56, 'McDonals', 66, 'Aqui na McDonalds a nossa prioridade &eacute; o bom vinho acompanhado de um bom lombo, venha visitar o nosso estabelecimento.', 41.22640579999999, -8.61813959999995);
INSERT INTO restaurant (id, name, owner, description, latitude, longitude) VALUES (57, 'Fu King Restaurant', 66, 'Chinese bery gud bery cheap come eat, mom says iz gud
?????????,??????', 30.181381, -82.638997);
INSERT INTO restaurant (id, name, owner, description, latitude, longitude) VALUES (58, 'H&aacute;de e Vinhas ', 68, 'Qual &eacute; coisa, qual &eacute; ela,
quanto mais se mira, menos se v&ecirc;?
Qual &eacute; coisa, qual &eacute; ela,
pequenina como a abelha,
enche a casa at&eacute; &agrave; telha?
Qual &eacute; coisa, qual &eacute; ela,
que se encontra uma vez num minuto,
duas vezes num momento
e nenhuma vez no ano?', 41.1435823858492, -8.657034342785664);

-- Table: restaurantPicture
CREATE TABLE restaurantPicture (picture_id INTEGER REFERENCES picture (id), restaurant_id INTEGER REFERENCES restaurant (id));
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (74, 48);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (75, 48);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (77, 48);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (79, 49);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (90, 50);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (91, 51);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (92, 52);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (93, 52);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (95, 53);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (97, 53);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (99, 54);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (100, 54);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (101, 55);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (102, 55);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (104, 56);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (105, 57);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (106, 57);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (107, 57);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (109, 58);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (110, 50);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (111, 50);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (113, 50);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (116, 56);

-- Table: restaurantType
CREATE TABLE restaurantType (id_restaurant INTEGER REFERENCES restaurant (id), id_type INTEGER REFERENCES type (id));
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (48, 6);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (48, 10);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (49, 2);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (49, 7);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (51, 5);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (52, 7);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (52, 10);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (52, 4);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (52, 9);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (53, 2);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (53, 4);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (54, 5);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (54, 6);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (54, 7);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (54, 10);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (54, 4);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (54, 9);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (55, 7);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (55, 4);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (55, 9);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (56, 6);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (56, 2);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (57, 1);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (58, 5);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (58, 6);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (58, 7);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (58, 10);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (58, 4);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (58, 8);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (50, 6);
INSERT INTO restaurantType (id_restaurant, id_type) VALUES (50, 4);

-- Table: review
CREATE TABLE review (rating INTEGER CHECK (rating < 6 AND rating > - 1) NOT NULL, id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, description VARCHAR DEFAULT ('Review not available'), restaurant_id INTEGER REFERENCES restaurant (id) NOT NULL, reviewer_id INTEGER REFERENCES user (id) NOT NULL);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (3, 77, 'Na altura desta cr&iacute;tica o pre&ccedil;o do menu s&atilde;o 9 Eur e inclui o prato, bebida e sopa ou sobremesa.
Os pratos do dia normalmente s&atilde;o 2 de peixe e 2 de carne. Experimentamos v&aacute;rios pratos e todos foram bastante bons, bem confecionados, boa apresenta&ccedil;&atilde;o e sabor, sempre acima da m&eacute;dia.
O servi&ccedil;o &eacute; atencioso e o restaurante costuma ser calmo na hora do almo&ccedil;o.
Gostei: Comida (qualidade, aspeto, sabor), servi&ccedil;o, pre&ccedil;o razo&aacute;vel do menu
N&atilde;o gostei: Caf&eacute; &eacute; caro, a decora&ccedil;&atilde;o em pedra torna-se pouco acolhedora', 48, 67);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (4, 78, 'Decidi ir jantar ao PIQUENO, pedi francesinha da casa, e acertei em cheio. Muito Boa Francesinha, excelentes ingredientes, e o mais importante, um molho bastante equilibrado e delicioso &Eacute; sem duvida para voltar a repetir', 53, 64);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 79, 'Podem existir mil obst&aacute;culos, mas nada far&aacute; com que meu amor por ti morra. Atravessarei at&eacute; os maiores mares, mas n&atilde;o existir&aacute; &aacute;gua suficiente que afogue o amor que sinto por voc&ecirc;.

Subirei at&eacute; a montanha mais alta do mundo, s&oacute; para te ver, e de l&aacute; gritarei seu nome para ver se me ouve, e se me ouvires, direi uma s&oacute; frase: Eu te amo.

E quando o vento passar, levar&aacute; consigo o que eu disse, e quando ele soprar em seu ouvido, escutar&aacute;s junto ao vento: Eu te amo.

E toda vez que o vento soprar em seu ouvido, n&atilde;o ser&aacute; s&oacute; apenas o vento, mas eu dizendo que te amo.', 50, 64);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 80, 'Lugar super elegante, atendimento e pratos impec&aacute;veis. Nos sentimos super especiais durante todo o almo&ccedil;o. Escolhemos um menu degusta&ccedil;&atilde;o e vimos que t&iacute;nhamos algumas restri&ccedil;&otilde;es. Ap&oacute;s os ajustes imprimiram um novo card&aacute;pio com as nossas op&ccedil;&otilde;es e nos entregaram para acompanhamento dos pratos que seriam servidos. O Chef Martin veio at&eacute; nossa mesa e foi super simp&aacute;tico. Amei!', 54, 64);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (0, 81, 'Sendo um f&atilde; de comida malaia ... Qu&atilde;o decepcionados eu estava no Mamak nunca novamente Kentucky Fried tinha mais saborosas de frango especiarias chato comida muito caro o roti era muito boa mas fique longe!!! Desperd&iacute;cio de tempo e dinheiro este restaurante &eacute; t&atilde;o overhyped place !!', 52, 64);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (3, 82, 'Pedimos menu da semana para 2 contendo antepasto de p&atilde;o com azeite, uma entrada que pedimos salada, veio uma bem pequena mesmo, um hamb&uacute;rguer com gorgonzola que estava bom mais sem destaque, uma bebida, um tiramisu e um caf&eacute;. Ficou em EUROS 27,50.', 49, 67);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (4, 83, 'Pedi um comercial e vieram &agrave; minha mesa v&aacute;rias pequenas por&ccedil;&otilde;es: arroz, feij&atilde;o, bife de vaca e de porco acebolados, costela de vaca feita na panela, milho cozido, ab&oacute;bora caboti&aacute; cozida, mandioca (aipim/macaxeira) frita, couve e repolho crus e picados, al&eacute;m de tomate. Tudo muito simples, mas muito honesto e condizente com a proposta de um restaurante simples, barato e caseiro, cujo objetivo &eacute; apenas matar a fome do cliente.', 52, 67);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 84, 'Adorei tudo! O quarto em que ficamos &eacute; super confort&aacute;vel e espa&ccedil;oso, a lareira &eacute; &oacute;tima e a lenha n&atilde;o &eacute; cobrada a parte! a cama &eacute; muito confort&aacute;vel, a limpeza &eacute; excelente! A &aacute;gua da torneira &eacute; aquecida e o chuveiro esquenta super bem. O Caf&eacute; da manh&atilde; &eacute; maravilhoso, com muita o op&ccedil;&atilde;o e fartura, tudo fresquinho e servido na mesa. Os funcion&aacute;rios s&atilde;o super simp&aacute;ticos, e para quem gosta de animais tem v&aacute;rios gatos que tamb&eacute;m s&atilde;o super simp&aacute;ticos! Voltarei com certeza!!', 55, 65);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 87, '??????????????
????????
??????????
?????????????,????,???????,
?????????,????????
????????????,
???????,????????', 57, 65);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 89, 'Venha visitar o Piqueno! &Eacute; de mais!', 56, 67);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 90, 'J&aacute; sou piqueno desde pequeno e todos os anos volto, a comida &eacute; fant&aacute;stica!', 53, 66);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (0, 91, 'N&atilde;o sou inteligente num gostei', 58, 66);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (0, 92, 'Isto nem &eacute; um restaurante! Estou indignado!', 58, 67);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (4, 93, '???????1', 57, 64);

-- Table: schedule
CREATE TABLE schedule (id INTEGER PRIMARY KEY AUTOINCREMENT, type_id INTEGER REFERENCES scheduleType (id), "begin" VARCHAR, "end" VARCHAR, restaurant_id INTEGER REFERENCES restaurant (id));
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (31, 9, '08:30', '20:30', 48);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (32, 1, '08:30', '20:30', 48);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (33, 3, '08:30', '20:30', 48);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (34, 4, '13:30', '20:30', 48);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (35, 5, '08:30', '20:30', 48);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (36, 6, '08:30', '20:30', 48);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (37, 7, '08:30', '20:30', 48);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (38, 8, '08:30', '20:30', 48);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (39, 9, '08:30', '20:30', 49);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (40, 9, '19:30', '00:30', 50);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (41, 9, '08:30', '20:30', 51);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (42, 9, '08:30', '20:30', 52);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (43, 8, '11:30', '20:30', 52);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (44, 9, '09:00', '21:30', 53);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (45, 8, '12:00', '15:30', 53);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (46, 9, '08:30', '20:30', 54);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (47, 9, '08:30', '20:30', 55);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (48, 9, '08:30', '20:30', 56);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (49, 9, '08:30', '20:30', 57);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (50, 7, '00:00', '00:00', 57);
INSERT INTO schedule (id, type_id, "begin", "end", restaurant_id) VALUES (51, 9, '09:59', '09:59', 58);

-- Table: scheduleType
CREATE TABLE scheduleType (id INTEGER PRIMARY KEY AUTOINCREMENT, name VARCHAR);
INSERT INTO scheduleType (id, name) VALUES (1, 'monday');
INSERT INTO scheduleType (id, name) VALUES (2, 'tuesday');
INSERT INTO scheduleType (id, name) VALUES (3, 'wednesday');
INSERT INTO scheduleType (id, name) VALUES (4, 'thursday');
INSERT INTO scheduleType (id, name) VALUES (5, 'friday');
INSERT INTO scheduleType (id, name) VALUES (6, 'saturday');
INSERT INTO scheduleType (id, name) VALUES (7, 'sunday');
INSERT INTO scheduleType (id, name) VALUES (8, 'holidays');
INSERT INTO scheduleType (id, name) VALUES (9, 'week');

-- Table: type
CREATE TABLE type (id INTEGER PRIMARY KEY AUTOINCREMENT, content VARCHAR);
INSERT INTO type (id, content) VALUES (1, 'Chinese');
INSERT INTO type (id, content) VALUES (2, 'Grill');
INSERT INTO type (id, content) VALUES (3, 'Fast Food');
INSERT INTO type (id, content) VALUES (4, 'Sea Food');
INSERT INTO type (id, content) VALUES (5, 'Food Truck');
INSERT INTO type (id, content) VALUES (6, 'Gourmet');
INSERT INTO type (id, content) VALUES (7, 'Hotel');
INSERT INTO type (id, content) VALUES (8, 'Self-Service');
INSERT INTO type (id, content) VALUES (9, 'Take_away');
INSERT INTO type (id, content) VALUES (10, 'Pizzaria');

-- Table: user
CREATE TABLE user (nome VARCHAR, id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, picture_id INTEGER REFERENCES picture (id) DEFAULT NULL, password VARCHAR NOT NULL, username VARCHAR NOT NULL, description VARCHAR DEFAULT ('Default description'));
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('admin', 63, 71, '$2y$10$UuukI2I66dxTMDwgnc.CEuCjMOHIUlYhwaMDu3gSMOUPTlazURekq', 'admin', 'admin');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('jose martins', 64, 81, '$2y$10$P3sRKbrDsqHkOFnpUfK9kO5nr9Qo/3NLsBHoDw5nnoUIYLeaqz5QC', 'jmartins', '&Eacute; importante questionar o quanto o in&iacute;cio da atividade geral de forma&ccedil;&atilde;o de atitudes nos obriga &agrave; an&aacute;lise do fluxo de informa&ccedil;&otilde;es.');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('Jo&atilde;o Ferreira', 65, 103, '$2y$10$vcR9Kv7EteF3YjOXJuW4jeLq51EDUMPAvpVE5dnA7xOKcNS1MXXB2', 'joaocsf', 'Caros amigos, o novo modelo estrutural aqui preconizado assume importantes posi&ccedil;&otilde;es no estabelecimento das condi&ccedil;&otilde;es inegavelmente apropriadas.');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('David Azevedo', 66, 80, '$2y$10$kxAMn884Pg2RNFPUwiZNSutyn/sI/QofHzStFEwmWrj4EYKYJgmX2', 'dazevedo', 'Podemos j&aacute; vislumbrar o modo pelo qual o novo modelo estrutural aqui preconizado talvez venha a ressaltar a relatividade dos procedimentos normalmente adotados.');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('Luci&aacute;n Do&ntilde;as Sistere', 67, 98, '$2y$10$LNtoDtEA2qSsHsfyWrAgveN88oo5QkY3lQWXQNuk4MtmtMqk3ufQu', 'restaurant', 'Ent&atilde;o olhou pro c&eacute;u, e sorriu, pensou em tudo que ali j&aacute; tinha vivido&hellip; Lembran&ccedil;as, s&atilde;o tantas, tantos amores, tantos sorrisos, tantos olhares&hellip; Ent&atilde;o, percebeu que mesmo com todos os desafios que a vida lhe dava, tudo o que vivera at&eacute; ali havia valido a pena, tinha crescido tanto, aprendido tantas li');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('Marcos Pereira Almeida', 68, 108, '$2y$10$CTsekzAuSs4twk.j6wPkOe0PXVEdbXmTVhBWXR5TK1hiASN6YNz5a', 'adivinhas', 'Adoro dar passeios longos no passeio do meu vizinho.');

-- Trigger: deleteComments
CREATE TRIGGER deleteComments BEFORE DELETE ON review FOR EACH ROW BEGIN DELETE FROM awnser 
WHERE awnser.review = OLD.id; END;

-- Trigger: restaurantDelete
CREATE TRIGGER restaurantDelete BEFORE DELETE ON restaurant FOR EACH ROW BEGIN DELETE FROM review WHERE review.restaurant_id = OLD.id;
DELETE FROM restaurantType WHERE restaurantType.id_restaurant = OLD.id;
DELETE FROM schedule WHERE schedule.restaurant_id = OLD.id; END;

-- View: viewRestauranType
CREATE VIEW viewRestauranType AS SELECT restaurant.id as id, name, description,owner,latitude,longitude,type.id as type_id, content 
FROM restaurant, type,restaurantType
WHERE restaurant.id = restaurantType.id_restaurant AND type.id = restaurantType.id_type;

-- View: viewSchedule
CREATE VIEW viewSchedule AS SELECT schedule.id as id, begin, end, restaurant_id, name
FROM schedule, scheduleType
WHERE schedule.type_id = scheduleType.id;

-- View: viewUserAnswer
CREATE VIEW viewUserAnswer AS SELECT awnser.id, content, review, nome, user.id as user_id, username
FROM awnser, user
WHERE awnser.user = user.id;

-- View: viewUserReview
CREATE VIEW viewUserReview AS SELECT review.id as id, review.description, restaurant_id, rating, nome, user.id as user_id, username
FROM user, review
WHERE user.id = review.reviewer_id;

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
