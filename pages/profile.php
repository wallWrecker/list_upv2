<?php 
  include "../inc/header.php";
  include "../processes/init.php";
?>

  <section class="container-fullhd mx-4 py-2">
    <!-- Navigation Links -->
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <a class="is-size-4" href="../index.php">/Listup.io</a>
        </div>
      </div>

      <div class="level-right">
        <div class="level-item">
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button is-light is-rounded" aria-haspopup="true">
                <span class="is-size-5"> Christian Paul</span>
                <!-- The dropdown icon -->
                <span class="icon is-small">
                  <i class="fas fa-chevron-circle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <!-- My Profile dropdown item -->
                    <a class="dropdown-item is-active" href="admin.php">
                      <i class="fas fa-lg fa-users-cog" aria-hidden="true"></i>
                      Admin Dashboard
                    </a>

                    <!-- My Profile dropdown item -->
                    <a class="dropdown-item" href="profile.php">
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

    <div class="mx-3">
      <div class="column">
      <!-- Contains Filters, Databases, -->
        <!-- Filters and search box -->
        <div class="level">
          <div class="level-left">
            <div class="level-item">
              <h3 class="subtitle">All Records</h3>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item has-addons">
              <input class="input is-rounded" type="text" placeholder="Keyword">
            </div> 
            <!-- Filter Buttons -->
            <div class="level-item">
              <button class="button is-rounded  filter-button">All Paid</button>
            </div>
            <div class="level-item">
              <button class="button is-rounded filter-button">All Unpaid</button>
            </div>
            <div class="level-item">
              <button class="button is-rounded filter-button is-info">All Records</button>
            </div>
          </div>
        </div>

      <div class="columns">
        <!-- Left Column Form inputs -->
        <div class="column is-3 has-background-white mx-2">
          <!-- Form -->
          <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?> " method="POST">
            <div id="form-notification" class="notification is-info">
              <button class="delete"></button>
              Fill the form correctly.
            </div>

            <div class="field">
              <div class="control">
                <input class="input" name="name" type="text" placeholder="Full name" autocomplete="off">
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input class="input" name="name" type="text" placeholder="Load Type(G50X,TM50X)">
              </div>
            </div>
            <div class="field has-addons">
              <div class="control">
                <button class="button has-text-info-dark" title="Peso Sign (PHP)" disabled>₱</button>
              </div>
              <div class="control is-expanded">
                <input class="input" name="name" type="number" placeholder="Amount">
              </div>
            </div>
            <div class="field has-addons">
              <div class="control">
                <label class="radio">
                  <input type="radio" name="ispaid" value="unpaid">
                  Unpaid
                </label>
                <label class="radio">
                  <input type="radio" name="ispaid" value="paid">
                  Paid
                </label>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <textarea class="textarea" placeholder="Normal textarea"></textarea>
              </div>
            </div>
          <!-- Form action buttons -->
            <!-- Submit Button -->
            <div class="field">
              <div class="control">
                <button 
                  class="button is-success is-fullwidth" 
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
          <div class="mx-1">
              <table class="table is-fullwidth is-bordered has-background-white">
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
                  <!-- Javascript Will Handle -->
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </section>

<script type="module" src="<?php echo sourceLink("js","profile"); ?>"></script>

<!-- Add footer for the rest of the html -->
<?php include "../inc/footer.php"; ?>