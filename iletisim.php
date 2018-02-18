<?php include "header.php"; ?>
    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <i class="icon-envelope-alt page-title-icon"></i>
                    <h2>Contact Us /</h2>
                    <p>Here is how you can contact us</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="contact-us container">
        <div class="row">
            <div class="contact-form span7">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <a href="#">Gürbüz &
                        Gürbüz</a> nisl ut aliquip ex ea commodo consequat.</p>
                <form method="post" action="assets/sendmail.php">
                    <label for="name" class="nameLabel">Name</label>
                    <input id="name" type="text" name="name" placeholder="Enter your name...">
                    <label for="email" class="emailLabel">Email</label>
                    <input id="email" type="text" name="email" placeholder="Enter your email...">
                    <label for="subject">Subject</label>
                    <input id="subject" type="text" name="subject" placeholder="Your subject...">
                    <label for="message" class="messageLabel">Message</label>
                    <textarea id="message" name="message" placeholder="Your message..."></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
            <div class="contact-address span5">
                <h4>Gürbüz & Gürbüz Hukuk Bürosu</h4>
                <div class="" style="width: 100%">
                    <iframe width="100%" height="400" frameborder="0" style="border:0"

                            src="https://www.google.com/maps/embed/v1/place?q=engiz%20Topel%20Cd.%20N%3A192&key=AIzaSyCfrtRYhpqEMQ5n9sNnNXZS2mna_vIqfDE "
                            allowfullscreen></iframe>
                </div>
                <br/>

                <h4>Adres</h4>
                <p>Cengiz Topel Cd. N:192 Başak İş Merkezi
                    Kat:2/46-47-50 <br> Küçükköy - İSTANBUL</p>
                <p>Telefon: 0 (212) 538 0718</p>
            </div>

        </div>
    </div>
    </div>
<?php include "footer.php"; ?>