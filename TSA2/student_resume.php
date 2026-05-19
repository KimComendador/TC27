<?php require("header.php"); ?>

<div class="content">

    <!-- ✅ PERSONAL INFORMATION -->
    <h2>Personal Information</h2>
    <p>Name: Kim Arianne L. Comendador</p>
    <p>Age: 20</p>
    <p>Address: San Isidro, Rodriguez, Rizal</p>

    <hr>

    <!-- ✅ CAREER OBJECTIVE -->
    <h2>Career Objective</h2>
    <p>
        To obtain a challenging position where I can use my knowledge 
        and skills and grow professionally.
    </p>

    <hr>

    <!-- ✅ EDUCATIONAL ATTAINMENT -->
    <h2>Educational Attainment</h2>
    <p>Senior High School – FEU Roosevelt - Rodrigues Campus</p>
    <p>Junior High School – Upland Integrated National HighSchool</p>

    <hr>

    <!-- ✅ SKILLS -->
    <h2>Skills & Certification</h2>
    <ul>
        <li>Java</li>
        <li>Communication</li>
        <li>Teamwork</li>
    </ul>

    <hr>

    <!-- ✅ AFFILIATION -->
    <h2>Affiliation</h2>
    <p>BS IT student in FEU Institute of Technology.</p>

</div>

<?php include("footer.php"); ?>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #8ae7c2;
    margin: 0;
    padding: 0;
    text-align: center;
}

/* HEADER CONTAINER */
.header-box {
    display: flex;
    width: 80%;
    margin: 20px auto;
    border: 3px solid #444;
    background-color: #7fdfcf;
}

/* PROFILE IMAGE */
.profile {
    width: 30%;
    border-right: 2px solid #444;
}

.profile img {
    width: 150px;
    height: 150px;
    margin: 20px;
    border-radius: 50%;
}

/* INFO TEXT */
.info {
    width: 70%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.info h2 {
    font-weight: normal;
}

/* MENU SECTION */
.menu {
    width: 80%;
    margin: auto;
}

/* MENU LINKS */
.menu a {
    display: block;
    border: 2px solid #444;
    padding: 12px;
    text-decoration: none;
    color: black;
    background-color: #8fc4e5;
    font-size: 16px;
}

/* HOVER EFFECT */
.menu a:hover {
    background-color: #7ab4e4;
}

/* CONTENT AREA */
.content {
    width: 70%;
    margin: 20px auto;
    background-color: white;
    padding: 20px;
    border: 2px solid #444;
    text-align: left;
}

/* HEADINGS */
.content h2 {
    border-bottom: 2px solid #7fbee4;
    padding-bottom: 5px;
}

/* LIST STYLE */
.content ul {
    padding-left: 20px;
}

/* FOOTER */
footer {
    margin-top: 30px;
    padding: 10px;
    background-color: #93a7e0;
    border-top: 2px solid #abacef;
}

</style>