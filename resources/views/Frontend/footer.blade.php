<!-- ভর্তি section -->
      <section class="probootstrap-cta">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">এখনই আপনার ভর্তি নিশ্চিত করুন</h2>

                      <button type="button" class="btn btn-outline-dark btn-primary" data-toggle="modal" data-target="#admissionModal">
                          ভর্তি ফর্ম
                      </button>

                      <!-- Modal শুরু -->
                      <div class="modal fade" id="admissionModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px;">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="modalTitle"><h4 class="text-danger"><b>শিক্ষার্থী ভর্তি ফর্ম</b></h4></h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <form id="admissionForm" action="{{ route('enroll.store') }}" method="POST" enctype="multipart/form-data">
                                          @csrf  

                                          <div class="form-group">
                                              <label for="name" style="color: #333; font-weight: 600;">শিক্ষার্থীর নাম</label>
                                              <input type="text" class="form-control" id="name" name="name" required>
                                          </div>

                                          <div class="form-group">
                                              <label for="class_want_to_admission" style="color: #333; font-weight: 600;">যে ক্লাসে ভর্তি হতে ইচ্ছুক</label>
                                              <input type="text" class="form-control" id="class_want_to_admission" name="class_want_to_admission" required>
                                          </div>

                                          <div class="form-group">
                                              <label for="father_name" style="color: #333; font-weight: 600;">বাবার নাম</label>
                                              <input type="text" class="form-control" id="father_name" name="father_name" required>
                                          </div>

                                          <div class="form-group">
                                              <label for="mother_name" style="color: #333; font-weight: 600;">মায়ের নাম</label>
                                              <input type="text" class="form-control" id="mother_name" name="mother_name" required>
                                          </div>

                                          <div class="form-group">
                                              <label for="date_of_birth" style="color: #333; font-weight: 600;">জন্ম তারিখ</label>
                                              <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                                          </div>

                                          <div class="form-group">
                                              <label for="address" style="color: #333; font-weight: 600;">ঠিকানা</label>
                                              <input type="text" class="form-control" id="address" name="address" required>
                                          </div>

                                          <div class="form-group">
                                              <label for="phone_number" style="color: #333; font-weight: 600;">ফোন নাম্বার</label>
                                              <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                                          </div>

                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-danger" data-dismiss="modal">কেনসেল করুন</button>
                                              <button type="submit" class="btn btn-success">ফর্ম জমা দিন</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div> <!-- Modal শেষ -->
                  </div>
              </div>
          </div>
      </section>


      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>স্কুল সম্পর্কে</h3>
                <p>নিবরাস একটি আধুনিক মান সম্মত ইসলামি শরিয়াহ মোতাবেক স্কুল। এখানে ইলমে দ্বীন এবং প্রচলিত ধারার শিক্ষা দুটুই শিক্ষা দেয়া হয়। আমাদের আছেন অভিজ্ঞ শিক্ষক, যারা হাতে ধরে আমাদের প্রিয় শিক্ষার্থীদের পাঠদান করে থাকেন।</p>

                <h3>সামাজিক মাধ্যম ফেসবুকে আমরা</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="https://www.facebook.com/profile.php?id=100064261863518" target="__blank"><i class="icon-facebook mt-3"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>গুরুত্বপূর্ণ লিঙ্ক</h3>
                <ul>
                  <li><a href="#">হোম</a></li>
                  <li><a href="#">শিক্ষকসমূহ</a></li>
                  <li><a href="#">নোটিশ</a></li>
                  <li><a href="#">ইভেন্ট'স</a></li>
                  <li><a href="#">যোগাযোগ</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>যোগাযোগ করুন</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>কাশিপুর ঢালীবাড়ি সংলগ্ন, কাশীপুর, ফতুল্লা, নারায়নগঞ্জ</span></li>
                  <li><i class="icon-mail"></i><span style="font-family: sans serif"><b>nibrasschool2024@gmail.com</b></span></li>
                  <li><i class="icon-phone2"></i><span>+8801780-711678</span></li>
                </ul>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2025 <a href="#">নিবরাস স্কুল</a>. সকল সত্ত্ব সংরক্ষিত. ডিজাইন &amp; ডেভেলোপ করেছেন  <a href="https://www.facebook.com/shahidulislam.khan.9279" target="__blank">Shahidul Islam Shovon</a></p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">উপরে যান <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>

<!-- Bootstrap এবং Owl Carousel এর জন্য প্রয়োজনীয় JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- কাস্টম স্ক্রিপ্ট -->
<script src="{{asset('frontend/js/scripts.min.js')}}"></script>
<script src="{{asset('frontend/js/main.min.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>

<script>
    $(document).ready(function () {
        $('#owl1, #owl2').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });

        // ভর্তি ফর্ম সাবমিশন হ্যান্ডলিং
        $("#admissionForm").submit(function (event) {
            event.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    Swal.fire({
                        title: "সফল হয়েছে!",
                        text: "আপনার ভর্তি আবেদন সফলভাবে জমা হয়েছে!",
                        icon: "success",
                        confirmButtonText: "ঠিক আছে",
                    });

                    $("#admissionModal").modal("hide");
                    $("#admissionForm")[0].reset();
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        title: "❌ ত্রুটি!",
                        text: "কিছু সমস্যা হয়েছে। আবার চেষ্টা করুন।",
                        icon: "error",
                        confirmButtonText: "ঠিক আছে",
                    });
                }
            });
        });
    });
</script>

</body>
</html>