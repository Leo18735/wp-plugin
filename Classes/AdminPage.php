<?php

class AdminPage {
    protected $_pages = null;

    public function register() {
        if (!empty($this->_pages)) {
            add_action("admin_menu", [$this, "_add_admin_menu"]);
        }
    }

    public function set_pages(array $value) {
        $this->_pages = $value;
        return $this;
    }

    function _add_admin_menu() {
        foreach ($this->_pages as $page) {
            add_menu_page($page["title"], $page["menu_title"], $page["capability"], $page["menu_slug"], $page["callback"], $page["icon_url"], $page["position"]);
        }
    }
}