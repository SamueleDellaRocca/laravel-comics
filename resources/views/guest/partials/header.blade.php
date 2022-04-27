<header>
    <div class="container">
      <img src="../assets/img/dc-logo.png" alt="logo dc" />
      <ul class="ul-nav">
        <li v-for="(li, index) in arrayLinkNav" :key="index">
          <a href="">{{ li.text }}</a>
        </li>
      </ul>
    </div>
  </header>