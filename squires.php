<?php include 'header.php'; ?>

<div id="sidebar" class="right">
    <h2>Rates</h2>
    <p>Infant, Toddler and Preschool fees are distributed over 12 months evenly. The rate is the same each month regardless of the number of days of attendance. Program runs from 7am to 6pm, 5 days per week, 50 weeks per year. The Center is closed Christmas week and last week of August.</p>


    <table class="sidebar-table">
        <thead>
            <tr>
                <th colspan="2">Full-time (7:00am - 6:00pm)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>5 Days</td>
                <td>$
                    <?php echo $rate_squires[0]; ?>
                </td>
            </tr>
            <tr>
                <td>4 Days</td>
                <td>$
                    <?php echo $rate_squires[1]; ?>
                </td>
            </tr>
            <tr>
                <td>3 Days</td>
                <td>$
                    <?php echo $rate_squires[2]; ?>
                </td>
            </tr>
            <tr>
                <td>2 Days</td>
                <td>$
                    <?php echo $rate_squires[3]; ?>
                </td>
            </tr>
        </tbody>
    </table>
    <table class="sidebar-table">
        <thead>
            <tr>
                <th colspan="2">Part Time (9:00am - 3:00pm)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>5 Days</td>
                <td>$
                    <?php echo $rate_squires[4]; ?>
                </td>
            </tr>
            <tr>
                <td>4 Days</td>
                <td>$
                    <?php echo $rate_squires[5]; ?>
                </td>
            </tr>
            <tr>
                <td>3 Days</td>
                <td>$
                    <?php echo $rate_squires[6]; ?>
                </td>
            </tr>
            <tr>
                <td>2 Days</td>
                <td>$
                    <?php echo $rate_squires[7]; ?>
                </td>
            </tr>
        </tbody>
    </table>

    <?php include 'rates_extra.php'; ?>


</div>


<div id="programs" class="left">
    <div class="circle circle-program">
        <p>4</p>
        <p>years</p>
    </div>
    <h1>Squires</h1>
    <img class="mascot" src="images/programs-pagessquires-large.png" />


    <p>Within this classroom the children build upon Kindergarten readiness skills such as writing and identifying letters and their sounds. This classroom still recognizes the importance of developmental play and social relationships amongst peers and integrates these concepts as a natural part of the curriculum that is offered.</p>

    <div class="teachers-container">
        <h2>Teachers</h2>
        <div class="teacher">
            <div id="teacher-picture">
                <img src="images/staff/linda_c.jpg" />
                <span>Linda Colaluca</span>
            </div>
            <p id="teacher-bio">Linda has worked in the field of Early Childhood Education for over twenty-six years! She is a DEEC Certified Preschool Teacher as well as Director II qualified. Linda loves the spontaneity of working with children. “Young children have so much energy and enthusiasm, it’s contagious!” In her spare time she enjoys antiquing, going to the beach, cooking, gardening, reading, politics, and spending time with her five year old granddaughter, Isabella (Izzy,) and her two wonderful children, Amy and Patrick.
            </p>
            <hr id="clear" />
        </div>

        <div class="teacher">
            <div id="teacher-picture">
                <img src="images/staff/melissa_m.jpg" />
                <span>Melissa<br /> McEntire-Baylis</span>
            </div>
            <p id="teacher-bio">Melissa has been working with children for 17 years. She is a DEEC certified lead preschool teacher, and holds a BS in Elementary Education and Psychology from Worcester State University. What she loves most about young children is that they have a brilliant, honest, refreshing, and insatiable eagerness to learn. In her spare time, Melissa likes doing yoga, hiking, reading, and spending time with her daughter Megan.
            </p>
            <hr id="clear" />
        </div>
    </div>

    <hr id="gutter" />

    <h2>Typical Daily Activities</h2>
    <p>Free Play.

        <h2>What to Bring?</h2>
        <ul class="formatted">
            <li>Lunch including beverage</li>
            <li>Appropriate seasonal clothing</li>
            <li>Sunscreen and bugspray</li>
        </ul>
</div>

<hr id="clear" />

<?php include 'footer.html'; ?>