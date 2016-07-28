<?php
require __DIR__ . '/../src/input.php';
function pageController()
{
       $name = Input::get('name', '');
       $league = Input::get('league', '');
       $stadium = Input::get('stadium', '');
   if (Input::isPost()) {

       $insert = "INSERT INTO teams (name, stadium, league) VALUES ('$name', '$stadium', '$league')";
       var_dump($insert);
   }
   return [
       'title' => 'New Team',
       'name' => $name,
       'league' => $league,
       'stadium' => $stadium,
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
        <div class="page-header"><h1>New Team</h1></div>
        <form method="post" class="form-horizontal">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">
                    Name
                </label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="name"
                        placeholder="Texas Rangers"
                        value = "<?= $name ?>"
                    >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">
                    League
                </label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="league" value="american" <?= 'american' == $league ? 'checked' : '' ?>>
                            American
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="league" value="national" <?= 'national' == $league ? 'checked' : '' ?>>
                            National
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="stadium" class="col-sm-2 control-label">
                    Stadium
                </label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        class="form-control"
                        name="stadium"
                        id="stadium"
                        placeholder="Globe Life Park"
                        value = "<?= $stadium ?>"
                    >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
                        </span>
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include '../partials/scripts.phtml' ?>
</body>
</html>