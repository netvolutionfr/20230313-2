<?php

class Menu
{
    private $list_items = array();

    public function add_item($url, $text)
    {
        $item = array(
            'url' => $url,
            'text' => $text
        );
        $this->list_items[] = $item;
    }

    public function display() {
        $html = '<nav>';
        $html .= '    <div class="nav-wrapper">';
        $html .= '        <ul id="nav-mobile" class="right hide-on-med-and-down">';

        foreach ($this->list_items as $item) {
            $html .= '            <li';
            if (basename($_SERVER['PHP_SELF']) == $item['url']) {
                $html .= ' class="active"';
            }
            $html .= '><a href="'. $item['url'] .'">'. $item['text'] .'</a></li>';
        }

        $html .= '        </ul>';
        $html .= '    </div>';
        $html .= '</nav>';

        return $html;
    }
}