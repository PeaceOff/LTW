--
-- File generated with SQLiteStudio v3.1.1 on dom nov 27 09:58:13 2016
--
-- Text encoding used: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: owner
CREATE TABLE owner (
    user_id INTEGER PRIMARY KEY
                  REFERENCES user (id) 
                  NOT NULL
);
INSERT INTO owner (user_id) VALUES (1);
INSERT INTO owner (user_id) VALUES (2);
INSERT INTO owner (user_id) VALUES (3);
INSERT INTO owner (user_id) VALUES (4);
INSERT INTO owner (user_id) VALUES (5);
INSERT INTO owner (user_id) VALUES (6);
INSERT INTO owner (user_id) VALUES (7);
INSERT INTO owner (user_id) VALUES (8);
INSERT INTO owner (user_id) VALUES (9);
INSERT INTO owner (user_id) VALUES (10);
INSERT INTO owner (user_id) VALUES (11);
INSERT INTO owner (user_id) VALUES (12);
INSERT INTO owner (user_id) VALUES (13);
INSERT INTO owner (user_id) VALUES (14);
INSERT INTO owner (user_id) VALUES (15);
INSERT INTO owner (user_id) VALUES (16);
INSERT INTO owner (user_id) VALUES (17);
INSERT INTO owner (user_id) VALUES (18);
INSERT INTO owner (user_id) VALUES (19);
INSERT INTO owner (user_id) VALUES (20);
INSERT INTO owner (user_id) VALUES (21);
INSERT INTO owner (user_id) VALUES (22);
INSERT INTO owner (user_id) VALUES (23);
INSERT INTO owner (user_id) VALUES (24);
INSERT INTO owner (user_id) VALUES (25);
INSERT INTO owner (user_id) VALUES (26);
INSERT INTO owner (user_id) VALUES (27);
INSERT INTO owner (user_id) VALUES (28);
INSERT INTO owner (user_id) VALUES (29);
INSERT INTO owner (user_id) VALUES (30);
INSERT INTO owner (user_id) VALUES (31);
INSERT INTO owner (user_id) VALUES (32);
INSERT INTO owner (user_id) VALUES (33);
INSERT INTO owner (user_id) VALUES (34);
INSERT INTO owner (user_id) VALUES (35);
INSERT INTO owner (user_id) VALUES (36);
INSERT INTO owner (user_id) VALUES (37);
INSERT INTO owner (user_id) VALUES (38);
INSERT INTO owner (user_id) VALUES (39);
INSERT INTO owner (user_id) VALUES (40);
INSERT INTO owner (user_id) VALUES (41);
INSERT INTO owner (user_id) VALUES (42);
INSERT INTO owner (user_id) VALUES (43);
INSERT INTO owner (user_id) VALUES (44);
INSERT INTO owner (user_id) VALUES (45);
INSERT INTO owner (user_id) VALUES (46);
INSERT INTO owner (user_id) VALUES (47);
INSERT INTO owner (user_id) VALUES (48);
INSERT INTO owner (user_id) VALUES (49);
INSERT INTO owner (user_id) VALUES (50);

-- Table: picture
CREATE TABLE picture (
    id            INTEGER PRIMARY KEY AUTOINCREMENT
                          NOT NULL,
    restaurant_id         NOT NULL
                          REFERENCES restaurant (id),
    content       VARCHAR NOT NULL
);
INSERT INTO picture (id, restaurant_id, content) VALUES (1, 1, 's2o
om0hjqwy');
INSERT INTO picture (id, restaurant_id, content) VALUES (2, 2, 'ak	p ');
INSERT INTO picture (id, restaurant_id, content) VALUES (3, 3, 'l6qt9mtqeqd7id2n1pgm');
INSERT INTO picture (id, restaurant_id, content) VALUES (4, 4, 'xs9m');
INSERT INTO picture (id, restaurant_id, content) VALUES (5, 5, '89r5t7002oi eus5 ');
INSERT INTO picture (id, restaurant_id, content) VALUES (6, 6, '9l1wzfu7l52');
INSERT INTO picture (id, restaurant_id, content) VALUES (7, 7, 'vw48jkp8rbxe16p');
INSERT INTO picture (id, restaurant_id, content) VALUES (8, 8, 'd
sqye');
INSERT INTO picture (id, restaurant_id, content) VALUES (9, 9, 'gu	391euo4kfq68cb');
INSERT INTO picture (id, restaurant_id, content) VALUES (10, 10, 'qrv7uq5zh07b5944b');
INSERT INTO picture (id, restaurant_id, content) VALUES (11, 11, 'ms8hatwrgsn94gpq5ryy');
INSERT INTO picture (id, restaurant_id, content) VALUES (12, 12, 'vj8mpa0s3');
INSERT INTO picture (id, restaurant_id, content) VALUES (13, 13, 'zrfwo8ssnrab9 bu byr');
INSERT INTO picture (id, restaurant_id, content) VALUES (14, 14, '3nhbzasc63mrrmo7');
INSERT INTO picture (id, restaurant_id, content) VALUES (15, 15, '	cyzyhtq');
INSERT INTO picture (id, restaurant_id, content) VALUES (16, 16, 'gdb5j56ss');
INSERT INTO picture (id, restaurant_id, content) VALUES (17, 17, 'nzxqoq');
INSERT INTO picture (id, restaurant_id, content) VALUES (18, 18, 'wphg5zjf	4s63wquyl');
INSERT INTO picture (id, restaurant_id, content) VALUES (19, 19, 'la4ffcocd
i');
INSERT INTO picture (id, restaurant_id, content) VALUES (20, 20, 'mp
0lg9dy0m8q2');
INSERT INTO picture (id, restaurant_id, content) VALUES (21, 21, 'k begkcisz1vrbnij03');
INSERT INTO picture (id, restaurant_id, content) VALUES (22, 22, 'o1k9fkoj v6hxxc1');
INSERT INTO picture (id, restaurant_id, content) VALUES (23, 23, 'ug 	tr2cgr	 moee');
INSERT INTO picture (id, restaurant_id, content) VALUES (24, 24, 'hn0shnztrz3');
INSERT INTO picture (id, restaurant_id, content) VALUES (25, 25, 'e0qt');
INSERT INTO picture (id, restaurant_id, content) VALUES (26, 26, 'ewte63tqad6c2');
INSERT INTO picture (id, restaurant_id, content) VALUES (27, 27, 'vzzbpsd eijmu037eb7');
INSERT INTO picture (id, restaurant_id, content) VALUES (28, 28, 'wv0q');
INSERT INTO picture (id, restaurant_id, content) VALUES (29, 29, 'ru
6fml1u
');
INSERT INTO picture (id, restaurant_id, content) VALUES (30, 30, 'at20dr6j3wdhdi5y	');

-- Table: restaurant
CREATE TABLE restaurant (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR NOT NULL, description VARCHAR DEFAULT ('Description not available'), owner INTEGER REFERENCES owner (user_id), type VARCHAR NOT NULL);
INSERT INTO restaurant (id, name, description, owner, type) VALUES (1, '
r8rp9vm7zga', 'sckd', 1, ' tm0qc30m94w27equc
2');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (2, '0fixm	wmr
vt
81e6b58', 'qnk6gq3cg5fzmji2	n', 2, '
n
tmyj	');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (3, 'x	yx7
9', 'f4m7ryi1q3k7h6wlu4us', 3, 'wumx4vrr');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (4, 'l9aeds', 'tf7	n3o 20477oc48d', 4, 'ecj 70 r');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (5, 'ug	qdjosyf', 'l 8	zmn0s7x80jh8', 5, 'og7h8nwmmqtxx64m2');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (6, 'gp415q3wk44y', 'lrgp74gqwg768gxoeq89', 6, '96e9q');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (7, 'kq7b20zz	xfbgofnb', 'r4r26', 7, '2brd9g7hdo');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (8, 'y	7o5f9e77x', '23	8 7anqrtoimxt631', 8, 'z	yh1y7 ');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (9, 'p06	fzxs74bb5eqhyy5x', '3wp78mm3vvwp3d', 9, ' nef
qv uqwi	');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (10, '7ctu9bl1bkyoxfa', 'o cuko8', 10, 'c8oqjktje7');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (11, '4n y', 'xqxb8wt2vm 0', 11, 'todcuhh67412k');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (12, 'c76yse', '6up9kzyl	0pk5', 12, 'e5yio1');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (13, 'cge74x3h', '07pk
gd0sr1
4bk', 13, 'usr8y r
38emrq8	');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (14, '2i1x1fh	5x', '
gz
c
xn60da1d2', 14, '	kqpnn fgsfhvf56');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (15, '57nfofcy8p88o1sc', 'pu1fem
qs', 15, 'xuz6 0stzcq79b');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (16, 'fksj50zklimdc4si19', '
rs9cwnrz399pjmgxp', 16, 'vi2qaqixps59qa
dol');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (17, '	jtmaw', '8urpc6jbzhko r6', 17, 'rffdvxwruk63duo7y6r');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (18, 'd326zivmbh', 'av7b', 18, 'gqfen1b');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (19, 'oqpcoh', '3w	o', 19, 'jqssmwft
ls2p4vam');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (20, 'n7qj7shqw3', 'p12eay7lnhndp4tfdozm', 20, 'tnei3aknp3xvr');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (21, 'cytshf', 'utsgn4ly7zke', 21, '4yufla2a1drhwc	');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (22, 'wsigke4wz35m4tpuj', 's8hr78o7p', 22, '5rl2lcp');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (23, 'u5b8e0ro', 'l623', 23, '7xr00bucphf0e');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (24, 'i68njmfefp ', 'tk9 n', 24, 'zv52nf	t9oem3');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (25, 'lpp u
i557hy7a9', 'dzr4ct	a044hdqoqc', 25, 'wu299xkj68j');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (26, 'xox2nf56kpzm2w5', '1eult31nqhv', 26, 'ct asrj q5');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (27, 'gfvwx3qwcn97v
twgj98', 'p 2gyz15', 27, 'ml6niy5kit');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (28, '4546jk64nm71z', 'lnlqqd3', 28, 'akuszp');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (29, 'tr0f', 'p0ehr', 29, 'w093a0e	fcsu	nsvdrnm');
INSERT INTO restaurant (id, name, description, owner, type) VALUES (30, 'qs	iq ts9', 'o29t 1t 8', 30, '5z9e
tec aw2hw
');

-- Table: review
CREATE TABLE review (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, rating INTEGER CHECK (rating < 6 AND rating > - 1) NOT NULL, description VARCHAR DEFAULT ('Review not available'), reviewer_id INTEGER REFERENCES reviewer (user_id) NOT NULL, restaurant_id INTEGER REFERENCES restaurant (id) NOT NULL);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (1, 5, '0lr29sv9ezt2owr ', 1, 1);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (2, 4, 'vjd9j1
mvo	', 2, 2);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (3, 4, 'n  ye0', 3, 3);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (4, 3, ' q6ty', 4, 4);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (5, 3, '163320w	', 5, 5);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (6, 5, 'eg 4xbq5rx4cdq', 6, 6);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (7, 0, 'vk10jw', 7, 7);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (8, 0, 'c12 35miqla0
ko07o', 8, 8);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (9, 3, '0om 5m', 9, 9);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (10, 5, 'otwf7', 10, 10);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (11, 3, '
e b27
r72lvml
tknmu', 11, 11);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (12, 3, 'agy9lun', 12, 12);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (13, 1, 'ccn3l', 13, 13);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (14, 3, 'v2x4	3', 14, 14);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (15, 2, '	4au	eg', 15, 15);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (16, 1, '021
o3xv', 16, 16);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (17, 5, 'mba263r95ppff', 17, 17);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (18, 0, 'o6lcp156x9t', 18, 18);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (19, 5, 'gv76	bz5', 19, 19);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (20, 3, 'pzdeq0s
yzcrbrv7af', 20, 20);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (21, 4, 'a2odbql
bb3oowaskqy7', 21, 21);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (22, 5, ' 2zepa1n', 22, 22);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (23, 4, 'rn6j
1ggx', 23, 23);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (24, 3, 'ie8w1 piw2m9d', 24, 24);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (25, 5, '371jyngfkkefj', 25, 25);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (26, 1, 'uzg02spso', 26, 26);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (27, 2, 'zxznepcv9qj0dxd82', 27, 27);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (28, 4, 'p7i7ei7aqr3t7xe', 28, 28);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (29, 1, '8jct21tg 5', 29, 29);
INSERT INTO review (id, rating, description, reviewer_id, restaurant_id) VALUES (30, 5, 'cdt3rvqia	', 30, 30);

-- Table: reviewer
CREATE TABLE reviewer (
    user_id INTEGER PRIMARY KEY
                  REFERENCES user (id) 
                  NOT NULL
);
INSERT INTO reviewer (user_id) VALUES (1);
INSERT INTO reviewer (user_id) VALUES (2);
INSERT INTO reviewer (user_id) VALUES (3);
INSERT INTO reviewer (user_id) VALUES (4);
INSERT INTO reviewer (user_id) VALUES (5);
INSERT INTO reviewer (user_id) VALUES (6);
INSERT INTO reviewer (user_id) VALUES (7);
INSERT INTO reviewer (user_id) VALUES (8);
INSERT INTO reviewer (user_id) VALUES (9);
INSERT INTO reviewer (user_id) VALUES (10);
INSERT INTO reviewer (user_id) VALUES (11);
INSERT INTO reviewer (user_id) VALUES (12);
INSERT INTO reviewer (user_id) VALUES (13);
INSERT INTO reviewer (user_id) VALUES (14);
INSERT INTO reviewer (user_id) VALUES (15);
INSERT INTO reviewer (user_id) VALUES (16);
INSERT INTO reviewer (user_id) VALUES (17);
INSERT INTO reviewer (user_id) VALUES (18);
INSERT INTO reviewer (user_id) VALUES (19);
INSERT INTO reviewer (user_id) VALUES (20);
INSERT INTO reviewer (user_id) VALUES (21);
INSERT INTO reviewer (user_id) VALUES (22);
INSERT INTO reviewer (user_id) VALUES (23);
INSERT INTO reviewer (user_id) VALUES (24);
INSERT INTO reviewer (user_id) VALUES (25);
INSERT INTO reviewer (user_id) VALUES (26);
INSERT INTO reviewer (user_id) VALUES (27);
INSERT INTO reviewer (user_id) VALUES (28);
INSERT INTO reviewer (user_id) VALUES (29);
INSERT INTO reviewer (user_id) VALUES (30);
INSERT INTO reviewer (user_id) VALUES (31);
INSERT INTO reviewer (user_id) VALUES (32);
INSERT INTO reviewer (user_id) VALUES (33);
INSERT INTO reviewer (user_id) VALUES (34);
INSERT INTO reviewer (user_id) VALUES (35);
INSERT INTO reviewer (user_id) VALUES (36);
INSERT INTO reviewer (user_id) VALUES (37);
INSERT INTO reviewer (user_id) VALUES (38);
INSERT INTO reviewer (user_id) VALUES (39);
INSERT INTO reviewer (user_id) VALUES (40);
INSERT INTO reviewer (user_id) VALUES (41);
INSERT INTO reviewer (user_id) VALUES (42);
INSERT INTO reviewer (user_id) VALUES (43);
INSERT INTO reviewer (user_id) VALUES (44);
INSERT INTO reviewer (user_id) VALUES (45);
INSERT INTO reviewer (user_id) VALUES (46);
INSERT INTO reviewer (user_id) VALUES (47);
INSERT INTO reviewer (user_id) VALUES (48);
INSERT INTO reviewer (user_id) VALUES (49);
INSERT INTO reviewer (user_id) VALUES (50);

-- Table: user
CREATE TABLE user (
    id         INTEGER PRIMARY KEY AUTOINCREMENT
                       NOT NULL,
    nome       VARCHAR DEFAULT ('defaultUser'),
    password   VARCHAR NOT NULL,
    username   VARCHAR NOT NULL,
    picture_id INTEGER REFERENCES picture (id) 
                       DEFAULT NULL
);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (1, '8m3vaw h	', 'l 6epqgv48a5t7v', '4xaa9fx0', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (2, 'crfb	f	a79h', 'vucg4
qr9i07', 'x3a39i1f6r 21cn ', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (3, '
h14e8kg5	', 'g0tr88jxhh540of', '1tgjtia6k6
udo5ev	', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (4, '	pgpu4a k7
iefs	', 'ipo6dnhnll', 'o2
pkeg ti2h', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (5, 'xe97kw	n
i2oaxp7uu', '4xgdlt7', '
 ivzjnu0a1jk3yplfw', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (6, 'optb6hr', '73r1	tuc24ryyp4', 'lzto7r h6vm01o', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (7, '4875f609fgkk ', 'i  vchjdi0p8i9177', 'i5bwbwafrjbfp
', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (8, 'n
k	ge', 'vc73', '
k1ly462', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (9, '1e7mzbyqdapf3ub3
a
', 'dblcgbp', '8 gt5xb1l	8fo', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (10, 'hdvxfrdxwfwso6jact 5', 'al6pjdr5p', 'po99s4fag', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (11, 'qleqgf50kxrkbh223ci', 'dpcjiqusf84x1', 'zo1fh', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (12, '1bnr', 'ssz80j0u8ta	9	681', 'hz	hvxbgh n
', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (13, 'luej3yzj', 'gj
	7', 'wx60 ywoccld
fy28g
 ', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (14, 'u1zxds385 v61ht5v9u
', '3x0ed
xhdjbe', 'i5u2
9vju np epd4nl', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (15, 'va2fc32
ed	kignqjby', 'zwnwk3nus	9dlp	yl67s', '4fj836u', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (16, '5fjr8', 'm9thrldw5dz	j3zqr d', 'lm8447p78
4qi ', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (17, 'ocb9b', 'zkw0jofasekxr7dge	lq', '	80rr
	u', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (18, 'jd	rk', '6muocb66f', 'ywcn1lic15', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (19, 'qm4b51', '37qy22 lm', 'dzpxttso1t7', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (20, '3sp9e2v', 'r0 0j12vlp b505
wyu', 'bmvk0pipmc94
jjw', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (21, 'x	u6cbzced', 'r dlyvu jcg9', 'zbnv47', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (22, 'v8dchvg	b', 'scnvy4u', 'weah ipvct
m8
2 ha w', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (23, 'x3nyqqk9s0y5olj', 'ts6h8bvxhuy7sav2', 'dx2m6f7
a5t', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (24, 'tnmfy', 'yyg07q8pr5i	71tqbu', 'a54bd1r4gghtasrdy', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (25, 'x24324	e99f', 'uiejbwji	4 pp9eks', 'afx76wfx', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (26, 'q80m
', '0	z3sz0uthfma4vcw', '1r3s2', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (27, 'mcwcov8qea7tgj
0i', '7kbi1uda7	eydk nuiui', 'c
v6l63gxq3r
t', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (28, '4 to4t', ' ruqvmia9vd9j', '8gbes00
i90x5cc', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (29, '36r8qlwmiy9 7y
 hit	', '7ocnteccx6nk', 'z
ldudu8819', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (30, 'cs5lxtx', 'b4s4br3nsk
i9trdt', 'kqglmmoj	e j5du	x', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (31, '24a3', '77uqrn', 'd8m 3e 4936pv', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (32, 'aw8k45l  ', '5460wl', 'cqno7qmytvm27', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (33, 'nnid
9
q76 ', 't4b	emugyzs8poat58', 'u1 32rqjc9lo5s0sf', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (34, 'gm4yf55p3l e	', 'ig d9hmk
8namf', 'pojnt 5	zk7bvkn', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (35, 'a2kh6', '2ogg1jfs4yzg7', 'xrqsm96', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (36, 'dc9xm7dvik5nbckks tp', 'nou825ex0hbtnl', '3 t6ilmh29zeo	aapo8e', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (37, 'plq e4hotslxm', 'dh2jrxkcc', 'lf5ml
9sw4m7e7', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (38, 'e1ixwfy2r7br5wtbv9om', '6sq7p6
', 'jgmfjv9elcvytx8', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (39, 'qo4	32nwbci3fso24', 'jrh12gcd8zyhsoxmw7', 'ea72272
b9fegihw', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (40, '92t5ae47', 'txbv7fsrglc', 'khp5j3x1o4mijz', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (41, '	uhpj6xrt7s8thh', '2ft0epe', 'ajnzpk5ndu	30acc3nph', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (42, 'q8cpp', 'wo7b3ec	w5 4cibdo', 'e64z', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (43, 'g  1en	cb253mt80u', 'jc
0e42', '62mfqjbs1jnp9p26sp ', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (44, 'y81cjfg29lgj32zjnw8', 'bl1kys041oqy9
1qw3', 'z16jc', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (45, 'egkrz4ub
kodbm', '1eu3fwughc5
s3t', 'pmo5 h7uxvdb 7', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (46, 'wto gddvg98', '52v7p5g83', 'x5ho hhjtjjdms2gs', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (47, 'x ons', 'oe9oye5uu', '83vuvu', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (48, 'fewr0k4s ', 'v045xx0u w', '7j88k', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (49, 'xrhf', '8hkyk26708', '05n72tonfmu3rmqqpxkv', NULL);
INSERT INTO user (id, nome, password, username, picture_id) VALUES (50, 'jj51pie79g', 'cl05x1ty1x494d06ou2', 'ssql5j7y0911w7', NULL);

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
