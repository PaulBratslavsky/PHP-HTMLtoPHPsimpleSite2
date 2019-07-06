<?php 

function showLandingPage() { ?>

<style>

    .landing-flex {
      text-align: left;
      min-height: 75vh;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }

    .flex1 {
      flex: 1;
      width: 100%;
    }

    .verticle-line h1 {
      padding: 0;
      margin: 0;
    }

    @media only screen and (max-width: 988px) {
      .landing-flex {
        flex-direction: column-reverse;
      }
      
    }
    
</style>

<!-- Header Text -->
<div class="jumbotron">

  <div class="container landing-flex">

    <div class="flex1">

      <div class="verticle-line">
        <h1>Clean & Beautiful<br>
        landing page template</h1>
        <h2>with ultimate design & features.</h2>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh neque, convallis ut interdum a, consequat sit amet mauris. Vivamus sed tincidunt enim.</p>
      <button class="view-detail">View Detail</button>
    
    </div>

    <div class="flex1">
        <iframe src="https://player.vimeo.com/video/100356812" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

  </div>

</div>
<?php }

?>