<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($books AS $book) {
                echo "<tr>
                        <td><a style='color:black;' href='?action=update&bookId=".$book->getId()."'>".$book->getName()."</a></td>
                        <td>
                            <a href='?action=update&bookId=".$book->getId()."'><img width='32' src='./ressources/img/update.png'></a>
                            <a class='deleteBook' href='#delete".$book->getId()."'><img width='32' src='./ressources/img/delete.png'></a>
                        </td>
                      </tr>";
            }
        ?>
    </tbody>
</table>

<a href="?action=add"><button class="btn btn-primary">Add a new book!</button></a>