<div class="box main">
    <div class="info-text form-text">
        <!-- Form title -->
        <h2>Contact Us 📧</h2>

        <!-- Script: redirects to custom success page after form is submitted -->
        <script>var submitted=false;</script>

        <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"
    onload="if(submitted) {window.location='index.php?page=form_success';}"></iframe>

        <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfuF3DHuA-PrjpBQGi7v1NReFU7P-ldz336G56gAP4YUeBbMA/formResponse"
             method="post" target="hidden_iframe" onsubmit="submitted=true;">

        <!-- Contact form sending data to Google Forms -->     
        <p>
            <input type="text" name="entry.1516050201" placeholder="Name" required>
        </p>

        <!-- Email field -->
        <p>
            <input type="email" name="entry.988932818" placeholder="Email Address" required>
        </p>

        <!-- Message field -->
        <textarea name="entry.1963851175" placeholder="Your message" required></textarea>
    
        <!-- Submit button -->
        <p>
            <button type="submit">Submit</button>
        </p>

        </form>

    </div> <!-- / info text-->

</div> <!-- / main div -->