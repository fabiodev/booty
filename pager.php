<?php
function navigation() {
    $prev = get_next_posts_link('&larr; Older');
    $next = get_previous_posts_link('Newer &rarr;');

    if ($prev || $next) {
        $html = '<nav><ul class="pager">';
        
        if ($prev) {
            $html .= '<li class="previous">';
            $html .= $prev;
            $html .= '</li>';
        }
        
        if ($next) {
            $html .= '<li class="next">';
            $html .= $next;
            $html .= '</li>';
        }
        
        $html .= '</ul></nav>';
        return $html;
    } else {
        return null;
    }
}

echo navigation();
?>
