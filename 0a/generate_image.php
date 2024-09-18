
<?php
include '00.php';
include 'remaining_credits.php';

if(isset($_SESSION['hk_email'])){
if($remaining_credits > 0){


$openai_api_key = $apiKey; // Replace with your OpenAI API key
$prompt = $_POST['prompt'];
$size = '256x256'; // Specify the desired image size

// Make a request to the OpenAI API
$ch = curl_init('https://api.openai.com/v1/images/generations');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $openai_api_key
]);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'prompt' => $prompt,
    'n' => 1,
    'size' => $size
]));

$response = curl_exec($ch);

if ($response === false) {
    echo json_encode(['error' => 'Error generating the image']);
} else {
    $data = json_decode($response, true);
    if (isset($data['data'][0]['url'])) {
        $image_url = $data['data'][0]['url'];
        // Save the image with a specific filename
        $image_name = date('d-m-Y-h-i-s-a') . '.png';
file_put_contents('images/' . $image_name, file_get_contents($image_url));

$email = $_SESSION['hk_email'];
$table1 = 'wp_hk_all_credits';
$table2 = 'wp_hk_all_images';
$date = date("d/m/Y h:i:s a");
mysqli_query($conn, "INSERT INTO $table1 (email, buy, spend, date) VALUES('$email', '0', '1', '$date')");
mysqli_query($conn, "INSERT INTO $table2 (email, prompt, image_name, date) VALUES('$email', '$prompt', '$image_name', '$date')");
        echo json_encode(['success' => true, 'image_url' => 'images/' . $image_name]);

    } else {
        echo json_encode(['error' => 'Error generating the image']);
    }
}

curl_close($ch);
}
else{
echo 420;
}
//credits if is closed

}
//email session if is closed
?>
