<?php

function getCategoryString($category)
{
    if ($category == 3) {
        $category = "صعب";
    } else if ($category == 2) {
        $category = "متوسط";

    } else if ($category == 1) {
        $category = "سهل";
    }

    return $category;
}

function getTypeString($type)
{
    if ($type == 1) {
        $type = "صح/خطأ";
    } else if ($type == 2) {
        $type = "اختيار متعدد";
    }

    return $type;
}

function hiddenOption($type)
{
    if ($type == 1) {
        return true;
    }
    return false;
}

function getOption($type)
{
    if ($type == 1) {
        return ['صح' , 'خطأ'];
    }
    return [];
}
