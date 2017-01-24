<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($book AS $bk) {
                echo "<tr>
                        <td><input class='bookName' type='text' value='".$bk->getName()."'</td>
                        <td><a class='updateBook' href='#update".$bk->getId()."'><button class='btn btn-warning'>Update</button></a></td>
                      </tr>";
            }
        ?>
    </tbody>
</table>