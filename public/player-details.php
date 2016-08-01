<?php
require __DIR__ . '/../src/input.php';
function pageController()
{
    $teams = [];
    if (Input::has('league')) {
        // Filter teams based on league, only select the team's identifier and its name
        $selectTeams = "SELECT id, name FROM teams WHERE league = 'national'";
        // Try your query in Sequel Pro
        var_dump($selectTeams);
        // Use the values from your query to populate your form
        $teams = "SELECT p.name, p.position, t.name, t.league 
        FROM players AS p
        JOIN teams AS t
            ON t.id = p.team_id
        WHERE p.id = 3";
    }
    // The player's identifier should be in the query string
    $teamId = Input::get('player_id');
    $sql = 'SELECT name, id FROM players';
    var_dump($sql);
    return [
        'title' => 'Chris Young',
        'teams' => $teams,
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
            <div class="row">
                <div class="page-header"><h1>Chris Young</h1></div>
                <?php include '../partials/player-form.phtml' ?>
            </div>
        </div>
        <?php include '../partials/scripts.phtml' ?>
    </body>
</html>
