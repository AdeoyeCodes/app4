<?php 

include 'head.php'

?>

<body style= "background-color: whitesmoke; padding-bottom: 26dvh;">
    <h3 style= "text-align: center;"> <b>WELCOME TO YOUR DASHBOARD. EXPLORE!<b> </h3>
    <div id="post-form" style= "padding: 4dvh;">
        <h2 style= "padding-top: 5dvh;">What do you want to Share?</h2>
        <form id="new-post-form">
            <label for="post-content">Title:</label>
            <textarea id="post-content" style= "width: 70%; font-size: 18px;" class="form-control" name="post_content" required></textarea>

            <h2>Text your mind</h2>
            <input type="text" style= "width: 50%; padding-top: 3dvh; padding-bottom: 40dvh;" class="form-control" name="description" placeholder="Say something" required/>

            <input type="hidden" id="edit-mode" value="false" />
            
            <input type="hidden" id="post-id" name="post_id" value="" />

            <button id= "post-btn" class="btn btn-primary" style= "margin-top: 4dvh;" ><b>POST</b></button>
        </form>
    </div>

    <!-- Container for displaying posts -->
    <div id="posts-container"></div>

    <script src="js/index.js"></script>

</body>

</html>
