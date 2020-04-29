<?php
  require_once('functions/frontend.php');

    $page_content->getHeader();
    $page_content->getContent('slider');
    $page_content->getContent('feature');
    $page_content->getContent('news');
    $page_content->getContent('popular');
    $page_content->getContent('article');
    $page_content->getContent('carousel');
    $page_content->getContent('sidebar_page_container');
    $page_content->getContent('email_section');
    $page_content->getContent('search');
    $page_content->getFooter();
