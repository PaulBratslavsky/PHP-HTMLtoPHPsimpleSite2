<?php 

function socialMenuFunc() { ?>

<style>
  nav {
    flex: 1 auto;
  }

  ul.my-social-icons {
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
  }

  ul.my-social-icons li {
    margin: 0 0.5rem;
    list-style: none;
    height: 40px;
    width: 40px;
    display: inherit;
  }

  ul.my-social-icons li > a {
    background: #ca3e47;
    height: 100%;
    width: 100%;
    border-radius: 50%;
  }

  ul.my-social-icons li a:hover,
  ul.my-social-icons li a:focus  {
    background: #ef7981;
  }

  .logo img {
    padding: 0;
  }

  @media (max-width: 993px) 
  {
    .logo img {
    padding: 0;
  }
    
}
</style>

  <nav>
      <ul class="my-social-icons">
        <li><a href="#"><img alt="" src="img/social1.png"></a></li>
        <li><a href="#"><img alt="" src="img/social2.png"></a></li>
        <li><a href="#"><img alt="" src="img/social3.png"></a></li>
      </ul>
</nav>

<?php }

?>