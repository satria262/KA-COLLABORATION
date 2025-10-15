<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css_components/tasks.css">
    <link rel="stylesheet" href="css_components/aside.css">
</head>
<body>
  <?php
  include "components/navbar.html"
  ?>
  <!-- wrap aside&diyo -->
   <div class="main">
  <!-- start satria -->
    <div class="aside">  
        <ul>
            <li>
                <img src="logo/icons8-project-100 (1).png" alt="">
                <p>Project</p>
            </li>
            <li>
                <img src="logo/icons8-task-100.png" alt="">
                <p>Tasks</p>
            </li>
            <li>
                <img src="logo/icons8-document-100.png" alt="">
                <p>Work Logs</p>
            </li>
            <li>
                <img src="logo/icons8-settings-64.png" alt="">
                <p>Settings</p>
            </li>
            <li>
                <img src="logo/icons8-dashboard-gauge-100.png" alt="">
                <p>Performance</p>
            </li>
        </ul>
    </div>
  <!-- satria end -->
  <!-- start diyo -->
  <div class="page-container">
    <div class="inner">
    <h2 class="page-title">Tasks</h2>

    <div class="overview-card">
      <div class="overview-header">
        <div class="overview-text">
          <h3>Overview</h3>
          <p>Edit or modify all card as you want</p>
        </div>
      </div>

      <div class="controls">
        <input type="text" placeholder="🔍 Search Projects">
        <button class="list-view-btn">📅 List View ▾</button>
      </div>

      <div class="task-columns">
        <!-- BACKLOG -->
        <div class="column">
          <div class="column-header">
            <h4>Backlog</h4>
            <button class="menu-btn">⋯</button>
          </div>
          <div class="add-card">+</div>

          <div class="task-card">
            <h5>Food Research</h5>
            <div class="meta">🕒 12 Days</div>
            <p>Food design is required for our new project let's research the best practices.</p>
            <div class="task-footer">
              <span>📎 5 💬 8</span>
              <div class="avatars">
                <img src="https://i.pravatar.cc/25?img=1">
                <img src="https://i.pravatar.cc/25?img=2">
                <img src="https://i.pravatar.cc/25?img=3">
              </div>
            </div>
          </div>

          <div class="task-card">
            <h5>Mockups</h5>
            <div class="meta">🕒 12 Days</div>
            <p>Create a 12 mockups for mobile iphone 13 pro max.</p>
            <div class="task-footer">
              <span>📎 3 💬 6</span>
              <div class="avatars">
                <img src="https://i.pravatar.cc/25?img=4">
                <img src="https://i.pravatar.cc/25?img=5">
              </div>
            </div>
          </div>

          <div class="task-card">
            <h5>UI Animation</h5>
            <div class="meta">🕒 12 Days</div>
            <p>Micro interaction loading and progress, story telling, navigation.</p>
            <div class="task-footer">
              <span>📎 2 💬 4</span>
              <div class="avatars">
                <img src="https://i.pravatar.cc/25?img=6">
                <img src="https://i.pravatar.cc/25?img=7">
              </div>
            </div>
          </div>
        </div>

        <!-- IN PROGRESS -->
        <div class="column">
          <div class="column-header">
            <h4>In progress</h4>
            <button class="menu-btn">⋯</button>
          </div>
          <div class="add-card">+</div>

          <div class="task-card">
            <h5>User interface</h5>
            <div class="meta">🕒 12 Days</div>
            <p>Design new user interface design for food delivery app.</p>
            <div class="task-footer">
              <span>📎 2 💬 4</span>
              <div class="avatars">
                <img src="https://i.pravatar.cc/25?img=8">
                <img src="https://i.pravatar.cc/25?img=9">
              </div>
            </div>
          </div>

          <div class="task-card">
            <h5>Usability Testing</h5>
            <div class="meta">🕒 12 Days</div>
            <p>Perform the usability testing for the newly develop app.</p>
            <div class="task-footer">
              <span>📎 3 💬 5</span>
              <div class="avatars">
                <img src="https://i.pravatar.cc/25?img=10">
                <img src="https://i.pravatar.cc/25?img=11">
              </div>
            </div>
          </div>

          <div class="task-card">
            <h5>Food Research</h5>
            <div class="meta">🕒 12 Days</div>
            <p>Food design is required for our new project let's research the best practices.</p>
            <div class="task-footer">
              <span>📎 5 💬 9</span>
              <div class="avatars">
                <img src="https://i.pravatar.cc/25?img=12">
                <img src="https://i.pravatar.cc/25?img=13">
              </div>
            </div>
          </div>
        </div>

        <!-- COMPLETED -->
        <div class="column">
          <div class="column-header">
            <h4>Completed</h4>
            <button class="menu-btn">⋯</button>
          </div>
          <div class="add-card">+</div>

          <div class="task-card">
            <h5>Mind Mapping</h5>
            <div class="meta">🕒 12 Days</div>
            <p>Mind mapping for the food delivery app for targeting young users.</p>
            <div class="task-footer">
              <span>📎 7 💬 2</span>
              <div class="avatars">
                <img src="https://i.pravatar.cc/25?img=14">
                <img src="https://i.pravatar.cc/25?img=15">
              </div>
            </div>
          </div>

          <div class="task-card">
            <h5>Food Research</h5>
            <div class="meta">🕒 12 Days</div>
            <p>Food design is required for our new project let's research the best practices.</p>
            <div class="task-footer">
              <span>📎 5 💬 5</span>
              <div class="avatars">
                <img src="https://i.pravatar.cc/25?img=16">
                <img src="https://i.pravatar.cc/25?img=17">
              </div>
            </div>
          </div>

          <div class="task-card">
            <h5>User Feedback</h5>
            <div class="meta">🕒 12 Days</div>
            <p>Perform the user survey and take necessary steps to solve their problem.</p>
            <div class="task-footer">
              <span>📎 5 💬 8</span>
              <div class="avatars">
                <img src="https://i.pravatar.cc/25?img=18">
                <img src="https://i.pravatar.cc/25?img=19">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </div>
  <!-- diyo end -->
   </div>
   <!-- wrap aside&diyo -->
</body>
</html>