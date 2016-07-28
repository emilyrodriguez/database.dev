<?php
require __DIR__ . '/../src/input.php';
function pageController()
{
    $teamId = Input::get('team_id');
    $select = "SELECT * FROM teams WHERE id = $teamId";
    var_dump($select);
    return [
        'title' => 'Texas Rangers'
    ];
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
    <?php include '../partials/head.phtml' ?>
</head>
<body>
<div class="container">
    <div class="Row">
        <div class="page-header"><h1>Edit Texas Rangers information</h1></div>
        <form method="post" class="form-horizontal" action="?team_id=1">
            <?php include '../partials/team-form.phtml' ?>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
                    </span>
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include '../partials/scripts.phtml' ?>
</body>
</html>