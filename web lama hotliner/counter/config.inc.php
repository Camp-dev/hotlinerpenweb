<?php
/* Use Database(mysql) or files to store counting */
/* execute this in your database space before using pngcounter
   CREATE TABLE counter (
   page varchar(30) NOT NULL default '',
   count bigint(20) NOT NULL default '0',
   PRIMARY KEY  (page),
   KEY fichero (page)
   ) TYPE=MyISAM;
*/
$CFG['db']       = true;    /* if false ignore 4 following fields */
$CFG['dbhost']   = "localhost";   /* host:port */
$CFG['dbuser']   = "hotliner_hotline";
$CFG['dbpasswd'] = "123456789";
$CFG['dbname']   = "hotliner_hotliner";

/* How many digits to show? */
$CFG['pad'] = 6;

/* Check HTTP_REFERER? */
$CFG['referer_check'] = false;
$VALID = array(
               "http://localhost",
               "http://www.fmartinro.f2s.com"
              );

/* Block reloading? */
$CFG['block_ip']     = true;
$CFG['lock_timeout'] = 30; // minutes

?>