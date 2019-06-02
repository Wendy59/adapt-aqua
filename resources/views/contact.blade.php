<section id="contact">
    <div class="container wow fadeInUp">
        <div class="section-header">
            <h3 class="section-title">{{$datas['title']}}</h3>
            <p class="section-description">{{$datas['description']}}</p>
        </div>
    </div>

    <!-- Google Maps -->
    <iframe src="{!!$datas['maps']!!}" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">
            <!--<div class="col-lg-3 col-md-4">-->
            <div class="col-lg-6 col-md-6">

                <div class="info">
                    <div>
                      <i class="fa fa-map-marker"></i>
                      <p>
                          {{$datas['adress1']}}<br>
                          {{$datas['adress2']}}<br>
                          {{$datas['adress3']}}
                      </p>
                    </div>
                    
                    <div>
                      <i class="fa fa-phone"></i>
                      <p>{{$datas['tel']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">

                <div class="info">
                    <div>
                      <i class="fa fa-envelope"></i>
                      <!--<p>adaptaqua3@gmail.com</p>-->
                        <p>
                            <a href="mailto:{{$datas['mail']}}?Subject=Contact" target="_top">
                                {{$datas['mail']}}
                            </a>
                        </p>
                    </div>
                    
                    <div>
                        <a href="{{$datas['facebook']}}" class="btn-facebook">
                            <i class="fab fa-facebook-square"></i>
                            <p>Notre Facebook</p>
                        </a>
                    </div>
                </div>
            </div>

<!--            <div class="col-lg-5 col-md-8">
                <div class="form">
                    <div id="sendmessage">Votre message a bien été envoyé. Merci!</div>
                    <div id="errormessage"></div>
                    <form class="contactForm" id="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Saisir au minimum 4 caractères" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre e-mail" data-rule="email" data-msg="Saisir un email valide" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Saisir au minimul 8 caractères" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Ecrire votre message" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit" id="sendContact">Envoyer le message</button></div>
                    </form>
                </div>
            </div>-->
        </div>
    </div>
</section>
