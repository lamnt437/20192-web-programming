<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <div>>
            <?php
                foreach($books as $book) {
                    $title = $book->getTitle();
                    $author = $book->getAuthor();
                    $description = $book->getDescription();
                    echo "<ul>";
                    echo "<li>$title</li>";
                    echo "<li>$author</li>";
                    echo "<li>$description</li>";
                    echo "</ul>";
                }
            ?>
        </div>
    </body>
</html>