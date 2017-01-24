$(document).ready(function () {

    $('.deleteBook').on('click', function () {
        if (confirm("Êtes-vous sûr de vouloir supprimer ce livre ?")) {
            var bookId = $(this).attr('href');
            bookId = bookId.split("#delete")[1];
            $.get({
                url:"./index.php?action=delete&bookId="+bookId
            });
            window.location = "./index.php";
        }
    });

    $('.updateBook').on('click', function () {
        if (confirm("Êtes-vous sûr de vouloir mettre à jour ce livre ?")) {
            var bookName = $('.bookName').val();
            var bookId = $(this).attr('href');
            bookId = bookId.split("#update")[1];
            $.get({
                url:"./index.php?action=confirmUpdate&bookName="+bookName+"&bookId="+bookId
            });
            window.location = "./index.php";
        }
    });

    $('.addBook').on('click', function () {
        if (confirm("Êtes-vous sûr de vouloir ajouter ce livre ?")) {
            var bookName = $('.bookName').val();
            console.log(bookName);
            $.get({
                url:"./index.php?action=confirmAdd&bookName="+bookName
            });
            window.location = "./index.php";
        }
    });
});