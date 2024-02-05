<?php
define('_DIR_PLUGINS_SUPPL',_DIR_RACINE."squelettes/plugins/");
define('_DEV_VERSION_SPIP_COMPAT',"4.0.99");


/**
 * Liste des intervenant conferences
 * @return array
 */
function mailsubscribers_synchro_list_newsletter_rayonsfantomes(){
	// le mail des rayons fantomes ... updaté une fois par jour
	// select distinct meta_value  from wp_gf_entry_meta where  form_id=2
	$auteurs=array();
	$auteurs = sql_allfetsel("distinct meta_value as email","wp_gf_entry_meta","form_id=2",'','','','',"connect_rayonsfantomes");
return $auteurs;
}