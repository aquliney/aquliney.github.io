<!DOCTYPE html>
<html lang="en">
<head>
<title>catfire</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>Catfire</h1>
  <p>A Video Game</p>
</div>

<div class="navbar">
  <a href="#">Home</a>
  <a href="#">Catfire</a>
  <a href="#">Buy</a>
  <a href="#" class="right">Author</a>
</div>

<div class="row">
  <div class="side">
    <h2>The Video Game</h2>
    <h5>Cats saint</h5>
    <div class="fakeimg" style="height:200px;"></div>
    <p>Tadpoles meet cat saint</p>
    <h3>This game has a unknown lebarty</h3>
    <p>Tadpoles are invading the WORLD!!!!</p>
    <div class="fakeimg" style="height:300px;"></div><br>

   
  </div>
  <div class="main">
    <h2>Cats .VS. Tadpoles who will win</h2>
    <h5>Cats Shoot!!!</h5>
    <div class="fakeimg" style="height:200px;"></div>
    <p>Let the heros beat the villens</p>
    <p>The catfire video game is a game where two pets Cats and Tadpoles fight each other the cats are the heros and the tadpoles are the villens. The cats need to beat the tadpoles. In the begening of the game you need to pick if you want to be the cats or the tadpoles. Lets say I first choose the cats. If I choose the cats I need to defeat 167 boses if I pick tadpoles then I need to defeat 200 boses. So now that I picked the cats I defeat the boses and then I go to the tadpole saint If i'd picked the tadpoles than I would be going to the Cat saint. Now the saints t- hey hey hey no no you need to go play the game to know what happens to you so buy catfire for just $13.99 and play it all day!!! </p>
    <br>
    <h2>Cat stage</h2>
    <h5>easy,emedium,medium,mhard,hard,expert</h5>
    <div class="fakeimg" style="height:200px;"></div>
    <p>Levels</p>
    <p>These levels are for beginners and above. People are getting better and better so if you change your settings every once in a while, you will be good.</p>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>






