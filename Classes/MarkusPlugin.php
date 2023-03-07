<?php

require_once "AdminPage.php";

class MarkusPlugin {
    protected $adminPage = null;

	function register() {
        $this->_adminPage = new AdminPage();
        $this->_adminPage->set_pages([
            [
                "title" => "Teilnehmer Übersicht", 
                "menu_title" => "Teilnehmer", 
                "capability" => "manage_options", 
                "menu_slug" => "MarkusPlugin_ShowParticipants", 
                "callback" => [$this, "show_participants"], 
                "icon_url" => "dashicons-admin-users", 
                "position" => 110
            ],
            [
                "title" => "Lager Übersicht", 
                "menu_title" => "Lager", 
                "capability" => "manage_options", 
                "menu_slug" => "MarkusPlugin_ShowCamps", 
                "callback" => [$this, "show_camps"], 
                "icon_url" => "dashicons-admin-users", 
                "position" => 111
            ]
        ])->register();
	}

	function activate() {
		flush_rewrite_rules();
    }
    
	function deactivate() {
		flush_rewrite_rules();
    }
    function show_participants() {
        require WP_PLUGIN_DIR . "/markus/templates/show_participants.php";
    }
    function show_camps() {
        require WP_PLUGIN_DIR . "/markus/templates/show_camps.php";
    }
}