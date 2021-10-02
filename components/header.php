<?php 

    $test_string = 'this is a string';

?>

<header>
    <ul>
        <li>
            <a href="/app-3/"> 
                <?php if( isset($number) ) { echo $number; } ?>
                Home
            </a>
        </li>
        <li>
            <a href="/app-3/about.php">About</a>
        </li>
        <li>
            <a href="/app-3/contact.php">Contact</a>
        </li>
        <li>
            <a href="/app-3/news.php">News</a>
        </li>
        <li>
            <a href="/app-3/blog.php">Blog</a>
        </li>
    </ul>    
</header>