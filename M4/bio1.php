<?php require("header.php"); ?>

<div class="story">
    <h2>Biography 1: Maria</h2>

    <img src="https://upload-os-bbs.hoyolab.com/upload/2024/06/07/237007709/e62146962113edee1d6fffcd8d88ff9b_5595756814289627740.jpg">

    <p>
        Maria is a hardworking student who dreams of becoming a doctor. 
        She spends her time studying and helping her community.
    </p>

    <a href="index.php" class="back-btn">Back</a>
</div>

<?php include("footer.php"); ?>


<style>
body {
    font-family: Arial, sans-serif;
    background-color: #88cdeb;
    margin: 0;
    padding: 0;
    text-align: center;
}

h1 {
    margin-top: 20px;
}

h2 {
    margin-bottom: 10px;
}

.story {
    width: 60%;
    margin: 30px auto;
    background-color: #9793ea;
    padding: 20px;
    border: 2px solid #555;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
}

.story img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    margin: 15px 0;
}

.story p {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
}

.back-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 15px;
    background-color: #888fec;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.back-btn:hover {
    background-color: #5677e1;
}

footer {
    margin-top: 40px;
    padding: 10px;
    background-color: #a0a0a0;
}

</style>