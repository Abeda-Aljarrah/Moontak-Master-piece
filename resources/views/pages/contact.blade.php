@extends('layout.master')
@section('title', 'Contact Us')

@section('css')
    <link href="{{ asset('CSS/contact.css') }}" rel="stylesheet" />
@endsection

@section('js')
@endsection


  @section('content')

  <div
      class="jumbotron jumbotron-bg text-center rounded-0"
      style="
        background-image: url('../image/contact-us/christin-hume-Hcfwew744z4-unsplash-modified.jpg');
      "
    >
      <div class="container">
        <h1 class="pt-5">Contact Us</h1>
      </div>
    </div>
    <div class="form-container">
      <div class="form">
        <h1>Write <span>HERE!</span></h1>
        <form action="">
          <div class="name">
            <label for="">Name</label>
            <input type="text" required />
          </div>
          <div class="email">
            <label for="">E-mail</label>
            <input type="email" required />
          </div>
          <div class="phone">
            <label for="">Phone Number</label>
            <input type="tel" required />
          </div>
          <div class="pass">
            <label for="">Notes</label>
            <textarea></textarea>
          </div>
          <div>
            <button type="submit">Send</button>
          </div>
        </form>
      </div>

      <div class="contact">
        <div class="direct-contact-container">
          <ul class="contact-list">
            <li class="list-item">
              <i class="fas fa-map-marker fa-2x"><span class="contact-text place"><a href="#">Irbid, Jordan</a></span></i>
            </li>
            <i class="fa-solid fa-location-dot"></i>

            <li class="list-item">
                <i class="fas fa-solid fa-phone fa-2x"><span class="contact-text place"><a href="#">0798244236</a></span></i>
            </li>
            <li class="list-item">
                <i class="fas fa fa-envelope fa-2x"><span class="contact-text place"><a href="#">abeda.aljarrah@gmail.com</a></span></i>
            </li>
          </ul>

          <hr />
          <ul class="social-media-list">
            <li>
              <a href="#" target="_blank" class="contact-icon">
                <i class="fab fa-github" aria-hidden="true"></i
              ></a>
            </li>
            <li>
              <a href="#" target="_blank" class="contact-icon">
                <i class="fab fa-facebook" aria-hidden="true"></i
              ></a>
            </li>
            <li>
              <a href="#" target="_blank" class="contact-icon">
                <i class="fab fa-twitter" aria-hidden="true"></i
              ></a>
            </li>
            <li>
              <a href="#" target="_blank" class="contact-icon">
                <i class="fab fa-instagram" aria-hidden="true"></i
              ></a>
            </li>
          </ul>
          <hr />

        </div>
      </div>
    </div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53808.149738058135!2d35.80620986640089!3d32.55259548014528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c76916dac0453%3A0x5416e113d81f7d82!2sIrbid!5e0!3m2!1sen!2sjo!4v1693435321181!5m2!1sen!2sjo" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div class="FAQS">
      <section class="faq-section">
        <div class="container">
          <div class="row">
            <!-- ***** FAQ Start ***** -->
            <div class="col-md-6 offset-md-3">
              <div class="faq-title text-center pb-3">
                <h2>FAQ</h2>
              </div>
            </div>
            <div class="col-md-6 offset-md-3">
              <div class="faq" id="accordion">
                <div class="card">
                  <div class="card-header" id="faqHeading-1">
                    <div class="mb-0">
                      <h5
                        class="faq-title"
                        data-toggle="collapse"
                        data-target="#faqCollapse-1"
                        data-aria-expanded="true"
                        data-aria-controls="faqCollapse-1"
                      >
                        <span class="badge">1</span>What is Moontak?
                      </h5>
                    </div>
                  </div>
                  <div
                    id="faqCollapse-1"
                    class="collapse"
                    aria-labelledby="faqHeading-1"
                    data-parent="#accordion"
                  >
                    <div class="card-body">
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="faqHeading-2">
                    <div class="mb-0">
                      <h5
                        class="faq-title"
                        data-toggle="collapse"
                        data-target="#faqCollapse-2"
                        data-aria-expanded="false"
                        data-aria-controls="faqCollapse-2"
                      >
                        <span class="badge">2</span> Where does it come from?
                      </h5>
                    </div>
                  </div>
                  <div
                    id="faqCollapse-2"
                    class="collapse"
                    aria-labelledby="faqHeading-2"
                    data-parent="#accordion"
                  >
                    <div class="card-body">
                      <p>
                        Contrary to popular belief, Lorem Ipsum is not simply
                        random text. It has roots in a piece of classical Latin
                        literature from 45 BC, making it over 2000 years old.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="faqHeading-3">
                    <div class="mb-0">
                      <h5
                        class="faq-title"
                        data-toggle="collapse"
                        data-target="#faqCollapse-3"
                        data-aria-expanded="false"
                        data-aria-controls="faqCollapse-3"
                      >
                        <span class="badge">3</span>Why do we use it?
                      </h5>
                    </div>
                  </div>
                  <div
                    id="faqCollapse-3"
                    class="collapse"
                    aria-labelledby="faqHeading-3"
                    data-parent="#accordion"
                  >
                    <div class="card-body">
                      <p>
                        It is a long established fact that a reader will be
                        distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem Ipsum is
                        that it has a more-or-less normal distribution of
                        letters, as opposed to using 'Content here, content
                        here.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="faqHeading-4">
                    <div class="mb-0">
                      <h5
                        class="faq-title"
                        data-toggle="collapse"
                        data-target="#faqCollapse-4"
                        data-aria-expanded="false"
                        data-aria-controls="faqCollapse-4"
                      >
                        <span class="badge">4</span> Where can I get some?
                      </h5>
                    </div>
                  </div>
                  <div
                    id="faqCollapse-4"
                    class="collapse"
                    aria-labelledby="faqHeading-4"
                    data-parent="#accordion"
                  >
                    <div class="card-body">
                      <p>
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which
                        don't look even slightly believable.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="faqHeading-5">
                    <div class="mb-0">
                      <h5
                        class="faq-title"
                        data-toggle="collapse"
                        data-target="#faqCollapse-5"
                        data-aria-expanded="false"
                        data-aria-controls="faqCollapse-5"
                      >
                        <span class="badge">5</span> What is the available plans?
                      </h5>
                    </div>
                  </div>
                  <div
                    id="faqCollapse-5"
                    class="collapse"
                    aria-labelledby="faqHeading-5"
                    data-parent="#accordion"
                  >
                    <div class="card-body">
                      <p>
                        It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the
                        release of Letraset sheets containing
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="faqHeading-6">
                    <div class="mb-0">
                      <h5
                        class="faq-title"
                        data-toggle="collapse"
                        data-target="#faqCollapse-6"
                        data-aria-expanded="false"
                        data-aria-controls="faqCollapse-6"
                      >
                        <span class="badge">6</span> Where does it come from?
                      </h5>
                    </div>
                  </div>
                  <div
                    id="faqCollapse-6"
                    class="collapse"
                    aria-labelledby="faqHeading-6"
                    data-parent="#accordion"
                  >
                    <div class="card-body">
                      <p>
                        The standard chunk of Lorem Ipsum used since the 1500s
                        is reproduced below for those interested. Sections
                        1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"
                        by Cicero are also reproduced in their exact original
                        form, accompanied by English versions from the 1914
                        translation by H. Rackham.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="faqHeading-7">
                    <div class="mb-0">
                      <h5
                        class="faq-title"
                        data-toggle="collapse"
                        data-target="#faqCollapse-7"
                        data-aria-expanded="false"
                        data-aria-controls="faqCollapse-7"
                      >
                        <span class="badge">7</span> Why do we use it?
                      </h5>
                    </div>
                  </div>
                  <div
                    id="faqCollapse-7"
                    class="collapse"
                    aria-labelledby="faqHeading-7"
                    data-parent="#accordion"
                  >
                    <div class="card-body">
                      <p>
                        Many desktop publishing packages and web page editors
                        now use Lorem Ipsum as their default model text, and a
                        search for 'lorem ipsum' will uncover many web sites
                        still in their infancy. Various versions have evolved
                        over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    @endsection
