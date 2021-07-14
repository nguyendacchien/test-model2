<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mb-2">
            <a class="btn btn-success btn-lg" href="./index.php?page=add"><i class="fas fa-plus-circle"></i> new</a>
        </div>
        <div class="col-md-6 mb-2">
            <form class="d-flex  mx-2" method="post" >
                <input class="form-control me-2" type="text" name="tim-kiem" placeholder="Search" aria-label="Search">
                <input class="btn btn-outline-success" name="search" type="submit" value="Search">
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên_hàng</th>
            <th scope="col">Loại_hàng</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)) {
            foreach ($products as $product) :?>
                <tr>
                    <td><?php echo $product->getId() ?></td>
                    <td><?php echo $product->getName() ?></td>
                    <td><?php echo $product->getCategory() ?></td>
<!--                    <td>--><?php //echo $product->getPrice() ?><!--</td>-->
<!--                    <td>--><?php //echo $product->getQuantity() ?><!--</td>-->
<!--                    <td>--><?php //echo $product->getDateCreate() ?><!--</td>-->
<!--                    <td>--><?php //echo $product->getDetail() ?><!--</td>-->
                    <td><a class="btn btn-warning btn-lg" href="index.php?page=edit&id=<?php echo $product->getID() ?>">Edit</a>
                    </td>
                    <td><a class="btn btn-danger btn-lg" href="index.php?page=delete&id=<?php echo $product->getID() ?>"
                           onclick="return confirm('bạn chắc chắn muốn xóa?')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd"
                                      d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>