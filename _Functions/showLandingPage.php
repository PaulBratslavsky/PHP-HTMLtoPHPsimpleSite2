<?php 

function showLandingPage() { ?>

<style>

    .landing-page {
      min-height: 80vh;
      width: 100%;
      background: url('./img/clouds.jpg') no-repeat center bottom ;
      /* background-size: cover; */
      color:  #FFFAFA;
    }
    .flex-main {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .flex {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .verticle-line {
      border-left: solid 5px #CB3E46;
      padding-left: 15px;
    }

    .box p {
      color: #CB3E46;
      margin-top: 15px;
      font-size: 1.4rem;
    }


    button.view-detail {
      margin-top: 15px;
      background: #CB3E46;
      color: #FFFAFA;
      border: none;
      font-size: 1.4rem;
      padding: 0.25rem 0.75rem;
      border-radius: 5px;
    }

    button.view-detail:hover,
    button.view-detail:focus {
      color: #CB3E46;
      background: #FFFAFA;
      cursor: pointer;
    }


    .flex1 {
      flex: 1;
    }

    .box {
      padding: 1rem; 
    }

    .videoWrapper {
      position: relative;
      padding-bottom: 56.25%; /* 16:9 */
      padding-top: 25px;
      height: 0;
    }
    .videoWrapper iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    @media only screen and (max-width: 988px) {
      .flex-main {
        display: block;
      }
      
    }
    
</style>

<!-- Header Text -->
<div class="landing-page flex">

  <div class="container flex-main">

    <div class="flex1 box">

      <div class="verticle-line">
        <h1>Bookly Books<br>
        a journey into a</h1>
        <h2>world of mystery and magic.</h2>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh neque, convallis ut interdum a, consequat sit amet mauris. Vivamus sed tincidunt enim.</p>
      <a href="http://localhost:8888/StaticHTMLtoPHP/catalog.php"><button class="view-detail">View Library</button></a>
    
    </div>

    <div class="flex1 box">
      <div class="videoWrapper">
        <iframe style="border: none;" src="https://www.youtube.com/embed/BQWOJg8E6wE" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>

  </div>

</div>
<?php }

?>

