create table UTILISATEUR (
	id int not null AUTO_INCREMENT,
	login varchar(50) not null,
	password varchar(255) not null,
	primary key (id)
);

create table TITRE (
	idtitre int not null AUTO_INCREMENT,
	texttitre varchar(255),
	primary key (idtitre)
);

create table TEXT (
	idtext int not null AUTO_INCREMENT,
	text varchar(255),
	primary key (idtext)
);

create table IMAGE (
	idimage int not null AUTO_INCREMENT,
	nomimage varchar(255),
	primary key (idimage)
);

create table ACTU (
	idactu int not null AUTO_INCREMENT,
	textactu varchar(255),
	primary key(idactu)
);

create table SOUSMENU (
	idsousmenu int not null AUTO_INCREMENT,
	idtitresousmenu int,
	idtextsousmenu int,
	idimagesousmenu int,
	primary key(idsousmenu),
	constraint fk_titresousmenu foreign key (idtitresousmenu) references TITRE(idtitre),
	constraint fk_textsousmenu foreign key (idtextsousmenu) references TEXT(idtext),
	constraint fk_imagesousmenu foreign key (idimagesousmenu) references IMAGE(idimage)
);

create table MENU (
	idmenu int not null AUTO_INCREMENT,
	idtitremenu int,
	idtextmenu int,
	idimagemenu int,
	idsousmenu int,
	primary key (idmenu),
	constraint fk_sousmenu foreign key (idsousmenu) references SOUSMENU(idsousmenu),
	constraint fk_titremenu foreign key (idtitremenu) references TITRE(idtitre),
	constraint fk_textmenu foreign key (idtextmenu) references TEXT(idtext),
	constraint fk_imagemenu foreign key (idimagemenu) references IMAGE(idimage)
);