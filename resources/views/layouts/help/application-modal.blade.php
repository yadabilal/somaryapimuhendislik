<div id="add-conversation-modal" class="modal add-conversation-modal is-xsmall has-light-bg">
  <div class="modal-background"></div>
  <div class="modal-content">

    <div class="card">
      <div class="card-heading">
        <h3>New Conversation</h3>
        <!-- Close X button -->
        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
        </div>
      </div>
      <div class="card-body">

        <img src="assets/img/icons/chat/bubbles.svg" alt="">

        <div class="field is-autocomplete">
          <div class="control has-icon">
            <input type="text" class="input simple-users-autocpl" placeholder="Search a user">
            <div class="form-icon">
              <i data-feather="search"></i>
            </div>
          </div>
        </div>

        <div class="help-text">
          Select a user to start a new conversation. You'll be able to add other users later.
        </div>

        <div class="action has-text-centered">
          <button type="button" class="button is-solid accent-button raised">Start conversation</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="explorer-menu">
  <div class="explorer-inner">
    <div class="explorer-container">
      <!--Header-->
      <div class="explorer-header">
        <h3>Explore</h3>
        <div class="control">
          <input type="text" class="input is-rounded is-fade" placeholder="Filter">
          <div class="form-icon">
            <i data-feather="filter"></i>
          </div>
        </div>
      </div>
      <!--List-->
      <div class="explore-list">
        <!--item-->
        <a href="feed.html" class="explore-item">
          <img src="{{ asset('theme/assets/img/icons/explore/clover.svg') }}" alt="">
          <h4>Feed</h4>
        </a>
        <!--item-->
        <a href="profile-friends.html" class="explore-item">
          <img src="{{ asset('theme/assets/img/icons/explore/friends.svg') }}" alt="">
          <h4>Friends</h4>
        </a>
        <!--item-->
        <a href="videos-home.html" class="explore-item">
          <img src="{{ asset('theme/assets/img/icons/explore/videos.svg') }}" alt="">
          <h4>Videos</h4>
        </a>
        <!--item-->
        <a href="pages-main.html" class="explore-item">
          <img src="{{ asset('theme/assets/img/icons/explore/tag-euro.svg') }}" alt="">
          <h4>Pages</h4>
        </a>
        <!--item-->
        <a class="explore-item is-coming-soon">
          <img src="assets/img/icons/explore/cart.svg" alt="">
          <span class="coming-soon">Coming Soon</span>
        </a>
        <!--item-->
        <a class="explore-item is-coming-soon">
          <img src="assets/img/icons/explore/house.svg" alt="">
          <span class="coming-soon">Coming Soon</span>
        </a>
        <!--item-->
        <a class="explore-item is-coming-soon">
          <img src="assets/img/icons/explore/chrono.svg" alt="">
          <span class="coming-soon">Coming Soon</span>
        </a>
        <!--item-->
        <a href="questions-home.html" class="explore-item">
          <img src="assets/img/icons/explore/question.svg" alt="">
          <h4>Questions</h4>
        </a>
        <!--item-->
        <a href="news.html" class="explore-item">
          <img src="assets/img/icons/explore/news.svg" alt="">
          <h4>News</h4>
        </a>
        <!--item-->
        <a class="explore-item is-coming-soon">
          <img src="assets/img/icons/explore/cake.svg" alt="">
          <span class="coming-soon">Coming Soon</span>
        </a>
        <!--item-->
        <a href="https://envato.com/" class="explore-item">
          <img src="assets/img/icons/explore/envato.svg" alt="">
          <h4>Envato</h4>
        </a>
        <!--item-->
        <a href="events.html" class="explore-item">
          <img src="assets/img/icons/explore/calendar.svg" alt="">
          <h4>Events</h4>
        </a>
        <!--item-->
        <a class="explore-item is-coming-soon">
          <img src="assets/img/icons/explore/pin.svg" alt="">
          <span class="coming-soon">Coming Soon</span>
        </a>
        <!--item-->
        <a href="elements.html" class="explore-item">
          <img src="assets/img/icons/explore/idea.svg" alt="">
          <h4>Elements</h4>
        </a>
        <!--item-->
        <a class="explore-item is-coming-soon">
          <img src="assets/img/icons/explore/settings.svg" alt="">
          <span class="coming-soon">Coming Soon</span>
        </a>
      </div>
    </div>
  </div>
</div>
<div id="end-tour-modal" class="modal end-tour-modal is-xsmall has-light-bg">
  <div class="modal-background"></div>
  <div class="modal-content">

    <div class="card">
      <div class="card-heading">
        <h3></h3>
        <!-- Close X button -->
        <div class="close-wrap">
                            <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
        </div>
      </div>
      <div class="card-body has-text-centered">

        <div class="image-wrap">
          <img src="assets/img/logo/friendkit.svg" alt="">
        </div>

        <h3>That's all folks!</h3>
        <p>Thanks for taking the friendkit tour. There are still tons of other features for you to discover!</p>

        <div class="action">
          <a href="index.html#demos-section" class="button is-solid accent-button raised is-fullwidth">Explore</a>
        </div>
      </div>
    </div>
  </div>
</div>