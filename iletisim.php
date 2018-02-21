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
                    <div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=Cengiz%20Topel%20Cd.%20N%3A192%20Kucukkoy+(G%C3%BCrb%C3%BCz%20%26%20G%C3%BCrb%C3%BCz%20Hukuk%20B%C3%BCrosu)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Embed Google Map</a></iframe></div><br />
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