<?php 
  include "../inc/header.php";
  include "../processes/init.php";
  include "../processes/process.php";
?>

  <section class="container py-2">
    <!-- Navigation Links -->
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <a class="is-size-4 has-text-dark" href="../index.php">/Listup.io</a>
        </div>
      </div>

      <div class="level-right">
        <div class="level-item">
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <p class="subtitle is-light is-rounded" aria-haspopup="true">
                <span>Christian Paul</span>
                <!-- The dropdown icon -->
                <span class="icon is-small">
                  <i class="fas fa-chevron-circle-down" aria-hidden="true"></i>
                </span>
              </p>
            </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div  class="dropdown-content">
                  <!-- My Profile dropdown item -->
                  <a class="dropdown-item is-active" href="dashboard.php">
                    <i class="fas fa-lg fa-users-cog" aria-hidden="true"></i>
                    Admin Dashboard
                  </a>

                  <!-- My Profile dropdown item -->
                  <a class="dropdown-item" href="#">
                    <i class="far fa-lg fa-user-circle"></i>
                    My Profile
                  </a>

                  <hr class="dropdown-divider">

                  <!-- Logout dropdown item -->
                  <a href="#" class="dropdown-item">
                    <i class="fas fa-lg fa-sign-out-alt"></i>
                    Logout
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <!--End of Navigation Link-->

    <div>
      <div class="column">
        <!-- Contains Filters, Databases, -->
        <!-- Filters and search box -->
        <div class="level">
          <div class="level-left">
            <div class="level-item">
              <h3 id="header-type" class="subtitle">All Records</h3>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item has-addons">
              <input class="input" type="text" placeholder="Keyword">
            </div> 
            <!-- Filter Buttons -->
            <div class="level-item">
              <button class="button filter-button">All Paid</button>
            </div>
            <div class="level-item">
              <button class="button filter-button">All Unpaid</button>
            </div>
            <div class="level-item">
              <button class="button filter-button is-dark">All Records</button>
            </div>
          </div>
        </div>

      <div class="columns">
        <!-- Left Column Form inputs -->
        <!-- Form container -->
        <div class="column is-3 has-background-white">
          <!-- Form -->
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> " method="POST">
            <div id="form-message" class="notification is-dark">
              <button class="delete"></button>
              <span> Fill the form correctly. </span>
            </div>
            <div class="field">
              <div class="control">
                <input id="name" class="input is-dark" name="name" type="text" placeholder="Name" autocomplete="off">
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input id="load-type" class="input is-dark" name="type" type="text" placeholder="Load Type(G50X,TM50X)">
              </div>
            </div>
            <div class="field has-addons">
              <div class="control">
                <button class="button is-dark" title="Peso Sign (PHP)" disabled>₱</button>
              </div>
              <div class="control is-expanded">
                <input id="amount" class="input is-dark" name="amount" type="number" placeholder="Amount">
              </div>
            </div>
            <div class="field has-addons">
              <div class="control">
                <label class="radio">
                  <input id="unpaid" type="radio" name="status" value="unpaid">
                  Unpaid
                </label>
                <label class="radio">
                  <input id="paid" type="radio" name="status" value="paid">
                  Paid
                </label>
              </div>
            </div>
            <div class="field">
              <input id="date-input" class="input is-dark" type="text" name="date">
            </div>
          <!-- Form action buttons -->
            <!-- Submit Button -->
            <div class="field">
              <div class="control">
                <button 
                  class="button is-dark is-fullwidth"
                  name="place_record"
                  type="submit"
                  title="saves the record to database">Place Record</button>
              </div>
            </div>
            <!-- Reset Button -->
            <div class="field">
              <div class="control">
                <button 
                  class="button is-danger is-outlined is-fullwidth" 
                  type="reset" 
                  title="resets all input fields">Reset Form</button>
              </div>
            </div>
          </form>
        </div>

          <!-- Table Component here -->
          <div class="column">
              <table class="table is-fullwidth has-text-centered">
                <thead>
                  <tr>
                    <th>Transacation ID</th>
                    <th>Name</th>
                    <th>Promo</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Thoughts</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="tbody">
                  <!-- Javascript Will handle -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

  
<script type="module" src="<?php echo sourceLink("js","dashboard"); ?>"></script>
<!-- Add footer for the rest of the html -->
<?php include "../inc/footer.php"; ?>