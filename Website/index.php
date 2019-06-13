<?php
//page title
$pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
//selected navigation link
$selectedLink = "index";

// Start the session to get the logged in user details
session_start();

// Header
if ($_SESSION['role'] == 1) {
    require 'assets/include/headerMentor.php';
} else {
    require 'assets/include/header.php';
}

if ($_SESSION['username']) {
    require_once 'assets/db/database.class.php';
}

function GetClassAmount($mentor_id)
{
    $db = new Database();
    $query = "SELECT COUNT(id) FROM reservering WHERE mentor_id = '$mentor_id'";
    $result = mysqli_query($db->mysqli, $query);
    $amount = mysqli_fetch_array($result)[0];

    return $amount / 30 * 100;
}

function GetClassAmountRegistered($mentor_id)
{
    $db = new Database();
    $query = "SELECT COUNT(id) FROM reservering WHERE mentor_id = '$mentor_id'";
    $result = mysqli_query($db->mysqli, $query);
    $amount = mysqli_fetch_array($result)[0];

    return $amount;
}
?>
<main class="homepage">
    <!-- General information -->
    <article class="information article">
        <h2 class="information__heading">
            <?php
                $content = $db->GetContent('GRID_T_L_T');

                if($content) {
                    echo $content;
                } else {
                    echo "No content found.";
                }
            ?>
        </h2>
        <div class="information__container">
            <p class="information__container--text">
                <?php
                    $content = $db->GetContent('GRID_T_L');

                    if($content) {
                        echo $content;
                    } else {
                        echo "No content found.";
                    }
                ?>
            </p>
        </div>
        <?php
            if($_SESSION['admin_role']) {
                echo '<Button class="CMS__paragraaf">Change</Button>';
            }
        ?>
    </article>
    <!-- backgroundimage -->
    <section class="article__image--1" style="background-image: url(<?php $content = $db->GetContent('GRID_T_R'); if($content) { echo $content; } else { echo "https://sanitationsolutions.net/wp-content/uploads/2015/05/empty-image.png"; }?>)">
    <?php
            if($_SESSION['admin_role']) {
                echo '<Button class="CMS__paragraaf">Change</Button>';
            }
        ?>
    </section>
    <!-- register information -->
    <article class="register article">
        <h2 class="register--heading">Hoe schrijf ik me in</h2>
        <ol class="register__list">
            <li class="register__list__item">1. quidem asperiores expedita aliquam? In enim voluptas quidem.</li>
            <li class="register__list__item">2. Natus assumenda quaerat beatae quia a dolorum eligendi</li>
            <li class="register__list__item">3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
            <li class="register__list__item">4. tenetur, perferendis quae quia asperiores aut.</li>
            <li class="register__list__item">4. met consectetur adipisicing eliis quae quia asperiores aut.</li>
        </ol>
        <?php
            if($_SESSION['admin_role']) {
                echo '<Button class="CMS__paragraaf">Change</Button>';
            }
        ?>
    </article>
    <!-- background image -->
    <section class="article__image--2" style="background-image: url(<?php $content = $db->GetContent('GRID_M_L'); if($content) { echo $content; } else { echo "https://sanitationsolutions.net/wp-content/uploads/2015/05/empty-image.png"; }?>)">
        <?php
            if($_SESSION['admin_role']) {
                echo '<Button class="CMS__paragraaf">Change</Button>';
            }
        ?>
    </section>
    <!-- Fill diagram-->
    <article class="diagram article">
        <h2 class="diagram__heading">Ingeschreven ouders</h2>
        <!-- diagram GRID -->
        <section class="diagram__grid">
            <!-- diagram 2 -->
            <section class="diagram__grid__item--1">
                <p class="diagram--time">I1A</p>
                <section class="diagram-height"></section>
                <h3 class="diagram__procentage">
                    <?php echo round(GetClassAmount(1), 1); ?>%
                </h3>
                <p class="diagram--fill"><?php echo GetClassAmountRegistered(1); ?>/30</p>
            </section>
            <!-- diagram 2 -->
            <section class="diagram__grid__item--2">
                <p class="diagram--time">I1B</p>
                <section class="diagram-height"></section>
                <h3 class="diagram__procentage">
                    <?php echo round(GetClassAmount(3), 1); ?>%
                </h3>
                <p class="diagram--fill"><?php echo GetClassAmountRegistered(3); ?>/30</p>
            </section>
            <!-- diagram 3 -->
            <section class="diagram__grid__item--3">
                <p class="diagram--time">I1C</p>
                <section class="diagram-height"></section>
                <h3 class="diagram__procentage">
                    <?php echo round(GetClassAmount(3), 1); ?>%
                </h3>
                <p class="diagram--fill"><?php echo GetClassAmountRegistered(3); ?>/30</p>
            </section>
            <!-- diagram 4 -->
            <section class="diagram__grid__item--4">
                <p class="diagram--time">I1F</p>
                <section class="diagram-height"></section>
                <h3 class="diagram__procentage">
                    <?php echo round(GetClassAmount(2), 1); ?>%
                </h3>
                <p class="diagram--fill"><?php echo GetClassAmountRegistered(2); ?>/30</p>
            </section>
        </section>
    </article>
    <!-- background image -->
    <section class="article__image--3">
        <?php
            if($_SESSION['admin_role']) {
                echo '<Button class="CMS__paragraaf">Change</Button>';
            }
        ?>
    </section>
</main>
<?php
// footer
require 'assets/include/footer.php';
?>
<script src="assets/js/text.js"></script>
<script src="assets/js/diagram.js"></script>
