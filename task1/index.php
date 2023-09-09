<?php
if (isset($_GET['slack_name']) && isset($_GET['track'])) {
    $slack_name = $_GET['slack_name'];
    $track = $_GET['track'];
    $currentTimeUTC = gmdate('Y-m-d\TH:i:s\Z', time());
    $current_day = date('l');
    $response = array(
        "slack_name"=> $slack_name,
        "current_day"=> $current_day,
        "utc_time"=> $currentTimeUTC,
        "track"=> $track,
        "github_file_url"=> "https://github.com/kunmifab/hngxtask1/blob/main/task1/index.php",
        "github_repo_url"=> "https://github.com/kunmifab/hngxtask1",
        "status_code"=> 200
    );
    {
        
      }

    header('Content-Type: application/json');

    echo json_encode($response, JSON_UNESCAPED_SLASHES);
} else {
    $error_response = array(
        'error' => 'Both name and age parameters are required.'
    );
    header('Content-Type: application/json');
    echo json_encode($error_response);
}
?>
