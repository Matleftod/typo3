CREATE TABLE tx_beerntmjm_domain_model_beer (
	name varchar(255) NOT NULL DEFAULT '',
	image int(11) unsigned NOT NULL DEFAULT '0',
	flavour text,
	description text,
	degree double(11,2) NOT NULL DEFAULT '0.00',
	type int(11) unsigned DEFAULT '0',
	ingredients int(11) unsigned NOT NULL DEFAULT '0',
	country int(11) unsigned DEFAULT '0',
	reviews int(11) unsigned NOT NULL DEFAULT '0',
	brand int(11) unsigned DEFAULT '0',
	theme int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_beerntmjm_domain_model_type (
	libelle varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_beerntmjm_domain_model_ingredient (
	libelle varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_beerntmjm_domain_model_country (
	libelle varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_beerntmjm_domain_model_review (
	beer int(11) unsigned DEFAULT '0' NOT NULL,
	content text NOT NULL DEFAULT '',
	mark int(11) NOT NULL DEFAULT '0',
	username varchar(255) NOT NULL DEFAULT '',
	date int(11) NOT NULL DEFAULT '0',
	validated smallint(1) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_beerntmjm_domain_model_brand (
	libelle varchar(255) NOT NULL DEFAULT '',
	logo int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_beerntmjm_domain_model_theme (
	title varchar(255) NOT NULL DEFAULT ''
);
