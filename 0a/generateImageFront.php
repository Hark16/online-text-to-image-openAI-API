
<h5><a onclick="logout()">LogOut</a></h5><br><br>

<div>
    <label for="prompt">Enter a prompt:</label><br>
    <textarea rows="2" cols="21" id="prompt" placeholder="e.g., a white siamese cat"></textarea><br>
    <button onclick="generateImageBack()">Generate Image</button><br><br>
</div>

<h2 id="loading-text" style="display:none;">Loading . . . </h2>

<div id="image-container" style="display:none;">
<img id="generated-image" alt="Generated Image" style="display: block; margin: 0 auto; text-align: center; border: 3px solid black; border-radius: 3%;">
    <a id="download-link" style="margin: 0 auto; text-align: center; border: 2px solid black; border-radius: 3%;" download>Download Image</a>
</div>

