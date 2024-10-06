<section id="about">
        <div class="container">
            <h2>About Me</h2>
            <p>
                Hello, I'm Thirumala B, a passionate PHP and CodeIgniter developer with over <span id="experience"></span> of experience in creating dynamic web applications.
                My journey began in <strong>2021</strong>, where I started learning PHP and exploring web development. Since then, I have:
            </p>
            <ul>
    <li>Developed robust backend solutions using PHP and CodeIgniter.</li>
    <li>Designed and implemented APIs for seamless data exchange.</li>
    <li>Optimized database interactions for improved application performance with MySQL.</li>
    <li>Worked with frontend technologies like HTML, CSS, and JavaScript, along with AJAX, to enhance user experience.</li>
    <li>Engaged in continuous learning to keep up with the latest industry trends and technologies.</li>
</ul>

        </div>
    </section>
<script>
    const startYear = 2021; // Change this to your actual starting year
    const startMonth = 1; // Change this to your actual starting month (January is 0, December is 11)
    const currentDate = new Date();
    const startDate = new Date(startYear, startMonth - 1, 1); // First day of the starting month

    // Calculate the difference in time
    const differenceInTime = currentDate - startDate;

    // Calculate the total difference in months
    const totalMonths = Math.floor(differenceInTime / (1000 * 3600 * 24 * 30.44)); // Average days in a month

    // Calculate years and remaining months
    const years = Math.floor(totalMonths / 12);
    const months = totalMonths % 12;

    // Update the experience display
    const experienceElement = document.getElementById("experience");
    experienceElement.textContent = `${years} years and ${months} months`;
</script>
