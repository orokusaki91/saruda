<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <!-- za mobilne -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Villaggio Sa Ruda</title>
  <!-- jquery -->
  <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.min.css">

  <!-- FA FA ICONS -->
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  <!-- slider css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/slider/component.css') }}" />

  <!-- gallery css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery/grid-gallery.min.css') }}">

  <!-- css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css?ver=' . time()) }}">

  <!-- favicon -->
 <link rel="icon" href="{{ asset('img/favicon.png') }}">

</head>

<body>

  <!-- HEADER -->
  <!-- HEADER -->
  <!-- HEADER -->
  <header>
    <div id="nav">
      <section class="navigation">
        <div class="nav-container">
          <div class="brand">
            <a href="/"><img src="{{ asset('img/logo.jpg') }}" alt="logo"></a>
          </div>
          <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
              <li>
                <a href="#slider">Home</a>
              </li>
              <li>
                <a href="#dovesiamo">Dove siamo</a>
              </li>
              <li>
                <a href="#gallery">Gallery</a>
              </li>
              <li>
                <a href="#video">Video</a>
              </li>
              <li>
                <a href="#laboratori">Laboratori</a>
              </li>
              <li>
                <a href="#prezi">Info e prezzi</a>
              </li>
              <li>
                <a href="#pranzo">Pranzo</a>
              </li>
              <li>
                <a href="#partner">Partner</a>
              </li>
              <li>
                <a href="#contatti">Contatti</a>
              </li>
              <li>
               <a href="https://www.facebook.com/villaggioneoliticosaruda/" class="fb" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
             </li>
            </ul>
          </nav>
        </div>
      </section>
    </div>

    <div id="slider">
      <div class="container">
        <div id="cbp-fwslider" class="cbp-fwslider">
          <ul>
            @foreach ($images as $image)
              <li>
                <a href="#">
                  <img src="{{ asset($image->image_path) }}" alt="{{ asset($image->image_path) }}" />
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

  </header>
  <!-- KRAJ HEADER -->
  <!-- KRAJ HEADER -->
  <!-- KRAJ HEADER -->



  <!-- WELCOME -->
  <!-- WELCOME -->
  <!-- WELCOME -->
  <section>
    <div id="welcome">
      <div class="row">
        <div class="col-2">
          <h1>Benvenuti al <br>Villaggio Neolitico Sa Ruda</h1>
          <p class="lightLetter">Il villaggio neolitico "Sa Ruda" si trova nel Sinis, sulle sponde dello stagno di Cabras, a pochi passi da Tharros e dalle spiagge più belle della costa. Situato all'interno dell'Area Marina Protetta "Penisola del Sinis - Isola Mal di Ventre", in un'ampia area verde presso l'azienda agrituristica omonima, è costituito da capanne arredate, uno spazio coperto per le attività, un recinto per gli animali, il tutto ricostruito a grandezza naturale.</p>
          <p>Ci trovate nell'Albo Regionale delle Fattorie Didattiche della Sardegna. La qualifica di Fattoria didattica è conferita dall'amministrazione Regionale della Sardegna, che garantisce il rispetto di alti standard qualitativi definiti da un documento chiamato Carta della Qualità. Gli operatori che lavorano presso il Villaggio Neolitico Sa Ruda sono archeologi e altro personale qualificato e specializzato.</p>
          <a href="" class="quote-button">Leggi tutto</a>
          <div class="quote-container">
            <blockquote>
              <h4>UN PROGETTO DI ARCHEOLOGIA SPERIMENTALE</h4>
              <p>L'idea del villaggio neolitico si deve alla grande passione per l'archeologia di Marcella e Nicola, i proprietari dell'azienda, che, residenti nel territorio da una vita, hanno da sempre respirato quel clima di storia e scoperte archeologiche che contraddistingue tutto il Sinis.</p> 
              <p>Lo spunto per la ricostruzione del villaggio preistorico viene anche dalla presenza, nelle vicinanze di "Sa Ruda", dei siti di Cuccuru Is Arrius e Conca Illonis, interessati dalla presenza umana nel passato che contraddistinguono il neolitico sardo e caratterizzati da notevoli ritrovamenti archeologici che sono stati importantissimi per la ricostruzione della vita e della morte degli uomini preistorici sardi.</p> 
              <p>Per realizzare la ricostruzione del villaggio in maniera scientifica e del tutto fedele ai dati sinora raccolti nei numerosi studi e scavi effettuati in Sardegna, Marcella e Nicola si sono affidati a un gruppo di archeologi specializzati in Preistoria. Questi hanno seguito i lavori dando tutte le indicazioni per realizzare gli arredi e i manufatti proprio come avveniva nel neolitico, cioé senza l'ausilio di nessun tipo di tecnologia.</p>
              <img src="{{ asset('img/readMore/1.jpg') }}" alt="">
              <p>Per la riproduzione di alcuni oggetti, realizzati in origine con materiali deperibili e quindi non ritrovati in contesti archeologici, si è fatto affidamento a discipline come l'etnografia; ci si è avvalsi quindi della collaborazione di anziani del posto, capaci ancora di far conoscere e tramandare le antiche usanze legate alle attività produttive come la pesca, agricoltura e artigianato. Questa collaborazione è stata fondamentale per ricostruire gli attrezzi della pesca, intreccio, realizzati tutti con fibre vegetali (nasse, reti in lino, imbarcazioni, stuoie e cesti).</p>
              <p>Ugualmente preziose sono state le informazioni riguardanti la tessitura su telaio verticale. Tutte le materie prime utilizzate per la costruzione delle capanne e degli arredi sono state reperite nei dintorni dell'azienda. Tutto ciò per rendere l'intero progetto più vicino alla realtà locale e a valorizzare le numerose risorse che offre il territorio.</p>
              <p>Da qui poi è venuta l'idea di condividere il progetto con i bambini e i ragazzi, coscienti dell'importanza del trasmettere e valorizzare la conoscenza del nostro passato in un tempo, questo, contraddistinto dalla tecnologia e dalla velocità. L'esperienza a "Sa Ruda" sarà caratterizzata dai laboratori in cui i bambini e i ragazzi proveranno, con le loro mani, a replicare le principali tecniche produttive del passato con materiali e tecniche preistoriche e vivendo una giornata come protagonisti di epoche antiche.</p>
              <p>I partecipanti, tramite questa esperienza giungeranno a una migliore comprensione di alcuni aspetti della preistoria sarda.</p>
              <img src="{{ asset('img/readMore/2.jpg') }}" alt="">
              <h4>IL NOSTRO TEAM </h4>
              <p>I bambini e i ragazzi saranno seguiti in tutte le attività da archeologi e da operatori specializzati con esperienza pluriennale del villaggio, adeguatamente formati che affiancheranno i gruppi per tutta la giornata nelle visite guidate e nei diversi laboratori, capaci di soddisfare ogni domanda o curiosità che docenti e allievi vorranno porre.</p>
            </blockquote>
          </div>

        </div>
        <div class="col-1">
          <img src="{{ asset('img/mainImg/welcome.jpg') }}" alt="">
        </div>
      </div>

    </div>
  </section>
  <!-- KRAJ WELCOME -->
  <!-- KRAJ WELCOME -->
  <!-- KRAJ WELCOME -->




  <!-- DOVESIAMO -->
  <!-- DOVESIAMO -->
  <!-- DOVESIAMO -->

  <div id="dovesiamo" class="helper">

    <div class="container">
      <h1>Dove siamo</h1>

      <section>
        <h4>Ecco come trovare il Villaggio "Sa Ruda":</h4>
        <h3>coordinate GPS N. 39.92763 - E. 8.45679</h3>
        <div class="row">

          <div class="col">
            <article>
              <img src="{{ asset('img/doveSiamo/2.jpg') }}" alt="">
            </article>
          </div>

          <div class="col">
            <article>
              <h2>Orari:</h2>
              <ul>

                @foreach ($days as $day)
                  <li><i class="fa fa-caret-right" aria-hidden="true"></i> 
                    {{ $day->day_name }} <span>{{ $day->workingHours }}</span>
                  </li>    
                @endforeach
                
              </ul>
            </article>
          </div>

        </div>
      </section>
    </div>

  </div>


  <!-- KRAJ DOVE SIAMO -->
  <!-- KRAJ DOVE SIAMO -->
  <!-- KRAJ DOVE SIAMO -->



  <!-- GALLERY -->
  <!-- GALLERY -->
  <!-- GALLERY -->

  <div id="gallery" class="helper">
    <div id="gg-screen"></div>
    <h1>Gallery</h1>

    <div class="flex-container">
      @foreach ($gallery_categories as $category)
        @php if(!$category->images->count()){ continue; } @endphp
        <p class="showSingle" target="{{ $category->id }}">{{ $category->name }}</p>
      @endforeach
    </div>

    @foreach ($gallery_categories as $category)
      @php if(!$category->images->count()){ continue; } @endphp
      <div id="div{{ $category->id }}" class="targetDiv">
        <div class="gg-box">

          @foreach ($category->images as $image)
            <div class="gg-element">
              <img src="{{ asset($image->image_path) }}" alt="">
            </div>
          @endforeach

        </div>
      </div>
    @endforeach
    
  </div>

  <!-- KRAJ GALLERY -->
  <!-- KRAJ GALLERY -->
  <!-- KRAJ GALLERY -->



  <!-- VIDEO -->
  <!-- VIDEO -->
  <!-- VIDEO -->

  <div id="video" class="helper">

    <div class="container">
      <h1>Video</h1>

      <section>
        <div class="row">

          <div class="col">
            <article>
              <video controls>
                <source src="{{ asset('video/video5.mp4') }}" type="video/mp4" />
              </video>
            </article>
          </div>

          <div class="col">
            <article>
              <video controls>
                <source src="{{ asset('video/villaggio1.mp4') }}" type="video/mp4" />
              </video>
            </article>
          </div>

          <div class="col">
            <article>
              <video controls>
                <source src="{{ asset('video/Villaggio_Sa_ruda.mp4') }}" type="video/mp4" />
              </video>
            </article>
          </div>
          
        </div>
      </section>
    </div>

  </div>
  <!-- KRAJ VIDEO -->
  <!-- KRAJ VIDEO -->
  <!-- KRAJ VIDEO -->


  <!-- LABORATORI -->
  <!-- LABORATORI -->
  <!-- LABORATORI -->

  <div id="laboratori" class="helper">

    <div class="container">
      <div class="center">
        <h1>Laboratori</h1>

        <h3 style="color:#845248 ;">ATTIVITÀ NEL VILLAGGIO "SA RUDA"</h3>
        <p><span style="font-weight:bold;">LEZIONE INTRODUTTIVA GENERALE</span> con supporto di immagini e proiezione di un filmato della durata di 20 minuti circa, incentrato sui seguenti argomenti:</p>
        <ul class="text-left">
          <li>periodizzazione ed elementi di cronologia: la preistoria, il Neolitico, il Neolitico in Sardegna;</li>
          <li>l'ambiente naturale in Sardegna nel Neolitico;</li>
          <li>l'edificazione delle capanne;</li>
          <li>l'economia: agricoltura, allevamento, caccia, pesca, raccolta;</li>
          <li>le attività: lavorazione della pietra, ceramica, materie dure animali, attività domestiche: tessitura e intreccio</li>
        </ul>
        <img src="{{ asset('img/readMore/3.jpg') }}" alt="">
        <h4> VISITA GUIDATA AL VILLAGGIO</h4>
        <p>La visita sarà introdotta da una breve spiegazione sul progetto "Villaggio neolitico Sa Ruda", raccontando tutte le fasi, dall'idea alla realizzazione, della ricostruzione del villaggio preistorico. I bambini/ragazzi saranno
          condotti all'interno delle capanne dagli operatori che parleranno della vita quotidiana e delle attività dell'uomo preistorico, mostrando gli arredi e gli oggetti e spiegandone le funzioni. Ci si troverà completamente immersi in un
          ambiente preistorico, un'esperienza davvero coinvolgente ed entusiasmante.</p>
        <h4>TIRO CON L'ARCO</h4>
        <p>L'utilizzo dell'arco e la sua diffusione presso popolazioni di continenti e culture diverse si deve all'estrema funzionalità di questo strumento che ha modificato le strategie di caccia, facilitando le azioni individuali. I
          bambini/ragazzi potranno mettersi alla prova con arco e frecce cercando di colpire una sagoma di prolagus sardus come bersaglio. Sarà disputata una gara e all'arciere più bravo sarà consegnato un piccolo dono accompagnato dalla
          cerimonia di investitura del cacciatore più abile.</p>
        <p><span style="font-weight:bold;">PROPOSTA RESIDENZIALE 2 GIORNI (1 notte)</span> per scolaresche, gruppi, famiglie, centri estivi per bambini e ragazzi.</p>
        <h5>PERIODO DI APERTURA: 15 MARZO- 1 OTTOBRE</h5>


        <section>
          <div class="row">

            <div class="col">
              <article>
                <img src="{{ asset('img/readMore/4.jpg') }}" alt="">
                <h3>LEZIONE INTRODUTTIVA GENERALE</h3>
              </article>
            </div>

            <div class="col">
              <article>
                <img src="{{ asset('img/readMore/5.jpg') }}" alt="">
                <h3>TIRO CON L'ARCO</h3>
              </article>
            </div>

            <div class="col">
              <article>
                <img src="{{ asset('img/readMore/6.jpg') }}" alt="">
                <h3>VISITA GUIDATA AL VILLAGGIO</h3>
              </article>
            </div>

          </div>
        </section>




        <h4>I nostri Laboratori:</h4>
        <ul>
          <li class="activeLab labFirst"><img src="img/laboratoriIcons/1.png" alt=""><br><br>PREISTORIA</li>
          <li class="labSecond"><img src="img/laboratoriIcons/2.png" alt=""><br><br>TRADIZIONI</li>
          <li class="labThird"><img src="img/laboratoriIcons/3.png" alt=""><br><br>BABY</li>
        </ul>
      </div>
      <section>

        <div id="labFirstRow">
          <div class="row">

            <div class="col">
              <article>
                <img src="img/laboratori - main/1.jpg" alt="">
              </article>
            </div>

            <div class="col">
              <article>
                <h2>Preistoria</h2>
                <ul>

                  @foreach ($prehistory as $recordP)
                    <li>
                      @if ($recordP->articles->count())
                        <a href="{{ route('workshop', ['category' => $recordP->id]) }}" target="_blank">
                          <h5>{{ $recordP->title }}</h5>
                        </a>
                      @else
                        <h5>{{ $recordP->title }}</h5>
                      @endif
                      <div class="price"><sup>&euro;</sup>{{ $recordP->price }}</div>
                    </li>
                  @endforeach

                  @if ($prehistory_pdf !== null)
                    <li>
                      <a href="{{ route('downloadPDF', ['pdf' => $prehistory_pdf->id]) }}"><i class="fa fa-eye" aria-hidden="true"></i> PDF</a>
                    </li>
                  @endif

                </ul>
              </article>
            </div>

          </div>
        </div>

        <div id="labSecondRow">
          <div class="row">

            <div class="col">
              <article>
                <img src="img/laboratori - main/2.jpg" alt="">
              </article>
            </div>

            <div class="col">
              <article>
                <h2>Le nostre tradizioni</h2>
                <ul class="restaurant-menu">
                  
                    @foreach ($traditions as $recordT)
                      <li>
                          @if ($recordT->articles->count())
                            <a href="{{ route('workshop', ['category' => $recordT->id]) }}" target="_blank">
                              <h5>{{ $recordT->title }}</h5>
                            </a>
                          @else
                            <h5>{{ $recordT->title }}</h5>
                          @endif
                        <div class="price"><sup>&euro;</sup>{{ $recordT->price }}</div>
                      </li>
                    @endforeach

                    @if ($traditions_pdf !== null)
                      <li>
                        <a href="{{ route('downloadPDF', ['pdf' => $traditions_pdf->id]) }}"><i class="fa fa-eye" aria-hidden="true"></i> PDF</a>
                      </li>
                    @endif

                </ul>
              </article>
            </div>

          </div>
        </div>

        <div id="labThirdRow">
          <div class="row">

            <div class="col">
              <article>
                <img src="img/laboratori - main/3.jpg" alt="">
              </article>
            </div>

            <div class="col">
              <article>
                <h2>Baby</h2>
                <p>Consigliato per Asili Nido, Materne e scuola Primaria (dai 18 mesi agli 8 anni)</p>
                <ul class="restaurant-menu">
                  
                    @foreach ($baby as $recordB)
                      <li>
                          @if ($recordB->articles->count())
                            <a href="{{ route('workshop', ['category' => $recordB->id]) }}" target="_blank">
                              <h5>{{ $recordB->title }}</h5>
                            </a>
                          @else
                            <h5>{{ $recordB->title }}</h5>
                          @endif
                        <div class="price"><sup>&euro;</sup>{{ $recordB->price }}</div>
                      </li>
                    @endforeach

                    @if ($baby_pdf !== null)
                      <li>
                        <a href="{{ route('downloadPDF', ['pdf' => $baby_pdf->id]) }}"><i class="fa fa-eye" aria-hidden="true"></i> PDF</a>
                      </li>
                    @endif

                </ul>
              </article>
            </div>

          </div>
        </div>

      </section>
    </div>

  </div>

  <!-- KRAJ LABORATORI -->
  <!-- KRAJ LABORATORI -->
  <!-- KRAJ LABORATORI -->


  <!-- PREZI -->
  <!-- PREZI -->
  <!-- PREZI -->

  <div id="prezi" class="helper">

    <div class="container">
      <h1>Info &amp; prezzi</h1>

      <section>

        <div class="row">

          <div class="col">
            <article>
              
              {!! $info->text !!}

            </article>
          </div>

        </div>
      </section>

    </div>
  </div>

  <!-- KRAJ PREZI -->
  <!-- KRAJ PREZI -->
  <!-- KRAJ PREZI -->


  <!-- PRANZO -->
  <!-- PRANZO -->
  <!-- PRANZO -->

  <div id="pranzo" class="helper">

    <div class="container">
      <h1>Pranzo</h1>

      <section>

        <div class="row">

          <div class="col">
            <article>

              {!! $lunch_text->data !!}

              @foreach ($lunch_images as $image)
                <img src="{{ asset($image->data) }}" alt="">
              @endforeach

            </article>
          </div>

        </div>
      </section>

    </div>

  </div>

  <!-- KRAJ PRANZO -->
  <!-- KRAJ PRANZO -->
  <!-- KRAJ PRANZO -->


  <!-- PARTNER -->
  <!-- PARTNER -->
  <!-- PARTNER -->

  <div id="partner" class="helper">

    <div class="container">
      <h1>Partner</h1>

      <section>

        <div class="row">

          @foreach ($partners as $partner)
            <div class="col">
              <article>
                <a href="{{ $partner->website }}" target="_blank">
                  <img src="{{ asset($partner->image_path) }}" alt="{{ asset($partner->image_path) }}">
                  {{ $partner->name }}
                </a>
              </article>
            </div>
          @endforeach

        </div>
      </section>

    </div>

  </div>

  <!-- KRAJ PARTNER -->
  <!-- KRAJ PARTNER -->
  <!-- KRAJ PARTNER -->



  <!-- CONTATTI -->
  <!-- CONTATTI-->
  <!-- CONTATTI -->

  <div id="contatti" class="helper">

    <div class="container">
      <h1>Contatti</h1>

      <section>

        <div class="row">

          <div class="col">
            <h2>Posizione</h2>
            <article>
              <address>
                coordinate: GPS <br>N. 39.92763 - E. 8.45679
              </address>

              <p>Villaggio Sa Ruda - Tel: 3280173379</p>
              <p>Sito web: www.villaggiosaruda.it </p>
              <p>e-mail: info@villaggiosaruda.it </p>
              <p>P.IVA: 007 279 609 57</p><br>
              <div class="showmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1798903.0874074548!2d8.717507458732618!3d40.34176205852064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12dd75db529331bb%3A0xaa680463b7502ae2!2sAgriturismo+Sa+Ruda+-+Villaggio+Sa+Ruda!5e0!3m2!1sen!2srs!4v1549365176892"
                  frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>

            </article>
          </div>


          <div class="col">
            <h2>Vieni a trovarci</h2>
            <article>

              <section class="get-in-touch">
                <form method="post" action="{{ route('contact') }}" id="contactForm">
                  @csrf
                  <fieldset class="form-group">
                    <input type="text" name="name" class="form-control focus input" data-label="Name" id="name" placeholder="Nome">
                    <span></span>
                  </fieldset>
                  <fieldset class="form-group">
                    <input type="text" name="email" class="form-control focus input" data-label="Email" id="email" placeholder="Email">
                    <span></span>
                  </fieldset>
                  <fieldset class="form-group">
                    <input type="text" name="phone" class="form-control focus input" data-label="Phone Number" id="phone" placeholder="Telefono">
                    <span></span>
                  </fieldset>
                  <fieldset class="form-group">
                    <textarea class="form-control focus input" name="message" data-label="Message" id="message" placeholder="Messaggio" rows="4"></textarea>
                    <span></span>
                  </fieldset>
                  <p>N.B.: gli operatori si riservano la possibilità  di modificare l'ordine cronologico delle attività previste nel programma per per una migliore organizzazione della giornata.</p>
                  <button type="submit" class="btn form-control">Invia</button>
                </form>
                <a href="https://www.facebook.com/villaggioneoliticosaruda/" target="_blank">
                  <i class="fa fa-facebook-official" aria-hidden="true"></i>
                </a>
              </section>

            </article>
          </div>

        </div>
      </section>

    </div>

    <div class="workedBy">
      <p>COPYRIGHT &copy; 2019 ALL RIGHTS RESERVED. <br>WEBMASTER: <a href="http://www.webtory.rs/">WEBTORY</a></p>
    </div>
  </div>


  <!-- KRAJ VIDEO -->
  <!-- KRAJ VIDEO -->
  <!-- KRAJ VIDEO -->



  <div id="finish"></div>


<!-- SCRIPT --><!-- SCRIPT --><!-- SCRIPT -->
<!-- SCRIPT --><!-- SCRIPT --><!-- SCRIPT -->
<!-- SCRIPT --><!-- SCRIPT --><!-- SCRIPT -->

  <script src="js/navigation.js"></script>
  <script>
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 2000);
            return false;
          }
        }
      });
    });
  </script>

  <script src="{{ asset('js/readMoreLink.js') }}"></script>

  <script src="{{ asset('js/slider/jquery.cbpFWSlider.min.js') }}"></script>
  <script src="{{ asset('js/slider/modernizr.custom.js') }}"></script>
  <script src="{{ asset('js/slider/jquery.cbpFWSlider.js') }}"></script>
  <script src="{{ asset('js/slider/arrows.js') }}"></script>
  <script src="{{ asset('js/gallery/grid-gallery.min.js') }}"></script>
  <script src="{{ asset('js/laboratori.js') }}"></script>
  <script src="{{ asset('js/gallery/dotgallery.js') }}"></script>
  <script src="{{ asset('js/gallery/dotgallerycolor.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.all.min.js"></script>

  <script>
      $(function () {
          $('#contactForm').submit(function (e) {
              e.preventDefault();
              var form = $(this);
              var formData = form.serialize();
              var url = form.attr('action');
              var submitButton = form.find('button');
              submitButton.attr('disabled', true);

              $.ajax({
                  url: url,
                  data: formData,
                  method: 'post',
                  success: function (response) {
                      // empty all previous errors 
                      $('.has-error').removeClass('.has-error').text('');
                      var errors = response.errors;

                      if ($.isEmptyObject(errors)) {
                          location.reload();
                      } else {
                          submitButton.attr('disabled', false);
                          // print the errors
                          $.each(errors, function (key, val) {
                              var input = form.find('[name="'+ key +'"]');
                              input.next().addClass('has-error').text(val[0]);
                          });
                      }
                  },

                  errors: function() {
                      location.reload();
                  }
              });
          });

          @if(Session::has('success'))
            swal(
              'Finito!',
              '{{ Session::get('success') }}',
              'success'
            );
          @elseif(Session::has('error'))
            swal(
              'Errore!',
              '{{ Session::get('error') }}',
              'error'
            );
          @endif
      });
  </script>

</body>
</html>
