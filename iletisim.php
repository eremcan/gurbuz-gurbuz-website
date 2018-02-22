<?php include "header.php"; ?>
    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <i class="icon-envelope-alt page-title-icon"></i>
                    <h2>Bize Ulaşın</h2>

                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="contact-us container">
        <div class="row">
            <div class="contact-form span7">
                <p>Gürbüz & Gürbüz Hukuk Bürosu ile iletişime geçmek için lütfen aşağıdaki formu doldurunuz.</p>
                <form method="post" action="assets/sendmail.php">
                    <label for="name" class="nameLabel">İsim</label>
                    <input id="name" type="text" name="name" placeholder="İsminiz...">
                    <label for="email" class="emailLabel">E-mail</label>
                    <input id="email" type="text" name="email" placeholder="Emailiniz...">
                    <label for="subject">Konu</label>
                    <input id="subject" type="text" name="subject" placeholder="Konu...">
                    <label for="message" class="messageLabel">Mesaj</label>
                    <textarea id="message" name="message" placeholder="Mesajınız..."></textarea>
                    <button type="submit">Gönder</button>
                </form>
            </div>
            <div class="contact-address span5">
                <h4>Gürbüz & Gürbüz Hukuk Bürosu</h4>
                <div class="" style="width: 100%">

                    <iframe width="450" height="400" frameborder="0" style="border:0"
                                                                   src="https://www.google.com/maps/embed/v1/place?q=Fevzi%20%C3%87akmak%20Mahallesi%2C%20Efe%20Mehmet%20Sokak%2C%20Gaziosmanpa%C5%9Fa%2FIstanbul%2C%20Turkey&key=AIzaSyCfrtRYhpqEMQ5n9sNnNXZS2mna_vIqfDE" allowfullscreen></iframe>
                </div>
                <br/>

                <h4>Adres</h4>
                <p>Cengiz Topel Cd. N:192 Başak İş Merkezi
                    Kat:2/46-47-50 <br> Küçükköy - İSTANBUL</p>
                <p>Telefon: +90 (212) 538 0718</p>
                <p>Fax: +90 (212) 538 0718</p>

            </div>

        </div>
    </div>
    </div>
<?php include "footer.php"; ?>