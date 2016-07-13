<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>yii2demo</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <table class="table table-hover">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SEX</th>
                <th>OPTION <button class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#addUser"></button></th>
            </tr>
            <?php foreach ($users as $v) { ?>
                <tr>
                    <td><?php echo $v['id'] ?></td>
                    <td><?php echo \yii\helpers\Html::encode($v['name']) ?></td>
                    <td><?php echo $v['sex'] ? 'man' : 'women' ?></td>
                    <td>
                        <button class="glyphicon glyphicon-remove"></button>
                        <button class="glyphicon glyphicon-edit"></button>
                    </td>
                </tr>
            <?php } ?>
        </table>


        <!-- addUser start -->
        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add User</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- addUser end -->

    </div>
</body>
</html>