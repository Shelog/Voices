#
# Table structure for table 'tx_voices_domain_model_konzertplan'
#
CREATE TABLE tx_voices_domain_model_konzertplan (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	bezeichnung varchar(255) DEFAULT '' NOT NULL,
	konzerts int(11) unsigned DEFAULT '0' NOT NULL,
	singers int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_voices_domain_model_part'
#
CREATE TABLE tx_voices_domain_model_part (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	konzert int(11) unsigned DEFAULT '0' NOT NULL,

	ja tinyint(1) unsigned DEFAULT '0' NOT NULL,
	nein tinyint(1) unsigned DEFAULT '0' NOT NULL,
	vielleicht tinyint(1) unsigned DEFAULT '0' NOT NULL,
	comment varchar(255) DEFAULT '' NOT NULL,
	konzert int(11) unsigned DEFAULT '0',
	singer int(11) unsigned DEFAULT '0',

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_voices_domain_model_konzert'
#
CREATE TABLE tx_voices_domain_model_konzert (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	konzertplan int(11) unsigned DEFAULT '0' NOT NULL,

	datum varchar(255) DEFAULT '' NOT NULL,
	beginn varchar(255) DEFAULT '' NOT NULL,
	place varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL,
	remark varchar(255) DEFAULT '' NOT NULL,
	leitung_r varchar(255) DEFAULT '' NOT NULL,
	leitun_l varchar(255) DEFAULT '' NOT NULL,
	zusagen int(11) DEFAULT '0' NOT NULL,
	absagen int(11) DEFAULT '0' NOT NULL,
	vielleichts int(11) DEFAULT '0' NOT NULL,
	parts int(11) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_voices_domain_model_singer'
#
CREATE TABLE tx_voices_domain_model_singer (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	konzertplan int(11) unsigned DEFAULT '0' NOT NULL,

	nachname varchar(255) DEFAULT '' NOT NULL,
	vorname varchar(255) DEFAULT '' NOT NULL,
	stimme varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_voices_domain_model_konzert'
#
CREATE TABLE tx_voices_domain_model_konzert (

	konzertplan  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_voices_domain_model_singer'
#
CREATE TABLE tx_voices_domain_model_singer (

	konzertplan  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_voices_domain_model_part'
#
CREATE TABLE tx_voices_domain_model_part (

	konzert  int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_voices_domain_model_singer'
#
CREATE TABLE tx_voices_domain_model_singer (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);
