<?php

function is_active_link($path) {
    return request()->path() == $path ? 'active_link' : '';
};
