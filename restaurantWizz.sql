--
-- File generated with SQLiteStudio v3.1.1 on seg nov 28 18:41:42 2016
--
-- Text encoding used: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: awnser
CREATE TABLE awnser (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, content VARCHAR, review INTEGER REFERENCES review (id), user INTEGER REFERENCES user (id));
INSERT INTO awnser (id, content, review, user) VALUES (5, 'crrd9g0qj', 8, 5);
INSERT INTO awnser (id, content, review, user) VALUES (6, 'a2jbz9dicr', 8, 6);
INSERT INTO awnser (id, content, review, user) VALUES (7, '	26uy7w2h', 8, 7);
INSERT INTO awnser (id, content, review, user) VALUES (35, 'Ahahahah Pato!', 10, 1);
INSERT INTO awnser (id, content, review, user) VALUES (47, 'hahah', 40, 1);
INSERT INTO awnser (id, content, review, user) VALUES (50, 'asd', 16, 1);

-- Table: favorites
CREATE TABLE favorites (id INTEGER PRIMARY KEY AUTOINCREMENT, user INTEGER REFERENCES user (id), restaurant INTEGER REFERENCES restaurant (id));
INSERT INTO favorites (id, user, restaurant) VALUES (1, 1, 1);
INSERT INTO favorites (id, user, restaurant) VALUES (2, 2, 2);
INSERT INTO favorites (id, user, restaurant) VALUES (3, 3, 3);
INSERT INTO favorites (id, user, restaurant) VALUES (4, 4, 4);
INSERT INTO favorites (id, user, restaurant) VALUES (5, 5, 5);
INSERT INTO favorites (id, user, restaurant) VALUES (6, 6, 6);
INSERT INTO favorites (id, user, restaurant) VALUES (7, 7, 7);
INSERT INTO favorites (id, user, restaurant) VALUES (8, 8, 8);
INSERT INTO favorites (id, user, restaurant) VALUES (9, 9, 9);
INSERT INTO favorites (id, user, restaurant) VALUES (10, 10, 10);
INSERT INTO favorites (id, user, restaurant) VALUES (11, 11, 11);
INSERT INTO favorites (id, user, restaurant) VALUES (12, 12, 12);
INSERT INTO favorites (id, user, restaurant) VALUES (13, 13, 13);
INSERT INTO favorites (id, user, restaurant) VALUES (14, 14, 14);
INSERT INTO favorites (id, user, restaurant) VALUES (15, 15, 15);
INSERT INTO favorites (id, user, restaurant) VALUES (16, 16, 16);
INSERT INTO favorites (id, user, restaurant) VALUES (17, 17, 17);
INSERT INTO favorites (id, user, restaurant) VALUES (18, 18, 18);
INSERT INTO favorites (id, user, restaurant) VALUES (19, 19, 19);
INSERT INTO favorites (id, user, restaurant) VALUES (20, 20, 20);
INSERT INTO favorites (id, user, restaurant) VALUES (21, 21, 21);
INSERT INTO favorites (id, user, restaurant) VALUES (22, 22, 22);
INSERT INTO favorites (id, user, restaurant) VALUES (23, 23, 23);
INSERT INTO favorites (id, user, restaurant) VALUES (24, 24, 24);
INSERT INTO favorites (id, user, restaurant) VALUES (25, 25, 25);
INSERT INTO favorites (id, user, restaurant) VALUES (26, 26, 26);
INSERT INTO favorites (id, user, restaurant) VALUES (27, 27, 27);
INSERT INTO favorites (id, user, restaurant) VALUES (28, 28, 28);
INSERT INTO favorites (id, user, restaurant) VALUES (29, 29, 29);
INSERT INTO favorites (id, user, restaurant) VALUES (30, 30, 30);

-- Table: picture
CREATE TABLE picture (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL);
INSERT INTO picture (id) VALUES (1);
INSERT INTO picture (id) VALUES (2);
INSERT INTO picture (id) VALUES (3);
INSERT INTO picture (id) VALUES (4);
INSERT INTO picture (id) VALUES (5);
INSERT INTO picture (id) VALUES (6);
INSERT INTO picture (id) VALUES (7);
INSERT INTO picture (id) VALUES (8);
INSERT INTO picture (id) VALUES (9);
INSERT INTO picture (id) VALUES (10);
INSERT INTO picture (id) VALUES (11);
INSERT INTO picture (id) VALUES (12);
INSERT INTO picture (id) VALUES (13);
INSERT INTO picture (id) VALUES (14);
INSERT INTO picture (id) VALUES (15);
INSERT INTO picture (id) VALUES (16);
INSERT INTO picture (id) VALUES (17);
INSERT INTO picture (id) VALUES (18);
INSERT INTO picture (id) VALUES (19);
INSERT INTO picture (id) VALUES (20);
INSERT INTO picture (id) VALUES (21);
INSERT INTO picture (id) VALUES (22);
INSERT INTO picture (id) VALUES (23);
INSERT INTO picture (id) VALUES (24);
INSERT INTO picture (id) VALUES (25);
INSERT INTO picture (id) VALUES (26);
INSERT INTO picture (id) VALUES (27);
INSERT INTO picture (id) VALUES (28);
INSERT INTO picture (id) VALUES (29);
INSERT INTO picture (id) VALUES (30);

-- Table: restaurant
CREATE TABLE restaurant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR NOT NULL, description VARCHAR DEFAULT ('Description not available'), owner INTEGER REFERENCES user (id), type_id INT REFERENCES type (id));
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (1, '
r8rp9vm7zga', 'sckd', 1, 2);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (2, '0fixm	wmr
vt
81e6b58', 'qnk6gq3cg5fzmji2	n', 2, 1);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (3, 'x	yx7
9', 'f4m7ryi1q3k7h6wlu4us', 3, 3);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (4, 'l9aeds', 'tf7	n3o 20477oc48d', 4, 4);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (5, 'ug	qdjosyf', 'l 8	zmn0s7x80jh8', 5, 5);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (6, 'gp415q3wk44y', 'lrgp74gqwg768gxoeq89', 6, 6);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (7, 'kq7b20zz	xfbgofnb', 'r4r26', 7, 7);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (8, 'y	7o5f9e77x', '23	8 7anqrtoimxt631', 8, 8);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (9, 'p06	fzxs74bb5eqhyy5x', '3wp78mm3vvwp3d', 9, 9);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (10, '7ctu9bl1bkyoxfa', 'o cuko8', 10, 2);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (11, '4n y', 'xqxb8wt2vm 0', 11, 2);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (12, 'c76yse', '6up9kzyl	0pk5', 12, 3);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (13, 'cge74x3h', '07pk
gd0sr1
4bk', 13, 3);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (14, '2i1x1fh	5x', '
gz
c
xn60da1d2', 14, 4);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (15, '57nfofcy8p88o1sc', 'pu1fem
qs', 15, 5);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (16, 'fksj50zklimdc4si19', '
rs9cwnrz399pjmgxp', 16, 6);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (17, '	jtmaw', '8urpc6jbzhko r6', 17, 7);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (18, 'd326zivmbh', 'av7b', 18, 8);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (19, 'oqpcoh', '3w	o', 19, 9);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (20, 'n7qj7shqw3', 'p12eay7lnhndp4tfdozm', 20, 10);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (21, 'cytshf', 'utsgn4ly7zke', 21, 11);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (22, 'wsigke4wz35m4tpuj', 's8hr78o7p', 22, 3);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (23, 'u5b8e0ro', 'l623', 23, 12);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (24, 'i68njmfefp ', 'tk9 n', 24, 4);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (25, 'lpp u
i557hy7a9', 'dzr4ct	a044hdqoqc', 25, 6);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (26, 'xox2nf56kpzm2w5', '1eult31nqhv', 26, 5);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (27, 'gfvwx3qwcn97v
twgj98', 'p 2gyz15', 27, 8);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (28, '4546jk64nm71z', 'lnlqqd3', 28, 2);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (29, 'tr0f', 'p0ehr', 29, 1);
INSERT INTO restaurant (id, name, description, owner, type_id) VALUES (30, 'qs	iq ts9', 'o29t 1t 8', 30, 1);

-- Table: restaurantPicture
CREATE TABLE restaurantPicture (picture_id INTEGER REFERENCES picture (id), restaurant_id INTEGER REFERENCES restaurant (id));
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (1, 1);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (2, 2);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (3, 3);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (4, 4);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (5, 5);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (6, 6);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (7, 7);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (8, 8);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (9, 9);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (10, 10);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (11, 11);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (12, 12);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (13, 13);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (14, 14);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (15, 15);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (16, 16);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (17, 17);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (18, 18);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (19, 19);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (20, 20);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (21, 21);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (22, 22);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (23, 23);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (24, 24);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (25, 25);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (26, 26);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (27, 27);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (28, 28);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (29, 29);
INSERT INTO restaurantPicture (picture_id, restaurant_id) VALUES (30, 30);

-- Table: review
CREATE TABLE review (rating INTEGER CHECK (rating < 6 AND rating > - 1) NOT NULL, id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, description VARCHAR DEFAULT ('Review not available'), restaurant_id INTEGER REFERENCES restaurant (id) NOT NULL, reviewer_id INTEGER REFERENCES user (id) NOT NULL);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (4, 3, 'n  ye0', 3, 3);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (3, 4, ' q6ty', 4, 4);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (3, 5, '163320w	', 5, 5);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 6, 'eg 4xbq5rx4cdq', 6, 6);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (0, 7, 'vk10jw', 7, 7);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (0, 8, 'c12 35miqla0
ko07o', 8, 8);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (3, 9, '0om 5m', 9, 9);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 10, 'otwf7', 10, 10);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (3, 11, '
e b27
r72lvml
tknmu', 11, 11);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (3, 14, 'v2x4	3', 14, 14);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (2, 15, '	4au	eg', 15, 15);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (1, 16, '021
o3xv', 16, 16);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 17, 'mba263r95ppff', 17, 17);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (0, 18, 'o6lcp156x9t', 18, 18);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 19, 'gv76	bz5', 19, 19);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (3, 20, 'pzdeq0s
yzcrbrv7af', 20, 20);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (4, 21, 'a2odbql
bb3oowaskqy7', 21, 21);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 22, ' 2zepa1n', 22, 22);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (4, 23, 'rn6j
1ggx', 23, 23);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (3, 24, 'ie8w1 piw2m9d', 24, 24);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (5, 25, '371jyngfkkefj', 25, 25);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (2, 27, 'zxznepcv9qj0dxd82', 27, 27);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (4, 28, 'p7i7ei7aqr3t7xe', 28, 28);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (1, 29, '8jct21tg 5', 29, 29);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (0, 36, 'LOL comida ZERO!', 10, 1);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (3, 40, 'asdasd', 1, 1);
INSERT INTO review (rating, id, description, restaurant_id, reviewer_id) VALUES (3, 41, 'sadasd', 1, 1);

-- Table: type
CREATE TABLE type (id INTEGER PRIMARY KEY AUTOINCREMENT, content VARCHAR);
INSERT INTO type (id, content) VALUES (1, 'gr9dst81tij7o8e');
INSERT INTO type (id, content) VALUES (2, 'w52336is8vo 5z vaij');
INSERT INTO type (id, content) VALUES (3, '0lvzdlg');
INSERT INTO type (id, content) VALUES (4, 'wdlmmd1 xi3o	63ykv');
INSERT INTO type (id, content) VALUES (5, 'n375p3rnw00p4d ');
INSERT INTO type (id, content) VALUES (6, '5o
vu84jji0
');
INSERT INTO type (id, content) VALUES (7, 'e
o2j5gfdo nwpy74z
');
INSERT INTO type (id, content) VALUES (8, 'm7	e5tu');
INSERT INTO type (id, content) VALUES (9, 'le9d0');
INSERT INTO type (id, content) VALUES (10, '9bw
8v53');
INSERT INTO type (id, content) VALUES (11, 'wkx7cxad 9lw');
INSERT INTO type (id, content) VALUES (12, 'w712jx6	');
INSERT INTO type (id, content) VALUES (13, '2dx  gllds');
INSERT INTO type (id, content) VALUES (14, 'pc8th');
INSERT INTO type (id, content) VALUES (15, 'vdcoxnmfk8');
INSERT INTO type (id, content) VALUES (16, 'y6fp2');
INSERT INTO type (id, content) VALUES (17, 'gob0z6k85479l6zs');
INSERT INTO type (id, content) VALUES (18, 'cj8zlo3c');
INSERT INTO type (id, content) VALUES (19, '
70wdl8sok');
INSERT INTO type (id, content) VALUES (20, '	6p1cp4vns2vq1m7nt');
INSERT INTO type (id, content) VALUES (21, 'g50lk m');
INSERT INTO type (id, content) VALUES (22, '9q7jwdf
ac3hd');
INSERT INTO type (id, content) VALUES (23, 'ufxao');
INSERT INTO type (id, content) VALUES (24, '6l08dgamphm9b3j3');
INSERT INTO type (id, content) VALUES (25, '3u heb83pmxa8gq4nw');
INSERT INTO type (id, content) VALUES (26, '881wgn	2
7nua37ffop');
INSERT INTO type (id, content) VALUES (27, '52p4');
INSERT INTO type (id, content) VALUES (28, '7ioxz7xk7');
INSERT INTO type (id, content) VALUES (29, 'f8szvvxdqao233607me');
INSERT INTO type (id, content) VALUES (30, 'cx	og9ith
r');
INSERT INTO type (id, content) VALUES (31, 'ldmffnm55ju');
INSERT INTO type (id, content) VALUES (32, 'u3o22lh	pvv');
INSERT INTO type (id, content) VALUES (33, 'iq4da9o0	qngg9kk4o1i');
INSERT INTO type (id, content) VALUES (34, 'rfmkl5ka
bjy');
INSERT INTO type (id, content) VALUES (35, '02yfl3u90xr');
INSERT INTO type (id, content) VALUES (36, '	3a4hb');
INSERT INTO type (id, content) VALUES (37, '	waf2n 95gt');
INSERT INTO type (id, content) VALUES (38, 'r
s8rf3na');
INSERT INTO type (id, content) VALUES (39, 'k	bpnz4');
INSERT INTO type (id, content) VALUES (40, 't1af0x y2ge8b9 znl');
INSERT INTO type (id, content) VALUES (41, '23re	n3
7j51i	');
INSERT INTO type (id, content) VALUES (42, 'ofqjn6ckqs483to');
INSERT INTO type (id, content) VALUES (43, ' e089n5rmt7tsxwt');
INSERT INTO type (id, content) VALUES (44, '4
5e');
INSERT INTO type (id, content) VALUES (45, '	pstrb	yqcqms	xg');
INSERT INTO type (id, content) VALUES (46, '41ej3d4lhbb5edqbj');
INSERT INTO type (id, content) VALUES (47, '40o2xcym');
INSERT INTO type (id, content) VALUES (48, 'zod9qznmfgdt4');
INSERT INTO type (id, content) VALUES (49, 'lf n6shbpit');
INSERT INTO type (id, content) VALUES (50, 's9lw');

-- Table: user
CREATE TABLE user (nome VARCHAR DEFAULT ('defaultUser'), id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, picture_id INTEGER REFERENCES picture (id) DEFAULT NULL, password VARCHAR NOT NULL, username VARCHAR NOT NULL, description VARCHAR);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('admin', 1, NULL, 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb', 'a', 'Gosto de Batatas');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('crfb	f	a79h', 2, NULL, 'vucg4
qr9i07', 'x3a39i1f6r 21cn ', 'sad');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('
h14e8kg5	', 3, NULL, 'g0tr88jxhh540of', '1tgjtia6k6
udo5ev	', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('	pgpu4a k7
iefs	', 4, NULL, 'ipo6dnhnll', 'o2
pkeg ti2h', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('xe97kw	n
i2oaxp7uu', 5, NULL, '4xgdlt7', '
 ivzjnu0a1jk3yplfw', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('optb6hr', 6, NULL, '73r1	tuc24ryyp4', 'lzto7r h6vm01o', 'asd');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('4875f609fgkk ', 7, NULL, 'i  vchjdi0p8i9177', 'i5bwbwafrjbfp
', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('n
k	ge', 8, NULL, 'vc73', '
k1ly462', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('1e7mzbyqdapf3ub3
a
', 9, NULL, 'dblcgbp', '8 gt5xb1l	8fo', 'adrq');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('hdvxfrdxwfwso6jact 5', 10, NULL, 'al6pjdr5p', 'po99s4fag', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('qleqgf50kxrkbh223ci', 11, NULL, 'dpcjiqusf84x1', 'zo1fh', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('1bnr', 12, NULL, 'ssz80j0u8ta	9	681', 'hz	hvxbgh n
', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('luej3yzj', 13, NULL, 'gj
	7', 'wx60 ywoccld
fy28g
 ', 'rqwqw');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('u1zxds385 v61ht5v9u
', 14, NULL, '3x0ed
xhdjbe', 'i5u2
9vju np epd4nl', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('va2fc32
ed	kignqjby', 15, NULL, 'zwnwk3nus	9dlp	yl67s', '4fj836u', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('5fjr8', 16, NULL, 'm9thrldw5dz	j3zqr d', 'lm8447p78
4qi ', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('ocb9b', 17, NULL, 'zkw0jofasekxr7dge	lq', '	80rr
	u', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('jd	rk', 18, NULL, '6muocb66f', 'ywcn1lic15', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('qm4b51', 19, NULL, '37qy22 lm', 'dzpxttso1t7', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('3sp9e2v', 20, NULL, 'r0 0j12vlp b505
wyu', 'bmvk0pipmc94
jjw', 'tasda');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('x	u6cbzced', 21, NULL, 'r dlyvu jcg9', 'zbnv47', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('v8dchvg	b', 22, NULL, 'scnvy4u', 'weah ipvct
m8
2 ha w', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('x3nyqqk9s0y5olj', 23, NULL, 'ts6h8bvxhuy7sav2', 'dx2m6f7
a5t', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('tnmfy', 24, NULL, 'yyg07q8pr5i	71tqbu', 'a54bd1r4gghtasrdy', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('x24324	e99f', 25, NULL, 'uiejbwji	4 pp9eks', 'afx76wfx', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('q80m
', 26, NULL, '0	z3sz0uthfma4vcw', '1r3s2', 'afsfat');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('mcwcov8qea7tgj
0i', 27, NULL, '7kbi1uda7	eydk nuiui', 'c
v6l63gxq3r
t', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('4 to4t', 28, NULL, ' ruqvmia9vd9j', '8gbes00
i90x5cc', 'fasfsa');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('36r8qlwmiy9 7y
 hit	', 29, NULL, '7ocnteccx6nk', 'z
ldudu8819', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('cs5lxtx', 30, NULL, 'b4s4br3nsk
i9trdt', 'kqglmmoj	e j5du	x', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('24a3', 31, NULL, '77uqrn', 'd8m 3e 4936pv', 'asfa');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('aw8k45l  ', 32, NULL, '5460wl', 'cqno7qmytvm27', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('nnid
9
q76 ', 33, NULL, 't4b	emugyzs8poat58', 'u1 32rqjc9lo5s0sf', 'gadsafs');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('gm4yf55p3l e	', 34, NULL, 'ig d9hmk
8namf', 'pojnt 5	zk7bvkn', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('a2kh6', 35, NULL, '2ogg1jfs4yzg7', 'xrqsm96', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('dc9xm7dvik5nbckks tp', 36, NULL, 'nou825ex0hbtnl', '3 t6ilmh29zeo	aapo8e', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('plq e4hotslxm', 37, NULL, 'dh2jrxkcc', 'lf5ml
9sw4m7e7', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('e1ixwfy2r7br5wtbv9om', 38, NULL, '6sq7p6
', 'jgmfjv9elcvytx8', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('qo4	32nwbci3fso24', 39, NULL, 'jrh12gcd8zyhsoxmw7', 'ea72272
b9fegihw', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('92t5ae47', 40, NULL, 'txbv7fsrglc', 'khp5j3x1o4mijz', 'aeradsa');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('	uhpj6xrt7s8thh', 41, NULL, '2ft0epe', 'ajnzpk5ndu	30acc3nph', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('q8cpp', 42, NULL, 'wo7b3ec	w5 4cibdo', 'e64z', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('g  1en	cb253mt80u', 43, NULL, 'jc
0e42', '62mfqjbs1jnp9p26sp ', 'ad');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('y81cjfg29lgj32zjnw8', 44, NULL, 'bl1kys041oqy9
1qw3', 'z16jc', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('egkrz4ub
kodbm', 45, NULL, '1eu3fwughc5
s3t', 'pmo5 h7uxvdb 7', 'fasfa');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('wto gddvg98', 46, NULL, '52v7p5g83', 'x5ho hhjtjjdms2gs', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('x ons', 47, NULL, 'oe9oye5uu', '83vuvu', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('fewr0k4s ', 48, NULL, 'v045xx0u w', '7j88k', 'sacascafe');
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('xrhf', 49, NULL, '8hkyk26708', '05n72tonfmu3rmqqpxkv', NULL);
INSERT INTO user (nome, id, picture_id, password, username, description) VALUES ('jj51pie79g', 50, NULL, 'cl05x1ty1x494d06ou2', 'ssql5j7y0911w7', NULL);

-- Trigger: deleteComments
CREATE TRIGGER deleteComments BEFORE DELETE ON review FOR EACH ROW BEGIN DELETE FROM awnser 
WHERE awnser.review = OLD.id; END;

-- View: viewUserAnswer
CREATE VIEW viewUserAnswer AS SELECT awnser.id, content, review, nome, user.id as user_id
FROM awnser, user
WHERE awnser.user = user.id;

-- View: viewUserReview
CREATE VIEW viewUserReview AS SELECT review.id as id, review.description, restaurant_id, rating, nome, user.id as user_id 
FROM user, review
WHERE user.id = review.reviewer_id;

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
